(function () {
    Galleria.loadTheme(
        "https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/themes/classic/galleria.classic.min.js"
    );
    Galleria.configure({
        autoplay: 3000,
        lightbox: true,
        overlayBackground: "#4267B0",
        pauseOnInteraction: true,
        showCounter: true,
        swipe: true,
        imageCrop: false,
    });
    Galleria.run(".gallery");
})();
