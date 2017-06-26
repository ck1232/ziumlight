<div id="category_listing_wrap" class="col-lg-12">
<?php 
if(isset($category_listing)){
	foreach($category_listing as $item){
		?>
		<div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-12 product_list_item no-left-padding no-right-padding">
			<a href="<?php echo $item->href;?>">
				<div class="product_image">
					<img alt="<?php $item->name; ?>" src="<?php echo $item->image;?>" class="img-responsive col-12 no-left-padding">
				</div>
				
				<div class="product_desc no-left-padding col-12">
					<div class="no-left-padding product_caption col-12">
						<h3><?php  echo $item->name; ?></h3>
					</div>
					
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
								echo $item->price;
							}
						?>
						</span>
					</div>
					
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