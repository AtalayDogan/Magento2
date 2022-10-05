<?php

namespace Atalay\Bblog\Model\ResourceModel;

class Blogt extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('atalay_bblog_atalay_entity', 'post_id');
    }

}
