<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ukm;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AdminUkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukms = Ukm::all();
        return view('admin.Ukm.index', compact('ukms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Ukm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUkmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ukm::create([
            'namaLengkap' => $request->namaLengkap,
            'namaSingkat' => $request->namaSingkat,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'pembina' => $request->pembina,
            'ketuaUmum' => $request->ketuaUmum,
            'tahunBerdiri' => $request->tahunBerdiri,
            'logo'  => url($request->file('logo')->move('assets/ukm/logo', $request->namaSingkat . '.' . $request->file('logo')->extension())),
            'filosofiLogo' => $request->filosofiLogo,
            'qrCode' => $request->qrCode,
            'deskripsi' => $request->deskripsi,
            'dokumentasi1'  => url($request->file('dokumentasi1')->move('assets/ukm/dokumentasi1', $request->namaSingkat .'d1'.'.' . $request->file('dokumentasi1')->extension())),
            'dokumentasi2'  => url($request->file('dokumentasi2')->move('assets/ukm/dokumentasi2', $request->namaSingkat .'d2'. '.' . $request->file('dokumentasi2')->extension())),
            'dokumentasi3'  => url($request->file('dokumentasi3')->move('assets/ukm/dokumentasi3', $request->namaSingkat .'d3'. '.' . $request->file('dokumentasi3')->extension()))
        ]);

        return redirect('/adminUkm')->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ukm  $Ukm
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $ukm=Ukm::where('id',$id)->first();
        return view('admin.Ukm.read', compact('ukm'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ukm  $Ukm
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $ukm=Ukm::where('id',$id)->first();
        return view('admin.Ukm.update', compact('ukm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUkmRequest  $request
     * @param  \App\Models\Ukm  $Ukm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $ukm=Ukm::where('id',$id)->first();
        $ukm->update(
            [
                'namaLengkap' => $request->namaLengkap,
                'namaSingkat' => $request->namaSingkat,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'pembina' => $request->pembina,
                'ketuaUmum' => $request->ketuaUmum,
                'tahunBerdiri' => $request->tahunBerdiri,
                'filosofiLogo' => $request->filosofiLogo,
                'qrCode' => $request->qrCode,
                'deskripsi' => $request->deskripsi,
            ]
        );
        if ($request->hasFile('logo'))
        {
         $ukm->update([
             'logo' => url($request->file('logo')->move('assets/himpunan', $ukm->namaSingkat . '.' . $request->file('logo')->extension())),
         ]);
     }

        if ($request->hasFile('dokumentasi1'))
        {
         $ukm->update([
             'dokumentasi1' => url($request->file('dokumentasi1')->move('assets/ukm/dokumentasi', $ukm->namaSingkat .'d1'. '.' . $request->file('dokumentas1')->extension())),
         ]);
        }

        if ($request->hasFile('dokumentasi2'))
        {
         $ukm->update([
             'dokumentasi2' => url($request->file('dokumentasi2')->move('assets/ukm/dokumentasi', $ukm->namaSingkat .'d2'. '.' . $request->file('dokumentasi2')->extension())),
         ]);
        }

        if ($request->hasFile('dokumentasi3'))
        {
         $ukm->update([
             'dokumentasi3' => url($request->file('dokumentasi3')->move('assets/ukm/dokumentasi', $ukm->namaSingkat .'d3'. '.' . $request->file('dokumentasi3')->extension())),
         ]);
        }
        return redirect('/adminUkm')->with('sukses', 'Berhasil Edit Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ukm  $begalin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ukm::where('id', $id)->first();
        $data->delete();

        return redirect('/adminUkm')->with('sukses', 'Berhasil Hapus Data!');
    }
}
