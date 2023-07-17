<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Base
{
    use HasFactory;

    public static $KEY_LIST_PER_PAGE = 'LIST_PER_PAGE';
    public static $KEY_SEARCH_PER_PAGE = 'SEARCH_PER_PAGE';
    public static $KEY_API_PER_PAGE = 'API_PER_PAGE';
    public static $KEY_DB_DT_FORMAT = 'DB_DT_FORMAT';
    public static $KEY_SYSTEM_DT_FORMAT = 'SYSTEM_DT_FORMAT';
    public static $KEY_DB_DATE_FORMAT = 'DB_DATE_FORMAT';
    public static $KEY_SYSTEM_DATE_FORMAT = 'SYSTEM_DATE_FORMAT';
    public static $KEY_YEAR_FORMAT = 'YEAR_FORMAT';
    public static $KEY_MAIL_FROM_ADDRESS = 'MAIL_FROM_ADDRESS';
    public static $KEY_MAIL_FROM_NAME = 'MAIL_FROM_NAME';

    public static function getByKey(string $key)
    {
        return self::where('key', $key)
            ->first();
    }

    public static function getSetting($key)
    {
        $value = env($key);
        $setting = self::getByKey($key);

        if (filled($setting)) {
            $value = $setting->value;
        }

        return $value;
    }

    public static function getKeys()
    {
        return self::all()->pluck('key');
    }

    public static function getStaticKeys()
    {
        return [
            self::$KEY_LIST_PER_PAGE,
            self::$KEY_SEARCH_PER_PAGE,
            self::$KEY_DB_DT_FORMAT,
            self::$KEY_SYSTEM_DT_FORMAT,
            self::$KEY_DB_DATE_FORMAT,
            self::$KEY_SYSTEM_DATE_FORMAT,
            self::$KEY_YEAR_FORMAT,
            self::$KEY_MAIL_FROM_ADDRESS,
            self::$KEY_MAIL_FROM_NAME,
        ];
    }

    public static function getListPerPage()
    {
        return self::getSetting(self::$KEY_LIST_PER_PAGE);
    }

    public static function getSearchPerPage()
    {
        return self::getSetting(self::$KEY_SEARCH_PER_PAGE);
    }

    public static function getApiPerPage()
    {
        return self::getSetting(self::$KEY_API_PER_PAGE);
    }

    public static function getDbDtFormat()
    {
        return self::getSetting(self::$KEY_DB_DT_FORMAT);
    }

    public static function getSystemDtFormat()
    {
        return self::getSetting(self::$KEY_SYSTEM_DT_FORMAT);
    }

    public static function getDbDateFormat()
    {
        return self::getSetting(self::$KEY_DB_DATE_FORMAT);
    }

    public static function getSystemDateFormat()
    {
        return self::getSetting(self::$KEY_SYSTEM_DATE_FORMAT);
    }

    public static function getYearFormat()
    {
        return self::getSetting(self::$KEY_YEAR_FORMAT);
    }

    public static function getMailFromAddress()
    {
        return self::getSetting(self::$KEY_MAIL_FROM_ADDRESS);
    }

    public static function getMailFromName()
    {
        return self::getSetting(self::$KEY_MAIL_FROM_NAME);
    }
}
