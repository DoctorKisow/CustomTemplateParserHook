# Custom Template Parser Hook

**CustomTemplateParserHook** - Translation properties for custom MediaWiki templates.  
Matthew R. Kisow, D.Sc. <matthew.kisow@kisow.org>  
Copyright &copy; Kisow Foundation, Inc.&reg; 2015-2017.  

# CustomTemplateParserHook
A custom parser hook function for the "#msg" hook, which is used for the language translation of the template type (Code, File, etc.).  Used in the custom templates: code, file, important, kernel, note, tip and warning.

## Install the CustomTemplateParserHook extension
1. From your MediaWiki extensions directory clone the _CustomTemplateParserHook_ from this repository by typing:  
   `mkdir -p /var/www/wiki.example.com/extensions/CustomTemplateParserHook`  
   `cd /var/www/wiki.example.com/extensions/CustomTemplateParserHook`  
   `git clone https://github.com/DoctorKisow/CustomTemplateParserHook.git`
2. In your MediaWiki **LocalSettings.php** configuration add the following line(s) at the end of the file:
   _wfLoadExtension( 'CustomTemplateParserHook' );_
