<?php

namespace App\Http\Controllers;

use App\Models\stock;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stock = stock::all();
        return view('stock.index', compact('stock'));
    }

    public function create()
    {
        return view('stock.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_brg' => 'required|unique:stock',
            'nama_brg' => 'required',
            'satuan' => 'required',
        ]);

        stock::create($request->all());
        return redirect()->route('stock.index')->with('success', 'Stock created successfully.');
    }

    public function edit($id)
    {
        $stock = stock::findOrFail($id);
        return view('stock.edit', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_brg' => 'required|unique:stock,kode_brg,' . $id,
            'nama_brg' => 'required',
            'satuan' => 'required',
        ]);

        $stock = stock::findOrFail($id);
        $stock->update($request->all());
        return redirect()->route('stock.index')->with('success', 'Stock updated successfully.');
    }

    public function destroy($id)
    {
        $stock = stock::findOrFail($id);
        $stock->delete();
        return redirect()->route('stock.index')->with('success', 'Stock deleted successfully.');
    }
}
