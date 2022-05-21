@extends('layouts.index')
@section('content')
<div class="hero-wrap" style="background-image: url('images/free-child.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('index')}}">Home</a></span> <span>About</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section">
      <div class="container">
          <div class="row d-flex">
              <div class="col-md-6 d-flex ftco-animate">
                  <div class="img img-about align-self-stretch" style="border-radius: 80%; background-image: url(images/logo.jpg); width: 100%;"></div>
              </div>
              <div class="col-md-6 pl-md-5 ftco-animate">
                  <h2 class="mb-4">Organizational profile</h2>
                  <p>The Organization has been registered as a Non - Governmental Organization under the Non - Governmental Organizations Act, No. 24 of 2002 as amended from time to time with license No.</p>
                  <h2>Area of Operation</h2>
                  <p>The Organization operates at the National level.</p>
          
          <h3>Vision Statement</h3>
          <p>The vision of FCF is to empower children to live and participate in society development free of child abuse</p>
          <h3>Mission Statement</h3>
          <p>To make the world a better and safer place for children in Tanzania through provision of life opportunities and psychosocial care.</p>
              </div>
          </div>
      </div>
  </section>
 
@endsection