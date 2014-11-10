<?php
define ( 'DEBUGMODE', true );
class DebugUtil {
	/**
	 *
	 * @param unknown $msg        	
	 */
	public static function log($msg) {
		if (! DEBUGMODE)
			return;
		
		print ($msg) ;
	}
	/**
	 *
	 * @param unknown $msg        	
	 */
	public static function logln($msg) {
		if (! DEBUGMODE)
			return;
		
		print ($msg . "<br/>") ;
	}
	/**
	 *
	 * @param unknown $msg        	
	 */
	public static function error($msg) {
		if (! DEBUGMODE)
			return;
		
		print ("ERROR:" . $msg . "<br/>") ;
		die ();
	}
}
?>