<?php

// scoper-autoload.php @generated by PhpScoper

// Backup the autoloaded Composer files
if (isset($GLOBALS['__composer_autoload_files'])) {
    $existingComposerAutoloadFiles = $GLOBALS['__composer_autoload_files'];
}

$loader = require_once __DIR__.'/autoload.php';
// Ensure InstalledVersions is available
$installedVersionsPath = __DIR__.'/composer/InstalledVersions.php';
if (file_exists($installedVersionsPath)) require_once $installedVersionsPath;

// Restore the backup
if (isset($existingComposerAutoloadFiles)) {
    $GLOBALS['__composer_autoload_files'] = $existingComposerAutoloadFiles;
} else {
    unset($GLOBALS['__composer_autoload_files']);
}

// Class aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#class-aliases
if (!function_exists('humbug_phpscoper_expose_class')) {
    function humbug_phpscoper_expose_class(string $exposed, string $prefixed): void {
        if (!class_exists($exposed, false) && !interface_exists($exposed, false) && !trait_exists($exposed, false)) {
            spl_autoload_call($prefixed);
        }
    }
}
humbug_phpscoper_expose_class('MOVEBENDER', '_YabeMovebender\MOVEBENDER');
humbug_phpscoper_expose_class('Normalizer', '_YabeMovebender\Normalizer');
humbug_phpscoper_expose_class('Attribute', '_YabeMovebender\Attribute');
humbug_phpscoper_expose_class('PhpToken', '_YabeMovebender\PhpToken');
humbug_phpscoper_expose_class('Stringable', '_YabeMovebender\Stringable');
humbug_phpscoper_expose_class('UnhandledMatchError', '_YabeMovebender\UnhandledMatchError');
humbug_phpscoper_expose_class('ValueError', '_YabeMovebender\ValueError');

