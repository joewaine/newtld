<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
    </div><!-- /.container -->
</div>
<!-- <end row> -->



<!-- end of parralax boundary -->
</div>
<!-- end of parralax boundary -->






<?php

// vars
$layoutFormat = get_field('layout_format');


// check
if( $layoutFormat ){ ?>
<footer id="siteFooter" class="type2">
<!-- <footer id="siteFooter"> -->


<!-- <footer id="siteFooter"> -->

<?php }else{ ?>
<!-- <footer id="siteFooter" class="type2"> -->
<footer id="siteFooter">


<?php } ?>






<div class="container">



<!-- footerlinks -->



        <?php  if( have_rows('footer_links', 'option') ): ?>
          <div class="row primary-footer-links">
          <?php

          // loop through rows (parent repeater)
          while( have_rows('footer_links', 'option') ): the_row(); ?>
        <div class="col-md-2 col-sm-3 col-xs-6">
              <h4>
<a href="">
                <?php the_sub_field('link_group_title'); ?></a></h4>
              <?php

              // check for rows (sub repeater)
              if( have_rows('footer_link_links') ): ?>

                <ul class="nav-directory">
                <?php

                // loop through rows (sub repeater)
                while( have_rows('footer_link_links') ): the_row();

                  // display each item as a list - with a class of completed ( if completed )
                  ?>
                  <li>
                    <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_title'); ?></a>
                            </li>


                <?php endwhile; ?>
                </ul>
              </div>
              <?php endif;  ?>


          <?php endwhile;  ?>
          </div>
        <?php endif;  ?>





<!-- footerlinks -->







<!-- locations -->

<?php if( have_rows('locations', 'option') ): ?>
<div class="row primary-location-links">
    <div class="col-md-12">
      <div class="element">
        <h4 class="locations">Locations</h4>
        <div class="row">
<?php while ( have_rows('locations', 'option') ) : the_row(); ?>
<div class="col-md-2 col-sm-6 col-xs-6">
    <p>
<?php
        // display a sub field value
        the_sub_field('address');
?>
</p>
</div>
<?php
    endwhile;
?>


<div class="col-md-2 col-sm-2 col-xs-3">
  <!-- <p><img class="donuts-word" src="<?php echo get_site_url() . '/wp-content/themes/bootstrap/img/donuts-color-logo.png'; ?>"></p> -->



</div>


<div class="col-md-2 col-sm-2 col-xs-3">


<p><img class="donuts-d" src="<?php echo get_site_url() . '/wp-content/themes/bootstrap/img/donuts-d.png'; ?>"></p>

<p><img class="logo-d" src="<?php echo get_site_url() . '/wp-content/themes/bootstrap/img/donuts-d.png'; ?>"></p>

</div>


</div></div></div></div>
<?php
else :
endif;
?>
<!-- locations -->







<!-- second footer links -->


        <?php  if( have_rows('footer_links', 'option') ): ?>
          <div class="row second-footer-links">
          <?php

          // loop through rows (parent repeater)
          while( have_rows('footer_links', 'option') ): the_row(); ?>
        <div class="col-md-2 col-sm-3 col-xs-6">
              <h4>
<a href="">
                <?php the_sub_field('link_group_title'); ?></a></h4>
              <?php

              // check for rows (sub repeater)
              if( have_rows('footer_link_links') ): ?>

                <ul class="nav-directory">
                <?php

                // loop through rows (sub repeater)
                while( have_rows('footer_link_links') ): the_row();

                  // display each item as a list - with a class of completed ( if completed )
                  ?>
                  <li>
                    <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_title'); ?></a>
                            </li>


                <?php endwhile; ?>
                </ul>
              </div>
              <?php endif;  ?>


          <?php endwhile;  ?>



<?php include 'second-locations.php'; ?>


          </div>
        <?php endif;  ?>





<!-- second footer links -->




<!-- policy links -->

<?php if( get_field('policy_links', 'option') ): ?>
<div class="row">
<div class="col-xs-12 policy-links">
<br>
<?php the_field('policy_links', 'option'); ?>
<br>
</div>
</div>
<?php endif; ?>

