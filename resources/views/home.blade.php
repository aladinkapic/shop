<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts/basic_template')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Dobrodošli na webshop @stop
@section('other_css_links')
    <link rel="stylesheet" href="css/home/slider.css">
    <link rel="stylesheet" href="css/home/highlighted.css">
    <link rel="stylesheet" href="css/home/cool.css">
    <link rel="stylesheet" href="css/home/recent_post.css">
    <link rel="stylesheet" href="css/footer/footer.css">
@stop
@section('other_js_links')
    <!-- snowing effect : enable or disable, depends on user :) -->
    <script src="snow_effect/snowstorm.js"></script>
    <script>snowStorm.excludeMobile = false;</script>

    <!-- huge slider script -->
    <!-- inside slider you can find on mouse over script for recent posts -->
    <script src="js/home/slider.js"></script>
@stop
<!-- main content of page -->
@section('content')
    <!-- basicaly body of page -->
    <img id="background_image" src="images/winter_2.jpg" alt="">
    
    <?php require_once 'includes/pages/home/slider.php'; ?>
    <?php require_once 'includes/pages/home/highlighted.php'; ?>
    <?php require_once 'includes/pages/home/cool.php'; ?>
    <?php require_once 'includes/pages/home/recent_post.php'; ?>
    <?php require_once 'includes/pages/footer/footer.php'; ?>
@stop