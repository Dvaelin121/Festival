<?php declare(strict_types = 1);

/** src/genboy/Festival/lang/Language.php */

namespace genboy\Festival\lang;

class Language{

	public static $instance;

	public function __construct($owner, $langjson){

		$this->owner = $owner;
		$this->trans = $langjson;
		self::$instance = $this;

	}

	static function translate($key){



		$txt_code = self::$instance->trans[$key];

        $txt = utf8_decode( $txt_code );

		if (strpos($txt, "%n") != false) {
			$text = str_replace("%n", "\n", $txt);
		} else {
			$text = $txt;
		}
		return $text;

	}

}
