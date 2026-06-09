<x-layout>
    <div id="wrapper">

        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>
        @include(config('overrides.views.header'))

                                    <section style="background-color:#fef5e6;" class="  relative no-top no-bottom overflow-hidden">
                                        <div class="container-fluid position-relative half-fluid">

                                          <div class="container">

                                            <div class="row gx-5">
                                              <!-- Image -->
                                              <div class="col-lg-6 position-lg-absolute left-half h-100 overflow-hidden">
                                                <div class="image" data-bgimage="url(images/poi.jpg) center"></div>
                                              </div>
                                              <!-- Text -->
                                              <div class="col-lg-6 offset-lg-6 relative z-3">
                                                
                                                <div class="col-lg-12"> 
                                                    <div class="ps-lg-3">
                                                        <br><br><br>
                                                        <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                                            VIVE MÁS ALLA DE TU DEPARTAMENTO
                                                        </h2>
                                                        <p class="wow fadeInUp" data-wow-delay=".6s">
                                                            Descubre una nueva forma de vivir en SOHO, ubicado en Boreales, Zapopan, Jalisco, donde cada detalle ha sido pensado para ofrecerte comodidad, estilo y funcionalidad. Además de modernos departamentos, tendrás acceso a una exclusiva zona comercial y amenidades diseñadas para tu bienestar.
                                                        </p>
                                                        <br>
                                                        <p class="wow fadeInUp" data-wow-delay=".6s">
                                                            Aquí, tu hogar se conecta con todo lo que te hace sentir bien.
                                                        </p>
                                                       <br><br><br>
                                                    </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </section>  
                @if(isset($imp))
                    <div id="image-map-pro"></div>
                @else
                    <img src="https://propstudios.mx/img/Soho/Ubicaciones/Torre/{{ $unit->unit }}.jpg">
                @endif
                            
                            
        
                <section id="unit-info" class="bg-dark section-dark text-light" 
                @if(empty($unit))
                style="display: none;"
                @endif
                >
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-4">
                                <div class="pe-lg-3">
                                    <h1 class="wow fadeInUp" data-wow-delay=".4s"><x-f-text id="unit" :unit="$unit"></x-f-text></h1>
                                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">Modelo</div>
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s"><x-f-text id="modelo" :unit="$unit"></x-f-text></h2>
                                    <div class="d-flex justify-content-left align-items-left">
                                         <img src="images/svg/size.svg" class="w-30px me-3" alt=""><div class=""><x-f-text id="m2" :unit="$unit"></x-f-text> m²</div>
                                    </div><br>
                                    <p class="wow fadeInUp" data-wow-delay=".6s" style="margin-bottom: 1rem !important;">Un modelo de departamento que evoca armonía y serenidad, perfecto para aquellos que buscan un hogar tranquilo y equilibrado, inspirado en la belleza minimalista.</p>
                                    
                                    <div id="characteristics" class="relative overflow-hidden">
                                        <x-f-list :data="$unit" id="characteristics"/>
                                    </div>
                                                                
                            <br>
                                                                
                                                                
                                </div>
                            </div>
                            
                                             
                            <div class="col-lg-8">
                                <div class="owl-carousel owl-theme owl-single-dots">
                                    <x-f-image :data="$unit" id="modelo" dif="-iso" src="Modelos/ISO/" ext=".png" class="w-100 wow fadeInUp" data-wow-delay=".2s" alt=""></x-f-image>
                                    <x-f-image :data="$unit" id="modelo" dif="-planta" src="Modelos/Planta/" ext=".png" class="w-100 wow fadeInUp" data-wow-delay=".2s" alt=""></x-f-image>
                                </div>
                            </div>
                        </div>

                        <div class="spacer-double"></div>
                    </div>
                    @include("full-listing-template::plans")
                </section>
                

        <section id="section-gallery" class="bg-color-op-1">
            <div class="container">
              <div class="row g-4 gx-5 justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">Galería</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">Interior y Exterior</h2>
                </div>
              </div>

              <div class="row">
                  <div class="col-md-12 text-center">
                      <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                        <li><a href="#" data-filter="*" class="selected">Ver Todo</a></li>
                          <li><a href="#" data-filter=".exterior">Exterior</a></li>
                          <li><a href="#" data-filter=".interior">Amenidades</a></li>
                          <li><a href="#" data-filter=".facilities">Departamentos</a><li>
                      </ul>
                  </div>
              </div>

              <div id="gallery" class="row g-3 wow fadeInUp" data-wow-delay=".3s">

                <div class="col-md-4 col-sm-6 col-12 item exterior">
                    <a href="images/galeria/soho_6.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_6.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_14.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_14.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_15.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_15.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_17.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_17.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_12.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_12.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_8.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_8.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_10.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_10.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item interior">
                    <a href="images/galeria/soho_7.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_7.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item facilities">
                    <a href="images/galeria/soho_16.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_16.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item facilities">
                    <a href="images/galeria/soho_21.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_21.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item facilities">
                    <a href="images/galeria/soho_20.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_20.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 col-12 item facilities">
                    <a href="images/galeria/soho_4.jpg" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-1">
                            <div class="absolute start-0 w-100 hover-op-1 p-5 abs-middle z-2 text-center text-white z-3">
                                Ver
                            </div>
                            <div class="absolute start-0 w-100 h-100 overlay-dark-7 hover-op-1 z-2"></div>
                            <img src="images/galeria/soho_4.jpg" class="w-100 hover-scale-1-2" alt="">
                        </div>
                    
                    
                    
                    </a>
                </div>

              </div>


            </div>
            
           
        </section>
        
                    <section class="bg-dark section-dark text-light  relative no-top no-bottom overflow-hidden">
                        <div class="container-fluid position-relative half-fluid">

                          <div class="container">

                            <div class="row gx-5">
                              <!-- Image -->
                              <div class="col-lg-6 position-lg-absolute left-half h-100 overflow-hidden">
                                <div class="image" data-bgimage="url(images/poi.jpg) center"></div>
                              </div>
                              <!-- Text -->
                              <div class="col-lg-6 offset-lg-6 relative z-3">
                                    <div class="ms-lg-5 ps-lg-5 py-5 my-5">
                             
                                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Puntos de Interés</h2>
                                
                                <div class="col-lg-12"> 
                                    <div class="row">
                                        <div class="col-md-12 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="fs-500 text-light">
            
                                                <p>OXXO <b style="font-size:30px;">1 Min.</b></p>
                                                <p>Bodega Aurrera <b style="font-size:30px;">3 Min.</b></p>
                                                <p>Walmart <b style="font-size:30px;">6 Min.</b></p>
                                                <p>Periférico G. M. <b style="font-size:30px;">6 Min.</b></p>
                                                <p>Cucea <b style="font-size:30px;">8 Min.</b></p>
                                                <p>Plaza San Isidro <b style="font-size:30px;">8 Min.</b></p>
                                                <p>Plaza Gran Terraza Belenes <b style="font-size:30px;">12 Min.</b></p>
                                                <p>Auditorio Telmex <b style="font-size:30px;">15 Min.</b></p>
                                                <p>Andares <b style="font-size:30px;">20 Min.</b></p>
                                            </ul>
                                        </div>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>   

        
        @if(isset($asesor_area))
        @include(config('overrides.views.asesor-area'))
        @endif
    </div>

    <!-- footer begin -->
    <footer class="section-dark">
        <div class="container">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <img src="images/soho-w.png" class="w-200px" alt="">
                        <div class="spacer-single"></div>
                        <div class="fs-16">
                            Calle Trafalgar #1360 CP. 45130
                        </div>
                                                
                                                <div class="social-icons mb-sm-30 text-center">
                                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                                </div>
                    </div>
                </div>                
            </div>

            <div class="spacer-double"></div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center" style="align-items: center; gap: 1rem;">
                        <i class="fs-30 id-color icon_phone" style="height: auto; "></i>
                        <h4 class="mb-0">Llámanos</h4>      
                    </div>
                    <p style="text-align: center">33 1855 1493</p>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center" style="align-items: center; gap: 1rem;">
                        <i class="fs-30 id-color icon_clock" style="height: auto; "></i>
                        <h4 class="mb-0">Horario</h4>      
                    </div>
                    <p style="text-align: center">Lunes a Sábado 10:00 am - 8:00 pm</p>
                </div>
                    
                <div class="col-lg-4 col-md-6 mb-sm-30">
                    <div class="d-flex justify-content-center" style="align-items: center; gap: 1rem;">
                        <i class="fs-30 id-color icon_mail" style="height: auto; "></i>
                        <h4 class="mb-0">Email</h4>      
                    </div>
                    <p style="text-align: center">contacto@procomsamexico.com</p>
                </div>              
            </div>

        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-align:center;">
                        <a href="https://propstudios.mx/">Sistema Desarrollado por PropStudios</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@push('scripts')
