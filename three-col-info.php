<?php if(get_sub_field('anchor_tag')){?>
<section id="<?php the_sub_field('anchor_tag') ?>" class="related-articles-3-col domain-info-panel purple-pink-grad class-on-off-switch">
<?php }else{ ?>
<section class="related-articles-3-col domain-info-panel purple-pink-grad class-on-off-switch">
<?php } ?>

<div class="container">
<div class="row text-right no-lr-margin">
<h4 class="articles-header white-text"><?php the_sub_field('header') ?></h4>
</div></div>


<div class="container">

<div class="row facts-lists">

<div class="col-sm-4 col-md-4 info-list">
<h4><?php the_sub_field('sub_header_one') ?></h4>
        <?php while ( have_rows('fact_repeater_one') ) : the_row(); ?>
        <ul>
          <?php if(get_sub_field('fact')){ ?>
            <li><?php the_sub_field('fact') ?></li>
         <?php } ?>
        </ul>
        <?php  endwhile; ?>
</div>

<div class="col-sm-4 col-md-4 info-list">
 <div class="left-white-border">
  <h4><?php the_sub_field('sub_header_two') ?></h4>
        <?php while ( have_rows('fact_repeater_two') ) : the_row(); ?>
        <ul>
          <?php if(get_sub_field('fact')){ ?>
            <li><?php the_sub_field('fact') ?></li>
         <?php } ?>
        </ul>
        <?php  endwhile; ?>
</div></div>

<div class="col-sm-4 col-md-4 info-list">
 <div class="left-white-border">
  <h4><?php the_sub_field('sub_header_three') ?></h4>
        <?php while ( have_rows('fact_repeater_three') ) : the_row(); ?>
        <ul>
          <?php if(get_sub_field('fact')){ ?>
            <li><?php the_sub_field('fact') ?></li>
         <?php } ?>
        </ul>
        <?php  endwhile; ?>
</div></div>




</div>
</div>




</section>