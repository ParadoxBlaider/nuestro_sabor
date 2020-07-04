<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\StockPile;
use Illuminate\Http\Request;

class StockPileController extends Controller
{
    public function getIndex(){
        return view('stockpile.index')->with('arrayReservaciones', StockPile::all());
    }

    public function getCreate($id){
        return	view('stockpile.create')
        ->with('restaurante', Restaurant::where('id','=',$id)->firstOrFail())
        ->with('id', $id);
    }

    public function postCreate(Request $request, $id){
        $restaurant = Restaurant::find($id);
        if($restaurant->number_stockpiles >= 15){
            return response()->json(['Error, no se pueden crear más de 15 reservaciones']);
        }else{
            
            $stockpile = new StockPile;
            $stockpile->restaurant_id = $id;
            $stockpile->table = $request->table;
            $stockpile->date_stockpile = $request->date_stockpile;
            $stockpile->save();
            $restaurant->number_stockpiles +=1;
            $restaurant->save();
            return redirect('/restaurants/show/'.$id);
        }
        
    }

}
