@extends('frontend.layouts.master')
@section('content')
<br><br><br><br>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-5 pb-md-0 mb-md-5" style="text-align: center;background-color:black; padding-top:15px; padding-bottom: 15px !important; color:white;">Registration Form</h3>
            @if(Session::has('status'))
            <div class="alert alert-primary" role="alert">
              {{ Session::get('status') }}
            </div>
            @endif
            <form method="post" action="{{ route('join_training_submit') }}">
              @csrf
              <input type="hidden" value="{{ $training->title }}" name="training">
              <div class="row">
                <div class="col-md-12 mb-4">

                  <div class="form-outline">
                    <div class="row">
                      <div class="col-md-3">
                      <label style="margin-top: 12px;" class="form-label" for="firstName">Full Name:</label>
                      </div>
                      <div class="col-md-9">
                      <input type="text" id="firstName" name="fname" class="form-control form-control-lg" />
                      </div>
                    </div>
                  </div>

                </div>
              </div>

               <div class="row">
                <div class="col-md-12 mb-4">

                  
                  <div class="row">
                    <div class="col-md-3">
                   <h6 class="mb-2 pb-1">Gender:</h6>   
                    </div>
                    <div class="col-md-9">
                      <div class="form-check form-check-inline">
                    <label class="form-check-label" for="maleGender">Male</label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="maleGender"
                      value="Male"
                    />
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="femaleGender"
                      value="Female"
                      checked
                    />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>
                    </div>
                  </div>

                </div>
              </div>

             <!--  <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="emailAddress">Email</label>
                    <input type="email" name="email" id="emailAddress" class="form-control form-control-lg" />
                    
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <input type="tel" name="phone" id="phoneNumber" class="form-control form-control-lg" />
                    
                  </div>

                </div>
              </div>  -->
              <div class="row">
                <div class="col-md-12 mb-4">

                  <div class="form-outline">
                    <div class="row">
                      <div class="col-md-3">
                      <label style="margin-top: 12px;" class="form-label" for="phoneNumber">Mobile No:</label>
                      </div>
                      <div class="col-md-9">
                      <input type="text" id="phoneNumber" name="phone" class="form-control form-control-lg" />
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <label for="note">Messege:</label>
                  <textarea name="note" class="form-control"></textarea>

                </div>
              </div>

              <div class="mt-4 pt-2 text-center">
                <input style="background-color:red;" class="btn btn-primary btn-lg text-center" type="submit" value="SUBMIT" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><br><br><br><br>

@endsection

@section('style')
<link href="{{ asset('assets/css/join_training.css') }}" rel="stylesheet">
@endsection