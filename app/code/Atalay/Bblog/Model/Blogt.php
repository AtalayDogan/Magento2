<?php

namespace Atalay\Bblog\Model;

class Blogt extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'atalay_bblog_atalay_entity';

    protected $_cacheTag = 'atalay_bblog_atalay_entity';

    protected $_eventPrefix = 'atalay_bblog_atalay_entity';

    protected function _construct()
    {
        $this->_init('Atalay\Bblog\Model\ResourceModel\Blogt');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}

