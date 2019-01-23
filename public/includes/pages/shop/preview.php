<div id="article">
    <div id="image_short">
        <div id="huge_images">
            <div id="huge_images_img">
                <img class="single_p_image" src="images/2.png" alt="">
            </div>

            <div class="image_arrows">
                <div class="image_arrow" title="Prethodna slika" onclick="previous_image();">
                    <img src="images/icons/back.png" alt="">
                </div>
                <div class="image_arrow">
                    <div id="arrow_circle"></div>
                </div>
                <div class="image_arrow" title="Sljedeća slika" onclick="next_image();">
                    <img src="images/icons/next.png" alt="">
                </div>
            </div>
        </div>


        <div id="short_description">
            <div id="short_d_header">
                <h3>Naslov artikla</h3>
            </div>
            <div id="short_d_desc" class="short_d_desc">
                <h5>Kategorija / Podkategorija</h5>
            </div>
            <div id="short_d_id" class="short_d_desc">
                <h5>Šifra artikla : 5128</h5>
            </div>

            <div id="available_cart">
                <div id="available">
                    <h5>DOSTUPNOST : <span class="ava">DOSTUPNO</span> (13 u skladištu)</h5>
                </div>
                <div id="calculate">
                    <div id="number_of_articles">
                        <div id="decrease" title="Smanjite za jedan" onclick="decrease();">
                            <img src="images/icons/remove.png" alt="">
                        </div>
                        <div id="input_forms">
                            <input id="current_value" type="text" value="1" readonly>
                            <input id="price" type="hidden" value="123">
                            <input id="max_value" type="hidden" value="12">
                        </div>
                        <div id="increase" title="Povećajte za jedan" onclick="increase();">
                            <img src="images/icons/add.png" alt="">
                        </div>
                    </div>
                    <div id="add_to_cart" title="DODAJTE U KOŠARICU" onclick="add_to_cart()">
                        <div class="add_to_cart_c">
                            <img src="images/icons/shopping-cart.png" alt="">
                        </div>
                        <div class="add_to_cart_c add_to_cart_c_text">
                            <p>KOŠARICA</p>
                        </div>

                    </div>
                </div>

                <div id="additional_links">
                    <div class="additional_links_chapter">
                        <p>Ukupno za platiti <span id="total_value">150 BAM</span></p>
                    </div>
                    <div class="additional_links_chapter">
                        <p id="atention"><span>NAPOMENA</span> Za prikaz veleprodajnih cijena morate biti prijavljeni kao partner firme !</p>
                    </div>
                </div>


                <!--            <div id="additional_links2" class="additional_linkss">-->
                <!--                <div class="additional_l_l" title="Dodajte ovaj artikal te ga pogledajte kasnije">-->
                <!--                    <div class="additional_l_link">-->
                <!--                        <img src="images/compare.png" alt="">-->
                <!--                    </div>-->
                <!--                    <div class="additional_l_link additional_l_link_text">-->
                <!--                        <p>PODIJELITE</p>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div> -->
            </div>
        </div>
    </div>

    <!-- three links -->

    <div id="product_descriptions">
        <div class="product_des_links" onclick="show_description(0);" title="Pogledajte detaljni opis artikla">
            <p>OPIS ARTIKLA</p>
        </div>
    </div>


    <!-- huge product descriptions -->

    <div class="product_d_desc" id="product_d_first">
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
</div>

