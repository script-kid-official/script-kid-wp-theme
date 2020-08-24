<?php

function sk_theme_setup()
{
    add_theme_support('title-tag');
    register_nav_menu('primary', __('Primary Menu', 'script-kiddie-theme'));
}
