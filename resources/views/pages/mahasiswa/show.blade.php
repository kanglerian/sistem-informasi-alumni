@extends('layouts.data')

@section('content')

    <!-- Content -->
    <section class="content-alumni">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <div class="profile-card mb-4">
                        <div class="name-card">
                            <div class="photo-card" loading="lazy"
                                style="background-image: url('{{ $student->photo }}');background-size: cover;background-position: center;">
                            </div>
                            <h5 class="profile-name">{{ $student->full_name }}</h5>
                            <h6 class="profile-major">D3 {{ $student->major }}</h6>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <a href="https://wa.me/{{ $student->telp }}}"
                                        class="btn btn-light btn-profile-media btn-sm mb-2"><i class="fab fa-whatsapp"></i>
                                        pesan</a>
                                </div>
                                <div class="col-auto">
                                    <a href="mailto:{{ $student->email }}"
                                        class="btn btn-light btn-profile-media btn-sm mb-2"><i class="far fa-envelope"></i>
                                        email</a>
                                </div>
                            </div>
                        </div>
                        <div class="biodata-card">
                            <h6 class="biodata-headline"><b>Biodata</b></h6>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="biodata-title">Tanggal lahir</p>
                                </div>
                                <div class="col-7">
                                    <p class="biodata-content">{{ $student->birthday }}</p>
                                </div>
                            </div>
                            <hr class="divider">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="biodata-title">Alumni</p>
                                </div>
                                <div class="col-7">
                                    <p class="biodata-content">{{ $student->alumni }}</p>
                                </div>
                            </div>
                            <hr class="divider">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="biodata-title">Alamat</p>
                                </div>
                                <div class="col-7">
                                    <p class="biodata-content">{{ $student->address }}</p>
                                </div>
                            </div>
                            <hr class="divider">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <p class="biodata-title">Tahun lulus</p>
                                </div>
                                <div class="col-7">
                                    <p class="biodata-content">{{ $student->year_sign + 3 }}</p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <a href="http://facebook.com/{{ $student->facebook }}" target="_blank"
                                        class="btn btn-light mr-1"><i class="fab fa-facebook-f"></i></a>
                                    <a href="http://instagram.com/{{ $student->instagram }}" target="_blank"
                                        class="btn btn-light mr-1"><i class="fab fa-instagram"></i></a>
                                    <a href="http://youtube.com/c/{{ $student->youtube }}" target="_blank"
                                        class="btn btn-light mr-1"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.tiktok.com/{{ $student->tiktok }}" target="_blank"
                                        class="btn btn-light mr-1"><i class="fab fa-tiktok"></i></a>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="biodata-status">{{ $student->status }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="profile-history-card">
                        <h5 class="mb-4 text-center">History Penempatan Kerja </h5>
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Nama Perusahaan</th>
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
                                                <a href="{{ route('perusahaan.show', $item->company_id) }}">
                                                    {{ $item->company->company_name }}
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
    <!-- End Content -->

@endsection
