<div id="category_sort_wrap" class="col-md-12">
<?php 
if(isset($sorts)){
	?>
	<span style="display:inline-block">Sort by:</span>
	<ul id="category_sort_ul" class="list-inline">
	<?php 
	foreach ($sorts as $sort){
		?>
		<li class="list-inline-item"><a href="<?php echo $sort->href; ?>"><span class="<?php if($sort->isActive == true){echo 'active';}?>"><?php echo $sort->name;?></span></a>|</li>
		<?php
	}
	?>
	</ul>
	<?php 
}
?>
</div>