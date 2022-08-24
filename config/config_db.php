<?php
class DB extends DBmysql {
   public $dbhost = 'glpi_mysql';
   public $dbuser = 'root';
   public $dbpassword = 'glpi123';
   public $dbdefault = 'Glpi_DB';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
