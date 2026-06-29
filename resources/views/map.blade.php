<x-layout> 
    @push('script-includes')
        <script src="vendor/listing-utils/js/image-map-pro.min.js"></script>
    @endpush
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <p>Api desmostration, using api from <a href="https://unirateapi.com">unirateapi.com</a> to get vat rates from the European Union</p>
    <div style="width: 50%;">
    <div id="imp"></div>
    </div>
    </div>
    @push('scripts')
    <script>
        ImageMapPro.init('#imp',@json($map));
    </script>
    @endpush
</x-layout>