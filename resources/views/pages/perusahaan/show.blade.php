@extends('layouts.data')

@section('content')
    <section class="content-company">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <div class="company-card mb-4">
                        <div class="text-center">
                            <img src="/storage/{{ $company->logo }}" loading="lazy" class="img-fluid">
                        </div>
                        <div class="name-company-card">
                            <h5 class="company-name">{{ $company->company_name }}</h5>
                            <h6 class="company-field">{{ $company->field }}</h6>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <a href="mailto:{{ $company->email }}"
                                        class="btn btn-light btn-profile-media btn-sm mb-2"><i class="far fa-envelope"></i>
                                        email</a>
                                </div>
                            </div>
                        </div>
                        <div class="biodata-card">
                            <h6 class="company-headline"><b>Detail Perusahaan</b></h6>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="company-title">Skala</p>
                                </div>
                                <div class="col-7">
                                    <p class="company-content">{{ $company->scale }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="company-title">Jumlah alumni</p>
                                </div>
                                <div class="col-7">
                                    <p class="company-content">{{ $count }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="company-title">Alamat</p>
                                </div>
                                <div class="col-7">
                                    <p class="company-content">{{ $company->address }}</p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="text-center">
                                    <p class="biodata-status">{{ $company->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="profile-history-card">
                        <h5 class="mb-4 text-center">History Alumni Bekerja </h5>
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Nama Alumni</th>
                                        <th scope="col">Posisi</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @forelse ($items as $item)
                                        <tr>
                                            <th scope="row"><?php echo $i++; ?></th>
                                            <td>{{ $item->date }}</td>
                                            <td>
                                                <a href="{{ route('mahasiswa.show', $item->students_id) }}">
                                                    {{ $item->students->full_name }}
                                                </a>
                                            </td>
                                            <td>{{ $item->position }}</td>
                                            <td>

                                                @if ($item->status == 'Diterima')
                                                    <a href="#" title="Detail" data-container="body" data-toggle="popover"
                                                        data-placement="left" data-content="{{ $item->information }}">
                                                        <span class="badge badge-success">
                                                        @elseif ($item->status == 'Pending')
                                                            <a href="#" title="Detail" data-container="body"
                                                                data-toggle="popover" data-placement="left"
                                                                data-content="{{ $item->information }}">
                                                                <span class="badge badge-warning">
                                                                @elseif ($item->status == 'Gagal')
                                                                    <a href="#" title="Detail" data-container="body"
                                                                        data-toggle="popover" data-placement="left"
                                                                        data-content="{{ $item->information }}">
                                                                        <span class="badge badge-danger">
                                                                        @else
                                                                            <a href="#" title="Detail" data-container="body"
                                                                                data-toggle="popover" data-placement="left"
                                                                                data-content="{{ $item->information }}">
                                                                                <span class="badge badge-info">
                                                @endif
                                                {{ $item->status }}</span></a>

                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
