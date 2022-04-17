@extends('master')

@section('content')

<body style="background-color:#141414;">

  <div class="container-with-height">



    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <h5 class="text-center">Login</h5>
    <br>
    <br>


    <div class="container d-flex justify-content-center">
      <form action="{{route('login')}}" method="POST">
        <div class="form-group">
          @csrf


          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>

        <br>

        <div class="d-flex justify-content-center">

          <button type="submit" class="btn text-light btn-outline-dark">Login</button>

        </div>
      </form>

    </div>
    <br>
    <div class="text-center">

      <p>If you don't have an account, <a style="color:white;" href="/register"><b>register</a></b> one.</p>

    </div>
    <br>
    <br>
    <div class="text-center">

      <?php if (isset($error_message))
      {
        echo "<small>".$error_message . "</small>"."<br><br>";
      }
      ?>
    </div>



  </div>



  @endsection
</body>
