/**
 * Created by aurelien on 06/08/16.
 */

$(document).ready(function(){
    $('.parallax').parallax();
});

$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
});

function print_stars(param, id) {
    var param_array = JSON.parse(param);;
    var elem = document.getElementById(id);

    for (var j = 0;j < param_array.length; j++) {
        for (var i = 0; i < param_array[j]; i++) {
            if (j == 0)
                elem.innerHTML += '<i class="material-icons">star</i>';
            else if (j == 1)
                elem.innerHTML += '<i class="material-icons">star_half</i>';
            else if (j == 2)
                elem.innerHTML += '<i class="material-icons">star_border</i>'
        }
    }
}