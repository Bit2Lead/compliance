@extends('frontend.layouts.master')
@section('content')

<!-- Page Header Start -->
<br><br><br><br>
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Books</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Books</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Portfolio Start -->
            <div class="portfolio">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Books</h2>
                        <p>Compliance series books which are first time in Bangladesh. A complete guide books for the Compliance Professional</p>
                    </div>

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
                    </div><br><br><br>
                    <div class="row">
                        <div class="text-center">
                            {{ $books->links() }}
                        </div>
                    </div>
                </div>

            </div>
            <!-- Portfolio Start -->
@endsection