'use strict';


$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {left:true},
    success: function(data) {
       $('#left').html(data+'грн');
    }
})



$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {spend:true},
    success: function(data) {

        $('#spnd').html(data+'грн')
    }
})

$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {deposit:true},
    success: function(data) {

        if(data==1){
            $('div[data-type=deposit]').css({'border-left':'5px solid red','border-right':'5px solid red'}).attr('data-limit','true');
        }
    }
})
$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {loan:true},
    success: function(data) {
        if(data==1){
            $('div[data-type=loan]').css({'border':'5px solid red'}).attr('data-limit','true');
        }
    }
})
$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {shopping:true},
    success: function(data) {
        if(data==1){
            $('div[data-type=shopping]').css({'border':'5px solid red'}).attr('data-limit','true');
        }
    }
})
$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {communal:true},
    success: function(data) {
        if(data==1){
            $('div[data-type=communal]').css({'border':'5px solid red'}).attr('data-limit','true');
        }
    }
})
$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {food:true},
    success: function(data) {
        if(data==1){
            $('div[data-type=food]').css({'border':'5px solid red'}).attr('data-limit','true');
        }
    }
})
$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {vehicle:true},
    success: function(data) {
        if(data==1){
            $('div[data-type=vehicle]').css({'border':'5px solid red'}).attr('data-limit','true');
        }
    }
})
$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {entertainment:true},
    success: function(data) {
        if(data==1){
            $('div[data-type=entertainment]').css({'border':'5px solid red'}).attr('data-limit','true');
        }
    }
})
$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {medicine:true},
    success: function(data) {
        if(data==1){
            $('div[data-type=medicine]').css({'border':'5px solid red'}).attr('data-limit','true');
        }
    }
})
$.ajax({
    url:'http://'+window.location.host+'/ajax/main.ajax.php',
    type:'post',
    data: {small:true},
    success: function(data) {
        if(data==1){
            $('div[data-type=small]').css({'border':'5px solid red'}).attr('data-limit','true');
        }
    }
})


$('.circles').on('click', function () {
     var type = $(this).attr('data-type');
    $.ajax({
          url:'http://'+window.location.host+'/ajax/main.ajax.php',
          type:'post',
          data:{budget:type},
          success:function (data) {
                 $('.popup div').last().html('<hr><br><h5>Запланированный бюджет</h5><br><h2>'+data+'</h2>');
        }
      })
})

