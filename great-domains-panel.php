<?php if(get_sub_field('anchor_tag')){?>
  <header id="<?php the_sub_field('anchor_tag') ?>" class="revert-second-menu great-domains-panel blue-green-grad class-on-off-switch" id="" style="background-color:white;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<?php }else{ ?>
  <header class="revert-second-menu great-domains-panel blue-green-grad class-on-off-switch" id="" style="background-color:white;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<?php } ?>

<div class="container">
<div class="row breadcrumbs-text no-lr-margin">
  <?php the_sub_field('breadcrumb_text') ?>
</div></div>

  <img class="tld-page-header-image" src="" width="1200" height="386" alt="" style="margin-top: 0px; margin-bottom: 0px;">
    <div id="pageHeaderContent" class="pos-initial">
      <div class="container">
        <div class="row col-md-12">
        <h1><?php the_sub_field('header') ?></h1>
        <h4><?php the_sub_field('subheader') ?></h4>
<p class="white-text"><?php the_sub_field('subheader_descriptive_text') ?></p>
        </div>

        <div class="row col-md-12 centered-margin mt50 clearfix category-groupings">


        <?php while ( have_rows('category_square_repeater') ) : the_row(); ?>
<div class="category-square clearfix"><div class="item">
<!-- <i class="fa fa-<?php the_sub_field('font_awesome_icon') ?>" aria-hidden="true"></i> -->
<img class="img" src="<?php the_sub_field('icon_svg_image') ?>" alt="">
  <?php the_sub_field('category_text_title') ?></div>
<div style="display:none;">
<span class="title"><?php the_sub_field('title') ?></span>
<span class="subtitle"><?php the_sub_field('subtitle') ?></span>
<span class="domain_list"><?php the_sub_field('domain_list') ?></span>
<span class="link_text"><?php the_sub_field('link_text') ?></span>
<span class="link_url"><?php the_sub_field('link_url') ?></span>
</div>
</div>
        <?php endwhile; ?>




        </div>


      </div>
    </div>
</header>
