<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/warehouse.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>warehouses-SCMS</title>
</head>
<body>
    

    <header>
        @include('layouts/sidebar')
    </header>
    <main>

        @include('layouts/navbar')

        <div class="addRetailerDiv"><button onclick="retailerFormPopup(true)">Add Warehouse</button></div>
        <div class="retailerFormOuter">
          <form action="/addwarehouse" method="POST">
            @csrf
            <button type="button" onclick="retailerFormPopup(false)" class="btn-close" aria-label="Close"></button>
            <h3>Add Warehouse</h3>

            <label for="warehouse_name">Warehouse Name</label>
            <input type="text" class="form-control" name="warehouse_name">
            <br>
            <label for="warehouse_phone">Phone number</label>
            <input type="text" class="form-control" name="warehouse_phone">
            <br>
            <label for="warehouse_email">Warehouse Email</label>
            <input type="email" class="form-control" name="warehouse_email">
            <br>
            <label for="warehouse_address">Warehouse Address</label>
            <textarea type="text" rows="4" cols="50" class="form-control" name="warehouse_address"></textarea>
            <br>
              <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
        


        <table style="width: 97%">
           
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Warehouse Name</th>
                <th>Phone no.</th>
                <th>Warehouse Email</th>
                <th>Warehouse Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($fetchedData as $warehouse)
              <tr>
                <td>{{$warehouse->id}}</td>
                <td>{{$warehouse->warehouse_name}}</td>
                <td>{{$warehouse->warehouse_phone}}</td>
                <td>{{$warehouse->warehouse_email}}</td>
                <td>{{$warehouse->warehouse_address}}</td>
                <td> 
                    <a href="/updatewarehouse/{{$warehouse->id}}"><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                    <a href="/deletewarehouse/{{$warehouse->id}}"><button class="btn deleteBtn"><i class="fa fa-trash"></i></button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>

    </main>
   
    <script src="js/retailers.js"></script>
</body>
</html>