@extends('frontend.layouts.master')
@section('content')    

    <div class="b2l_wrapper">
            <!-- Carosal Start -->
            <div class="">
                <div class="row">

                <div class="col-md-4 col-sm-12 categories">
                  <h3 class="text-left bg-primary text-white" style="padding:5px; text-transform: uppercase;">Training Categories</h3>
                    <div class="navbar-nav ml-auto">
                      @foreach($categories as $category)
                        <?php 
                          $trainings = App\Models\Training::where('category_id', $category->id)->get();
                        ?>
                        <a href="{{ route('training_on_category', $category->slug) }}" class="nav-item nav-link">{{ $category->name }} ({{ count($trainings) }})</a>
                      @endforeach
                    </div>
                </div>

                <div class="col-md-8">
                    <h1 class="text-center" style="background-color: #fced90; text-transform: uppercase;">Professional Training</h1>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <!-- <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol> -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide1.jpg') }}" alt="First slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>Highly Effective Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide2.jpg') }}" alt="Second slide">
                          <div class="carousel-caption d-none d-md-block">
                           <!--  <h2>Professional Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide3.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide4.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>

                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide5.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>

                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide7.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide8.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide9.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide10.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide11.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide12.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide13.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide14.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide15.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide16.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide17.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide18.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide19.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" width="100%;" height="405px;" src="{{ asset('assets/img/slide20.jpg') }}" alt="Third slide">
                          <div class="carousel-caption d-none d-md-block">
                            <!-- <h2>100% Industrial Training</h2> -->
                          </div>
                        </div>



                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>

                    <div class="special_section">
                      <div class="row">
                        <div class="col-md-6 text-center">
                          <img src="{{ asset('assets/img/profile.jpg') }}" height="120px;" width="120px;">
                          <div class="key_people">
                            <span>
                              <b>Md. Abdur Rahman</b><br>
                              Founder Managing Director<br>
                              Compliance Training (BD) Limited
                            </span>
                          </div>
                        </div>
                        {{--
                        <div class="col-md-4">
                           <img src="{{ asset('assets/img/logo-full.jpg') }}" height="120px;" width="120px;"> 
                        </div>--}}
                        <div class="col-md-6 text-center">
                          <img src="{{ asset('assets/img/DIRECTOR.jpg') }}" height="120px;" width="120px;">
                          <div class="key_people">
                            <span>
                              <b>Zakia Rahman</b><br>
                              Director<br>
                              Compliance Training (BD) Limited
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 text-center">
                          <img src="{{ asset('assets/img/JANNAT.jpg') }}" height="120px;" width="120px;">
                          <div class="key_people">
                            <span>
                              <b>Jannatul Ferdous</b><br>
                              Training Coordinator<br>
                              Compliance Training (BD) Limited<br>
                              Mobile: 01312-138399
                            </span>
                          </div>
                        </div>
                        {{--
                        <div class="col-md-4">
                           <img src="{{ asset('assets/img/logo-full.jpg') }}" height="230px;" width="100%;"> 
                        </div> --}}
                        <div class="col-md-6 text-center">
                          <img src="{{ asset('assets/img/DISHARI.jpg') }}" height="120px;" width="120px;">
                          <div class="key_people">
                            <span>
                              <b>Dishari Sarker Dipty</b><br>
                              Training Coordinator<br>
                              Compliance Training (BD) Limited<br>
                              Mobile: 01772-825678
                            </span>
                          </div>
                        </div>
                      </div>

                    </div>

                </div>

            </div>
            </div>
            <!-- Carosal End -->
            <!-- banner -->
            <!-- <div class="row">
                <img src="img/ban.jpg" width="100%">
            </div> -->

            <!-- TRAINING Start --> <br>
            <div class="row"><h2 class="card-text">LIVE TRAINING</h2></div> <hr>         
            <div class="row">
                @foreach($featureds as $feature)
                <div class="col-md-6">
                    <div class="card">
                      <h5 class="card-header">{{ $feature->title }}</h5>
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p class="card-text">
                                    <span>TRAINER: MOHAMMAD ABDUR RAHMAN</span><br>
                                    <span>DURATION: {{ $feature->session_duration }}</span><br>
                                    <span>Start On: {{ $feature->start_date }}<span><br>
                                    <span>Completed On: {{ $feature->end_date }}</span>
                                </p>
                                <a href="{{ route('single_training', $feature->slug) }}" class="btn btn-primary">View Details</a>
                            </div>
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('assets/img/profile.jpg') }}" class="rounded-circle" height="120px;" width="120px;">
                                <div class="price">
                                    <p class="align-middle">BDT {{$feature->price}}/-</p>
                                </div>
                                
                            </div>
                        </div>
                      </div>
                    </div><br>
                </div>
                @endforeach
            </div>
            <!-- TRAINING End -->

            <!-- books Start --> <br>
            <!-- Books Start -->
            <div class="portfolio">
                <div class="container">
                    <!-- <div class="section-header"> -->
                      <div class="row">
                        <div class="col-md-4">
                          <img width="100%;" height="350px;" src="{{ asset('assets/img/books.JPG') }}">

                        </div>
                        <div class="col-md-4">
                            <h2 class="btn bg-black text-white">COMPLIANCE SERIES BOOKS OF CTBL</h2>
                            <p>Compliance series books which are first time in Bangladesh. A complete guide books for the Compliance Professional</p>
                            <div class="text-center"><div class="section-header">
                              <p class="text-center">Collection Hotlines:</p>
                              <ul>
                                <li>01739-138399</li>
                                <li>01312-138399</li>
                                <li>01772-825678</li>
                              </ul>
                            </div>
                          </div>
                        </div>  
                        <div class="col-md-4 text-center">
                          <img width="100%;"  src="{{ asset('assets/img/profile.jpg') }}">
                          <p class="p-2">MOHAMMAD ABDUR RAHMAN<br>(Writer: Compliance Series Books)</p>
                        </div>
                      </div>
                    <!-- </div> -->

                    <div class="row portfolio-container">
                        @foreach($books as $book)
                        <div class="col-lg-6 col-md-6 col-sm-6 portfolio-item web-des">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{ asset('storage/'.$book->cover_photo) }}" alt="Portfolio Image">
                                    <a href="{{ asset('storage/'.$book->cover_photo) }}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('single_book', $book->id) }}" class="link-details"><i class="fa fa-link"></i></a>
                                    <a class="portfolio-title" href="{{ route('single_book', $book->id) }}">{{ $book->title }}</a>
                                </figure>
                              </div>
                            </div>
                            <div class="col-md-6 book_des">
                              <ul class="book_shorts">
                                <li>WRITER: MOHAMMAD ABDUR RAHMAN</li>
                                <li>Chapters: {{ $book->chapters }}</li>
                                <li>Total Pages: {{ $book->pages }}</li>
                                <li>Off-set print</li>
                                <li>Huge Informative</li>
                                <li>High quality print
                                <li>Label Price: BDT &nbsp;{{ $book->label_price }}/-</li>
                                <li>Selling Price: BDT &nbsp;{{$book->price}}/-</li>
                              </ul>
                            </div>
                          </div>
                          <div class="row text-center book_order">
                            <div class="bg-black">
                            <a href="{{ route('order_book', $book->id) }}" class="btn book_order_button">Order the Book Here</a>
                            </div>
                          </div>
                          
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
            <!-- Portfolio Start -->


            <!-- Testimonial Start -->
            <!-- <div class="testimonial">
                <div class="section-header">
                    <h2>Why choice us ?</h2>
                    <p>Well, We are the best Compliance Training Center in Bangladesh. There are some reasons to choice us.</p>
                </div>
                
                <div class="accordion text-left" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Reason #1 short title
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Reason #2 short title
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Reason #3 short title
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
            </div> -->
            <!-- Testimonial End -->
        </div>


            <!-- Call to Action Start -->
            <div class="call-to-action">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h2>Need more information ?</h2>
                            <p>
                                You are most welcome to communicate with us. We are always at your service.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <a class="btn" href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action End -->
@endsection

@section('style')
<style type="text/css">
  .portfolio ul li{
    list-style-type: none;
  }
  .portfolio .section-header .btn-primary{
    background-color: black;
    font-size: 22px;
  }
  .section-header p {
    margin-left: 30px;
  }
</style>
@endsection