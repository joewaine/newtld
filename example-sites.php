<?php if( get_sub_field('top_of_page') ){ $topofpage = ''; }else{ $topofpage = 'margin-top-40'; } ?>


<?php if(get_sub_field('anchor_tag')){?>
<header id="<?php the_sub_field('anchor_tag') ?>" class="revert-second-menu example-sites class-on-off-switch" id="" style="background-color:#333;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<?php }else{ ?>
<header class="revert-second-menu example-sites class-on-off-switch" id="" style="background-color:#333;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">

<?php } ?>



<div class="container bg-white">
<div class="row breadcrumbs-text no-lr-margin">
<?php the_sub_field('breadcrumbs_text') ?>
</div></div>

    <div id="pageHeaderContent" class="pos-initial <?php echo $topofpage ?>">
      <div class="container">
        <div class="row col-md-12">
         <h1 class="smaller-header" style="color: white;">
          <?php the_sub_field('header') ?>
        </h1>
        </div>



<div class="row col-md-12">
<!-- here it is -->
<?php if( get_sub_field('filters_on_off') ){ $filtersOnOff = ''; }else{ $filtersOnOff = 'style="display:none"'; } ?>
<div <?php echo $filtersOnOff ?>>
  <div class='filter-by horizontal'>Sort by type:&nbsp;&nbsp;&nbsp;&nbsp;</div>
<div class="button-group filter-button-group float-left" <?php echo $filtersOnOff ?>>
<span class="button filter" data-filter="*">all categories <i class="fa fa-chevron-right"></i></span>
<?php while ( have_rows('resource_type_repeater') ) : the_row(); ?>
  <span class="button filter" data-filter=".<?php the_sub_field('resource-type-slug') ?>"><?php the_sub_field('resource-type') ?> <i class="fa fa-chevron-right"></i></span>
 <?php endwhile; ?>
</div>
</div>

<div class="button-group filter-button-group" <?php echo $filtersOnOff ?>>
<p>
  <div class='filter-by'>Filter by:&nbsp;&nbsp;</div>
<select class="filters-select">
  <option value="*">show all</option>
<?php while ( have_rows('categories_repeater') ) : the_row(); ?>

  <option value=".<?php the_sub_field('category-slug') ?>"><span class="button"><?php the_sub_field('category') ?></span></option>

 <?php endwhile; ?>

</select>
</p>
</div>



    <div class="row col-md-12 mt50 grid" style="margin-left:20px;padding-left:10px;padding-right:10px;">
<div class="grid-sizer"></div>




       <?php while ( have_rows('example_sites_repeater') ) : the_row(); ?>



<div class="third element-item transition <?php the_sub_field('resource-type-slug') ?> <?php the_sub_field('category-slug') ?>">

  <div class="landing-panel l-grey" style="width:96%;margin: 0 auto 20px;">

<!-- lilnks -->
  <div class="top-links"><?php the_sub_field('top_link_text') ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
<!-- lilnks -->
     <div class="site-image">
      <a target="_blank" href="<?php the_sub_field('top_link_url') ?>">
<img src="<?php the_sub_field('example_image') ?>">
  <!-- <img src="https://i.imgur.com/IRJlsJs.png" alt="lightbulb"> -->

            <div class="site-text">
       <?php the_sub_field('example_domain') ?>
            </div>



</a>

            </div>
  <div class="trending-tags">
<a href=""><?php the_sub_field('trending_tags_text') ?></a>
<!--<?php the_sub_field('category') ?>-->
  </div>

</div></div>
        <?php endwhile; ?>


    </div>






      </div>
    </div>








</header>
