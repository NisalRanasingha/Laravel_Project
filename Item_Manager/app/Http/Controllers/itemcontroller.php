<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class itemcontroller extends Controller
{
    public function saveitem(Request $request){

        $item=new Item();
        $item->itemname = $request->name;
        $item->qty = $request->qty;
        $item->price = $request->price;
        $item->save();
        return redirect('/');
    }

    public function delete($id){
        
        $item = Item::find($id);
        $item->delete();
        return redirect('/');
    }

     public function update($id){ 
        $item = Item::find($id);
        return view('update')->with('item',$item);
    }

    public function updateitem(Request $request,$id){
        $item = Item::find($id);
        $item->itemname = $request->name;
        $item->qty = $request->qty;
        $item->price = $request->price;
        $item->save();
        return redirect('/');

    }
}
