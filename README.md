# Custom Template Parser Hook - Translation properties for custom MediaWiki templates.
# Matthew R. Kisow, D.Sc. <matthew.kisow@kisow.org>
# Copyright 2015-2017, Kisow Foundation, Inc.
# Licensed under terms of the GPL-3.0

CustomTemplateParserHook
========================
A custom parser hook function for the "#msg" hook, which is used for the language
translation of the template type (Code, File, etc.).  Used in the custom
templates: code, file, important, kernel, note, tip and warning.

### History
Version 0.0.1 - Production Release

### Deployment
1. From your MediaWiki extensions directory clone CustomTemplateParserHook from
   https://github.com/DoctorKisow/CustomTemplateParserHook.git
2. In your LocalSettings.php add the following at the end:
   wfLoadExtension( 'CustomTemplateParserHook' );
