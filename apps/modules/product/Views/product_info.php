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
					<select class="image-picker">
						<?php foreach ($options->options as $option){ ?>
							<option value="<?php echo $option->name; ?>" data-img-src="<?php echo $option->src; ?>">
							<?php echo $option->name; ?>
							</option>
						<?php }?>
					</select>
				<?php }?>
			</div>
	<?php }}?>
	</div>
	
	<div class="col-12">
		<span class="display-block productOptionName">Quantity</span>
		<div class="input-group spinner">
	    	<input type="text" class="form-control" value="1" min="1" max="99">
		    <div class="input-group-btn-vertical">
		      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
		      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
		    </div>
  		</div>
	</div>
	
	<div class="col-12" style="padding-top: 10px;">
		<button>
			<span>Add to Cart</span>
		</button>
	</div>
</div>