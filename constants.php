﻿<?php
/**
 * globale Konstanten
 */
define('SITE_PARAM'                     , 'site');
define('ACTION_PARAM'                   , 'action');
define('SESSION_EXPIRING_TIME'          , 3600);

// Pfade (absolute)
define('DOC_ROOT'                       , $_SERVER['DOCUMENT_ROOT']);
define('WORLD'                          , dirname(__FILE__) . '/');

define('CLASS_PATH'                     , WORLD . 'lib/classes/');
define('FUNC_PATH'                      , WORLD . 'lib/functions/');
define('TEMPLATE_PATH'                  , WORLD . 'templates/');
define('ADMIN_TEMPLATE_PATH'            , TEMPLATE_PATH . 'admin/');
define('SITE_TEMPLATE_PATH'             , TEMPLATE_PATH . 'site/');
define('INC_PATH'                       , WORLD . 'includes/');
define('ADMIN_INC_PATH'                 , INC_PATH . 'admin/');
define('SITE_INC_PATH'                  , INC_PATH . 'site/');
define('ACTION_INC_PATH'                , INC_PATH . 'action/');
define('EXTERNAL_PATH'                  , WORLD . 'external/');
define('IMG_PATH_ABSOLUTE'              , EXTERNAL_PATH . 'images/');
define('IMG_MAPS_ABSOLUTE'              , IMG_PATH_ABSOLUTE . 'maps/layered/');
define('IMG_MAPS_ABSOLUTE_BLANK'        , IMG_PATH_ABSOLUTE . 'maps/blank/');
define('GAME_GRAPHICS_ABSOLUTE_PATH'    , IMG_PATH_ABSOLUTE . 'gameGraphics/');
define('JS_SCRIPTS_ABSOLUTE'            , EXTERNAL_PATH . 'js/scripts/');
define('CSS_STYLESHEETS_ABSOLUTE'       , EXTERNAL_PATH . 'css/stylesheets/');
define('CSS_FILE_ABSOLUTE'              , EXTERNAL_PATH . 'css/pokesturm.css');
define('JS_FILE_ABSOLUTE'               , EXTERNAL_PATH . 'js/pokesturm.js');
define('SPRITE_CONF_FILE'               , IMG_PATH_ABSOLUTE . 'sprites.ini');

// Website-Pfade (zur Benützung in URLs/Pfadangaben für Browser)
define('MAIN_SITE'                      , 'http://' . $_SERVER['SERVER_NAME']); // Adresse der Hauptseite
define('URI'                            , $_SERVER['REQUEST_URI']); // Adresse der Hauptseite
define('WORLD_DIRECTORY'                , dirname($_SERVER['PHP_SELF']) . '/'); // URL Pfad zur Welt
define('WEBSITE_OBJECTS_DIR'            , WORLD_DIRECTORY . 'external/');
define('IMG_PATH'                       , WEBSITE_OBJECTS_DIR . 'images/');
define('JS_PATH'                        , WEBSITE_OBJECTS_DIR . 'js/');
define('CSS_PATH'                       , WEBSITE_OBJECTS_DIR . 'css/');
define('IMG_ITEMS'                      , IMG_PATH . 'items/');
define('IMG_ITEMS_NORMAL_SPRITE'        , IMG_ITEMS . 'normal/sprite.png');
define('IMG_MAPS'                       , IMG_PATH . 'maps/layered/');
define('IMG_GAME_GRAPHICS'              , IMG_PATH . 'gameGraphics/');
define('IMG_POKEMON'                    , IMG_PATH . 'pokemon/');
define('IMG_POKEMON_SMALL'              , IMG_PATH . 'pokemon/small/');
define('IMG_POKEMON_BIG'                , IMG_PATH . 'pokemon/big/');
define('IMG_POKEMON_ADD_M'              , 'm/');
define('IMG_POKEMON_ADD_W'              , 'w/');
define('IMG_POKEMON_ADD_NORMAL'         , 'normal/');
define('IMG_POKEMON_ADD_SHINY'          , 'shiny/');
define('IMG_POKEMON_ADD_FRONT'          , 'front/');
define('IMG_POKEMON_ADD_BACK'           , 'back/');
define('IMG_SPRITE_FILENAME'            , 'sprite.png');
define('IMG_POKEMON_SMALL_NORMAL_SPRITE', IMG_POKEMON_SMALL . IMG_POKEMON_ADD_NORMAL . IMG_SPRITE_FILENAME);
define('IMG_BOX_SMALL'                  , IMG_PATH . 'gameGraphics/boxes/small/');
define('IMG_BOX_BIG'                    , IMG_PATH . 'gameGraphics/boxes/big/');
define('JAVASCRIPT_FILE'                , JS_PATH . 'pokesturm.v.' . filemtime(JS_FILE_ABSOLUTE) . '.js');
define('STYLESHEET_FILE'                , CSS_PATH . 'pokesturm.v.' . filemtime(CSS_FILE_ABSOLUTE) . '.css');

