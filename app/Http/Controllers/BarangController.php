<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Http\Requests;
use App\Barang;
class BarangController extends Controller
{
    public function index()
    {
    	$barangs = Barang::all();
		return view('barangs.index', compact('barangs'))->with('message', '');
    }

    public function show(Barang $barang)
	{
		return view('barangs.show', compact('barang'));
	}

    public function create()
    {
    	return view('barangs.create');
    }

	public function edit(Barang $barang)
	{
		return view('barangs.edit', compact('barang'));
	}

    public function update()
    {
    	$input = array_except(Input::all(), '_method');
		$barang->update($input);	 
		return Redirect::route('barangs.index', $barang->id)->with('message', 'Barang updated.');

    }
    
    public function destroy(Barang $barang)
	{
		$barang->delete();
	 
		return Redirect::route('barangs.index')->with('message', 'Barang deleted.');
	}
	 
	public function store(Barang $barang)
	{
		$input = Input::all();
		$input['id'] = $barang->id;
		Barang::create( $input );
	 
		return Redirect::route('barangs.index')->with('message', 'Barang updated.');
	}
}
