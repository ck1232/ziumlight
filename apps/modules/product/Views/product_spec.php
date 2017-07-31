<div class="col-12" style="margin-top: 15px;">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" data-toggle="tab" href="#info" role="tab">Product Info</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#delivery" role="tab">Delivery Details</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#review" role="tab">Review</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="#qna" role="tab">Q&A</a>
	  </li>
	</ul>
	
	<!-- Tab panes -->
	<div class="tab-content">
	  <div class="tab-pane active" id="info" role="tabpanel"><?php echo $product->product_info; ?></div>
	  <div class="tab-pane" id="review" role="tabpanel"><?php echo $product->review; ?></div>
	  <div class="tab-pane" id="qna" role="tabpanel"><?php echo $product->qna; ?></div>
	  <div class="tab-pane" id="delivery" role="tabpanel"><?php echo $product->delivery_info; ?></div>
	</div>
</div>
