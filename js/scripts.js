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

    modal.on('hidden.bs.modal', function (e) {
        $(this).find('.form-control').val('');
        modal.find('.has-error').removeClass('has-error');
    });

    modal.find('.send-request').on('click', function () {

        modal.find('.has-error').removeClass('has-error');

        var list = modal.find('.form-control');
        var hasError = false;

        var data = {};

        list.each(function () {

            var val = $(this).val().replace(/^(\s+)([^\s]+)(\s+)$/, '$2');

            if (val == '')
            {

                $(this).parent().addClass('has-error');
                hasError = true;
            } else
            {
                data[$(this).attr('name')] = val;
            }
        });


        if (!hasError)
        {
            $.ajax({
                type: "POST",
                url: "/sendmail",
                data: data,
                success: function (data) {
                    
                    console.log(modal.find('#success-message'));
                    modal.find('#success-message').show(1).delay(3000).hide(300);
                    setTimeout(function(){
                        modal.modal('hide');
                    }, 3000);
                }
            });
        }

        return false;
    });

    $('#send-request-link').on('click', function (e) {

        modal.modal('show');

        return false;
    });
})(jQuery);