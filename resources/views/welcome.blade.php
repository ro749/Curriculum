<x-layout style="background-color: black;">
    <div class="background wow fadeInUp animated" data-wow-delay="2.4s" style="background-image: url('images/background2.jpg'); z-index: -2;"></div>
    <div class="background wow fadeInUp animated" data-wow-delay="1.8s" style="background-image: url('images/background1.png'); z-index: -1;"></div>
    
    <div id="wrapper" style="margin-top: 1vh; margin-left: 1vw;">
    <h1 class="wow fadeInUp animated" data-wow-delay=".0s">
        <span class="hero-text" style="animation-delay: 3s;">Welcome to my CV</span>
    </h1>
    <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
        <span class="hero-text" style="animation-delay: 2.9s;">I'm Rodrigo Rivera</span>
    </h2>
    <h3 class="wow fadeInUp animated" data-wow-delay="1.2s">
        <span class="hero-text" style="animation-delay: 2.8s;">Frutiger aero full stack developer</span>
    </h3>
    </div>
    @push('script-includes')
    <script src="js/vendors.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/validation-booking.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/custom-swiper-2.js"></script>
    @endpush
    @include('bubble')
    @include('popup')
@push('scripts')
<script>
    window.addEventListener('resize', function() {
        $('body').css({
          width: '100%',
          height: '100%'
        });
    });
    $(document).ready(function(){
        setTimeout(function() { 
            let count = 0;
            let titles = ['about me', 'experience', 'skills', 'contact', 'github'];
            let links = ['#about', '#experience', '#skills', '#contact', 'https://github.com/ro749'];
            let interval = setInterval(function() {
                create_bubble(titles[count], links[count]);
                count++;
                if(count >= 5) {
                    clearInterval(interval);
                }
            }, 100);
        }, 3000);
    });
    
</script>
@endpush
</x-layout>