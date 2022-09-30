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
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'brand' => 'required|string',
            'model' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $insurance = new Insurance;
        $insurance->user_id = $req->input('user_id');
        $insurance->firstname = $req->input('firstname');
        $insurance->lastname = $req->input('lastname');
        $insurance->brand = $req->input('brand');
        $insurance->model = $req->input('model');
        $insurance->price = $req->input('price');
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
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'brand' => 'required|string',
            'model' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $insurance = Insurance::findorfail($id);
        $insurance->user_id = $req->input('user_id');
        $insurance->firstname = $req->input('firstname');
        $insurance->lastname = $req->input('lastname');
        $insurance->brand = $req->input('brand');
        $insurance->model = $req->input('model');
        $insurance->price = $req->input('price');
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
