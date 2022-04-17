@extends('master')

@section('content')
<body style="background-color:#141414;">
  <div class="container-with-height">

    <h5 class="text-center">Recent orders</h5>
    <br>
    <br>

    <?php if ($orders != "[]"): ?>

      <?php foreach ($orders as $product):?>

        <div class="products">
          <table  class="table" style="color:white;">
            <thead>
              <tr style='cursor: pointer; cursor: hand;' onclick="window.location='detail/{{$product->id}}';">
                <th  style="width: 5%;" scope="col"><img class="smallerpic img-fluid" style="padding-left: 5%;" src="{{$product->gallery}}" alt=""></th>
                <th  class="align-middle text-center" style="width: 5%;" scope="col">{{$product->name}}</th>
                <th class="align-middle text-center" style="width: 5%;" scope="col">${{$product->price}}</th>

              </tr>
            </thead>
          </table>
        </div>
      <?php endforeach; ?>

    <?php else: ?>
      <div class="text-center">
        <small>The list of recent orders is empty.</small>
      </div>
    <?php endif; ?>


  </div>
  @endsection
</body>
