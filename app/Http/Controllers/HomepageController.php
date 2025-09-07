<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Slider;
use App\Models\SubCategorie;
use App\Models\Upazila;
use App\Models\Vendor;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class HomepageController extends Controller
{

    public function homePage()
    {

        return view('homepage');


        $products = [
            [
                'id' => 1,
                'title' => 'Smart Unity Card',
                'image' => 'assets/img/cards/NFC-CARD.jpg',
                'icon'  => 'fas fa-handshake',
                'features' => [
                    'শক্তিশালী নেটওয়ার্ক তৈরি: রাজনৈতিক নেতা, সংগঠনের সদস্য বা ব্যবসায়িক পার্টনাররা একই প্ল্যাটফর্মে যুক্ত থাকতে পারবেন।',
                    'বিনামূল্যে তথ্য আদান-প্রদান: সংগঠনের সকল কর্মী ও সদস্যদের মধ্যে দ্রুত ও কার্যকর যোগাযোগ সম্ভব হবে।',
                ],
            ],
            [
                'id' => 2,
                'title' => 'Premium NFC Card',
                'image' => 'assets/img/cards/PREMIUM-CARD.jpg',
                'icon'  => 'fas fa-id-card',
                'features' => [
                    'স্টাইলিশ ডিজাইন: আধুনিক ব্যবসায়িক প্রেজেন্টেশনের জন্য আদর্শ।',
                    'টেকসই উপকরণ: দীর্ঘ সময় ব্যবহারযোগ্য।',
                ],
            ],
            // add more products here...
        ];
    }


     public function blogPost()
    {

        return view('frontend.blog');
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



    public function vendorForm()
    {
        return view('frontend.vendors.vendor-form');
    }


    public function showVendorList($categorySlug)
    {
        $category = SubCategorie::where('slug', $categorySlug)->firstOrFail();
        $vendor = Vendor::where('sub_categories_id', $category)->first();
        $all_products = Product::all();
        $product_categories = Category::all();
        return view('frontend.vendors.vendor-cart', compact('category', 'vendor','all_products','product_categories'));

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
