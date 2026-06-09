@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

@endpush
<x-layout style="background-color: black;">
    
    <div class="background" style="background-image: url('images/background2.jpg'); z-index: -2;"></div>
    @include('popup')
    
    @push('script-includes')
    <script src="js/vendors.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/validation-booking.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/custom-swiper-2.js"></script>
    @endpush
    @include('bubble')
@push('scripts')
<script>
    window.addEventListener('resize', function() {
        $('body').css({
          width: '100%',
          height: '100%'
        });
    });

    function explode(wrapper) {
        wrapper.animate([
            { transform: 'scale(1), translate(100, 100)' },
            { transform: 'scale(1.5), translate(100, 100)' }
        ], {
            duration: 500,
            fill: 'forwards',
            easing: 'ease-out',
        });
    }
</script>
@endpush
</x-layout>