<!-- policy links -->



<?php if( get_field('footer_text', 'option') ): ?>

<p class="footer-disclosure">
<?php the_field('footer_text', 'option'); ?>
</p>

<?php endif; ?>

    </div>
</footer>
    <?php
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer();
	?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="<?php echo get_site_url() . '/wp-content/themes/bootstrap/js/rellax.min.js'?>"></script>

<script src="<?php echo get_site_url() . '/wp-content/themes/bootstrap/js/owl.carousel.min.js'?>"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



<script>

  $( function() {
    $( ".accordion" ).accordion({

 active: false,
    collapsible: true,
    heightStyle: "content"

    });
  } );


    $( function() {
    $( ".mobile-accordion" ).accordion({

 active: false,
    collapsible: true,
    header: "li.menu-item",
heightStyle: "content"
    });
  } );





</script>

<script>
  // Accepts any class name
  // var rellax = new Rellax('.rellax');
</script>

<script>



//$('.secondary-menu').show();

  $('.nav-menu .menu-item').hover(function(){

      $('.secondary-menu').hide();
      var indexItem = $(this).index();
      $('.secondary-menu:eq('+ indexItem +')').show();

  });





  $('.revert-second-menu').hover(function(){
$('.secondary-menu').fadeOut();


  });


$(window).on('scroll', function() {
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 150;             // set to whatever you want it to be

    if(y_scroll_pos > scroll_pos_test) {
        //do stuff


$('.main-navigation').addClass('darker-header');

    }else{
      $('.main-navigation').removeClass('darker-header');
    }
});





$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      dots: false,
      smartSpeed: 500,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:1
          }
      }
  });
});



$(document).ready(function(){
  $('.landing-carousel').owlCarousel({
      loop:true,
      margin:0,
      nav:false,
      dots: false,
      smartSpeed: 500

  });
});


</script>


<!-- staff page script -->
<script>

$(window).resize(function(){});


$('.staff-member').click(function(){

if($(this).hasClass('halfOpacity')){

  $(this).removeClass('halfOpacity');
  $('.member-info-data').remove();

}else{

$('.member-info-data').remove();

$('.staff-member').removeClass('halfOpacity');
  $(this).addClass('halfOpacity');

var memberWidth = parseInt($('.staff-member').css('width'));
var rowWidth = parseInt($('.staff-groupings').css('width'));
var amountPerRow = parseInt(rowWidth/memberWidth);

// console.log('amount per row: ' + amountPerRow);
  var staffMembers = [];
$('.staff-member').each(function(){
  staffMembers.push($(this).index());
});

  var amountofMembers = 0;

  $('.staff-member').each(function(){
    amountofMembers++;
  });

  var amountOfRows = amountofMembers/amountPerRow;
  var item = $(this).index() + 1;

var rowArrays = [];
var i,j,temparray,chunk = amountPerRow;
for (i=0,j=staffMembers.length; i<j; i+=chunk) {
    temparray = staffMembers.slice(i,i+chunk);
    rowArrays.push(temparray);
}

var result;
for( var i = 0, len = rowArrays.length; i < len; i++ ) {
  for(t=0;t<amountPerRow;t++){
    if( rowArrays[i][t] === $(this).index() ) {
        result = rowArrays[i];
        // console.log('result');
        // console.log(result);
        var appender = result[result.length - 1];

var paragraphcontent = '';

$(this).find('span.employee-description p').each(function(){

var paragraphpiece = '<p class="avenir-light">' + $(this).text() +  '</p>';

paragraphcontent = paragraphcontent + paragraphpiece;

});

var contentItem = '<div class="container"><div class="row"><div class="col-md-5" style="display:none;"><img class="gray-border usrImage" src="'+ $(this).find('img').attr('src') +'" style="display:none;"></div><div class="col-sm-7"><h2 class="staff-member-modal">'+ $(this).find('.staff-member-name').text() +'</h2><p class="gray-text gray-border">'+ $(this).find('.top-text').text() +'</p>' + paragraphcontent + '</div></div></div>';

$('.staff-member:eq('+ appender +')').after('<div class="member-info-data" style="display:none;">' + contentItem + '</div>');
$('.staff-member:eq('+ appender +')').next(".member-info-data").slideDown();

$('.member-info-data').addClass('appear').addClass('giveHeight');
$(".member-info-data .container").addClass('slide-down');

setTimeout(function (){

$('.usrImage').fadeIn(1000);
$('.col-md-5').slideDown(500);
// $('.col-sm-7').slideDown('slow');
}, 100);
   result = null;
        break;
    }
}
}
}
});


