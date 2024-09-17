<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/public/build/css/app.css">
</head>
<body>

<div>
    <main>
        <h3>Nuestro Blog</h3>

        <article class="entrada">
            <div class="entrada__imagen">
                <picture>
                    <source loading="lazy" srcset="../../public/build/img/blog1.webp" type="image/webp">
                    <img loading="lazy" src="../../public/build/img/blog1.jpg" alt="imagen blog"> 
                </picture>
            </div>

            <div class="entrada__contenido">
                <h4 class="no-margin">Tipos de Familias</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
                <a href="/entrada" class="boton boton--primario">Leer Entrada</a>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada__imagen">
                <picture>
                    <source loading="lazy" srcset="../../public/build/img/blog2.webp" type="image/webp">
                    <img loading="lazy" src="../../public/build/img/blog2.jpg" alt="imagen blog"> 
                </picture>
            </div>

            <div class="entrada__contenido">
                <h4 class="no-margin">Consejos y Contenido de Expertos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
                <a href="/entrada" class="boton boton--primario">Leer Entrada</a>
            </div>
        </article>

        <article class="entrada">
            <div class="entrada__imagen">
                <picture>
                    <source loading="lazy" srcset="../../public/build/img/blog3.webp" type="image/webp">
                    <img loading="lazy" src="../../public/build/img/blog3.jpg" alt="imagen blog"> 
                </picture>
            </div>

            <div class="entrada__contenido">
                <h4 class="no-margin">Beneficios de una Coparentalidad Gestionada</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque reiciendis ea excepturi! Molestias aperiam fugiat deleniti laudantium atque numquam?</p>
                <a href="/entrada" class="boton boton--primario">Leer Entrada</a>
            </div>
        </article>
    </main>

    <aside class="sidebar">
        <h3>Nuestras Soluciones</h3>

        <ul class="cursos no-padding">
            <li class="widget-curso">
                <h4 class="no-margin">Gestión Familiar</h4>
                <p class="widget-curso__label">Precio: 
                    <span class="widget-curso__info">Gratis</span>
                </p>
                <p class="widget-curso__label">Tiempo Disponible: 
                    <span class="widget-curso__info">3 Meses</span>
                </p>
                <a href="/entrada" class="boton boton--secundario">Más Información sobre Funcionalidades</a>
            </li>

            <li class="widget-curso">
                <h4 class="no-margin">Guía Legal para Principiantes</h4>
                <p class="widget-curso__label">Precio: 
                    <span class="widget-curso__info">Gratis</span>
                </p>
                <p class="widget-curso__label">Tiempo Disponible: 
                    <span class="widget-curso__info">Indefinido</span>
                </p>
                <a href="/entrada" class="boton boton--secundario">Más Información sobre Consejos Legales</a>
            </li>
        </ul>
    </aside>
</div>

</body>
</html>