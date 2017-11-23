<?php
/**
  * Custom Template Parser Hook - Translation properties for custom MediaWiki templates.
  * Matthew R. Kisow, D.Sc. <matthew.kisow@kisow.org>
  * Copyright 2015-2017, Kisow Foundation, Inc.
  **/

class GTBXTranslationProperties {

	public static function setupProperties() {
		SMWDIProperty::registerProperty('___LANG', '_str', wfMessage('gtbx-prop-lang')->inContentLanguage()->text());
		SMWDIProperty::registerPropertyAlias('___LANG', 'Language');

		SMWDIProperty::registerProperty('___TRANS', '_boo', wfMessage('gtbx-prop-trans')->inContentLanguage()->text());
		SMWDIProperty::registerPropertyAlias('___TRANS', 'Is Translation Page');

		return true;
	}

	public function updateDataBefore($store, $data) {
		$subject = $data->getSubject();
		$title = Title::makeTitle($subject->getNamespace(), $subject->getDBKey());
		$wikipage = WikiPage::factory($title);

		if (is_null($title) || is_null($wikipage)) {
			return true;
		}

		// Property 1: Is the translation page.
		$property = new SMWDIProperty('___TRANS');
		$is_translation_page = !(TranslatablePage::isTranslationPage($title) === false);
		$data_item = new SMWDIBoolean($is_translation_page);

		$data->addPropertyObjectValue($property, $data_item);

		// Property 2: Is the language.
		$property = new SMWDIProperty('___LANG');
		global $wgLanguageCode;
		$language_code = $wgLanguageCode;

		if ($is_translation_page) {
			list( , $code ) = TranslateUtils::figureMessage( $title->getText() );
			$language_code = $code;
		}

		$data_item = new SMWDIString($language_code);

		$data->addPropertyObjectValue($property, $data_item);

	}
}
