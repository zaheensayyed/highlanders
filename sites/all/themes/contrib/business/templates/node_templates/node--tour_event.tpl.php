<?php
//echo '<pre>';
//print_r($field_tour_banner);

//exit;
$img_url = $node->field_tour_banner['und'][0]['uri'];
?>


<div>
<!--Image here-->
<img src="<?php print image_style_url("tour_banner", $img_url);?>" alt="<?php echo $title?>" title="<?php echo $title?>">
</div>

<div>
<br>
<!--Body here-->
<?php 
if($body[0]['value']){
	echo $body[0]['value'];	
}
?>
</div>