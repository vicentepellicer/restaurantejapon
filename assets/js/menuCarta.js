$(window).on('load',function () {
    $('#ramen-food').hide();
    $('#dimsum-food').show();
    $('#bebida-food').hide();

    if($('#ramen-b').click(function(){
        $('#ramen-food').show();
        $('#dimsum-food').hide();
        $('#bebida-food').hide();
    }));

    if ($('#dimsum-b').click(function () {
        $('#ramen-food').hide();
        $('#dimsum-food').show();
        $('#bebida-food').hide();
    }));

    if ($('#bebida-b').click(function () {
        $('#ramen-food').hide();
        $('#dimsum-food').hide();
        $('#bebida-food').show();
    }));
});