@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Nilai</div>

                <div class="card-body">
                    <form action="{{ route('simpan.nilai')}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <div class="col">   
                                <div class="form-group">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                          <option value="" disabled selected>--Pilih User--</option>
                                          @foreach($mahasiswa as $mhs)
                                                <option value="{{ $mhs->id }}">{{ $mhs->user->name }}</option>
                                           @endforeach
                                      </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Nama Mata Kuliah</label>
                                    <select name="makul_id" id="makul_id" class="form-control">
                                          <option value="" disabled selected>--Pilih Matakuliah--</option>
                                          @foreach($makul as $mk)
                                                <option value="{{ $mk->id }}">{{ $mk->nama_makul }}</option>
                                           @endforeach
                                      </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Masukkan Nilai" maxlenght="8">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ Route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
