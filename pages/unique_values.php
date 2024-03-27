<?php
    include('../connection.php'); 

    // getting unique names
    $query = "SELECT DISTINCT sub_category FROM app_links_new WHERE main_category='Games'";
    $res = mysqli_query($conn,$query);
    
    $count = 0;
    while($item = $res->fetch_assoc()){
        // echo "\n\n";
        // echo $app_name."<br>". $app_slug."<br>". $app_link."<br>". $app_main_category."<br>". $app_sub_category."<br>". $app_rating."<br>". $app_developer."<br>". $app_updated_date."<br>". $app_license."<br>". $app_release_date."<br>". $app_images_url."<br>". $app_version."<br>". $app_desp."<br>". $app_icon;
        // $insertquery = "INSERT INTO app_links_new (app_name, slug, link, main_category, sub_category, rating, developer, updated_date, license, release_date, images_url, version, desp, icon) VALUES ('$app_name', '$app_slug', '$app_link', '$app_main_category', '$app_sub_category', '$app_rating', '$app_developer', '$app_updated_date', '$app_license', '$app_release_date', '$app_images_url', '$app_version', '$app_desp', '$app_icon')";
        // mysqli_query($conn,$insertquery);
        
        echo $item['sub_category']." ";
        $count+=1;
    }
    echo $count;

?>