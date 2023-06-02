<?php
namespace Blvckgvd\XmlLib;
use SebastianBergmann\CodeCoverage\XmlException;

class XmlLib
{
    public static function toJson(string $xmlPath) {

        $filePath= @file_get_contents($xmlPath);
        if (false === $filePath) {
            echo "$xmlPath is not found";
            return null;
        }
        $fileChange = str_replace(array("\n", "\r", "\t"), '', $filePath);
        $fileTrim = trim(str_replace('"', "'", $fileChange));
        $resultXml = @simplexml_load_string($fileTrim);
        if (false === $resultXml) {
            echo "$xmlPath is not correct";
            return null;
        }
        return json_encode($resultXml, JSON_PRETTY_PRINT);
    }

    public static function toArray(string $xmlPath) {
        return json_decode(self::toJson($xmlPath), true);
    }
}