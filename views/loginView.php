<?php
$ruta = dirname(dirname(__FILE__));
require_once($ruta.'/models/VariosModel.php');
class loginView
{

    public function pantallaLogueo()
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
               <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </head>
        <body style=" background-color: #C0C0C0;">
            <div id="div_principal_ingresotecnicos"class="contaniner" style="padding:10px;" align="center">
                <div class="row col-lg-4  mt-3">
                    <div>SISTEMA COLUMBARIO </div>
                    <div class="col-lg-12 mt-3">
                        <label>Usuario:</label>
                        <input type="text" id="usuario" class="form-control" value ="columbario">
                    </div>
                    <div class="col-lg-12 mt-3">
                        <label>Clave:</label>
                        <input type="password" id="clave" class="form-control"  value ="1234">
                    </div>
                    <div class="mt-3 text-center">
                        <button class="btn btn-primary " onclick="verificarCredenciales();">Verificar.</button>
                    </div>
                </div>  
            </div>
            
        </body>
        </html>
           <script src="/columbarios/js/login.js"></script>

        <?php
    }


    public function pantallaLogueo2()
    {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Inicio de Sesión POS</title>
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            
            <style>
                /* Estilos para el fondo de pantalla */
                body {
                    height: 100vh;
                    margin: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-family: sans-serif;
                    background-image: url('https://images.unsplash.com/photo-1549488344-933e16447844?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
                    background-size: cover;
                    background-position: center;
                    /* Aplica un filtro de desenfoque al fondo */
                    filter: blur(8px);
                    -webkit-filter: blur(8px);
                }

                /* Contenedor del formulario, que está por encima del fondo */
                .login-container {
                    position: absolute;
                    background: rgba(255, 255, 255, 0.85); /* Fondo blanco semitransparente */
                    padding: 40px;
                    border-radius: 15px;
                    text-align: center;
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
                    width: 90%;
                    max-width: 400px;
                }

                .login-logo {
                    width: 80px;
                    margin-bottom: 20px;
                }

                .login-container h2 {
                    font-weight: 600;
                    margin-bottom: 25px;
                    color: #333;
                }

                .login-container .form-control {
                    border-radius: 8px;
                    height: 50px;
                    padding: 10px 20px;
                    background-color: #f7f7f7;
                    border: 1px solid #ddd;
                }

                .login-container .btn-login {
                    background-color: #2e4d4d; /* Color verde oscuro del logo */
                    color: white;
                    font-weight: 600;
                    border: none;
                    padding: 12px;
                    border-radius: 8px;
                    margin-top: 20px;
                    transition: background-color 0.3s;
                }

                .btn-login:hover {
                    background-color: #406f6f;
                }
            </style>
        </head>
        <body>

            <div class="login-container">
                <svg class="login-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="45" fill="#2e4d4d"/>
                    <path d="M50 20c-13.8 0-25 11.2-25 25 0 8.8 4.6 16.5 11.5 20.8L50 80l13.5-14.2c6.9-4.3 11.5-12 11.5-20.8 0-13.8-11.2-25-25-25zM50 60c-5.5 0-10-4.5-10-10s4.5-10 10-10 10 4.5 10 10-4.5 10-10 10z" fill="#fff"/>
                </svg>

                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-login w-100">Log In</button>
                </form>
            </div>

        </body>
        </html>

        <?php
    }
}