<div class="col-md-5 col-sm-12 col-12 center">
	<div class="col-12">
		<h2><?php echo $productInfo->name;?></h2>
	</div>
	<!-- <div class="col-12">
		product by <?php echo $productInfo->brand;?>
	</div>
	 -->
	<div class="col-12" style="padding-top: 10px;">
		<h3 class="final_price">$<?php echo $productInfo->discountPrice;?></h3>
		<span class="display-block">Discount <?php echo $productInfo->discountPercent;?></span>
		<span class="display-block">Usual Price $<?php echo $productInfo->price;?></span>
	</div>
	<div style="padding-top: 10px;">
	<?php if (isset($productInfo->optionsList)){
			foreach($productInfo->optionsList as $options){?>
			<div class="row">
				<div class="col-md-5 col-sm-6 col-6">
					<span class="productOptionName autoLineHieght"><?php echo $options->name; ?></span>
				</div>
				
				<div class="col-md-7 col-sm-6 col-6 autoLineHieght">
					<?php if (isset($options) && isset($options->options)){?>
						<select class="productOptionName fullWidth">
							<?php foreach ($options->options as $option){ ?>
								<option value="<?php echo $option->name; ?>">
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
		<div class="col-md-5 col-sm-6 col-6">
			<span class="productOptionName autoLineHieght">Quantity</span>
		</div>
		<div class="col-md-7 col-sm-6 col-6">
			<div class="input-group spinner qtyDivPadding">
				<button class="btn" type="button"><i class="fa fa-plus"></i></button>
		    	<input type="text" class="form-control" value="1" min="1" max="20" style="width: 40px;">
			    <!-- <div class="input-group-btn-vertical">
			      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
			      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
			    </div> -->
			    <button class="btn" type="button"><i class="fa fa-minus"></i></button>
	  		</div>
		</div>
	</div>
	<div class="row" style="height: 60px;">
		<div class="offset-lg-3 col-lg-9 offset-md-2 col-md-10 offset-sm-1 col-sm-11 col-12" style="padding-top: 10px;height: 100%">
			<button class="btn btn-block btn-lg btn-addToCart" data-loading-text="Loading..." style="height:100%;">
				<span class="addToCartText"><b>ADD TO CART</b></span>
			</button>
		</div>
	</div>
</div>