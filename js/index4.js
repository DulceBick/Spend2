$.getJSON('https://freegeoip.net/json/',function(data){
  var img = new Image(),
      src = 'https://maps.google.com/maps/api/staticmap?center='+data.latitude+','+data.longitude+'&zoom=14&maptype=satellite&size=640x640&scale=2&sensor=false&format=jpeg';
  console.log(src);
  $(img).load(function(){
    $('#map')
      .addClass('done')
      .css({
    		'background-image':'url('+src+')'
    	});
  })
  img.src = src;
  $('#shadow').html(data.region_name);
})
