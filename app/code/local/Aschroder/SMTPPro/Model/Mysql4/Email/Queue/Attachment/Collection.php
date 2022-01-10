<?php
/**
 *
 * @author 		Holger Kögel <h.koegel@b3-it.de>
 * @copyright	Copyright (c) 2022 B3 IT Systeme GmbH
 */
class Aschroder_SMTPPro_Model_Mysql4_Email_Queue_Attachment_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('smtppro/email_queue_attachment');
    }
    
    
    protected function _afterLoadData()
    {
    	foreach($this->getItems() as $item)
    	{
    		$item->afterLoad();
    	}
    	return parent::_afterLoadData();
    }
}