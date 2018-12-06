/**** drop down search categories ***/
var cats_open = false; var used_category_id = 0;

function show_categories(){
    var drop_down = document.getElementById("search_area_drop");

    if(!cats_open){
        drop_down.style.display = 'block';
        cats_open = true;

        // resize to 300px
        resize_categories_part(300);
    }else{
        drop_down.style.display = 'none';
        cats_open = false;
    }
}


function resize_categories_part(pixels){
    var categories = document.getElementById("search_area_cats");
    var search = document.getElementById("search_area_input");

    /** use it to set the width of search area **/
    var search_area_wrapper = document.getElementById("search_area");

    categories.style.width = pixels + 'px';
    search.style.width = (search_area_wrapper.clientWidth - pixels - 41) + 'px';
}


function set_category(what, id_of_cat){
    /** set category id of http **/
    used_category_id = id_of_cat;

    var links = document.getElementById("search_area_drop").getElementsByClassName("category_link");
    var main_category = document.getElementById("category_value");

    /** set width and value of category **/
    if((links[what].clientWidth + 80) <= 220){
        resize_categories_part(220);
    }else resize_categories_part(links[what].clientWidth + 80);
    main_category.innerHTML = links[what].innerHTML;

    /** close categories **/
    show_categories();
}

/*** Huge dropdown support menu ***/

var support_open = false;

function show_support(){
    var support = document.getElementById("drop_support_w");
    var drop_cats = support.getElementsByClassName("drop_s_cat");
    var drop_subcats = support.getElementsByClassName("drop_s_subcats");

    var s_arrow_u = document.getElementById("support_up");
    var s_arrow_d = document.getElementById("support_down");

    if(!support_open){
        support_open = true;

        var height = 0;
        for(var i=0; i< drop_subcats.length; i++){
            height += drop_subcats[i].clientHeight;
        }

        // add cats height
        height += drop_cats.length * 40;
        // add margins
        height += 50;

        support.style.height = height + 'px';
        support.style.borderBottom = "2px solid #00C6C7";

        //change arrows
        s_arrow_d.style.display = 'none';
        s_arrow_u.style.display = 'block';
    }else{
        support_open = false;
        support.style.height = '0px';
        support.style.borderBottom = "0px";

        //change arrows
        s_arrow_d.style.display = 'block';
        s_arrow_u.style.display = 'none';
    }

}



/****** Footer scroll to top *******/

function scrol_top(){
    //window.scrollTo(0, 0);
    // document.location.href = "#top";
    console.log("Goint to the top ..");
    scrollTo(document.body, 0, 500);
}


function scrollTo(element, to, duration) {
    var start = element.scrollTop,
        change = to - start,
        currentTime = 0,
        increment = 20;

    var animateScroll = function(){
        currentTime += increment;
        var val = Math.easeInOutQuad(currentTime, start, change, duration);
        element.scrollTop = val;
        if(currentTime < duration) {
            setTimeout(animateScroll, increment);
        }
    };
    animateScroll();
}

//t = current time
//b = start value
//c = change in value
//d = duration
Math.easeInOutQuad = function (t, b, c, d) {
    t /= d/2;
    if (t < 1) return c/2*t*t + b;
    t--;
    return -c/2 * (t*(t-2) - 1) + b;
};




/** mobile menu **/

function show_mobile_menu(){
    var menu = document.getElementById("mobile_right_menu");
    var menu_shadow = document.getElementById("mobile_right_shadow");

    var main_body = document.getElementById("main_body");

    menu.style.right = "0px";
    menu_shadow.style.left = '0px';

    main_body.style.left = '-300px';
    main_body.style.overflow = 'hidden';
}


function hide_mobile_menu(){
    var window_width = window.innerWidth;

    var menu = document.getElementById("mobile_right_menu");
    var menu_shadow = document.getElementById("mobile_right_shadow");

    var main_body = document.getElementById("main_body");

    menu.style.right = "-350px";
    menu_shadow.style.left = - window_width + 'px';

    main_body.style.left = '0px';
    main_body.style.overflow = 'auto';
}

var current_open = -1;


function mobile_submenu(index){
    hide_all_mobiles();

    if(current_open == index){
        current_open = -1;
        return;
    }

    var additionals = document.getElementById("mobile_right_menu").getElementsByClassName("all_additional");

    for(var i=0; i<additionals.length; i++){
        if(i == index){
            additionals[i].style.height = "auto";
            break;
        }
    }


    current_open = index;
}

function hide_all_mobiles(){
    var additionals = document.getElementById("mobile_right_menu").getElementsByClassName("all_additional");

    for(var i=0; i<additionals.length; i++){
        additionals[i].style.height = '0px';
    }
}




/****** blueprint ******/

function who_made_it(){
    console.log("Aladin Kapić, BE");
    console.log("Contact mail : kaapiic@hotmail.com");
    console.log("Phone : +38761683449");
}