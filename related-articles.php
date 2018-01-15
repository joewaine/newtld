<?php if(get_sub_field('anchor_tag')){?>
  <section id="<?php the_sub_field('anchor_tag') ?>" class="related-articles-3-col">
<?php }else{ ?>
  <section class="related-articles-3-col">
<?php } ?>

<div class="container">
<div class="row text-right no-lr-margin">
<h4 class="articles-header">
  <?php the_sub_field('header') ?>
</h4>
</div></div>


<div class="container">
<div class="row">



        <?php while ( have_rows('resources_repeater') ) : the_row(); ?>
        <div class="col-sm-12 col-md-4">
          <div class="landing-panel l-grey">
        <!-- lilnks -->
          <div class="top-links"><a href="<?php the_sub_field('top_link_url') ?>"><?php the_sub_field('top_link_text') ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        <!-- lilnks -->
        <?php if(get_sub_field('resource_image')){ ?>
           <img src="<?php the_sub_field('resource_image') ?>">
       <?php } ?>

          <!-- <img src="https://i.imgur.com/IRJlsJs.png" alt="lightbulb"> -->
        <h4><?php the_sub_field('resource_title') ?></h4>
        <p><?php the_sub_field('resource_text') ?></p>

<a class="cta-link" href="<?php the_sub_field('cta_link') ?>"><?php the_sub_field('cta_text') ?> <i class="fa fa-chevron-right"></i></a>


          <div class="trending-tags">
        <?php the_sub_field('trending_tags_text') ?>
          </div></div></div>
        <?php endwhile; ?>







<!-- <div class="col-sm-12 col-md-4">
  <div class="landing-panel l-grey">
  <div class="top-links"><a href="">article <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
  <img src="https://i.imgur.com/IRJlsJs.png" alt="lightbulb">
  <h4>2</h4>
  <p>See how others are embracing new domains</p><a class="cta-link" href="">LEARN MORE <i class="fa fa-chevron-right"></i></a>
  <div class="trending-tags">
   <a href="">BRANDED SHORT LINKS</a>, <a href="">BUSINESS DOMAINS</a>
  </div>
  </div>
</div>
<div class="col-sm-12 col-md-4">
  <div class="landing-panel l-grey">
  <div class="top-links"><a href="">article <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
  <h4>2</h4>
  <p>See how others are embracing new domains</p>
  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,</p>
    <p>See how others are embracing new domains</p>
  <a class="cta-link" href="">LEARN MORE <i class="fa fa-chevron-right"></i></a>
  <div class="trending-tags">
   <a href="">BRANDED SHORT LINKS</a>, <a href="">BUSINESS DOMAINS</a>
  </div>
  </div>
</div>
<div class="col-sm-12 col-md-4">
  <div class="landing-panel l-grey">
  <div class="top-links"><a href="">article<i class="fa fa-external-link" aria-hidden="true"></i></a></div>
  <img src="https://i.imgur.com/IRJlsJs.png" alt="lightbulb">
  <h4>2</h4>
  <p>See how others are embracing new domains</p><a class="cta-link" href="">LEARN MORE <i class="fa fa-chevron-right"></i></a>
  <div class="trending-tags">
   <a href="">BRANDED SHORT LINKS</a>, <a href="">BUSINESS DOMAINS</a>
  </div>
  </div>
</div>

<div class="col-sm-12 col-md-4">
  <div class="landing-panel l-grey">
  <div class="top-links"><a href="">article <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
  <h4>2</h4>
  <p>See how others are embracing new domains</p>
  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,</p>
    <p>See how others are embracing new domains</p>
  <a class="cta-link" href="">LEARN MORE <i class="fa fa-chevron-right"></i></a>
  <div class="trending-tags">
   <a href="">BRANDED SHORT LINKS</a>, <a href="">BUSINESS DOMAINS</a>
  </div>
  </div>
</div>
<div class="col-sm-12 col-md-4">
  <div class="landing-panel l-grey">
  <div class="top-links"><a href="">article <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
  <img src="https://i.imgur.com/IRJlsJs.png" alt="lightbulb">
  <h4>2</h4>
  <p>See how others are embracing new domains</p><a class="cta-link" href="">LEARN MORE <i class="fa fa-chevron-right"></i></a>
  <div class="trending-tags">
   <a href="">BRANDED SHORT LINKS</a>, <a href="">BUSINESS DOMAINS</a>
  </div>
  </div>
</div>

 -->



</div>
</div>


<!-- <div class="container">
  <div class="row text-right">
<a class="more-articles" href="">MORE ARTICLES & RESOURCES <i class="fa fa-chevron-right"></i></a>
  </div>
</div> -->


</section>