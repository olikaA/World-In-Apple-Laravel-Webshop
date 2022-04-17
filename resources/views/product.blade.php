@extends('master')

@section('content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body style="background-color:#141414;">

  <script type="text/javascript">
  $('.carousel').carousel({
    interval: 4000
  })
  </script>


  <?php if (isset($successmessage)): ?>
    <div class="successholder text-center">
      <p>Congratulations, you have just ordered product(s) from <b>World in Apple!</b></p>
      <p>View your recent orders <b><a href="/orders" style="color:white;">here.</a></b></p>
    </div>
  <?php endif; ?>
  <div class="container-with-height">




    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php foreach ($product as $data): ?>
          <div class="carousel-item {{$data['id']==1?'active':''}}">

            <div class="d-flex justify-content-center">
              <a style="text-decoration: none; color:white;" href="detail/{{$data->id}}">

                <img class="mainpageproduct slider-img img-fluid" src="{{$data['gallery']}}">
              </div>
              <div class="text-center">
                <h5>{{$data->name}}</h5>
              </div>
              <div class="text-center" style="padding-left: 2%; padding-right: 2%;">
                <p>{{$data->description}}</p>
              </div>
            </div>

          <?php endforeach; ?>




        </div>
      </div>
      <br>
      <br>
      <div class="promo text-center">
        <p>Take a look at our brand new devices!<br>
          We guarantee you the perfect quality with the best price!<br>
          Don't hesitate! Buy your device now, our devices are available in limited quantities!</p>
        </div>
      </div>

      @endsection

    </body>
