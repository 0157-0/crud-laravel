<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //
    public function loja()
    {
       $items = Item::get();
      
        return view('pag.loja', compact('items'));
    }
}
