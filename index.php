<?php
/**
 * berman's chiken — pagina principal
 * ------------------------------------------------------------
 * Los datos de la tienda viven en el arreglo $tienda y el menu en
 * $menu: para cambiar un precio, una direccion o el numero de
 * WhatsApp basta con editar esas lineas, sin tocar el HTML de abajo.
 */

$tienda = [
    'nombre'    => "berman's chiken",
    'eslogan'   => 'Pollo crujiente, directo del fuego',
    'descripcion' =>
        'Pollos al ala, alitas crocantes y combos hechos para compartir. '
        . 'Frituras del día con receta propia y aceite que cambiamos '
        . 'varias veces al día.',
    // Reemplaza por el numero real (51 + celular, sin + ni espacios).
    'whatsapp'  => '51987654321',
    'telefono'  => '(01) 234-5678',
    'direccion' => 'Av. Los Frutales 1420, Lima',
    'email'     => 'hola@bermanischiken.pe',
    'instagram' => '@bermanischiken',
    'anios'     => '12',
    'pedidos'   => '45 mil',
    'tiendas'   => '5',
];

$menu = [
    [
        'nombre'    => 'Pollo a la Brasa',
        'precio'    => 'S/ 32.00',
        'desc'      => 'Medio pollo marinado 12 horas, asado al carbón y terminado con rocoto y ají amarillo.',
        'categoria' => 'brasas',
        'icono'     => '🍗',
        'etiquetas' => ['Brasa', 'Favorito'],
    ],
    [
        'nombre'    => 'Pollo Frito Crocante',
        'precio'    => 'S/ 30.00',
        'desc'      => 'Nuestro clásico: empanizado doble para que aguante la jugosidad hasta la última mordida.',
        'categoria' => 'frito',
        'icono'     => '🍖',
        'etiquetas' => ['Crocante'],
    ],
    [
        'nombre'    => 'Alitas Picantes',
        'precio'    => 'S/ 26.00',
        'desc'      => '12 unidades bañadas en salsa de ají amarillo y un baño final de miel picante.',
        'categoria' => 'alitas',
        'icono'     => '🌶️',
        'etiquetas' => ['Picante', 'Nuevo'],
    ],
    [
        'nombre'    => 'Alitas BBQ',
        'precio'    => 'S/ 26.00',
        'desc'      => 'Baño de barbecue ahumado con glaseado suave y semiácido.',
        'categoria' => 'alitas',
        'icono'     => '🍯',
        'etiquetas' => ['Ahumado'],
    ],
    [
        'nombre'    => 'Combo Familiar',
        'precio'    => 'S/ 89.00',
        'desc'      => 'Pollo a la brasa, 4 piezas fritas, papas, aguacate y 2 limonadas de 1 litro. Sirve para 4.',
        'categoria' => 'combos',
        'icono'     => '🍱',
        'etiquetas' => ['Para compartir', 'Oferta'],
    ],
    [
        'nombre'    => 'Combo Personal',
        'precio'    => 'S/ 29.90',
        'desc'      => 'Cuarto de pollo a la brasa, papas fritas y una bebida personal de 500 ml.',
        'categoria' => 'combos',
        'icono'     => '🥤',
        'etiquetas' => ['Oferta'],
    ],
];

$categorias = [
    'todos'   => 'Todo el menu',
    'brasas'  => 'A la brasa',
    'frito'   => 'Fritos',
    'alitas'  => 'Alitas',
    'combos'  => 'Combos',
];

$horarios = [
    'Lunes a Sabado' => '11:00 am - 10:00 pm',
    'Domingo'        => '12:00 pm - 8:00 pm',
];

// Enlace de WhatsApp con un mensaje listo para enviar.
$linkWpp = 'https://wa.me/' . $tienda['whatsapp'] . '?text='
    . rawurlencode('¡Hola! Quisiera hacer un pedido en ' . $tienda['nombre']);

