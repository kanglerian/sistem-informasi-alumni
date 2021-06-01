@extends('layouts.default')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Alumni</h1>
            
            <a href="{{ route('students.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-user-plus text-white-50"></i> Tambah mahasiswa</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-8 my-2 my-md-0 mw-100 navbar-search" action="{{route('find-mhs')}}" method="GET">
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
                <div class="table-responsive-lg">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Tahun lulus</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            @forelse ($items as $item)
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td>
                                        <a href="#modalAlumni" data-remote="{{ route('students.show', $item->id) }}" data-toggle="modal" data-target="#modalAlumni" data-title="{{$item->full_name}}">{{ $item->full_name }}</a>
                                    </td>
                                    <td>{{$item->major}}</td>
                                    <td>{{ $item->year_sign + 2 }}</td>
                                    <td><span class="badge badge-success">{{ $item->status }}</span></td>
                                    <td>
                                        <a href="{{route('students.edit',$item->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('students.destroy', $item->id) }}" method="POST" style="display: inline">
                                            @csrf
                                            @method('delete')
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Data tidak ditemukan</td>
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