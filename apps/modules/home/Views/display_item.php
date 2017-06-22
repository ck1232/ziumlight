<div class="display-block">
	<div class="categoryTitle">
		<h3 class="categoryTitleText">New Product</h3>
	</div>
	
	<div class="display-block">
		<div style="margin: 0 auto;display: table;">
		
		
		<?php 
			if(isset($categories_item)){
				foreach($categories_item as $item){
		?>
			<div class="display-inline-block categoryItemBox">
				<a href="<?php echo $item-> href;?>">
					<img alt="<?php echo $item-> name;?>" src="<?php echo $item-> img;?>" width="224px" height="163px">
					<div class="display-block categoryItem">
						<h4 class="categoryItemText"><?php echo $item-> name;?></h4>
					</div>
				</a>
			</div>
		<?php
				}
			}
		?>
	</div>
	</div>
</div>
