<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title>Formulario de Contacto</title>
        <link href="formulario/estilo.css" rel="stylesheet" />
    </head>
    <body>
        <h2>Tu opinion de la pagina o sugerencias </h2>

        <form class="datos" action="guardar.php" method="POST" id="contact_form" runat="server" enctype="multipart/form-data">

            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"  maxlength="50" required><br>
         
             <label for="correo">Correo:</label><br>
            <input type="email" id="correo" name="correo" maxlength="100" required><br>
            
            <label for="mensaje">Mensaje:</label><br>
            <input type="text" id="mensaje" name="mensaje" maxlength="250" required><br>

            <button class="submit" type="submit"> Enviar Registro</button><a href="index.html">Volver</a>
        </form>
    </body>

 </html>