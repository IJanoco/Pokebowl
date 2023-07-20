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
        }

        /* Estilos para los botones */
        .botones {
            display: flex;
            justify-content: center;
            margin-top: 10px;
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
            margin: 10px 0;
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

            .dato1 {
                position: relative;
                top: 0;
                left: 0;
            }
            .datof {
            text-align: right;
            max-width: 300px; 
            margin: 0 auto;
            }

        

            .dato2 {
                position: relative;
                top: 0;
                left: 0;
            }

            .dato3 {
                position: relative;
                top: 0;
                left: 0;
            }

            .dato4 {
                position: relative;
                top: 0;
                left: 0;
            }

            .dato5 {
                position: relative;
                top: 0;
                left: 0;
            }

            .dato6 {
                position: relative;
                top: 0;
                left: 0;
            }

            .dato7 {
                position: relative;
                top: 0;
                left: 0;
            }

            .dato8 {
                position: relative;
                top: 0;
                left: 0;
            }

            .dato9 {
                display: block;
            }

            .datos-container {
                display: flex;
            }
        }
    </style>
</head>

<body>

    <div class="img">
        <img src="/assetscustomer/img/encabezado.png" width="800px" height="250px" alt="">
    </div>
    <div class="container2">
        <div class="datos-container">
            <div class="dato dato1">
                <p>Datos del Cliente:</p>
                
            </div>
            <div class="dato datof">
                <p>Juan Perón </p>
                <p>telf:982945732</p>
                
            </div>
            <div class="dato dato2">
                <p>Forma de Recojo:</p>
            </div>
            <!--boton-->
        <div class="botones">
            <button onclick="mostrarVista(1)">delivery</button>
            <button onclick="mostrarVista(2)">recojo</button>
        </div>

        
    </div>

    
            <div class="dato dato3">
                <p>Direccion de entrega:</p>
            </div>
            <div id="areaVistas" class="areaVistas">
                <div id="vista1" class="vista">
                    <h1>direccion de cliente</h1>
                    <p>mz Blt 15 urb mercurio</p>
                </div>
    
                <div id="vista2" class="vista" style="display: none;">
                    <h1>direccion de la sucursal</h1>
                    <p>av los paltos-345 lince</p>
                </div>
            </div>
            <div class="dato dato4">
                <p>Mi Pedido</p>
            </div>
            <div class="dato dato7">
                <p>n° Pedido: B007-01</p>
            </div>
            <div class="dato dato5">
                <img src="/assetscustomer/img/hawaiano.png" width="200px" height="250px" alt="">
            </div>
            <div class="dato dato6">
                <p>poke-bowl de salmon hawaiano</p>
            </div>
            
            <div class="dato dato8">
                <p>s/.32.00</p>
            <div>
                    <img src="/assetscustomer/img/inkakola.png" width="200px" height="300px" alt="">
                </div>
            <div class="dato dato9">
                <p>InkaKola 500ml</p>
            <div>
            <div class="dato dato10">
                <p>s/.4.50</p>
            <div>
            <div class="dato dato11">
                <p>Sub Total:</p>
            <div>
            <div class="dato dato12">
                <p>Igv: s/6.57</p>
            <div>   
            <div class="dato dato1">
                <p><p>Total de la Compra</p></p>
            <div> 
                
            </div>
        </div>
        <script>
            function mostrarVista(numeroVista) {
                var vistas = document.getElementsByClassName("vista");
                var botones = document.getElementsByTagName("button");
    
                for (var i = 0; i < vistas.length; i++) {
                    vistas[i].style.display = "none";
                    botones[i].classList.remove("active");
                }
    
                vistas[numeroVista - 1].style.display = "block";
                botones[numeroVista - 1].classList.add("active");
            }
        </script>
</body>

</html>