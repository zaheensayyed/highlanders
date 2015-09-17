<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
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
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
/*echo '<pre>'; 
	print_r($row->field_field_image[0]['raw']);
	exit;*/
	$image = $row->field_field_image[0]['raw']['uri'];
	$title = $row->node_title;
?>

<a href="#" class="portfolio-box">
	<img src="<?php print image_style_url("front_tour_event", $image);?>" alt="<?php echo $title?>" title="<?php echo $title?>" class="img-responsive" alt="">
	<div class="portfolio-box-caption">
	    <div class="portfolio-box-caption-content">
	        <div class="project-category text-faded">
	            
	        </div>
	        <div class="project-name">
	            <?php echo $row->node_title ?>
	        </div>
	    </div>
	</div>
</a>
<?php /*?>
<?php foreach ($fields as $id => $field): ?>
	<?php 
	echo '<pre>'; 
	print_r($field->raw);
	exit;

	?>
	<?php print $field->content; ?>
	<?php /*?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
  <?php print $field->wrapper_suffix; ?>
<?php endforeach; ?>
<?php */?>