'use strict';
// var txt = '';
$('.circles').mouseenter(function () {
    var left = $(this).offset().left;
    var top = $(this).offset().top;

    if($(window).width() > 480) {
        left = left - 120;
        top = top - 40;
    } else if($(window).width() <= 480) {
        left = left + 120;
        top = top - 40;
    }




    var biconData = $(this).attr('data-type');
    var limit = $(this).attr('data-limit');

    var paragraph = '';

    if(biconData==='deposit'){
        paragraph = '<p class="toltipText">Депозит</p>';
    }
    if(biconData==='loan'){
        paragraph = '<p class="toltipText">Кредит</p>';
    }
    if(biconData==='communal'){
        paragraph = '<p class="toltipText">Коммунальные платежи</p>';
    }
    if(biconData==='shopping'){
        paragraph = '<p class="toltipText">Одежда</p>';
    }
    if(biconData==='food'){
        paragraph = '<p class="toltipText">Продукты</p>';
    }
    if(biconData==='vehicle'){
        paragraph = '<p class="toltipText">Транспорт</p>';
    }
    if(biconData==='medicine'){
        paragraph = '<p class="toltipText">Медицинские расходы</p>';
    }
    if(biconData==='entertainment'){
        paragraph = '<p class="toltipText">Развлечения</p>';
    }
    if(biconData==='small'){
        paragraph = '<p class="toltipText">Мелкие расходы</p>';
    }
var toltipMain = '<div class ="toltipMain"></div>';
$('body').append(toltipMain);



$('.circles').on('click',function () {
    var biconData1 = $(this).attr('data-type');
    var paragraph1 = '';

    if(biconData1==='deposit'){
        paragraph1 = '<p class="toltipText">Депозит</p>';
    }
    if(biconData1==='loan'){
        paragraph1 = '<p class="toltipText">Кредит</p>';
    }
    if(biconData1==='communal'){
        paragraph1 = '<p class="toltipText">Коммунальные платежи</p>';
    }
    if(biconData1==='shopping'){
        paragraph1 = '<p class="toltipText">Одежда</p>';
    }
    if(biconData1==='food'){
        paragraph1 = '<p class="toltipText">Продукты</p>';
    }
    if(biconData1==='vehicle'){
        paragraph1 = '<p class="toltipText">Транспорт</p>';
    }
    if(biconData1==='medicine'){
        paragraph1 = '<p class="toltipText">Медицинские расходы</p>';
    }
    if(biconData1==='entertainment'){
        paragraph1 = '<p class="toltipText">Развлечения</p>';
    }
    if(biconData1==='small'){
        paragraph1 = '<p class="toltipText">Мелкие расходы</p>';
    }
    $('.popup').removeClass('popupShow');

    setTimeout(function() {
        $('.popup').addClass('popupShow');
    },500)
    var type = $(this).attr('data-type');

    var icon = $(this).find('i').attr('class');
    var icon1 = '<i class="'+ icon +'"></i>';



    var txt = '';
    var total = 0;
    $.ajax({
        url:'http://'+window.location.host+'/ajax/main.ajax.php',
        type:'post',
        data:{information:type},
        success:function (info) {
            var info2 = JSON.parse(info);

            $.each(info2,function(i,obj) {
                  var dateArr = obj.date.split(' ');
                  txt += '<ul><li> '+dateArr[0]+' потрачено: '+obj.summ+'</li></ul>';
                    total += parseInt(obj.summ);

            });


            $('.popup div').first().html(paragraph1+icon1+txt+'<h5>Итого:'+total+'.00</h5>');



        } //end success

    }) //end ajax
})
        $('.popup').on('click','#close',(function () {
            var pop =  $('.popup').removeClass('popupShow');
            }))

            if(limit=='true'){
                var limitText = '<span> Лимит бюджета превышен </span>';
            }
            else {
                var limitText = '';
            }

            $('.toltipMain').show().css({'left':left, 'top':top}).html(limitText+paragraph);

            $('.circles').mouseleave(function () {
                $('.toltipMain').hide()
            })
        })



        $('.menu-trigger').click(function() {
            $('nav ul').slideToggle(500);
        });//end slide toggle

        $(window).resize(function() {
            if (  $(window).width() > 500 ) {
                $('nav ul').removeAttr('style');

            }
        });







// $('.popup').removeClass('popupShow');
// var class = $(this).find('i').attr('class')
//     <i class="fa fa-credit-card"></i>           var array = class.split(" ");
