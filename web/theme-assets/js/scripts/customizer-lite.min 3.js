!function(e,a,o){"use strict";o(".customizer-toggle").on("click",function(){o(".customizer").toggleClass("open")}),o(".customizer-close").on("click",function(){o(".customizer").removeClass("open")});var s=o("body"),t=o("nav.header-navbar"),i=o("div.header-navbar"),n=o("footer"),r=o(".main-menu"),l=(o(".main-menu-content"),s.data("menu")),c=(o(".main-menu").hasClass("menu-dark"),!1);t.hasClass("navbar-semi-light"),t.hasClass("navbar-semi-dark"),"horizontal-menu"==l&&(c=!0,o(".sidebar-color-options").hide().prev("h5").hide().prev("hr").hide(),o(".cz-bg-image").hide().prev("h5").hide().prev("hr").hide(),o(".sidebar-image-visibility").hide().prev("h5").hide()),"vertical-overlay-menu"===l&&(o(".color-options a#color-opt-3").tab("show"),"vertical-content-menu"===l&&o(".color-options a#color-opt-4").tab("show"),"vertical-compact-menu"!==l&&"vertical-overlay-menu"!==l||o("#boxed-layout").parent(".custom-checkbox").attr("style","display: none !important"),o(".color-options .nav-semi-light").parent(".nav-item").attr("style","display: none !important"),o(".color-options .nav-semi-dark").parent(".nav-item").attr("style","display: none !important")),"vertical-overlay-menu"===l&&(o("#collapsed-sidebar").prop("checked",!0),o("#static-layout").parent(".custom-checkbox").attr("style","display: none !important"),o("#static-navigation").parent(".custom-checkbox").attr("style","display: none !important"));a.querySelector("#collapsed-sidebar");o("#collapsed-sidebar").on("change",function(){o.app.menu.toggle(),setTimeout(function(){o(e).trigger("resize")},100)}),o("#fixed-layout").on("click",function(){!0===o(this).prop("checked")?(s.hasClass("fixed-navbar")||!1!==c||s.addClass("fixed-navbar"),t.hasClass("fixed-top")||!1!==c||t.addClass("fixed-top"),n.hasClass("fixed-bottom")||n.addClass("fixed-bottom"),i.hasClass("navbar-fixed")||!0!==c||i.addClass("navbar-fixed"),i.hasClass("menu-fixed")||i.addClass("menu-fixed"),r.hasClass("menu-fixed")||r.addClass("menu-fixed"),s.removeClass("boxed-layout"),t.removeClass("navbar-static-top"),i.removeClass("navbar-static"),r.removeClass("menu-static"),n.removeClass("footer-static"),s.removeClass("container"),t.removeClass("container"),t.removeClass("boxed-layout")):n.removeClass("fixed-bottom")}),o("#boxed-layout").on("click",function(){!0===o("#fixed-layout").prop("checked")&&o("#fixed-layout").trigger("click"),!0===o(this).prop("checked")?(s.hasClass("container boxed-layout")||s.addClass("container boxed-layout"),t.hasClass("container boxed-layout")||t.addClass("container boxed-layout"),r.hasClass("menu-fixed")||r.addClass("menu-fixed"),t.removeClass("navbar-static-top"),r.removeClass("menu-static"),n.removeClass("footer-static"),n.removeClass("fixed-bottom")):(s.removeClass("container boxed-layout"),t.removeClass("container boxed-layout"))}),o("#static-layout").on("click",function(){!0===o(this).prop("checked")?(t.hasClass("navbar-static-top")||t.addClass("navbar-static-top"),r.hasClass("menu-static")||r.addClass("menu-static"),n.hasClass("footer-static")||n.addClass("footer-static"),!0===c&&(i.unstick(),i.addClass("navbar-static")),s.removeClass("fixed-navbar"),s.removeClass("container"),s.removeClass("boxed-layout"),t.removeClass("fixed-top"),t.removeClass("container"),t.removeClass("boxed-layout"),i.removeClass("menu-fixed"),r.removeClass("menu-fixed"),n.removeClass("fixed-bottom"),o.app.menu.manualScroller.disable()):(!1===c&&(s.addClass("fixed-navbar"),r.removeClass("menu-static").addClass("menu-fixed"),t.removeClass("navbar-static-top").addClass("fixed-top")),!0===c&&(i.sticky(),i.removeClass("navbar-static").addClass("navbar-fixed")),n.removeClass("footer-static"),o.app.menu.manualScroller.enable())}),o("#right-side-icons").on("click",function(){r.hasClass("menu-icon-right")?r.removeClass("menu-icon-right"):r.addClass("menu-icon-right"),!0===c&&(i.hasClass("navbar-icon-right")?i.removeClass("navbar-icon-right"):i.addClass("navbar-icon-right"))}),o(".cz-bg-image img").on("click",function(){var e=o(this),a=e.attr("src");o(".navigation-background").css("background-image","url("+a+")"),e.closest(".cz-bg-image").find(".selected").removeClass("selected"),e.addClass("selected")});var d=a.querySelector("#toggle-sidebar-bg-img");function m(e,a){a&&!e.is(":checked")?o(e).trigger("click").attr("checked","checked"):!a&&e.checked&&o(e).trigger("click").removeAttr("checked")}o("#toggle-sidebar-bg-img").on("change",function(){!0===d.checked?o(".navigation-background").css("display","block"):o(".navigation-background").css("display","none")});var u=o("#sidebar-color-option");o(".main-menu").hasClass("menu-dark")?m(u,!0):m(u,!1);var v=a.querySelector("#sidebar-color-option");o("#sidebar-color-option").on("change",function(){!0===v.checked?o(".main-menu").removeClass("menu-dark menu-light").addClass("menu-dark"):o(".main-menu").removeClass("menu-dark menu-light").addClass("menu-light")});var b=o("body").data("color");o(".navbar-color-options").find("."+b).addClass("active"),o(".navbar-color-option").on("click",function(){var e=o(this),a=e.data("bg");o("body").attr("data-color",a),e.closest(".navbar-color-options").find(".active").removeClass("active"),e.addClass("active")}),o(a).ready(function(){var e=o(location).attr("href");o("#twitter").sharrre({share:{twitter:!0},enableHover:!1,enableTracking:!1,enableCounter:!1,buttons:{twitter:{via:"ThemeSelection"}},click:function(e,a){e.simulateClick(),e.openPopup("twitter")},template:'<i class="fa fa-twitter"></i> Twitter',url:e}),o("#facebook").sharrre({share:{facebook:!0},enableHover:!1,enableTracking:!1,enableCounter:!1,click:function(e,a){e.simulateClick(),e.openPopup("facebook")},template:'<i class="fa fa-facebook-square"></i> Facebook',url:e}),o("#google").sharrre({share:{googlePlus:!0},enableCounter:!1,enableHover:!1,enableTracking:!0,click:function(e,a){e.simulateClick(),e.openPopup("googlePlus")},template:'<i class="fa fa-google-plus"></i> Google',url:e})})}(window,document,jQuery);