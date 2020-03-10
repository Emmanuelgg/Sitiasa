! function(e) {
    var t = {
        init: function() {
            this.initTabs()
        },
        initTabs: function() {
            var t = e(".yog-nav-tabs").children("li"),
                o = (e(".yog-tab-pane").hide(), document.location.hash);
            e(".yog-tab-pane.yog-tab-is-active").show(), t.on("click", 'a[href^="#"]:not([href="#"])', function(t) {
                var o = e(this),
                    n = o.attr("href");
                e(n).length && (t.preventDefault(), e(n).show().siblings().hide(), o.parent().addClass("is-active").siblings().removeClass("is-active"))
            }), "" !== o && t.children("a").filter("[href*='" + o + "']").length && (e(o).show().siblings().hide(), t.children("a").filter("[href*='" + o + "']").trigger("click"), e("body, html").stop().animate({
                scrollTop: t.parents(".yog-nav-tabs").offset().top
            }))
        }
    };
    jQuery(document).ready(function() {
        t.init(), e("#btn-skin-generator-buttonset1").on("click", function(t) {
            t.preventDefault();
            var o = {
                action: "yog_skin_generator",
                skin_name: e("#color-name").val(),
                skin_color: e("#color-color").val(),
                skin_sec_color: e("#skin-sec-color-color").val()
            };
            return e.post(ajaxurl, o, function(e) {
                -1 != e && location.reload()
            }), !1
        }), e(".skin-remove-item").on("click", function(t) {
            t.preventDefault();
            var o = {
                action: "yog_skin_remove",
                skin_name: e(this).data("name")
            };
            return e.post(ajaxurl, o, function(e) {
                -1 != e && location.reload()
            }), !1
        })
    })
}(jQuery);