$('body').on('click', '.collapse-bar', function() {
  $(this).parent().remove();

    $('.triangle').remove();
});




</script>
<!-- staff page script -->

<script>


$('.menu-icon').click(function(){
  $('.mobile-menu').addClass('expanded-menu');

});

$('.retract-menu').click(function(){
  $('.mobile-menu').removeClass('expanded-menu');

});



$(".news-item-container").click(function(){

  window.open($(this).data('link'),' _blank');

});



</script>


<?php if(is_page('team')){ ?>

<script type="text/javascript">


  if(window.location.hash){
    $(window.location.hash).click();



  $('html, body').animate({
        scrollTop: $(".member-info-data").offset().top - 82
    }, 500);


  }

</script>

<?php } ?>


<script>
$('.secondary-menu li.title').click(function(){

window.location.href = $(this).find('a').attr('href');

});


  document.querySelector("input.form-control")
  .setAttribute("placeholder", "enter a keyword");


  document.querySelector("#site-navigation input.form-control")
  .setAttribute("placeholder", "search the site");



</script>





<?php include 'domain-category-script.php' ?>



<script>

var encodedURL = encodeURIComponent(window.location);
var encodedTitle = encodeURIComponent($('h2.blog-post-title').text());



// alert(encodedTitle);

var linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' + encodedURL + '&title=' + encodedTitle;
var twitterURL = 'http://twitter.com/share?text=' + encodedTitle + '&url=' + encodedURL;
var facebookURL = 'https://www.facebook.com/dialog/feed?app_id=184683071273&link=' + encodedURL + '&picture=https%3A%2F%2Fdonuts.domains%2Fwp-content%2Fuploads%2F2017%2F09%2Fslide-woman-w-camera.jpg&name=' + encodedTitle;

$('.fbsharelink').attr('href', facebookURL);
$('.twsharelink').attr('href', twitterURL);
$('.lisharelink').attr('href', linkedInURL);

</script>



<script>


$('.white-rnd-button').click(function(){
  window.open($(this).find('a').attr('href'), "_blank");
  return false;
});

</script>




<script>

