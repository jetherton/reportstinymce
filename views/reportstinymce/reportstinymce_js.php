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
//Initialize tinyMCE Wysiwyg Editor
tinyMCE.init({
convert_urls : false,
relative_urls : false,
mode : "exact",
elements : "incident_description",
theme : "advanced",
plugins : "pagebreak,advhr,advimage,advlink,iespell,inlinepopups,contextmenu,paste,directionality,noneditable",
// Theme options
theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontselect,fontsizeselect",
theme_advanced_buttons2 : "outdent,indent,blockquote,|,undo,redo,|,link,unlink,image,code,|,forecolor,backcolor",
theme_advanced_buttons3 : "cut,copy,paste,pastetext,pasteword,|,hr,removeformat,visualaid,|,sub,sup,|,advhr,|,ltr,rtl",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left"
});
</script>