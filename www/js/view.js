window.onload = function() {
    // Получаем даты разработки, начала(min), конца(max) и текущую(now).
    var min = $('#StatusProject_start').val(); 
    var max = $('#StatusProject_end').val(); 
    var now = Math.round(new Date().getTime()/1000.0);
    // Получаем значение для 100% и для х%. Находим х%
    var value_100 = max-min;
    var value_x = max-now;
    var procent = 100-(value_x*100/value_100);
    window.interest = Math.round(procent);
    document.getElementById('interest').innerHTML = interest + ' %';
    document.getElementById('progress').style.width = interest * 9.42 + 'px';

    // Для получения значения шага в 1% узнаем разницу между началом и концом это 100% и вычисляем 1% от нее и умножаем на 1000мс, получаем шаг var step
    var step = (value_100/100)*1000;
    setInterval(go, step);
}
    //Увеличиваем процент и растягиваем полосу прогресса
function go(){

    //Пока не 100% увеличиваем процент
    if(interest != 100) {
        interest++;
        document.getElementById('interest').innerHTML = interest + ' %';
        document.getElementById('progress').style.width = interest * 9.42 + 'px';
    }
    else{
        document.getElementById('interest').innerHTML = 'Загрузка завершена';
        document.getElementById('interest').style.margin = '0px 0 0 400px';
    }
}


