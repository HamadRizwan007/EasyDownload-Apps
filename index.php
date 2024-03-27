<?php
include('connection.php'); 

$rand_arr1 = array();
$rand_arr2 = array();
$rand_arr3 = array();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="AppsonWindows.com | Android Games &amp; Apps for PC" property=og:title>
    <meta content="Discover and download the top Android apps on AppsonWindows.com quickly and free for PC" name=description>

    <meta name="author" content="Virtoxed" />
    <meta name="description"
        content="Discover and download the top Android apps on AppsonWindows.com quickly and free for PC" />
<!-- 
        <meta name="description"
        content="AppsonWindows.com contains over 10,000 different free android apps and games for PC" /> -->
    <meta name="keywords" content="Apps, Games, Windows Apps, Free Apps, Free Games" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="AppsonWindows.com" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="AppsonWindows.com | Free Android Games &amp; Apps for PC" />
    <meta property="og:description"
        content="Discover and download the top Android apps on AppsonWindows.com quickly and free for PC" />
    <meta property="og:url" content="https://AppsonWindows.com/" />
    <meta property="article:published_time" content="2022-10-31T14:31:52+00:00" />
    <meta property="article:modified_time" content="2022-11-02T18:23:12+00:00" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="AppsonWindows.com | Free Android Games &amp; Apps for PC" />
    <meta name="twitter:description"
        content="Discover and download the top Android apps on AppsonWindows.com quickly and free for PC" />
    <title>Android Apps and Games Free Download for PC</title>

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
    <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="row nav">
        <div class="col mt-2">
            <a class="navbar-brand heading_bar" href="#"><span class="heading_start_words">APPS ON</span> <span
                    class="heading_windows">WINDOWS</span></a>
        </div>

        <div class="col">
            <!-- <span class="bar_li text-white mx-5">HOME</span>
            <span class="bar_li text-white mx-4">Apps</span>
            <span class="bar_li text-white mx-5">Games</span> -->

            <ul class="navbar-nav mb-lg-0 text-white ">
                <li class="nav-item mx-5">
                    <a class="nav-link bar_li green_text" href="#">Home</a>
                </li>

                <li class="nav-item dropdown mx-4">
                    <a class="nav-link dropdown-toggle bar_li white_text" href="#" id="dropdown01"
                        data-bs-toggle="dropdown" aria-expanded="false">Apps</a>
                    <ul class="dropdown-menu dropdown_scroll" aria-labelledby="dropdown01">

                        <li><a class="dropdown-item" href="pages/category.php?cat=communication">Communication</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=social">Social</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=video_players_|_editors">Video Players
                                & Editors </a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=travel_|_local">Travel & Local</a>
                        </li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=photography">Photography</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=entertainment">Entertainment</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=tools">Tools</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=productivity">Productivity</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=music_|_audio">Music & Audio</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=shopping">Shopping</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=maps_|_navigation">Maps &
                                Navigation</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=finance">Finance</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=business">Business</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=lifestyle">Lifestyle</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=education">Education</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=art_|_design">Art & Design</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=house_|_home">House & Home</a></li>

                    </ul>
                </li>

                <li class="nav-item dropdown mx-5">
                    <a class="nav-link dropdown-toggle bar_li white_text" href="#" id="dropdown01"
                        data-bs-toggle="dropdown" aria-expanded="false">Games</a>
                    <ul class="dropdown-menu dropdown_scroll" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="pages/category.php?cat=arcade">Arcade</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=casual">Casual</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=sports">Sports </a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=racing">Racing</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=action">Action</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=board">Board</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=adventure">Adventure</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=role">Role</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=playing">Playing</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=puzzle">Puzzle</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=strategy">Strategy</a></li>
                        <li><a class="dropdown-item" href="pages/category.php?cat=simulation">Simulation</a></li>

                    </ul>
                </li>

            </ul>
        </div>

        <div class="col">
            <center>
                <form action="">
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
            <div class="row row_title">
                <center><span class="title">Android Apps & Games on PC</span>
                    <p class="text_after_title">Latest Android Apps, Games, Tools and Software reviews and some <br>
                        guides to
                        let you use the Apps on Different Platforms including Windows & Mac OS.</p>
                </center>
            </div>

            <!-- App Section -->

            <div class="row mx-2">
                <span class="text_before_app_section">
                    Latest Apps & Games
                </span>

                <div class="bg-body shadow-sm row app_section padding_index_app_section mx-0">
                    <?php
                for($i = 0; $i<4;$i++)
                {
                ?>
                    <!-- First Col -->
                    <div class="col-md-3">

                        <?php
                for($j = 0; $j<4;$j++)
                {
                ?>

                        <?php
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
                        <div class="app ps-2">
                            <a href="pages/single_page.php?slug=<?php echo $item['app_slug']?>">
                                <div class="d-flex text-muted pt-3">

                                    <img src="<?php echo $item['icon']?>" alt=""
                                        class="bd-placeholder-img flex-shrink-0 me-2 rounded mb-2" width="75"
                                        height="75" role="img" aria-label="Placeholder: 32x32"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff" class="extend_space" />

                                    <div class=" mb-0 small lh-sm mx-2">
                                        <div class="row">
                                            <strong class="text-gray-dark app_title"><?php echo $item['name']?></strong>

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



                                            <div class="col arrow px-0">&rarr;</div>
                                            <!-- <i class='col arrow px-0 fas fa-arrow-right'></i> -->
                                        </div>


                                    </div>
                                    <div class="container">




                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php 
                    }
                    ?>
                    </div>

                    <?php

                }
                ?>
                </div>


                <span class="text_after_app_section">
                    Applications
                </span>

                <div class="bg-body shadow-sm row app_section padding_index_app_section mx-0">
                    <?php
                for($i = 0; $i<4;$i++)
                {
                ?>
                    <!-- First Col -->
                    <div class="col-md-3">

                        <?php
                for($j = 0; $j<4;$j++)
                {
                ?>

                        <?php
                    do{
                        $rand = rand(1,304);
                        $query = "SELECT main_category FROM app_ids_info WHERE id = '$rand'";
                        $res = mysqli_query($conn,$query);
                        $item = $res->fetch_assoc();
                        $check = $item['main_category'];
                    }while ($check == 'Kids' || $check == 'Games');

                    $query = "SELECT * FROM app_ids_info WHERE id = '$rand'" ;
                    $res = mysqli_query($conn,$query);
                    $item = $res->fetch_assoc(); 
                ?>

                        <!-- App -->
                        <div class="app ps-2">
                            <a href="pages/single_page.php?slug=<?php echo $item['app_slug']?>">
                                <div class="d-flex text-muted pt-3">

                                    <img src="<?php echo $item['icon']?>" alt=""
                                        class="bd-placeholder-img flex-shrink-0 me-2 rounded mb-2" width="75"
                                        height="75" role="img" aria-label="Placeholder: 32x32"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff" class="extend_space" />

                                    <div class=" mb-0 small lh-sm mx-2">
                                        <div class="row">
                                            <strong class="text-gray-dark app_title"><?php echo $item['name']?></strong>

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
                    }
                    ?>
                    </div>

                    <?php

                }
                ?>
                </div>

                <span class="text_after_app_section">
                    Games
                </span>

                <!-- <div class="py-3 bg-body shadow-sm row app_section mx-0 px-0 "> -->
                <div class="bg-body shadow-sm row app_section padding_index_app_section mx-0">
                    <?php
                for($i = 0; $i<4;$i++)
                {
                ?>
                    <!-- First Col -->
                    <div class="col-md-3 px-0">

                        <?php
                for($j = 0; $j<4;$j++)
                {
                ?>

                        <?php
                    do{
                        $rand = rand(1,304);
                        $query = "SELECT main_category FROM app_ids_info WHERE id = '$rand'";
                        $res = mysqli_query($conn,$query);
                        $item = $res->fetch_assoc();
                        $check = $item['main_category'];
                    }while ($check == 'Kids' || $check == 'Apps');

                    $query = "SELECT * FROM app_ids_info WHERE id = '$rand'" ;
                    $res = mysqli_query($conn,$query);
                    $item = $res->fetch_assoc(); 
                ?>

                        <!-- App -->
                        <div class="app ps-2">
                            <a href="pages/single_page.php?slug=<?php echo $item['app_slug']?>">
                                <div class="d-flex text-muted pt-3">

                                    <img src="<?php echo $item['icon']?>" alt=""
                                        class="bd-placeholder-img flex-shrink-0 me-2 rounded mb-2" width="75"
                                        height="75" role="img" aria-label="Placeholder: 32x32"
                                        preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff" class="extend_space" />

                                    <div class=" mb-0 small lh-sm mx-2">
                                        <div class="row">
                                            <strong class="text-gray-dark app_title"><?php echo $item['name']?></strong>

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
                    }
                    ?>
                    </div>

                    <?php

                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <div class="row footer">
        <div class="col-md-4 mt-1">
            <a class="navbar-brand heading_bar" href="#"><span class="heading_start_words">APPS ON</span> <span
                    class="heading_windows">WINDOWS</span></a>
        </div>

        <div class="col-md-4 mt-1">
            <span class="mx-3"><a class="bar_li white_text" href="#">Home</a></span> <span
                class="green_text_no_hover bar_li">|</span> <span class="mx-3"><a class="bar_li white_text"
                    href="pages/privacy_policy.php">Privacy Policy</a></span> <span
                class="green_text_no_hover bar_li">|</span> <span class="mx-3"><a class="bar_li white_text"
                    href="pages/contact_us.php">Contact Us</a></span>
        </div>

        <div class="col-md-4 mt-1 footer_copyright text-white">
            Copyright © 2022 Apps Windows PC
        </div>

    </div>
</body>

</html>