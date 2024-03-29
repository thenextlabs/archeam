<?php
// $Id: views-view-fields--News--page-1.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields--News--page-1.tpl.php
 *  News List Page view template  to all the fields as a row. 
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<?php 
// Make class name from post type name

	$typeNameLower = ( strtolower (  $fields['name']->content ) );
	
	$typeName = str_replace(
	  array(' ', '.','/'), 
	  array('-', '-','-'), 
	  $typeNameLower
	);	
?>

<div class="news-item">
    <div class="date">
        <?php print $fields['field_date_debut_value']->content; ?> 
        <span>
			<?php print $fields['name']->content; ?>
        </span>
    </div>
    <div class="newslist-item">
    	<h2><?php print $fields['title']->content; ?></h2>
        <?php print $fields['field_lieu_value']->content; ?>
    </div>
</div>