<?php
	if(isset($breadcrumb)){
?>
<ul class="breadcrumb">
<?php
	foreach($breadcrumb as $crumb){
		?>
		<li class="breadcrumb-item">
			<a href="<?php echo $crumb->href;?>">
				<?php if($crumb->isIcon == true){
					?>
					<i class="<?php echo $crumb->text; ?>"></i>
					<?php
				}else{
					echo $crumb->text;
				}
				?>
				
				
			</a>
		</li>
		<?php
	}
?>
</ul>
<?php
	}
  ?>


