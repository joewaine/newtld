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


    <div class="row col-md-12 mt50">


       <?php while ( have_rows('example_sites_repeater') ) : the_row(); ?>


<div class="col-sm-12 col-md-4">
  <div class="landing-panel l-grey">

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

  </div>

</div></div>
        <?php endwhile; ?>


    </div>






      </div>
    </div>
</header>
