<?php if( get_sub_field('top_of_page') ){ $topofpage = ''; }else{ $topofpage = 'margin-top-40'; } ?>


<?php if(get_sub_field('anchor_tag')){?>
  <header id="<?php the_sub_field('anchor_tag') ?>" class="revert-second-menu example-sites articles-resources class-on-off-switch" id="" style="background-color:white;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<?php }else{ ?>
  <header class="revert-second-menu example-sites articles-resources class-on-off-switch" id="" style="background-color:white;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<?php } ?>


<div class="container bg-white">
<div class="row breadcrumbs-text no-lr-margin">
  <?php the_sub_field('breadcrumb_text') ?>
</div></div>

    <div id="pageHeaderContent" class="pos-initial <?php echo $topofpage ?>" style="margin-top:110px">
      <div class="container">
        <div class="row col-md-12">
        <h1 class="smaller-header">
            <?php the_sub_field('header') ?>
        </h1>
        </div>








<div class="row col-md-12">
<!-- here it is -->
<?php if( get_sub_field('filters_on_off') ){ $filtersOnOff = ''; }else{ $filtersOnOff = 'style="display:none"'; } ?>
<div <?php echo $filtersOnOff ?>>
  <div class='filter-by horizontal' style="color:#838383">Sort by type:&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div class="button-group filter-button-group float-left" <?php echo $filtersOnOff ?>>
<span class="button filter" data-filter="*" style="color:#838383">all categories <i class="fa fa-chevron-right"></i></span>
<?php while ( have_rows('resources') ) : the_row(); ?>
  <span class="button filter" data-filter=".<?php the_sub_field('slug') ?>" style="color:#838383"><?php the_sub_field('type') ?> <i class="fa fa-chevron-right"></i></span>
 <?php endwhile; ?>
</div>
</div>

<div class="button-group filter-button-group" <?php echo $filtersOnOff ?>>
<p>
  <div class='filter-by'>Filter by:&nbsp;&nbsp;</div>
<select class="filters-select" style="border: 1px solid #ccc;">
  <option value="*">show all</option>
<?php while ( have_rows('categories_repeater') ) : the_row(); ?>

  <option value=".<?php the_sub_field('category-slug') ?>"><?php the_sub_field('category') ?></option>

 <?php endwhile; ?>

</select>
</p>
</div>




























<div class="row col-md-12 mt50 grid" style="margin-left:20px;padding-left:10px;padding-right:10px;">
        <div class="grid-sizer"></div>
        <?php while ( have_rows('resources_repeater') ) : the_row(); ?>


<div class="third element-item transition <?php the_sub_field('resource-type-slug') ?> <?php the_sub_field('category-slug') ?>">
        <!-- <div class="col-sm-12 col-md-4"> -->
          <div class="landing-panel l-grey">
        <!-- lilnks -->
          <div class="top-links"><a target="_blank" href="<?php the_sub_field('top_link_url') ?>"><?php the_sub_field('top_link_text') ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        <!-- lilnks -->
        <?php if(get_sub_field('resource_image')){ ?>
           <img src="<?php the_sub_field('resource_image') ?>">
       <?php } ?>

          <!-- <img src="https://i.imgur.com/IRJlsJs.png" alt="lightbulb"> -->


<?php if(get_sub_field('top_link_url')){?>
        <h4><a style="color: #009abf;font-size: 29px; text-decoration:none;" href="<?php the_sub_field('top_link_url') ?>" target="_blank"><?php the_sub_field('resource_title') ?></a></h4>
      <?php } ?>

        <p><?php the_sub_field('resource_text') ?></p>


<?php if(get_sub_field('top_link_url')){?>
<a class="cta-link" target="_blank" href="<?php the_sub_field('top_link_url') ?>">READ MORE <i class="fa fa-chevron-right"></i></a>
<?php } ?>


<!-- website -->
        <?php if(get_sub_field('site_image')){ ?>
<div class="site-image">
      <a target="_blank" href="<?php the_sub_field('site_link') ?>">

        <?php if(get_sub_field('site_image')){ ?>
           <img src="<?php the_sub_field('site_image') ?>">
       <?php } ?>

  <!-- <img src="https://i.imgur.com/IRJlsJs.png" alt="lightbulb"> -->
            <div class="site-text">
<?php the_sub_field('site_text') ?>
        </div>
</a>

            </div>
                   <?php } ?>
<!-- website -->

          <div class="trending-tags">
        <?php the_sub_field('trending_tags_text') ?>
          </div></div></div>
        <?php endwhile; ?>

</div>



      </div>
    </div>
</header>
