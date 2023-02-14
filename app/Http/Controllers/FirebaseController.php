<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;

use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;


class FirebaseController extends Controller
{
    public function index()
    {
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/final-cent-firebase-adminsdk-90m50-a4f49559c7.json')
            ->withDatabaseUri('https://final-cent-default-rtdb.firebaseio.com');
 
        $database = $firebase->createDatabase();
 
        $blog = $database
        ->getReference('uploads')->getSnapshot();
 
        // return response()->json($blog->getValue());
        // $data = response()->json($blog->getValue());
        $data = $blog->getValue();
        
        return view('index')->with("data", $data);
    }

    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

    //products
    public function foodstuff()
    {
        return view('products/foodstuff');
    }

    public function grocery()
    {
        return view('products/grocery');
    }

    public function electronics()
    {
        return view('products/electronics');
    }

    public function homeAppliances()
    {
        return view('products/home_appliances');
    }

    public function phoneAccessories()
    {
        return view('products/phone_accessories');
    }

    public function cereal()
    {
        return view('products/cereal');
    }

    public function gasFuels()
    {
        return view('products/gas_fuels');
    }

    public function otherItems()
    {
        return view('products/other_items');
    }

    public function bags()
    {
        return view('products/bags');
    }

    public function cosmetics()
    {
        return view('products/cosmetics');
    }

    public function hairBeauty()
    {
        return view('products/hair_beauty');
    }

    public function clothes()
    {
        return view('products/clothes');
    }

    public function shoes()
    {
        return view('products/shoes');
    }

    public function millingProducts()
    {
        return view('products/milling_products');
    }

    public function singleProduct($key)
    {
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/final-cent-firebase-adminsdk-90m50-a4f49559c7.json')
            ->withDatabaseUri('https://final-cent-default-rtdb.firebaseio.com');
 
        $database = $firebase->createDatabase();
 
        $blog = $database
        ->getReference('uploads')
        ->orderByChild('key')
        ->equalTo($key);
        $data = $blog->getValue();

        return view('products/single_product')->with($data);
    }

    //services
    public function transport()
    {
        return view('services/transport');
    }
    
    public function millingServices()
    {
        return view('services/milling_services');
    }

    public function repair()
    {
        return view('services/repair');
    }

    public function chores()
    {
        return view('services/chores');
    }

    public function hairstyleBeauty()
    {
        return view('services/hairstyle_beauty');
    }

    public function otherServices()
    {
        return view('services/other_services');
    }

    public function services()
    {
        return view('services/services');
    }

    public function singleService()
    {
        return view('services/single_service');
    }
}