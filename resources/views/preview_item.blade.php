<!-- main layout with html, head, body and common includes as fontawesome, menu and stuff like that -->
@extends('layouts/basic_template')

<!-- head part - title and css and js includes, also with meta tags -->
@section('title') Dobrodošli na webshop @stop
@section('other_css_links')
    <link rel="stylesheet" href="css/shop/preview.css">

    <link rel="stylesheet" href="css/footer/footer.css">
@stop
<!-- main content of page -->
@section('content')
<!-- basicaly body of page -->
<?php require_once 'includes/pages/shop/preview.php'; ?>
<?php require_once 'includes/pages/footer/footer.php'; ?>
@stop