@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Jurusan </div>

                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="">Kode Mata Pelajaran</label>
                                <input type="text" name="kode_mata_pelajaran" value="{{ $jurusan->kode_mata_pelajaran }}"
                                    class="form-control @error('kode_mata_pelajaran') is-invalid @enderror">
                                @error('kode_mata_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Mata Pelajaran</label>
                                <textarea type="text"name="nama_mata_pelajaran" class="form-control @error('nama_mata_pelajaran') is-invalid @enderror">{{ $jurusan->nama_mata_pelajaran }}
                                </textarea>
                                @error('nama_mata_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="mb-3">
                                <label for="">Semester</label>
                                <textarea type="text"name="semester" class="form-control @error('semester') is-invalid @enderror">{{ $jurusan->semester }}
                                </textarea>
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="mb-3">
                                <label for="">Jurusan</label>
                                <textarea type="text"name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">{{ $jurusan->jurusan }}
                                </textarea>
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection