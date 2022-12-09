// Swiper For All The Swipers Except Projects And Messages
const swiper = new Swiper(".swiper", {
    direction: "horizontal",
    speed: 1000,
    spaceBetween: 30,
    slidesPerView: "auto",
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Swiper For Projects For Laptop And High Resolutions Devices
const projectSwiper = new Swiper(".projects-swiper", {
    direction: "horizontal",
    speed: 1000,
    slidesPerView: "auto",
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Swiper For News
const newsSwiper = new Swiper(".news-swiper", {
    direction: "horizontal",
    speed: 1000,
    spaceBetween: 30,
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
    },
});

// Swiper For Messages
const messageSwiper = new Swiper(".message-swiper", {
    direction: "horizontal",
    speed: 1000,
    spaceBetween: 30,
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
    },
});

var heroSectionSwiper = new Swiper(".bannerSwiper", {
    direction: "horizontal",
    speed: 1000,
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseOver: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + "</span>";
        },
    },
});
