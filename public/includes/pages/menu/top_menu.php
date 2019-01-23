<div id="menu">
    <div id="menu_background">
        <div id="social">
            <div id="social_sentence">
                <h4>NARUČITE ONLINE ILI NAS POZOVITE NA +38733/222-333</h4>
            </div>
            <div id="social_icons">
                <div class="social_i_icon social_i_icon_signup" title="Prijavite se">
                    <a href="site/users_part/login.php">
                        <p>PRIJAVITE SE</p>
                    </a>
                </div>
                <div class="social_i_icon" title="Facebook stranica">
                    <a target="_blank" href=""> <i class="fab fa-facebook-f"></i> </a>
                </div>
                <div class="social_i_icon" title="Twitter stranica">
                    <a target="_blank" href=""> <i class="fab fa-twitter"></i> </a>
                </div>
                <div class="social_i_icon social_i_icon_first" title="Youtube kanal">
                    <a target="_blank" href=""> <i class="fab fa-youtube"></i> </a>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <!-- logo and search -->

        <div id="logo_search">
            <div id="logo_part">
                <a href="index.php"><img src="images/logo.png" alt=""></a>
            </div>
            <div id="search_n_links">
                <div id="s_l_link">
                    <div class="s_l_l_mail" title="Kontaktirajte nas putem emaila">
                        <div class="s_l_l_img">
                            <i class="fas fa-at"></i>
                        </div>
                        <div class="s_l_l_text">
                            <p>support@domain.ba</p>
                        </div>
                    </div>
                    <div class="s_l_l_mail s_l_l_phone" title="Kontaktirajte nas puteme telefona">
                        <div class="s_l_l_img">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="s_l_l_text">
                            <p class="phone_num">+38733/222-333</p>
                        </div>
                    </div>
                </div>

                <!-- search -->
                <div id="search_area">
                    <div id="search_area_img">
                        <i class="fas fa-search"></i>
                    </div>
                    <div id="search_area_input">
                        <input type="text" placeholder="Pretražite ..">
                    </div>
                    <div id="search_area_cats" title="Odaberite kategoriju" onclick="show_categories();">
                        <p id="category_value">Sve kategorije</p>
                        <div id="search_a_c_img">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    <div id="search_area_drop">
                        <div class="search_category" onclick="set_category(0, 'id_of_cat');">
                            <a href="#"><p class="category_link">Sve kategorije</p></a>
                        </div>
                        <div class="search_category" onclick="set_category(1, 'id_of_cat');">
                            <a href="#"><p class="category_link">Prva karegorija artikala</p></a>
                        </div>
                        <div class="search_category" onclick="set_category(2, 'id_of_cat');">
                            <a href="#"><p class="category_link">Druga kategorija artikala</p></a>
                        </div>
                        <div class="search_category" onclick="set_category(2, 'id_of_cat');">
                            <a href="#"><p class="category_link">Treća kategorija artikala</p></a>
                        </div>
                        <div class="search_category" onclick="set_category(2, 'id_of_cat');">
                            <a href="#"><p class="category_link">Četvrta kategorija artikala</p></a>
                        </div>
                        <div class="search_category" onclick="set_category(2, 'id_of_cat');">
                            <a href="#"><p class="category_link">Peta kategorija artikala</p></a>
                        </div>
                    </div>
                </div>

                <!-- cart -->
                <div id="cart">
                    <a href="shop/public/cart/">
                        <div id="cart_w" title="Pregled košarice">
                            <i class="fas fa-shopping-cart"></i>
                            <!-- dinamicly changed -->
                            <div id="cart_circle" title="Broj artikala u košarici 9">
                                <p>9</p>
                            </div>
                        </div>
                    </a>

                    <div id="mobile_menu" onclick="show_mobile_menu();">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>

            </div>
        </div>

        <!-- menu with links -->
        <div id="menu_links">
            <div id="menu_l_links">
                <div id="menu_support" title="Pogledajte više" onclick="show_support();">
                    <a href="#"><p>NOVOSTI</p></a>
                    <div id="menu_s_img">
                        <i id="support_down" class="fas fa-angle-down"></i>
                        <i id="support_up" class="fas fa-angle-up"></i>
                    </div>
                </div>

                <!-- links -->
                <div id="menu_all_links">
                    <div class="menu_a_l_link">
                        <a href="index.php">NASLOVNA</a>
                    </div>
                    <div class="menu_a_l_link">
                        <a href="about_us.php">O KOMPANIJI</a>
                    </div>
                    <!--                <div class="menu_a_l_link">-->
                    <!--                    <a href="">REFERENCE</a>-->
                    <!--                </div>-->
                    <div class="menu_a_l_link">
                        <a href="contact">KONTAKT</a>
                    </div>
                    <div class="menu_a_l_link">
                        <a href="shop">SHOP</a>
                    </div>
                </div>
            </div>
            <div id="drop_support_w">
                <div id="drop_support">
                    <div class="drop_s_cat">
                        <h4>NOVOSTI I USLUGE</h4>
                    </div>
                    <div class="drop_s_subcats">
                        <div class="drop_s_s_link">
                            <a href="new.php?id="><p>Naziv prvog posta</p></a>
                        </div>
                        <div class="drop_s_s_link">
                            <a href="new.php?id="><p>Naziv drugog posta</p></a>
                        </div>
                        <div class="drop_s_s_link">
                            <a href="new.php?id="><p>Naziv trećeg posta </p></a>
                        </div>
                        <div class="drop_s_s_link">
                            <a href="new.php?id="><p> Naziv četvrtog posta</p></a>
                        </div>
                        <div class="drop_s_s_link">
                            <a href="new.php?id="><p> Naziv petog posta </p></a>
                        </div>
                        <div class="drop_s_s_link">
                            <a href="new.php?id="><p>Naziv šestog posta </p></a>
                        </div>
                    </div>
                    <div class="drop_s_cat">
                        <h4>PODRŠKA</h4>
                    </div>
                    <div class="drop_s_subcats">
                        <div class="drop_s_s_link">
                            <a href="new.php?id="><p>Naziv sedmog posta</p></a>
                        </div>
                        <div class="drop_s_s_link">
                            <a href="new.php?id="><p>Naziv osmog posta</p></a>
                        </div>
                        <div class="drop_s_s_link">
                            <a href="new.php?id="><p>Naziv devetog posta</p></a>
                        </div>
                        <div class="drop_s_s_link">
                            <a href="new.php?id="><p>Naziv desetog posta</p></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div id="mobile_right_menu">
    <div id="mobile_r_m_wrapper">
        <div class="mobile_link mobile_link_header">
            <h4>MENU</h4>
        </div>

        <div class="mobile_link">
            <a href="index.php">
                <p>NASLOVNA</p>
            </a>
        </div>
        <div class="mobile_link">
            <a href="about_us.php">
                <p>O KOMPANIJI</p>
            </a>
        </div>
        <div class="mobile_link">
            <a href="contact.php">
                <p>KONTAKT</p>
            </a>
        </div>
        <div class="mobile_link">
            <a href="shop.php">
                <p>SHOP</p>
            </a>
        </div>
        <!--        <div class="mobile_line"></div>-->

        <!-- additional links -->
        <div class="mobile_link" onclick="mobile_submenu(0);">
            <p>RJEŠENJA</p>
            <i class="fas fa-angle-down"></i>
        </div>

        <div class="all_additional">
            <div class="mobile_link mobile_link_additional">
                <a href="">
                    <p>Mreže i komunikacije</p>
                </a>
            </div>
            <div class="mobile_link mobile_link_additional">
                <a href="">
                    <p>Mrežni video nadzor</p>
                </a>
            </div>
            <div class="mobile_link mobile_link_additional">
                <a href="">
                    <p>Antivirusna rješenja</p>
                </a>
            </div>
        </div>

        <div class="mobile_link" onclick="mobile_submenu(1);">
            <p>USLUGE</p>
            <i class="fas fa-angle-down"></i>
        </div>

        <div class="all_additional">
            <div class="mobile_link mobile_link_additional">
                <a href="">
                    <p>Mreže i komunikacije</p>
                </a>
            </div>
            <div class="mobile_link mobile_link_additional">
                <a href="">
                    <p>Mrežni video nadzor</p>
                </a>
            </div>
            <div class="mobile_link mobile_link_additional">
                <a href="">
                    <p>Antivirusna rješenja</p>
                </a>
            </div>
        </div>

    </div>

    <div class="mobile_login">
        <a href="site/users_part/login.php">
            <p>PRIJAVITE SE</p>
        </a>
    </div>

</div>
<div id="mobile_right_shadow" onclick="hide_mobile_menu();"> </div>