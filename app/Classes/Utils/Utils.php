<?php

namespace App\Classes\Utils;
class Utils
{
    protected static string $crmRulerId = '185965B0-20C8-4112-AC21-C3F1F3D1899C';
    protected static string $CrmBearerToken = 'Bearer ZWJ3YmFuay1hcGktY2xpZW50LWtleTo4a2IuITVyNllDamFnUFJYQmRyMlU2LXMuYl9oRUM2WWl6bmUudUZQNUQ=';

    protected static string $crmApiUrl = 'https://codecycleplatformapi.azurewebsites.net/api/crm/ebwbank/target/register';

    public static function getRulerId()
    {
        return self::$crmRulerId;
    }

    public static function getBearerToken()
    {
        return self::$CrmBearerToken;
    }

    public static function getApiUrl()
    {
        return self::$crmApiUrl;
    }
}
