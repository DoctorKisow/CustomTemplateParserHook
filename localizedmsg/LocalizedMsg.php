<?php
/**
  * Custom Template Parser Hook - Translation properties for custom MediaWiki templates.
  * Matthew R. Kisow, D.Sc. <matthew.kisow@kisow.org>
  * Copyright, Kisow Foundation, Inc. 2015-2017.
  **/

class GTBXLocalizedMsg {
	public static function SetUpLocalizedMsgParserFunction( &$parser ) {
		$parser->setFunctionHook( 'msg', 'GTBXLocalizedMsg::LocalizedMsgParserFunction' );

		return true;
	}

	public static function LocalizedMsgParserFunction( $parser, $message, $language = 'en' ) {
		$title = $parser->getTitle();
		$is_translation_page = !( TranslatablePage::isTranslationPage( $title ) === false );
		global $wgLanguageCode;
		$language_code = $wgLanguageCode;

		if ( $is_translation_page ) {
			list( , $code ) = TranslateUtils::figureMessage( $title->getText() );
			$language_code = $code;
		}

		return wfMessage( $message )->inLanguage( $language_code )->escaped();
	}
}
?>
