@extends('layouts.default')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Perusahaan Relasi</h1>
            <a href="{{ route('company.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-user-plus text-white-50"></i> Tambah perusahaan</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-8 my-2 my-md-0 mw-100 navbar-search" action="{{route('find-pr')}}" method="GET">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" name="search" placeholder="Cari perusahaan..."
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
                                <th>Nama Perusahaan</th>
                                <th>Bidang</th>
                                <th>Skala</th>
                                <th>Status Kerjasama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @forelse ($items as $item)
                                <tr>
                                    <td><?= $i++;?></td>
                                    <td>
                                        <a href="#modalPerusahaan" data-remote="{{ route('company.show', $item->id) }} " data-toggle="modal" data-target="#modalPerusahaan" data-title="{{$item->company_name}}">{{ $item->company_name }}</a>
                                    </td>
                                    <td>{{ $item->field }}</td>
                                    <td>{{ $item->scale }}</td>
                                    <td>
                                        @if ($item->status == 'Sudah MoU')
                                            <span class="badge badge-success">
                                        @elseif ($item->status == 'Pending')
                                            <span class="badge badge-warning">
                                        @elseif ($item->status == 'Belum MoU')
                                            <span class="badge badge-danger">
                                        @endif
                                            {{ $item->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{route('company.edit',$item->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('company.destroy',$item->id ) }}" method="POST" style="display: inline">
                                            @csrf
                                            @method('delete')
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data tidak ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


    
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