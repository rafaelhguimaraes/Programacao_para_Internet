document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll("main img");

    images.forEach(image => {
        image.addEventListener("mouseenter", function() {
            image.style.boxShadow = "0 4px 15px rgba(255, 0, 0, 0.8)"; 
        });
        image.addEventListener("mouseleave", function() {
            image.style.boxShadow = "0 1px 10px rgba(0, 0, 0, 0.1)"; 
        });
    });
});
