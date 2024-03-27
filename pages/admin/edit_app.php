<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $check=0;
        $title = 'Edit ';
    } else {
        // insert new app
        $title = 'Insert ';

        $check=1;
    }

    

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
        
    <title>App Info</title>
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
                            <a href="admin_panel.php" class="nav-link align-middle px-0 sidebar_text">
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

                <h1 class="heading_admin mb-5"><?php echo $title?>App</h1>

                <div class="row m-3 p-3 rounded sidebar_color">



                    <table class="table_apps">

                        <tr>
                            <td class="td_admin float-right"><button type="button" onclick="fetch_data()" class="download_btn mx-0 position-right"
                                    id="btn_fetch">Fetch Data</button></td>

                            <td class="td_admin"><input type="text" placeholder="Enter App Id"  value = "<?php echo ($check)?'':$id;?>" id="input_id"></td>

                        </tr>
                        <tr class="tr_admin">
                            <!-- <th class="td_admin th_admin">No.</th> -->
                            <th class="td_admin th_admin">Field</th>
                            <th class="td_adminth_admin">Values</th>
                            <th colspan="2" class="td_adminth_admin">Icon</th>
                        </tr>
                        <tr class="tr_admin">
                            <!-- <td class="td_admin">1</td> -->
                            <td class="td_admin">Name</td>
                            <td class="td_admin"><input type="text" id="app_title"></td>
                            <td colspan="2"><img src="" class="my-2" width="70" id="app_icon" alt=""></td>


                        </tr>

                        <tr class="tr_admin">
                            <!-- <td class="td_admin">2</td> -->
                            <td class="td_admin">Version</td>
                            <td class="td_admin"><input type="text" id="app_version"></td>
                            <td colspan="2" class="td_admin">Screenshots</td>

                        </tr>

                        <tr class="tr_admin">
                            <!-- <td class="td_admin">3</td> -->
                            <td class="td_admin">Developer</td>
                            <td class="td_admin"><input type="text" id="app_developer"></td>
                            
                            <td><img src="" class="my-2" width="100" id="app_ss1" alt=""></td>
                            <td><img src="" class="my-2" width="100" id="app_ss2" alt=""></td>

                        </tr>

                        <tr class="tr_admin">
                            <!-- <td class="td_admin">4</td> -->
                            <td class="td_admin">Updated Date</td>
                            <td class="td_admin"><input type="text" id="updated_date"></td>
                            <td><img src="" class="my-2" width="100" id="app_ss3" alt=""></td>
                            <td><img src="" class="my-2" width="100" id="app_ss4" alt=""></td>

                        </tr>

                        <tr class="tr_admin">
                            <!-- <td class="td_admin">5</td> -->
                            <td class="td_admin">Release Date</td>
                            <td class="td_admin"><input type="text" id="created_date"></td>

                        </tr>

                        <tr class="tr_admin">
                            <!-- <td class="td_admin">6</td> -->
                            <td class="td_admin">Rating</td>
                            <td class="td_admin"><input type="text" id="app_rating"></td>

                        </tr>

                        <tr class="tr_admin">
                            <!-- <td class="td_admin">8</td> -->
                            <td class="td_admin">Description</td>
                            <td class="td_admin"><textarea type="text" cols="14" rows="6" id="app_description"></textarea></td>

                        </tr>

                        <tr class="tr_admin">
                            <!-- <td class="td_admin">9</td> -->
                            <td class="td_admin">Reviews</td>
                            <td class="td_admin"><input type="text" id="app_votes"></td>

                        </tr>

                        <tr class="tr_admin">
                            <!-- <td class="td_admin">10</td> -->
                            <td class="td_admin">App/Game</td>
                            <td class="td_admin"><input type="text" id="app_nature"></td>

                        </tr>

                        <tr class="tr_admin">
                            <!-- <td class="td_admin">11</td> -->
                            <td class="td_admin">Category</td>
                            <td class="td_admin"><input type="text" id="app_category"></td>

                        </tr>
                        <tr class="tr_admin">
                            <!-- <td class="td_admin">12</td> -->
                            <td class="td_admin">Downloads</td>
                            <td class="td_admin"><input type="text" id="app_installs"></td>

                        </tr>




                    </table>


                </div>

                <center>
                    <button type="button" onclick="save()" class="download_btn mt-3 mx-0 position-right" id="btn_save">Save
                        Changes</button>

                    <button type="button" onclick="window.location.href='admin_panel.php'" class="hollow_btn mt-3 mx-0 position-right" id="btn_cancel">Cancel</button>
                </center>

            </div>
        </div>

    </div>
</body>

