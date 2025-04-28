<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CostumesCategory;
use App\Models\DanceClass;
use App\Models\DanceCategory;
use App\Models\Costumes;

class Frontendcontroller extends Controller
{
    public function index() {
        $CostumesCategory = CostumesCategory::all();
    
        // Costumes with discount > 1
        $costumes = Costumes::where('discount', '>', 1)->latest()->take(12)->get();
    
        // Fetch latest 6 dance classes
        $danceClasses = DanceClass::latest()->take(6)->get();
    
        return view('frontend.index', compact('CostumesCategory', 'costumes', 'danceClasses'));
    }
    
    
    // public function productdetail($id)
    // {
    //     $costume = Costumes::findOrFail($id);
    
    //     $related = Costumes::where('category_id', $costume->category_id)
    //                 ->where('id', '!=', $costume->id)
    //                 ->take(4)
    //                 ->get();
    
    //                 $images = is_array($costume->images) ? $costume->images : json_decode($costume->images, true);
    //                 $colors = is_array($costume->colors) ? $costume->colors : json_decode($costume->colors, true);
    //                 $sizes = is_array($costume->sizes) ? $costume->sizes : json_decode($costume->sizes, true);
    //     return view('frontend.product-detail', compact('costume', 'related', 'images','colors','sizes'));
    // }
    public function productdetail($id)
{
    $costume = Costumes::findOrFail($id);

    $related = Costumes::where('category_id', $costume->category_id)
        ->where('id', '!=', $costume->id)
        ->get();

    $images = is_array($costume->images) ? $costume->images : json_decode($costume->images, true);

    // Decode color_size JSON safely
    $colorSizeMap = is_array($costume->color_size)
        ? $costume->color_size
        : json_decode($costume->color_size, true);

    $colorSizeMap = is_array($colorSizeMap) ? $colorSizeMap : [];

    $colors = array_keys($colorSizeMap);
    $sizes = array_unique(array_merge(...array_values($colorSizeMap)));

    return view('frontend.product-detail', compact('costume', 'related', 'images', 'colorSizeMap', 'colors', 'sizes'));
}

    

    
    // public function costumes($id){
    //     $costumes = Costumes::where('category_id', $id)->latest()->paginate(12);
    //     $category = CostumeCategory::findOrFail($id);
    //     $category = CostumeCategory::all();
    //     return view('frontend.costume',compact('costumes','category'));
    // }
    
public function allDanceClasses()
{
    $classes = DanceClass::with('category')->latest()->paginate(12);
    return view('frontend.danceclasses', compact('classes'));
}
public function allCostumes()
{
    $costume = Costumes::with('category')->latest()->paginate(12);
    return view('frontend.costume', compact('costume'));
}
public function costumeByCategory($slug)
{
    $category = CostumesCategory::where('slug', $slug)->firstOrFail();

    $costumes = Costumes::where('category_id', $category->id)->latest()->paginate(12);

    return view('frontend.costume-category', compact('category', 'costumes'));
}


public function danceClassDetail($id)
{
    $class = DanceClass::with('category')->findOrFail($id);
    return view('frontend.danceclassdetails', compact('class'));
}



    public function aboutus(){
        return view('frontend.about');
    }

    public function contactus(){
        return view('frontend.contact');
    }
}
