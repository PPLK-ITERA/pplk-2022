@extends('layouts.admin.app')

@section('title', 'Detail UKM')

@section('content')

<!--Detail UKM/Komunitas-->
<div class="col-lg-12 col-lg-12 form-wrapper" id="detail-ukm">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Detail UKM/Komunitas</h4>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('adminUkm.show',$ukm->id) }}" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $ukm->id }}" name="id">
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Lengkap</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Pembina" name="namaLengkap" id="namalengkap" value="{{ $ukm->namaLengkap }}" disabled>
          </div>
        </div>   
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Nama Singkat</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Pembina" name="namaSingkat" id="namasingkat" value="{{ $ukm->namaSingkat }}"disabled>
          </div>
        </div>
        <div class=" mb-3 row" >
          <label class=" col-sm-3 col-form-label" >Visi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Pembina" name="visi" id="visi" value="{{ $ukm->visi }}"disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Misi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Pembina" name="misi" id="misi" misivalue="{{ $ukm->namaSingkat }}" disabled>
          </div>
        </div>    
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Pembina</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Pembina" name="pembina" id="namapembina" value="{{ $ukm->pembiina }}" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Ketua Umum</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Ketua Umum" name="ketuaUmum" id="ketuaumum" value="{{ $ukm->ketuaUmum }}" disabled>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dies Natalis</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Dies Natalis" name="tahunBerdiri" id="diesnatalis" value="{{ $ukm->tahunBerdiri }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Logo</label>
          <div class="col-sm-9">
            <input type="text" accept="image/*" class="form-control" name="logo" id="logo" value="{{ $ukm->logo }}">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Filosofi Logo</label>
          <div class="col-sm-9">
            <textarea class="form-control custom-txt-area" placeholder="Filosofi Logo" name="filosofiLogo" id="filosofiLogo" value="{{ $ukm->filosofiLogo }}" >{{ $ukm->filosofiLogo }}</textarea>
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">QR-Code</label>
          <div class="col-sm-9 ">
            <input type="text" class="form-control" placeholder="Input https://linktr.ee" name="qrCode" id="qrcode" value="{{ $ukm->qrCode }}" >
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Deskripsi</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Nama Pembina" name="deskripsi" id="deskripsi" value="{{ $ukm->deskripsi }}"disabled>
          </div>
        </div> 
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dokumentasi 1</label>
          <div class="col-sm-9">
            <input type="file" accept="image/*" class="form-control" name="dokumentasi1" id="dokumentasi1" >
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dokumentasi 2</label>
          <div class="col-sm-9">
            <input type="file" accept="image/*" class="form-control" name="dokumentasi2" id="dokumentasi2">
          </div>
        </div>
        <div class="mb-3 row">
          <label class="col-sm-3 col-form-label">Dokumentasi 3</label>
          <div class="col-sm-9">
            <input type="file" accept="image/*" class="form-control" name="dokumentasi3" id="dokumentasi3">
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--./Detail UKM/Komunitas-->

  @endsection