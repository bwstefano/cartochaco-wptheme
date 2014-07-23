<?php
/* Tax meta
 * Requires tax-meta-class
 */

require_once(STYLESHEETPATH . '/inc/tax-meta-class/tax-meta-class.php');

$publisher_meta = new Tax_Meta_Class(array(
	'id' => 'publisher_meta',
	'title' => __('Publisher information', 'jeo'),
	'pages' => array('publisher'),
	'context' => 'normal',
	'fields' => array()
));

$publisher_meta->addText('publisher_url', array(
	'name' => __('Publisher url', 'jeo')
));

$publisher_meta->Finish();

?>
