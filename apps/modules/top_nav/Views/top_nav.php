<nav id="top">
  <div class="container">
    <div id="top-links" class="nav pull-right">
      <ul class="list-inline">
        <li><a href="#"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md"><?php echo $telephone; ?></span></li>
        <li class="dropdown"><a href="#" title="<?php echo $text_account; ?>" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_account; ?></span> <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-right">
            <?php if ($logged) { ?>
            <li><a href="#"><?php echo $text_account; ?></a></li>
            <li><a href="#"><?php echo $text_order; ?></a></li>
            <li><a href="#"><?php echo $text_transaction; ?></a></li>
            <li><a href="#"><?php echo $text_download; ?></a></li>
            <li><a href="#"><?php echo $text_logout; ?></a></li>
            <?php } else { ?>
            <li><a href="#"><?php echo $text_register; ?></a></li>
            <li><a href="#"><?php echo $text_login; ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li><a href="#" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_wishlist; ?></span></a></li>
        <li><a href="#" title="<?php echo $text_shopping_cart; ?>"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_shopping_cart; ?></span></a></li>
        <li><a href="#" title="<?php echo $text_checkout; ?>"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_checkout; ?></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div id="logo">
          <?php if ($logo) { ?>
          <a href="#"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" /></a>
          <?php } else { ?>
          <h1><a href="#"><?php echo $name; ?></a></h1>
          <?php } ?>
        </div>
      </div>
      <?php if (isset($search)) { ?>
      <div class="col-sm-5"><?php echo $search; ?></div>
      <?php }?>
      <?php if (isset($cart)) { ?>
      <div class="col-sm-3"><?php echo $cart; ?></div>
      <?php }?>
    </div>
  </div>
</header>