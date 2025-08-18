@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-tasks mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center justify-content-xl-between ">
            <div class="mb-1 mr-2">
                <a href="{{ route('tugasCreate') }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Data
                </a>
            </div>

            <div>
                {{-- <a href="#" class="btn btn-sm btn-success">
                    <i class="fas fa-file-excel mr-2"></i>
                    Excel
                </a> --}}
                <a href="{{ route('tugasPdf') }}" class="btn btn-sm btn-danger" target="__blank">
                    <i class="fas fa-file-pdf mr-2"></i>
                    Pdf
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr class="text-center">
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Tugas</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>
                                <i class="fas fa-cog"></i>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tugas as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    {{ $item->user->nama }}
                                </td>
                                <td>
                                    {{ $item->tugas }}
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-info">

                                        {{ $item->tanggal_mulai }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-info">
                                        {{ $item->tanggal_selesai }}

                                    </span>
                                </td>


                                <td class="text-center">
                                    <button class="btn btn-sm btn-info" data-toggle="modal"
                                        data-target="#modalTugasShow{{ $item->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <a href="{{ route('tugasEdit', $item->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit "></i>
                                    </a>

                                    <button class="btn btn-sm btn-danger" data-toggle="modal"
                                        data-target="#modalTugasDestroy{{ $item->id }}">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    @include('admin.tugas.modal', [
                                        'item' => $item,
                                        'modalId' => 'modalDelete' . $item->id,
                                    ])
                                    @include('admin.tugas.modal')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
