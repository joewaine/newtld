
<?php if( get_sub_field('search_premium') ){ $widerHead = 'wider-search-head'; }else{ $widerHead = ''; } ?>


<?php if(get_sub_field('anchor_tag')){?>
  <section id="<?php the_sub_field('anchor_tag') ?>" class="search-bar class-on-off-switch">
<?php }else{ ?>
  <section class="search-bar class-on-off-switch">
<?php } ?>


<?php if( get_sub_field('search_premium') ){ $searchpremium = 'SEARCH PREMIUM DOMAINS'; }else{ $searchpremium = 'SEARCH FOR DOMAINS'; } ?>
  <div class="container">
    <div class="row <?php echo $widerHead; ?>"><div class="search-text">
<?php echo $widerHead; ?>
    </div>
      <!-- <div id="searchform"> -->

<form id="searchform">

        <input id="searchterm" type="text">
        <!-- <div id="searchsubmit" data-category="<?php the_sub_field('tld_category_search_select'); ?>" class="searchsubmit">search</div> -->



  <button id="searchsubmit" data-category="<?php the_sub_field('tld_category_search_select'); ?>" class="searchsubmit">search</button>



      <!-- </div> -->
      </form>
    </div>
  </div>
</section>

<section class="results-panel" style="display: none;">
<ul id="myList">

</ul>
  <div class="results container text-center">
    <!-- <ul class="search-results-domains" style=""></ul> -->

<ul id="myList">

</ul>
<!-- <div id="loadMore">Load more</div> -->

  </div>
      <div id="loadMore">Load more</div>

</section>

