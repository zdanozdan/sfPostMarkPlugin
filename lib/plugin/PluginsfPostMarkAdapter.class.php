<?php

class PluginsfPostMarkAdapter implements Mail_Postmark_Adapter_Interface
{
  public static $latestLogEntry;
  
  public static function getApiKey()
  {
    return sfConfig::get('app_sf_postmark_plugin_key',Mail_Postmark::TESTING_API_KEY);
  }
  
  public static function setupDefaults(Mail_Postmark &$mail)
  {
    $from = sfConfig::get('app_sf_postmark_plugin_from','foo@bar.com');
    $name = sfConfig::get('app_sf_postmark_plugin_name','Foo Bar');
    $mail->from($from, $name);
  }
  
  public static function log($logData)
  {
    self::$latestLogEntry = $logData;
  }
}