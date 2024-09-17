<main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
            <?php endforeach; ?>

        <form method="POST" class="formulario" action="/logging">
            <fieldset>
                <legend>Nombre y Password</legend>

                <label for="nombre">Nombrel</label>
                <input type="nombre" name="admin[nombre]" placeholder="Tu nombre de usuario" id="nombre">

                <label for="password">Password</label>
                <input type="password" name="admin[password]" placeholder="Tu Password" id="password">
            </fieldset>
        
            <input type="submit" value="Iniciar Sesión" class="boton boton-verde-claro">
        </form>
    </main>