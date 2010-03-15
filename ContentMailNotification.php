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


class ContentMailNotification extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_mailnotification';
	
	
	/**
	 * Generate content element
	 */
	public function compile()
	{
		if (TL_MODE == 'BE')
		{
			$this->Template = new BackendTemplate('be_mailnotification');
			$this->Template->sender = $this->mn_sender;
			$this->Template->recipient = $this->mn_recipient;
			$this->Template->subject = $this->mn_subject;
			$this->Template->message = $this->mn_message;
			$this->Template->label_sender = $GLOBALS['TL_LANG']['tl_content']['mn_sender'][0];
			$this->Template->label_recipient = $GLOBALS['TL_LANG']['tl_content']['mn_recipient'][0];
			$this->Template->label_subject = $GLOBALS['TL_LANG']['tl_content']['mn_subject'][0];
			$this->Template->label_message = $GLOBALS['TL_LANG']['tl_content']['mn_message'][0];			
		}
		else
		{		
			global $objPage;
			
			$this->mn_sender = strlen($this->mn_sender) ? $this->mn_sender : $objPage->adminEmail;
			
			$template = new FrontendTemplate($this->mn_template);
			$template->body = $this->mn_message;
			$template->title = $this->mn_subject;
			
			$mail = new Email();
			$mail->subject = $this->replaceInsertTags($this->mn_subject);
			$mail->from = $this->replaceInsertTags($this->mn_sender);
			$mail->html = $this->replaceInsertTags($template->parse());
			$mail->imageDir = TL_ROOT.'/'.$GLOBALS['TL_CONFIG']['uploadPath'];
			
			$mail->sendTo($this->replaceInsertTags($this->mn_recipient));
			
			$this->Template->recipient = $this->mn_recipient;
		}
	}
}

