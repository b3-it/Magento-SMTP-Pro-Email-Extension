<?php
/**
 *  Speichern von Mail Attachments in der Queue
 *
 *  @author Holger Kögel <h.koegel@b3-it.de>
 *  @copyright Copyright (c) 2020 - 2022 B3 IT Systeme GmbH <https://www.b3-it.de>
 *
 */
class Aschroder_SMTPPro_Model_Email_Queue_Attachment extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('smtppro/email_queue_attachment');
    }
}