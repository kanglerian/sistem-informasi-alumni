<!-- Header -->
<section class="header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-xl-7">
                <h2 class="header-title"><strong>{{$data['judul-page']}}</strong></h2>
                <form action="{{route('search-mhs')}}" method="GET">
                    @csrf
                    <div class="input-group search-bar">
                        <input type="text" class="form-control search-input" name="search" placeholder="{{$data['judul-page']}}..">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-search" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Header -->