<?php

//print $body[0]['value'];
//print_r($node->content['body']['#value']);
$body = field_get_items('node',$node, 'body');
$img = field_get_items('node',$node, 'field_tour_banner');

/*echo '<pre>';
print_r($node->body);
exit;*/
//print_r($img);
$img_url = $node->field_tour_banner['und'][0]['uri'];
//exit;
?>

<?php if ($teaser){ ?>
	<?php if (drupal_is_front_page()): ?>
		<a class="portfolio-box" href="<?php echo $node_url ?>" title="<?php echo $title ?>" alt="<?php echo $title ?>">
            <img alt="" class="img-responsive" src="<?php print image_style_url("front_tour_event", $img_url);?>" alt="<?php echo $title?>" title="<?php echo $title?>">
            <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                    <div class="project-category text-faded">
                    	<p>
                    		<?php 
							if($body[0]['safe_value']){
								echo substr(strip_tags($body[0]['safe_value']), 0, 100).'...';
							}
							?>
                    	</p>
                    </div>
                    <div class="project-name">
                        <?php echo $node->title ?>
                    </div>
                </div>
            </div>
        </a>
    <?php else: ?>
    	<div class="node-teaser">
			<h2><?php echo $node->title ?></h2>
			<div class="node-banner">
				<!--Image here-->
				<img src="<?php print image_style_url("medium", $img_url);?>" 
						alt="<?php echo $title?>" title="<?php echo $title?>">
			</div>
			<span class="read-more"><a href="<?php echo $node_url ?>" title="<?php echo $title ?>" alt="<?php echo $title ?>">read more...</a></span>
		</div>
	<?php endif ?>
<?php } else {?>
<div class="node-fulldisplay">
	<h2><?php echo $node->title ?></h2>
	<div class="node-banner">
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