<?php
/**
 * laraware config file
 *
 * @since 1.70.182 -
 */
// to not include items translatable
return [
    // comma separated list of ips for debug
    'app_debug_ips' => env('APP_DEBUG_IPS', false),
    'mail_view_debug' => env('MAIL_VIEW_DEBUG', false),
    'enable_db_cache' => env('ENABLE_DB_CACHE', false),
    'is_demo_mode' => env('IS_DEMO_MODE', false),
    'demo_account_id' => env('DEMO_ACCOUNT_ID', 0),
];