function setup() {
	createCanvas(600, 400);
	background(0);	 // 28 is equal to backgroundcolor in Dark Theme
  }
  
  function draw() {
	randomPosX = random(0, 600);
	randomPosY = random(0, 400);
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
  
  function mousePressed() {
	background(0, 0, 0);
  }
  
