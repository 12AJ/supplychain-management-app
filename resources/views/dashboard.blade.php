
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

<?php
        $countall = 0;
        $countpending = 0;
        $countreturned = 0;
        $countsold = 0;
        $countcanceled = 0;
        foreach($fetchedData as $data){
                $countall++;

                if($data->order_status === "pending order"){
                    $countpending++;
                }
                 if($data->order_status === "returned order"){
                    $countreturned++;
                } 
                if($data->order_status === "Sold Order"){
                    $countsold++;
                }
                if($data->order_status === "Canceled Order"){
                    $countcanceled++;
                }
        }




       ?>
        <div class="graphCardsOuter">

        <div class="miniCardsOuter">
        <a class="links" href="/pending-orders">
            <div class="miniCardsOuter1">
                <div id="minicard1" class="miniCards">
                   
                    <h2>{{$countpending}}</h2>
                    <p>Pending</p>
                    <p>Orders</p>
                    <img class="miniCardArrow" src="https://cdn-icons-png.flaticon.com/512/54/54517.png" alt="" srcset="">
                    <img class="pendingImg" src="https://icons.veryicon.com/png/o/business/my-library/pending-disposal-1.png" alt="" srcset="">
                </div>
                </a>

                <a class="links" href="/all-orders">
                <div id="minicard2" class="miniCards">
                    <h2>{{$countall}}</h2>
                <p>Orders</p>
                <p>To Deliver</p>
                <img class="miniCardArrow" src="https://cdn-icons-png.flaticon.com/512/54/54517.png" alt="" srcset="">
                <img class="pendingDelivery" src="https://www.freeiconspng.com/thumbs/delivery-icon/shopping-delivery-icon-5.png" alt="" srcset="">
                </div>
                </a>
                
            </div>

            <a class="links" href="/returned-orders">
            <div class="miniCardsOuter1">
            <div id="minicard3" class="miniCards">
                <h2>{{$countreturned}}</h2>
                <p>Product</p>
                <p>Returns</p>
                <img class="miniCardArrow" src="https://cdn-icons-png.flaticon.com/512/54/54517.png" alt="" srcset="">
                <img class="productReturn" src="https://static.thenounproject.com/png/3539472-200.png" alt="" srcset="">
            </div>
            </a>

            <a class="links" href="/retailers">
            <div id="minicard4" class="miniCards">
                <h2>80</h2>
                <p>Number</p>
                <p>Of Retailers</p>
                <img class="miniCardArrow" src="https://cdn-icons-png.flaticon.com/512/54/54517.png" alt="" srcset="">
                <img class="retailers" src="https://www.freeiconspng.com/thumbs/business-icon-png/business-person-icon-png-human-male-man-people-25.png" alt="" srcset="">
            </div>
        </a>
        </div>
        </div>
        <canvas class="graphImg" id="myChart" style="max-width:650px"></canvas>
    </div>
    <div class="graphCardsOuter2">
        <canvas class="graphImg" id="myChart2" style="max-width:650px"></canvas>

        <section class="content">
            <h3>Order Deliver Status</h3>
            <div class="box gauge--1">
              <div class="mask">
                  <div class="semi-circle"></div>
                  <div class="semi-circle--mask"></div>
              </div>
            </div>
              <h2>{{$countsold}}/{{$countall}}</h2>
          </section>
    </div>
    </main>

    <script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script src="js/dashboard.js"></script>

</body>
</html>