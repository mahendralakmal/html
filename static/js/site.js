$(document).ready(function() {  
 
    var id = '#dialog';
         
    /*Get the screen height and width*/
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
         
    /*Set heigth and width to mask to fill up the whole screen*/
    $('#mask').css({'width':maskWidth,'height':maskHeight});
     
    /*transition effect*/
    $('#mask').fadeIn(10); 
    $('#mask').fadeTo("slow",0.4);  
         
    /*Get the window height and width*/
    var winH = $(window).height();
    var winW = $(window).width();
                   
    /*Set the popup window to center*/
    $(id).css('top',  winH/2-$(id).height()/2);
    $(id).css('left', winW/2-$(id).width()/2);
         
    /*transition effect*/
    $(id).fadeIn(1000);      
    $(id).fadeTo("slow",0.9);    
         
    /*if close button is clicked*/
    $('.window .close').click(function (e) {
        /*Cancel the link behavior*/
        e.preventDefault();
         
        $('#mask').hide();
        $('.window').hide();
    });    
});

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
$(document).on('click', '.tab_info_ly .close', function () {
    $(this).parent('div').slideUp();
});

$(document).on('click', '.slide-content #sus-cntry', function () {
    $(this).parent('div').slideUp();
});

$(".video-content").load("../includes/sport-unleash-video-section.html");
$(".enquir").load("../includes/enquiry.html");
$("footer").load("../includes/footer.html");

$(document).ready(function(){
    var lastData;
    /******** THIS IS FOR THE NAVIGATION ********/
    $(".nav-bar li").click(function(e) {
        loadData($("." + $(this).attr('rel')).html());
        $(".info_ly").focus();        
        e.preventDefault();
    });

    $(".callout-actions li").click(function(e) {
        loadData($("." + $(this).attr('rel')).html());
        $(".info_ly").focus();
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

    $('.nav-tabs li').click(function(){
        loadTabData($("." + $(this).attr('rel')).html());
        $(".tab_info_ly").focus();
        $("html, body").animate({ scrollTop: $(".nav-tabs").offset().top}, 500);        
        e.preventDefault();
    });

    function loadTabData(data) {
        if(lastData == data) {
            $(".tab_info_ly").slideUp();
            lastData = '';
            return;
        }
        $(".tab_info_ly").slideUp();
        $(".tab_info_ly").html(data);
        $(".tab_info_ly").addClass('jumbotron');
        $(".tab_info_ly").slideDown();
        lastData = data;
    }

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
    /******** THIS IS FOR THE CONTACT A SUS BANNER TO LOAD THE COUNTRY LIST ********/
    $(".contact-sus").click(function(e) {
        $(".slide-content").load("../includes/country-list.html"),1000;
        loadCountryData($("." + $(this).attr('rel')).html());
        $("html, body").animate({ scrollTop: $(".slide-content").offset().top}, 1000);
        $(".slide-content").focus();
        e.preventDefault();
    });

    function loadCountryData(data) {
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