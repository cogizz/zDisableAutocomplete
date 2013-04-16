<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Christopher Bölter 2013
 * @author     Christopher Bölter <http://www.cogizz.de>
 * @package    zdisableautocomplete
 * @license    LGPL
 * @filesource
 */

/**
 * Palettes
 */

foreach($GLOBALS['TL_DCA']['tl_form_field']['palettes'] as $palette => $paletteConfig) {
		if($palette != '__selector__')
			$GLOBALS['TL_DCA']['tl_form_field']['palettes'][$palette] .= ';{autocomplete_legend},autocompleteOff';
}

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['autocompleteOff'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['autocompleteOff'],
		'exclude'                 => true,
		'filter'                  => true,
		'inputType'               => 'checkbox',
);
?>