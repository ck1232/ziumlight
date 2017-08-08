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
			<div class="row">
				<div class="col-md-5">
					<span class="productOptionName autoLineHieght"><?php echo $options->name; ?></span>
				</div>
				
				<div class="col-md-7">
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
			</div>
	<?php }}?>
	</div>
	<div class="row">
		<div class="col-md-5" style="padding-top: 10px;">
			<span class="productOptionName autoLineHieght">Quantity</span>
		</div>
		<div class="col-md-7">
			<div class="input-group spinner qtyDiv">
		    	<input type="text" class="form-control" value="1" min="1" max="99">
			    <div class="input-group-btn-vertical">
			      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
			      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
			    </div>
	  		</div>
		</div>
	</div>
	<div class="row" style="height: 60px;">
		<div class="offset-2 col-8" style="padding-top: 10px;height: inherit">
			<button class="btn btn-block btn-lg btn-addToCart" data-loading-text="Loading..." style="height:inherit;">
				<span class="addToCartText"><b>ADD TO CART</b></span>
			</button>
		</div>
	</div>
</div>