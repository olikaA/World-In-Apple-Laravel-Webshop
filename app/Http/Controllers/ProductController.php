<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  function index()
  {
    $datas = Product::all();
    return view('product',['product'=>$datas]);
  }

  function detail($id)
  {


        $datas =  Product::find($id);

        if (is_null($datas)) {
          return redirect("/devices");
        }
        else {
          return view('detail',['datas'=>$datas]);
        }




  }

  function addtocart(Request $req)
  {
    if($req->session()->has('user'))
    {
      $cart = new Cart();
      $cart->user_id=$req->session()->get('user')['id'];
      $cart->product_id=$req->product_id;
      $cart->save();
      return Redirect::back();

    }
    else {
      return redirect("/login");
    }
  }

  static function cartItem()
  {
    $userId= Session::get('user')['id'];
    return Cart::where('user_id',$userId)->count();
  }

  function cart(Request $req)
  {
    if($req->session()->has('user'))
    {
      $userId= Session::get('user')['id'];
      $product= DB::table('cart')
      ->join('products','cart.product_id','=','products.id')
      ->where('cart.user_id',$userId)
      ->select('products.*', 'cart.id as cart_id')
      ->get();


      return view('cart',['products'=>$product]);
    }
    return redirect('/login');
  }

  function devices()
  {
    $datas = Product::all();

    return view('devices',['products'=>$datas]);
  }

  function removecart($id)
  {
    Cart::destroy($id);
    return redirect('cart');
  }

  function checkout()
  {
    if (Session::has('user')) {
      $userId= Session::get('user')['id'];

      $total= DB::table('cart')
      ->join('products','cart.product_id','=','products.id')
      ->where('cart.user_id',$userId)
      ->select('products.*', 'cart.id as cart_id')
      ->sum('products.price');

      if ($total != 0) {
        return view('checkout',['total'=>$total]);

      }
      else {
        $error_message = "Cart is empty.";
        return view('cart', compact('error_message'));
      }
    }
    else {
      return redirect("/login");
    }
  }


  function checkoutplace(Request $req)
  {
      try {
        $userId= Session::get('user')['id'];
        $allcart= Cart::where('user_id', $userId)->get();

        $total= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*', 'cart.id as cart_id')
        ->sum('products.price');
        $product = Product::all();

        $validator = Validator::make($req->all(), [
          'name' => 'required',
          'address' => 'required',
          'method' => 'required'

        ]);
        if ($validator->fails())
        {
          $error_message = "You haven't filled all required fields.";
          return view('checkout', compact('error_message','total'));
        }

        foreach ($allcart as $cart) {
          $order = new Order;
          $order->product_id=$cart['product_id'];
          $order->user_id=$cart['user_id'];
          $order->status="pending";
          $order->payment_method=$req->method;
          $order->payment_status="pending";
          $order->address=$req->address;
          $order->name=$req->name;
          $order->save();
          Cart::where('user_id', $userId)->delete();
        }




        $req->input();
        $successmessage =  0;
        return view('product', compact('successmessage','product'));

      } catch (\Exception $e) {
        return redirect('/');
      }




  }

  function orders()
  {
    if (Session::has('user')) {

      $userId= Session::get('user')['id'];

      $orders =  DB::table('orders')
      ->join('products','orders.product_id','=','products.id')
      ->where('orders.user_id',$userId)
      ->get();

      return view('orders', ['orders'=>$orders]);
    }
    else {
      return redirect('/login');
    }
  }
}
