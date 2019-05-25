<?php

namespace sarjanatani\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

use sarjanatani\Lahan;

class LahanController extends Controller
{
 public function index()
    {
		$lahan = \DB::table('lahans')->Paginate(2);
        return response()->json(['status' => 'success','code'=>'200', 'data' =>'artikels.index', compact('lahans') ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
          Lahan::create([
              'luas_lahan' => request('luas_lahan'),
          ]);
   
          if (Lahan::create($request->all())) {
            return response()->json(['status' => 'success' ,'code' => '201', 'message' => 'Data has been created'],201);
          } else {
            return response()->json(['status' => 'error','code' => '500', 'message' => 'Internal Server Error' ],500);
          }
    }

    public function show($id)
    {
        $user = Lahan::find($id);
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
