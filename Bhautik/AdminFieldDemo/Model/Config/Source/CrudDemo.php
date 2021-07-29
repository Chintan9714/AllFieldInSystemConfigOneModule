<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Bhautik\AdminFieldDemo\Model\Config\Source;

class CrudDemo implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [['value' => 'insert', 'label' => __('insert')],['value' => 'delete', 'label' => __('delete')]];
    }

    public function toArray()
    {
        return ['insert' => __('insert'),'delete' => __('delete')];
    }
}

