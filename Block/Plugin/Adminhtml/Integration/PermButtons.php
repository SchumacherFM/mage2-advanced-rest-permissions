<?php

namespace SchumacherFM\AdvancedRESTPerms\Block\Plugin\Adminhtml\Integration;

use \Magento\Integration\Block\Adminhtml\Integration\Interceptor;

class PermButtons
{
    /**
     * @param Interceptor $integration
     * @param \Magento\Framework\View\Layout\Interceptor $layout
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeSetLayout(
        Interceptor $integration,
        \Magento\Framework\View\Layout\Interceptor $layout
    )
    {
        $integration->addButton(
            'add_guest_access',
            [
                'label' => 'Add Guest Access',
                'onclick' => 'setLocation(\'' . $this->getAddGuestUrl($integration) . '\')',
                'class' => 'add'
            ]
        );

        return [$layout]; // 1. argument for setLayout()
    }

    /**
     * @param Interceptor $integration
     * @return mixed|null|string
     */
    protected function getAddGuestUrl(Interceptor $integration)
    {
        return $integration->getUrl('advancedRest/integration/createGuest');
    }
}
