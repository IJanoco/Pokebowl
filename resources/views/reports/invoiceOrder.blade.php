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
        .table{
            width:100%;
            margin-bottom:1rem;
            color:#212529
        }
        .table td,
        .table th{
            padding:.75rem;
            vertical-align:top;
            border-top:1px solid #dee2e6
        }
        .table thead th{
            vertical-align:bottom;
            border-bottom:2px solid #dee2e6
        }
        .table tbody+tbody{
            border-top:2px solid #dee2e6
        }
       
    </style>
</head>

<body>
    <header>
        <img src="{{$company->url_logo}}" width="100%" height="200px" alt="">
    </header>
    <section>
        <div class="container2">
       
            <div style="width: 100%;">
                <div style="width: 50%; float:left;">
                    <h3 style="text-align: left;">Datos del Cliente:</h3>
                </div>
                <div style="width: 50%; float:right;">
                    <p style="text-align: right;">{{ $invoice->user->name }} {{ $invoice->user->last_name}}</p>
                </div>
            </div>
            <br><br>
            <div style="width: 100%;">
                <div style="width: 50%; float:right;">
                    <h3 style="text-align: left;">Teléfono:</h3>
                </div>
                <div style="width: 50%; float:left;">
                    <p style="text-align: right;">{{$invoice->user->phone}}</p>
                </div>
            </div>
        <br><br>
            
            <div style="width: 100%;">
                <div style="width: 50%; float:right;">
                    <h3 style="text-align: left;">Forma de Recojo:</h3>
                </div>
                <div style="width: 50%; float:left;">
                    <p style="text-align: right;">{{$invoice->delivery_type}}</p>
                </div>
            </div>
            
            <br><br>
            <div style="width: 100%; ">
                <div style="width: 50%; float:right;">
                    <h3 style="text-align: left;">Dirección de entrega:</h3>
                </div>
                <div style="width: 50%; float:left;">
                    <p style="text-align: right;">
                        @if ($invoice->delivery_type === 'Envío a domicilio')
                        {{ $invoice->user->address }}
                        @elseif ($invoice->delivery_type === 'Recojo en tienda')
                            {{$company->address}}
                        @endif
                    </p>
                </div>
            </div>
      
        <br><br>
        <div style="width: 100%;">
            <div style="width: 50%; float:right;">
                <h3 style="text-align: left;">Mi Pedido:</h3>
            </div>
            <div style="width: 50%; float:left; ">
                <p style="text-align: right;"> {{$invoice->id}} </p>
            </div>
        </div>
        <br><br><br>
    
        <table class="table">
            
            <thead>
                <tr>
                    <td> Producto </td> 
                    <td> Precio </td>
                    <td> Cantidad</td>
                    <td> Subtotal</td>    
                </tr>
            </thead>
            <tbody>
                @foreach ($invoice->product as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ number_format($item->price, 2) }}</td>
                    <td>{{ $item->pivot->quantity }}</td>
                    <td>S/{{ number_format($item->price * $item->pivot->quantity, 2) }}</td>
                </tr>
            @endforeach
                  <tr>
                    <td>Total</td>
                    <td colspan="2"></td>
                    
                    <td> S/{{ number_format($invoice->product->sum(function($item) {
                        return $item->price * $item->pivot->quantity;
                    }), 2) }}</td>
                  </tr>
             
            </tbody>
        </table>

    </section>
  
   
</body>

</html>