<?php


function formatDocBreadCumb($breadcrumb)
{
    switch ($breadcrumb) {
        case "engine2d":
            return "Création d'un jeu";
        case "editor":
            return "Editeur de jeu";
        default:
            return $breadcrumb;
    }
}

function generateMenuItem($link, $content, $matcher = null, $title = null)
{
    global $page;
    $active = is_null($matcher) ? $page === $link : strpos($page, $matcher) !== false;
    $activeClass = $active ? 'class="active"' : '';
    $title = $title ?? $content;

    $element = "<a href=\"/$link\" $activeClass title=\"$title\">";
    $element .= "<div class=\"menu-item\">$content</div>";
    $element .= "</a>";
    return $element;
}

function generateTutoHeader($title, $name, $subname, $icon,
                            $badge = 1, $previous = null, $next = null)
{
    ob_start();
    include("tutoheader.php");
    return ob_get_clean();
}

function generateTutoFooter($next)
{
    ob_start();
    include("tutofooter.php");
    return ob_get_clean();
}
