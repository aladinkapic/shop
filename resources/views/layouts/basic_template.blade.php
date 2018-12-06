<html>
<head>
    <title>@yield('title')</title>
    @include('includes.html_head.common_head')
    <!-- all css files -->
    @yield('other_css_links')

    <!-- all javascript files -->
    @yield('other_js_links')
</head>
<body>
    <!-- menu includes -->
    <?php require_once 'includes/pages/menu/top_menu.php' ?>
    <div id="content">
        @yield('content')
    </div>
</body>
</html>
