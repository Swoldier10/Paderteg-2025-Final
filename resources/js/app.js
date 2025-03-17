import './bootstrap';

var swiper = new Swiper(".multiple-slide-carousel", {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: ".multiple-slide-carousel .swiper-button-next",
        prevEl: ".multiple-slide-carousel .swiper-button-prev",
    },
    breakpoints: {
        1920: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        1028: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        990: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    let partLeftPos = 0;
    let partRightPos = 0;

    window.addEventListener("scroll", function () {
        let distance = window.scrollY * 2;
        let left = partLeftPos - distance;
        let right = partRightPos - distance;

        document.querySelectorAll(".left").forEach(el => el.style.left = left + "px");
        document.querySelectorAll(".right").forEach(el => el.style.right = right + "px");

        console.log(partLeftPos);
        console.log(partRightPos);
    });
});
