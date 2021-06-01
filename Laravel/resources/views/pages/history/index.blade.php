@extends('layouts.default')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Riwayat Alumni Bekerja</h1>
            <a href="{{ route('history.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-user-plus text-white-50"></i> Tambah alumni tes kerja</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-8 my-2 my-md-0 mw-100 navbar-search" action="{{route('find-hr')}}" method="GET">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Cari mahasiswa/i..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Perusahaan</th>
                                <th>Posisi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @forelse ($items as $item)
                                <tr>
                                    <td><?= $i++;?></td>
                                    <td>{{ $item->date}}</td>
                                    <td>
                                        <a href="#modalAlumni" data-toggle="modal" data-remote="{{ route('students.show', $item->students->id) }}" data-target="#modalAlumni">{{ $item->students->full_name}}</a>
                                    </td>
                                    <td>
                                        <a href="#modalPerusahaan" data-toggle="modal" data-remote="{{ route('company.show', $item->company->id) }}" data-target="#modalPerusahaan">{{ $item->company->company_name}}</a>
                                    </td>
                                    <td>{{ $item->position}}</td>
                                    <td>
                                        @if ($item->status == 'Diterima')
                                            <a tabindex="0" class="badge badge-success" role="button" data-toggle="popover" data-trigger="focus" title="Keterangan" data-content="{{ $item->information }}">
                                        @elseif ($item->status == 'Gagal')
                                            <a tabindex="0" class="badge badge-danger" role="button" data-toggle="popover" data-trigger="focus" title="Keterangan" data-content="{{ $item->information }}">
                                        @elseif ($item->status == 'Pending')
                                            <a tabindex="0" class="badge badge-warning" role="button" data-toggle="popover" data-trigger="focus" title="Keterangan" data-content="{{ $item->information }}">
                                        @else
                                            <a tabindex="0" class="badge badge-info" role="button" data-toggle="popover" data-trigger="focus" title="Keterangan" data-content="{{ $item->information }}">
                                        @endif
                                            {{ $item->status}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('history.edit',$item->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('history.destroy',$item->id) }}" method="POST" style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data tidak ditemukan</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('after-script')
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>
<script>
    $('.popover-dismiss').popover({
        trigger: 'focus'
    })
</script>
@endpush