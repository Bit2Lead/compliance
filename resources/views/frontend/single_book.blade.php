@extends('frontend.layouts.master')
@section('metas')
<meta property="og:url"           content="{{ url()->full() }}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $book->title }}" />
<meta property="og:description"   content="{{ $book->description }}" />
<meta property="og:image"         content="{{ asset('storage/'.$book->cover_photo) }}" />
@endsection
@section('content')

<br><br><br><br>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row schedule">
                        <div class="col-12">
                            <h2>{{ $book->title }}</h2>
                        <a href="#">Total Pages: {{ $book->pages }}</a>
                        <a href="#">Chapters: {{ $book->chapters }}</a>
                        <a href="#">Label Price : BDT {{ $book->label_price }}/-</a>
                        <a href="#">Selling Price: BDT {{ $book->price }}/-</a>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <!-- Page Header End -->

                <div class="container text-left " style="display: flex;">
                <div class="social_share text-center">
                    <div id="fb-root" class=""></div>
                        <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                    <!-- Your share button code -->
                    <div class="fb-share-button" 
                        data-href="{{ url()->full() }}" 
                        data-layout="button"
                        data-size="small">
                    </div>
                </div>
                <div class="social_share text-center linkd_in">
                    <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                    <script data-size="large" type="IN/Share" data-url="{{ url()->full() }}"></script>
                </div>
                <div class="social_share text-center">
                    <a target="_blank" class="google_plus" href="#" type="button" data-toggle="modal" data-target="#exampleModal">
                        <span><i class="fab fa-google-plus-square"></i>Email</span>
                    </a>
                </div>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Email this book to your friend</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>You can mail the book of Compliance Training (BD) Limited to your friends & familiar person.</p>
                        <form method="post" action="{{ route('email_book') }}">
                            @csrf
                            <input type="hidden" class="form-control" name="book" value="{{ $book->id }}">
                          <div class="form-group">
                            <label for="friend_name" class="col-form-label">Name of your friend:</label>
                            <input type="text" class="form-control" name="friend_name" id="friend_name">
                          </div>
                          <div class="form-group">
                            <label for="friend_email"  class="col-form-label">His/Her email address:</label>
                            <input type="email" class="form-control" name="friend_email" id="friend_email">
                          </div>

                          <div class="form-group">
                            <label for="your_name" class="col-form-label">Your name:</label>
                            <input type="text" class="form-control" name="your_name" id="your_name">
                          </div>
                          <div class="form-group">
                            <label for="your_email" class="col-form-label">Your email address:</label>
                            <input type="email" class="form-control" name="your_email" id="your_email">
                          </div>
                          
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">SEND</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="social_share text-center">
                    <a target="_blank" class="twitter-share-button" href="https://twitter.com/intent/tweet?url={{ url()->full() }}&text={{ $book->title }}">
                        <span><i class="fab fa-twitter"></i> Twitter</span>
                    </a>
                </div>
            </div>
            <!-- Single Page Start -->
            <div class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                      <div class="card-body text-left">
                                         <p>
                                            {!! $book->description !!}
                                        </p>
                                      </div>
                                      <div class="mb-2 text-center print">
                                        <button onclick="window.print()">Print</button>
                                    </div>
                                    </div>

                                   
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="card">
                                          <h4 class="card-header text-center " style="background-color: black; color: white;">PRICE:&nbsp;BDT&nbsp;<span class="text-bold " style="font-weight: bold; font-size: 28px;">{{$book->price}}/-</span> </h4>
                                          <div class="card-body text-center">
                                            <a href="{{ route('order_book', $book->id) }}" class="btn btn-danger card-header" style="font-weight: bold; font-size: 28px; background-color: red; border:3px solid black; border-radius: 5px;">ORDER HERE</a>
                                            <div class="text-center helpline"><br>
                                                <p class="text-center btn btn-primary" style="width:100%; background-color:black;">ORDER HOTLINES</p>
                                                <div class="reg_cont" style="background-color: #4F84C4; color: white;">
                                                    <h3><br>Contact Number<h3>
                                                        01739-138399<br>
                                                        01312-138399<br>
                                                        01772-825678<br>
                                                        02-9832867<br><br>
                                                        
                                                </div> 

                                                <div class="payment_mode" style="background-color: #00007f; color: white;">
                                                    <h3 style="color:yellow;"><br>Payment Mode<h3>
                                                        01739138399<br>
                                                        <span>(Personal Bkash)</span><br>
                                                        017391383997<br>
                                                        <span>(DBBL Rocket)</span><br>
                                                        01739138399<br>
                                                        <span>(Nagad-Personal)</span><br><br>
                                                        
                                                </div>

                                            </div>
                                            
                                          </div>
                                        </div>
                                    </div><br>
                                    <div class="row trainer_image">
                                        <div class="card">
                                          <img class="rounded-circle" src="{{ asset('assets/img/profile.jpg') }}">
                                          <div class="card-body text-justify">
                                            <p>
                                                {!! $profile->short_description !!}
                                            </p>
                                          </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                            </div>
                            
                        </div>
                        
                    </div><br><br>
                    {{--
                    <div class="row related">
                        <h3>Related Training</h3>
                        @foreach($related_trainings as $r_training)
                        <div class="col-md-6">
                            
                            <div class="card">
                              <h5 class="card-header">{{ $r_training->title }}</h5>
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="card-text">
                                            <span>TRAINER: MOHAMMAD ABDUR RAHMAN</span><br>
                                            <span>DURATION: {{ $r_training->session_duration }}</span><br>
                                            <span>START ON: {{ $r_training->start_date }}<span><br>
                                            <span>COMPLETED ON: {{ $r_training->end_date }}</span>
                                        </p>
                                        <a href="{{ route('single_training', $r_training->slug) }}" class="btn btn-primary">View Details</a>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('assets/img/profile.jpg') }}" class="rounded-circle" height="120px;" width="120px;">
                                        <div class="price">
                                            <p class="align-middle">BDT {{$r_training->price}}/-</p>
                                        </div>
                                        
                                    </div>
                                </div>
                              </div>
                            </div><br>
                        </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
            <!-- Single Page End -->


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
                            <a class="btn" href="{{ route('contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to Action End -->

@endsection


@section('style')
<style type="text/css">
.social_share.text-center {
    width: 120px;
    height: 40px;
    font-size: 12px;
}
.twitter-share-button {
    background-color: #4f84c4;
    color: white;
    padding: 3px;
    text-decoration: none;
    border-radius: 5px;
}
.google_plus {
    background-color: #4f84c4;
    padding: 3px;
    border-radius: 5px;
    color: white;
    text-decoration: none;
}
.helpline ul li{
    list-style-type: none;
}
.payment_mode span{
    font-size: 14px;
}
.payment_mode {
    position: relative;
    top: -25px;
}

</style>
@endsection

