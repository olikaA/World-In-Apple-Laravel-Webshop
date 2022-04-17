@extends('master')

@section('content')


<body style="background-color:#141414;">
  <div class="container-with-height">
    <h5 class="text-center">Register</h5>
    <br>
    <br>
    <div class="container d-flex justify-content-center">
      <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          @csrf
          <label for="exampleInputEmail1">Name</label>
          <input type="name" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter name" required>
          <br>
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>

        <br>
        <div class="d-flex justify-content-center">

          <button type="submit" class="btn text-light btn-outline-dark">Register</button>

        </div>
      </form>

    </div>
    <br>
    <div class="text-center">

      <p>If you have an account already, <a style="color:white;" href="/login"><b>login</a></b>.</p>

    </div>
    <br>
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
