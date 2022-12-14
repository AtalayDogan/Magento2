<?php

namespace Atalay\Bblog\Block;
use Atalay\Bblog\Model\BlogFactory;
use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{

    protected BlogFactory $blogFactory;

    public function __construct(
        BlogFactory $blogFactory,
        Template\Context $context, array $data = [])
    {
        $this->blogFactory = $blogFactory;
        parent::__construct($context, $data);
    }

    public function getTitle(){
        return 'atalay';
    }
    public function getBlogEntities(){
        $blog = $this->blogFactory->create();
        $collection = $blog->getCollection();
        if($collection){
        return $collection;
        }
        return [];
    }


}
