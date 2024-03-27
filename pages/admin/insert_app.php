<?php
    include('../../connection.php'); 


    $check= $_POST['check'];


    $s_id= $_POST['s_id']; //1
    $s_name= $_POST['s_name']; //1
    $s_ver= $_POST['s_ver']; // 1
    $s_dev= $_POST['s_dev']; // 1
    $s_update= $_POST['s_update']; // 1
    $s_release= $_POST['s_release']; // 1
    $s_rating= $_POST['s_rating']; // 1
    $s_desp= $_POST['s_desp']; //1
    $s_cat= $_POST['s_cat']; // 1
    $s_votes= $_POST['s_votes']; //1
    $s_donw= $_POST['s_donw']; //1
    $s_sub_cat= $_POST['s_sub_cat']; //1
    $s_icon= $_POST['s_icon']; //1
    $s_ss= $_POST['s_ss']; //1

    // App Link
    $applink = 'https://play.google.com/store/apps/details?id='.$s_id;
    // echo $applink;

    // App Id
    // echo $s_id;

    $slug =  strtolower(str_replace('.','-',$s_id));
    // echo $slug;

    // name
    // echo $s_name;

    // main_cat
    // echo $s_cat;

    // sub_cat
    // echo $s_sub_cat;

    // desp
    // echo $s_desp;

    // version
    // echo $s_ver;


    // release
    // echo $s_release;

    // updated
    // echo $s_update;
    
    // Reviews
    // echo $s_votes;
    
    // downloads
    // echo $s_donw;

    // star
    // echo $s_rating;

    //dev
    // echo $s_dev;
    
    // dev_slug
    $dev_slug = $s_dev;

    $dev_slug = str_replace(' ','-',$dev_slug);
    $dev_slug = str_replace('/','-',$dev_slug);
    $dev_slug = str_replace(':','',$dev_slug);
    $dev_slug = str_replace('.','',$dev_slug);
    $dev_slug = str_replace(',','-',$dev_slug);
    $dev_slug = str_replace('\'','',$dev_slug);
    $dev_slug =  strtolower($dev_slug);

    // echo $dev_slug;


    //icon
    echo $s_icon;
    
    // ss
    $ss = implode("||",$s_ss); 
    echo "Screen".$ss;


    



    // $lname= $_POST['lname'];
    // $email= $_POST['email'];
    // $pswd= $_POST['pswd'];

    // echo $fname;
    // echo $lname;
    // echo $email;
    // echo $pswd;

    echo $check;

    if($check == 1)
        $sql = "INSERT INTO app_ids_info (dataai_link, app_id, combined_version , combined_rating, avg_rating, total_rating, app_link, app_slug, name, main_category, sub_category, desp, icon, combine_img, version, release_date, updated_date, summary, downloads, star, rated_for, paid, changes, dev, dev_slug, keyword, genre_id, status) VALUES ('N/A','$s_id','N/A','N/A','$s_rating','$s_votes','$applink', '$slug', '$s_name', '$s_cat', '$s_sub_cat' ,'$s_desp', '$s_icon','$ss','$s_ver','$s_release','$s_update','N/A','$s_donw','$s_rating','N/A','Free','N/A','$s_dev','$dev_slug','N/A','N/A',1)";
    
    else
        $sql = "UPDATE app_ids_info SET avg_rating = '$s_rating', total_rating = '$s_votes', app_link= '$applink', app_slug='$slug', name='$s_name', main_category='$s_cat', sub_category='$s_sub_cat', desp='$s_desp', version='$s_ver', release_date='$s_release', updated_date='$s_update', downloads='$s_donw', star='$s_rating', dev='$s_dev', dev_slug='$dev_slug' WHERE app_id = '$s_id' ";

        $conn->query($sql);
    echo "data inserted";

?>