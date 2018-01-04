<?php if(get_sub_field('anchor_tag')){?>
<section id="<?php the_sub_field('anchor_tag') ?>" class="related-articles-3-col dark-grey-bg grey-examples-panel class-on-off-switch">
<?php }else{ ?>
<section class="related-articles-3-col dark-grey-bg grey-examples-panel class-on-off-switch">
<?php } ?>

<div class="container">
<div class="row text-right no-lr-margin">
<h4 class="articles-header white-text"><?php the_sub_field('header') ?></h4>
</div></div>


<div class="container">


<div class="row g-example-rows">

<?php while ( have_rows('example_box_repeater') ) : the_row(); ?>
    <div class="col-sm-12 col-md-4">
      <div class="landing-panel l-grey">
        <div class="top-links"><a href="<?php the_sub_field('example_website_url') ?>"><?php the_sub_field('example_website_text') ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        <div class="site-image">
          <?php if(get_sub_field('example_domain_image')){ ?>
            <!-- <img src="http://i.imgur.com/91oUq79.png" alt=""> -->
            <img src="<?php the_sub_field('example_domain_image') ?>" alt="<?php the_sub_field('example_domain') ?>">
         <?php } ?>

        <div class="site-text">
             <?php if(get_sub_field('example_domain')){ ?>
               <?php the_sub_field('example_domain') ?>
             <?php } ?>
        </div>
        </div>
        <div class="trending-tags">
            <?php if(get_sub_field('trending_tags')){ ?>
               <?php the_sub_field('trending_tags') ?>
             <?php } ?>
        </div>
      </div>
    </div>
<?php  endwhile; ?>
</div>
</div>


<div class="container">
  <div class="row text-right">
<a class="more-articles light-grey-text" href="<?php the_sub_field('more_text_link') ?>"><?php the_sub_field('more_text') ?> <i class="fa fa-chevron-right"></i></a>
  </div>
</div>


</section>