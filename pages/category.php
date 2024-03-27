<?php
    include('../connection.php'); 

    if (isset($_GET['p'])) {
        $pageno = $_GET['p'];
    } else {
        $pageno = 1;
    }

    $games_cat_arr = array('Arcade', 'Casual', 'Sports', 'Racing', 'Action', 'Board', 'Adventure', 'Role', 'Playing', 'Puzzle', 'Strategy', 'Simulation');

    $no_of_records_per_page = 18;
    $offset = ($pageno-1) * $no_of_records_per_page;

    $cat = $_GET['cat'];

    $cat = str_replace("_"," ",$cat);
    $cat = str_replace("|","&",$cat);
    $cat = ucwords($cat);
    // echo ($cat)."";

    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Virtoxed" />
    <meta name="description"
        content="Thousands of the newest Android apps and games are available. Anywhere, anytime, on all of your devices." />
    <meta name="keywords" content="Apps, Games, Windows Apps, Free Apps, Free Games" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="AppsonWindows.com" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php
                                            echo $cat;
                                            if(in_array($cat,$games_cat_arr))
                                                echo " Game";

                                            else
                                                echo " Apps";
                                        ?> | Free Download for PC" />
    <meta property="og:description"
        content="Thousands of the newest Android apps and games are available. Anywhere, anytime, on all of your devices." />
    <meta property="og:url" content="https://AppsonWindows.com/" />
    <meta property="article:published_time" content="2022-10-31T14:31:52+00:00" />
    <meta property="article:modified_time" content="2022-11-01T18:23:12+00:00" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php
                                            echo $cat;
                                            if(in_array($cat,$games_cat_arr))
                                                echo " Game";

                                            else
                                                echo " Apps";
                                        ?> | Free Download for PC" />
    <meta name="twitter:description"
        content="Thousands of the newest Android apps and games are available. Anywhere, anytime, on all of your devices." />
    <title>
        <?php
            echo $cat;
            if(in_array($cat,$games_cat_arr))
                echo " Game";

            else
                echo " Apps";
        ?> | Free Download for PC
    </title>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "url": "https://onfile.info/",
            "name": "Home",
            "about": "Information about files including description, popularity, extension and different detials ",
            "alternateName": "MainPage",
            "description": "First Page of onfile.info website",
            "dateModified": "2022-10-01"
        }
    </script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!--Social Media Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div class="row nav">
        <div class="col mt-2">
            <a class="navbar-brand heading_bar" href="../"><span class="heading_start_words">APPS ON</span>
                <span class="heading_windows">WINDOWS</span></a>
        </div>

        <div class="col">
            <!-- <span class="bar_li text-white mx-5">HOME</span>
            <span class="bar_li text-white mx-4">Apps</span>
            <span class="bar_li text-white mx-5">Games</span> -->

            <ul class="navbar-nav mb-lg-0 text-white ">
                <li class="nav-item mx-5">
                    <a class="nav-link bar_li green_text" href="../">Home</a>
                </li>

                <li class="nav-item dropdown mx-4">
                    <a class="nav-link dropdown-toggle bar_li white_text" href="#" id="dropdown01"
                        data-bs-toggle="dropdown" aria-expanded="false">Apps</a>
                    <ul class="dropdown-menu dropdown_scroll" aria-labelledby="dropdown01">

                        <li><a class="dropdown-item" href="category.php?cat=communication">Communication</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=social">Social</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=video_players_|_editors">Video Players
                                & Editors </a></li>
                        <li><a class="dropdown-item" href="category.php?cat=travel_|_local">Travel & Local</a>
                        </li>
                        <li><a class="dropdown-item" href="category.php?cat=photography">Photography</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=entertainment">Entertainment</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=tools">Tools</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=productivity">Productivity</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=music_|_audio">Music & Audio</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=shopping">Shopping</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=maps_|_navigation">Maps &
                                Navigation</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=finance">Finance</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=business">Business</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=lifestyle">Lifestyle</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=education">Education</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=art_|_design">Art & Design</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=house_|_home">House & Home</a></li>

                    </ul>
                </li>

                <li class="nav-item dropdown mx-5">
                    <a class="nav-link dropdown-toggle bar_li white_text" href="#" id="dropdown01"
                        data-bs-toggle="dropdown" aria-expanded="false">Games</a>
                    <ul class="dropdown-menu dropdown_scroll" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="category.php?cat=arcade">Arcade</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=casual">Casual</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=sports">Sports </a></li>
                        <li><a class="dropdown-item" href="category.php?cat=racing">Racing</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=action">Action</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=board">Board</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=adventure">Adventure</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=role">Role</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=playing">Playing</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=puzzle">Puzzle</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=strategy">Strategy</a></li>
                        <li><a class="dropdown-item" href="category.php?cat=simulation">Simulation</a></li>

                    </ul>
                </li>

            </ul>
        </div>

        <div class="col">
            <center>
                <form action="category.php">
                    <div class="search_bar">
                        <button class="search_btn" type="submit"><i class="fa fa-search"></i></button>
                        <input class="search_field" type="text" placeholder="Search Apps and games" name="search">
                    </div>
                </form>
            </center>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("form").on("submit", function (e) {
                e.preventDefault();
                var srch_item = $('.search_field').val();
                // console.log(srch_item);
                // location.href = '' + srch_item;
                window.location = 'https://localhost/third_project_apps/pages/search.php?s=' +
                srch_item;
            });
        });
    </script>

    <div class="container">
        <div class="col-md-13">


            <!-- App Section -->

            <div class="row margin_top_bottom">

                <div class=" col-md-9">
                    <span class="title_category px-0 mx-3">

                        <?php
                            echo $cat;
                            if(in_array($cat,$games_cat_arr))
                                    echo " Game";

                            else
                                echo " Apps";
                        ?>

                    </span>

                    <div class="bg-body shadow-sm row app_section padding_category_app_section mx-2">

                        <?php

                        if(isset($_GET['cat']))
                        {
                            $filtervalues = $cat;
                            // echo strlen($filtervalues);
                            // echo $filtervalues;
                            // if($filtervalues == "kids" || $filtervalues == "apps")
                            // {  
                            //     $sql = "SELECT * FROM app_ids_info WHERE main_category = '$filtervalues' LIMIT $offset, $no_of_records_per_page";
                            //     $total_pages_sql = "SELECT COUNT(*) FROM app_links WHERE main_category = '$filtervalues'";
                            // }
                            // else
                            // {
                                $sql = "SELECT * FROM app_ids_info WHERE sub_category = '$filtervalues' LIMIT $offset, $no_of_records_per_page";
                                $total_pages_sql = "SELECT COUNT(*) FROM app_ids_info WHERE sub_category = '$filtervalues'";

                                // $sql = "SELECT * FROM app_ids_info WHERE main_category = 'Games' LIMIT $offset, $no_of_records_per_page";
                                // $total_pages_sql = "SELECT COUNT(*) FROM app_ids_info WHERE main_category = 'Games'";

                            // }
                            // $res = mysqli_query($conn,$query);
                            $count = mysqli_query($conn,$total_pages_sql);

                        //////////////////////////////////////////////////////
                            // $total_pages_sql = 'SELECT COUNT(*) FROM file_desp';
                            // $count = mysqli_query($conn,$total_pages_sql);
                            // print_r ($result);
                            $total_rows = mysqli_fetch_array($count)[0];
                            $total_pages = ceil($total_rows / $no_of_records_per_page);

                            // echo "Page no: ".$pageno;
                            // echo "Total Pages: ".$total_pages;
                            // $sql = "SELECT * FROM file_desp LIMIT $offset, $no_of_records_per_page";
                            $res_data = mysqli_query($conn,$sql);
                        //////////////////////////////////////////////////////


                        $app_count = 0;
                        if(mysqli_num_rows($res_data) > 0)
                        // if(true)
                        {
                            while($item = mysqli_fetch_array($res_data)){
                                // for($i=0; $i<16;$i++){
                                if($app_count == 0) //check 4 apps in a row
                                {

                                ?>

                        <!-- Apps First Col -->
                        <div class="col-lg-4 px-0">

                            <?php 
                                    }
                                $app_count+=1;

                            ?>

                            <!-- App -->
                            <div class="app ps-2">
                                <a href="single_page.php?slug=<?php echo $item['app_slug']?>">
                                    <div class="d-flex text-muted pt-3">

                                        <img src="<?php echo $item['icon']?>" alt=""
                                            class="bd-placeholder-img flex-shrink-0 me-2 rounded mb-2" width="75"
                                            height="75" role="img" aria-label="Placeholder: 32x32"
                                            preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#007bff" class="extend_space" />

                                        <div class=" mb-0 small lh-sm mx-2">
                                            <div class="row">
                                                <strong
                                                    class="text-gray-dark app_title"><?php echo $item['name']?></strong>

                                            </div>

                                            <div class="row">
                                                <div class="col pe-0">
                                                    <div class="row me-0 row_app">
                                                        <label
                                                            class="rating-label float-start ma rating_box pb-1 mx-0 pe-0">
                                                            <input class="rating" max="5"
                                                                oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
                                                                step="0.5" style="--value:<?php echo $item['star']?>"
                                                                type="range" value="2.5">
                                                        </label>
                                                        <!-- <span class="rating_text">2.5</span> -->
                                                    </div>

                                                    <div class="row">
                                                        <p class="app_category ms-0"><?php echo $item['sub_category']?>
                                                        </p>
                                                    </div>
                                                </div>



                                                <!-- <div class="col arrow px-0">&rarr;</div> -->
                                                <i class='col arrow px-0 fas fa-arrow-right'></i>
                                            </div>


                                        </div>
                                        <div class="container">




                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                           if($app_count==6 || $total_pages==1 || $pageno > 1) 
                           {
                            ?>

                        </div>

                        <?php 
                                $app_count = 0;
                            }
                            // }
                        } 
                        ?>
                        <?php
                        

                        }
                    }
                            ?>


                    </div>

                    <center>

                        <?php if($total_pages>1) {?>
                        <ul class="pagination mt-3">
                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>"><a
                                    href="<?php echo "?cat=".($_GET['cat'])?>">
                                    <<</a> </li> <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                        <a
                                            href="<?php if($pageno == 2){ echo "?cat=".($_GET['cat']); } else { echo "?cat=".($_GET['cat'])."&p=".($pageno - 1); } ?>">PREV</a>
                            </li>


                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                <a
                                    href="<?php if($pageno >= $total_pages){ echo '?cat='.($_GET['cat']).'&p=&#'; } else { echo '?cat='.($_GET['cat']).'&p='.($pageno + 1); } ?>">
                                    NEXT
                                </a>
                            </li>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a
                                    href="<?php echo '?cat='.($_GET['cat']).'&p='.$total_pages; ?>">>></a></li>

                        </ul>
                        <?php } ?>
                    </center>

                    <!-- <center>
                        <div class="pagination mt-4">
                            <a href="#">&laquo;</a>
                            <a class="pagination_arrow" href="#">
                                <<</a> <a class="pagination_num" href="#">1
                            </a>
                            <a class="pagination_num" class="active" href="#">2</a>
                            <a class="pagination_num" href="#">3</a>
                            <a class="pagination_num" href="#">4</a>
                            <a class="pagination_num" href="#">5</a>
                            <a class="pagination_num" href="#">6</a>
                            <a class="pagination_arrow" href="#">>></a>
                            <a href="#">&raquo;</a>
                        </div>
                    </center> -->
                </div>
                <!-- Second Column -->

                <div class="col">
                    <span class="title_category mx-3 px-0">
                        Relevant Apps
                    </span>

                    <div class="text_privacy mx-2  bg-body shadow-sm row app_section mx--1 ">


                        <?php

                    for($i=0; $i<7; $i++)
                    {
                        do{
                            $rand = rand(1,304);
                            $query = "SELECT main_category FROM app_ids_info WHERE id = '$rand'";
                            $res = mysqli_query($conn,$query);
                            $item = $res->fetch_assoc();
                            $check = $item['main_category'];
                        }while ($check == 'Kids');
    
                        $query = "SELECT * FROM app_ids_info WHERE id = '$rand'" ;
                        $res = mysqli_query($conn,$query);
                        $item = $res->fetch_assoc(); 
                    ?>

                        <!-- App -->
                        <!-- <a href="">
                            <div class="d-flex text-muted pt-3">

                                <img src="images/icon.png" alt=""
                                    class="bd-placeholder-img flex-shrink-0 me-2 rounded mb-2" width="75" height="75"
                                    role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice"
                                    focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#007bff" />

                                <p class=" mb-0 small lh-sm mx-2">
                                    <strong class="d-block text-gray-dark app_title pt-1">App1</strong>
                                    <span class="app_category pt-1">102.158.1</span>
                                    <span class="app_category"><br>Developer</span>
                                </p>
                                <div class="container">




                                </div>
                            </div>
                        </a> -->


                        <!-- App -->
                        <div class="app_nohover ps-2">
                                <a href="single_page.php?slug=<?php echo $item['app_slug']?>">
                                    <div class="d-flex text-muted pt-3">

                                        <img src="<?php echo $item['icon']?>" alt=""
                                            class="bd-placeholder-img flex-shrink-0 me-2 rounded mb-2" width="75"
                                            height="75" role="img" aria-label="Placeholder: 32x32"
                                            preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#007bff" class="extend_space" />

                                        <div class=" mb-0 small lh-sm mx-2">
                                            <div class="row">
                                                <strong
                                                    class="text-gray-dark app_title"><?php echo $item['name']?></strong>

                                            </div>

                                            <div class="row">
                                                <div class="col pe-0">
                                                    <div class="row">
                                                    <p class="app_category ms-0 mb-0 mt-1"><?php echo $item['version']?>
                                                        </p>
                                                        <!-- <span class="rating_text">2.5</span> -->
                                                    </div>

                                                    <div class="row">
                                                        <p class="app_category ms-0"><?php echo $item['dev']?>
                                                        </p>
                                                    </div>
                                                </div>



                                                <!-- <div class="col arrow px-0">&rarr;</div> -->
                                                <i class='col arrow px-0 fas fa-arrow-right'></i>
                                            </div>


                                        </div>
                                        <div class="container">




                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                    }
                    // echo "Total Pages: ".$total_pages;
                    ?>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="row footer">
        <div class="col-md-4 mt-1">
            <a class="navbar-brand heading_bar" href="../"><span class="heading_start_words">APPS ON</span> <span
                    class="heading_windows">WINDOWS</span></a>
        </div>

        <div class="col-md-4 mt-1">
            <span class="mx-3"><a class="bar_li white_text" href="../">Home</a></span> <span
                class="green_text_no_hover bar_li">|</span> <span class="mx-3"><a class="bar_li white_text"
                    href="privacy_policy.php">Privacy Policy</a></span> <span
                class="green_text_no_hover bar_li">|</span> <span class="mx-3"><a class="bar_li white_text"
                    href="contact_us.php">Contact Us</a></span>
        </div>

        <div class="col-md-4 mt-1 footer_copyright text-white">
            Copyright © 2022 Apps Windows PC
        </div>

    </div>
</body>

</html>