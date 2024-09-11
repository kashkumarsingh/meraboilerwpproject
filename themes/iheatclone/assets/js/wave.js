// let waveY = [];
// let waveX = [];
// let angle = 0;
// let amplitude = 100;
// let frequency = 0.02;
// let canvas;

// function setup() {
//     let section = document.querySelector('.background-section');
//     let sectionWidth = section.clientWidth;
//     let sectionHeight = section.clientHeight;

//     canvas = createCanvas(sectionWidth, sectionHeight);
//     canvas.parent('waveCanvasContainer');
//     canvas.style('z-index', '-1');
//     canvas.position(0, 0);

//     for (let i = 0; i < width; i++) {
//         waveX[i] = 0;
//     }
//     for (let j = 0; j < height; j++) {
//         waveY[j] = 0;
//     }
// }

// function draw() {
//     clear(); // Clear previous frames
//     noFill();
//     stroke(255);
//     strokeWeight(2);

//     // Horizontal wave
//     beginShape();
//     for (let x = 0; x < waveX.length; x++) {
//         waveX[x] = sin(angle + x * frequency) * amplitude;
//         vertex(x, height / 2 + waveX[x]);
//     }
//     endShape();

//     // Vertical wave
//     beginShape();
//     for (let y = 0; y < waveY.length; y++) {
//         waveY[y] = sin(angle + y * frequency) * amplitude;
//         vertex(width / 2 + waveY[y], y);
//     }
//     endShape();

//     angle += 0.05;
// }

// function windowResized() {
//     let section = document.querySelector('.background-section');
//     let sectionWidth = section.clientWidth;
//     let sectionHeight = section.clientHeight;

//     resizeCanvas(sectionWidth, sectionHeight);
//     waveX = new Array(width).fill(0);
//     waveY = new Array(height).fill(0);
// }


// let waveY = [];
// let waveX = [];
// let angle = 0;
// let amplitude = 100;
// let frequency = 0.02;

// function setup() {
//     let canvas = document.getElementById('waveCanvas');

//     for (let i = 0; i < width; i++) {
//         waveX[i] = 0;
//     }
//     for (let j = 0; j < height; j++) {
//         waveY[j] = 0;
//     }
// }

// function draw() {
//     clear(); // Clear previous frames
//     noFill();
//     stroke(255);
//     strokeWeight(2);

//     // Horizontal wave
//     beginShape();
//     for (let x = 0; x < waveX.length; x++) {
//         waveX[x] = sin(angle + x * frequency) * amplitude;
//         vertex(x, height / 2 + waveX[x]);
//     }
//     endShape();

//     // Vertical wave
//     beginShape();
//     for (let y = 0; y < waveY.length; y++) {
//         waveY[y] = sin(angle + y * frequency) * amplitude;
//         vertex(width / 2 + waveY[y], y);
//     }
//     endShape();

//     angle += 0.05;
// }

// function windowResized() {
//     let section = document.querySelector('.background-section');
//     let sectionWidth = section.clientWidth;
//     let sectionHeight = section.clientHeight;

//     resizeCanvas(sectionWidth, sectionHeight);
//     waveX = new Array(width).fill(0);
//     waveY = new Array(height).fill(0);
// }

// let waveY = [];
// let angle = 0;
// let amplitude = 20;
// let frequency = 0.01;

// function setup() {
//     let canvas = createCanvas(windowWidth, windowHeight);
//     canvas.parent('waveCanvasContainer');

//     for (let i = 0; i < width; i++) {
//         waveY[i] = 0;
//     }
// }

// function draw() {
//     background('#e6e6e6'); // Set background color

//     noFill();
//     stroke('#f3f4f6');// Set stroke color
//     strokeWeight(2.5);

//     // Draw multiple horizontal wave lines along the x-axis
//     for (let y = 100; y < height; y += 100) {
//         beginShape();
//         for (let x = 0; x < width; x++) {
//             waveY[x] = sin(angle + x * frequency) * amplitude;
//             vertex(x, y + waveY[x]);
//         }
//         endShape();
//     }

//     angle += 0.02; // Increment angle for animation
// }


// function windowResized() {
//     let section = document.querySelector('.background-section');
//     let sectionWidth = section.clientWidth;
//     let sectionHeight = section.clientHeight;

//     resizeCanvas(sectionWidth, sectionHeight);
//     waveX = new Array(width).fill(0);
//     waveY = new Array(height).fill(0);
// }

let xspacing = 16; // Distance between each horizontal location
let w; // Width of entire wave
let theta = 0.0; // Start angle at 0
let amplitude = 25.0; // Height of wave
let period = 500.0; // How many pixels before the wave repeats
let dx; // Value for incrementing x
let yvalues; // Using an array to store height values for the wave

function setup() {
    let section = document.querySelector('.background-section');
    let sectionWidth = section.clientWidth;
    let sectionHeight = section.clientHeight;
    let canvas = createCanvas(sectionWidth, sectionHeight);
  canvas.parent('waveCanvasContainer');
  w = width + 16;
  dx = (TWO_PI / period) * xspacing;
  yvalues = new Array(floor(w / xspacing));
}

function draw() {
  background('#e6e6e6'); // Set background color to light gray

  calcWave();
  renderWave();
}

function calcWave() {
  // Increment theta (try different values for
  // 'angular velocity' here)
  theta += 0.02;

  // For every x value, calculate a y value with sine function
  let x = theta;
  for (let i = 0; i < yvalues.length; i++) {
    yvalues[i] = sin(x) * amplitude;
    x += dx;
  }
}

function renderWave() {
  noFill();
  stroke('#ebebeb');
  strokeWeight(2);
  
  // Draw repeated sine waves along the x-axis to cover the entire canvas height
  for (let y = 0; y < height; y += xspacing) {
    beginShape();
    for (let i = 0; i < yvalues.length; i++) {
      vertex(i * xspacing, y + yvalues[i]);
    }
    endShape();
  }
}
function windowResized() {
    let section = document.querySelector('.background-section');
    let sectionWidth = section.clientWidth;
    let sectionHeight = section.clientHeight;

    resizeCanvas(sectionWidth, sectionHeight);
    waveX = new Array(width).fill(0);
    waveY = new Array(height).fill(0);
}



