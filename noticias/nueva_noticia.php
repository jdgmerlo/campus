<!DOCTYPE html>
<?php
session_start();
if (empty($_SESSION['nombre'])) {
    echo "INICIA SESION";
    header("location:../index.php?errorP=1");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Campus Virtual</title>
        <link rel="stylesheet" href="../estilos/estilos.css"  type="text/css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-30858985-1']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>

        <?php include("../header.php"); ?>


        <div class="row">
            <div class="col-md-2">
                <?php include("../barra_navegacion.php"); ?>
            </div>
            <div class="col-md-8">
                <?php 
                $carrera = $_GET['carrera'];
                ?>
                <br />
                <hr />
                <br />
                <br />
                <form class="form-horizontal" method="post" action="agregar_noticia.php?carrera=<?php echo $carrera ?>">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Noticia</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" name="mensaje" id="inputPassword3" required="required" placeholder="Escriba la Noticia Aquí..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="submit" class="btn btn-default">Enviar Noticia</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-2">
                <strong>VACIO</strong>
            </div>
        </div>



        <?php include("../footer.php") ?>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
