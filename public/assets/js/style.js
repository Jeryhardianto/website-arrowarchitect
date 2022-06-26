$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
        $('#dismiss-sidebar').removeClass('active-dismiss');
        $('#sidebarCollapse').removeClass('hide');
    });

    // $('#sidebarCollapse').on('click', function () {
    //     $('#sidebar').addClass('active');
    //     $('.overlay').addClass('active');
    //     $('#sidebarCollapse').addClass('hide');
    //     $('.collapse.in').toggleClass('in');
    //     $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    // });
    $('#klik').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('#dismiss-sidebar').addClass('active-dismiss');
        $('#sidebarCollapse').addClass('hide');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

    $('#dismiss-sidebar').on('click', function () {
        $('#sidebar').removeClass('active');
        $('#dismiss-sidebar').removeClass('active-dismiss');
        $('.overlay').removeClass('active');
        $('#sidebarCollapse').removeClass('hide');
    });
});
