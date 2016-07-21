<?php

namespace Tools ;

/**
 * LOG
 * @author Steven Pardo
 */
class Log {
	/**
	 * PREPRINT
	 * Muestran en pantalla el valor de una variable
	 * @author Steven Pardo
	 * @param String|Integer|Array|Object|Boolean $log Variable a mostrar en pantalla
	 * @param Boolean $exit Si detiene la ejecución del script
	 * @return Void
	 */
	public static function preprint ( $log , $exit=false ) {
		// Mostrar saltos de linea en HTML
		echo '<pre>' ;
		
		// Muestra el valor de la variable
		print_r( $log ) ;

		echo '</pre>' ;

		// Si se detiene la ejecución del script
		if ( $exit ) {
			// Detiene la ejecución del script
			exit;
		}
	}
}

?>