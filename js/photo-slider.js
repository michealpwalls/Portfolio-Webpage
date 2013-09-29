/**
 * photo-slider.js		-		simple-photo-slider
 * 
 * By Fabio Kenji <https://github.com/fkenji/simple-photo-slider>
 */

var PhotoSlider = function (spec) {
    var   current = 0,
          intervalId = 0;
    
    function _init () {      
        var   sliderImage = null,
              sourceDiv = $(spec.source),
              buttonsDiv = $('<div id="buttons"> </div>');

      _addImage(sourceDiv);
      _addPhotoSliderButtons(sourceDiv, buttonsDiv);      
      _get(0);
    }
    
    function _addImage(sourceDiv){      
      var   ul = $("<ul>").addClass("photo-slider");
      
      $.each(spec.images, function(e){
        var   img =  new Image();
        img.src = spec.images[e];
        img.width = 320;
        ul.append($("<li>").append(img).hide());

      });
  
      sourceDiv.append(ul);
      ul.children().first().show();
    }

    
    function _addPhotoSliderButtons(sourceDiv, buttonsDiv){        
      _attachHoverEvent(sourceDiv, buttonsDiv);
      _createIndividualButtons(buttonsDiv);
      _attachButtons(sourceDiv, buttonsDiv);
    }
    
    function _attachButtons(sourceDiv, buttonsDiv){
      sourceDiv.append(
          buttonsDiv
      );      
    }
    
    function _attachHoverEvent(sourceDiv, buttons){
        buttons.hide();
        sourceDiv.hover(function() {
            buttons.show()
        }, function() {
            buttons.hide()
        });      
    }
    
    function _createIndividualButtons(buttons){
      $.each( spec.images, function (i) {
        buttons
          .append(
              $("<div class='marker'></div>").click(function (event) {
                  _get(i);
                  _slideshowStop();
                })
            );
      });
    }
    
    function _get(number) {
      current = number;
      
      var allMarkers = $(".marker"),
          ul = $(".photo-slider");
            
      allMarkers.removeClass('selected');
      allMarkers.eq(current % spec.images.length).addClass('selected');

      ul.children().hide();
      var filteredIndex = ":eq("+ (current % spec.images.length) + ")";
      ul.children(filteredIndex).fadeIn();
    }
    
    function _next() {
      current = current + 1;
      _get(current);
    }
    
    function _slideshowStart () {
      intervalId = setInterval(function() { _next() }, 5000);
    }
    
    function _slideshowStop () {
      clearInterval(intervalId);
    }
    
    _init();
           
    return {  
          init: _init,
          next: _next,
          get: _get,
          start: _slideshowStart
      }
};
