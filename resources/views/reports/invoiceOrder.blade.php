<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Compra</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 12px;
            margin: 0;
        }
        .container2 {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            
        }
        /* Media Queries para hacer responsive */
        @media screen and (min-width: 768px) {
            /* Pantallas de 768px en adelante */
            .container2 {
                max-width: 600px;
            }           
        }
    </style>
</head>

<body>
    <div class="container2">
            <img src="img/encabezado.png" width="100%" height="200px" alt="">
            <div style="width: 100%;">
                <div style="width: 50%; float:left;">
                    <h3 style="text-align: left;">Datos del Cliente:</h3>
                </div>
                <div style="width: 50%; float:right;">
                    <p style="text-align: right;">Juan Perón </p>
                </div>
            </div>
            <br><br>
            <div style="width: 100%;">
                <div style="width: 50%; float:right;">
                    <h3 style="text-align: left;">Teléfono:</h3>
                </div>
                <div style="width: 50%; float:left;">
                    <p style="text-align: right;">982945732</p>
                </div>
            </div>
        <br><br>
            <div style="width: 100%;">
                <div style="width: 50%; float:right;">
                    <h3 style="text-align: left;">Forma de Recojo:</h3>
                </div>
                <div style="width: 50%; float:left;">
                    <p style="text-align: right;">En tienda</p>
                </div>
            </div>
            <br><br>
            <div style="width: 100%; ">
                <div style="width: 50%; float:right;">
                    <h3 style="text-align: left;">Dirección de entrega:</h3>
                </div>
                <div style="width: 50%; float:left;">
                    <p style="text-align: right;">Av. Por ahí</p>
                </div>
            </div>
        <br><br>
        <div style="width: 100%;">
            <div style="width: 50%; float:right;">
                <h3 style="text-align: left;">Mi Pedido:</h3>
            </div>
            <div style="width: 50%; float:left; ">
                <p style="text-align: right;">n° Pedido: B007-01</p>
            </div>
        </div>
        <br><br>
        <div style="width: 100%;">
            <div style="width: 25%; float:right;">
                <p  style="text-align: left;">Poke-bowl de salmon hawaiano</p>
            </div>
            <div style="width: 25%; float:left; ">
                <p style="text-align: right;">s/.32.00</p>
            </div>
            <div style="width: 25%; float:left;">
                <p  style="text-align: right;">2</p>
            </div>
            <div style="width: 25%; float:left; ">
                <img src="img/hawaiano.png" style="float:right; width:150px; height:100px;" alt="">
            </div>
            
            
            
        </div>
        <br><br>
        <div class="">
            <img src="img/inkakola.png" style="float:right; width:100px; height:100px;"  alt="">
            <p>InkaKola 500ml</p>
            <p>s/.4.50</p>
        </div>
        <br><br>
        <div class="" >
            <p>Sub Total:S/.36.5</p>
            <p>Igv: S/6.57</p>
            <p>Total de la Compra:S/43.07</p>
        </div>
    </div>
 
</body>

</html>