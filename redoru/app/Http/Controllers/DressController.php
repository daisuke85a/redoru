<?php

namespace App\Http\Controllers;

use App\Dress;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class DressController extends Controller
{
    public function index(Request $request){
        $items = Dress::all();
        return view('dress.index' ,['items' => $items]);
    }

    public function add(Request $request){
        return view('dress.add');
    }

    public function create(Request $request){

        // $this->validate($request, Dress::$rules);

        // $dress = new Dress;
        // $form = $request->all();
        // unset($form['_token']);
        // $dress->fill($form)->save();

        $param = [
            'id'  => $request->id,
            'image' => $request->image,
            'size' => $request->size,
            'owner_id' => $request->owner_id,
            'exchange_state' => $request->exchange_state
        ];
        DB::table('dresses')->insert($param);
        return redirect('/dress');
    }

}
