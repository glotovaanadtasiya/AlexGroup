// 
// Animated UFO Canvas START
// 
(function () {
	function sprite (options) {
	
		var that = {},
			frameIndex = 0,
			tickCount = 0,
			ticksPerFrame = options.ticksPerFrame || 0,
			numberOfFrames = options.numberOfFrames || 1;
		
		that.context = options.context;
		that.width = options.width;
		that.height = options.height;
		that.image = options.image;
		
		that.update = function () {

            tickCount += 1;

            if (tickCount > ticksPerFrame) {

				tickCount = 0;
				
                // If the current frame index is in range
                if (frameIndex < numberOfFrames - 1) {	
                    // Go to the next frame
                    frameIndex += 1;
                } else {
                    frameIndex = 0;
                }
            }
        };
		
		that.render = function () {
		
		// Clear the canvas
		that.context.clearRect(0, 0, that.width, that.height);
		
		// Draw the animation
		that.context.drawImage(
			that.image,
			frameIndex * that.width / numberOfFrames,
			0,
			that.width / numberOfFrames,
			that.height,
			0,
			0,
			that.width / numberOfFrames,
			that.height);
		};
		
		return that;
	}
	
	// Get canvas
  var canvas = document.querySelector(".js-ufo-canvas");
  if (typeof(canvas) != 'undefined' && canvas != null) {
    var ufo,
    ufoImage;
    
    canvas.width = 610;
    canvas.height = 452;
    
    // Create sprite sheet
    ufoImage = new Image();	
    
    // Create sprite
    ufo = sprite({
      context: canvas.getContext("2d"),
      width: 4270,
      height: 452,
      image: ufoImage,
      numberOfFrames: 7,
      ticksPerFrame: 3
    });
    
    
    
    // Load sprite sheet
    ufoImage.addEventListener("load", gameLoop);
    ufoImage.src = "img/ufo-sprite.png";
  
  }
    
  function gameLoop () {
    
    window.requestAnimationFrame(gameLoop);
    
    ufo.update();
    ufo.render();
  }
} ());
// 
// Animated UFO Canvas END
// 