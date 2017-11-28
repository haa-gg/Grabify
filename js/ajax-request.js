var request = $.ajax({
  //Define our ajax request
    url:"https://api.spotify.com/v1/me/tracks?offset=0&limit=50",
    type:"GET",
    dataType:"json",
    //Big, ugly O-Auth token goes under here
    headers:{"Authorization": "Bearer BQDOMK8Tx7vk00cJZub-3-50IhsF-y9glEQy_N4aUIe-52WrkNgj3HzFfj4nY40BI3VmYz3zIsZg6C61MggkMUa0jrUZ0JmOX3uMVMv1fnr5FOAuPDDQXgrg8-Z0FMVDTdltS3XI3azHPe783LwQ4mo"},
    success: function(data) {
     //Format our JSON objet into something JS likes working with
       var result = JSON.parse(request.responseText);
       //Loop through the array and output the name and title
      for (i = 0 ; i < result['items'].length; i++){
      $('.single').append(result['items'][i]['track']['album']['artists'][0]['name'] + ' - ' + result['items'][i]['track']['name'] + '<br>');
}
     
    },
    error: function(data) {
     console.log('Not working');
    }
});
