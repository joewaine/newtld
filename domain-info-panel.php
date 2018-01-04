<?php if(get_sub_field('anchor_tag')){?>
<section id="<?php the_sub_field('anchor_tag') ?>" class="related-articles-3-col domain-info-panel blue-green-grad class-on-off-switch">
<?php }else{ ?>
<section class="related-articles-3-col domain-info-panel blue-green-grad class-on-off-switch">
<?php } ?>

<div class="container">
<div class="row text-right no-lr-margin">
<h4 class="articles-header white-text">
  <?php the_sub_field('header') ?>
</h4>
</div></div>

<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
  <h5>
  <?php the_sub_field('subheader') ?>
  </h5>
  <p>
    <?php the_sub_field('descriptive_text') ?>
  </p>
</div>
</div>
<div class="row facts-lists">

<div class="col-sm-7 col-md-7 info-list">
<h4><?php the_sub_field('left_panel_subheader') ?></h4>

        <?php while ( have_rows('fact_repeater') ) : the_row(); ?>
        <ul>
          <?php if(get_sub_field('fact')){ ?>
            <li><?php the_sub_field('fact') ?></li>
         <?php } ?>
        </ul>
        <?php  endwhile; ?>
</div>

<div class="col-sm-5 col-md-5 info-list-right">
  <div class="left-white-border">
    <h4><?php the_sub_field('right_panel_subheader') ?></h4>
        <?php while ( have_rows('audience_repeater') ) : the_row(); ?>
        <ul>
          <?php if(get_sub_field('audience_item')){ ?>
            <li><?php the_sub_field('audience_item') ?></li>
         <?php } ?>
        </ul>
        <?php  endwhile; ?>
  </div>
</div>

</div>
</div>

</section>