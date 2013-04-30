$(function () {
  var skycons = new Skycons({"color": "pink"});

  $('.icon').each(function(index, element){
    var mode = $(element).attr('class').split(' ')[1].toUpperCase().replace(/-/g, '_');
    skycons.add(element, Skycons[mode]);
  });

  skycons.play();
});
