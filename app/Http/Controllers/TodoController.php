<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // lấy dữ lệu theo bảng
        // $list = DB::table('todos')->get();

        // lấy tất cả dữ liệu
        // $list = Todo::get();

        // lấy theo dữ liệu mới nhất nhập vào        
        $list = Todo::latest()->get();

        // in ra thông tin nhập vào
        // dd($list);

        return view('todo.todo')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Nhận dữ liệu từ $request
        $title = $request->get('title');
        $content = $request->get('content');
        $status = $request->get('status');
        // Lưu dữ liệu vào đối tượng $todo
        $todo = new Todo();
        $todo->title = $title;
        $todo->content = $content;
        $todo->status = $status;
        $todo->save();
        // Chuyển hướng về trang danh sách
        return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Todo::find($id);
        return view('todo.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Lấy dữ liệu với $id
        $item = Todo::find($id);
        // Gọi đến view edit
        return view('todo.edit')->with('item', $item);
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
        // Nhận dữ liệu từ $request
        $title = $request->get('title');
        $content = $request->get('content');
        $status = $request->get('status');

        // dump($title);
        // dump($content);
        // dump($status);

        // dd();
        
        // Tìm todo tương ứng với id
        $todo = Todo::find($id);
        //Cập nhật dữ liệu mới
        $todo->title = $title;
        $todo->content = $content;
        $todo->status = $status;


        // Lưu dữ liệu
        $todo->save();
        //Chuyển hướng đến trang danh sách
        return redirect()->route('todos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Xoá với id tương ứng 
        Todo::destroy($id);
        // Chuyển hướng về trang danh sách
        return redirect()->route('todos.index');
    }
}
