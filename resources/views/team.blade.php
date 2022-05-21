@extends('layouts.index')
@section('content')
<div class="hero-wrap" style="background-image: url('images/free-child.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('index')}}"><span style="color: orange">Home</span></a></span> <span><span style="color: orange">Team</span></span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>THE FCF Team </strong><span style="color: orange"><strong></strong></span></h1>
        </div>
      </div>
    </div>
  </div>
<section class="ftco-section bg-light">
    <div class="container">
      <div class="row">
          <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
              <div class="staff">
                  <div class="d-flex mb-4">
                      <div class="img" style="background-image: url(images/beatrice-founder.jpg);"></div>
                      <div class="info ml-4">
                          <h3><a href="teacher-single.html">DR. BEATRICE BYALUGABA</a></h3>
                          <h4><span style="color: orange">The Founder</span></h4>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(images/george.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">GEORGE KAMI</a></h3>
                        <h4><span style="color: orange">Partnership Officer</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(images/grace.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">GRACE LUVANGA</a></h3>
                        <h4><span style="color: orange">Data Officer</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(images/joaness.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">JOANESS BIGIRWAMUNGU</a></h3>
                        <h4><span style="color: orange">Head of Programs</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(images/kami.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">JENARD KAMI</a></h3>
                        <h4><span style="color: orange">Public Relations Officer</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(images/martha.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">MARTHA KINGU</a></h3>
                        <h4><span style="color: orange">Empowerment Officer</span></h4>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection