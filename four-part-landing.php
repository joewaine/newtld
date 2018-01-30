<?php if(get_sub_field('anchor_tag')){?>
  <section id="<?php the_sub_field('anchor_tag') ?>" class="class-on-off-switch">
<?php }else{ ?>
  <section class="class-on-off-switch four-part-landing">
<?php } ?>

  <div class="container">
    <div class="row">

<?php
$greenDomainCategory = get_sub_field('green_domain_categories_category_panel');
 if( $greenDomainCategory ){
?>
<div class="col-md-6"><div class="landing-panel blue-green-grad">
<h4><?php echo $greenDomainCategory['title_text']; ?></h4>
<p><?php echo $greenDomainCategory['description_field']; ?></p><a class="cta-link" href="<?php echo $greenDomainCategory['link_url']; ?>">
<?php echo $greenDomainCategory['link_text']; ?> <i class="fa fa-chevron-right"></i></a>
<!-- carousel -->
<div class="carousel-domain-landing" style="text-align:center;">
<div class="owl-carousel owl-theme">
<?php // check if the repeater field has rows of data
if( $greenDomainCategory['domain_carousel']){
foreach ($greenDomainCategory['domain_carousel'] as &$value) { ?>
    <div class="item">
      <a href="<?php echo $value['category_link']; ?>"><img src="<?php echo $value['category_icon']; ?>" alt="<?php echo $value['category_text']; ?>" style="display: block;width: 175px;height: 143px;margin: 52px auto 0;"></a>
      <a href="<?php echo $value['category_link']; ?>"><?php echo $value['category_text']; ?></a>
</div>
<?php }} ?>
</div>
</div>
<!-- carousel -->



      </div></div>


<?php } ?>

<?php
$purplePremiumDomains = get_sub_field('purple_premium_domains_panel');
 if( $purplePremiumDomains ){
?>
      <div class="col-md-6"><div class="landing-panel purple-pink-grad">
        <h4><?php echo $purplePremiumDomains['title_text']; ?></h4>
<p>
  <?php echo $purplePremiumDomains['description_field']; ?>
</p><a class="cta-link" href="<?php echo $purplePremiumDomains['link_url']; ?>">
<?php echo $purplePremiumDomains['link_text']; ?> <i class="fa fa-chevron-right"></i>
</a>
<br>
<br>
<div class="premium-domains text-center" style="margin-top: 60px;text-decoration: underline;">
<a href="<?php echo $purplePremiumDomains['cta_url']; ?>">
  <?php echo $purplePremiumDomains['cta_text']; ?>
</a>
</div>
      </div>
    </div>




<?php } ?>





    </div>
<div class="row">


<?php
$orangeDomainsPanel = get_sub_field('orange_domains_in_action_panel');
 if( $orangeDomainsPanel ){
?>


      <div class="col-md-6"><div class="landing-panel orange-yellow-grad">
        <h4><?php echo $orangeDomainsPanel['title_text']; ?></h4>
<p>
  <?php echo $orangeDomainsPanel['description_field']; ?>
</p><a class="cta-link" href="<?php echo $orangeDomainsPanel['link_url']; ?>"><?php echo $orangeDomainsPanel['link_text']; ?> <i class="fa fa-chevron-right"></i></a>

<!-- three buttons -->
<div class="row mt50">
      <div class="col-xs-12 col-sm-6">
        <div class="white-rnd-button">
<img class="icon" src="" alt="">
<i class="fa fa-<?php echo $orangeDomainsPanel['white_left_button_fa_icon']; ?>" aria-hidden="true"></i>
<div class="item-link">
<a class="type-link" href="<?php echo $orangeDomainsPanel['white_left_button_url']; ?>"><?php echo $orangeDomainsPanel['white_left_button_text']; ?> ></a>
      </div>
      </div>

</div>
      <div class="col-xs-12 col-sm-6">
        <div class="white-rnd-button">
<img class="icon" src="" alt="">
<i class="fa fa-<?php echo $orangeDomainsPanel['white_center_button_fa_icon']; ?>" aria-hidden="true"></i>
<div class="item-link">
<a class="type-link" href="<?php echo $orangeDomainsPanel['white_center_button_url']; ?>"><?php echo $orangeDomainsPanel['white_center_button_text']; ?> ></a>
      </div>      </div>

</div>
      <div class="col-xs-12 col-sm-4" style="display:none;">
        <div class="white-rnd-button">
<img class="icon" src="" alt="">


<i class="fa fa-<?php echo $orangeDomainsPanel['white_right_button_fa_icon']; ?>" aria-hidden="true"></i>
<div class="item-link">
<a class="type-link" href="<?php echo $orangeDomainsPanel['white_right_button_url']; ?>"><?php echo $orangeDomainsPanel['white_right_button_text']; ?> ></a>
</div>
      </div>

</div>




</div>


</div>
<!-- three buttons -->


   </div>

<?php } ?>

<?php $greyResourcesPanel = get_sub_field('grey_resources_panel');
 if( $greyResourcesPanel ){
?>
  <div class="col-md-6" style="display:none;"><div class="landing-panel l-grey">

<div class="top-links">
<?php // check if the repeater field has rows of data
if( $greyResourcesPanel['top_links_repeater']){
  $i = 1;
foreach ($greyResourcesPanel['top_links_repeater'] as &$value) { ?>
<a target="_blank" href="<?php echo $value['top_link_url']; ?>"><?php echo $value['top_link_text']; ?></a>
<?php if($i != sizeof($greyResourcesPanel['top_links_repeater'])){ echo '&nbsp;|&nbsp;'; }?>

<?php $i++; }} ?>
</div>
<img src="<?php echo $greyResourcesPanel['panel_image']; ?>" alt="<?php echo $greyResourcesPanel['title_text']; ?>">
<h4><?php echo $greyResourcesPanel['title_text']; ?></h4>
<p><?php echo $greyResourcesPanel['description_field']; ?></p>
<a class="cta-link" href="<?php echo $greyResourcesPanel['link_url']; ?>">
<?php echo $greyResourcesPanel['link_text']; ?> <i class="fa fa-chevron-right"></i></a>

<!-- trending tags -->
<div class="trending-tags">
  TRENDING TOPICS:<br>
<?php // check if the repeater field has rows of data
if( $greyResourcesPanel['trending_topics_repeater']){
  $i = 1;
foreach ($greyResourcesPanel['trending_topics_repeater'] as &$value) { ?>
<a href="<?php echo $value['topic_url']; ?>"><?php echo $value['topic_name']; ?></a><?php if($i != sizeof($greyResourcesPanel['trending_topics_repeater'])){ echo ',&nbsp'; }?>
<?php $i++;
}} ?>
</div>
<!-- trending tags -->
</div></div>
<?php } ?>
    </div>
  </div>

</section>