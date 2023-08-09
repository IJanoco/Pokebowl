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
            font-size: 11px;
            margin: 0;
        }

        .container2 {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            
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
        
            <div class="img">
                <img src="img/encabezado.png" width="100%" height="200px" alt="">
            </div>
            <div style="width: 100%; display:flex;">
                <div style="width: 50%; float:left; display:flex; justify-content:start;">
                    <h3 style="text-align: left;">Datos del Cliente:</h3>
                </div>
                <div style="width: 50%; float:right; display:flex; justify-content:end;">
                    <p style="text-align: right;">Juan Perón </p>
                </div>
            </div>
            <br><br>
            <div style="width: 100%; display:flex;">
                <div style="width: 50%; float:right; display:flex; justify-content:start;">
                    <h3 style="text-align: left;">Teléfono:</h3>
                </div>
                <div style="width: 50%; float:left; display:flex; justify-content:end;">
                    <p style="text-align: right;">982945732</p>
                </div>
            </div>
            
        
        <br><br>
        
            <div style="width: 100%; display:flex;">
                <div style="width: 50%; float:right; display:flex; justify-content:start;">
                    <h3 style="text-align: left;">Forma de Recojo:</h3>
                </div>
                <div style="width: 50%; float:left; display:flex; justify-content:end;">
                    <p style="text-align: right;">En tienda</p>
                </div>
            </div>
            <br><br>
            <div style="width: 100%; display:flex;">
                <div style="width: 50%; float:right; display:flex; justify-content:start; ">
                    <h3 style="text-align: left;">Dirección de entrega:</h3>
                </div>
                <div style="width: 50%; float:left; display:flex; justify-content:end;">
                    <p style="text-align: right;">Av. Por ahí</p>
                </div>
            </div>
        <br><br>
        <div style="width: 100%; display:flex;">
            <div style="width: 50%; float:right; display:flex; justify-content:start; ">
                <h3 style="text-align: left;">Mi Pedido:</h3>
            </div>
            <div style="width: 50%; float:left; display:flex; justify-content:end;">
                <p style="text-align: right;">n° Pedido: B007-01</p>
            </div>
        </div>
        <br>
        <div class="dato dato5">
            
            <img src="img/hawaiano.png" style="float:right; bottom:10px; width:100px; height:100px;" alt="">
            <p>Poke-bowl de salmon hawaiano</p>
            <p>s/.32.00</p>
        </div>
        <br><br><br><br><br>
        <div class="dato dato9">
            
            <img src="img/inkakola.png" style="float:right; bottom:10px; width:100px; height:100px;"  alt="">
            <p>InkaKola 500ml</p>
            <p>s/.4.50</p>
        </div>
        <br><br><br>
        <div class="dato dato12" >
            <p>Sub Total:S/.36.5</p>
            <p>Igv: S/6.57</p>
            <p>Total de la Compra:S/43.07</p>
        </div>
    </div>
 
</body>

</html>