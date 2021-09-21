let targetOld = null;
$(document).on('click', '.fa-stack', function() {
    let target = $(this);
    let classtarget = target.attr('class');

    // Add class
    target.addClass('icon-active');
    if (targetOld == null) {
        if (target.next().attr('class') != undefined)
            target.next().addClass('text-active');
        else
            target.prev().addClass('text-active');
        targetOld = target;
    } else {
        if (target.next().attr('class') != undefined)
            target.next().addClass('text-active');
        else
            target.prev().addClass('text-active');
        targetOld = target;
    }

    // Remove class
    if (classtarget.substring(classtarget.length - 11, classtarget.length) == 'icon-active') {
        target.removeClass('icon-active');
        if (target.next().attr('class') != undefined)
            target.next().removeClass('text-active');
        else
            target.prev().removeClass('text-active');

    }
});