<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/updateInventory.css">
</head>
<body>
    
<div class="inventoryFormOuter">
@foreach($fetchedDatas as $data)
          <form class="updateform" action="/updateinventory/{{$data->id}}" method="POST">
            @csrf
            <a href="\mainInventory"class="closeupdateform">X</a>
            <h3>Update Inventory</h3>
       
            <label for="product_code">Inventory Code</label>
            <input type="text" class="form-control" name="product_code" value={{$data->product_code}}>
            <br>
            <label for="product_name">Name</label>
            <input type="text" class="form-control" name="product_name" value={{$data->product_name}}>
            <br>
            <label for="product_model">Model</label>
            <input type="text" class="form-control" name="product_model" value={{$data->product_model}}>
            <br>
            <label for="product_selling_price">Selling Price</label>
            <textarea type="text" rows="4" cols="50" class="form-control" name="product_selling_price">{{$data->product_selling_price}}</textarea>
            <br>
            <label for="product_description">Product Description</label>
            <textarea type="text" rows="4" cols="50" class="form-control" name="product_description">{{$data->product_description}}</textarea>
         
            <br>
              <button type="submit" class="btn btn-success">Update</button>
          </form>
          @endforeach
        </div>
</body>
</html>