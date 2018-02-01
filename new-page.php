<?php if(get_sub_field('anchor_tag')){?>
  <header id="<?php the_sub_field('anchor_tag') ?>" class="revert-second-menu class-on-off-switch blue-green-grad" id="" style="background-color:white;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<?php }else{ ?>
  <header class="revert-second-menu class-on-off-switch blue-green-grad" id="" style="background-color:white;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<?php } ?>


<div class="container bg-white">
<div class="row breadcrumbs-text no-lr-margin">
  <?php the_sub_field('breadcrumb_text') ?>
</div></div>

  <img class="tld-page-header-image" src="" width="1200" height="386" alt="" style="margin-top: 0px; margin-bottom: 0px;">
    <div id="pageHeaderContent" class="remove-top-margin">
      <div class="container">
        <div class="row col-md-7">
<h1 style="color:white">
  <?php the_sub_field('header') ?>
        </h1>
        <h4 style="color:white">  <?php the_sub_field('subheader') ?></h4>
        <p style="color:white"><?php the_sub_field('subheader_descriptive_text') ?></p>

      </div>

        <div class="row col-md-5">
      <a href="<?php the_sub_field('cta_link') ?>"><img class="header-brand-logo" src="<?php the_sub_field('cta_image') ?>">
      </a>


        </div>

      </div>
    </div>
</header>
