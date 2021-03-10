<?php
require_once('template_header.php');
?>
        <header>
            <h1>Thomas Coydon</h1>
            <p>Accueil</p>
        </header>
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('index');
        ?>
        <section>
            <aside>
                <h1>À propos de moi</h1>
                <p>Je m'appelle Thomas</p>
            </aside>
        </section>
<?php
require_once('template_footer.php');
?>