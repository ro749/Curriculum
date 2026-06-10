<div id="aero" style="width: 90%; height: 90%; padding: 5%;">
    <div class="close-btn"></div>
    @include('info.skills')
    @include('info.experience')
    @include('info.about')
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('.close-btn').on('click', function() {
            $('#aero')[0].animate([
                { transform: 'translate(-50%, -50%)' },
                { transform: 'translate(-50%, -200%)'}
            ], {
                duration: 500,
                fill: 'forwards',
                easing: 'ease-out',
            });
            create_bubble(bubble_popped.title, bubble_popped.link);
        });
    });
</script>
@endpush