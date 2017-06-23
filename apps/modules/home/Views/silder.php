<div class="categoryTitle">
		<h3 class="categoryTitleText">Other Product</h3>
</div>
<div id="silder" class="owl-carousel owl-theme owl-loaded owl-drag" style="opacity: 1;display:block;">
	<?php foreach ($productSilderItems as $item) { ?>
  <div class="item">
    <?php if ($item->link) { ?>
    <a href="<?php echo $item->link; ?>"><img width="130px" height="100px" src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>" class="img-responsive" /></a>
    <?php } else { ?>
    <img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>" class="img-responsive" width="130px" height="100px" />
    <?php } ?>
  </div>
  <?php } ?>
</div>

<script type="text/javascript">
$('#silder').owlCarousel({
    loop:true,
    navigation : false,
    margin:10,
    nav:true,
    center:true,
    mouseDrag:true,
    touchDrag:true,
    rewind:true,
    autoplay:true,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        400:{
			items:1
        },
        500:{
			items:2
        },
        600:{
            items:3
        },
        800:{
			items:4
        },
        1000:{
            items:5
        }
    }
})
</script>