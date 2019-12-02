<!-- create.blade.php -->
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
                <li class="breadcrumb-item active" aria-current="page">Tambah Produk Sofa</li>
            </ol>
        </nav>
              

    <div class="container ">
        <h2>Penambahan Produk Sofa</h2><br />
        <form method="post" action="{{ route('main.store') }}">
            @method('post')
            @csrf
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="name">Merk:</label>
                    <input type="text" class="form-control" name="merksofa"> 
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="price">Harga:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                        </div>
                        <input type="number" name="hargasofa" class="form-control" placeholder="0" aria-label="hargasofa">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                    <label for="price">Berat:</label>
                    <div class="input-group">
                        <input type="number" name="berat" class="form-control" placeholder="0" aria-label="berat">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon1">gr</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    <div class="form-check">
                        <input class="form-check-input position-static" name="tersedia" type="checkbox" id="blankCheckbox" value="true" aria-label="...">
                        <a class="ml-2 text-secondary">tandai sebagai tidak tersedia</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-8">
                    <button type="submit" class="btn btn-success" style="margin- left:38px">Tambahkan Produk
                        Sofa</button>
                </div>
            </div>
        </form>
    </div>
</body>
<footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
</footer>

</html>