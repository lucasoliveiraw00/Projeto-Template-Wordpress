<?php
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    get_header();
    $BASE = esc_url( get_template_directory_uri() );
?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="index.php">
            <?php 
            the_custom_logo();
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        if (has_nav_menu("primary")) {

            wp_nav_menu(
                array(
                    "theme_location" => "primary",
                    "menu_class" => "navbar-nav ml-auto",
                    "container" => "div",
                    "container_class" => "collapse navbar-collapse",
                    "container_id" => "menu"
                )
            );
        }
        ?>

    </nav>
    
    <main class="container" >
          
                <?php

                if (have_posts()) {

                    while (have_posts()) {
                        
                        the_post();

                    

                        the_post_thumbnail();

                        the_content();
                    }
                } else { ?>
                
                    <section class="our-webcoderskull padding-lg" style="height: 320px;">
                        <div class="container">
                            <div class="row heading heading-icon">
                                <h4 id="title-home">Não Existe Nenhum Post</h4>
                            </div>
                        </div>
                    </section>
                <?php } ?>
     
    </main>


    <?php
    get_footer();
    ?> 