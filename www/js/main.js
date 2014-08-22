$(function() {
    $("#progressbar").progressbar({
        value: 37
    });
    
    /******************* Datepicker backend ******************/
    var Now=new Date();
    // Подключение календаря
    $("#StatusProject_start").datepicker({
            yearRange: "1910: "+Now.getFullYear(),
            firstDay: 1,
            dayNames: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
            dayNamesMin: ['В', 'П', 'В', 'С', 'Ч', 'П', 'С'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Ию', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            nextText: 'Следующий',
            prevText: 'Предыдущий',
            dateFormat: 'dd.mm.yy',
            //changeYear: ($.browser.mozilla)?false:true
            changeYear: true
    });
    $("#StatusProject_stage_one").datepicker({
            yearRange: "1910: "+Now.getFullYear(),
            firstDay: 1,
            dayNames: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
            dayNamesMin: ['В', 'П', 'В', 'С', 'Ч', 'П', 'С'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Ию', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            nextText: 'Следующий',
            prevText: 'Предыдущий',
            dateFormat: 'dd.mm.yy',
            //changeYear: ($.browser.mozilla)?false:true
            changeYear: true
    });
    $("#StatusProject_stage_two").datepicker({
            yearRange: "1910: "+Now.getFullYear(),
            firstDay: 1,
            dayNames: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
            dayNamesMin: ['В', 'П', 'В', 'С', 'Ч', 'П', 'С'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Ию', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            nextText: 'Следующий',
            prevText: 'Предыдущий',
            dateFormat: 'dd.mm.yy',
            //changeYear: ($.browser.mozilla)?false:true
            changeYear: true
    });
    $("#StatusProject_stage_three").datepicker({
            yearRange: "1910: "+Now.getFullYear(),
            firstDay: 1,
            dayNames: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
            dayNamesMin: ['В', 'П', 'В', 'С', 'Ч', 'П', 'С'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Ию', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            nextText: 'Следующий',
            prevText: 'Предыдущий',
            dateFormat: 'dd.mm.yy',
            //changeYear: ($.browser.mozilla)?false:true
            changeYear: true
    });
    $("#StatusProject_end").datepicker({
            yearRange: "1910: "+Now.getFullYear(),
            firstDay: 1,
            dayNames: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
            dayNamesMin: ['В', 'П', 'В', 'С', 'Ч', 'П', 'С'],
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Ию', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            nextText: 'Следующий',
            prevText: 'Предыдущий',
            dateFormat: 'dd.mm.yy',
            //changeYear: ($.browser.mozilla)?false:true
            changeYear: true
    });
    /*********************************************************/
    
});
