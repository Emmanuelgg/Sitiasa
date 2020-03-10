/* Okler Themes - Style Switcher - 2.9.0 - 2.24-03-20 */

;(function($){



var styleSwitcher = {

	initialized: !1,

	options: {

		color: "#157ed2",
        
        seccolors: "#fdd922",

		gradient: "false"

	},

	initialize: function() {

		var a = this;

		this.initialized || (jQuery.styleSwitcherCachedScript = function(a, b) {

			return b = $.extend(b || {}, {

				dataType: "script",

				cache: !0,

				url: a

			}), jQuery.ajax(b)

		}, $("head").append($('<link rel="stylesheet">').attr("href", yogTheme.assets.uris + "master/style-switcher/style-switcher.css")), $("head").append($('<link rel="stylesheet/less">').attr("href", yogTheme.assets.uris + "master/less/skin.less")), $("head").append($('<link rel="stylesheet">').attr("href", yogTheme.assets.uris + "master/style-switcher/colorpicker/css/colorpicker.css")), $.styleSwitcherCachedScript(yogTheme.assets.uris + "master/style-switcher/colorpicker/js/colorpicker.js").done(function() {

			less = {

				env: "development"

			}, $.styleSwitcherCachedScript( yogTheme.assets.uris + "master/less/less.js").done(function() {

				a.build(), a.events(), null != $.cookie("colorGradient") && (a.options.gradient = $.cookie("colorGradient")), null != $.cookie("skin") ? a.setColor($.cookie("skin")) : a.container.find("ul[data-type=colors] li:first a").click(), null != $.cookie("secskin") ? a.setSecColor($.cookie("secskin")) : false, null != $.cookie("layout") && a.setLayoutStyle($.cookie("layout")), null != $.cookie("backgroundcolor") && a.setBackgroundColor($.cookie("backgroundcolor")), null != $.cookie("pattern") && a.setPattern($.cookie("pattern")), null == $.cookie("initialized") && (a.container.find("h4 a").click(), $.cookie("initialized", !0)), a.initialized = !0

			})

		}), $.styleSwitcherCachedScript(yogTheme.assets.uris + "master/style-switcher/cssbeautify/cssbeautify.js").done(function() {}))

	},

	build: function() {

		var a = this,

			b = $("<div />").attr("id", "styleSwitcher").addClass("style-switcher visible-lg").append($("<h4 />").html("Style Switcher").append($("<a />").attr("href", "#").addClass('show').append($("<i />").addClass("fa fa-cog").hover(function(){$( this ).addClass('fa-spin')}).mouseleave(function(){$( this ).removeClass('fa-spin')}) ) ), $("<div />").addClass("style-switcher-mode").append($("<div />").addClass("options-links mode").append($("<a />").attr("href", "#").attr("data-mode", "basic").addClass("active").html("Basic"), $("<a />").attr("href", "#").attr("data-mode", "advanced").html("Advanced"))), $("<div />").addClass("style-switcher-wrap").append($("<h5 />").html("Primary Colors"), $("<ul />").addClass("options colors").attr("data-type", "colors"),$("<h5 />").html("Secondary Colors"), $("<ul />").addClass("options secondry colors").attr("data-type", "seccolors"), $("<h5 />").html("Layout Style"), $("<div />").addClass("options-links layout").append($("<a />").attr("href", "#").attr("data-layout-type", "wide").addClass("active").html("Wide"), $("<a />").attr("href", "#").attr("data-layout-type", "boxed").html("Boxed")), $("<div />").hide().addClass("patterns").append($("<h5 />").html("Background Patterns"), $("<ul />").addClass("options").attr("data-type", "patterns")), $("<hr />"), $("<div />").addClass("options-links").append($("<a />").addClass("reset").attr("href", "#").html("Reset"), $("<a />").addClass("get-css").attr("href", "#getCSSModal").html("Get Skin CSS"))));


		$("body").append(b);

		var c = '<div class="modal fade" id="getCSSModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <h4 class="modal-title" id="cssModalLabel">Skin CSS</h4> </div> <div class="modal-body"> <div class="alert alert-info fade in" id="addBoxedClassInfo">Please add the <strong>&quot;boxed&quot;</strong> class to the &lt;body&gt; element.</div><textarea id="getCSSTextarea" class="get-css" readonly></textarea></div> </div> </div> </div> </div>';

		$("body").append(c), this.container = $("#styleSwitcher"), this.container.find("div.options-links.mode a").click(function(a) {

			a.preventDefault();

			var b = $(this).parents(".mode");

			b.find("a.active").removeClass("active"), $(this).addClass("active"), "advanced" == $(this).attr("data-mode") ? $("#styleSwitcher").addClass("advanced").removeClass("basic") : $("#styleSwitcher").addClass("basic").removeClass("advanced")

		});

		var d = [{
            
            Hex: "#157ed2",

			colorName: "Blue"

		},
        {

			Hex: "#59b210",

			colorName: "Green"

		},

		{

			Hex: "#1bbc9b",

			colorName: "Turquoise"

		},

		{

			Hex: "#26c9da",

			colorName: "Light Blue"

		},

		{

			Hex: "#ffa800",

			colorName: "Yellow"

		},

		{

			Hex: "#495d7f",

			colorName: "Navy"

		},

		{

			Hex: "#f65050",

			colorName: "Red"

		},

		{

			Hex: "#f17678",

			colorName: "Pink"

		},
        {

			Hex: "#bfa980",

			colorName: "Beige"

		},
        {

			Hex: "#fcab55",

			colorName: "Peach"

		},
        {

			Hex: "#6957af",

			colorName: "purple"

		},
        {

			Hex: "#74aea1",

			colorName: "Celadon"

		},
        {

			Hex: "#784e3d",

			colorName: "Brown"

		},
        {

			Hex: "#911938",

			colorName: "Cherry"

		},
        {

			Hex: "#b3c2.2",

			colorName: "Olive"

		},
        {

			Hex: "#37b6bd",

			colorName: "Cyan"

		}],

        e = this.container.find("ul[data-type=colors]");
        
        
        var sec = [{
            
            Hex: "#fdd922",

			colorName: "Yellow"

		},
        {

			Hex: "#59b210",

			colorName: "Green"

		},

		{

			Hex: "#1bbc9b",

			colorName: "Turquoise"

		},

		{

			Hex: "#26c9da",

			colorName: "Light Blue"

		},

		{

			Hex: "#157ed2",

			colorName: "Blue"

		},

		{

			Hex: "#495d7f",

			colorName: "Navy"

		},

		{

			Hex: "#f65050",

			colorName: "Red"

		},

		{

			Hex: "#f17678",

			colorName: "Pink"

		},
        {

			Hex: "#bfa980",

			colorName: "Beige"

		},
        {

			Hex: "#fcab55",

			colorName: "Peach"

		},
        {

			Hex: "#6957af",

			colorName: "purple"

		},
        {

			Hex: "#74aea1",

			colorName: "Celadon"

		},
        {

			Hex: "#784e3d",

			colorName: "Brown"

		},
        {

			Hex: "#911938",

			colorName: "Cherry"

		},
        {

			Hex: "#b3c2.2",

			colorName: "Olive"

		},
        {

			Hex: "#37b6bd",

			colorName: "Cyan"

		}],

        m = this.container.find("ul[data-type=seccolors]");
        
        if ($.each(sec, function(a) {

			var b = $("<li />").append($("<a />").css("background-color", sec[a].Hex).attr({

				"data-color-sec-hex": sec[a].Hex,

				"data-color-sec-name": sec[a].colorName,

				href: "#",

				title: sec[a].colorName

			}));

			m.append(b)

		}), null != $.cookie("secskin"));
		
        if ($.each(d, function(a) {

			var b = $("<li />").append($("<a />").css("background-color", d[a].Hex).attr({

				"data-color-hex": d[a].Hex,

				"data-color-name": d[a].colorName,

				href: "#",

				title: d[a].colorName

			}));

			e.append(b)

		}), null != $.cookie("skin")) var f = $.cookie("skin");

		else

		var f = d[0].Hex;

		var g = '',

			h = $("<div />").attr("id", "colorPickerHolder").attr("data-color", f).attr("data-color-format", "hex").addClass("color-picker");

		e.before(g, h), m.find("a").click(function(b) {
            
			b.preventDefault(), a.setSecColor($(this).attr("data-color-sec-hex"))

		}),e.find("a").click(function(b) {

			b.preventDefault(), a.setColor($(this).attr("data-color-hex")), $("#colorPickerHolder").ColorPickerSetColor($(this).attr("data-color-hex"))

		}), $("#colorPickerHolder").ColorPicker({

			color: f,

			flat: !0,

			livePreview: !1,

			onChange: function(b, c) {

				a.setColor("#" + c)

			}

		}), $("#colorPickerHolder .colorpicker_color, #colorPickerHolder .colorpicker_hue").on("mousedown", function(b) {

			b.preventDefault(), a.isChanging = !0

		}).on("mouseup", function(b) {

			b.preventDefault(), a.isChanging = !1, setTimeout(function() {

				a.setColor("#" + $("#colorPickerHolder .colorpicker_hex input").val())

			}, 100)

		}), null != $.cookie("colorGradient") && (a.options.gradient = $.cookie("colorGradient")), "true" == a.options.gradient ? $("#colorGradient").attr("checked", "checked") : $("#colorGradient").removeAttr("checked"), $("#colorGradient").on("change", function() {

			var b = $(this).is(":checked").toString();

			a.options.gradient = b, a.setColor(a.options.color), $.cookie("colorGradient", b)

		}), this.container.find("div.options-links.layout a").click(function(b) {

			b.preventDefault(), a.setLayoutStyle($(this).attr("data-layout-type"), !0)

		}), this.container.find("div.options-links.background-color a").click(function(b) {

			b.preventDefault(), a.setBackgroundColor($(this).attr("data-background-color"))

		}), this.container.find("div.options-links.style a").click(function(b) {
            
            b.preventDefault(), a.setStyle($(this).attr("data-style-type"), !0)

		}), $("body").hasClass("one-page") ? (this.container.find("div.options-links.website-type a:last").addClass("active"), this.container.find("div.options-links.layout").prev().remove(), this.container.find("div.options-links.layout").remove()) : this.container.find("div.options-links.website-type a:first").addClass("active");

		var i = ["brickwall", "cream_pixels", "grey_wash_wall", "greyzz", "mooning", "p5", "retina_wood", "shattered", "sos", "squared_metal", "subtle_grunge", "binding_dark", "gray_jean","textured_stripes","worn_dots","random_grey_variations" ],

			j = this.container.find("ul[data-type=patterns]");

		$.each(i, function(a, b) {

			var c = $("<li />").append($("<a />").addClass("pattern").css("background-image", "url(" + yogTheme.assets.uris + "images/patterns/" + b + ".png)").attr({

				"data-pattern": b,

				href: "#",

				title: b.charAt(0).toUpperCase() + b.slice(1)

			}));

			j.append(c)

		}), j.find("a").click(function(b) {

			b.preventDefault(), a.setPattern($(this).attr("data-pattern"))

		}), a.container.find("a.reset").click(function(b) {

			b.preventDefault(), a.reset()

		}), a.container.find("a.get-css").click(function(b) {

			b.preventDefault(), a.getCss()

		})

	},

	events: function() {

		var a = this;

		a.container.find("h4 a").click(function(b) {

			b.preventDefault(), a.container.hasClass("active") ? a.container.animate({

				left: "-" + a.container.width() + "px"

			}, 300).removeClass("active") : a.container.animate({

				left: "0"

			}, 300).addClass("active")

		}), (null != $.cookie("showSwitcher") || $("body").hasClass("one-page")) && (a.container.find("h4 a").click(), $.removeCookie("showSwitcher"))

	},

	setColor: function(a) {

		var b = this;
        var color = null != $.cookie("secskin")? $.cookie("secskin") : '#fdd922';
        
		return this.isChanging ? !1 : (b.options.color = a, less.modifyVars({

			gradient: b.options.gradient,
            skinSecColor : color,
			skinColor: a

		}), $.cookie("skin", a))
        
        

	},
    
    setSecColor: function(a) {

		var secb = this;
        var color = null != $.cookie("skin")? $.cookie("skin") : '#157ed2';
        
        return (secb.options.seccolors = a, less.modifyVars({
            skinColor : color,
			skinSecColor: a

		}), $.cookie("secskin", a))
        
	},

	setLayoutStyle: function(a, b) {

		if ($.cookie("layout", a), b) return $.cookie("showSwitcher", !0), window.location.reload(), !1;

		var c = this.container.find("div.options-links.layout"),

			d = this.container.find("div.patterns");

		c.find("a.active").removeClass("active"), c.find("a[data-layout-type=" + a + "]").addClass("active"), "wide" == a ? (d.hide(), $("body").removeClass("boxed"), $.removeCookie("pattern")) : (d.show(), $("body").addClass("boxed"), null == $.cookie("pattern") && this.container.find("ul[data-type=patterns] li:first a").click())

	},
    
    setStyle:function(a, b) {
          
        if ($.cookie("style", a), b) return $.cookie("style", !0), window.location.reload(), !1;

		var c = this.container.find("div.options-links.style");

		c.find("a.active").removeClass("active"), c.find("a[data-style-type=" + a + "]").addClass("active"), "normal" == a ? $("body").removeClass("full-width") : $("body").addClass("full-width")

    },
    
	setBackgroundColor: function(a) {

		$.cookie("backgroundcolor", a);

		var b = this.container.find("div.options-links.background-color");

		b.find("a.active").removeClass("active"), b.find("a[data-background-color=" + a + "]").addClass("active"), "dark" == a ? $("body").addClass("dark") : $("body").removeClass("dark"), this.setLogo()

	},

	setPattern: function(a) {

		var b = $("body").hasClass("boxed");

		b && $("body").css("background-image", "url(" + yogTheme.assets.uris + "images/patterns/" + a + ".png)"), $.cookie("pattern", a)

	},

	reset: function() {

		$.removeCookie("skin"), $.removeCookie("layout"),$.removeCookie("style"), $.removeCookie("backgroundcolor"), $.removeCookie("pattern"), $.removeCookie("colorGradient"), $.cookie("showSwitcher", !0), window.location.reload()

	},

	getCss: function() {

		raw = "";

		var a = $("body").hasClass("boxed");

		a ? (raw = 'body { background-image: url("' + yogTheme.assets.uris + 'images/patterns/' + $.cookie("pattern") + '.png"); }', $("#addBoxedClassInfo").show()) : $("#addBoxedClassInfo").hide(), $("#getCSSTextarea").text(""), $("#getCSSTextarea").text($('style[id^="less:"]').text()), $("#getCSSModal").modal("show"), options = {

			indent: "	",

			autosemicolon: !0

		}, raw += $("#getCSSTextarea").text(), $("#getCSSTextarea").text(cssbeautify(raw, options))

	}

};

styleSwitcher.initialize();



})(jQuery);