
<div class="body-inner">

            @include('layout.header');

                {{-- premiere  section --}}

                    <div class="banner-carousel banner-carousel-2 mb-0">
                        <div class="banner-carousel-item" style="background-image:url({{'assets/images/jet4.jpg'}})">
                            <div class="container">
                                <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Quand les services comptent</h2>
                                    <h3 class="box-slide-sub-title">Services du change</h3>
                                    <p class="box-slide-description">
                                      nous vous garantissons une bonne qualité de services et  nous serons toujours la pour vous
                                      </p>
                                    <p>
                                        <a href="services.html" class="slider btn btn-primary">Our Service</a>
                                    </p>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="banner-carousel-item" style="background-image:url({{url('assets/images/jet2.jpg')}})">
                            <div class="slider-content text-left">
                                <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Quand les services comptent</h2>
                                        <h3 class="box-slide-sub-title">Votre choix est simple</h3>
                                        <p class="box-slide-description">
                                          faites le choix de traiter avec nous et vous ne le regerettez pas 
                                        </p>
                                        <p><a href="about.html" class="slider btn btn-primary" aria-label="about-us">Know Us</a></p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                {{-- deuxieme section --}}
                <section class="call-to-action no-padding">
                    <div class="container">
                    <div class="action-style-box">
                        <div class="row">
                            <div class="col-md-8 text-center text-md-left">
                                <div class="call-to-action-text">
                                <h3 class="action-title">Nous comprenons vos besoins en matière de change de devise</h3>
                                </div>
                            </div><!-- Col end -->
                            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                                <div class="call-to-action-btn">
                                <a class="btn btn-primary" href="contact.html">Request Quote</a>
                                </div>
                            </div><!-- col end -->
                        </div><!-- row end -->
                    </div><!-- Action style box -->
                    </div><!-- Container end -->
                </section><!-- Action end -->




                {{--troisieme section --}}




                <section id="ts-features" class="ts-features pb-2">
                                    <div class="container">
                                                                    <div class="row">
                                                                            <div class="col-lg-4 col-md-6 mb-5">
                                                                            <div class="ts-service-box">
                                                                                <div class="ts-service-image-wrapper">
                                                                                    <img loading="lazy" class="w-100" src="{{url('assets/images/jet3.jpg')}}" alt="service-image">
                                                                                </div>
                                                                                <div class="d-flex">
                                                                            
                                                                                    <div class="ts-service-info">
                                                                                        <h3 class="service-box-title"><a href="service-single.html">Zero Harm Everyday</a></h3>
                                                                                        <p>Nous assurons une précision dans le change de devise</p>
                                                                                        <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> En savoir plus</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- Service1 end -->
                                                                            </div><!-- Col 1 end -->

                                                                            <div class="col-lg-4 col-md-6 mb-5">
                                                                            <div class="ts-service-box">
                                                                                <div class="ts-service-image-wrapper">
                                                                                    <img loading="lazy" style="height: 235px" class="w-100" src="{{url('assets/images/jet5.jpg')}}" alt="service-image">
                                                                                </div>
                                                                                <div class="d-flex">
                                                                            
                                                                                    <div class="ts-service-info">
                                                                                        <h3 class="service-box-title"><a href="service-single.html">La précision dans les calculs</a></h3>
                                                                                        <p>Nous assurons une précision dans le change de devise</p>
                                                                                        <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i>En savoir plus</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- Service2 end -->
                                                                            </div><!-- Col 2 end -->

                                                                            <div class="col-lg-4 col-md-6 mb-5">
                                                                            <div class="ts-service-box">
                                                                                <div class="ts-service-image-wrapper">
                                                                                    <img loading="lazy" style="height: 235px" class="w-100" src="{{url('assets/images/services/service3.jpg')}}" alt="service-image">
                                                                                </div>
                                                                                <div class="d-flex">
                                                                                    
                                                                                    <div class="ts-service-info">
                                                                                        <h3 class="service-box-title"><a href="service-single.html">Build To Last</a></h3>
                                                                                        <p>Nous assurons une précision dans le change de devise</p>
                                                                                        <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i>En savoir plus</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- Service3 end -->
                                                                            </div><!-- Col 3 end -->
                                                                    </div><!-- Content row end -->
                                    </div><!-- Container end -->
            </section><!-- Feature are end -->




            {{-- quatrieme section --}}



            <section id="facts" class="facts-area dark-bg">
                <div class="container">
                  <div class="facts-wrapper">
                      <div class="row">
                        <div class="col-md-3 col-sm-6 ts-facts">
                            <div class="ts-facts-img">
                              <img loading="lazy" src="{{url('assets/images/icon-image/fact1.png')}}" alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                              <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                              <h3 class="ts-facts-title">Total Projects</h3>
                            </div>
                        </div><!-- Col end -->
              
                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                            <div class="ts-facts-img">
                              <img loading="lazy" src="{{url('assets/images/icon-image/fact2.png')}}" alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                              <h2 class="ts-facts-num"><span class="counterUp" data-count="50">0</span></h2>
                              <h3 class="ts-facts-title">Les membres du personnel</h3>
                            </div>
                        </div><!-- Col end -->
              
                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                            <div class="ts-facts-img">
                              <img loading="lazy" src="{{url('assets/images/icon-image/fact3.png')}}" alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                              <h2 class="ts-facts-num"><span class="counterUp" data-count="50">0</span></h2>
                              <h3 class="ts-facts-title">Heures de travail par semaine</h3>
                            </div>
                        </div><!-- Col end -->
              
                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                            <div class="ts-facts-img">
                              <img loading="lazy" src="{{url('assets/images/icon-image/fact4.png')}}" alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                              <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                              <h3 class="ts-facts-title">Pays</h3>
                            </div>
                        </div><!-- Col end -->
              
                      </div> <!-- Facts end -->
                  </div>
                  <!--/ Content row end -->
                </div>
                <!--/ Container end -->
              </section><!-- Facts end -->




              {{--cinquieme section--}}


            <section id="ts-service-area" class="ts-service-area pb-0">
                <div class="container">
                  <div class="row text-center">
                      <div class="col-12">
                        <h2 class="section-title">        Nous sommes des spécialistes</h2>
                        <h3 class="section-sub-title">
                   en
                          Ce que nous faisons
                        </h3>
                      </div>
                  </div>
                  <!--/ Title row end -->
              
                  <div class="row">
                      <div class="col-lg-4">
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                              <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                              <h3 class="service-box-title"><a href="#">Home Construction</a></h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 1 end -->
              
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                              <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                              <h3 class="service-box-title"><a href="#">Building Remodels</a></h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 2 end -->
              
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                              <img loading="lazy" src="images/icon-image/service-icon3.png"  alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                              <h3 class="service-box-title"><a href="#">Interior Design</a></h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 3 end -->
              
                      </div><!-- Col end -->
              
                      <div class="col-lg-4 text-center">
                        <img loading="lazy" class="img-fluid" src="{{url('assets/images/jet6.png')}}" alt="service-avater-image">
                      </div><!-- Col end -->
              
                      <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                              <img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                              <h3 class="service-box-title"><a href="#">Exterior Design</a></h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 4 end -->
              
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                              <img loading="lazy" src="images/icon-image/service-icon5.png" alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                              <h3 class="service-box-title"><a href="#">Renovation</a></h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 5 end -->
              
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                              <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                              <h3 class="service-box-title"><a href="#">Safety Management</a></h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 6 end -->
                      </div><!-- Col end -->
                  </div><!-- Content row end -->
              
                </div>
                <!--/ Container end -->
              </section><!-- Service end --> 
              @include('layout.footer');

           
</div>
</body>
</html>