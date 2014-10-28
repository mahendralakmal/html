$(".nav-bar li").click(function(t) {
    $(".nav-bar li.active").removeClass("active");
    var a = $(this);
    a.hasClass("active") || a.addClass("active"), t.preventDefault()
}), 

$(".nav-tabs li").click(function(t) {
    $(".nav-tabs li.active").removeClass("active");
    var a = $(this);
    a.hasClass("active") || a.addClass("active"), t.preventDefault()
}), 

$(document).on("click", ".info_ly .close", function() {
    $(this).parent("div").slideUp()
}), $(document).on("click", ".slide-content #sus-cntry", function() {
    $(this).parent("div").slideUp()
}), 
$(".video-content").load("../includes/sport-unleash-video-section.html");
$(".enquir").load("../includes/enquiry.html");
$("footer").load("../includes/footer.html");
$(document).ready(function() {
    function t(t) {
        return n == t ? ($(".info_ly").slideUp(), void(n = "")) : ($(".info_ly").slideUp(), $(".info_ly").html(t), $(".info_ly").addClass("jumbotron"), $(".info_ly").slideDown(), void(n = t))
    }

    function a(t) {
        $(".slide-content").slideUp(), 
        $(".slide-content").html(t), 
        $(".slide-content").addClass("jumbotron"), 
        $(".slide-content").slideDown(), n = t
    }
    var n;
    $(".nav-bar li").click(function(a) {
        t($("." + $(this).attr("rel")).html()), $(".info_ly").focus(), a.preventDefault()
    }), 


    $(".callout-actions li").click(function(a) {
        t($("." + $(this).attr("rel")).html()), $(".info_ly").focus(), $("html, body").animate({
            scrollTop: $(".logo").offset().top
        }, 1e3), a.preventDefault()
    }), 


    $(".nav-tabs li a").click(function() {
        $("html, body").animate({
            scrollTop: $(".nav-tabs").offset().top
        }, 500)
    }), 

    $(".nav-tabs li a.tab1").click(function() {
        $(".tab-content .tab2,.tab3,.tab4").removeClass("active"), $(".tab-content .tab1").addClass("active")
    }), 
    $(".nav-tabs li a.tab2").click(function() {
        $(".tab-content .tab1,.tab3,.tab4").removeClass("active"), $(".tab-content .tab2").addClass("active")
    }), 
    $(".nav-tabs li a.tab3").click(function() {
        $(".tab-content .tab1,.tab2,.tab4").removeClass("active"), $(".tab-content .tab3").addClass("active")
    }), 
    $(".nav-tabs li a.tab4").click(function() {
        $(".tab-content .tab1,.tab2,.tab3").removeClass("active"), $(".tab-content .tab4").addClass("active")
    }), 

    $(".contact-sus").click(function(t) {
        $(".slide-content").load("../includes/country-list.html"), 1e3, a($("." + $(this).attr("rel")).html()), $("html, body").animate({
            scrollTop: $(".slide-content").offset().top
        }, 1e3), $(".slide-content").focus(), t.preventDefault()
    }), $("#dynamic_select").bind("change", function() {
        var t = $(this).val();
        return t && (window.location = t), !1
    }), $("#dynamic_select").addClass("form-control")
});
