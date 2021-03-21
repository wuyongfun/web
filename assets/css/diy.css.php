<?php
//diycss
header('Content-type: text/css');
ob_start();
require_once dirname(__FILE__) . "../../../../../../wp-load.php";
ob_end_clean();


$width = (_cao('site_containe_width', '1280') != '1280') ? _cao('site_containe_width', '1280') : '';
if (!empty($width)) {
echo '
@media (min-width: 1200px) { .container{ max-width:' . $width . 'px } }
';
}


if (_cao('is_site_riplus_font')) {
echo "
/* riplus diy font */
@font-face {
    font-family: 'RiPlus-Black';
    src : url('../fonts/RiPlus-Black.otf');
}

@font-face {
    font-family: 'RiPlus-Regular';
    src : url('../fonts/RiPlus-Regular.otf');
}
";
}


if (_cao('is_header_menu_color')) {
    $bg_color   = _cao('header_menu_bg_color');
    $font_color = _cao('header_menu_font_color');
echo "
/* riplus diy header */

.header {
    background-color: $bg_color
}

.site-navbar>ul>li>a {
    color: $font_color;
}

.site-navbar li.has-sub-menu>a::after {
    border-top: 4px solid $font_color
}

.site-navbar .sub-menu ul {
    background-color: $bg_color
}

.site-navbar .sub-menu li a {
    color: $font_color
}

.site-navbar .sub-menu li a:hover {
    color: $font_color
}

.wel-navs .search-btn i {
    color: $font_color
}

.wel-navs .avatar_a {
    color:  $font_color;
}

@font-face {
    font-family: 'RiPlus-Black';
     src : unset;
}

@font-face {
    font-family: 'RiPlus-Regular';
    src : unset;
}

/* riplus diy header end */

";

}


