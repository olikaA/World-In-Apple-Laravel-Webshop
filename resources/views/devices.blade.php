@extends('master')

@section('content')

  <body style="background-color:#141414;">

    <div class="container-with-height">

      <h5 class="text-center">All products</h5>
      <br>
      <br>

<?php foreach ($products as $product): ?>


<div class="products">
        <table  class="table" style="color:white;">
      <thead>
        <tr style='cursor: pointer; cursor: hand;' onclick="window.location='detail/{{$product->id}}';">
          <th style="width: 10%;" scope="col"><img class="smallpic img-fluid " style="padding-left: 5%;" src="{{$product->gallery}}" alt=""></th>
          <th style="width: 10%;" class="align-middle text-center" scope="col">{{$product->name}}</th>

          <th class="align-middle text-center" style="width: 10%;" scope="col">${{$product->price}}</th>

        </tr>
      </thead>
    </table>
</div>

<?php endforeach; ?>





    </div>

@endsection
</body>
