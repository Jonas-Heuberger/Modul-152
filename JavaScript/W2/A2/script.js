// leeres Array bilden
let bubbles = [];

// Bilden des Rahmens
function setup() {
  createCanvas(800, 400);
}

// beim Event MouseDragged (Drücken der Maus) werden diese Anweisungen ausgeführt
function mouseDragged() {
  let r = random(2, 15);
  let b = new Bubble(mouseX, mouseY, r); // mouseX ist die X-Koordinate des Maus-Zeigers im Rahmen 
  bubbles.push(b); // Fügt es ans Ende des Arrays an
}

// Zeichnen der Objekte
function draw() {
  background(0);
  for (let i = 0; i < bubbles.length; i++) {
    bubbles[i].move();
    bubbles[i].show();
  }
}

// Bildung der Klasse ---------------------------------
// Die Klasse nimmt 3 Konstruktoren-Argumente entgegen
class Bubble {
  constructor(tempX, tempY, tempRadius) {
    this.x = tempX;
    this.y = tempY;
    this.radius = tempRadius;
  }

  move() {
    this.x = this.x + random(-2, 2);
    this.y = this.y + random(-2, 2);
  }

  show() {
    stroke(random(1,255),random(1,255),random(1,255)); // Zufalls-Rahmenfarben
    strokeWeight(4);
    fill(255, 160);
    //rect(this.x, this.y, this.radius * 2,this.radius * 2)
    textSize(random(50, 100));
    text("✞", this.x, this.y);
  }
} // Ende der Klasse Bubble --------------------------

