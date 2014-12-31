<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */

namespace SchumacherFM\AdvancedRESTPerms\Block\Plugin\Adminhtml\Integration;

class PermButtons
{
    /**
     * @param \Magento\Integration\Block\Adminhtml\Integration\Interceptor $integration
     * @param \Magento\Framework\View\Layout\Interceptor $layout
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeSetLayout(
        \Magento\Integration\Block\Adminhtml\Integration\Interceptor $integration,
        \Magento\Framework\View\Layout\Interceptor $layout
    ) {
        $integration->addButton(
            'add_guest_access',
            [
                'label' => 'Add Guest Access',
                'onclick' => 'Hello.html',
                'class' => 'add'
            ]
        );

        return [$layout]; // 1. argument for setLayout()
    }
}
