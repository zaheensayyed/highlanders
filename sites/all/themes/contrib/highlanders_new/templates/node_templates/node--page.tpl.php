<?php
$body = field_get_items('node',$node, 'body');
?>
<?php if ($teaser): ?>
	<?php exit('234');?>
<?php endif ?>

<div class="node-fulldisplay">
	<h2><?php echo $node->title ?></h2>
	<div>
		<!--Body here-->
		<?php 
		if($body[0]['safe_value']){
			echo $body[0]['safe_value'];	
		}
		?>
	</div>
</div>