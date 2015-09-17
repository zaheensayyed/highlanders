<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */

$title = $row->node_title;
$img_url = $row->_field_data['nid']['entity']->field_tour_banner['und'][0]['uri'];
?>
<div class="myview-img-thumb">
	<a href="/<?php echo drupal_get_path_alias("node/7")?>" title="<?php echo $title?>" alt="<?php echo $title?>">
		<img src="<?php print image_style_url("tour_banner_thumb", $img_url);?>" 
				alt="<?php echo $title?>" title="<?php echo $title?>">
	</a>
</div>