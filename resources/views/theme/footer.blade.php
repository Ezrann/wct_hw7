<footer class="tm-bg-dark-blue">
    <div class="container">
        <div class="row">
            <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                Copyright © <span class="tm-current-year">{{ date('Y') }}</span> Your Company
                - Design: <a rel="nofollow" href="https://www.tooplate.com" class="tm-color-primary tm-font-normal" target="_parent">Tooplate</a>
            </p>
        </div>
    </div>
</footer>
</div>

<!-- load JS files -->
<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/datepicker.min.js') }}"></script>
<script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
<script src="{{ asset('slick/slick.min.js') }}"></script>
<script>
    /* Google map */
    var map = '';
    var center;

    function initialize() {
        var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(-23.013104, -43.394365),
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
            calculateCenter();
        });

        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter(center);
        });
    }

    function calculateCenter() {
        center = map.getCenter();
    }

    function loadGoogleMap() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&callback=initialize';
        document.body.appendChild(script);
    }

    function setCarousel() {
        if ($('.tm-article-carousel').hasClass('slick-initialized')) {
            $('.tm-article-carousel').slick('destroy');
        }

        if ($(window).width() < 438) {
            $('.tm-article-carousel').slick({
                infinite: false,
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        } else {
            $('.tm-article-carousel').slick({
                infinite: false,
                dots: true,
                slidesToShow: 2,
                slidesToScroll: 1
            });
        }
    }

    function setPageNav() {
        if ($(window).width() > 991) {
            $('#tm-top-bar').singlePageNav({
                currentClass: 'active',
                offset: 79
            });
        } else {
            $('#tm-top-bar').singlePageNav({
                currentClass: 'active',
                offset: 65
            });
        }
    }

    function togglePlayPause() {
        vid = $('.tmVideo').get(0);

        if (vid.paused) {
            vid.play();
            $('.tm-btn-play').hide();
            $('.tm-btn-pause').show();
        } else {
            vid.pause();
            $('.tm-btn-play').show();
            $('.tm-btn-pause').hide();
        }
    }

    $(document).ready(function() {
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > 100) {
                $(".tm-top-bar").addClass("active");
            } else {
                $(".tm-top-bar").removeClass("active");
            }
        });

        loadGoogleMap();

        const pickerCheckIn = datepicker('#inputCheckIn');
        const pickerCheckOut = datepicker('#inputCheckOut');

        setCarousel();
        setPageNav();

        $(window).resize(function() {
            setCarousel();
            setPageNav();
        });

        $('.nav-link').click(function() {
            $('#mainNav').removeClass('show');
        });

        $('.tm-btn-play').click(function() {
            togglePlayPause();
        });

        $('.tm-btn-pause').click(function() {
            togglePlayPause();
        });

        $('.tm-current-year').text(new Date().getFullYear());
    });
</script>
</body>

</html>
