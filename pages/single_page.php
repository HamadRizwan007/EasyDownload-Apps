<?php
    include('../connection.php'); 

    $slug = $_GET['slug'];
    $query = "SELECT * FROM app_ids_info WHERE app_slug = '$slug'";
    $res = mysqli_query($conn,$query);
    $shown_item = $res->fetch_assoc(); 


    // $link = $shown_item['app_link'];
    // echo $link;
    // $category = $shown_item['sub_category']; 

// do{
//     $rand1 = rand(1,304);
//     $query = "SELECT sub_category FROM app_links WHERE app_id = '$rand1'";
//     $res = mysqli_query($conn,$query);
//     $items = $res->fetch_assoc();
//     $check = $items['sub_category'];
// }while ($check != $category);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!--Social Media Icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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

    <div class="container">
        <div class="col-md-13">


            <!-- App Section -->

            <div class="row margin_top_bottom">

                <div class="mt-4 mb-0 col-md-9">
                    <span class="px-0">
                        <ul class="breadcrumb mb-1 px-0 mx-3">
                            <li><a class="ul_colorwhite" href="../">Home</a></li>
                            <li><a class="ul_colorwhite"
                                    href="category.php?cat=<?php echo $shown_item['sub_category']?>"><?php echo $shown_item['sub_category']?></a>
                            </li>
                            <li><a class="ul_colorgreen" href="#"><?php echo $shown_item['name']?></a></li>
                            <!-- <li>Italy</li> -->
                        </ul>
                    </span>

                    <div class="py-3 bg-body shadow-sm row app_section mx-2 px-4">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="image" src="<?php echo $shown_item['icon']?>" alt="">

                            </div>

                            <div class="col">

                                <span class="app_title_single"><?php echo $shown_item['name']?></span>
                                <span class="app_version_single"><?php echo $shown_item['version']?><br></span>
                                <span class="">
                                    <label class="rating-label float-start ma rating_box pb-1">
                                        <input class="rating" max="5"
                                            oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
                                            step="0.5" style="--value:<?php echo $shown_item['star']?>" type="range"
                                            value="2.5">
                                        <!-- <span>4.4</span> -->
                                    </label>
                                </span>

                                <span class="app_rating_single px-2"><?php echo $shown_item['star']?></span>
                                <span class="green_text_no_hover">|</span>
                                <span class="ms-2 app_downloads_single"><?php echo $shown_item['downloads']?></span>
                                <span class="app_downloads_single">Download<br></span>

                                <span class="app_developer_single">Developer:</span>
                                <span class="app_downloads_single mx-1"><?php echo $shown_item['dev']?></span>

                                <span class="app_developer_single ms-2">Category:</span>
                                <span
                                    class="app_downloads_single ms-2"><?php echo $shown_item['sub_category']?><br></span>

                                <script >
                                  
                                </script>

                                <button type="button"
                                    class="download_btn mt-3 mx-0 position-right"
                                    id = "btn_windows" >Download for
                                    Windows</button>

                            </div>

                            <hr class="hr_after_app">

                            <?php
                        $images = $shown_item['combine_img'];
                        $images_arr = explode('||',$images);
                        // print_r($images_arr);
                  ?>

                            <div class="scrollmenu pt-3 me-2">
                                <?php foreach ($images_arr as $img){?>

                                <img src="<?php echo $img?>" class="img_ss" alt="...">
                                <?php }?>

                            </div>
                            <!-- <div class="scrollmenu mt-4 me-2"> -->

                            <!-- 
                                <img src="images/icon.png" class=" img_ss" alt="...">
                                <img src="images/icon.png" class=" img_ss" alt="...">
                                <img src="images/icon.png" class=" img_ss" alt="...">
                                <img src="images/icon.png" class=" img_ss" alt="...">
                                <img src="images/icon.png" class=" img_ss" alt="..."> -->


                            <!-- </div> -->

                            <hr class="hr_after_app">
                        </div>
                        <p class="text_single_page">
                            <?php echo nl2br($shown_item['desp'])?>
                        </p>

                        <hr class="hr_after_app mt-1 mb-4">

                        <p class="tags_text_single_page">Tags</p>

                        <div class="row px-4">
                            <?php if($shown_item['keyword']!='N/A'){?>
                            <span class="tag_boxes"><?php echo $shown_item['keyword']?></span>
                            <?php } ?>

                            <span class="tag_boxes"><?php echo $shown_item['rated_for']?></span>
                            <span class="tag_boxes"><?php echo $shown_item['paid']?></span>
                            <span class="tag_boxes"><?php echo $shown_item['genre_id']?></span>
                        </div>


                        <hr class="hr_after_app mt-3 mb-4">

                        <p class="tags_text_single_page">Additional App Information</p>
                        <div class="row px-4">
                            <div class="col">
                                <div class="row additional_headings">
                                    Category:
                                </div>
                                <div class="row additional_text">
                                    <?php echo $shown_item['sub_category']?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row additional_headings">
                                    Latest Version:
                                </div>
                                <div class="row additional_text">
                                    <?php echo $shown_item['version']?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row additional_headings">
                                    Developer:
                                </div>
                                <div class="row additional_text">
                                    <?php echo $shown_item['dev']?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row additional_headings">
                                    Available on:
                                </div>
                                <div class="row additional_text">
                                    <img class="w-auto ps-0" src="../images/Google_Play-Logo.wine 1.png" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row additional_headings">
                                    Requirements:
                                </div>
                                <div class="row additional_text">
                                    <?php echo $shown_item['rated_for']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Column -->

                <div class="col mt-1">
                    <span class="title_category mx-3 px-0">
                        Discover Apps
                    </span>

                    <div class="text_privacy mx-2 py-3 bg-body shadow-sm row app_section mx--1 px-4">

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
                                            <strong class="text-gray-dark app_title"><?php echo $item['name']?></strong>

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

        $(document).ready(function(){

                $("#btn_windows").on("click", function(){
                    // alert(link);
                    window.location = '<?php echo $shown_item['app_link'] ?>';
                }); 

                });
    </script>