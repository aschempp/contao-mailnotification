<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2008
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @package    MailNotification
 * @license    LGPL
 */
 
 
/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['mn_template'] = array('Mail Template', 'Please select the template for the notification mail. Templates must start with "mail_".');
$GLOBALS['TL_LANG']['tl_content']['mn_sender']		= array('Sender address', 'Please enter the sender\'s mail address.');
$GLOBALS['TL_LANG']['tl_content']['mn_recipient']	= array('Recipient address', 'Please enter the recipient\'s mail address.');
$GLOBALS['TL_LANG']['tl_content']['mn_subject']		= array('Subject', 'Please enter a subject for this mail.');
$GLOBALS['TL_LANG']['tl_content']['mn_message']		= array('Message', 'Please enter the message for this mail.');


?>