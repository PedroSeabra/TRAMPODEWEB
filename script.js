window.onload=function(){

    $(document).ready(function(){
        $('#classificacao').after('<ul id="nav" class="justify-content-center pagination"></ul>');
        var rowsShown = 10;
        var rowsTotal = $('#classificacao tbody tr').length;
        var numPages = rowsTotal/rowsShown;
        for(i = 0;i < numPages;i++) {
            var pageNum = i + 1;
            $('#nav').append('<li id="li'+i+'" class="page-item"></li>');
            $('#li'+i+'').append('<a class="bg-dark text-light page-link" href="#" rel="'+i+'">'+pageNum+'</a> ');
        }
        $('#classificacao tbody tr').hide();
        $('#classificacao tbody tr').slice(0, rowsShown).show();
        $('#nav a:first').addClass('active');
        $('#nav a').bind('click', function(){

            $('#nav a').removeClass('active');
            $(this).addClass('active');
            var currPage = $(this).attr('rel');
            var startItem = currPage * rowsShown;
            var endItem = startItem + rowsShown;
            $('#classificacao tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
            css('display','table-row').animate({opacity:1}, 300);
        });
    });

}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});