<?php echo modules::run("template/header"); ?>
<?php //echo modules::run("top_nav"); ?>
<?php //echo modules::run("menu"); ?>
<?php echo modules::run("template/menu"); ?>
<a name="top"></a>
<div class="container" style="top:100px;">
	<div class="row">
		<div id="content" class="col-12">
			<?php $this->load->view($main_content); ?>
		</div>
	</div>
</div>

<?php echo modules::run("template/footer"); ?>
<?php echo modules::run("template/backToTop"); ?>

