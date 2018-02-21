<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
use Auth;

use App\Add;
use App\User;
use Kyslik\ColumnSortable\Sortable;

class AddsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//		$adds = DB::table('adds')
//                ->orderBy('post_date', 'desc')
//                ->paginate(15);
//		return view('adds.index',compact('adds'));
		
//		$adds = DB::table('users')
				
		$adds = Add::sortable(['post_date' => 'desc'])	
				->join('users', 'users.id', '=', 'adds.name_id')
                ->paginate(15);
		
		return view('adds.index',compact('adds'));
		
    }
		
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adds.create', compact('adds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		$add = new Add;
        $add->title = $request->title;
		$add->description = $request->description;
		$add->post_date = date('Y-m-d H:i:s');
		$add->name_id = Auth::id();
        $add->save();
//		return view('adds.index',compact('adds'));
		return redirect('/adds');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adds = Add::findOrFail($id);
			return view('adds.show', compact('adds'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
