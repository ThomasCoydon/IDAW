<?php
require_once('template_header.php');
?>
        <header>
            <h1>Thomas Coydon</h1>
            <p>Mes projets</p>
        </header>
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('projets');
        ?>
        <section>
            <aside>
                <h1>À propos de mes projets</h1>
                <p>J'ai fait des projets</p>
            </aside>
        </section>

        <?php
require_once('template_footer.php');
?>