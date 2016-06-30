/**
 * Created by Dani on 22/06/2016.
 */
$(function () {
    var $contextMenu = $("#contextMenu");
    var $computerClicked;
    $("body").on("contextmenu", ".computer", function (e) {
        $computerClicked = $(this).attr('data-id');
        var pageWidth = $(window).width();
        var menuWidth = $contextMenu.width();
        var leftPosition = e.pageX + menuWidth > pageWidth ? e.pageX - menuWidth : e.pageX;

        $('.headerMenu').html($computerClicked + ' - Situacion Actual');
        $contextMenu.css({
            display: "block",
            left: leftPosition,
            top: e.pageY
        });
        return false;
    });

    $contextMenu.on("click", "a", function () {
        $target_a = $(this);
        $action = $target_a.find('.icon-menu-txt');
        switch ($.trim($action.text())) {
            case 'Dañada':
                var objC = $('#' + $computerClicked).find('#matrix');
                objC.attr('src','./img/red.png');
                break;
            case 'Reparación':
                var objC = $('#' + $computerClicked).find('#matrix');
                objC.attr('src','./img/yellow.png');
                break;
            case 'Disponible':
                var objC = $('#' + $computerClicked).find('#matrix');
                objC.attr('src','./img/green.png');
                break;
            case 'Liberar':
                var objC = $('#' + $computerClicked).find('#matrix');
                objC.attr('src','./img/gray.png');
                break;
        }
    });
    $(document).click(function () {
        $contextMenu.hide();
        $areaLap.hide();
    });
    //----------------------- Area laptops--------------------------------------------//
    var $areaLap = $('#contextMenu.laps');
    var $lapClicked;
    $('body').on("contextmenu", ".laptop", function(e){
     $lapClicked = $(this).attr('data-id');
        var pageWidth = $(window).width();
        var menuWidth = $contextMenu.width();
        var leftPosition = e.pageX + menuWidth > pageWidth ? e.pageX - menuWidth : e.pageX;

        $('.headerMenu').html($lapClicked + ' - Situacion Actual');
        $areaLap.css({
            display: "block",
            left: leftPosition,
            top: e.pageY
        });
        return false;
    });

    $areaLap.on("click", "a", function () {
        $target_a = $(this);
        $action = $target_a.find('.icon-menu-txt');
        switch ($.trim($action.text())) {
            case 'Disponible':
                var objL = $('#' + $lapClicked).find('#laps');
                objL.attr('src','./img/lap_green.png');
                break;
            case 'Liberar':
                var objL = $('#' + $lapClicked).find('#laps');
                objL.attr('src','./img/lap_gray.png');
                break;
        }
    });

});
