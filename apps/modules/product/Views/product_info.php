<div class="col-md-5 col-sm-12 col-12 center">
	<div class="col-12">
		<h2><?php echo $product->name;?></h2>
	</div>
	<div class="col-12">
		product by <?php echo $product->brand;?>
	</div>
	
	<div class="col-12" style="padding-top: 10px;">
		<h3 class="final_price">$<?php echo $product->discountPrice;?></h3>
		<span class="display-block">Discount <?php echo $product->discountPercent;?></span>
		<span class="display-block">Usual Price $<?php echo $product->price;?></span>
	</div>
	<div style="padding-top: 10px;">
	<?php if (isset($product->optionsList)){
			foreach($product->optionsList as $options){?>
			<div class="col-12">
				<span class="display-block productOptionName"><?php echo $options->name; ?></span>
				<?php if (isset($options) && isset($options->options)){?>
					<ul class="list-inline">
						<?php foreach ($options->options as $option){ ?>
							<li class="list-inline-item"><a href="#">
								<div class="<?php if (true){ echo 'selectedProductOption';}?>">
									<img width="53" height="53" alt="<?php echo $option->name; ?>" src="<?php echo $option->src; ?>">
								</div>
								</a>
							</li>
						<?php }?>
					</ul>
				<?php }?>
			</div>
	<?php }}?>
	</div>
</div>