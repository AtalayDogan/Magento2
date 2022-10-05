<?php

namespace Atalay\Bblog\Model\ResourceModel\Blogt;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'atalay_bblog_atalay_entity';
    protected $_eventObject = 'blogt_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Atalay\Bblog\Model\Blogt', 'Atalay\Bblog\Model\ResourceModel\Blogt');
    }

}
