<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        // $produits = Produit::all();

//        $stocks = 'salam akhi comment tu vas ?';
        // dd($stocks);
        return view('back.stock.manager')->with('stocks', $stocks);
        // return view('back.stock.manager')->compact('stocks',$stocks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'masse' => 'required',
            'nom_produit' => 'required'
        ]);

        $stock = new Stock([
            'masse' => $request->get('masse'),
            'man_recorder' => $request->get('man_recorder')
        ]);

        $stock->save();
//        dd($stock);

        return redirect('/stocks')->with('success','Nouveau stock enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
        return view('stocks.show',compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $stock = Stock::find($id);
        return view('stocks.edit', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'recorder' => 'required',
            'masse' => 'required',
        ]);

//        dd($request);
        $stock = Stock::find($id);
            $stock->masse = $request->get('masse');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $stock = Stock::find($id);
        $stock->delete();

        return redirect('/stocks')->with('success', 'stock deleted!');
    }
}
