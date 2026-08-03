#!/usr/bin/php
<?php
$files = glob("*.t2t");

foreach ($files as $file) {
    $file_base = str_replace(".t2t", "", $file);

    // 1. Cargar el contenido t2t fuente
    $content = file_get_contents($file);

    // 2. Limpiar marcas específicas de LaTeX que no aplican en HTML
    // Eliminar saltos de página manuales de LaTeX
    $content = str_replace(array("[newpage]", "[newpage2]"), "", $content);

    // Eliminar maquetación en dos columnas de TeX ([beginleft], [endleft], etc.)
    $content = str_replace(
        array("[beginleft]", "[endleft]", "[beginright]", "[endright]"),
        "",
        $content
    );

    // 3. Escribir temporalmente el t2t purificado para la conversión
    $tmp_t2t = "${file_base}.tmp.t2t";
    file_put_contents($tmp_t2t, $content);

    // 4. Generar el HTML limpio usando txt2tags sin cabeceras documentales (no-headers)
    $inc_html = "${file_base}_preview.html";
    exec("txt2tags --no-headers -t html -i ${tmp_t2t} -o ${inc_html}");

    // 5. Post-procesamiento del HTML generado
    if (file_exists($inc_html)) {
        $html_buffer = file_get_contents($inc_html);

        $pos = strpos($html_buffer, "<section>\n<h1>7.");
        if (!$pos) {
            echo "Internal error!!!";
            die();
        }
        $html_buffer = substr($html_buffer, 0, $pos);

        // Convertir rutas de imágenes de TeX/PDF a rutas web si aplica
        $html_buffer = str_replace("images/", "img/", $html_buffer);

        // Añadir lazy loading y responsive styling por defecto a las imágenes del CV
        $html_buffer = preg_replace(
            '/<img src="([^"]+)"([^>]*)>/i',
            '<img src="$1" class="img-fluid" loading="lazy"$2>',
            $html_buffer
        );

        // Ajustar enlaces externos para seguridad y SEO (target _blank)
        $html_buffer = preg_replace(
            '/<a href="(http[^"]+)">/i',
            '<a href="$1" target="_blank" rel="noopener">',
            $html_buffer
        );

        file_put_contents($inc_html, $html_buffer);
    }

    // 6. Limpieza de temporales
    if (file_exists($tmp_t2t)) {
        unlink($tmp_t2t);
    }

    echo "Generado HTML: ${inc_html}\n";
}
