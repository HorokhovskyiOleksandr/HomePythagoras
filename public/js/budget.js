('use strict');

var currentBudget = 0;
var bicon = '<div class="spend"><button id="delete" class="fa fa-times-circle"></button><input type="number"><button id="save">Сохранить</button>  </div>';


$('#confirmsum').on('click', function (e) {
    e.preventDefault();

    var budgetsum = $('input[name=budget]').val()
    budgetsum = parseInt(budgetsum);

    currentBudget = budgetsum;


    if(budgetsum > 0){
        $('input[name=budget]').attr('disabled', 'disabled');
        $('.extrafield').show();

        var toltip = '<div class ="toltip"></div>';
        $('body').append(toltip);

        $('.extrafield input').focus(function () {
            var left = $(this).offset().left;
            var top = $(this).offset().top;
            left = left - 220;
            top = top-40;
            $('.toltip').show().css({'left':left, 'top':top}).html('Остаток бюджета '+currentBudget)
        })


        $('.extrafield input').blur(function () {
            var val = $(this).val();
            if(val<=currentBudget){
                currentBudget -=val;



                $(this).css({
                    'outline': '2px solid green'
                })
            }
            else{
                alert('Сумма введена некорректно');
                $(this).css({
                    'outline': '2px solid red'
                })
            }

            $('.toltip').hide();
        })



        $('.extrafield input').keyup(function () {
            $('.extrabtn').html('<button class="button">Сохранить</button>')
        })





    }
    else{
        alert('Сумма бюджета указана неверно')
    }
})



 $('.bicon').click(function () {

     var biconData = $(this).attr('data-type');
     var placeholder = '';

     if(biconData=='deposit'){
         placeholder = 'Депозит';
     }
     if(biconData=='loan'){
         placeholder='Кредит';
     }
     if(biconData=='communal'){
         placeholder='Коммунальные платежи';
     }
     if(biconData=='shopping'){
         placeholder='Одежда';
     }
     if(biconData=='food'){
         placeholder='Продукты';
     }
     if(biconData=='vehicle'){
         placeholder='Транспорт';
     }
     if(biconData=='medicine'){
         placeholder='Медицинские расходы';
     }
     if(biconData=='entertainment'){
         placeholder='Развлечения';
     }
     if(biconData=='small'){
         placeholder='Мелкие расходы';
     }







     var left = $(this).offset().left;
     var top = $(this).offset().top;
     left = left - 100;
     top = top-75;



     $('.spend').detach();

     $('.window').html(bicon);
     $('.spend input').attr("placeholder", placeholder);
     $('.spend').css({'left':left,'top':top});


     $('.spend').on('click','#save', function() {
         var categorySumm = $('.spend input').val();
         if(categorySumm.length>0){
             $.ajax({
                 url:'http://'+window.location.host+'/ajax/expenses.ajax.php',
                 type:'post',
                 data:{summ:categorySumm,category:biconData},
                 success:function (data) {
                    $('.spend').detach();
                    alert('Сумма успешно записана в базу')
                 }
             });
         }
     })







     $('.spend').on('click','#delete', function() {
         $('.spend').detach();

     });

 });

    $('.menu-trigger').click(function() {
        $('nav ul').slideToggle(500);
    });//end slide toggle

    $(window).resize(function() {
        if (  $(window).width() > 500 ) {
            $('nav ul').removeAttr('style');

        }
    });








