


// MODAL 
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})



// Animações ao rolar a página
document.addEventListener("DOMContentLoaded", function() {
    animateOnScroll('#home', 'fade-in');
    animateOnScroll('#novidades', '');
    animateOnScroll('#porque-escolher-nos', 'fade-in');
    animateOnScroll('#sobre-os-perfumes', '');
});

function animateOnScroll(elementSelector, animationClass) {
    const element = document.querySelector(elementSelector);
    if (!element) return;
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                element.classList.add(animationClass);
                observer.unobserve(entry.target);
            }
        });
    });
    observer.observe(element);
}

