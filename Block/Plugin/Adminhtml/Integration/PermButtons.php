<?php

namespace SchumacherFM\AdvancedRESTPerms\Block\Plugin\Adminhtml\Integration;

use \Magento\Integration\Block\Adminhtml\Integration\Interceptor as IntegrationInterceptor;

class PermButtons
{
    /**
     * @param IntegrationInterceptor $subject
     * @param \Magento\Framework\View\Layout\Interceptor $layout
     * @return array
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeSetLayout(
        IntegrationInterceptor $subject,
        \Magento\Framework\View\Layout\Interceptor $layout
    )
    {
        $subject->addButton(
            'add_guest_access',
            [
                'label' => 'Add Guest Access',
                'onclick' => 'setLocation(\'' . $this->getAddGuestUrl($subject) . '\')',
                'class' => 'add'
            ]
        );

        return [$layout]; // 1. argument for setLayout()
    }

    /**
     * @param IntegrationInterceptor $integration
     * @return mixed|null|string
     */
    protected function getAddGuestUrl(IntegrationInterceptor $integration)
    {
        return $integration->getUrl('advancedRest/integration/createGuest');
    }
}
