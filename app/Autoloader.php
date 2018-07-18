<?php

ini_set("display_error", "on");
error_reporting(E_ALL);

class MyAutoload {
	
	public static function start(){
		
		spl_autoload_register(array(__CLASS__, "autoload"));
		
		$root = $_SERVER["DOCUMENT_ROOT"];
		$host = $_SERVER["HTTP_HOST"];

		define("HOST", "http://".$host."/alaska/public/");
		define("ROOT", $root."/alaska/");

		define("CONTROLLER", ROOT."controller/");
		define("MODEL", ROOT."model/");
		define("VIEW", ROOT."views/");
		define("FRONT", ROOT."views/front/");
		define("BACK", ROOT."views/back/");
        define("APP", ROOT."app/");
        define("MNGR", MODEL."Mngr/");

		define("ASSETS", HOST."assets/");
	}
	
	public static function autoload($class) {
		
		if (file_exists(MODEL.$class.".php")) {
			
			include_once(MODEL.$class.".php");
			
		} elseif (file_exists(CONTROLLER.$class.".php")) { 
			
			include_once(CONTROLLER.$class.".php");
			
		} elseif (file_exists(APP.$class.".php")) {
			
            include_once(APP.$class.".php");
            
		} elseif (file_exists(MNGR.$class.".php")) {
            
            include_once(MNGR.$class.".php");

        }
    }
}