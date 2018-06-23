<?php
require 'connect.php';

$Favorite = "SELECT b_id,b_name,b_img FROM `book` WHERE 'b_date'=DATE(2018-01-13) limit 8";
$res_best = mysqli_query($conn, $Favorite);
$res_best = mysqli_fetch_all($res_best, MYSQLI_ASSOC);
// tim kiem
$Search = "SELECT b_img FROM `book` WHERE 'b_date'=DATE(2018-01-13) limit 8";
$res_best = mysqli_query($conn, $Favorite);
$res_best = mysqli_fetch_all($res_best, MYSQLI_ASSOC);

$index_ForeignLanguage = "SELECT b_id,b_name,b_img FROM `book` WHERE cate_id='A' limit 4";
$res_ForeignLanguage = mysqli_query($conn, $index_ForeignLanguage);
$res_ForeignLanguage = mysqli_fetch_all($res_ForeignLanguage, MYSQLI_ASSOC);

$index_Encyclopedias = "SELECT b_id,b_name,b_img FROM `book` WHERE cate_id='P' limit 4";
$res_Encyclopedias = mysqli_query($conn, $index_Encyclopedias);
$res_Encyclopedias = mysqli_fetch_all($res_Encyclopedias, MYSQLI_ASSOC);

$index_Sciencefiction = "SELECT b_id, b_name,b_img FROM `book` WHERE cate_id='V' limit 4";
$res_Sciencefiction = mysqli_query($conn, $index_Sciencefiction);
$res_Sciencefiction = mysqli_fetch_all($res_Sciencefiction, MYSQLI_ASSOC);

$index_Major = "SELECT b_id,b_name,b_img,b_des FROM `book` WHERE cate_id='G' limit 4";
$res_Major = mysqli_query($conn, $index_Major);
$res_Major = mysqli_fetch_all($res_Major, MYSQLI_ASSOC);

$show_Encyclopedias = "SELECT b_id, b_name, b_img,b_des FROM `book` WHERE cate_id='P'";
$Encyclopedias = mysqli_query($conn, $show_Encyclopedias);
$Encyclopedias = mysqli_fetch_all($Encyclopedias, MYSQLI_ASSOC);

$show_ForeignLanguage = "SELECT b_id, b_name,b_img,b_des FROM `book` WHERE cate_id='A'";
$ForeignLanguage = mysqli_query($conn, $show_ForeignLanguage);
$ForeignLanguage = mysqli_fetch_all($ForeignLanguage, MYSQLI_ASSOC);

$show_Specialistpress = "SELECT b_id,b_name,b_img,b_des FROM `book` WHERE cate_id='K'";
$Specialistpress = mysqli_query($conn, $show_Specialistpress);
$Specialistpress = mysqli_fetch_all($Specialistpress, MYSQLI_ASSOC);

$show_Sciencefiction = "SELECT b_id, b_name,b_img,b_des FROM `book` WHERE cate_id='V'";
$Sciencefiction = mysqli_query($conn, $show_Sciencefiction);
$Sciencefiction = mysqli_fetch_all($Sciencefiction, MYSQLI_ASSOC);

$show_Major = "SELECT b_id,b_name,b_img,b_des FROM `book` WHERE cate_id='G'";
$Major = mysqli_query($conn, $show_Major);
$Major = mysqli_fetch_all($Major, MYSQLI_ASSOC);

//Lưu biến id từ link truyền vào
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_detail = "SELECT 'b_id', 'b_name', 'b_des','b_img','b_img1','b_img2','b_img3','b_img4' FROM 'book' WHERE 'b_id' = '$id'";
    $detail = mysqli_query($conn, $sql_detail);
    $detail = $detail->fetch_all(MYSQLI_ASSOC);

}
$user_sql = "SELECT * FROM user";
$user_query = mysqli_query($conn, $user_sql);
$user = $user_query->fetch_all(MYSQLI_ASSOC);
