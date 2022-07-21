@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Nilai </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">nis</label>
                            <input type="number" name="nis" value="{{ $nilai->nis }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Kode Mata Pelajaran</label>
                            <textarea type="number"name="kode_mata_pelajaran" class="form-control" readonly>{{ $nilai->kode_mata_pelajaran }}
                            </textarea>

                        </div>
                         <div class="mb-3">
                            <label for="">Nilai</label>
                            <textarea type="number"name="nilai" class="form-control" readonly>{{ $nilai->nilai }}
                            </textarea>

                        </div>
                         <div class="mb-3">
                            <label for="">Grade</label>
                            <textarea type="text"name="indeks_nilai" class="form-control" readonly>{{ $nilai->indeks_nilai }}
                            </textarea>

                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('nilai.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection