<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Thuvien;
use App\Http\Requests\BookRequest;

class ThuvienController extends Controller
{
    //
    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $book = new Thuvien();
        $book->ten_sach = $request->ten_sach;
        $book->ISBN = $request->ISBN;
        $book->tac_gia = $request->tac_gia;
        $book->the_loai = $request->the_loai;
        $book->so_trang = $request->so_trang;
        $book->nam_xb = $request->nam_xb;

        $book->save();

        return redirect()->route('index')->with('success', 'Thêm thành công!');
    }




    public function index()
{
    $books = Thuvien::paginate(3); // Lấy 10 người dùng trên mỗi trang

    return view('index', compact('books'));
}


    public function edit($id){
        $book = Thuvien::find($id);
        return view('edit',compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Thuvien::find($id);
        $book->ten_sach = $request->ten_sach;
        $book->ISBN = $request->ISBN;
        $book->tac_gia = $request->tac_gia;
        $book->the_loai = $request->the_loai;
        $book->so_trang = $request->so_trang;
        $book->nam_xb = $request->nam_xb;

        $book->save();

        return redirect()->route('index')->with('success', 'Sửa thành công!');

    }
    public function destroy($id)
    {
        $book = Thuvien::find($id);
        $book->delete();
        return redirect()->route('index');

    }

    public function search(Request $request)
{
    $keyword = $request->input('keyword');
    $books = Thuvien::where('ten_sach', 'like', "%$keyword")
                  ->orWhere('the_loai', 'like', "%$keyword")
                  ->orWhere('tac_gia', 'like', "%$keyword")

                  ->paginate(3);

    return view('index', compact('books'));
}


}
