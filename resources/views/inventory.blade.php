<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inventory.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Inventory-SCMS</title>
</head>
<body>
    
    <header>
        @include('layouts/sidebar')
    </header>
    <main>

        @include('layouts/navbar')

        <div class="addPrductDiv"><button onclick="productFormPopup(true)">Add Product</button></div>
        <div class="productFormOuter">
          <form action="/addinventory" method="POST">
            @csrf
            <button type="button" onclick="productFormPopup(false)" class="btn-close" aria-label="Close"></button>
            <h3>Add Product</h3>

            <label for="product_code">Product Code</label>
            <input type="number" class="form-control" name="product_code">
            <br>
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" name="product_name">
            <br>
            <label for="product_model">Model</label>
            <input type="text" class="form-control" name="product_model">
            <br>
            <label for="product_selling_price">Product Selling Price</label>
            <input type="number" class="form-control" name="product_selling_price">
            <br>
            <label for="product_description">Product description</label>
            <textarea type="text" rows="4" cols="50" class="form-control" name="product_description"></textarea>
            <br>
              <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
        <table class="productsTable" style=" width: 97%">
            
            <thead>
              <tr>
                <th>Product Code</th>
                <th>Name</th>
                <th>Model</th>
                <th>selling price</th>
                <th>Description</th>             
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($fetchedData as $data)
              <tr>
              <td>{{$data->product_code}}</td>
                <td>{{$data->product_name}}</td>
                <td>{{$data->product_model}}</td>
                <td>{{$data->product_selling_price}}</td>
                <td>{{$data->product_description}}</td> 
                <td>  
                     <a href="/updateinventory/{{$data->id}}"><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                     <a href="/deleteinventory/{{$data->id}}"> <button class="btn deleteBtn"><i class="fa fa-trash"></i></button></a>
                </td>
              </tr>
              @endforeach
            
            </tbody>
            </table>

    </main>

    <script src="js/inventory.js"></script>
</body>
</html>