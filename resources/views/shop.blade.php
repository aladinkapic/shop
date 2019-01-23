<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts/basic_template')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Pregled svih artikala @stop
@section('other_css_links')
    <link rel="stylesheet" href="css/shop/shop.css">
    <link rel="stylesheet" href="css/footer/footer.css">
@stop
@section('other_js_links')
    <script src="js/shop/categories.js"></script>
@stop
<!-- main content of page -->
@section('content')
    <?php require_once 'includes/pages/shop/shop.php'; ?>
    <?php require_once 'includes/pages/footer/footer.php'; ?>
@stop