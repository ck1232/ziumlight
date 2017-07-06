<div class="col-md-7 col-sm-12 col-12">
	<div class="col-12">
		<div id="main_image" class="owl-carousel owl-theme">
			<?php 
				if(isset($image_list)){
					foreach($image_list as $image){
						?>
						<div class="item"><img src="<?php echo $image->src; ?>" alt="<?php echo $image->name; ?>"></div>
						<?php
					}
				}
			?>
		</div>
	</div>
	
	<div class="col-12">
		<div id="image_selection" class="owl-carousel owl-theme">
			<?php 
				if(isset($image_list)){
					foreach($image_list as $image){
						?>
						<div class="item"><img src="<?php echo $image->src; ?>" alt="<?php echo $image->name; ?>"></div>
						<?php
					}
				}
			?>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	 
	  $("#main_image").owlCarousel({
	      navigation : false, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true
	  });

	  $("#image_selection").owlCarousel({
	      navigation : true, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      items : 4
	  });
	 
});
</script>
