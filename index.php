<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymou"></script>

        <script src="js/clima.js"></script>
        
        <style>
            .row{
                background-color: deepSkyBlue;
                text-align: center;
            }
            
            #jumbotronny{
                background-color: aqua;
            }
            
            
        </style>

    </head>
    <body>
        <div class="row">
            <div class="col-md-12"> 

                <div id="jumbotronny" class="jumbotron"> 
                    <h1>Tempo para Brusque-SC | <span id="temperatura"></span></h1>
                    <p>
                        <span id="situacao"></span>
                        <img id="icone" src="img/ícones/02d.png"/>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div id="jumbotronny" class="jumbotron"> 
                    <h6>Umidade atual Brusque <span id="tempo"></span>
                        <img width="120px" src="img/ícones/umidade.png"/></h6>
                    <p>Umidade do ar: <span id="umidade"></span></p>

                </div>

            </div>
            
             <div class="col-md-6">

                <div id="jumbotronny" class="jumbotron"> 
                    <h6>Pressão do ar atual Brusque
                        <img width="120px" src="img/ícones/pressao.png"/></h6>
                     <p>Pressão do ar: <span id="pressao"></span></p>

                </div>

            </div>
            
             <div class="col-md-6">

                <div id="jumbotronny" class="jumbotron"> 
                    <h6>Temperatura Máxima atual Brusque<span id="temperaturaMaxima"></span>
                        <img width="120px" src="img/ícones/maxtemp.png"/></h6>
                     <p>Temperatura Máxima: <span id="temperaturaMax"></span></p>

                </div>

            </div>
            
             <div class="col-md-6">

                <div id="jumbotronny" class="jumbotron"> 
                    <h6>Temperatura Mínima Atual Brusque<span id="temperaturaMinima"></span>
                        <img width="120px" src="img/ícones/mintemp.png"/></h6>
                     <p>Temperatura Mínima: <span id="temperaturaMin"></span></p>

                </div>

            </div>
            
             <div class="col-md-6">

                <div id="jumbotronny" class="jumbotron"> 
                    <h6>Velocidade Atual do Vento Brusque <span id="velocidadeVento"></span>
                        <img width="120px" src="img/ícones/velocidade.png"/></h6>
                     <p>Velocidade Atual: <span id="velocidade"></span></p>

                </div>
            </div>

        </div>

    </body>
</html>
            
            