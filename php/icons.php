<?php

// phpcs:disable Generic.Files.LineLength

function icon($name, $size = 18)
{
    $icons = [
        "profile" => '<circle cx="12" cy="8" r="3.5"/><path d="M5 20c0-3.9 3.1-7 7-7s7 3.1 7 7"/>',
        "grid" => '<rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/>',
        "mail" => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>',
        "chevron" => '<path d="m9 6 6 6-6 6"/>',
        "external" => '<path d="M7 17 17 7"/><path d="M9 7h8v8"/>',
        "download" => '<path d="M12 3v12"/><path d="m7 11 5 5 5-5"/><path d="M5 21h14"/>',
    ];
    $stroke = '<svg viewBox="0 0 24 24" width="' . $size . '" height="' . $size .
        '" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' .
        $icons[$name] . '</svg>';
    return $stroke;
}

function social_icon($name, $size = 18)
{
    $s = $size;
    switch ($name) {
        case "github":
            return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" fill="currentColor" aria-hidden="true">' .
                '<path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.53 2.34 1.09 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.56-1.11-4.56-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02a9.4 9.4 0 0 1 5 0c1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10 10 0 0 0 12 2Z"/></svg>';
        case "sourceforge":
            return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" aria-hidden="true">' .
                '<text x="12" y="17.5" text-anchor="middle" font-size="17" font-weight="900" fill="currentColor" font-family="Atkinson Hyperlegible, sans-serif">sf</text></svg>';
        case "linkedin":
            return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" aria-hidden="true">' .
                '<text x="12" y="17.5" text-anchor="middle" font-size="17" font-weight="900" fill="currentColor" font-family="Atkinson Hyperlegible, sans-serif">in</text></svg>';
        case "mastodon":
            return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s .
                '" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' .
                '<path d="M4 5.5A2.5 2.5 0 0 1 6.5 3h11A2.5 2.5 0 0 1 20 5.5v7a2.5 2.5 0 0 1-2.5 2.5H10l-4 4v-4H6.5A2.5 2.5 0 0 1 4 12.5v-7Z"/></svg>';
        case "facebook":
            return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" aria-hidden="true">' .
                '<text x="12" y="18.5" text-anchor="middle" font-size="20" font-weight="900" font-style="italic" fill="currentColor" font-family="Georgia, serif">f</text></svg>';
        case "x":
            return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s .
                '" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" aria-hidden="true">' .
                '<path d="M6 6l12 12M18 6 6 18"/></svg>';
        case "youtube":
            return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s . '" aria-hidden="true">' .
                '<rect x="3" y="6" width="18" height="12" rx="3" fill="none" stroke="currentColor" stroke-width="2"/>' .
                '<path d="M10.5 9.5v5l4.5-2.5-4.5-2.5Z" fill="currentColor"/></svg>';
        case "instagram":
            return '<svg viewBox="0 0 24 24" width="' . $s . '" height="' . $s .
                '" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' .
                '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/>' .
                '<circle cx="17.3" cy="6.7" r="1.1" fill="currentColor" stroke="none"/></svg>';
    }
    return "";
}
