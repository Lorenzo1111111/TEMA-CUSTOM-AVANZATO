<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">


    <?php wp_head(); ?>
    

 <script type="text/javascript">
    jQuery(document).ready(function($) {
        // Verifica che jQuery sia caricato correttamente
        if (typeof jQuery !== 'undefined') {
            console.log('jQuery is loaded!');
        } else {
            console.log('jQuery is not loaded!');
        }

        // Codice JavaScript per l'animazione del menu di navigazione
        var $menuLinks = $('.elementor-widget-nav-menu');

        // Assicurati che il selettore corrisponda esattamente all'elemento del menu
        console.log($menuLinks.length); // Assicurati che la lunghezza sia maggiore di 0 per confermare la corretta selezione

        // Aggiungi l'evento mouseenter per l'animazione
        $menuLinks.on('mouseenter', function() {
            $(this).stop().animate({ marginTop: '-40px' }, 200);
        });

        // Aggiungi l'evento mouseleave per ripristinare lo stato originale
        $menuLinks.on('mouseleave', function() {
            $(this).stop().animate({ marginTop: '0' }, 200);
        });
    });
</script>


    
    
    
    
</head>
<body <?php body_class(); ?>>


<?php
// Includi il template di Elementor
echo do_shortcode('[elementor-template id="15846"]'); 
?>




    
    <header>
       
    </header>


    