<script>
    window.addEventListener('resize', function() {
        $('body').css({
          width: '100%',
          height: '100%'
        });
    });
</script>
@endpush
<script>
@push('before_fill')
    $('.fill-base-price').set_money(data['price']);
    var payment = data['price']*.85*.108*.1;
    $('#fill-bank-payment-1').set_money(payment);
    $('#fill-monthly-income-1').set_money(payment*3);
    $('#fill-bank-payment-personal').text('');
    $('#fill_1_1_top').trigger('input');
    $('#fill_personal_1_top').trigger('input');
@endpush
</script>
@push('scripts')
<script>
$(document).on('personalized_plan_changed', function(e, data) {
    personalized_plan_changed();
});

function personalized_plan_changed(){
    var val0 = $('#fill_personal_0').get_number();
    var val1 = $('#fill_personal_1').get_number();
    var price = $('#fill-promotion-price-personal').get_number();
    if(val0+val1>price){
        val1 = price-val0;
        $('#fill_personal_1').set_money(val1);
        $('#per_personal_1').set_percent(((val1/price)*100.0));
    }
    var final_value = Number(price) - val0 - val1;
    $('#fill-plan-line-personal-2').set_money(final_value);
    $('#per-plan-line-personal-2').set_percent(((final_value/data['price'])*100.0));
}
$('#fill_personal_1_top').on('input', function(e) {
    var value = $('#fill_personal_1_top').get_number();
    var per_0 = $('#per_personal_0').get_number();
    var per_1 = $('#per_personal_1').get_number();
    var new_price = data['price']-value;
    $('#fill-promotion-price-personal').set_money(new_price);
    $('#fill_personal_0').set_value(per_0*new_price/100);
    $('#fill_personal_1').set_value(per_1*new_price/100);
    $('#fill-total-price-personal').set_money(new_price);
    personalized_plan_changed();
});

