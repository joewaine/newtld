alert('helllo');



$.get( "http://api.dizzy.ninja/recommend-domains?account=greatdomains&password=f9ftih82&input=***&maxCount=100&allowpremium=1&usageid=alldonuts", function( data ) {
  alert( "Load was performed." );
});