// Logging
define('LOG_ACTIVE'                     , true);
define('LOG_DIR'                        , WORLD . 'logs/');
define('LOG_FILE'                       , LOG_DIR . date('Y-m-d') . '.log');

// CSS-Sprites
define('SPRITE_BREAK_AFTER'             , 50);

// Tabellennamen
define('TABLE_PREFIX'                   , 'world_');
define('TABLE_CONST_POKEMON'            , TABLE_PREFIX . 'const_pokemon');
define('TABLE_CONST_POKEMON_EVOLUTION'  , TABLE_PREFIX . 'const_pokemon_evolution');
define('TABLE_SESSION'                  , TABLE_PREFIX . 'session');
define('TABLE_SESSION_DATA'             , TABLE_PREFIX . 'session_data');
define('TABLE_CONST_ITEM'               , TABLE_PREFIX . 'const_item');
define('TABLE_CONST_ITEM_GROUP'         , TABLE_PREFIX . 'const_item_group');
define('TABLE_CONST_ATTACK'             , TABLE_PREFIX . 'const_attack');
define('TABLE_CONST_ATTACK_LEARN'       , TABLE_PREFIX . 'const_attack_learn');
define('TABLE_CONST_USER_GROUP'         , TABLE_PREFIX . 'const_user_group');
define('TABLE_CONST_BOX'                , TABLE_PREFIX . 'const_box');
define('TABLE_CONST_MAP'                , TABLE_PREFIX . 'const_map');
define('TABLE_CONST_MAP_ACCESS'         , TABLE_PREFIX . 'const_map_access');
define('TABLE_CONST_MAP_ATTRIBUTE'      , TABLE_PREFIX . 'const_map_attribute');
define('TABLE_CONST_MAP_OBJECT'         , TABLE_PREFIX . 'const_map_object');
define('TABLE_CONST_MAP_CODE'           , TABLE_PREFIX . 'const_map_code');
define('TABLE_CONST_MAP_TAG'            , TABLE_PREFIX . 'const_map_tag');
define('TABLE_CONST_MAP_PKMN'           , TABLE_PREFIX . 'const_map_pkmn');
define('TABLE_CONST_EP'                 , TABLE_PREFIX . 'const_ep');
define('TABLE_CONST_USER_SETTINGS'      , TABLE_PREFIX . 'const_user_settings');
define('TABLE_CONST_SORTIEMENT'         , TABLE_PREFIX . 'const_sortiement');
define('TABLE_POKEMON'                  , TABLE_PREFIX . 'pokemon');
define('TABLE_POKEMON_TEMP_CHANGES'     , TABLE_PREFIX . 'pokemon_temp_changes');
define('TABLE_ITEM'                     , TABLE_PREFIX . 'item');
define('TABLE_MESSAGES'                 , TABLE_PREFIX . 'messages');
define('TABLE_ATTACK'                   , TABLE_PREFIX . 'attack');
define('TABLE_NPC'                      , TABLE_PREFIX . 'npc');
define('TABLE_FIGHT'                    , TABLE_PREFIX . 'fight');
define('TABLE_TRAINER_FIGHT'            , TABLE_PREFIX . 'trainer_fight');
define('TABLE_POKEMON_FIGHT'            , TABLE_PREFIX . 'pokemon_fight');
define('TABLE_USER'                     , TABLE_PREFIX . 'user');
define('TABLE_USER_SETTINGS'            , TABLE_PREFIX . 'user_settings');
define('TABLE_BOX'                      , TABLE_PREFIX . 'box');
