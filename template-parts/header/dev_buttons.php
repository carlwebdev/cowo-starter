
        <!-- 
        test new  add wrnch icon for admin dropdown / as in settings... 
        add into settings wrech icons, for depslegavel de options de ev 
        -->

        <!--
        [CSS DEBUG]
        [MODE]
        -->   

        <?php /* */ ?>
        <?php // HEADER MODEICON (button) ?>
        <!--
        <button class="modeicon jq_trigger_mode_TEST"><?php echo $GLOBALS['icon_light_mode']; ?></button>
        <button class="modeicon jq_trigger_mode_TEST_2"><?php echo $GLOBALS['icon_dark_mode']; ?></button>
        -->
        <!--
        IMPLEMENTATION - dark / light / stem mode toggle, test at leats ...
        REF: https://swiperjs.com/

        SRC; https://dev.to/whitep4nth3r/the-best-lightdark-mode-theme-toggle-in-javascript-368f
        -->
        <button class="headericon modeicon___NOT" id="theme-toggle" role="trigger_mode___TEST"> <!-- OBS - USES SCRIPT : theme_toggle.js -->
            <!--Toggle Dark/Light Mode-->
            <?php // echo $GLOBALS['icon_light_mode']; ?>
            <span class="material-symbols-outlined" id="theme-icon">light_mode</span>
            <?php // echo $mdi_lightmode; ?>
        </button>
        <!--
        <button class="headericon" role="trigger_NOT"><?php echo $GLOBALS['icon_light_mode']; ?><?php // echo $mdi_lightmode; ?></button>
        <button class="headericon" role="trigger_NOT"><?php echo $GLOBALS['icon_dark_mode']; ?><?php // echo $mdi_darkmode; ?></button>
        -->    

        <!-- obs - darj mode could be outside as last, o inside settings(dropdown) as firts -->

        




        
        
        <?php /*
        <button class="headericon" role="trigger_style"><?php echo $GLOBALS['icon_style']; ?><?php // echo $mdi_style; ?></button>  
        */ ?>

        <button class="headericon" role="trigger_css"><?php echo $GLOBALS['icon_css']; ?><?php // echo $mdi_css; ?></button>

        <?php /*?>
            ACTIVATE THSI WITH JQUERY BUTTON, AND ADD A COOKIE LOCALSTIARGE LIEK TYHE DARK MODE SYSTEM, BUT IT SHOUDL BE AAISER

            GO TO Cb HEADER OPTIONS, ANF THEN REYTN WITH THAT DONE..

            IF DEVELOPMENT STATUS = DEVELIPMENT (VS PRODUCTION, etc)
            <?php */?>  
            <?php /*?><link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/style/css/dev-basic.css" media="all" /><?php */?>
            <?php /*?>
            <!--
            <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/style/css/dev.css" media="all" />
            -->
            <?php */?>











        <button class="headericon" role="trigger_debugging"><?php echo $GLOBALS['icon_debugging']; ?><?php // echo $mdi_debugging; ?></button> <!-- THIS IS THE ONLY ONE NOT FUCNTIONAL OUT OF THESE 4, SO FIX IT, AND THEN ALSO MAKE IT WORK IN Cb AS ITS THE REPO FOR THIS -->

        <!-- RAZON DE MAS DE METERLO TODO DENTOR DE UN SETTINGS DROPDOWN !!! idem en same header_buttons layer, as its same same ... -->
        <button class="headericon" role="trigger_responsive"><?php echo $GLOBALS['icon_responsive']; ?><?php // echo $mdi_debugging; ?></button> <!-- to remove meta rwd tag ! -->  
        <button class="headericon" role="trigger_fullscreen"><?php echo $GLOBALS['icon_fullscreen']; ?><?php // echo $GLOBALS['icon_fullscreen_exit']; ?></button>
