
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
