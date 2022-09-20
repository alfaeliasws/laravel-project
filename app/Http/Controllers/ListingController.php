<?php

namespace App\Http\Controllers;

use App\Models\RacipGenesis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ListingController extends Controller
{
    //Show all listing
    public function index(){
        return view('index',[
            'listings' => RacipGenesis::filter(request([`search`]))->paginate(24)
        ]);
    }

    //Show create form
    public function create(){
        return view('create');
    }

    //Individual listing
    public function show(RacipGenesis $listing){
        return view('show',[
            'listing' => $listing
        ]);
    }

    //Store Data
    public function store(Request $request){
        $formFields = $request->validate([
            'art_style'=>'required',
            'class'=>'required',
            'description'=>'required',
            'dietary'=>'required',
            'dominant_color'=>'required',
            'dominant_gene'=>'required',
            'geographical_place'=>'required',
            'habitat'=>'required',
            'picture'=>'required|mimes:jpeg,jpg,png,svg',
            'series'=>'required',
            'name'=>'required',
            'pattern'=>'required',
            'secondary_gene'=>'required',
            'series'=>'required',
            'special_gene'=>'required',
            'species_name'=>'required',
            'url'=>'required'
        ]);

    if($request->hasFile('picture')){
        $formFields['picture'] = $request->file('picture')->store('images','public');
    }

    $formFields['user_id'] = auth()->id();

    RacipGenesis::create($formFields);

    return redirect('/')->with('message','Successfully Created');

    }


    //Update Data
    public function update(Request $request, RacipGenesis $listing){
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }


        $formFields = $request->validate([
            'art_style'=>'required',
            'class'=>'required',
            'description'=>'required',
            'dietary'=>'required',
            'dominant_color'=>'required',
            'dominant_gene'=>'required',
            'geographical_place'=>'required',
            'habitat'=>'required',
            'picture'=>'required|mimes:jpeg,jpg,png,svg',
            'series'=>'required',
            'name'=>'required',
            'pattern'=>'required',
            'secondary_gene'=>'required',
            'series'=>'required',
            'special_gene'=>'required',
            'species_name'=>'required',
            'url'=>'required'
        ]);

    if($request->hasFile('picture')){
        $formFields['picture'] = $request->file('picture')->store('images','public');
    }

    $listing->update($formFields);

    return view('show',['listing' => $listing])->with('message','Successfully Updated');

    }

    public function destroy(RacipGenesis $listing){
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/')->with('message','Listing deleted successfully');
    }

    public function edit(RacipGenesis $listing){
        return view('edit',['listing'=> $listing]);
    }

    public function manage(){
        return view('manage',['listings' => auth()->user()->listings()->get()]);
    }
}
