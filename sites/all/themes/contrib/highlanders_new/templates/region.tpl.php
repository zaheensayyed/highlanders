<?php 
if($region == 'upcoming_events'){
	print $content;
}
else{
?>
	<?php if (!empty($content)): ?>
	<div class="<?php print $classes; ?>">
	  <?php print $content; ?>
	</div>
	<?php endif; ?> <!-- /.region -->
<?php }?>
