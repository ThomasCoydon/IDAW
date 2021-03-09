<?php
require_once('template_header.php');
?>
        <header>
            <h1>Thomas Coydon</h1>
            <p>Infos techniques</p>
        </header>
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('infos-techniques');
        ?>
        <section>
            <aside>
                <h1>À propos de mes infos techniques</h1>
                <p>Mes infos sont très techniques</p>
            </aside>
        </section>

        <?php
require_once('template_footer.php');
?>