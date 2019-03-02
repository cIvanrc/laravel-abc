<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title></title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  Litasdo de productos
                  <a class="btn btn-success btn-sm float-right" href=" {{ route('products.create') }}">Nuevo producto</a>
               </div>
               <div class="card-body">
                  @if(session('info'))
                     <div class="alert alert-success">
                        {{ session('info') }}
                     </div>
                  @endif
                  <table class="table table-hover table-sm">
                     <thead>
                        <th>Descripcion</th>
                        <th>Precio</th>
                     </thead>
                     <tbody>
                        @foreach($products as $product)
                        <tr>
                           <tr>
                              <td> {{$product['description']}}</td>
                              <td>  {{$product['price']}} </td>
                           </tr>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
