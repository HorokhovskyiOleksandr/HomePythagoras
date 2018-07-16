

$('#formbudget').on('submit', function(event) {
    event.preventDefault();
    $('input[name=budget]').removeAttr('disabled');
    var serial = $(this).serialize();

    $.ajax({
        url:'http://'+window.location.host+'/ajax/budget.ajax.php',
        type:'post',
        data:serial,
        success: function(result) {

            alert('Бюджет на этот месяц сохранен');
            window.location.href = window.location.href;
        }
    })

})