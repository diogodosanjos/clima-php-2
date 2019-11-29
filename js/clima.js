function getClima() {
    $.ajax({
        method: 'get',
        crossDomain: true,
        url: 'https://api.openweathermap.org/data/2.5/weather?id=3468879&appid=b3723fc5eff46b854b5e797656d48578',
        dataType: 'json',
        success: function (data) {

            temperatura = data.main.temp - 273;
            var tempFormatada = temperatura.toFixed(2).split('.');
         

            $('#temperatura').html(tempFormatada + "º");
            $('#umidade').html(data.main.humidity);
            $('#pressão').html(data.main.pressure);
           
             temperaturaMax = data.main.temp_max - 273;
            var tempMaxFormatada = temperaturaMax.toFixed(2).split('.');
           
            $('#temperaturaMax').html(tempMaxFormatada+ "º");
           
              temperaturaMin = data.main.temp_min - 273;
            var tempMinFormatada = temperaturaMin.toFixed(2).split('.');
           
            $('#temperaturaMin').html(tempMinFormatada+ "º");
           
            $('#velocidade').html(data.wind.speed);

            var dataAmanhecer = new Date(data.sys.sunrise * 1000);
            var descDataAmanhecer = dataAmanhecer.getHours() + ':' + dataAmanhecer.getMinutes();

            $('#amanhecer').html(descDataAmanhecer);

            var dataAnoitecer = new Date(data.sys.sunset * 1000);
            var descDataAnoitecer = dataAnoitecer.getHours() + ':' + dataAnoitecer.getMinutes();

            $('#anoitecer').html(descDataAnoitecer);

            var icone = data.weather[0].icon;
            var caminhoIcone = 'img/ícones/' + icone + '.png';
            $('#icone').attr('src', caminhoIcone);


            descricao = traduzirDescricao(data.weather[0].description);
            $('#situacao').html(descricao);

        },
        error: function (argument) {
            alert('falha ao obter dados!');
        }
    });
}

function traduzirDescricao(descricao) {
    descricaoTraduzida = "";

    if (descricao == "clear sky") {
        descricaoTraduzida = "céu limpo";
    } else if (descricao == "few cluds") {
        descricaoTraduzida = "Poucas nuvens";
    } else if (descricao == "scattered clouds") {
        descricaoTraduzida = "nuvens dispersas";
    } else if (descricao == "broken clouds") {
        descricaoTraduzida = "Sol entre Nuvens";
    } else if (descricao == "shower rain") {
        descricaoTraduzida = " pouca Chuva";
    } else if (descricao == " rain") {
        descricaoTraduzida = "Chuva";
    } else if (descricao == "thunderstorm") {
        descricaoTraduzida = "Tempestade";
    } else if (descricao == "snow") {
        descricaoTraduzida = "Neve";
    } else if (descricao == " mist") {
        descricaoTraduzida = "Névoa";
    }
    return descricaoTraduzida;
}

window.onload = function () {
    getClima();
};