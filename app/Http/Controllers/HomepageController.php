<?php

namespace App\Http\Controllers;

use App\Models\DesignList;
use App\Models\Product;
use App\Models\Upazila;


use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HomepageController extends Controller
{

    public function homePage()
    {
        return view('homepage');
    }


     public function learnMore()
    {

        return view('frontend.learn-more');
    }

    public function designList()
    {
        $designLists = DesignList::all();
        return view('frontend.design-list',compact('designLists'));
    }


    public function productShowDetail($slug)
    {
        $detail = Product::with(['gallery','category'])->where('slug', $slug)->first();
        $relatedProducts = Product::where('categorie_id', $detail->categorie_id)
            ->where('id', '!=', $detail->id)
            ->inRandomOrder()
            ->limit(5)
            ->get();
        return view('frontend.product-details', compact('detail','relatedProducts'));
    }



    public function categoryList()
    {
        $products = Product::latest()->paginate(20);
        return view('frontend.cart.category-list', compact('products'));
    }



    public function getUpazilas($districtId)
    {
        $upazilas = Upazila::where('district_id', $districtId)->pluck('name', 'id');
        return response()->json($upazilas);
    }

    public function aboutUs()
    {
        return view('frontend.about');
    }
    
    public function contactUs()
    {
        return view('frontend.contact');
    }
    public function termsAndConditions()
    {
        return view('frontend.terms-condition');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }



}
