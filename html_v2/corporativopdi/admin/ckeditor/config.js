/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	CKEDITOR.config.fullPage = true;
	config.fullPage = true;
	
	CKEDITOR.config.forcePasteAsPlainText = true;
	config.forcePasteAsPlainText = true;
	
	CKEDITOR.config.allowedContent = true;	
	config.allowedContent = true;
	
	CKEDITOR.config.protectedSource.push( /<\?[\s\S]*?\?>/g );   // PHP Code
	config.protectedSource.push( /<\?[\s\S]*?\?>/g );   // PHP Code
	config.removeFormatAttributes = true;
	

		
	
};
