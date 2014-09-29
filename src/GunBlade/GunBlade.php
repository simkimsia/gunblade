<?php
/**
 * 
 * This file is part of the GunBlade Project for PHP.
 * 
 * @package GunBlade
 * 
 * @license http://opensource.org/licenses/MIT
 * 
 */
namespace GunBlade;

class GunBlade {
	const VERSION = '0.0.0.1';

/**
 * 
 * Parse HTML.  Convenience method for \GunBlade\HTML\Document::parse message
 * 
 * @param string $locale
 * 
 * @param string $string
 * 
 * @param array $tokens_values
 * 
 * @return string A string replaced with the token values
 * 
 */
    public static function HTML($thing, $url = null, $encoding = null, $options = \GunBlade\XML\ParseOptions\DEFAULT_HTML, &$block) {
		\GunBlade\HTML\Document::parse($thing, $url, $encoding, $options, $block);
    }
    
}