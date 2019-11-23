<?php

namespace App\Http\Controllers;
use App\Category;
use App\comment;
use App\Product;
use App\country;
use App\role;
use App\User;
use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
	public function index(){
		 $post =  post::with('comments')->get();

		  $comment =$this->comment();
		  $phone =$this->phone();
		  $user =$this->user();
		  $category = $this->category();
		  $product = $this->product();

        $country = country::with('posts')->get()->find(1);

        $useroncountry = country::with('useroncountry')->get()->find(1);




		 return [ 'post'=>$post,'comment'=>$comment,'phone'=>$phone,'user'=>$user,'category'=>$category,
             'product'=>$product,'country'=>$country,'userByCountry'=>$useroncountry];
	}

	public function comment(){
		 return $comment = comment::with('post')->get();
	}
	public function phone(){
       return  $phone = User::with('phone')->get();
	}
	public function user(){
       return  $user = 4;
    }
    public function category(){
        return $category = Category::with('products')->get();

    }
    public function product(){

        return $product  = Product::with('categories')->get();
    }



}
