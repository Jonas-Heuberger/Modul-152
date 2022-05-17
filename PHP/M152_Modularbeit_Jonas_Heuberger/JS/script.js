
// mit der Setup Funktion lege ich die grösse und die Hintergrundfarbe fest
function setup() {
	createCanvas(1440, 711);
	background(0);	 
  }
  
//   mit der draw Funktion werden die einzelnen Objekte gezeichnet
  function draw() {
	randomPosX = random(0, 1440);
	randomPosY = random(0, 711);
	var color = {
		r: 0,
		g: 0,
		b: 0
	  };
    color.r = random(0, 255);
    color.b = random(0, 255);
	fill(color.r, color.g, color.b, 50);
	ellipse(randomPosX, randomPosY, 24, 24);	
  }
  
//   mit der mouseDragged Funktion wird die draw Funktion zurückgesetzt
  function mousePressed() {
	background(0, 0, 0);
  }
  
