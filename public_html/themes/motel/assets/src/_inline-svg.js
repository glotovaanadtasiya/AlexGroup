/* eslint-disable no-undef */
$(function() {

	// Replace all SVG images with inline SVG 
  makeSvgInline();	
  
});


// Replace SVG images with inline SVG 
window.makeSvgInline = () => {
  $('.js-svg').each(function(index, image){
    const $img = $(image);
    const imgID = $img.attr('id');
    const imgClass = $img.attr('class');
    const imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
      let $svg = $(data).find('svg');
      if(typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      if(typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass+' replaced-svg')
        .attr("preserveAspectRatio", "xMidYMid meet");
      }
      $svg = $svg.removeAttr('xmlns:a');
      $img.replaceWith($svg);

    }, 'xml');
  });
}