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
            margin: 0;
        }

        .container2 {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            border: 2px black solid;
        }

        /* Estilos para los botones */
        .botones {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #FF0000;
            color: #fff;
            border-radius: 20px; /* Bordess redondeados */
            margin: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #8B0000;
        }

        .active {
            background-color: #8B0000;
        }

        /* Estilos para la imagen */
        .img {
            display: grid;
            place-items: center;
            max-width: 100%;
            
        }

        /* Estilos para los datos */
        .datos-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .dato {
            width: 100%;
        }

        /* Estilos para las imágenes */
        .dato img {
            max-width: 100%;
            height: auto;
        }

        /* Media Queries para hacer responsive */
        @media screen and (min-width: 768px) {
            /* Pantallas de 768px en adelante */
            .container2 {
                max-width: 600px;
            }

            .datos-cliente {
                display: flex;
                justify-content: space-between;
            }

            .contenedor-datos h3 {
                margin-right: 10px;
            }

            .datos-tlf {
                display: flex;
                justify-content: space-between;
            }

            .datos-pedido {
                display: flex;
                justify-content: space-between;
            }

            .dato5 img {
                float: left;
                clear: both;
            }

            .dato9 img {
                float: left;
                clear: both;
            }

            .dato12 {
                text-align: right;
            }
        }
    </style>
</head>

<body>
    <div class="container2">
        <div class="datos-container">
            <div class="img">
                <img src="img/encabezado.png" width="620px" height="250px" alt="">
            </div>
            <div class="dato dato1 datos-cliente">
                <h3 style="text-align: left;">Datos del Cliente:</h3>
                <p style="text-align: right;">Juan Perón </p>
            </div>
            <div class="dato dato1 datos-tlf">
                <h3 style="text-align: left;">Teléfono:</h3>
                <p style="text-align: rigth;">982945732</p>
            </div>
            <br><br><br><br><br>
            <div class="botones">
                <h3>Forma de Recojo:</h3>
             
            </div>
        </div>
        <div class="dato dato3">
            <h3>Dirección de entrega:</h3>

        </div>
        
        <div class="dato dato4 datos-pedido">
            <h3 style="text-align: left;">Mi Pedido</h3>
            <p style="text-align: rigth;">n° Pedido: B007-01</p>
        </div>
        <div class="dato dato5">
            <img src="img/hawaiano.png" width="200px" height="250px" alt="">
            <p>Poke-bowl de salmon hawaiano</p>
            <p>s/.32.00</p>
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="dato dato9">
            <img src="img/inkakola.png" width="200px" height="300px" alt="">
            <p>InkaKola 500ml</p>
            <p>s/.4.50</p>
        </div>
        <br><br><br>
        <div class="dato dato12">
            <p>Sub Total:S/.36.5</p>
            <p>Igv: S/6.57</p>
            <p>Total de la Compra:S/43.07</p>
        </div>
    </div>
 
</body>

</html>