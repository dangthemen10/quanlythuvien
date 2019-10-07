<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Qltv_Nganh; //Muốn sử dụng csdl thì phải use
use App\Qltv_Khoa;
use Illuminate\Support\Facades\DB; 
use App\Http\Requests\NganhCreateRequest; 


class NganhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Qltv_Nganh::paginate(10);
        $users= DB::table('qltv_nganh')->paginate(10); // Hiển thị Phân Trang
        return view('backend.nganh.index',['users' => $users])
            ->with('listNganh', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listKhoa = Qltv_Khoa::all();
        return view('backend.nganh.create')
            ->with('listKhoa',$listKhoa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NganhCreateRequest $request)
    {
        $nganh = new Qltv_Nganh();
        $nganh->manganh = $request->manganh;
        $nganh->tennganh = $request->tennganh;
        $nganh->khoa_id = $request->khoa_id;

        $nganh->save();

        return redirect()->route('backend.nganh.index');
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
        $nganh = Qltv_Nganh::find($id); //SELECT * from qltv_nganh where id='id'
        $listKhoa = Qltv_Khoa::all();
        return view('backend.nganh.edit')
            ->with('listKhoa',$listKhoa)
            ->with('nganh', $nganh);
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
        $nganh = Qltv_Nganh::find($id);
        $nganh->manganh = $request->manganh;
        $nganh->tennganh = $request->tennganh;
        $nganh->khoa_id = $request->khoa_id;

        $nganh->save();

        return redirect()->route('backend.nganh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nganh= Qltv_Nganh::find($id);
        $nganh->delete();

        return redirect()->route('backend.nganh.index');
    }
    public function print()
    {
        $list = Qltv_Nganh::all();
        return view('backend.nganh.print')
            ->with('listNganh', $list);
    }
}
