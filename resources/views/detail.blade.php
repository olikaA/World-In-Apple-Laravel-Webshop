@extends('master')

@section('content')

<body style="background-color:#141414;">

  <div class="container-with-height">

    <div class="text-center">
      <a href="javascript:history.back()" style="text-decoration:none; color:white;" >Return back</a>
      <br>
      <br>
    </div>
    <div class="d-flex justify-content-center">
      <img class="detail img-fluid " src="{{$datas->gallery}}" alt="">
    </div>

    <br>
    <br>
    <div class="name text-center">
      <h3>{{$datas->name}}</h3>
    </div>
    <br>
    <div class="desc text-center">
      <h4>{{$datas->description}}</h4>
    </div>
    <br>
    <div class="price text-center">
      <h4>Price: ${{$datas->price}}</h4>
    </div>

  </div>
  <div class="button-container">

    <div class="buttons d-flex justify-content-center">
      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$datas->id}}">
        <button class="btn text-light btn-outline-dark">Add to cart</button>
      </form>

    </div>


  </div>
  @endsection

</body>
