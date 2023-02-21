<html>

    <head>
        <title>SESION - Seafood</title> 
    </head>

    <body>
        
        <div class="fuenteRegistro2">
            <form action="" class="form" method="post">
            <h1 class="title">INICIAR SESIÓN</h1>
				<p class="textoRegistro">No tienes cuenta? <a href=<?=base_url."usuario/registro"?>>REGÍSTRATE</a></p>

            <div class="fuenteTextoRegistro">
                <input type="email" name="email" class="input" placeholder="a" required>
                <label class="label">Email</label>
            </div>

            <div class="fuenteTextoRegistro">
                <input type="password" name="password" class="input" placeholder="a" minlength="4" pattern="[A-Za-z][A-Za-z0-9]*[0-9][A-Za-z0-9]*" title="Mínimo de 5 carácteres y 1 número." required>
                <label class="label">Password</label>
            </div>

            <input type="submit" class="botonRegistro" value="INICIAR SESIÓN">
            </form>
        </div>
        
    </body>
    
</html>