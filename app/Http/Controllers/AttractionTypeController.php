<?php

namespace App\Http\Controllers;

use App\Models\AttractionType;
use Illuminate\Http\Request;
use Validator;

use Illuminate\Foundation\Validation\ValidatesRequests;

class AttractionTypeController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attractions = AttractionType::all();
        return response()->json($attractions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'title' => 'required|max:255'
        ]);
        if($validate->fails()){
            return response()->json($validate->errors());
        }
        $attraction = AttractionType::create([
            'title' => $request->title
        ]);

        return response()->json(['attraction_type created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attraction = AttractionType::all()->find($id);
        if(is_null($attraction)) {
            return response()->json('attraction not found',404);
        }
        return response()->json($attraction);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
        $validate = Validator::make($request->all(),[
            'title' => 'required|max:255'
        ]);
        if($validate->fails()){
            return response()->json($validate->errors());
        }
        $attraction = AttractionType::find($id);
        if(is_null($attraction)){
            return response()->json(['attraction not found']);
        }
        $attraction->update($request->all());
        return response()->json(['attraction updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attraction = AttractionType::all()->find($id);
        if(is_null($attraction)) {
            return response()->json('attraction not found',404);
        }
        $attraction->delete();
        return response()->json('attraction deleted');
    }
}
