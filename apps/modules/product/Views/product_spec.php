<div class="col-12" style="margin-top: 40px;">
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
	  <div class="tab-pane active" id="info" role="tabpanel"><?php echo $productSpec->product_info; ?></div>
	  <div class="tab-pane" id="review" role="tabpanel"><?php echo $productSpec->review; ?></div>
	  <div class="tab-pane" id="qna" role="tabpanel"><?php echo $productSpec->qna; ?></div>
	  <div class="tab-pane" id="delivery" role="tabpanel"><?php echo $productSpec->delivery_info; ?></div>
	</div>
</div>
