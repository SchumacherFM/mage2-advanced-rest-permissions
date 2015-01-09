<?php

namespace SchumacherFM\AdvancedRESTPerms\Block\Adminhtml;

class GuestButton extends \Magento\Backend\Block\Widget\Container
{

    protected function _construct()
    {
        $this->addButton(
            'add_guest_access',
            [
                'label' => 'Add Guest Access',
                'onclick' => 'setLocation(\'' . $this->getUrl('advancedRest/integration/createGuest') . '\')',
                'class' => 'add'
            ]
        );

        parent::_construct();
    }

    /**
     * The parent method MUST be disabled otherwise you're generating the toolbar 1-time more :-(
     *
     * The case where pushButtons() in _prepareLayout must be disabled depends on IF there is
     * already a button. These "existing" buttons are often called: "Add New Item". If you know there
     * are no  button then you should NOT override _prepareLayout.
     *
     * Preparing child blocks for each added button
     *
     * @return $this
     */
    protected function _prepareLayout()
    {
        // $this->toolbar->pushButtons($this, $this->buttonList);
        return $this; // parent::_prepareLayout();
    }
}
