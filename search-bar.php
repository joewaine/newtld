<?php if(get_sub_field('anchor_tag')){?>
  <section id="<?php the_sub_field('anchor_tag') ?>" class="search-bar class-on-off-switch">
<?php }else{ ?>
  <section class="search-bar class-on-off-switch">
<?php } ?>

  <div class="container">
    <div class="row"><div class="search-text">SEARCH FOR DOMAINS</div>
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

  <div class="results container text-center"></div>

</section>