// Function aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#function-aliases
if (!function_exists('ctype_alnum')) { function ctype_alnum() { return \_YabeMovebender\ctype_alnum(...func_get_args()); } }
if (!function_exists('ctype_alpha')) { function ctype_alpha() { return \_YabeMovebender\ctype_alpha(...func_get_args()); } }
if (!function_exists('ctype_cntrl')) { function ctype_cntrl() { return \_YabeMovebender\ctype_cntrl(...func_get_args()); } }
if (!function_exists('ctype_digit')) { function ctype_digit() { return \_YabeMovebender\ctype_digit(...func_get_args()); } }
if (!function_exists('ctype_graph')) { function ctype_graph() { return \_YabeMovebender\ctype_graph(...func_get_args()); } }
if (!function_exists('ctype_lower')) { function ctype_lower() { return \_YabeMovebender\ctype_lower(...func_get_args()); } }
if (!function_exists('ctype_print')) { function ctype_print() { return \_YabeMovebender\ctype_print(...func_get_args()); } }
if (!function_exists('ctype_punct')) { function ctype_punct() { return \_YabeMovebender\ctype_punct(...func_get_args()); } }
if (!function_exists('ctype_space')) { function ctype_space() { return \_YabeMovebender\ctype_space(...func_get_args()); } }
if (!function_exists('ctype_upper')) { function ctype_upper() { return \_YabeMovebender\ctype_upper(...func_get_args()); } }
if (!function_exists('ctype_xdigit')) { function ctype_xdigit() { return \_YabeMovebender\ctype_xdigit(...func_get_args()); } }
if (!function_exists('fdiv')) { function fdiv() { return \_YabeMovebender\fdiv(...func_get_args()); } }
if (!function_exists('get_debug_type')) { function get_debug_type() { return \_YabeMovebender\get_debug_type(...func_get_args()); } }
if (!function_exists('get_resource_id')) { function get_resource_id() { return \_YabeMovebender\get_resource_id(...func_get_args()); } }
if (!function_exists('grapheme_extract')) { function grapheme_extract() { return \_YabeMovebender\grapheme_extract(...func_get_args()); } }
if (!function_exists('grapheme_stripos')) { function grapheme_stripos() { return \_YabeMovebender\grapheme_stripos(...func_get_args()); } }
if (!function_exists('grapheme_stristr')) { function grapheme_stristr() { return \_YabeMovebender\grapheme_stristr(...func_get_args()); } }
if (!function_exists('grapheme_strlen')) { function grapheme_strlen() { return \_YabeMovebender\grapheme_strlen(...func_get_args()); } }
if (!function_exists('grapheme_strpos')) { function grapheme_strpos() { return \_YabeMovebender\grapheme_strpos(...func_get_args()); } }
if (!function_exists('grapheme_strripos')) { function grapheme_strripos() { return \_YabeMovebender\grapheme_strripos(...func_get_args()); } }
if (!function_exists('grapheme_strrpos')) { function grapheme_strrpos() { return \_YabeMovebender\grapheme_strrpos(...func_get_args()); } }
if (!function_exists('grapheme_strstr')) { function grapheme_strstr() { return \_YabeMovebender\grapheme_strstr(...func_get_args()); } }
if (!function_exists('grapheme_substr')) { function grapheme_substr() { return \_YabeMovebender\grapheme_substr(...func_get_args()); } }
if (!function_exists('mb_check_encoding')) { function mb_check_encoding() { return \_YabeMovebender\mb_check_encoding(...func_get_args()); } }
if (!function_exists('mb_chr')) { function mb_chr() { return \_YabeMovebender\mb_chr(...func_get_args()); } }
if (!function_exists('mb_convert_case')) { function mb_convert_case() { return \_YabeMovebender\mb_convert_case(...func_get_args()); } }
if (!function_exists('mb_convert_encoding')) { function mb_convert_encoding() { return \_YabeMovebender\mb_convert_encoding(...func_get_args()); } }
if (!function_exists('mb_convert_variables')) { function mb_convert_variables() { return \_YabeMovebender\mb_convert_variables(...func_get_args()); } }
if (!function_exists('mb_decode_mimeheader')) { function mb_decode_mimeheader() { return \_YabeMovebender\mb_decode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_decode_numericentity')) { function mb_decode_numericentity() { return \_YabeMovebender\mb_decode_numericentity(...func_get_args()); } }
if (!function_exists('mb_detect_encoding')) { function mb_detect_encoding() { return \_YabeMovebender\mb_detect_encoding(...func_get_args()); } }
if (!function_exists('mb_detect_order')) { function mb_detect_order() { return \_YabeMovebender\mb_detect_order(...func_get_args()); } }
if (!function_exists('mb_encode_mimeheader')) { function mb_encode_mimeheader() { return \_YabeMovebender\mb_encode_mimeheader(...func_get_args()); } }
if (!function_exists('mb_encode_numericentity')) { function mb_encode_numericentity() { return \_YabeMovebender\mb_encode_numericentity(...func_get_args()); } }
if (!function_exists('mb_encoding_aliases')) { function mb_encoding_aliases() { return \_YabeMovebender\mb_encoding_aliases(...func_get_args()); } }
if (!function_exists('mb_get_info')) { function mb_get_info() { return \_YabeMovebender\mb_get_info(...func_get_args()); } }
if (!function_exists('mb_http_input')) { function mb_http_input() { return \_YabeMovebender\mb_http_input(...func_get_args()); } }
if (!function_exists('mb_http_output')) { function mb_http_output() { return \_YabeMovebender\mb_http_output(...func_get_args()); } }
if (!function_exists('mb_internal_encoding')) { function mb_internal_encoding() { return \_YabeMovebender\mb_internal_encoding(...func_get_args()); } }
if (!function_exists('mb_language')) { function mb_language() { return \_YabeMovebender\mb_language(...func_get_args()); } }
if (!function_exists('mb_list_encodings')) { function mb_list_encodings() { return \_YabeMovebender\mb_list_encodings(...func_get_args()); } }
if (!function_exists('mb_ord')) { function mb_ord() { return \_YabeMovebender\mb_ord(...func_get_args()); } }
if (!function_exists('mb_output_handler')) { function mb_output_handler() { return \_YabeMovebender\mb_output_handler(...func_get_args()); } }
if (!function_exists('mb_parse_str')) { function mb_parse_str() { return \_YabeMovebender\mb_parse_str(...func_get_args()); } }
if (!function_exists('mb_scrub')) { function mb_scrub() { return \_YabeMovebender\mb_scrub(...func_get_args()); } }
if (!function_exists('mb_str_split')) { function mb_str_split() { return \_YabeMovebender\mb_str_split(...func_get_args()); } }
if (!function_exists('mb_stripos')) { function mb_stripos() { return \_YabeMovebender\mb_stripos(...func_get_args()); } }
if (!function_exists('mb_stristr')) { function mb_stristr() { return \_YabeMovebender\mb_stristr(...func_get_args()); } }
if (!function_exists('mb_strlen')) { function mb_strlen() { return \_YabeMovebender\mb_strlen(...func_get_args()); } }
if (!function_exists('mb_strpos')) { function mb_strpos() { return \_YabeMovebender\mb_strpos(...func_get_args()); } }
if (!function_exists('mb_strrchr')) { function mb_strrchr() { return \_YabeMovebender\mb_strrchr(...func_get_args()); } }
if (!function_exists('mb_strrichr')) { function mb_strrichr() { return \_YabeMovebender\mb_strrichr(...func_get_args()); } }
if (!function_exists('mb_strripos')) { function mb_strripos() { return \_YabeMovebender\mb_strripos(...func_get_args()); } }
if (!function_exists('mb_strrpos')) { function mb_strrpos() { return \_YabeMovebender\mb_strrpos(...func_get_args()); } }
if (!function_exists('mb_strstr')) { function mb_strstr() { return \_YabeMovebender\mb_strstr(...func_get_args()); } }
if (!function_exists('mb_strtolower')) { function mb_strtolower() { return \_YabeMovebender\mb_strtolower(...func_get_args()); } }
if (!function_exists('mb_strtoupper')) { function mb_strtoupper() { return \_YabeMovebender\mb_strtoupper(...func_get_args()); } }
if (!function_exists('mb_strwidth')) { function mb_strwidth() { return \_YabeMovebender\mb_strwidth(...func_get_args()); } }
if (!function_exists('mb_substitute_character')) { function mb_substitute_character() { return \_YabeMovebender\mb_substitute_character(...func_get_args()); } }
if (!function_exists('mb_substr')) { function mb_substr() { return \_YabeMovebender\mb_substr(...func_get_args()); } }
if (!function_exists('mb_substr_count')) { function mb_substr_count() { return \_YabeMovebender\mb_substr_count(...func_get_args()); } }
if (!function_exists('normalizer_is_normalized')) { function normalizer_is_normalized() { return \_YabeMovebender\normalizer_is_normalized(...func_get_args()); } }
if (!function_exists('normalizer_normalize')) { function normalizer_normalize() { return \_YabeMovebender\normalizer_normalize(...func_get_args()); } }
if (!function_exists('preg_last_error_msg')) { function preg_last_error_msg() { return \_YabeMovebender\preg_last_error_msg(...func_get_args()); } }
if (!function_exists('str_contains')) { function str_contains() { return \_YabeMovebender\str_contains(...func_get_args()); } }
if (!function_exists('str_ends_with')) { function str_ends_with() { return \_YabeMovebender\str_ends_with(...func_get_args()); } }
if (!function_exists('str_starts_with')) { function str_starts_with() { return \_YabeMovebender\str_starts_with(...func_get_args()); } }

return $loader;