var queryCalls = [{
category: "All Donuts TLDs",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=alldonuts"
},
{
category: "Business",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=business&onlytlds=associates,business,careers,center,company,consulting,enterprises,expert,gmbh,group,guru,industries,international,limited,ltd,management,network,partners,sarl,services,solutions,support,ventures,life,world,today"
},
{
category: "Finance",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=finance&onlytlds=accountants,capital,cards,cash,claims,consulting,credit,creditcard,estate,exchange,finance,financial,fund,gives,holdings,insure,investments,loans,money,report,services,solutions,tax,life,world,today"
},
{
category: "Law",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=law&onlytlds=attorney,lawyer,legal,partners,services,solutions,expert,life,world,today"
},
{
category: "Technology",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=technology&onlytlds=codes,computer,consulting,domains,energy,engineer,engineering,software,solar,solutions,systems,technology,video,works,life,world,today"
},
{
category: "Mktg & Comm",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=mktg-comm&onlytlds=agency,consulting,digital,direct,email,expert,guru,live,market,marketing,media,productions,social,studio,video,works,life,world,today"
},
{
category: "Real Estate",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=realestate&onlytlds=apartments,camp,community,condos,farm,forsale,haus,house,immo,immobilien,land,lease,maison,market,mortgage,properties,rentals,sale,villas,life,world,today"
},
{
category: "News & Info",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=news-info&onlytlds=chat,directory,fyi,live,media,memorial,news,reviews,social,tips,video,zone,life,world,today"
},
{
category: "Travel & Geo",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=travel-geo&onlytlds=cab,city,cruises,flights,guide,holiday,irish,limo,place,reise,reisen,taxi,tours,town,travel,vacations,viajes,video,voyage,zone,life,world,today"
},
{
category: "Photography",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=photography&onlytlds=camera,consulting,equipment,expert,gallery,graphics,guru,media,photography,photos,pictures,studio,theater,video,life,world,today"
},
{
category: "Style & Fashion",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=style-fashion&onlytlds=boutique,clothing,consulting,diamonds,expert,florist,furniture,gold,guru,jewelry,moda,salon,shoes,style,tienda,video,watch,life,world,today"
},
{
category: "Shopping & Retail",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=shopping-retail&onlytlds=auction,bargains,boutique,cards,cheap,coupons,deals,delivery,direct,discount,express,florist,forsale,gifts,gratis,kaufen,market,plus,sale,salon,shopping,style,tienda,tires,toys,life,world,today"
},
{
category: "Sports & Fitness",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=sports-fitness&onlytlds=bike,clinic,coach,dance,expert,fish,fitness,football,futbol,golf,guru,hockey,live,rehab,rocks,run,soccer,team,tennis,training,video,life,world,today"
},
{
category: "Healthcare",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=healthcare&onlytlds=care,clinic,consulting,dental,dentist,doctor,expert,fitness,guru,healthcare,hospital,rehab,rip,surgery,training,vet,vision,life,world,today"
},
{
category: "Education",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=education&onlytlds=academy,church,consulting,degree,education,expert,foundation,guru,institute,mba,school,schule,university,video,life,world,today"
},
{
category: "Food & Bev",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=food-bev&onlytlds=cafe,catering,cheap,coffee,coupons,delivery,express,fish,kitchen,market,pizza,pub,recipes,restaurant,video,vin,wine,life,world,today"
},
{
category: "Entertainment",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=entertainment&onlytlds=actor,band,bingo,casino,dance,dating,dog,events,games,live,media,movie,rocks,show,singles,studio,theater,video,works,life,world,today"
},
{
category: "Political/Military",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=politcal-military&onlytlds=academy,airforce,army,consulting,democrat,expert,family,foundation,gives,institute,navy,republican,life,world,today"
},
{
category: "Fun",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=fun&onlytlds=chat,cool,expert,exposed,fail,fyi,games,gripe,guru,jetzt,live,ninja,social,video,wtf,life,world,today"
},
{
category: "Home & Construction",
url: "https://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=home-construction&onlytlds=builders,cleaning,construction,contractors,expert,glass,guru,lighting,parts,plumbing,repair,supplies,supply,tools,works,life,world,today"
},
{
category: "Premium Only",
url: "https://api.dizzy.ninja/domain-***?account=greatdomains&password=f9ftih82&input=***&index=3&usageid=premium"
}];

function prependData(data) {
  $('.search-bar .results').empty();
    for(i=0;i<JSON.stringify(data.output.domains.count);i++){
    $('.results-panel .results').prepend('<span style="color:white;">' + JSON.stringify(data.output.domains.domains[i].domain).replace(/["_]/g,'') + '</span><br>');
  }
}


$('.searchsubmit').click(function(e){
    e.preventDefault();



$('.results').empty();

$('.results-panel').show();
var encodedSearchTerm = encodeURIComponent($('#searchterm').val());

var queryURL = queryCalls[$(this).data('category')].url.replace("***", encodedSearchTerm);

$.ajax({
  url: queryURL,
  dataType: "JSONP",
  }).done(function(data){prependData(data)});

});


</script>



<script>

$(document).ready(function(){
    $( ".link-anchor-list li a" ).click(function( event ) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top - 82 }, 500);
    });
});


</script>

