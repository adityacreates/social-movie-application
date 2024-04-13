var images = ['images/poster1.jpg', 'images/poster2.jpg', 'images/poster3.jpg']; // Replace with your image URLs
var index = 0;

function changeBackground() {
    document.body.style.backgroundImage = 'url(' + images[index] + ')';
    index = (index + 1) % images.length;
}

// Change background every 5 seconds
setInterval(changeBackground, 5000);
