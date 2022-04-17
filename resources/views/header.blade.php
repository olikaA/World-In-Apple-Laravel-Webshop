<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">World in Apple</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/devices">Devices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/orders">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cart">Cart ({{$total}})</a>
      </li>




    </ul>

  </div>
  @if(Session::has('user'))
  <div class="dropdown show">
    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      {{Session::get('user')['name']}}
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="/logout">Logout</a>

    </div>
  </div>

  @else


  <a class="nav-link" style="color:inherit;" href="/login">Login</a>
  <a class="nav-link" style="color:inherit;" href="/register">Register</a>




  @endif
</nav>
