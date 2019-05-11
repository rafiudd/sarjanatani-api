<?php

namespace sarjanatani\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

use sarjanatani\Artikel;


class ArtikelController extends Controller
{

    public function index()
    {
		$artikels = \DB::table('artikels')->Paginate(2);
		return response()->json($artikels);
        // return response()->json(['status' => 'success','code'=>'200', 'data' =>'artikels.index', compact('artikels') ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'required'
          ]);
   
          if (Artikel::create($request->all())) {
            return response()->json(['status' => 'success' ,'code' => '201', 'message' => 'Data has been created'],201);
          } else {
            return response()->json(['status' => 'error','code' => '500', 'message' => 'Internal Server Error' ],500);
          }
    }

    public function show($id)
    {
        $user = Artikel::find($id);
        if ($user) {
          return response()->json(['status' => 'success','code' => '200', 'data'=> $user]);
        }
 
        return response()->json(['status' => 'error','code' => '404', 'message' => 'Data not found'],404);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'required'
          ]);
   
          $user = Artikel::find($id);
          if ($user) {
            $user->update($request->all());
            return response()->json(['status' => 'success','code'=>'200', 'message' => 'Data has been updated']);
          }
   
          return response()->json(['status' => 'error','code'=>'400', 'message' => 'Cannot updating data'],400);
    }

    public function destroy($id)
    {
        $user = Artikel::find($id);
      if ($user) {
        $user->delete();
        return response()->json(['stats' => 'success','code'=>'200', 'message' => 'Data has been deleted']);
      }
 
      return response()->json(['status' => 'error','code'=>'400', 'message' => 'Cannot deleting data'],400);
    }
}
