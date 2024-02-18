<?php

namespace TechImprovement\StateRemoval\Model\Config\Source;

use Magento\Directory\Model\ResourceModel\Region\CollectionFactory as RegionFactory;
use Magento\Framework\Data\OptionSourceInterface;

class States implements OptionSourceInterface
{
    /**
     * @var RegionFactory
     */
    protected RegionFactory $_regionFactory;

    /**
     * States constructor.
     *
     * @param RegionFactory $regionFactory
     */

    public function __construct(
        RegionFactory $regionFactory
    )
    {
        $this->_regionFactory = $regionFactory;
    }

    /**
     * Get states
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        $regionCollection = $this->_regionFactory->create()->addCountryFilter('US');
        $options = [];

        foreach ($regionCollection as $region) {
            $options[] = ['value' => $region->getCode(), 'label' => $region->getDefaultName()];
        }

        return $options;
    }
}
