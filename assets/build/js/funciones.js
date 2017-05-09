$(document).ready(function () {

    var navListItems    = $('div.setup-panel div a'),
        allWells        = $('.setup-content'),
        allNextBtn      = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e)
        {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);
            if (!$item.hasClass('disabled'))
            {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find(':input:eq(0)').focus();
            }
        });

        allNextBtn.click(function ()
        {
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find(":input"),
                    isValid = true;
            $(".form-group").removeClass('has-error').removeClass('has-feedback');
            $('.form-group').find('span').remove();
            for (var i = 0; i < curInputs.length; i++)
            {
                if (!curInputs[i].validity.valid)
                {
                    //isValid = false;
                    $(curInputs[i]).closest('.form-group')
                            .addClass('has-error')
                            .addClass('has-feedback');
                    $(curInputs[i]).after('<span class="fa fa-info-circle form-control-feedback" aria-hidden="true"></span>');
                    //$(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }
            if (isValid)
            {
                nextStepWizard.removeAttr('disabled').trigger('click');
                $('#error').html('');
            } else
            {
                $('#error').html('<div class="col-md-12">' +
                        '<div class="alert alert-danger alert-dismissible fade in" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                        '<span aria-hidden="true">' +
                        '<font><font>×</font></font>' +
                        '</span></button>' +
                        '<h4><font><font class=""><i class="fa fa-info-circle" aria-hidden="true"></i> Error! </font></font></h4> ' +
                        '<p><font><font class="">Llene todos los campos señalados para poder continuar. </font></div></div>');
            }
        });

        $('div.setup-panel div a.btn-primary').trigger('click');

        $('.newrow').on('click', function () {
            //console.log($(this).parent().parent().siblings('.multiple').children().last());
            $(this).parent()
                    .parent()
                    .siblings('.multiple')
                    .children()
                    .eq(0)
                    .clone(true)
                    .appendTo($(this).parent()
                                        .parent()
                                        .siblings('.multiple'));

            $(this).parent()
                    .parent()
                    .siblings('.multiple')
                    .children()
                    .last()
                    .find(':input')
                    .each(function(index, el) {
                        $(el).val('')
                                .closest('.form-group')
                                .removeClass('has-error has-feedback')
                                .find('span')
                                .remove();
                    });
            $(this).parent().siblings().children('.deleterow').removeAttr('disabled');
        });

        $('.deleterow').on('click', function () {
            if ($(this).parent()
                    .parent()
                    .siblings('.multiple')
                    .children().length > 1)
            {
                $(this).parent()
                    .parent()
                    .siblings('.multiple')
                    .children()
                    .last()
                    .remove();
                if ($(this).parent()
                    .parent()
                    .siblings('.multiple')
                    .children().length === 1)
                {
                    $(this).attr('disabled', 'disabled');
                }
            }
        });

        $('#btn-gen-total').on('click', function ()
        {
            var total = 0;
            var inputs_h = $('#tbl-poblacion tbody #tr-hombres td input');
            for (var i = 0; i < inputs_h.length; i++)
            {
                total += parseInt((inputs_h[i].value === '') ? '0' : inputs_h[i].value);
            }
            $('#total-hombres').text(total);
            total = 0;
            var inputs_m = $('#tbl-poblacion tbody #tr-mujeres td input');
            for (var i = 0; i < inputs_m.length; i++)
            {
                total += parseInt((inputs_m[i].value === '') ? '0' : inputs_m[i].value);
            }
            $('#total-mujeres').text(total);
            var poblacion = $('#tbl-poblacion tbody tr td');
            var tds = {'td-pre': 0, 'td-nin': 0, 'td-ado': 0, 'td-jov': 0, 'td-adu': 0, 'td-may': 0};

            for (var i = 0; i < poblacion.length; i++)
            {
                if (poblacion[i].id === 'td-pre')
                {
                    tds['td-pre'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-nin')
                {
                    tds['td-nin'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-ado')
                {
                    tds['td-ado'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-jov')
                {
                    tds['td-jov'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-adu')
                {
                    tds['td-adu'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
                if (poblacion[i].id === 'td-may')
                {
                    tds['td-may'] += parseInt(poblacion[i].children[0].value === '' ? '0' : poblacion[i].children[0].value);
                    continue;
                }
            }

            for (var j in tds)
            {
                if (tds.hasOwnProperty(j))
                {
                    $('#tbl-total-edad tbody tr #' + j).text(tds[j]);
                }
            }
        });

        $('.form-group .form-control').on('blur', function ()
        {
            $(this).closest('.form-group').removeClass('has-error').removeClass('has-feedback');
            $(this).closest('.form-group').find('span').remove();
            if ($(this).val().trim() === "" && $(this).attr('required'))
            {
                $(this).closest('.form-group')
                        .addClass('has-error')
                        .addClass('has-feedback');
                $(this).after('<span class="fa fa-info-circle form-control-feedback" aria-hidden="true"></span>');
            }
        }).on('focus', function ()
        {
            $(this).closest('.form-group').removeClass('has-error').removeClass('has-feedback');
            $(this).closest('.form-group').find('span').remove();
        });

        $("#datepicker input").datepicker({
            format: 'yyyy-mm-dd',
            language: "es"
        });

        $('form').on('submit', function (evt)
        {
            if ($(this).attr('id') === 'form-reg')
            {
                evt.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: $(this).serialize(),
                    dataType: 'json',
                    async: true,
                    timeout: 4000,
                    beforeSend: function (xhr)
                    {
                        run_waitMe('roundBounce');
                    },
                    success: function (data, textStatus, jqXHR)
                    {
                        setTimeout(function ()
                        {
                            if (data.success)
                            {
                                window.location = data.url;
                            }
                            else
                            {
                                if (data.messages !== null) 
                                {
                                    $.each(data.messages, function (index, value) {
                                        var element = $("#" + index);
                                        $(element)
                                                .closest('.item')
                                                .removeClass('has-error')
                                                .removeClass('bad')
                                                .removeClass('has-success')
                                                .addClass(value.length > 0 ? 'has-error bad' : 'has-success')
                                                .find('.alert').remove();
                                        $(element).after(value);
                                    });
                                }
                                alert('Algo no salió bien verifica todos los datos');
                                //$(this).reset();
                                $('body').waitMe('hide');
                                console.log(data);
                            }
                            //console.log(data.values);
                        }, 4000);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                        $('body').waitMe('hide');
                    }
                });
            }
        });
});

function run_waitMe(effect)
{
    $('body').waitMe({
        effect: effect,
        text: 'Espere un momento por favor',
        bg: 'rgba(0,0,0,0.7)',
        color: '#fff',
        sizeW: '',
        sizeH: '',
        source: '',
        onClose: function ()
        {}
    });
}