@include('layout.header');

{{-- premiere section --}}

<div id="banner-area" class="banner-area" style="background-image:url('{{url('assets/images/banner/banner1.jpg')}}')">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                
                </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Banner text end -->
  </div><!-- Banner area end --> 

  {{-- deuxieme section --}}


  <section id="main-container" class="main-container">
    <div class="container">
  
      <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">ATTEINDRE NOTRE BUREAU</h2>
          <h3 class="section-sub-title">TROUVER NOTRE EMPLACEMENT</h3>
        </div>
      </div>
      <!--/ Title row end -->
  
      <div class="row">
        <div class="col-md-4">
          <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
              <i class="fas fa-map-marker-alt mr-0"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Visitez notre bureau</h4>
              <p>douala akwa bali</p>
            </div>
          </div>
        </div><!-- Col 1 end -->
  
        <div class="col-md-4">
          <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
              <i class="fa fa-envelope mr-0"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>envoyez-nous un email</h4>
              <p>jetcash@gmail.com</p>
            </div>
          </div>
        </div><!-- Col 2 end -->
  
        <div class="col-md-4">
          <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
              <i class="fa fa-phone-square mr-0"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Nous contacter</h4>
              <p>(+237) 693-387-644</p>
            </div>
          </div>
        </div><!-- Col 3 end -->
  
      </div><!-- 1st row end -->
  
      <div class="gap-60"></div>
  
      <div class="google-map">
        <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Constra"></div>
      </div>
  
      <div class="gap-40"></div>
  
      <div class="row" style="margin-top:-500px">
        <div class="col-md-12">
          <h3 class="column-title">remplir le formulaire</h3>
          <!-- contact form works with formspree.io  -->
          <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->


              @if($errors->any())
      
                        @foreach($errors->all() as $error)
                            <div class="text-red-500">
                                        <p> {{$error}}</p>
                            </div>
                        @endforeach
            @endif
       
          <form id="contact-form" action="{{route('CREATECONTACT')}}" method="post" >

            @csrf
            <div class="error-container"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Nom</label>
                  <input class="form-control form-control-name" name="nom" id="name" placeholder="" type="text" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email"
                    required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Objet</label>
                  <input class="form-control form-control-subject" name="sujet" id="subject" placeholder="" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Message</label>
              <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
                required></textarea>
            </div>
            <div class="text-right"><br>
              <button class="btn btn-primary solid blank" type="submit">Envoyer le message</button>
            </div>
          </form>
        </div>
  
      </div><!-- Content row -->
    </div><!-- Conatiner end -->
  </section><!-- Main container end -->


  {{-- footer--}}

  @include('layout.footer');
