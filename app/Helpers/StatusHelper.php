<?php

namespace App\Helpers;

class StatusHelper {

    public static $VERIFICATION_LINK_SENT = "verification-link-sent";

    public static $MODULE_CREATED = "module-created";
    public static $MODULE_UPDATED = "module-updated";
    public static $MODULE_DELETED = "module-deleted";

    public static $PROFILE_CREATED = "profile-created";
    public static $PROFILE_UPDATED = "profile-updated";
    public static $PROFILE_DELETED = "profile-deleted";

    public static $SETTINGS_UPDATED = "settings-updated";
    public static $PASSWORD_UPDATED = "password-updated";

    public function array(): array {
        return [
            self::$VERIFICATION_LINK_SENT,
            self::$MODULE_CREATED,
            self::$MODULE_UPDATED,
            self::$MODULE_DELETED,
            self::$PROFILE_CREATED,
            self::$PROFILE_UPDATED,
            self::$PROFILE_DELETED,
            self::$SETTINGS_UPDATED,
            self::$PASSWORD_UPDATED,
        ];
    }

    public static function instance(): StatusHelper
    {
        return new StatusHelper();
    }
}