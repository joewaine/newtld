<?php if(get_sub_field('anchor_tag')){?>
<header id="<?php the_sub_field('anchor_tag') ?>" class="revert-second-menu example-sites category-testimonials single-article class-on-off-switch" id="" style="background-color:white;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<?php }else{ ?>
<header class="revert-second-menu example-sites category-testimonials single-article class-on-off-switch" id="" style="background-color:white;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
<?php } ?>

<div class="container bg-white">
<div class="row breadcrumbs-text no-lr-margin">
<?php the_sub_field('breadcrumbs_text') ?>
</div></div>

    <div id="pageHeaderContent">
      <div class="container">


    <div class="row col-md-12 no-pad">
<div class="col-sm-12 col-md-8 article-body">
  <h4 class="article-title single"><?php the_sub_field('article_title') ?></h4>

  <div class="article-tags">
    <?php while ( have_rows('tags_repeater') ) : the_row(); ?>
      <a href="<?php the_sub_field('tag_link') ?>"><?php the_sub_field('tag_text') ?></a>&nbsp;&nbsp;
    <?php  endwhile; ?>




  </div>
<div class="credits-social">
  by <span class="name"><?php the_sub_field('author_name') ?></span>&nbsp;&nbsp;&nbsp;<div class="clock-align"><div class="fa fa-clock-o" aria-hidden="true"></div></div>&nbsp;
<?php the_sub_field('date') ?>



&nbsp;&nbsp;<div class="icon-cover"><a class="fbsharelink" target="_blank" href=""><div class="fa fa-facebook-square" aria-hidden="true"></div></a></div>
&nbsp;<div class="icon-cover"><a class="twsharelink" target="_blank" href=""><div class="fa fa-twitter-square" aria-hidden="true"></div></a></div>
&nbsp;<div class="icon-cover"><a class="lisharelink" target="_blank" href=""><div class="fa fa-linkedin-square" aria-hidden="true"></div></a></div>



<?php
function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}
?>



<?php $titleencode = the_title(); ?>






<?php echo myUrlEncode($titleencode) ?>


 <span class="social">
Share:
</span>
</div>



<?php the_sub_field('article_text') ?>





<!-- <div class="share text-center">

  <span class="social">
Share:
</span> &nbsp;<div class="fa fa-facebook-square" aria-hidden="true"></div>
&nbsp;<div class="fa fa-twitter-square" aria-hidden="true"></div>
&nbsp;<div class="fa fa-linkedin-square" aria-hidden="true"></div>

</div>
 -->

<div class="share bottom-of-article text-center">
<span class="social">Share:</span>


<div class="icon-cover"><a class="lisharelink" target="_blank" href=""><div class="fa fa-linkedin-square" aria-hidden="true"></div></a></div>
<div class="icon-cover"><a class="twsharelink" target="_blank" href=""><div class="fa fa-twitter-square" aria-hidden="true"></div></a></div>
<div class="icon-cover"><a class="fbsharelink" target="_blank" href=""><div class="fa fa-facebook-square" aria-hidden="true"></div></a></div>
</div>



</div>
<div class="col-sm-12 col-md-4 related-articles-column">
  <h4 class="article-title mt50"><?php the_sub_field('related_articles_header') ?></h4>



    <?php while ( have_rows('related_article_repeater') ) : the_row(); ?>

    <div class="landing-panel l-grey">
      <div class="top-links"><a href="<?php the_sub_field('article_top_link_url') ?>"><?php the_sub_field('article_top_link_text') ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        <h4><?php the_sub_field('related_article_title') ?></h4>
        <p><?php the_sub_field('related_article_excerpt') ?></p>
        <a class="cta-link" href="<?php the_sub_field('learn_more_url') ?>"><?php the_sub_field('learn_more_text') ?> <i class="fa fa-chevron-right"></i></a>
      <div class="trending-tags">
      <?php the_sub_field('trending_tags_text') ?>
      </div>
    </div>




    <?php  endwhile; ?>









</div>





</div>











      </div>
    </div>
</header>
