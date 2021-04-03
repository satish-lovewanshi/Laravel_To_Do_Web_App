<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use Validator;
use View;
use URL;
use auth;

class todoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTodo=todo::all();
        return view('displayTodoList',['allTodo'=>$allTodo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('todoCreateForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'todo'=>'required'
        ]);
        if($validate->fails()){
            return back()->withErrors($validate)->withInput();
        }else{
            $data=new todo;
            $data->todo=$request->todo;
            $data->UserId=Auth::user()->id;
            $data->Priority=($request->Priority) ? $request->Priority:0;
            $result=$data->save();
            if($result){
                return redirect()->back()->with('message',"Your one work is saved add more work or See Upcommig work");
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=todo::find($id);
        return view('todoUpdateForm',['todo'=>$data]);
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
        $data=todo::find($id);
        $data->todo=$request->todo;
        $result=$data->save();

        if($result){   
            $allTodo=todo::all();
            return redirect(URL::to('todo'))->with('message','Your ToDo is updated ');
        }
        else{
            echo " something  went wrong";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=todo::find($id);
        $data->delete();
        return back()->with(['message','One work is deleted']);
    }
}
