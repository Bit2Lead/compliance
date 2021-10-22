@extends('frontend.layouts.master')
@section('content')
<br><br><br><br>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Training</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Training</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="container">

<div class="row training all_training">
    @foreach($trainings as $training)
    <div class="col-md-6">
        <div class="card">
          <h5 class="card-header">{{ $training->title }}</h5>
          <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <p class="card-text">
                        <span>TRAINER: MOHAMMAD ABDUR RAHMAN</span><br>
                        <span>DURATION: {{ $training->session_duration }}</span><br>
                        <span>START ON: {{ $training->start_date }}<span><br>
                        <span>COMPLETED ON: {{ $training->end_date }}</span>
                    </p>
                    <a href="{{ route('single_training', $training->slug) }}" class="btn btn-primary">View Details</a>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/img/profile.jpg') }}" class="rounded-circle" height="120px;" width="120px;">
                    <div class="price">
                        <p class="align-middle">BDT {{ $training->price }}/-</p>
                    </div>
                    
                </div>
            </div>
          </div>
        </div><br>
    </div>
    @endforeach
</div>
<br><br><br>
    <div class="row">
        <div class="text-center">
            {{ $trainings->links() }}
        </div>
    </div>
</div>
@endsection