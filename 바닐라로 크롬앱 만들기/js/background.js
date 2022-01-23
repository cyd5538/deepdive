const images = ['a.jpg','b.jpg','c.jpg','d.jpg','e.jpg']

const choseImage = images[Math.floor(Math.random() * images.length)];

const bgImage = document.createElement("img");

bgImage.src = `image/${choseImage}`;

console.log(bgImage);

document.body.appendChild(bgImage);