/** Escapa texto para imprimirlo seguro dentro del HTML. */
function e($texto)
{
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($tienda['nombre']) ?> | <?= e($tienda['eslogan']) ?></title>
    <meta name="description" content="<?= e($tienda['descripcion']) ?>">
    <meta name="theme-color" content="#14100c">

    <meta property="og:title" content="<?= e($tienda['nombre']) ?>">
    <meta property="og:description" content="<?= e($tienda['descripcion']) ?>">
    <meta property="og:type" content="restaurant">

    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🍗</text></svg>">
</head>
<body>

<!-- ============ Barra de navegacion ============ -->
<header class="barra">
    <div class="envoltorio barra__contenido">
        <a class="logo" href="#inicio">
            <span class="logo__pollo" aria-hidden="true">🍗</span>
            <span class="logo__texto">
                <?= e($tienda['nombre']) ?>
                <small>Desde 2014</small>
            </span>
        </a>

        <button class="menu-movil" type="button" aria-expanded="false"
                aria-label="Abrir menu de navegacion">&#9776;</button>

        <nav class="nav" aria-label="Navegacion principal">
            <a href="#menu">Menu</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#contacto">Contacto</a>
            <a class="boton boton--primario" href="<?= e($linkWpp) ?>"
               target="_blank" rel="noopener">Pedir ahora</a>
        </nav>
    </div>
</header>

<main id="inicio">

    <!-- ============ Portada ============ -->
    <section class="portada">
        <div class="envoltorio portada__contenido">
            <span class="etiqueta">Pollo frito y a la brasa</span>
            <h1>El pollo que se lleva <em>el primer bocado</em>.</h1>
            <p><?= e($tienda['descripcion']) ?></p>

            <div class="portada__acciones">
                <a class="boton boton--primario" href="<?= e($linkWpp) ?>"
                   target="_blank" rel="noopener">Pedir por WhatsApp</a>
                <a class="boton boton--linea" href="#menu">Ver el menu</a>
            </div>

            <div class="portada__sello">
                <div class="cifra">
                    <?= e($tienda['anios']) ?>
                    <span>Anos sirviendo</span>
                </div>
                <div class="cifra">
                    <?= e($tienda['pedidos']) ?>
                    <span>Pedidos al mes</span>
                </div>
                <div class="cifra">
                    <?= e($tienda['tiendas']) ?>
                    <span>Tiendas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Carta ============ -->
    <section class="seccion carta" id="menu">
        <div class="envoltorio">
            <div class="carta__encabezado">
                <div>
                    <span class="etiqueta">La carta</span>
                    <h2 class="titulo">Nuestro menu</h2>
                    <p class="subtitulo">
                        Precios en soles, IGV incluido. Todos los pedidos
                        incluyen papas y ají verde de la casa.
                    </p>
                </div>

                <div class="filtros" role="group" aria-label="Filtrar el menu">
                    <?php foreach ($categorias as $clave => $titulo): ?>
                        <button class="filtro" type="button"
                                data-categoria="<?= e($clave) ?>"
                                aria-pressed="<?= $clave === 'todos' ? 'true' : 'false' ?>">
                            <?= e($titulo) ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="platos">
                <?php foreach ($menu as $plato): ?>
                    <article class="plato" data-categoria="<?= e($plato['categoria']) ?>">
                        <div class="plato__marca" aria-hidden="true">
                            <?= e($plato['icono']) ?>
                        </div>
                        <div class="plato__cuerpo">
                            <div class="plato__fila">
                                <h3 class="plato__nombre"><?= e($plato['nombre']) ?></h3>
                                <span class="plato__precio"><?= e($plato['precio']) ?></span>
                            </div>
                            <p class="plato__desc"><?= e($plato['desc']) ?></p>
                            <div class="plato__etiquetas">
                                <?php foreach ($plato['etiquetas'] as $etiqueta): ?>
                                    <span class="chip
                                        <?= in_array($etiqueta, ['Picante', 'Nuevo'], true)
                                            ? 'chip--picante' : '' ?>">
                                        <?= e($etiqueta) ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ============ Nosotros ============ -->
    <section class="seccion" id="nosotros">
        <div class="envoltorio historia">
            <div>
                <span class="etiqueta">Nuestra historia</span>
                <h2 class="titulo">Empezamos con una freidora y muita fe</h2>
                <p class="subtitulo">
                    <?= e($tienda['nombre']) ?> nacio en un carrito frente a la
                    plaza, en 2014. Doce anos despues seguimos con la misma
                    receta y la misma obsesion por el aceite: lo cambiamos
                    cuatro veces al dia, porque el pollo sabe a lo que se
                    fríe en.
                </p>

                <div class="historia__lista">
                    <div class="rasgo">
                        <span class="rasgo__icono" aria-hidden="true">🕐</span>
                        <div>
                            <h3>Hecho al momento</h3>
                            <p>Nada pre-elaborado. Si no esta en la rotisserie, no esta en el menu.</p>
                        </div>
                    </div>
                    <div class="rasgo">
                        <span class="rasgo__icono" aria-hidden="true">🥬</span>
                        <div>
                            <h3>Ingredientes de verdad</h3>
                            <p>Pollo fresco del dia, marinado 12 horas con especias enteras.</p>
                        </div>
                    </div>
                    <div class="rasgo">
                        <span class="rasgo__icono" aria-hidden="true">🛵</span>
                        <div>
                            <h3>Llega caliente</h3>
                            <p>Entregamos en 30 minutos con el empaque que mantiene la costra crujiente.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tarjeta-imagen" role="img"
                 aria-label="Ilustracion de un pollo dorado recien frito">🍗</div>
        </div>
    </section>

    <!-- ============ Promocion ============ -->
    <section class="seccion">
        <div class="envoltorio">
            <div class="promo">
                <div>
                    <h2>Lleva 2 pollos y el tercero es gratis</h2>
                    <p>
                        Todos los jueves y domingos. Aplicable a pollo a la brasa
                        y a los combos familiares. Sin codigos, solo menciona el
                        promo al hacer tu pedido.
                    </p>
                </div>
                <a class="boton" href="<?= e($linkWpp) ?>"
                   target="_blank" rel="noopener">Aprovechar promo</a>
            </div>
        </div>
    </section>

    <!-- ============ Contacto ============ -->
    <section class="seccion contacto" id="contacto">
        <div class="envoltorio">
            <span class="etiqueta">Visitanos</span>
            <h2 class="titulo">Donde encontrarnos</h2>
            <p class="subtitulo">
                Puedes encargar por WhatsApp, pasar por el local o pedir
                delivery por las apps.
            </p>

            <div class="rejilla-contacto">
                <div class="dato">
                    <span class="dato__icono" aria-hidden="true">📍</span>
                    <h3>Direccion</h3>
                    <p><?= e($tienda['direccion']) ?></p>
                </div>

                <div class="dato">
                    <span class="dato__icono" aria-hidden="true">📞</span>
                    <h3>Telefono</h3>
                    <p><a href="tel:<?= e(preg_replace('/\s+/', '', $tienda['telefono'])) ?>">
                        <?= e($tienda['telefono']) ?></a></p>
                    <p><a href="<?= e($linkWpp) ?>" target="_blank" rel="noopener">WhatsApp</a></p>
                </div>

                <div class="dato">
                    <span class="dato__icono" aria-hidden="true">🕐</span>
                    <h3>Horario</h3>
                    <?php foreach ($horarios as $dia => $rango): ?>
                        <div class="horario">
                            <span><?= e($dia) ?></span>
                            <span><?= e($rango) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="dato">
                    <span class="dato__icono" aria-hidden="true">📱</span>
                    <h3>Redes</h3>
                    <p><?= e($tienda['email']) ?></p>
                    <p>Instagram <?= e($tienda['instagram']) ?></p>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- ============ Pie ============ -->
<footer class="pie">
    <div class="envoltorio pie__contenido">
        <p>&copy; <span data-anio>2026</span> <?= e($tienda['nombre']) ?>. Todos los derechos reservados.</p>
        <div class="pie__enlaces">
            <a href="#menu">Menu</a>
            <a href="#contacto">Contacto</a>
        </div>
    </div>
</footer>

<a class="wpp" href="<?= e($linkWpp) ?>" target="_blank" rel="noopener"
   aria-label="Pedir por WhatsApp" title="Pedir por WhatsApp">&#128172;</a>

<script src="assets/js/app.js"></script>
</body>
</html>
