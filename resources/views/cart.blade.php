@extends('master')

@section('content')
<body style="background-color:#141414;">
  <div class="container-with-height">

    <?php
    $sum=0;
    if (isset($products))
    {

      foreach ($products as $product)
      {
        $sum += $product->price;
      }
    }
    else
    {
      $sum=0;
    }



    ?>

    <h5 class="text-center">Products in cart</h5>
    <br>
    <br>

    <?php if (isset($products)): ?>


      <?php foreach ($products as $product):?>

        <div class="products">
          <table  class="table" style="color:white;">
            <thead>
              <tr style='cursor: pointer; cursor: hand;' onclick="window.location='detail/{{$product->id}}';">
                <th  style="width: 5%;" scope="col"><img class="smallerpic img-fluid" style="padding-left: 5%;" src="{{$product->gallery}}" alt=""></th>
                <th  class="align-middle text-center" style="width: 5%;" scope="col">{{$product->name}}</th>
                <th class="align-middle text-center" style="width: 5%;" scope="col">${{$product->price}}</th>
                <th class="align-middle text-center" style="width: 5%;" scope="col">
                  <button class="btn text-light btn-outline-dark"><a style="text-decoration: none; color: white;" href="/removecart/{{$product->cart_id}}">✖ Remove from cart</a></button>
                </th>
              </tr>
            </thead>
          </table>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>


    <div class="total">
      <table class="table" style="color:white;">
        <thead>
          <tr>
            <th style="padding-left: 5%; width:20%;" scope="col">Total: </th>
            <th  class="align-middle text-center"  scope="col">${{$sum}}</th>
          </tr>
        </thead>
      </table>
    </div>
    <br>
    <div class="buttons d-flex justify-content-center">
      <button class="btn text-light btn-outline-dark"><a href="/checkout" style="text-decoration: none; color:white;":>Check out</a></button>
    </div>
    <br>
    <div class="text-center">

      <?php if (isset($error_message))
      {
        echo "<small>".$error_message . "<small>"."<br><br>";
      }
      ?>

    </div>
  </div>

  @endsection
</body>
