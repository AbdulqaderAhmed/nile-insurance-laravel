<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;

class InsurancesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $insurance = Insurance::paginate(5);
        return view('pages.home.index')->with('insurance', $insurance);
    }

    public function dashboard()
    {
        $insurance = Insurance::paginate(5);
        return view('pages.admin.dashboard')->with('insurance', $insurance);
    }

    public function create()
    {
        return view('pages.admin.create');
    }

    public function store(Request $req)
    {
        $req->validate([
            'body' => 'required|string',
            'description' => 'required|string',
            'model' => 'required|string',
            'engine' => 'required|string',
            'transmission' => 'required|string',
            'cc' => 'required|string',
            'brand1' => 'required|string',
            'brand2' => 'required|string',
            'brand3' => 'required|string',
            'brand4' => 'required|string',
            'brand5' => 'required|string',
            'brand6' => 'required|string',
            'brand7' => 'required|string',
            'brand8' => 'required|string',
            'brand9' => 'required|string',
            'brand10' => 'required|string',
            'brand11' => 'required|string',
            'brand12' => 'required|string',
        ]);

        $insurance = new Insurance;
        $insurance->user_id = $req->input('user_id');
        $insurance->body = $req->input('body');
        $insurance->description = $req->input('description');
        $insurance->model = $req->input('model');
        $insurance->engine = $req->input('engine');
        $insurance->transmission = $req->input('transmission');
        $insurance->cc = $req->input('cc');
        $insurance->brand1 = $req->input('brand1');
        $insurance->brand2 = $req->input('brand2');
        $insurance->brand3 = $req->input('brand3');
        $insurance->brand4 = $req->input('brand4');
        $insurance->brand5 = $req->input('brand5');
        $insurance->brand6 = $req->input('brand6');
        $insurance->brand7 = $req->input('brand7');
        $insurance->brand8 = $req->input('brand8');
        $insurance->brand9 = $req->input('brand9');
        $insurance->brand10 = $req->input('brand10');
        $insurance->brand11 = $req->input('brand11');
        $insurance->brand12 = $req->input('brand12');
        $insurance->save();

        return redirect('/dashboard');
    }

    public function show($id)
    {
        $insurance = Insurance::findorfail($id);
        return view('pages.admin.show')->with('insurance', $insurance);
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'body' => 'required|string',
            'description' => 'required|string',
            'model' => 'required|string',
            'engine' => 'required|string',
            'transmission' => 'required|string',
            'cc' => 'required|string',
            'brand1' => 'required|string',
            'brand2' => 'required|string',
            'brand3' => 'required|string',
            'brand4' => 'required|string',
            'brand5' => 'required|string',
            'brand6' => 'required|string',
            'brand7' => 'required|string',
            'brand8' => 'required|string',
            'brand9' => 'required|string',
            'brand10' => 'required|string',
            'brand11' => 'required|string',
            'brand12' => 'required|string',
        ]);


        $insurance = new Insurance;
        $insurance->user_id = $req->input('user_id');
        $insurance->body = $req->input('body');
        $insurance->description = $req->input('description');
        $insurance->model = $req->input('model');
        $insurance->engine = $req->input('engine');
        $insurance->transmission = $req->input('transmission');
        $insurance->cc = $req->input('cc');
        $insurance->brand1 = $req->input('brand1');
        $insurance->brand2 = $req->input('brand2');
        $insurance->brand3 = $req->input('brand3');
        $insurance->brand4 = $req->input('brand4');
        $insurance->brand5 = $req->input('brand5');
        $insurance->brand6 = $req->input('brand6');
        $insurance->brand7 = $req->input('brand7');
        $insurance->brand8 = $req->input('brand8');
        $insurance->brand9 = $req->input('brand9');
        $insurance->brand10 = $req->input('brand10');
        $insurance->brand11 = $req->input('brand11');
        $insurance->brand12 = $req->input('brand12');
        $insurance->save();

        return redirect('/dashboard');
    }

    public function destroy($id)
    {
        $insurance = Insurance::findorfail($id);
        $insurance->delete();

        return redirect()->back();
    }
}
