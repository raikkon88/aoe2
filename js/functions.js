/**
 * Shows or hides the resource url for the resource that must be inserted
 */
function switchResource(select){
    $("#image_url").hide();
    $("#video_url").hide();
    $("#audio_url").hide();
    if(select.options[select.selectedIndex].value == "CI"){
        $("#image_url").show();
    }
    else if(select.options[select.selectedIndex].value == "CV"){
        $("#video_url").show();
    }
    else if(select.options[select.selectedIndex].value == "CIA"){
        $("#audio_url").show();
        $("#image_url").show();
    }
    else if(select.options[select.selectedIndex].value == "CIL"){
        $("#image_url").show();
    }
}

/**
 * Resizes the content page when
 */
function resizeFooter(){

    var pagePos = $('.page-content').position().top;
    //console.log("posició de la pàgina : " + pagePos);
    var realHeight = $(window).height() - pagePos - $("footer").height();
    //console.log("grandaria del page content : " + realHeight);
    if($("footer").position().top < $(window).height() - $("footer").height()){
        $('.page-content').height(realHeight);
    }
    else{
        $('.page-content').css('height', 'auto');
    }

}

/**
 * On page loads ...
 */
$(window).on('load', function () {
    resizeFooter();
});

/**
 * On Screen resizes ...
 */
$(window).on('resize', function (){
    resizeFooter();
});
