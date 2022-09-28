<?php
$num = random_int(111111111, 999999999);
echo 'DL', $num, 'BR';
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Due Laser</title>
    <meta charset="utf-8">
    <link rel="icon" sizes="128x128" href="{{ asset('img/logo.png') }}">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    
</head>

<body>
    <link rel="stylesheet" href="{{ asset('css/topo.css') }}">
    @include('site.layouts._partials.topo')
    <link rel="stylesheet" href="{{ asset('css/rastreio.css') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 
                col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="px-0 pt-4 pb-0 mt-3 mb-3">
                    <form id="form">
                        <ul id="progressbar">
                            <li class="active" id="step1">
                                <strong>Venda Confirmada</strong>
                            </li>
                            <li id="step2"><strong>Em produção</strong></li>
                            <li id="step3"><strong>Preparada para envio</strong></li>
                            <li id="step4"><strong>Enviada</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div> <br>
                        <fieldset>
                            <h2>Obrigado por ser cliente Due! Sua compra foi confirmada.</h2>
                            <input type="button" name="next-step" class="next-step" value="Avançar" />
                        </fieldset>
                        <fieldset>
                            <h2>Sua máquina já está em produção e logo está pronta para entrega!</h2>
                            <input type="button" name="next-step" class="next-step" value="Avançar" />
                            <input type="button" name="previous-step" class="previous-step" value="Voltar" />
                        </fieldset>
                        <fieldset>
                            <h2>Sua máquina está aguardando coleta da transportadora.</h2>
                            <input type="button" name="next-step" class="next-step" value="Etapa Final" />
                            <input type="button" name="previous-step" class="previous-step" value="Voltar" />
                        </fieldset>
                        <fieldset>
                            <div class="finish">
                                <h2 class="text text-center">
                                    <strong>Máquina Enviada!</strong>
                                </h2>
                            </div>
                            <button type="button" name="Acompanhar" class="next-step"><a href="https://alfatransportes.com.br/" target="_blank">Acompanhar</a></button>
                            <input type="button" name="previous-step" class="previous-step" value="Voltar" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script >$(document).ready(function () {
    var currentGfgStep, nextGfgStep, previousGfgStep;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
  
    setProgressBar(current);
  
    $(".next-step").click(function () {
  
        currentGfgStep = $(this).parent();
        nextGfgStep = $(this).parent().next();
  
        $("#progressbar li").eq($("fieldset")
            .index(nextGfgStep)).addClass("active");
  
        nextGfgStep.show();
        currentGfgStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;
  
                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                nextGfgStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    });
  
    $(".previous-step").click(function () {
  
        currentGfgStep = $(this).parent();
        previousGfgStep = $(this).parent().prev();
  
        $("#progressbar li").eq($("fieldset")
            .index(currentGfgStep)).removeClass("active");
  
        previousGfgStep.show();
  
        currentGfgStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;
  
                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previousGfgStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });
  
    function setProgressBar(currentStep) {
        var percent = parseFloat(100 / steps) * current;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }
  
    $(".submit").click(function () {
        return false;
    })
});


</script>

</html>
