<?php

if ( ! empty(GOOGLE_TAG) ) {

    echo '
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id='.GOOGLE_TAG.'"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    ';
}