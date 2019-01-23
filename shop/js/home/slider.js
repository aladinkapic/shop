// set up text to print, each item in array is new line
var aText = new Array(
    "Let it snow and enjoy shopping with us !"
);
var iSpeed = 50; // time delay of print out
var iIndex = 0; // start printing array at this posision
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 0; // start scrolling up at this many lines

var iTextPos = 0; // initialise text position
var sContents = ''; // initialise contents variable
var iRow; // initialise current row

function typewriter()
{
    sContents =  ' ';
    iRow = Math.max(0, iIndex-iScrollAt);
    var destination = document.getElementById("typedtext");

    while ( iRow < iIndex ) {
        sContents += aText[iRow++] + '<br />';
    }
    destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
    if ( iTextPos++ == iArrLength ) {
        iTextPos = 0;
        iIndex++;
        if ( iIndex != aText.length ) {
            iArrLength = aText[iIndex].length;
            setTimeout("typewriter()", 500);
        }
        // when it's written :)
        set_slider_text(0);

    } else {
        setTimeout("typewriter()", iSpeed);
    }
}


function set_slider_text(index){
    var text_w = document.getElementById("text_slider").getElementsByClassName("slider_button");
    var left_border = document.getElementById("text_slider").getElementsByClassName("slider_button_left");
    var right_border = document.getElementById("text_slider").getElementsByClassName("slider_button_right");
    var slider_button_value = document.getElementById("slider_button_value");

    for(var i=0; i<text_w.length; i++){
        if(i == index){
            /** show main button wrapper */
            text_w[i].style.display = 'block';

            /** get from left and right **/
            left_border[i].style.left = "0px";
            left_border[i].style.opacity = 1;
            right_border[i].style.right = "0px";
            right_border[i].style.opacity = 1;

            slider_button_value.style.opacity = '1';

        }else{
            text_w[i].style.display = 'none';
        }
    }
}











/*** roll a image for recent posts ***/
function roll(){
    var img = document.getElementById("recent_post_image_img");

    img.style.left = "30px";
    img.style.transform = "rotate(360deg)";
}