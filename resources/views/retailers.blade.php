<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/retailers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>retailers-SCMS</title>
</head>
<body>
    
    <header>
        @include('layouts/sidebar')
    </header>
    <main>

        @include('layouts/navbar')

        <div class="addRetailerDiv"><button onclick="retailerFormPopup(true)">Add Retailer</button></div>
        <div class="retailerFormOuter">
          <form action="/addretailer" method="POST">
            @csrf
            <button type="button" onclick="retailerFormPopup(false)" class="btn-close" aria-label="Close"></button>
            <h3>Add Retailer</h3>

            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
            <br>
            <label for="phone">Phone number</label>
            <input type="text" class="form-control" name="phone">
            <br>
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email">
            <br>
            <label for="address">Address</label>
            <textarea type="text" rows="4" cols="50" class="form-control" name="address"></textarea>
            <br>
              <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
        


        <table style="width:97%">
           
            <thead>
              <tr>
                <th>Sr. no.</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($fetchedData as $retailer)
              <tr>
                <td>{{$retailer->id}}</td>
                <td>{{$retailer->name}}</td>
                <td>{{$retailer->phone}}</td>
                <td>{{$retailer->email}}</td>
                <td>{{$retailer->address}}</td>
                <td> 
                    <a href="/updateretailer/{{$retailer->id}}"><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                    <a href="/deleteretailer/{{$retailer->id}}"><button class="btn deleteBtn"><i class="fa fa-trash"></i></button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>

    </main>

    <script src="js/retailers.js"></script>
</body>
</html>