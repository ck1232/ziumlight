<div class="col-12">
	<div class="center">
		<h3>Other Products</h3>
	</div>
	<div class="row">
	<?php 
	if(isset($similarProduct)){
		foreach($similarProduct as $item){
		?>
		<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 product_list_item">
			<a href="<?php echo $item->href;?>">
				<div class="product_image">
					<img alt="<?php $item->name; ?>" src="<?php echo $item->img;?>" class="img-responsive col-12">
				</div>
				
				<div class="product_desc col-12">
					<div class="product_caption col-12 no-left-padding">
						<h3><?php  echo $item->name; ?></h3>
					</div>
					<?php  if(isset($item->price)){?>
					<div class="product_price col-12 no-left-padding">
						<span class="amount">
						<?php 
							if(isset($item->discount_price)){
								?>
								<del>
									$<?php echo $item->price;?>
								</del>
								<ins>
									$<?php echo $item->discount_price;?>
								</ins>
								<?php
							}else{
								echo '$'.$item->price;
							}
						?>
						</span>
					</div>
					<?php } ?>
					<div class="product_info col-12">
						
					</div>
				</div>
			</a>
		</div>
		<?php 
		}
	}
	?>
	</div>
</div>