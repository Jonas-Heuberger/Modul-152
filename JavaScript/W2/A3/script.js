let bubbles = [];

function setup() {
  createCanvas(600, 400);
  for (let i = 0; i < 10; i++) { // 10 Kreise werden gebildet
    let x = random(width);
    let y = random(height);
    let r = random(10, 50);
    let b = new Bubble(x, y, r);
    bubbles.push(b);
  }
}

function mousePressed() {
  for (let i = 0; i < bubbles.length; i++) {
    bubbles[i].clicked(mouseX, mouseY);
  }
}

function draw() {
  background(0);
  for (let i = 0; i < bubbles.length; i++) {
    bubbles[i].move();
    bubbles[i].show();
  }
}

//--------------Bubble KLASSE------------------------------------
class Bubble {
  constructor(tempX, tempY, tempRadius) {
    this.x = tempX;
    this.y = tempY;
    this.radius = tempRadius;
    this.brightness = 0; // Schwarz während der Initialisierung
  }

  clicked(px,py) {
    let d = dist(px, py, this.x, this.y);
    if (d < this.radius) {
     bubbles.splice(bubbles.indexOf(this), 1);
      console.log("getroffen!!!");
    }
  }

  move() {
    this.x = this.x + random(-2, 2);
    this.y = this.y + random(-2, 2);
  }

  show(px, py) {
    stroke(255);
    strokeWeight(4);
     fill(this.brightness, 10);
    
  
    let d = dist(mouseX, mouseY, this.x, this.y);
    
    if (d < this.radius) {
      fill(50);
    }
  
    
   
    ellipse(this.x, this.y, this.radius * 2);
  }
} //----------------ENDE der Bubble-KLASSE----------------------------