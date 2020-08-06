<?php
/**
 * Role
 *
 * PHP version 5
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Neucore API
 *
 * Client library of Neucore API
 *
 * The version of the OpenAPI document: 1.14.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Brave\NeucoreApi\Model;
use \Brave\NeucoreApi\ObjectSerializer;

/**
 * Role Class Doc Comment
 *
 * @category Class
 * @package  Brave\NeucoreApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Role
{
    /**
     * Possible values of this enum
     */
    const APP = 'app';
    const APP_GROUPS = 'app-groups';
    const APP_CHARS = 'app-chars';
    const APP_TRACKING = 'app-tracking';
    const APP_ESI = 'app-esi';
    const USER = 'user';
    const USER_ADMIN = 'user-admin';
    const USER_MANAGER = 'user-manager';
    const USER_CHARS = 'user-chars';
    const GROUP_ADMIN = 'group-admin';
    const GROUP_MANAGER = 'group-manager';
    const APP_ADMIN = 'app-admin';
    const APP_MANAGER = 'app-manager';
    const ESI = 'esi';
    const SETTINGS = 'settings';
    const TRACKING = 'tracking';
    const TRACKING_ADMIN = 'tracking-admin';
    const WATCHLIST = 'watchlist';
    const WATCHLIST_MANAGER = 'watchlist-manager';
    const WATCHLIST_ADMIN = 'watchlist-admin';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APP,
            self::APP_GROUPS,
            self::APP_CHARS,
            self::APP_TRACKING,
            self::APP_ESI,
            self::USER,
            self::USER_ADMIN,
            self::USER_MANAGER,
            self::USER_CHARS,
            self::GROUP_ADMIN,
            self::GROUP_MANAGER,
            self::APP_ADMIN,
            self::APP_MANAGER,
            self::ESI,
            self::SETTINGS,
            self::TRACKING,
            self::TRACKING_ADMIN,
            self::WATCHLIST,
            self::WATCHLIST_MANAGER,
            self::WATCHLIST_ADMIN,
        ];
    }
}


