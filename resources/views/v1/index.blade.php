<!-- create.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>..:: RAI 2017 - Penerapan CRUD pada Laravel 5.5 ::..</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
              <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td><a href="{{action('ProductController@edit', $product['id'])}}">edit</a></td>
                <td>
                    <form action="{{action('ProductController@destroy', $product['id'])}}" method="POST">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE"> 
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </td>
              </tr>
            @endforeach  
            </tbody>
          </table>
    </div>
</body>
<footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</footer>
</html>