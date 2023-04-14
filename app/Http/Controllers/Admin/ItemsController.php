<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Statiun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemsController extends Controller
{

    public function index()
    {
        //
        $collection = Barang::all();
        return view('admin.items', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        $stasiuns = Statiun::all();
        $areas = Area::all();
        return view('admin.tambah-items', compact('kategoris', 'stasiuns', 'areas'));
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

        //upload image
        $image = $request->file('foto');
        $image->storeAs('public/assets/img/items', $image->hashName());

        $aduan = Barang::create([
            'id' => rand(0, 999999),
            'namabarang' => $request->namabarang,
            'kategori_id' => $request->kategori_id,
            'deskripsi' => $request->deskripsi,
            'tglditemukan' => $request->tglditemukan,
            'stasiun_id' => $request->stasiun_id,
            'area_id' => $request->area_id,
            'foto' => $image->hashName(),
        ]);


        if ($aduan) {
            //redirect dengan pesan sukses
            return redirect()->route('items');
        } else {
            //redirect dengan pesan error
            return redirect()->route('tambahitems');
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
    public function edit(Request $request)
    {
        //
        $collection = Barang::find($request->id);
        $kategoris = Kategori::all();
        $stasiuns = Statiun::all();
        $areas = Area::all();
        return view('admin.edit-items', compact('collection', 'stasiuns', 'kategoris', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {




        $barang = Barang::findOrFail($request->id);

        if ($request->file('foto') == "") {

            $barang = Barang::findOrFail($barang->id);

            $barang->update([
                'namabarang' => $request->namabarang,
                'kategori_id' => $request->kategori_id,
                'deskripsi' => $request->deskripsi,
                'tglditemukan' => $request->tglditemukan,
                'stasiun_id' => $request->stasiun_id,
                'area_id' => $request->area_id,
            ]);
        } else {



            $image = $request->file('foto');
            $image->storeAs('public/assets/img/items', $image->hashName());

            //hapus old image
            Storage::disk('local')->delete('public/assets/img/items/' . $barang->foto);


            $barang->update([
                'namabarang' => $request->namabarang,
                'kategori_id' => $request->kategori_id,
                'deskripsi' => $request->deskripsi,
                'tglditemukan' => $request->tglditemukan,
                'stasiun_id' => $request->stasiun_id,
                'area_id' => $request->area_id,
                'foto'     => $image->hashName(),
            ]);
        }

        if ($barang) {
            //redirect dengan pesan sukses
            return redirect()->route('items');
        } else {
            //redirect dengan pesan error
            return redirect()->route('items');
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
        //
    }
}
