(function () {

    $("#phone").mask("+7 (999) 999 99 99");

    $('[data-hoverable]').hover(function () {

        var element = $($(this).data('hoverable'));
        if (element.length)
        {
            element.addClass('hover');
        }

    }, function () {

        var element = $($(this).data('hoverable'));
        if (element.length)
        {
            element.removeClass('hover');
        }
    });

    // main page, project slider
    var holder = $('.projects-desc');
    if (holder.length)
    {

        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            initialSlide: 0,
            effect: 'coverflow',
//        grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflow: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true
            }
        });

        swiper.on('transitionEnd', function (swiper) {

            var related = $('#project-desc-' + swiper.activeIndex);

            if (related.length)
            {
                $('.projects-desc').find('.active').removeClass('active');
                related.addClass('active');
            }
        });
    }

    // company page, sliders
    var holder = $('#company-sliders');
    if (holder.length)
    {
        var swiper = new Swiper('#company-sliders', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            direction: 'vertical',
            mousewheelControl: true
        });
    }

    // services page, sliders
    var holder = $('#services-sliders');
    if (!holder.length)
    {
        holder = $('#projects-sliders');
    }

    if (holder.length)
    {
        var swiper = new Swiper('#' + holder.attr('id'), {
            initialSlide: 0,
            nextButton: '.button-next',
            prevButton: '.button-prev'
        });

        var handler = function (swiper) {

            var active = $(swiper.slides[swiper.activeIndex]);

            var next = active.data('next');
            var prev = active.data('prev');

            if (next)
            {
                swiper.nextButton.text(next);
            }

            if (prev)
            {
                swiper.prevButton.text(prev);
            }

        };

        swiper.on('transitionEnd', handler);
    }


    var verticalSlider = $('.swiper-container-v');

    if (verticalSlider.length)
    {
        var swiperV = new Swiper('.swiper-container-v', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            direction: 'vertical',
            spaceBetween: 25,
            height: 230,
            centeredSlides: true,
            slidesOffsetBefore: 115,
            initialSlide: 1
        });

    }


    var modal = $('#send-request-modal');
    
    modal.on('hidden.bs.dropdown', function(){
        console.log($(this));   
    });
    
    $('#send-request-link').on('click', function (e) {

        modal.modal('show');

        return false;
    });
})(jQuery);