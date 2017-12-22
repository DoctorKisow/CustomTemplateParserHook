# Custom Template Parser Hook
**CustomTemplateParserHook** - Translation properties for custom MediaWiki templates.  
Matthew R. Kisow, D.Sc. <matthew.kisow@kisow.org>  
Copyright &copy; Kisow Foundation, Inc.&reg; 2015-2017.  

## Getting Started
The CustomTemplateParserHook is a MediaWiki semantic hook extension that is based in part on the _Gentoo Toolbox: Translation Properties_ semantic hook extension by Alex Legler.  

A custom semantic hook function for the semantic message hook _#msg_.  This is used for the language translation of the custom MediaWiki template(s), (code, file, important, kernel, note, tip and warning).

## Installation
1. From your MediaWiki extensions directory clone the _CustomTemplateParserHook_ from this repository by typing:
```shell
     mkdir -p /var/www/wiki.example.com/extensions/CustomTemplateParserHook  
     cd /var/www/wiki.example.com/extensions/CustomTemplateParserHook  
     git clone https://github.com/DoctorKisow/CustomTemplateParserHook.git
```

2. In your MediaWiki **LocalSettings.php** configuration add the following line(s) at the end of the file:
```shell
        wfLoadExtension( 'CustomTemplateParserHook' );
```

## License
License (GPL v3.0)

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.

## Acknowledgments
**Custom Template Parser Hook** is based in part on the **Gentoo Toolbox: Translation properties** by Alex Legler.
