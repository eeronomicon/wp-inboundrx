!function(n){n("#menu-main-menu li:last-of-type > a").click(function(){n("#cta-modal").modal("show")}),n(".triptych-panel-clickable").click(function(){n(this).parent().find(".modal").modal("show")}),n(".triptych-panel-unflip").click(function(){n(this).parent().parent().parent().find(".triptych-panel-body").toggle()})}(jQuery);