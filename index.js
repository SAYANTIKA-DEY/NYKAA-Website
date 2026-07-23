// hero banner
let index = 0;

const slides = document.querySelector(".slides");
const totalSlides = document.querySelectorAll(".slides img").length;

setInterval(() => {

    index++;

    if(index >= totalSlides){
        index = 0;
    }

    slides.style.transform = `translateX(-${index * 100}%)`;

}, 2000);

// sign In/Log In button click then login page open
const loginBtn = document.getElementById("loginBtn");

loginBtn.addEventListener("click", function () {
    window.location.href = "login.php";
});


const imgWrap = document.getElementById('imgWrap');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

// ডানে যাওয়ার বাটন ক্লিক করলে
nextBtn.addEventListener('click', () => {
  imgWrap.scrollBy({ left: 300, behavior: 'smooth' });
});

// বামে যাওয়ার বাটন ক্লিক করলে
prevBtn.addEventListener('click', () => {
  imgWrap.scrollBy({ left: -300, behavior: 'smooth' });
});