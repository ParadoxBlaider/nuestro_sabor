<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function getIndex(){
        return view('restaurant.index')->with('arrayRestaurantes', Restaurant::all());
    }

    public function getShow($id){
        return	view('restaurant.show')->with('restaurante', Restaurant::findOrFail($id));
    }

    public function getCreate(){
        return	view('restaurant.create');
    }

    public function getEdit($id){
        return	view('restaurant.edit', array('arrayRestaurante'=> Restaurant::findOrFail($id)));
    }

    

    public function postCreate(Request $request){
        $restaurant = new Restaurant;
        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
        $restaurant->address = $request->address;
        $restaurant->city = $request->city;
        $restaurant->url_photo = $request->url_photo;
        $restaurant->save();
        return redirect('/restaurants');
        
    }

    public function putEdit(Request $request, $id){
        $restaurant = Restaurant::find($id);
        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
        $restaurant->address = $request->address;
        $restaurant->city = $request->city;
        $restaurant->url_photo = $request->url_photo;
        $restaurant->save();
        return redirect('/restaurants');
    }

    public function putStockPile($id){
        $restaurant = Restaurant::find($id);
        $restaurant->number_stockpile += 1;
        $restaurant->save();
        return redirect('/restaurants/show/'. $id);
    }

    public function deleteRestaurant($id){
        $m = Restaurant::find($id);
        $m->delete();
        return redirect('/restaurants');
    }
}
