<div class="container-fluid">
    <div class="row">
        <div class="col-xl-5">
            <div class="photo-profile text-center mb-4">
                <img src="storage/{{$company->logo}}" height="180px" class="rounded" loading="lazy">
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status :</label>
                <div class="col-sm-9">
                  <input type="text" readonly class="form-control" value="{{$company->status}}">
                </div>
            </div>
            <div class="form-group">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <a href="{{route('company.edit',$company->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('company.destroy', $company->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7">
            <form>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama perusahaan :</label>
                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control" value="{{$company->company_name}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Bidang usaha :</label>
                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control" value="{{$company->field}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Skala :</label>
                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control" value="{{$company->scale}}">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Kontak :</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control" value="{{$company->contact}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Email :</label>
                    <div class="col-sm-8">
                      <input type="text" readonly class="form-control" value="{{$company->email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Alamat :</label>
                    <div class="col-sm-8">
                      <textarea type="text" readonly class="form-control" value="{{$company->address}}">{{$company->address}}</textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xl-12">
            <div class="card-header my-3">
                <h6 class="m-0 font-weight-bold text-secondary">Data Penempatan Kerja</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Alumni</th>
                            <th>Posisi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{$item->date}}</td>
                            <td>{{$item->students->full_name}}</td>
                            <td>{{$item->position}}</td>
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
                                <a href="{{ route('history.edit',$item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('history.destroy',$item->id) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada alumni yang bekerja</td>
                                </tr>
                            @endforelse                          
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
    </div>
</div>