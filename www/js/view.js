window.onload = function() {
    // Получаем даты разработки и текущую(now).
    var min = $('#StatusProject_start').val(); 
    var stage_one = $('#StatusProject_stage_one').val();
    var stage_two = $('#StatusProject_stage_two').val();
    var stage_three = $('#StatusProject_stage_three').val();
    var max = $('#StatusProject_end').val(); 
    var now = Math.round(new Date().getTime()/1000.0);
    // Получаем значение для 100% и для х%. Находим х%
    var value_100 = max-min;
    var value_1 = value_100/100;
    var value_one = value_100-(max-stage_one);
    var value_two = value_100-(max-stage_two);
    var value_three = value_100-(max-stage_three);
    var value_now = max-now;
    if(value_now<0){
        value_now=0;
    }
    var px = $('.strip_bar_new').width()/100;
    $('.strip_bar_span').text($('#start').val());
    var width_span=$('.strip_bar_span').width()/2;
    
    var procent = 100-(value_now*100/value_100);
    
    var procent_one = Math.round(value_one*100/value_100);
    var procent_now = Math.round(100-(value_now*100/value_100));
    var date = new Date();
    
    var place_date;
    // Переменная проверки
    var check_now=0;
    
    $('#interest1').css({'margin':'30px 0px 0px '+(-width_span)+'px'});
    $('#interest1').text($('#start').val());
    $('#interest1').show();
    
    place_date = Math.round(procent_one);
    if(procent_one<=procent){
        window.interest = Math.round(procent_one);
        $('#progress1').css({'width': interest * px + 'px'});
        $('#interest2').css({'margin':'30px 0px 0px '+((place_date * px)-width_span)+'px'});
        $('#interest2').text($('#stage_one').val());
        $('#progress1').show();
        $('#interest2').show();
    }else{
        window.interest = Math.round(procent);
        $('#progress1').css({'width': interest * px + 'px'});
        $('#interest2').css({'margin':'30px 0px 0px '+((place_date * px)-width_span)+'px'});
        $('#interest2').text($('#stage_one').val());
        $('#progress1').show();
        $('#interest2').show();
        check_now=1;
    }

    var procent_two = value_two*100/value_100;
    place_date = Math.round(procent_two);
    if(procent_two<=procent){
        window.interest = Math.round(procent_two-procent_one);
        $('#progress2').css({'width': interest * px + 'px'});
        $('#interest3').css({'margin':'30px 0px 0px '+((place_date * px)-width_span)+'px'});
        $('#interest3').text($('#stage_two').val());
        $('#progress2').show();
        $('#interest3').show();
    }else{
        window.interest = Math.round(procent-procent_one);
        if(check_now==0) { 
            $('#progress2').css({'width': interest * px + 'px'});
            $('#progress2').show();
        }
        $('#interest3').css({'margin':'30px 0px 0px '+((place_date * px)-width_span)+'px'});
        $('#interest3').text($('#stage_two').val());
        $('#interest3').show();
        check_now=1;
    }
    
    var procent_three = value_three*100/value_100;
    place_date = Math.round(procent_three);
    if(procent_three<=procent){
        window.interest = Math.round(procent_three-procent_two);
        $('#progress3').css({'width': interest * px + 'px'});
        $('#interest4').css({'margin':'30px 0px 0px '+((place_date * px)-width_span)+'px'});
        $('#interest4').text($('#stage_three').val());
        $('#progress3').show();
        $('#interest4').show();
    }else{
        window.interest = Math.round(procent-procent_two);
        if(check_now==0) { 
            $('#progress3').css({'width': interest * px + 'px'}); 
            $('#progress3').show();
        }
        $('#interest4').css({'margin':'30px 0px 0px '+((place_date * px)-width_span)+'px'});
        $('#interest4').text($('#stage_three').val());
        $('#interest4').show();
        check_now=1;
    }
    
    place_date = Math.round(procent);
    if(procent>procent_three && procent<100){
        window.interest = Math.round(procent-procent_three);
        $('#progress4').css({'width': interest * px + 'px'});
        $('#progress4').show();
    }else{
        window.interest = Math.round(100-procent_three);
        if(check_now==0) { 
            $('#progress4').css({'width': interest * px + 'px'});
            $('#progress4').show();
        }
    }
    
    $('#interest6').css({'margin':'30px 0px 0px '+((100 * px)-width_span)+'px'});
    $('#interest6').text($('#end').val());
    $('#interest6').show();
    
    window.interest = Math.round(procent);
    
    // Для получения значения шага в 1% узнаем разницу между началом и концом это 100% и вычисляем 1% от нее и умножаем на 1000мс, получаем шаг var step
    var step = (value_100/100)*1000;
    
    init(px,procent_one,procent_two,procent_three,procent_now,width_span,step);
    function init(px,procent_one,procent_two,procent_three,procent_now,width_span,step) {
        (function go() {
            if(interest != 100) {
                interest++;
                $('#interest5').html('');
                var date = new Date();
                date=new Date(date.getFullYear(),date.getMonth(),date.getDate());
                if(procent_now<procent_one){
                    $('#interest5').text(formatDate(date));
                    $('#interest5').append('<br /><i class="fa fa-caret-down" id="interest5_i"></i>');
                    $('#interest5').css({'margin':'-10px 0px 0px '+((interest * px)-width_span)+'px'});
                    $('#interest5_i').css({'padding':'0px 0px 0px 25px'});
                    $('#progress1').css({'width': ''+(parseInt($('#progress1').css('width').replace('px',''))+px)+'px'});
                    $('#interest5').show();
                    $('#interest5_i').show();
                    $('#progress1').show();
                }else if((procent_now>=procent_one) && (procent_now<procent_two)){
                    $('#interest5').text(formatDate(date));
                    $('#interest5').append('<br /><i class="fa fa-caret-down" id="interest5_i"></i>');
                    $('#interest5').css({'margin':'-10px 0px 0px '+((interest * px)-width_span)+'px'});
                    $('#interest5_i').css({'padding':'0px 0px 0px 25px'});
                    $('#progress2').css({'width': ''+(parseInt($('#progress2').css('width').replace('px',''))+px)+'px'});
                    $('#interest5').show();
                    $('#interest5_i').show();
                    $('#progress2').show();
                }else if((procent_now>=procent_two) && (procent_now<procent_three)){
                    $('#interest5').text(formatDate(date));
                    $('#interest5').append('<br /><i class="fa fa-caret-down" id="interest5_i"></i>');
                    $('#interest5').css({'margin':'-10px 0px 0px '+((interest * px)-width_span)+'px'});
                    $('#interest5_i').css({'padding':'0px 0px 0px 25px'});
                    $('#progress3').css({'width': ''+(parseInt($('#progress3').css('width').replace('px',''))+px)+'px'});
                    $('#interest5').show();
                    $('#interest5_i').show();
                    $('#progress3').show();
                }else if(procent_now>=procent_three) {
                    $('#interest5').text(formatDate(date));
                    $('#interest5').append('<br /><br /><i class="fa fa-caret-down" id="interest5_i"></i>');
                    $('#interest5').css({'margin':'-10px 0px 0px '+((interest * px)-width_span)+'px'});
                    $('#interest5_i').css({'padding':'0px 0px 0px 25px'});
                    $('#progress4').css({'width': ''+(parseInt($('#progress4').css('width').replace('px',''))+px)+'px'});
                    $('#interest5').show();
                    $('#interest5_i').show();
                    $('#progress4').show();
                }
                setTimeout(go, step);
            }else{
                $('#interest5').text('Завершен!');
                $('#interest5').append('<br /><br /><i class="fa fa-caret-down" id="interest5_i"></i>');
                $('#interest5').css({'margin':'-10px 0px 0px '+((interest * px)-width_span)+'px'});
                $('#interest5_i').css({'padding':'0px 0px 0px 25px'});
                $('#interest5').show();
                $('#interest5_i').show();
            }    
        })();
    }
}

function formatDate(date) {
  var dd = date.getDate()
  if ( dd < 10 ) dd = '0' + dd;
  var mm = date.getMonth()+1
  if ( mm < 10 ) mm = '0' + mm;
  var yy = date.getFullYear() % 100;
  if ( yy < 10 ) yy = '0' + yy;
  return dd+'.'+mm+'.'+yy;
}


