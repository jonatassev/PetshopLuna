$(document).ready(function() {
    let navBtn = $('.nav-item');

    let bannerSection = $('#mainSlider');
    let aboutSection = $('#about-area');
    let contactSection = $('#contact-area');
    let scrollTo = '';

    $(navBtn).click(function() {
        let btnId = $(this).attr('id');

        if (btnId == 'about-menu') {
          scrollTo = aboutSection;
        } else if (btnId == 'contact-menu') {
          scrollTo = contactSection;
        } else {
          scrollTo = bannerSection;
        }

        $([document.documentElement, document.body]).animate({scrollTop: $(scrollTo).offset().top - 70}, 1500);
    });
});