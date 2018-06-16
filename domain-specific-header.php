


<?php if( get_sub_field('purple_header') ){ $ppheader = ''; }else{ $ppheader = ''; } ?>
<?php if( get_sub_field('orange_header') ){ $orangeheader = ' orange-yellow-grad'; }else{ $orangeheader = ''; } ?>

<?php if(get_sub_field('anchor_tag')){?>
  <header id="<?php the_sub_field('anchor_tag') ?>" class="revert-second-menu blue-green-grad domain-specific-header class-on-off-switch <?php echo $ppheader; ?>" id="" style="background-color:white;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
  <div class="background-icon <?php the_sub_field('background_icon'); ?>-image">icon</div>
    <?php }else{ ?>
  <header class="revert-second-menu blue-green-grad domain-specific-header class-on-off-switch <?php echo $ppheader; ?> <?php echo $orangeheader; ?>" id="" style="background-color:white;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
  <div class="background-icon <?php the_sub_field('background_icon'); ?>-image">icon</div>
<?php } ?>



<div class="container">
<div class="row breadcrumbs-text no-lr-margin grey-breadcrumb-text white-text">
  <?php the_sub_field('breadcrumb_text') ?>

</div></div>

  <img class="tld-page-header-image" src="" width="1200" height="386" alt="" style="margin-top: 0px; margin-bottom: 0px;">
    <div id="pageHeaderContent" class="pos-initial">
      <div class="container">
        <div class="row col-md-9">
        <h1>
          <?php the_sub_field('header') ?>
        </h1>
        <h4>
<?php the_sub_field('subheader') ?>
      </h4>
<p class="white-domain-text"><?php the_sub_field('description_text') ?></p>

<!-- link anchor list -->

<ul class="link-anchor-list">

        <?php while ( have_rows('anchor_link_repeater') ) : the_row(); ?>

          <?php if(get_sub_field('link_text')){ ?>

            <li><a href="#<?php the_sub_field('link_anchor') ?>"><?php the_sub_field('link_text') ?> <i class="fa fa-chevron-right"></i></a></li>

         <?php } ?>

        <?php  endwhile; ?>



</ul>



<!-- link anchor list -->


        </div>


        <div class="row col-md-3">

<a href="<?php the_sub_field('cta_link'); ?>" target="_blank">
  <img class="header-brand-logo" src="<?php the_sub_field('cta_image'); ?>" alt="">
</a>


        </div>

      </div>
    </div>
</header>