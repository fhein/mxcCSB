$.overridePlugin("swOffcanvasMenu", { onBeforeOpenMenu: function (event, plugin) {

    if (typeof mobCatMenu !== 'undefined') {
        $(".sidebar--categories-navigation .navigation--list.is--level0").html(mobCatMenu);
    }

    var me = this;

    if (plugin !== me) {
        me.closeMenu();
    }
} });