<script type="text/javascript">
        var app_id_field = document.getElementById("input_id");
        var app_title = document.getElementById('app_title');
        var app_developer = document.getElementById('app_developer');
        var updated_date = document.getElementById('updated_date');
        var created_date = document.getElementById('created_date');
        var app_icon = document.getElementById('app_icon');
        var app_ss1 = document.getElementById('app_ss1');
        var app_ss2 = document.getElementById('app_ss2');
        var app_ss3 = document.getElementById('app_ss3');
        var app_ss4 = document.getElementById('app_ss4');
        var app_rating = document.getElementById('app_rating');
        var app_version = document.getElementById('app_version');
        var app_description = document.getElementById('app_description');
        var app_votes = document.getElementById('app_votes');
        var screen_shots = document.getElementById('screen_shots');
        var app_nature = document.getElementById('app_nature');
        var app_installs = document.getElementById('app_installs');
        var app_category = document.getElementById('app_category');

        var res;
        var ss;
        var icon;

        if(app_id_field.value!='')
        {
            window.onload = function() {
                fetch_data();
            };
        }


    function fetch_data()
    {
        
        var app_id = app_id_field.value;
        console.log(app_id);


        // $.ajax({
        // url: 'app_vista_scrap.php',
        // dataType: 'json',
        // success: function(data){
        //         console.log(data);
        // }
        // });

        $.ajax({
                type: "POST",
                url: "app_vista_scrap.php",
                data:{id: app_id}
                })
                .done(function( data ) {
                    if ( console && console.log ) {

                        try{

                            res = $.parseJSON(data);
                            // console.log( "Sample of data:", res.id );
                            // console.log( "Sample of data:", res.name );

                            app_title.value = res.app_title;
                            app_version.value = res.app_version;
                            app_developer.value = res.app_developer;

                            // converting timestamp to date
                            var timestamp = parseFloat(res.updated_date);
                            var dateformat = new Date(timestamp);
                            // var update_date = ;
                            updated_date.value = ""+(dateformat.getDate())+"/"+(dateformat.getMonth()+1)+"/"+(dateformat.getFullYear()) ;
                                                 
                            created_date.value = res.created_date;
                            app_icon.src = res.app_icon;
                            icon = res.app_icon;
                            // console.log(icon);


                            // Screenshot seperate
                            let imgs_array =  res.screen_shots.split(',');
                            ss = imgs_array;
                            // console.log(ss);

                            // console.log(imgs_array);
                            app_ss1.src = imgs_array[0];
                            app_ss2.src = imgs_array[1];
                            app_ss3.src = imgs_array[2];
                            app_ss4.src = imgs_array[3];

                            app_rating.value = parseFloat(res.app_rating).toFixed(2);;
                            app_version.value = res.app_version;
                            app_description.value = res.app_description;
                            app_votes.value = res.app_votes;
                            app_nature.value = res.app_nature;
                            app_votes.value = res.app_votes;
                            app_installs.value = res.app_installs;
                            app_category.value = res.app_category;
                        }

                        catch{
                            
                            app_id_field.value = '';
                            app_title.value = '';
                            app_version.value = '';
                            app_developer.value = '';
                            updated_date.value = '';
                            app_icon.src = '';
                            created_date.value = '';
                            app_rating.value = '';
                            app_description.value = '';
                            app_votes.value = '';
                            app_nature.value = '';
                            app_votes.value = '';
                            app_installs.value = '';
                            app_category.value = '';
                            alert("Invalid Id");

                        }
                    
                    }
                });
    }

    function save(){
        let s_id = app_id_field.value;
        let s_name = app_title.value;
        let s_ver = app_version.value;
        let s_dev = app_developer.value;
        let s_update = updated_date.value;
        let s_release = created_date.value;
        let s_rating = app_rating.value;
        let s_desp = app_description.value;
        let s_cat  = app_nature.value;
        let s_votes = app_votes.value;
        let s_donw = app_installs.value;
        let s_sub_cat = app_category.value;
        let s_icon = icon;
        let s_ss = ss;

        $.ajax({
                  type: "POST",
                  url: "insert_app.php",
                  data:{
                    check: <?php echo $check?>,
                    s_id: s_id,
                    s_name: s_name,
                    s_ver: s_ver,
                    s_dev: s_dev,
                    s_update: s_update,
                    s_release: s_release,
                    s_rating: s_rating,
                    s_desp: s_desp,
                    s_cat: s_cat,
                    s_votes: s_votes,
                    s_donw: s_donw,
                    s_sub_cat: s_sub_cat,
                    s_icon: s_icon,
                    s_ss: s_ss,
                  }
                  })
                  .done(function( data ) {
                      if ( console && console.log ) {
                          console.log(data);
                          window.location.href= 'admin_panel.php';


                      }
                  });
    }
    
</script>

</html>