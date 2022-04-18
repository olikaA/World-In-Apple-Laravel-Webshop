@extends('master')

@section('content')
<body style="background-color:#141414;">
  <div class="container-with-height">
    <div class="productsfinal">
      <table class="table" style="color:white;">
        <thead>
          <tr>
            <th style="padding-left: 5%; width:20%;" scope="col">Total: </th>
            <th class="text-right"  scope="col">${{$total}}</th>
          </tr>
        </thead>
      </table>

    </div>
    <br>
    <br>
    <div class="orderform">

      <form action="/checkoutplace" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputAddress">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name" required>
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputAddress">Address</label>
          <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address" required>
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputMethod">Payment method</label>
          <br>
          <br>
          <span>Credit / Debit Card </span> <input type="radio" value="creditordebit" name="method" required>

          <br>
          <span>Cash on delivery </span> <input type="radio" value="cash" name="method" required>

        </div>

        <div class="buttons d-flex justify-content-center">
          <button class="btn text-light btn-outline-dark">Check out</button>
        </div>
      </form>
      <br>
      <br>
      <?php if (isset($error_message)): ?>
        <div class="text-center">

          {{$error_message}}
        </div>
      <?php endif; ?>

    </div>
  </div>
</body>
@endsection
