<?php echo modules::run("header"); ?>
<?php //echo modules::run("top_nav"); ?>
<?php //echo modules::run("menu"); ?>
<?php echo modules::run("menu2"); ?>
<div class="container">
	<?php $this->load->view($main_content); ?>
</div>
<?php echo modules::run("footer"); ?>