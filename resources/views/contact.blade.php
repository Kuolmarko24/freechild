
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>free child</title>
  </head>
  <body style="background-image: url('images/free-child.jpg');">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ route('index')}}"><img style="border-radius: 500px; width='100px' height='100px'" src="{{url('images/logo6.jpg')}}"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active"><a href="{{ route('index')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ route('about')}}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ route('preamble')}}" class="nav-link">Preamble</a></li> 
          <!-- <li class="nav-item"><a href="#" class="nav-link">Blog</a></li> -->
          <!-- <li class="nav-item"><a href="#" class="nav-link">Gallery</a></li> -->
          <li class="nav-item"><a href="{{ route('team')}}" class="nav-link">Team</a></li>
          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </nav>
    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 style="color: orange">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <h4 style="color: white">Foundation head office: Kibaha - Pwani Region, Tanzania</h4>
          </div>
          <div class="col-md-3">
            <h4 style="color: white">Postal Box: 30379</h4>
          </div>
          <div class="col-md-3">
            <h4 style="color: white">Region: Pwani</h4>
          </div>
          <div class="col-md-3">
            <h4 style="color: white">District: Kibaha</h4>
          </div>
          <div class="col-md-3">
            <h4 style="color: white">Ward: Tumbi</h4>
          </div>
          <div class="col-md-3">
            <h4 style="color: white">Street: Mkoani</h4>
          </div>
          <div class="col-md-3">
            <h3 style="color: white">Call: <a style="font-size: 20px; color: orange;" href="tel://1234567920">+255735319764</a></h3>
          </div>
          <div class="col-md-3">
            <h3 style="color: white">Email: <a style="font-size: 20px; color: orange;" href="mailto:freechildtz@gmail.com">freechildtz@gmail.com</a></h3>
          </div>
        </div>
        <div class="col-md-7">
          <h5 style="color: white">SEND MESSAGE</h5>
          <hr>
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>    
              <strong>{{ $message }}</strong>
          </div>
          @endif
          <form action="{{route('contact')}}" method="POST">
            {{ csrf_field() }}
                <div class="mb-3">
                  <label style="color: white" class="form-label">Full Name</label>
                  <input type="text" name="name" class="form-control" required="">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1"style="color: white" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" required="" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" style="color: white" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label  class="form-label" style="color: white">Subject</label>
                  <input type="text" name="subject" required="" class="form-control">
                </div>
                <div class="form-floating">
                <textarea class="form-control" name="message" required="" placeholder="Leave a comment here"  style="height: 100px"></textarea>
                <label style="color: orange">Message</label>
              </div>
              <br>
              <div>
                   <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
          </form>
      </div>
       
      </div>
    </section>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </html>
