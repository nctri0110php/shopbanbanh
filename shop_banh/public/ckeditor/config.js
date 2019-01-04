/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
        // config.filebrowserBrowseUrl = "http://shopbanh.localhost/public/ckfinder/ckfinder.html",
        // config.filebrowserImageBrowseUrl: 'http://shopbanh.localhost/public/ckfinder/ckfinder.html?type=Images',
        // config.filebrowserFlashBrowseUrl: 'http://shopbanh.localhost/public/ckfinder/ckfinder.html?type=Flash',
        // config.filebrowserUploadUrl = "http://shopbanh.localhost/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files",
        // config.filebrowserImageUploadUrl = "http://shopbanh.localhost/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images",
        // config.filebrowserFlashUploadUrl = "http://shopbanh.localhost/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash"
  

  config.filebrowserBrowseUrl = "http://shopbanh.localhost/public/ckfinder/ckfinder.html",
        config.filebrowserImageBrowseUrl = "http://shopbanh.localhost/public/ckfinder/ckfinder.html?type=Images",
        config.filebrowserFlashBrowseUrl = "http://shopbanh.localhost/public/ckfinder.html?type=Flash",
        config.filebrowserUploadUrl = "http://shopbanh.localhost/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files",
        config.filebrowserImageUploadUrl = "http://shopbanh.localhost/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images",
        config.filebrowserFlashUploadUrl = "http://shopbanh.localhost/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash"
// };
};
CKEDITOR.config.entities = false;
