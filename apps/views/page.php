<?php echo modules::run("header"); ?>
<?php //echo modules::run("top_nav"); ?>
<?php //echo modules::run("menu"); ?>
<?php echo modules::run("menu2"); ?>
<div class="container" style="top:100px;">
	<div class="row">
		<div id="content" class="col-sm-12">
			<?php $this->load->view($main_content); ?>
		</div>
	</div>
</div>
<?php echo modules::run("footer"); ?>