<?php
/**
 *  Persitenzmodel für Anhänge in EmailQueue
 *  
 *
 *  @author Holger Kögel <h.koegel@b3-it.de>
 *  @copyright Copyright (c) 2020 - 2022 B3 IT Systeme GmbH
 */
class Aschroder_SMTPPro_Model_Mysql4_Email_Queue_Attachment extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the doc_id refers to the key field in your database table.
        $this->_init('smtppro/email_attachment', 'att_id');
    }
    
    protected function _beforeSave(Mage_Core_Model_Abstract $object)
    {
    	$bin = bin2hex($object->getBody());
    	$object->setBody($bin);
    	return parent::_beforeSave($object);
    }
    
    protected function _afterLoad(Mage_Core_Model_Abstract $object)
    {
    	$bin = hex2bin($object->getBody());
    	$object->setBody($bin);
    	return parent::_afterLoad($object);
    }
}