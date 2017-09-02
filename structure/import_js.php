<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script>
    $(document).ready(function () {

        $('#main_slider').slick({
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            adaptiveHeight: true,
            swipe: false
        });

        $('.material-icons').css("font-size");

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: true,
            fade: true,
            adaptiveHeight: true,
            adaptiveWidth: true
        });
        $('.slider-nav').slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            centerMode: true,
            focusOnSelect: true
        });
    });
</script>