<?php // phpcs:disable Generic.Files.LineLength ?>
<?php require_once "php/langs.php"; ?>
<?php require_once "php/icons.php"; ?>
<?php
    $social = [
        "github" => "https://github.com/josepsanzcamp",
        "sourceforge" => "https://sourceforge.net/u/josepsanzcamp",
        "linkedin" => "https://linkedin.com/in/josepsanzcamp",
        "mastodon" => "https://mastodont.cat/@josepsanzcamp",
        "facebook" => "https://facebook.com/josepsanzcamp",
        "x" => "https://twitter.com/josepsanzcamp",
        "youtube" => "https://youtube.com/@josepsanzcamp",
        "instagram" => "https://instagram.com/josepsanzcamp",
    ];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?php echo $labels[$lang]["description"]; ?>" />
        <meta name="author" content="<?php echo $labels[$lang]["author"]; ?>" />

        <title><?php echo $labels[$lang]["title"]; ?></title>
        <link rel="shortcut icon" href="img/favicon.ico" />

        <link href="css/atkinson-hyperlegible.css" rel="stylesheet" />
        <link href="css/sanz.css" rel="stylesheet" />

        <meta name="theme-color" content="#12151c" />
    </head>

    <body>

        <div class="layout">

            <header class="sidebar">

                <div class="brand">
                    <?php $image = "img/profile.png"; ?>
                    <?php $size = getimagesize($image);
                        $width = $size[0];
                        $height = $size[1]; ?>
                    <img src="<?php echo $image . "?" . md5_file($image); ?>" alt=""
                        width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                    <span class="who">
                        <span class="name"><?php echo $labels[$lang]["name"]; ?></span>
                        <span class="role"><?php echo $labels[$lang]["skills"]; ?></span>
                    </span>
                </div>

                <nav class="nav" aria-label="<?php echo $labels[$lang]["toggle"]; ?>">
                    <a class="navlink" href="#projects" data-target="projects">
                        <?php echo icon("grid"); ?>
                        <?php echo $labels[$lang]["portfolio"]; ?>
                        <span class="count"><?php echo count($labels[$lang]["portfolios"]); ?></span>
                    </a>
                    <a class="navlink" href="#profile" data-target="profile">
                        <?php echo icon("profile"); ?>
                        <?php echo $labels[$lang]["about"]; ?>
                    </a>
                    <a class="navlink" href="#contact" data-target="contact">
                        <?php echo icon("mail"); ?>
                        <?php echo $labels[$lang]["contact"]; ?>
                    </a>
                </nav>

                <div class="sidebar-foot">
                    <div class="langs">
                        <a href="index.ca.html" title="<?php echo $labels[$lang]["catala"]; ?>" <?php echo $lang == "ca" ? 'aria-current="true"' : ""; ?>>CA</a>
                        <a href="index.es.html" title="<?php echo $labels[$lang]["castellano"]; ?>" <?php echo $lang == "es" ? 'aria-current="true"' : ""; ?>>ES</a>
                        <a href="index.en.html" title="<?php echo $labels[$lang]["english"]; ?>" <?php echo $lang == "en" ? 'aria-current="true"' : ""; ?>>EN</a>
                    </div>
                    <div class="copyright"><?php echo $labels[$lang]["copyright"]; ?></div>
                </div>

            </header>

            <main class="content">

                <!-- Proyectos -->
                <section id="projects" class="panel">
                    <div class="panel-head">
                        <h2><?php echo $labels[$lang]["myportfolio"]; ?></h2>
                    </div>

                    <div class="list">
                        <?php foreach ($labels[$lang]["portfolios"] as $key => $val) { ?>
                            <?php $size = getimagesize($val["image"]);
                                $width = $size[0];
                                $height = $size[1]; ?>
                            <article class="project-card">
                                <div class="thumb">
                                    <img src="<?php echo $val["image"] . "?" . md5_file($val["image"]); ?>" alt="<?php echo $val["title"]; ?>"
                                        width="<?php echo $width; ?>" height="<?php echo $height; ?>" loading="lazy" />
                                </div>
                                <div class="body">
                                    <h3><?php echo $val["title"]; ?></h3>
                                    <p><?php echo $val["description"]; ?></p>
                                    <div class="links">
                                        <?php foreach ($val["links"] as $key2 => $val2) { ?>
                                            <a href="<?php echo $val2; ?>" target="_blank" rel="noopener"><?php echo $key2; ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </article>
                        <?php } ?>
                    </div>
                </section>

                <!-- Perfil -->
                <section id="profile" class="panel">
                    <div class="panel-head">
                        <h2><?php echo $labels[$lang]["aboutme"]; ?></h2>
                    </div>

                    <div class="cv-doc">
                        <?php
                            $cv_html = file_get_contents($labels[$lang]["download_html"]);
                            if (!str_contains($cv_html, "</div>")) {
                                $cv_html .= "</div>";
                            }
                            // Wrap the personal-data list and the profile photo together so the
                            // photo can be vertically centered against the list, as in the PDF.
                            $cv_html = preg_replace(
                                '#(<h1>1\.[^<]*</h1>)\s*(<ul>.*?</ul>)\s*<p>\s*(<img[^>]*foto_josep_sanz_small\.png[^>]*>)\s*</p>#s',
                                '$1<div class="cv-hero">$2$3</div>',
                                $cv_html,
                                1
                            );
                            echo $cv_html;
                        ?>
                    </div>

                    <div class="btn-row">
                        <a class="btn" href="<?php echo $labels[$lang]["downloadlink_ca"]; ?>">
                            <?php echo icon("download"); ?>
                            <?php echo $labels[$lang]["downloadtext"]; ?> (<?php echo $labels[$lang]["catala"]; ?>)
                        </a>
                        <a class="btn ghost" href="<?php echo $labels[$lang]["downloadlink_es"]; ?>">
                            <?php echo icon("download"); ?>
                            <?php echo $labels[$lang]["downloadtext"]; ?> (<?php echo $labels[$lang]["castellano"]; ?>)
                        </a>
                        <a class="btn ghost" href="<?php echo $labels[$lang]["downloadlink_en"]; ?>">
                            <?php echo icon("download"); ?>
                            <?php echo $labels[$lang]["downloadtext"]; ?> (<?php echo $labels[$lang]["english"]; ?>)
                        </a>
                    </div>
                </section>

                <!-- Contacto -->
                <section id="contact" class="panel">
                    <div class="panel-head">
                        <h2><?php echo $labels[$lang]["contactme"]; ?></h2>
                    </div>

                    <div class="contact-grid">
                        <form name="sentMessage" id="contactForm" class="form" novalidate
                            data-validation-ok-message="<?php echo $labels[$lang]["sendok"]; ?>"
                            data-validation-ko-message="<?php echo $labels[$lang]["sendko"]; ?>">
                            <div class="field">
                                <label for="name"><?php echo $labels[$lang]["fieldname"]; ?></label>
                                <input id="name" name="name" type="text" required
                                    title="<?php echo $labels[$lang]["requiredname"]; ?>" />
                            </div>
                            <div class="field">
                                <label for="email"><?php echo $labels[$lang]["fieldemail"]; ?></label>
                                <input id="email" name="email" type="email" />
                            </div>
                            <div class="field">
                                <label for="phone"><?php echo $labels[$lang]["fieldphone"]; ?></label>
                                <input id="phone" name="phone" type="tel" />
                            </div>
                            <div class="field">
                                <label for="message"><?php echo $labels[$lang]["fieldmessage"]; ?></label>
                                <textarea id="message" name="message" rows="6" required
                                    title="<?php echo $labels[$lang]["requiredmessage"]; ?>"></textarea>
                            </div>
                            <div id="success"></div>
                            <button type="submit" class="btn" id="sendMessageButton">
                                <?php echo icon("mail"); ?>
                                <?php echo $labels[$lang]["buttonsend"]; ?>
                            </button>
                        </form>

                        <aside class="contact-card">
                            <h3><?php echo $labels[$lang]["fieldemail"]; ?></h3>
                            <a class="email-link" href="mailto:josep.sanz@saltos.org">josep.sanz@saltos.org</a>
                            <hr class="divider" />
                            <h3><?php echo $labels[$lang]["footer"]; ?></h3>
                            <nav class="social-row" aria-label="<?php echo $labels[$lang]["footer"]; ?>">
                                <?php foreach ($social as $key => $url) { ?>
                                    <a href="<?php echo $url; ?>" target="_blank" rel="noopener" title="<?php echo ucfirst($key); ?>">
                                        <?php echo social_icon($key, 22); ?>
                                        <span class="visually-hidden"><?php echo ucfirst($key); ?></span>
                                    </a>
                                <?php } ?>
                            </nav>
                        </aside>
                    </div>
                </section>

            </main>

        </div>

        <script src="js/sanz.js"></script>
        <script src="js/contact_me.js"></script>

    </body>

</html>
