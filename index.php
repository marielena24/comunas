  <!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>login</title>
      <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    
       <div class="container">
           <div class="form-box">
               <div class="button-box">
                    <div id="elegir"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Iniciar Sesion </button>
                    <button type="button" class="toggle-btn" onclick="registrar()">Registrar</button>
               </div>

               <form id="login" class="input-group" name="formulario" method="Post" action="validar.php">
                   <input type="text" class="input-field" name="usuario" placeholder="Correo" required>
                   <input type="password" class="input-field" name="clave" placeholder="Contraseña" required>
                   <input type="checkbox" class="check-box"><span>Recordar Contraseña</span>
                   <button type="submit" class="submit-btn">Acceder</button>
               </form>
               <form id="registrar" class="input-group" name="fregistro" method="Post" action="registro_usuario.php">
                   <input type="text" class="input-field" name="usuario" placeholder="Nombre de Usuario" required> 
                   <input type="text" class="input-field" name="apellido" placeholder="Apellido de Usuario" required> 
                   <input type="text" class="input-field" name="cedula" placeholder="cedula de Usuario" required> 
                   <input type="email" class="input-field" name="correo" placeholder="correo" required>                   
                   <input type="password" class="input-field"  name="clave" maxlength="10" placeholder="Contraseña" required>
                   <input type="password" class="input-field" name="clave_c" maxlength="10" placeholder="Contraseña" required>
                   <button type="submit" class="submit-btn">Registrar</button>
                </form>
           </div>
       </div>
       <script>
           var x = document.getElementById("login");
           var y = document.getElementById("registrar");
           var z = document.getElementById("elegir");

           function login(){
               x.style.left = "50px";
               y.style.left = "450px";
               z.style.left = "0px";               
            }
            
            function registrar(){
               x.style.left = "-400px";
               y.style.left = "50px";
               z.style.left = "120px"; 


            }

       </script>
  </body>
  </html>