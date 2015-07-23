<?php
//echo '<pre>';

//print $body[0]['value'];
//print_r($node->content['body']['#value']);
$body = field_get_items('node',$node, 'body');
$img = field_get_items('node',$node, 'field_tour_banner');

/*print_r($node);
exit;*/
//print_r($img);
$img_url = $node->field_tour_banner['und'][0]['uri'];
//exit;
?>

<?php if ($teaser){ ?>
<div class="node-teaser">
	<h2><?php echo $node->title ?></h2>
	<div>
		<!--Image here-->
		<img src="<?php print image_style_url("medium", $img_url);?>" 
				alt="<?php echo $title?>" title="<?php echo $title?>">
	</div>
	<span class="read-more"><a href="<?php echo $node_url ?>" title="<?php echo $title ?>" alt="<?php echo $title ?>">read more...</a></span>
</div>
<?php } else {?>
<div class="node-fulldisplay">
	<h2><?php echo $node->title ?></h2>
	<div>
		<!--Image here-->
		<img src="<?php print image_style_url("tour_banner", $img_url);?>" 
				alt="<?php echo $title?>" title="<?php echo $title?>">
	</div>
	<div>
		<br>
		<!--Body here-->
		<?php 
		if($body[0]['safe_value']){
			echo $body[0]['safe_value'];	
		}
		?>
	</div>
</div>
<?php } ?>