    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            URLhashListener:true,
            startPosition: 'URLHash',
            center: true,
            items:3,
            loop:true,
            margin:30,
            smartSpeed:1100,
            autoWidth: false,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:2
                }
            }
            // navText:["<img src='assets/img/slide-left.png'>", "<img src='assets/img/slide-right.png'>"],
        });
        $('.next').click(function(){
            owl.trigger('next.owl.carousel');
          });
          $('.prev').click(function(){
            owl.trigger('prev.owl.carousel');
          });
    });

    $('#slider-overlay').on('click',function () {
        $('.overlay-slider').addClass('active-overlay-slider');
        // $('.next').addClass('active-item-next');
        // $('.prev').addClass('active-item-prev');
        $('#content').addClass('hide-project-detail');
    });

    $('#dismiss-bottom-slider, #dismiss-slider').on('click', function () {
        $('.overlay-slider').removeClass('active-overlay-slider');
        // $('.next').removeClass('active-item-next');
        // $('.prev').removeClass('active-item-prev');
        $('#content').removeClass('hide-project-detail');
    });
