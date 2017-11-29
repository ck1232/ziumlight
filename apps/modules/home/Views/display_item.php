<div class="display-block">
	<div class="categoryTitle">
		<h3 class="categoryTitleText">New Product</h3>
	</div>
	
	<div class="row">
		<?php 
			if(isset($new_item)){
				foreach($new_item as $item){
		?>
			<div class="categoryItemBox col-lg-3 col-md-3 col-sm-6 col-xs-12">
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
