var circleX = 0;
function setup() {
	createCanvas(600, 400);
	background(0);	 // 28 is equal to backgroundcolor in Dark Theme
  }
  checker = 0;
	function draw() {
    if (checker == 0){
      circleX += 10;
    } else {
      circleX -= 10;
    }
      if (circleX == 600){
          checker = 1;
          }  
      if (circleX == 0){
        checker = 0;
      } 
	background(0);
	  // Kreis zeichnen
	  fill(250, 200, 200);
	  ellipse(circleX, 200, 80, 80);
    }
	
	  


  


