<?php
require_once('template_header.php');
?>
        <header>
            <h1>Thomas Coydon</h1>
            <p>Mon CV</p>
        </header>
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('cv');
        ?>
        <section>
            <aside>
                <h1>À propos de mon CV</h1>
                <p>Voici mon CV :</p>
            </aside>
        </section>

        <?php
require_once('template_footer.php');
?>