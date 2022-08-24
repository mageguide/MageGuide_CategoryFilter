<?php

namespace MageGuide\CategoryFilter\Model\Category;

class Categorylist implements \Magento\Framework\Option\ArrayInterface
{
    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $collectionFactory
    ) {
        $this->_categoryCollectionFactory = $collectionFactory;
        
    }

    public function toOptionArray($addEmpty = true)
    {

        /** @var \Magento\Catalog\Model\ResourceModel\Category\Collection $collection */
        $collection = $this
            ->_categoryCollectionFactory
            ->create();

        $collection->addAttributeToSelect('name')->addAttributeToSelect('level'); //->addRootLevelFilter()->load();
        $options = [];

        if ($addEmpty)
        {
            $options[] = ['label' => __('-- Please Select a Category --') , 'value' => ''];
        }
        foreach ($collection as $category)
        {
            $hyphen = '-';
            for($i=1; $i < $category->getLevel(); $i++){
                $hyphen = $hyphen ."----";
            }
            $CategoryLabel = $hyphen . $category->getName();
            $options[] = ['label' => $CategoryLabel , 'value' => $category->getId() ];
        }

        return $options;
    }
}
