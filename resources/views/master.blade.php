<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>World In Apple</title>
  <!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  </html>
</head>



{{View::make('header')}}


@yield('content')


{{View::make('footer')}}


<style>
/* html{
position:relative;
margin:auto;
max-height:100%;
max-width:100%;
} */


.container-with-height{
  min-height: 700px;
  padding-top: 5%;
  color: white;
  margin-bottom: 5%;

}
.img-fluid{
  height: 400px;

}
.detail{
  max-height: 600px;
  height: auto;
  overflow:hidden;
}
.promo{
  line-height: 30px;
  padding: 10px;
  padding-top: 3%;
  padding-bottom: 3%;
  border-style: solid;
  border-color: grey;
  border-radius: 5px;
  margin-left: 20%;
  margin-right: 20%;
  margin-bottom: 10%;
  color: white;
}
.desc{
  padding-left: 10px;
  padding-right: 10px;
}
.name{
  padding-left: 10px;
  padding-right: 10px;
}
.price{
  padding-left: 10px;
  padding-right: 10px;
}

.button-container{
  padding-bottom: 7%;
  padding-top: 3%
}
.section{
  padding-right: 2%;
}
.smallpic{
  max-width: 150px;
  height: auto;
  overflow:hidden;
}
.smallerpic{
  max-width: 70px;
  height: auto;
  overflow:hidden;
}
.products{
  border-left: 1px solid white;
  border-right: 1px solid white;
  margin-left: 3%;
  margin-right: 3%;
}
.productsfinal{
  border-left: 1px solid white;
  border-right: 1px solid white;
  margin-left: 30%;
  margin-right: 30%;
}
.total{
  border-left: 1px solid white;
  border-right: 1px solid white;
  margin-left: 3%;
  margin-right: 3%;
}
.mainpageproduct{
  max-height: 400px;
  height: auto;
  overflow:hidden;
}
.orderform{
  padding-left: 30%;
  padding-right: 30%;
}
.successholder{
  background-color: black;
  padding: 1%;
  color: white;
  border-bottom: solid grey 1px;

}
.footer-container
{
  color: white;
  padding-top: 5%;
  padding-bottom: 1%;
}
</style>
</html>
