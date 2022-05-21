@extends('layouts.index')
@section('content')
<div class="hero-wrap" style="background-image: url('images/free-child.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
           <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('index')}}">Home</a></span> <span>About</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Preamble</h1>
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
    				<h2 class="mb-4">Preamble</h2>
    				<p>Free Child Foundation (FCF) was established to fight violence against children which is seen as a serious human right, social and public health issue in Tanzania and is a threat to society development. FCF was registered on 24th February, 2022 with registration number 00NGO/R/2911. Primarily FCF works to empower children to live and participate in society development free of child abuse. FCF was established in December 2021, as a voluntary and non – profit organization that works to “free children” and make the world a better and safer place for children in Tanzania through provision of life opportunities and psychosocial care, prevention of violence against children, protection of children rights, community empowerment on child protection and life skills training to young people. FCF works closely with Foundation for Linking Youth Potentials and Employment (FLYPE) which is based at Kibamba in Ubungo District Council.</p>
    				<!-- <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p> -->
    			</div>
    		</div>
    	</div>
    </section>
@endsection