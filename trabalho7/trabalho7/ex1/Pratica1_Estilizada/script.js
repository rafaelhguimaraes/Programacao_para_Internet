document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll("h2");

    sections.forEach(section => {
        section.addEventListener("click", function() {
            const nextElement = section.nextElementSibling; 
            nextElement.style.display = "none"; 
        });

        section.addEventListener("dblclick", function() {
            const nextElement = section.nextElementSibling; 
            nextElement.style.display = "block"; 
        });
    });
});
