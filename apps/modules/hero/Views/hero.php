<div id="sildeshow" class="owl-carousel owl-theme owl-loaded owl-drag" style="opacity: 1;display:block;">
	<?php foreach ($banners as $banner) { ?>
  <div class="item">
    <?php if ($banner->link) { ?>
    <a href="<?php echo $banner->link; ?>"><img src="<?php echo $banner->image; ?>" alt="<?php echo $banner->title; ?>" class="img-responsive" /></a>
    <?php } else { ?>
    <img src="<?php echo $banner->image; ?>" alt="<?php echo $banner->title; ?>" class="img-responsive" />
    <?php } ?>
  </div>
  <?php } ?>
</div>

<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    loop:true,
    navigation : false,
    singleItem:true,
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
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>