$(document).ready(function() {
    $('#sidebar').css('min-height', $(window).height());
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });
    $(".btn-head").on("click", function() {
        if ($(this).closest('.menu-div ').find('.menu-content').css('display') == 'none') {
            $(this).css('background', '#FFA800');
            $(this).find('.arrow-image').attr('src', 'assets/images/arrow-down-black.png');
        } else {
            $(this).css('background', '#fff');
            $(this).find('.arrow-image').attr('src', 'assets/images/arrow-right-black.png');
        }
        $(this).closest('.menu-div ').find('.menu-content').toggle('slow');
    });
});