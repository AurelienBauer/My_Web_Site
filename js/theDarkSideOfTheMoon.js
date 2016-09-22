/**
 * Created by aurelien on 22/09/16.
 */

(function()
{
    var triangle = document.getElementById("triangle");
    var length1 = triangle.getTotalLength();

    var whiteLine = document.getElementById("white_line");
    var length2 = triangle.getTotalLength();

    var rainbow = document.getElementById("rainbow");
    var length3 = triangle.getTotalLength();

    triangle.style.strokeDasharray = length1;
    whiteLine.style.strokeDasharray = length2;
    rainbow.style.strokeDasharray = length3;

    triangle.style.strokeDashoffset = length1;
    whiteLine.style.strokeDashoffset = length2;

    window.addEventListener("scroll", myFunction);

    function myFunction() {

        var scrollpercent = (document.body.scrollTop + document.documentElement.scrollTop) / (document.documentElement.scrollHeight - 1000 - document.documentElement.clientHeight);

        var draw1 = length1 *  (scrollpercent);

        if (length1 - draw1 >= 0) {
            triangle.style.strokeDashoffset = length1 - draw1;
            whiteLine.style.strokeDashoffset = length2 + draw1;
        }
        else {
            triangle.style.strokeDashoffset = 0;
            whiteLine.style.strokeDashoffset = 0;
        }

        if (length3 - draw1 <= 0) {
            rainbow.style.strokeDashoffset = (length3 - draw1);
        }
        else {
            rainbow.style.strokeDashoffset = 0;
        }
    }
})();
