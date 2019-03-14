document.addEventListener('DOMContentLoaded', function(){
    var swiper1 = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var swiper2 = new Swiper('.companies__slider-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    var all = document.getElementById('latest-works__all');
    var branding = document.getElementById('latest-works__branding');
    var design = document.getElementById('latest-works__design');
    var development = document.getElementById('latest-works__development');
    var strategy = document.getElementById('latest-works__strategy');

    all.onclick = function () {
        if (getComputedStyle(document.getElementById('latest-works__all-images')).display === "none"){
            document.getElementById('latest-works__all-images').style.display = "block";
            document.getElementById('latest-works__branding-images').style.display = "none";
            document.getElementById('latest-works__design-images').style.display = "none";
            document.getElementById('latest-works__development-images').style.display = "none";
            document.getElementById('latest-works__strategy-images').style.display = "none";
            document.getElementById('latest-works__all').style.color = "#c0301c";
            document.getElementById('latest-works__branding').style.color = "black";
            document.getElementById('latest-works__design').style.color = "black";
            document.getElementById('latest-works__development').style.color = "black";
            document.getElementById('latest-works__strategy').style.color = "black";
        }
    };

    branding.onclick = function () {
        if (getComputedStyle(document.getElementById('latest-works__branding-images')).display === "none"){
            document.getElementById('latest-works__all-images').style.display = "none";
            document.getElementById('latest-works__branding-images').style.display = "block";
            document.getElementById('latest-works__design-images').style.display = "none";
            document.getElementById('latest-works__development-images').style.display = "none";
            document.getElementById('latest-works__strategy-images').style.display = "none";
            document.getElementById('latest-works__all').style.color = "black";
            document.getElementById('latest-works__branding').style.color = "#c0301c";
            document.getElementById('latest-works__design').style.color = "black";
            document.getElementById('latest-works__development').style.color = "black";
            document.getElementById('latest-works__strategy').style.color = "black";
        }
    };

    design.onclick = function () {
        if (getComputedStyle(document.getElementById('latest-works__design-images')).display === "none"){
            document.getElementById('latest-works__all-images').style.display = "none";
            document.getElementById('latest-works__branding-images').style.display = "none";
            document.getElementById('latest-works__design-images').style.display = "block";
            document.getElementById('latest-works__development-images').style.display = "none";
            document.getElementById('latest-works__strategy-images').style.display = "none";
            document.getElementById('latest-works__all').style.color = "black";
            document.getElementById('latest-works__branding').style.color = "black";
            document.getElementById('latest-works__design').style.color = "#c0301c";
            document.getElementById('latest-works__development').style.color = "black";
            document.getElementById('latest-works__strategy').style.color = "black";
        }
    };

    development.onclick = function () {
        if (getComputedStyle(document.getElementById('latest-works__development-images')).display === "none"){
            document.getElementById('latest-works__all-images').style.display = "none";
            document.getElementById('latest-works__branding-images').style.display = "none";
            document.getElementById('latest-works__design-images').style.display = "none";
            document.getElementById('latest-works__development-images').style.display = "block";
            document.getElementById('latest-works__strategy-images').style.display = "none";
            document.getElementById('latest-works__all').style.color = "black";
            document.getElementById('latest-works__branding').style.color = "black";
            document.getElementById('latest-works__design').style.color = "black";
            document.getElementById('latest-works__development').style.color = "#c0301c";
            document.getElementById('latest-works__strategy').style.color = "black";
        }
    };

    strategy.onclick = function () {
        if (getComputedStyle(document.getElementById('latest-works__strategy-images')).display === "none"){
            document.getElementById('latest-works__all-images').style.display = "none";
            document.getElementById('latest-works__branding-images').style.display = "none";
            document.getElementById('latest-works__design-images').style.display = "none";
            document.getElementById('latest-works__development-images').style.display = "none";
            document.getElementById('latest-works__strategy-images').style.display = "block";
            document.getElementById('latest-works__all').style.color = "black";
            document.getElementById('latest-works__branding').style.color = "black";
            document.getElementById('latest-works__design').style.color = "black";
            document.getElementById('latest-works__development').style.color = "black";
            document.getElementById('latest-works__strategy').style.color = "#c0301c";
        }
    };

});