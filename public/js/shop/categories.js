// show subcategories

var currently_open = -2;

function get_subcategory(index){
    var subcategories = document.getElementById("shop_items").getElementsByClassName("subcategories");
    var arrow = document.getElementById("shop_items").getElementsByClassName("fa-icon");

    if(index == currently_open){
        index = -1;
        currently_open = -2;
    }

    for(var i=0; i<subcategories.length; i++){
        if(i == index){
            var all_subcategories = subcategories[i].getElementsByClassName("subcategory_links");
            currently_open = index;
            arrow[i].className = "fas fa-icon fa-angle-up";
            var height = 0;
            for(var j=0; j<all_subcategories.length; j++){
                height += all_subcategories[i].clientHeight;
            }

            subcategories[i].style.height = height + 'px';
        }else{
            subcategories[i].style.height = '0px';
            arrow[i].className = "fas fa-icon fa-angle-down";
        }
    }
}