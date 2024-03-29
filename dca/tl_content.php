<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
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
 * @copyright  Andreas Schempp 2008-2010
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


/**
 * Pallettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['mailnotification'] = '{type_legend},type;{text_legend},mn_sender,mn_recipient,mn_subject,mn_message;{template_legend},mn_template;{protected_legend:hide},protected,guests';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['mn_template'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['mn_template'],
	'inputType'		=> 'select',
	'options'		=> $this->getTemplateGroup('mail_'),
	'default'		=> 'mail_default',
);
$GLOBALS['TL_DCA']['tl_content']['fields']['mn_sender'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['mn_sender'],
	'inputType'		=> 'text',
	'eval'			=> array('maxlength'=>255, 'mandatory'=>true, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['mn_recipient'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['mn_recipient'],
	'inputType'		=> 'text',
	'eval'			=> array('maxlength'=>255, 'mandatory'=>true, 'tl_class'=>'w50'),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['mn_subject'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['mn_subject'],
	'inputType'		=> 'text',
	'eval'			=> array('maxlength'=>255, 'mandatory'=>true, 'tl_class'=>'clr long'),
);
$GLOBALS['TL_DCA']['tl_content']['fields']['mn_message'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_content']['mn_message'],
	'inputType'		=> 'textarea',
	'eval'			=> array('rte'=>'tinyMCE', 'mandatory'=>true),
);

