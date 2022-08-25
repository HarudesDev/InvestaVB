@extends('peruvian.layout')

@section('css')
<style>
    
</style>
@endsection
@section('content')
    @include('peruvian.carousel')
    {{-- Titulo con imagen desplazada y gradiente --}}
    <div class="col-12 d-none d-md-block p-0">
      <div class="position-relative p-4 p-sm-5">
        <div class="px-lg-5 py-3">
          <img class="img-fluid rounded-4 w-100" src="{{ asset('images/peruvian/alpacas.jpg') }}" alt="">
          <div class="position-absolute start-50 bottom-0 translate-middle-x p-5">
            <p class="fs-2 text-center text-white"><b>Let's Your Curiosity do the booking</b></p>
            <div class="d-flex justify-content-center pb-5">
                <a type="button" class="btn bg-white rounded-pill m-1 px-4 py-3" href="{{ route('peruvian.experiences.menu') }}">
                  <strong>CREATE MY OWN PACKAGE</strong>
                </a>
            </div>
          </div>
        </div>
        <div class="bg-customGradient position-absolute start-0 top-0 w-100" style="z-index:-1;height:60%;"></div>
      </div>
    </div>
    {{-- END Titulo con imagen desplazada y gradiente --}}
    {{-- Imagenes en una fila --}}
    <div class="col-12 p-0">
      <div class="ctextWhite-0 ctextBlack-md-0 cbgGreen-0 cbgWhite-md-0 py-5 py-md-0">
        <h3 class="text-center"><strong>Discover OUR Experiences</strong></h3>
      </div>
      <div class="p-5">
        <div class="row g-4 px-lg-5 mx-xl-5">
          <div class="col-lg-4 col-md-6">
            <a href="{{ route('peruvian.experiences.our.1') }}" class="text-decoration-none">
              <div class="position-relative">
                <img class="img-fluid rounded-start-4 w-100" src="{{ asset('images/peruvian/paisaje1.png') }}" alt="">
                <div class="team-text bg-green1 text-white p-4 rounded-bottom-4">
                  <h5>Imagen 1</h5>
                  <span>Descripcion</span>
                  <br>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a href="{{ route('peruvian.experiences.our.1') }}" class="text-decoration-none">
              <div class="position-relative">
                <img class="img-fluid rounded-start-4 w-100" src="{{ asset('images/peruvian/paisaje2.png') }}" alt="">
                <div class="team-text bg-green2 text-white p-4 rounded-bottom-4">
                  <h5>Imagen 2</h5>
                  <span>Descripcion</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a href="{{ route('peruvian.experiences.our.1') }}" class="text-decoration-none">
              <div class="position-relative">
                <img class="img-fluid rounded-start-4 w-100" src="{{ asset('images/peruvian/paisaje3.png') }}" alt="">
                <div class="team-text bg-yellow1 text-white p-4 rounded-bottom-4">
                  <h5>Imagen 3</h5>
                  <span>Descripcion</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    {{-- END Imagenes en una fila --}}
    {{-- Imagenes en dos filas --}}
    <div class="col-12 p-0">
      <div class="ctextWhite-0 ctextBlack-md-0 cbgGreen-0 cbgWhite-md-0 py-5 py-md-0">
        <h3 class="text-center"><strong>Things to do on your stay</strong></h3>
      </div>
      <div class="p-5">
        <div class="row g-4 px-lg-5 pb-5 mx-xl-5">
          <div class="col-lg-6 col-md-6 p-4">
            <div class="float-lg-end w-100">
                <div class="position-relative w-100">
                    <img class="img-fluid rounded-4 w-100" style="max-height:637px;" src="{{ asset('images/peruvian/experience1.png') }}" alt="">
                    <div class="position-absolute bottom-0 start-0 text-white p-5">
                      <p class="custom-image-description-font">Nature bridge</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 p-4">
            <div class="float-lg-start w-100">
              <div class="position-relative w-100">
                <img class="img-fluid rounded-4 w-100" style="max-height:637px;" src="{{ asset('images/peruvian/experience2.png') }}" alt="">
                <div class="position-absolute bottom-0 start-0 text-white p-5">
                  <p class="custom-image-description-font">Imagen 2</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 p-4">
            <div class="float-lg-end w-100">
                <div class="position-relative w-100">
                    <img class="img-fluid rounded-4 w-100" style="max-height:637px;" src="{{ asset('images/peruvian/experience3.png') }}" alt="">
                    <div class="position-absolute bottom-0 start-0 text-white p-5">
                      <p class="custom-image-description-font">Imagen 3</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 p-4">
            <div class="float-lg-start w-100">
              <div class="position-relative w-100">
                <img class="img-fluid rounded-4 w-100" style="max-height:637px;" src="{{ asset('images/peruvian/experience4.png') }}" alt="">
                <div class="position-absolute bottom-0 start-0 text-white p-5">
                  <p class="custom-image-description-font">Imagen 4</p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    {{-- END Imagenes en dos filas --}}
    {{-- Texto blanco fondo verde --}}
    <div class="col-12 p-0">
      <a href="{{ route('peruvian.experiences.menu') }}" class="link-light text-decoration-none custom-title-font fs-1">
        <div class="py-5 px-0 text-white bg-green1">
          <div class="d-flex align-items-center justify-content-center py-4">
            <strong>CREATE YOUR OWN EXPERIENCE</strong>&nbsp&nbsp<i class="fa fa-arrow-right fa-lg" aria-hidden="true"></i>          
          </div>
        </div>
      </a>
    </div>
    {{-- END Texto blanco fondo verde --}}
    {{-- imagenes desplazadas --}}
    <div class="col-12 p-0">
      <div class="p-5 bg-grey1">
        <div class="row p-5">
          <div class="bg-white rounded-4 py-5">
            <div class="col-6 py-5 px-5 ms-5 mt-5">
              <h3 class="display-5 fw-bold">What customer's are saying?</h3>
              <p class="fs-5 pe-5 me-3">Take a look at what our customer's are saying. At Nature we not only provide you with services but also we provide you with valuable experiences for your valuable time.</p>
            </div>
            <div class="col-12 p-5">
              <div class="row px-5 mx-5">
                <div class="col-3 position-relative">
                  <img class="img-fluid rounded-4 w-100 h-100 move-down25" src="{{ asset('images/peruvian/desp1.png') }}" alt="">
                </div>
                <div class="col-3 position-relative">
                  <img class="img-fluid rounded-4 w-100" src="{{ asset('images/peruvian/desp2.png') }}" alt="">
                </div>
                <div class="col-3 position-relative">
                  <img class="img-fluid rounded-4 w-100 move-up25" src="{{ asset('images/peruvian/desp3.png') }}" alt="">
                </div>
                <div class="col-3 position-relative">
                  <img class="img-fluid rounded-4 w-100 move-up50" src="{{ asset('images/peruvian/desp4.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="offset-6 col-6 pe-5">
              <div class="bg-white1 rounded-4 me-5 mb-5">
                <div class="d-flex align-items-center p-3">
                  <div class="flex-shrink-0">
                    <img src="{{ asset('images/peruvian/person.png') }}" alt="...">
                  </div>
                  <div class="flex-grow-1 mx-3 me-5 text-center fs-5">
                    " Great place to spend your vacation while exploring different experiences. "
                  </div>
                </div>
                <div class="bg-green1 rounded-4" style="height:8px"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- END imagenes desplazadas --}}
    {{-- Descuento y promocion --}}
    <div class="col-12 p-0">
      <div class="team-item position-relative">
          <img class="img-fluid w-100" style="max-height:600px;" src="{{ asset('images/peruvian/discounts.png') }}" alt="">
          <div class="position-absolute start-0 top-0 p-5">
            <div class="">
              <p class="display-4 text-white"><strong>Discounts<br>and<br>Promotions</strong></p>
            </div>
          </div>
          <div class="position-absolute start-0 bottom-0 p-5">
            <div class="">
              <button type="button" class="btn bg-white m-1 px-4 py-2 fs-6"><strong>Ask our service?</strong></button>
            </div>
          </div>
      </div>
    </div>
    {{-- END Descuento y promocion --}}
    @include('peruvian.email-notification')

@endsection
@section('js')
    <script src="{{ asset('js/peruvian/carousel-custom.js') }}"></script>
@endsection