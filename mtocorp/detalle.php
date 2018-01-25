<?php
include('comunes/func.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Round About - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/round-about.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
<?php
include ('/comunes/menugral.php');
?>

    <!-- Page Content -->
    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Estadísticas</h2>
            </div>
<?php
PintarModulo("Conversión/Solicitudes","0,88%","Nº de formularios web recibidos");
PintarModulo("Conversión/Clientes","1,32%","Nº de formualios web recibidos");
PintarModulo("Abandono Web","99,98%","Tasa de Abandono");
PintarModulo("CAC","864€","Coste de Adquisición por Cliente");
PintarModulo("Venta/Visita","76","Nº de Visitas para Conseguir una Venta");
PintarModulo("Cesta Media","856,20€","Importe Medio de Venta");
PintarModulo("Facebook","67","Seguidores en Facebook");
PintarModulo("Twitter","23","Seguidores en Twitter");
PintarModulo("Social Media","90","Total de Seguidores");
PintarModulo("Gastos Totales","5.184€",null);
PintarModulo("Beneficios","-46,80€",null);
PintarModulo("% de Rentabilidad","-1%",null);


?>

        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
