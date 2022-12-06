const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");
const s = document.querySelector('.sidebar');

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');


themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');

});





// s.addEventListener('click', () => {
//     sideMenu.style.background = 'none';

//     s.querySelector('a:nth-child(1)').classList.toggle('active');
//     s.querySelector('a:nth-child(2)').classList.toggle('active');
//     s.querySelector('a:nth-child(3)').classList.toggle('active');
//     s.querySelector('a:nth-child(4)').classList.toggle('active');
//     s.querySelector('a:nth-child(5)').classList.toggle('active');
//     s.querySelector('a:nth-child(6)').classList.toggle('active');
//     s.querySelector('a:nth-child(7)').classList.toggle('active');

// })