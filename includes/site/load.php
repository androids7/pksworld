<?php

/**
 * lädt Komponenten vor
 */

// Komponenten laden
$components = 'var imageList = new Array("' .
    IMG_POKEMON_SMALL . IMG_POKEMON_ADD_NORMAL . IMG_SPRITE_FILENAME . '","' .
    IMG_POKEMON_BIG . IMG_POKEMON_ADD_M . IMG_POKEMON_ADD_BACK . IMG_POKEMON_ADD_NORMAL . IMG_SPRITE_FILENAME . '","' .
    IMG_POKEMON_BIG . IMG_POKEMON_ADD_M . IMG_POKEMON_ADD_BACK . IMG_POKEMON_ADD_SHINY . IMG_SPRITE_FILENAME . '","' .
    IMG_POKEMON_BIG . IMG_POKEMON_ADD_M . IMG_POKEMON_ADD_FRONT . IMG_POKEMON_ADD_NORMAL . IMG_SPRITE_FILENAME . '","' .
    IMG_POKEMON_BIG . IMG_POKEMON_ADD_M . IMG_POKEMON_ADD_FRONT . IMG_POKEMON_ADD_SHINY . IMG_SPRITE_FILENAME . '","' .
    IMG_POKEMON_BIG . IMG_POKEMON_ADD_W . IMG_POKEMON_ADD_BACK . IMG_POKEMON_ADD_NORMAL . IMG_SPRITE_FILENAME . '","' .
    IMG_POKEMON_BIG . IMG_POKEMON_ADD_W . IMG_POKEMON_ADD_BACK . IMG_POKEMON_ADD_SHINY . IMG_SPRITE_FILENAME . '","' .
    IMG_POKEMON_BIG . IMG_POKEMON_ADD_W . IMG_POKEMON_ADD_FRONT . IMG_POKEMON_ADD_NORMAL . IMG_SPRITE_FILENAME . '","' .
    IMG_POKEMON_BIG . IMG_POKEMON_ADD_W . IMG_POKEMON_ADD_FRONT . IMG_POKEMON_ADD_SHINY . IMG_SPRITE_FILENAME . '","' .
    IMG_BOX_SMALL . IMG_SPRITE_FILENAME . '","' .
    IMG_BOX_BIG . IMG_SPRITE_FILENAME . '","' .
    IMG_ITEMS . 'normal/' . IMG_SPRITE_FILENAME . '","' . '"
);
window.onload = function() {preloadImages(imageList, "loadingDisplay", "loadingLinkContinue", "loadingProgressBar");};';
$javascriptContent[] = $components;