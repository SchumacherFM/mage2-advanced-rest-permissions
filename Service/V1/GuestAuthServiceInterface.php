<?php

namespace SchumacherFM\AdvancedRESTPerms\Service\V1;

use Magento\Framework\Exception\LocalizedException;

/**
 * Interface for integration permissions management.
 */
interface GuestAuthServiceInterface
{

    /**
     * Grant permissions to guest to access the specified resources.
     *
     * @param int $integrationId
     * @param string[] $resources List of resources which should be available to the specified user.
     * @return void
     * @throws LocalizedException
     */
    public function grantPermissions($integrationId, $resources);
}
