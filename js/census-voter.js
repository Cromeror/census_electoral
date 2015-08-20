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
    $("#submit_pet").click(function () {
        $("#result_serv").load(host + "/inc/html_block_service.php?doc=" + $("#doc").val());
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