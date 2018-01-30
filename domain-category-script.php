<!-- staff page script -->
<script>

$(window).resize(function(){});


$('.category-square').click(function(){


if($(this).hasClass('halfOpacity')){

  $(this).removeClass('halfOpacity');
  $('.member-info-data').remove();

}else{

$('.member-info-data').remove();

$('.category-square').removeClass('halfOpacity');
  $(this).addClass('halfOpacity');

var memberWidth = parseInt($('.category-square').css('width'));
var rowWidth = parseInt($('.category-groupings').css('width'));
var amountPerRow = parseInt(rowWidth/memberWidth);

// console.log('amount per row: ' + amountPerRow);
  var staffMembers = [];
$('.category-square').each(function(){
  staffMembers.push($(this).index());
});

  var amountofMembers = 0;

  $('.category-square').each(function(){
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



var spantitle = $(this).find('span.title').text();
var spansubtitle = $(this).find('span.subtitle').text();
var spandomain_list = $(this).find('span.domain_list').text();
var spanlink_text = $(this).find('span.link_text').text();
var spanlink_url = $(this).find('span.link_url').text();
var svgimage = $(this).find('img.img').attr('src');


var svgimagestring = svgimage.replace(".svg", "-colored.svg");

var contentItem = '<div class="dk-gry category-panel"><div class="row"><div class="col-sm-12 col-md-3"><a href="' + spanlink_url + '"><img class="svg" src="'+ svgimagestring +'"></a><a href="' + spanlink_url + '" class="green-learn-more">' + spanlink_text + '&nbsp;<i class="fa fa-chevron-right"></i></a></div><div class="col-sm-12 col-md-9"><h2 class="domain-type">' + spantitle + '</h2><h4 class="sub-item">' + spansubtitle + '</h4><p class="white-tlds">' + spandomain_list + '</p></div></div></div>';

$('.category-square:eq('+ appender +')').after('<div class="member-info-data" style="display:none;">' + contentItem + '</div>');
$('.category-square:eq('+ appender +')').next(".member-info-data").slideDown();

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


// $('body').on('click', '.collapse-bar', function() {
//   $(this).parent().remove();

//     $('.triangle').remove();
// });



</script>
<!-- staff page script -->