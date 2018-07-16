'use strict';



        var deposit = 0;
        var loan = 0;
        var small = 0;
        var vehicle = 0;
        var food = 0;
        var medicine = 0;
        var shopping = 0;
        var entertainment = 0;
        var communal = 0;



        $.ajax({
            url:'http://'+window.location.host+'/ajax/statistics.ajax.php',
            type:'post',
            success:function(data) {
                var data1 = JSON.parse(data);
                $.each(data1, function (key, val) {
                    if(val.category=='deposit'){
                        deposit += parseInt(val.summ);
                    }
                    if(val.category=='loan'){
                        loan += parseInt(val.summ);
                    }
                    if(val.category=='small'){
                        small += parseInt(val.summ);
                    }
                    if(val.category=='vehicle'){
                        vehicle += parseInt(val.summ);
                    }
                    if(val.category=='food'){
                        food += parseInt(val.summ);
                    }
                    if(val.category=='medicine'){
                        medicine += parseInt(val.summ);
                    }
                    if(val.category=='shopping'){
                        shopping += parseInt(val.summ);
                    }
                    if(val.category=='entertainment'){
                        entertainment += parseInt(val.summ);
                    }
                    if(val.category=='communal'){
                        communal += parseInt(val.summ);
                    }
                })

                console.log(deposit)


            }

        })




            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Расходы', 'Деньги'],
                    ['Депозит', deposit],
                    ['Кредит', loan],
                    ['Мелкие расходы', small],
                    ['Транспорт', vehicle],
                    ['Продукты', food],
                    ['Медицина', medicine],
                    ['Одежда', shopping],
                    ['Развлечения', entertainment],
                    ['Коммунальные платежи', communal],

                ]);

                var options = {
                    title: 'Расходы',
                    titleTextStyle: {
                        fontSize: 30,
                        bold: true,
                    },
                    backgroundColor: 'none',
                    colors: ['#AD63C6', '#EDE1B1', '#FF5F5F', '#AFB0B5', '#FF6D99', '#FF9B7B', '#01AC8A', '#ADCC30', '#B2849D'],
                    fontSize: 20,
                    fontName: 'trench',
                    is3D: true,
                }


                var chart = new google.visualization.PieChart(document.getElementById('piechart'));


                chart.draw(data, options);
            }














$('.menu-trigger').click(function () {
    $('nav ul').slideToggle(500);
});//end slide toggle

$(window).resize(function () {
    if ($(window).width() > 500) {
        $('nav ul').removeAttr('style');

    }
});





