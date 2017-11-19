<?php
	if(isset($breadcrumb)){
?>
<ul class="breadcrumb">
<?php
	foreach($breadcrumb as $crumb){
		?>
		<li class="breadcrumb-item">
			<?php if(isset($crumb->href)){?>
				<a href="<?php echo $crumb->href;?>">
			<?php }?>
			
				<?php if($crumb->isIcon == true){
					?>
					<i class="<?php echo $crumb->text; ?>"></i>
					<?php
				}else{
					echo $crumb->text;
				}
				?>
				
			<?php if(isset($crumb->href)){?>	
				</a>
			<?php } ?>
		</li>
		<?php
	}
?>
</ul>
<?php
	}
  ?>


