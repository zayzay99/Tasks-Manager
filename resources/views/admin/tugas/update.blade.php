@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header bg-warning">
            <a href="{{ route('tugas') }}" class="btn btn-sm btn-success">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('tugasUpdate',$tugas->id) }}" method="POST">
                @csrf

                
                    <div class="row mb-2">
                        <div class="col-xl-12 ">
                            <label class="form-label">
                                <span class="text-danger">*</span>
                                Nama :
                            </label>
                            <input type="text" value="{{$tugas->user->nama}}" class="form-control" disabled>
                        </div>
                    </div>

                <div class="row mb-2">


                    <div class="col-xl-12 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Tugas :
                        </label>
                            <textarea name="tugas"   rows="5" class="form-control">{{$tugas->tugas}}</textarea>
                            @error('tugas')
                            <small class="text-danger">
                                {{ $message}}
                            </small>
                            @enderror
                    </div> 
                    <div class="col-xl-6 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Tanggal Mulai :
                        </label>
                            <input type="date" name="tanggal_mulai" class="form-control" value="{{$tugas->tanggal_mulai}}">
                            @error('tanggal_selesai')
                            <small class="text-danger">
                                {{ $message}}
                            </small>
                            @enderror
                    </div> 
                    <div class="col-xl-6 mb-1">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Tanggal Selesai :
                        </label>
                            <input type="date" name="tanggal_selesai" class="form-control" value="{{$tugas->tanggal_selesai}}">
                            @error('tanggal_selesai')
                            <small class="text-danger">
                                {{ $message}}
                            </small>
                            @enderror
                    </div> 
                   
                </div>

            

    

                <div>
                    <button type="submit" class="btn btn-sm btn-warning ">
                        <i class="fa fa-edit mr-2"></i>
                        Update
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection



