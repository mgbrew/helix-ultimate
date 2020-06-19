<?php
/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined('_JEXEC') or die();

/**
 * Text field.
 *
 * @since	 1.0.0
 */
class HelixultimateFieldText
{
	/**
	 * Get input for the field.
	 *
	 * @param	string	$key
	 * @param	array	$attr
	 *
	 * @return	string
	 * @since	1.0.0
	 */
	public static function getInput($key, $attr)
	{
		$attributes = (isset($attr['placeholder']) && $attr['placeholder']) ? 'placeholder="' . $attr['placeholder'] . '"' : '';

		$output  = '<div class="control-group">';
		$output .= '<label>' . $attr['title'] . '</label>';
		$output	.= '<input class="hu-input addon-' . $key . '" type="text" data-attrname="' . $key . '" value="" ' . $attributes . ' />';

		if ((isset($attr['desc'])) && (isset($attr['desc']) !== ''))
		{
			$output .= '<p class="control-help">' . $attr['desc'] . '</p>';
		}

		$output .= '</div>';

		return $output;
	}

}
