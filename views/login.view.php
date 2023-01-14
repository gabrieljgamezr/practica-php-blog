<?php
    require 'header.php';
?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Inicio de Sesión</h2>
            <form class="formulario" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="usuario" id="usuario" placeholder="Usuario:">
                <input type="password" name="password" id="password" placeholder="Contraseña:">
                <input type="submit" value="Iniciar Sesión">
            </form>
        </article>
    </div>
</div>

<?php
    require 'footer.php';
?>