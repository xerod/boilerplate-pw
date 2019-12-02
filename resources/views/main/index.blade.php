<!-- create.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>..:: RAI 2017 - Penerapan CRUD pada Laravel 5.5 ::..</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sofa</li>
        </ol>
    </nav>
    <div class="container my-4">
    @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
    @endif
    <form method="GET" action="{{ url('main') }}">
        <div class="row">
            <div class="col-md-6">
              <input type="text" name="search" class="form-control" placeholder="Search" value="{{$query}}">
            </div>
            <div class="col-md-6 p-0">
                <button class="btn btn-info px-4">Search</button>
            </div>
        </div>
    </form><br>
        {{ $sofas->links() }}
        @if(count($sofas) > 0 && $query != '')
        <label class="text-secondary mb-4">{{count($sofas)}} results for <a class="font-italic font-weight-bold">{{ $query }}</a></label>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Merk Sofa</th>
                <th scope="col">Harga Sofa</th>
                <th scope="col">Berat</th>
                <th scope="col">Ketersediaan</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            @if(count($sofas) > 0)
            @foreach ($sofas as $sofa)
              <tr>
                <th scope="row">{{$sofa->id}}</th>
                <td>{{$sofa->merksofa}}</td>
                <td>Rp. {{ number_format($sofa->hargasofa,2,",",".") }}</td>
                <td>{{$sofa->berat}}gr</td>
                <td>
                  <small class="fas fa-circle {{ $sofa->tersedia == '1' ? 'text-success' : 'text-danger'}} mr-2"></small>{{ $sofa->tersedia == '1' ? 'Tersedia' : 'Tidak Tersedia'  }}
                </td>
                <td class="row">
                  <a class="btn btn-warning btn-sm mx-1" href="{{action('SofaController@edit', $sofa->id)}}">Edit</a>
                  <form class="mx-1" action="{{action('SofaController@destroy', $sofa->id)}}" method="POST">
                      {{ csrf_field() }}
                      <input name="_method" type="hidden" value="DELETE"> 
                      <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
            @else
            <tr>
              <td colspan="3" class="text-danger">Result for <a class="font-italic font-weight-bold">{{ $query }}</a> not found.</td>
            </tr>
            @endif
            </tbody>
          </table>
          {{ $sofas->links() }}
    </div>
</body>
<footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a043900e59.js" crossorigin="anonymous"></script>
</footer>
</html>