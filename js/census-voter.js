/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    var host = "http://localhost/census_electoral/";
    $("#btn-a").click(function () {
        $("#load_voter").load(host + "html_block.php?op=1");
    });
    function cargar(div, desde)
    {
        $(div).load(desde);
    }
});

function justNumbers(e)
{
    var keynum = window.event ? window.event.keyCode : e.which;
    if ((keynum == 8))
        return true;
    return /\d/.test(String.fromCharCode(keynum));
}