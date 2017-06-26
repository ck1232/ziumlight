<div id="category_menu" class="col-lg-3 hidden-md-down no-left-padding">
	<div class="list-group">
		<?php
			if(isset($category_menu)){
				foreach($category_menu as $item){
					?>
					<a href="<?php echo $item->href; ?>" class="list-group-item <?php if($item->isActive == true){ echo 'active';} ?>"><?php echo $item->text;?></a>
					<?php
					if (isset($item->children)){
						foreach($item->children as $sub){
						?>
						<a href="<?php echo $sub->href; ?>" class="list-group-item <?php if($sub->isActive == true){ echo 'active';} ?>">&nbsp;&nbsp;&nbsp;-<?php echo $sub->text;?></a>
						<?php
						}
					}
				}
			}
			
		?>
	</div>
</div>
