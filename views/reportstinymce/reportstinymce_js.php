<?php
/**
 * Reports TinyMCE view
 *
 * PHP version 5
 * @author     John Etherton <john@ethertontech.com>
 * @package    Reorts TinyMCE
 */
?>

<script type="text/javascript" src="<?php echo url::base(); ?>/media/js/tinymce/tiny_mce.js"></script>

<script type="text/javascript" charset="utf-8">
// Initialize tinyMCE Wysiwyg Editor
tinyMCE.init({
	mode : "exact",
	elements : "incident_description",
	theme : "advanced",
	theme_advanced_buttons1 : "mybutton,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink,code",
	theme_advanced_buttons2 : "outdent,indent,blockquote,|,undo,redo,|,link,unlink,image,code,|,forecolor,backcolor,|,cut,copy,paste,pastetext,pasteword,|,hr,visualaid,|,sub,sup",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	toolbar_location : "top",
	height:"400px",
	width:"<?php echo $width;?>px",
	encoding : "xml",
	entity_encoding : "named",
	extended_valid_elements : "iframe[src|width|height|name|align|frameborder|scrolling]"
});
</script>