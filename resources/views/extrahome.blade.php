@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!empty(session('message')))
<div class="alert-success alert text-center">{{session('message')}}</div>
@endif
                </div>

            </div>
        </div>
    </div>
</div>



<!-- Slider -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>





<!-- jumbotron  -->
<div class="jumbotron">
    <h1 class="display-3 text-center">Welcome to our Shop</h1>
    <p class="lead text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, non?</p>
    <hr class="my-2">
    <p class="text-center">More info</p>
    <p class="lead text-center">
        <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Read More</a>
    </p>
</div>




<!-- Card -->
<div class="container">


<div class="card-group">
<div class="card" style="width:400px">
  <img class="card-img-top" src="1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
  </div>
<br>
  <div class="card" style="width:400px">
  <img class="card-img-top" src="1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
  </div>

  <br>
  <div class="card" style="width:400px">
  <img class="card-img-top" src="1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
  </div>


</div>


</div>


<br>

<div class="container">


<div class="card-group">
<div class="card" style="width:400px">
  <img class="card-img-top" src="1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
  </div>
<br>
  <div class="card" style="width:400px">
  <img class="card-img-top" src="1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
  </div>

  <br>
  <div class="card" style="width:400px">
  <img class="card-img-top" src="1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
  </div>


</div>


</div>



@endsection
