@extends('frontend.layouts.master')
@section('content')   
<br><br><br><br>

            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Trainer's Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Single Page Start -->
            <div class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-8">
                                <p class="text-justify">
                                {!! $profile->short_description !!}
                                </p>
                            </div>
                                <div class="col-md-4">
                                    <img class="rounded-circle" src="{{ asset('assets/img/profile.jpg') }}" width="100%;">
                                </div>

                            </div>
                            <div class="row">
                                <p class="text-left">
                                    {!!$profile->long_description !!}
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Page End -->

@endsection