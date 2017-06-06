<?php echo modules::run("header"); ?>
<?php echo modules::run("top_nav"); ?>
<?php echo modules::run("menu"); ?>
<div class="container">
	<?php $this->load->view($main_content); ?>
</div>
<?php $this->load->view('includes/footer'); ?>