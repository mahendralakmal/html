$('.nav-bar li').click(function(e) {
    $('.nav-bar li.active').removeClass('active');
    var $this = $(this);
    if (!$this.hasClass('active')) {
        $this.addClass('active');
    }
    e.preventDefault();
});

$('.nav-tabs li').click(function(e) {
    $('.nav-tabs li.active').removeClass('active');
    var $this = $(this);
    if (!$this.hasClass('active')) {
        $this.addClass('active');
    }
    e.preventDefault();
});

$(document).on('click', '.info_ly .close', function () {
    $(this).parent('div').slideUp();
});

$(document).ready(function(){
    var lastData;

    $(".nav-bar li").click(function(e) {
        loadData($("." + $(this).attr('rel')).html());
        $(".info_ly").focus();
        e.preventDefault();
    });

    $(".callout-actions li").click(function(e) {
        loadData($("." + $(this).attr('rel')).html());
        $(".info_ly").focus();

        // $(window).scrollTop($(".logo").offset().top);
        $("html, body").animate({ scrollTop: $(".logo").offset().top}, 1000);
        e.preventDefault();
    });

    function loadData(data) {
        if(lastData == data) {
            $(".info_ly").slideUp();
            lastData = '';
            return;
        }
        $(".info_ly").slideUp();
        $(".info_ly").html(data);
        $(".info_ly").addClass('jumbotron');
        $(".info_ly").slideDown();
        lastData = data;
    }

    $('.nav-tabs li a').click(function(){
        $("html, body").animate({ scrollTop: $(".nav-tabs").offset().top}, 500);
    });


    $('.nav-tabs li a.tab1').click(function(e) {
        $('.tab-content .tab2,.tab3,.tab4').removeClass('active');
        $('.tab-content .tab1').addClass('active');
    });
    $('.nav-tabs li a.tab2').click(function(e) {
        $('.tab-content .tab1,.tab3,.tab4').removeClass('active');
        $('.tab-content .tab2').addClass('active');
    });
    $('.nav-tabs li a.tab3').click(function(e) {
        $('.tab-content .tab1,.tab2,.tab4').removeClass('active');
        $('.tab-content .tab3').addClass('active');
    });
    $('.nav-tabs li a.tab4').click(function(e) {
        $('.tab-content .tab1,.tab2,.tab3').removeClass('active');
        $('.tab-content .tab4').addClass('active');
    });

    // $(".slides li").click(function(e) {
    //     loadNavData($("." + $(this).attr('rel')).html());
    //     $(".slide-content").focus();
    //     e.preventDefault();
    // });

    // $(".contact-sus").click(function(e) {
    //     loadNavData($("." + $(this).attr('rel')).html());
    //     $(".slide-content").focus();
    //     e.preventDefault();
    // });

    function loadNavData(data) {
        if(lastData == data) {
            $(".slide-content").slideUp();
            lastData = '';
            return;
        }
        $(".slide-content").slideUp();
        $(".slide-content").html(data);
        $(".slide-content").addClass('jumbotron');
        $(".slide-content").slideDown();
        lastData = data;
    }

    $('#dynamic_select').bind('change', function () {
        var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
        return false;
    });

    $('#dynamic_select').addClass('form-control');
});

