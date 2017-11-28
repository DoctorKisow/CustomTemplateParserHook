# Custom Template Parser Hook

**CustomTemplateParserHook** - Translation properties for custom MediaWiki templates.  
Matthew R. Kisow, D.Sc. <matthew.kisow@kisow.org>  
Copyright &copy; Kisow Foundation, Inc.&reg; 2015-2017.  

The CustomTemplateParserHook is a MediaWiki semantic hook extension that is based in part on the _Gentoo Toolbox: Translation Properties_ semantic hook extension by Alex Legler.  

# CustomTemplateParserHook
A custom semantic hook function for the semantic message hook _#msg_.  This is used for the language translation of the custom MediaWiki template(s), (code, file, important, kernel, note, tip and warning).

## Install the CustomTemplateParserHook extension
1. From your MediaWiki extensions directory clone the _CustomTemplateParserHook_ from this repository by typing:  
   `mkdir -p /var/www/wiki.example.com/extensions/CustomTemplateParserHook`  
   `cd /var/www/wiki.example.com/extensions/CustomTemplateParserHook`  
   `git clone https://github.com/DoctorKisow/CustomTemplateParserHook.git`
2. In your MediaWiki **LocalSettings.php** configuration add the following line(s) at the end of the file:
   _wfLoadExtension( 'CustomTemplateParserHook' );_