$('#per_personal_0').on('input', function(e) {
    var value = $('#fill-promotion-price-personal').get_number();
    var percent = $('#per_personal_0').get_number();
    $('#fill_personal_0').set_value(value*percent/100);
});
$('#fill_personal_0').on('input', function(e) {
    var value = $('#fill-promotion-price-personal').get_number();
    var fill = $('#fill_personal_0').get_number();
    $('#per_personal_0').set_value(fill/value*100);
});
$('#per_personal_1').on('input', function(e) {
    var value = $('#fill-promotion-price-personal').get_number();
    var percent = $('#per_personal_1').get_number();
    $('#fill_personal_1').set_value(value*percent/100);
});
$('#fill_personal_1').on('input', function(e) {
    var value = $('#fill-promotion-price-personal').get_number();
    var fill = $('#fill_personal_1').get_number();
    $('#per_personal_1').set_value(fill/value*100);
});

$(document).on('personalized_plan_changed', function(e) {
    //$('#per_personal_1_bottom').trigger('input');
});

$('.per-rent-income').set_percent(6);

</script>



@endpush

@include(config('overrides.views.scripts'))

@push('scripts')
@if(isset($personal_plan))
@if(!empty($personal_plan))
<script>
    @php
    $atr = $personal_plan->getAttributes()
    @endphp
    
    $(document).ready(function() {
        setTimeout(function() {
            $('#fill_1_1_top').set_value({{ $atr['fill_1_1_top'] }});
            $('#fill_1_1_top').trigger('input');
            $('#fill_1_1_top').prop('disabled', true);
            $('#fill_personal_1_top').set_value({{ $atr['fill_personal_1_top'] }});
            $('#fill_personal_1_top').trigger('input');
            $('#fill_personal_1_top').prop('disabled', true);
            $('#fill_personal_0').set_value({{ $atr['fill_personal_0'] }});
            $('#fill_personal_0').trigger('input');
            $('#fill_personal_0').prop('disabled', true);
            $('#fill_personal_1').set_value({{ $atr['fill_personal_1'] }});
            $('#fill_personal_1').trigger('input');
            $('#fill_personal_1').prop('disabled', true);
        }, 1000);
        
    });
    
    @if($atr['fill_personal_1_top'] === '0.00' && $atr['per_personal_0'] === '0.00' && $atr['fill_personal_0'] === '0.00')
    $('#plan-div-personal').hide();
    @else
    @if($atr['fill_personal_1_top'] === '0.00')
    $('#personal_1_top').hide();
    $('#promotion-price-personal').hide();
    @endif
    @if($atr['fill_personal_0'] === '0.00')
    $('#personal_0').hide();
    @endif
    @if($atr['fill_personal_1'] === '0.00')
    $('#personal_1').hide();
    $('#plan-months-personal-1').hide();
    $('#plan-mensuality-personal-1').hide();
    @endif
    @endif
    @if($atr['fill_1_1_top'] === '0.00')
    $('#1_1_top').hide();
    $('#promotion-price-1').hide();
    @endif
    
</script>
@else
<script>
    $('#1_1_top').hide();
    $('#promotion-price-1').hide();
    $('#plan-div-personal').hide();
</script>
@endif
@endif
@endpush

</x-layout>