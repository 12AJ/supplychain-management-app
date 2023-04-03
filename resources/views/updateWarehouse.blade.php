<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/updateWarehouse.css">
</head>
<body>
    
<div class="warehouseFormOuter">
@foreach($fetchedDatas as $data)
          <form class="updateform" action="/updatewarehouse/{{$data->id}}" method="POST">
            @csrf
            <a href="\warehouse"class="closeupdateform">X</a>
            <h3>Update Retailer</h3>
       
            <label for="warehouse_name">Name</label>
            <input type="text" class="form-control" name="warehouse_name" value={{$data->warehouse_name}}>
            <br>
            <label for="warehouse_phone">Phone number</label>
            <input type="text" class="form-control" name="warehouse_phone" value={{$data->warehouse_phone}}>
            <br>
            <label for="warehouse_email">Email</label>
            <input type="text" class="form-control" name="warehouse_email" value={{$data->warehouse_email}}>
            <br>
            <label for="warehouse_address">Address</label>
            <textarea type="text" rows="4" cols="50" class="form-control" name="warehouse_address">{{$data->warehouse_address}}</textarea>
         
            <br>
              <button type="submit" class="btn btn-success">Update</button>
          </form>
          @endforeach
        </div>
</body>
</html>