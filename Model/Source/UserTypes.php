<?php
namespace SchumacherFM\AdvancedRESTPerms\Model\Source;

use \Magento\Authorization\Model\UserContextInterface;
use \Magento\Framework\Option\ArrayInterface;

/**
 * Integration status options.
 */
class UserTypes implements ArrayInterface
{
    /**
     * Retrieve status options array.
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => UserContextInterface::USER_TYPE_INTEGRATION,
                'label' => __('Integration')
            ],
            [
                'value' => UserContextInterface::USER_TYPE_ADMIN,
                'label' => __('Backend User')
            ],
            [
                'value' => UserContextInterface::USER_TYPE_CUSTOMER,
                'label' => __('Customer')
            ],
            [
                'value' => UserContextInterface::USER_TYPE_GUEST,
                'label' => __('Guest')
            ],
        ];
    }
}
