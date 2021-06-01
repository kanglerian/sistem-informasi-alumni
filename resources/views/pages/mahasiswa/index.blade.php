@extends('layouts.data')

@section('content')
    
<!-- Content -->
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            @forelse ($items as $item)
            <div class="col-xl-3 col-9">
                <div class="content-card">
                    <div class="content-photo" loading="lazy"
                    style="background-image: url('{{$item->photo}}');background-size: cover;"></div>
                    <div class="content-desc text-center">
                        <p class="content-major"><span class="badge badge-major">D3 {{$item->major}}</span></p>
                        <h5 class="content-name">{{$item->full_name}}</h5>
                        <p class="content-school">{{$item->alumni}}</p>
                        <p class="content-status"><span class="badge badge-warning">{{$item->status}}</span></p>
                        <hr>
                        <a href="{{route('mahasiswa.show',$item->id)}}" class="btn btn-profile">lihat profile</a>
                    </div>
                </div>
            </div>
            @empty
            <p>Data tidak ada</p>
            @endforelse
        </div>
    </div>
</section>
<!-- End Content -->

@endsection