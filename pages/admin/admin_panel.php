<?php
    include('../../connection.php'); 

    if (isset($_GET['p'])) {
        $pageno = $_GET['p'];
    } else {
        $pageno = 1;
    }


    $no_of_records_per_page = 15;
    $offset = ($pageno-1) * $no_of_records_per_page;

   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">



    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <title>Admin Panel</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 ">
                <div class="col-auto col-md-3 col-xl-2 d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 sidenav sidebar_color">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Admin Panel</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item ">
                            <a href="#" class="nav-link align-middle px-0 sidebar_text">
                                <i class="fa fa-android bi-house sidebar_icon"></i> <span
                                    class="ms-1 d-none d-sm-inline">All
                                    Apps</span>
                            </a>
                        </li>
                        <!-- <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-speedometer2"></i> <span
                                        class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span>
                                            1 </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span>
                                            2 </a>
                                    </li>
                                </ul>
                            </li> -->
                        <li>
                            <a href="edit_app.php" class="nav-link px-0 align-middle sidebar_text">
                                <i class="fa fa-plus bi-table sidebar_icon"></i> <span
                                    class="ms-1 d-none d-sm-inline">Insert
                                    App</span></a>
                        </li>
                        <!-- <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi-bootstrap"></i> <span
                                        class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span>
                                            1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span>
                                            2</a>
                                    </li>
                                </ul>
                            </li> -->
                        <!-- <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span>
                                </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Product</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Product</span> 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Product</span> 3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span
                                                class="d-none d-sm-inline">Product</span> 4</a>
                                    </li>
                                </ul>
                            </li> -->
                        <!-- <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-people"></i> <span
                                        class="ms-1 d-none d-sm-inline">Customers</span> </a>
                            </li> -->
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none" id="dropdownUser1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='fa fa-user-circle sidebar_icon'></i>
                            <span class="d-none d-sm-inline mx-2">User</span>
                        </a>
                        <!-- <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul> -->
                    </div>

                    <div class="pb-4">
                        <a href="login.php" class="d-flex align-items-center text-decoration-none sidebar_text"
                            >
                            <i class='fa fa-sign-out sidebar_icon'></i>
                            <span class="d-none d-sm-inline mx-2">Logout</span>
                        </a>
                        <!-- <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul> -->
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <h1 class="heading_admin mb-5">All Apps</h1>

                <div class="row m-3 p-3 rounded sidebar_color">

                    <table class="table_apps">
                        <tr class="tr_admin">
                            <th class="td_admin th_admin">Id</th>
                            <th class="td_admin th_admin">App-id</th>
                            <th class="td_adminth_admin">Link</th>
                            <th class="td_admin th_admin" colspan="2">Operation</th>
                        </tr>

                        <?php
                            $sql = "SELECT * FROM app_ids_info  LIMIT $offset, $no_of_records_per_page";
                            $total_pages_sql = "SELECT COUNT(*) FROM app_ids_info ";

                            $count = mysqli_query($conn,$total_pages_sql);

                            $total_rows = mysqli_fetch_array($count)[0];
                            $total_pages = ceil($total_rows / $no_of_records_per_page);

                            $res_data = mysqli_query($conn,$sql);



                        if(mysqli_num_rows($res_data) > 0)
                        // if(true)
                        {
                            $row_count = (15*$pageno)-15;
                            while($item = mysqli_fetch_array($res_data)){
                                $row_count+=1;

                            ?>
                                <tr class="tr_admin">
                                    <td class="td_admin"><?php echo $row_count?> </td>
                                    <td class="td_admin"><?php echo $item['app_id']?></td>
                                    <td class="td_admin"><a href="https://appsrating.info/<?php echo $item['app_slug']?>/" class="link_admin">https://appsrating.info/<?php echo $item['app_slug']?>/</a></td>
                                    <td class="td_admin"><a href="edit_app.php?id=<?php echo $item['app_id']?>" class="link_admin"><i class='fa fa-edit me-2'></i><span>Edit</span></a></td>
                                    <td class="td_admin"><a class="link_admin del_btn"><i class='fa fa-trash me-2'></i><span>Delete</span></a></td>


                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </table>

                    
                </div>

                <center>

                        <?php if($total_pages>1) {?>
                        <ul class="pagination mt-3">
                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>"><a
                                    href="../admin/admin_panel.php#"><<</a> 
                            </li> 
                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                    <a href="<?php if($pageno == 2){ echo "../admin/admin_panel.php#"; } else { echo "?p=".($pageno - 1); } ?>">PREV</a>
                            </li>


                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                <a
                                    href="<?php if($pageno >= $total_pages){ echo '?p=&#'; } else { echo '?p='.($pageno + 1); } ?>">
                                    NEXT
                                </a>
                            </li>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a
                                    href="<?php echo '?p='.$total_pages; ?>">>></a></li>

                        </ul>
                        <?php } ?>
                    </center>
            </div>
        </div>

    </div>
</body>

<script type="text/javascript">

$(".del_btn").click(function() {
    var $row = $(this).closest("tr"),
        $tds = $row.find("td:nth-child(2)");

    $.each($tds, function() {
    

        if (confirm("Confirm to Delete?")) {
            var id = $(this).text();

            $.ajax({
                  type: "POST",
                  url: "delete_app.php",
                  
                  data:{
                    id: id,
                  }
                  })
                  .done(function( data ) {
                    console.log(data);
                    window.location.href= 'admin_panel.php';

                  });

        } else {
            console.log('cancel');
        }
    });
    
});


    
</script>

</html>