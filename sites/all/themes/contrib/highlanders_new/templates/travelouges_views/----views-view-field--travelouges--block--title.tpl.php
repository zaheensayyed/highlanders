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


?>
<a href="#" class="portfolio-box">
	<img src="img/portfolio/1.jpg" class="img-responsive" alt="">
	<div class="portfolio-box-caption">
	    <div class="portfolio-box-caption-content">
	        <div class="project-category text-faded">
	            
	        </div>
	        <div class="project-name">
	            <?php echo $field->original_value ?>
	        </div>
	    </div>
	</div>
</a>
<?php 
echo '<pre>';
print_r($field);
exit;

print $output; ?>