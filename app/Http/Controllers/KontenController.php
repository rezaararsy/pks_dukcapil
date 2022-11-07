<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;;
use App\Models\konten;

class KontenController extends Controller
{
    public function tambah()
    {
        return view('tambah');
    }
    public function admin(){
        $kontens = konten::all();
        return view('showadmin',['konten' => $kontens]);
    }
    public function index(){
        $kontens = konten::all();
        return view('index',['konten' => $kontens]);
    }
    public function show($konten){
        $result = konten::findOrFail($konten);
        return view('detail',['konten' => $result]);
    }
    public function frontpage()
    {
        $result = konten::all();
        return view('frontpage',['konten' => $result]);
    }
    public function about(){
        return view('about');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'instansi'              => 'required|min:3|max:50',
            'pj'              => 'required|min:3|max:50',
            'tanggal_ttd'           => 'required|date',
            'tanggal_selesai'       => 'nullable|date',
            'status'                => 'nullable|boolean',
            'file'              => 'required|mimes:pdf',

        ]);
        $konten = new konten;
        $konten->instansi = $request['instansi'];
        $konten->pj = $request['pj'];
        $konten->tanggal_ttd = $request['tanggal_ttd'];
        $konten->tanggal_selesai = $request['tanggal_selesai'];
        $konten->status = $request->has(['status']);
        $file=$validateData['file'];
        $ext=$file->getClientOriginalExtension();
        $filename=time().'.'.$ext;
        $file->move(public_path().'/download', $filename);
        $konten->file=$filename;

        $konten->save();
        return redirect()->route('kontens.showadmin');
    }
    public function edit(konten $konten){
        return view('edit',['konten'=>$konten]);
    }
    public function update(Request $request,konten $konten){

        $validateData = $request->validate([
            'instansi'              => 'required|min:3|max:50',
            'pj'              => 'required|min:3|max:50',
            'tanggal_ttd'           => 'required|date',
            'tanggal_selesai'       => 'nullable|date',
            'status'                => 'nullable|boolean',
            'file'              => 'required|mimes:pdf',
        ]);

        $konten->instansi = $validateData['instansi'];
        $konten->pj = $validateData['pj'];
        $konten->tanggal_ttd = $validateData['tanggal_ttd'];
        $konten->tanggal_selesai = $validateData['tanggal_selesai'];
        $konten->status = $request->has(['status']);
        if($request->hasFile('file')){
            $validateData = $request->validate([
                'file' => 'required|mimes:pdf'
            ]);
        $file=$validateData['file'];
        $ext=$file->getClientOriginalExtension();
        $filename=time().'.'.$ext;
        $file->move(public_path().'/download', $filename);
        $data = $filename;
        $konten->file=$data;
        }

        $konten->save();

        return redirect()->route('kontens.showadmin',['konten'=>$konten->id])
            ->with('pesan', "Update data {$request->nama} berhasil");
    }

    public function destroy(konten $konten){
        $konten->delete();
        return redirect()->route('kontens.showadmin')
            ->with('pesan',"Hapus data $konten->nama berhasil");
    }

    public function download($filename){
        return response()->download(public_path('/download'.$filename));
    }
}
