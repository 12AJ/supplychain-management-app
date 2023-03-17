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
          <form action="">
            <button type="button" onclick="productFormPopup(false)" class="btn-close" aria-label="Close"></button>
            <h3>Add Product</h3>

            <label for="">Product Code</label>
            <input type="text" class="form-control">
            <br>
            <label for="">Product Name</label>
            <input type="text" class="form-control">
            <br>
            <label for="">Model</label>
            <input type="text" class="form-control">
            <br>
            <label for="">Product Selling Price</label>
            <input type="number" class="form-control">
            <br>
            <label for="">Vendor</label>
            <input type="text" class="form-control">
            <br>
            <label for="">Product Image</label>
            <input type="file" class="form-control">
            <br>
            <label for="">Product description</label>
            <textarea type="text" rows="4" cols="50" class="form-control"></textarea>
            <br>
              <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
        <table class="productsTable" style="undefined;table-layout: fixed; width: 967px">
            <colgroup>
            <col style="width: 160px">
            <col style="width: 145px">
            <col style="width: 120px">
            <col style="width: 140px">
            <col style="width: 130px">
            <col style="width: 284px">
            <col style="width: 90px">
            <col style="width: 120px">
            </colgroup>
            <thead>
              <tr>
                <th>Product Code</th>
                <th>Name</th>
                <th>model</th>
                <th>selling price</th>
                <th>vendor</th>
                <th>description</th>
                <th>image</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>112</td>
                <td>Fruit</td>
                <td>apple</td>
                <td>50</td>
                <td>raj</td>
                <td>fresh fruit in market most selling</td>
                <td><button class="btn viewBtn"><i class="fa fa-eye"></i></button></td>
                <td>  
                     <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                    <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>112</td>
                <td>Fruit</td>
                <td>apple</td>
                <td>50</td>
                <td>raj</td>
                <td>fresh fruit in market most selling</td>
                <td><button class="btn viewBtn"><i class="fa fa-eye"></i></button></td>
                <td>  
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                   <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
               </td>
              </tr>
              <tr>
                <td>112</td>
                <td>Fruit</td>
                <td>apple</td>
                <td>50</td>
                <td>raj</td>
                <td>fresh fruit in market most selling</td>
                <td><button class="btn viewBtn"><i class="fa fa-eye"></i></button></td>
                <td>  
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                   <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
               </td>
              </tr>
              <tr>
                <td>112</td>
                <td>Fruit</td>
                <td>apple</td>
                <td>50</td>
                <td>raj</td>
                <td>fresh fruit in market most selling</td>
                <td><button class="btn viewBtn"><i class="fa fa-eye"></i></button></td>
                <td>  
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                   <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
               </td>
              </tr>
              <tr>
                <td>112</td>
                <td>Fruit</td>
                <td>apple</td>
                <td>50</td>
                <td>raj</td>
                <td>fresh fruit in market most selling</td>
                <td><button class="btn viewBtn"><i class="fa fa-eye"></i></button></td>
                <td>  
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                   <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
               </td>
              </tr>
              <tr>
                <td>112</td>
                <td>Fruit</td>
                <td>apple</td>
                <td>50</td>
                <td>raj</td>
                <td>fresh fruit in market most selling</td>
                <td><button class="btn viewBtn"><i class="fa fa-eye"></i></button></td>
                <td>  
                    <a href=""><button class="btn editBtn" ><i class="fa fa-edit"></i></button></a>  
                   <button class="btn deleteBtn"><i class="fa fa-trash"></i></button>
               </td>
              </tr>
            </tbody>
            </table>

    </main>

    <script src="js/inventory.js"></script>
</body>
</html>