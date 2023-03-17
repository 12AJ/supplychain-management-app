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
          <form action="">
            <button type="button" onclick="retailerFormPopup(false)" class="btn-close" aria-label="Close"></button>
            <h3>Add Retailer</h3>

            <label for="">First Name</label>
            <input type="text" class="form-control">
            <br>
            <label for="">Last Name</label>
            <input type="text" class="form-control">
            <br>
            <label for="">Phone number</label>
            <input type="text" class="form-control">
            <br>
            <label for="">Email</label>
            <input type="number" class="form-control">
            <br>
            <label for="">Address</label>
            <textarea type="text" rows="4" cols="50" class="form-control"></textarea>
            <br>
              <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
        


        <table style="undefined;table-layout: fixed; width: 1042px">
            <colgroup>
            <col style="width: 67px">
            <col style="width: 268px">
            <col style="width: 157px">
            <col style="width: 195px">
            <col style="width: 253px">
            <col style="width: 102px">
            </colgroup>
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
              <tr>
                <td>1</td>
                <td>Raj Ingale</td>
                <td>1234567890</td>
                <td>raj@gmail.com</td>
                <td>Karve nagar , pune, 411053</td>
                <td> 
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                    <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Raj Ingale</td>
                <td>1234567890</td>
                <td>raj@gmail.com</td>
                <td>Karve nagar , pune, 411053</td>
                <td> 
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                    <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Raj Ingale</td>
                <td>1234567890</td>
                <td>raj@gmail.com</td>
                <td>Karve nagar , pune, 411053</td>
                <td> 
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                    <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Raj Ingale</td>
                <td>1234567890</td>
                <td>raj@gmail.com</td>
                <td>Karve nagar , pune, 411053</td>
                <td> 
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                    <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Raj Ingale</td>
                <td>1234567890</td>
                <td>raj@gmail.com</td>
                <td>Karve nagar , pune, 411053</td>
                <td> 
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                    <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Raj Ingale</td>
                <td>1234567890</td>
                <td>raj@gmail.com</td>
                <td>Karve nagar , pune, 411053</td>
                <td> 
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                    <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>Raj Ingale</td>
                <td>1234567890</td>
                <td>raj@gmail.com</td>
                <td>Karve nagar , pune, 411053</td>
                <td> 
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                    <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
            </tbody>
            </table>

    </main>

    <script src="js/retailers.js"></script>
</body>
</html>