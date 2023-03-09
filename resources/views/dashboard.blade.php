<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard-SCMS</title>
</head>
<body>

    <header>
        @include('layouts/sidebar')
    </header>
    <main>

        @include('layouts/navbar')
       
        <div class="miniCardsOuter">
            <div class="miniCardsOuter1">
                <div id="minicard1" class="miniCards">
                    <h2>30</h2>
                    <p>Pending</p>
                    <p>Orders</p>
                    <img class="miniCardArrow" src="https://cdn-icons-png.flaticon.com/512/54/54517.png" alt="" srcset="">
                </div>
                <div id="minicard2" class="miniCards">
                    <h2>52</h2>
                <p>Orders</p>
                <p>To Deliver</p>
                <img class="miniCardArrow" src="https://cdn-icons-png.flaticon.com/512/54/54517.png" alt="" srcset="">
                </div>
                
            </div>
            <div class="miniCardsOuter1">
            <div id="minicard3" class="miniCards">
                <h2>10</h2>
                <p>Product</p>
                <p>Returns</p>
                <img class="miniCardArrow" src="https://cdn-icons-png.flaticon.com/512/54/54517.png" alt="" srcset="">
            </div>
            <div id="minicard4" class="miniCards">
                <h2>80</h2>
                <p>Number</p>
                <p>Of Retailers</p>
                <img class="miniCardArrow" src="https://cdn-icons-png.flaticon.com/512/54/54517.png" alt="" srcset="">
            </div>
        </div>
        </div>
    </main>
</body>
</html>