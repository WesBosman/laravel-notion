<?php

namespace WesBosman\LaravelNotion;

class Constants 
{
    const NOTION_VERSION_1_URI  = "https://api.notion.com/v1";
    const NOTION_VERSION_1      = "2021-05-13";

    public static function getBaseUrlV1() : string
    {
        return self::NOTION_VERSION_1_URI;
    }

    public static function getNotionVersion1() : string
    {
        return self::NOTION_VERSION_1;
    }
}