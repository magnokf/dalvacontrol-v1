<div class="dash_content_sidebar">
    <h3 class="icon-asterisk">dashboard</h3>
    <p class="dash_content_sidebar_desc">Relatórios e Controles</p>

    <nav>
        <?php
        $nav = function ($icon, $href, $title) use ($app) {
            $active = ($app == $href ? "active" : null);
            $url = url("/admin/{$href}");
            return "<a class=\"icon-{$icon} radius {$active}\" href=\"{$url}\">{$title}</a>";
        };

        echo $nav("cog", "dash", "Dash");
        ?>
    </nav>
</div>