@extends('layouts.data')

@section('content')
    
<!-- Content -->
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            @forelse ($items as $item)
                <div class="col-xl-3 col-9">
                    <div class="content-card">
                        <div class="content-photo pt-3" style="background-image: url('storage/{{$item->logo}}');background-size:cover;">
                        </div>
                        
                        <div class="content-desc text-center">
                            <h5 class="content-name">{{$item->company_name}}</h5>
                            <p class="content-school">{{$item->field}}</p>
                            <hr>
                            <a href="{{route('perusahaan.show',$item->id)}}" class="btn btn-profile">lihat perusahaan</a>
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