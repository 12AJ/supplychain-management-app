<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/updateretailers.css">
</head>
<body>
    
<div class="retailerFormOuter">
@foreach($fetchedDatas as $data)
          <form class="updateform" action="/updateretailer/{{$data->id}}" method="POST">
            @csrf
            <a href="\retailers"class="closeupdateform">X</a>
            <h3>Update Retailer</h3>
       
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value={{$data->name}}>
            <br>
            <label for="phone">Phone number</label>
            <input type="text" class="form-control" name="phone" value={{$data->phone}}>
            <br>
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value={{$data->email}}>
            <br>
            <label for="address">Address</label>
            <textarea type="text" rows="4" cols="50" class="form-control" name="address">{{$data->address}}</textarea>
         
            <br>
              <button type="submit" class="btn btn-success">Update</button>
          </form>
          @endforeach
        </div>
</body>
</html>