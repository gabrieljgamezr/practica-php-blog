<?php
    require 'header.php';
?>
<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Editar Artículo</h2>
            <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="hidden" name="id" value="<?php echo $post['id']?>">
                <input type="text" name="titulo" placeholder="Titulo del Artículo:" value="<?php echo $post['titulo']?>">
                <input type="text" name="extracto" placeholder="Extracto del Artículo:" value="<?php echo $post['extracto']?>">
                <textarea name="texto" placeholder="Texto del Artículo"><?php echo $post['texto']?></textarea>
                <input type="file" name="thumb">
                <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']?>">
                <input type="submit" value="Modificar Artículo">
            </form>
        </article>
    </div>
</div>
<?php
    require 'footer.php';
?>