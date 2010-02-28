-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `mn_template` varchar(255) NOT NULL default '',
  `mn_sender` varchar(255) NOT NULL default '',
  `mn_recipient` varchar(255) NOT NULL default '',
  `mn_subject` varchar(255) NOT NULL default '',
  `mn_message` mediumtext NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
