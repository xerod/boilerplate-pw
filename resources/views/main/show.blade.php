<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>..:: RAI 2017 - Penerapan CRUD pada Laravel 5.5 ::..</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/main">Sofa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tampilan Detail Sofa</li>
        </ol>
    </nav>
    <div class="container">
        <h2>Detail Sofa:</h2><br />
        @if ($errors->any())
            <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <a>{{ $error }}</a> @endforeach
            </div><br />
        @endif
        <div class="card" style="width: 35rem;">
            <div class="card-body">
                <h5 class="card-title">{{$sofa->merksofa}}</h5>
                <h6 class="card-subtitle mb-5 {{ $sofa->tersedia == '1' ? 'text-success' : 'text-danger'  }}">{{ $sofa->tersedia == '1' ? 'Tersedia' : 'Tidak Tersedia'  }}</h6>
                <p class="card-text text-muted mb-1">Harga: Rp. {{ number_format($sofa->hargasofa,2,",",".") }}</p>
                <p class="card-text text-muted mb-4">Berat: {{$sofa->berat}}gr</p>
                <a href="{{ action('SofaController@edit', $sofa->id)}}" class="btn btn-warning mr-2">Edit</a>
                <small class="card-link text-muted">{{$sofa->created_at->diffForHumans()}}</small>
            </div>
        </div>
    </div>
</body>
<footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</footer>

</html>