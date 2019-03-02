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
                  Crear producto
               </div>
               <div class="card-body">
                 <form action="{{ route('products.store') }}" method='POST'>
                     @csrf
                    <div class="form-group">
                       <label for="">Descripcion</label>
                       <input class="form-control" type="text" name='description'>
                    </div>
                    <div class="form-group">
                       <label for="">Precio</label>
                       <input class="form-control" type="number" name="price">
                    </div>
                     <button class="btn btn-primary" type="submit">Guardar</button>
                     <a class="btn btn-danger" href="{{ route('products.index') }}">Cancelar</a>
                 </form> 
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
