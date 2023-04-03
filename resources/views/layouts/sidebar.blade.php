

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/sidebar.css">
</head>
<body>
   
    

    <div id="sidebarSupport" class=""></div>
        <div id="sidebar" class="">

            <div class="sidebar-header">
                <a href="/home"><h3>logo</h3></a>
            </div>

            <ul class="list-unstyled ">
                <li class=@yield('dashboard')>
                    <a href="/home">Dashboard</a>
                </li>
                <li class=@yield('mainInventory')>
                    <a href="/mainInventory">Main<br>Inventory</a>
                </li>
                <li class=@yield('warehouse')>
                    <a href="/warehouse">Warehouse</a>
                </li>
                <li class=@yield('orderManagement')>
                    <a href="/all-orders">Order<br>Management</a>
                </li>
                <li class=@yield('retailers')>
                    <a href="/retailers">Retailers</a>
                </li>
            </ul>
        </div>


</body>
</html>
