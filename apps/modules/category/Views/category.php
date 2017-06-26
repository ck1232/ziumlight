<?php echo modules::run("category/breadcrumb"); ?>
<div class="row col-12">
<?php echo modules::run("category/category_menu"); ?>

<div id="category_content" class="col-md-8 col-sm-12 col-12">
	<?php if (isset($cards)){
		foreach ($cards as $card){
			?>
			<div class="row">
				<?php echo modules::run($card); ?>
			</div>
			<?php 
		}
	} ?>
</div>

</div>