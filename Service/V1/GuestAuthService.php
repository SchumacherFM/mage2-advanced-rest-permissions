<?php
/**
 * @copyright Copyright (c) 2015 Cyrill Schumacher (http://www.schumacher.fm)
 */

namespace SchumacherFM\AdvancedRESTPerms\Service\V1;

use Magento\Authorization\Model\UserContextInterface;
use Magento\Integration\Service\V1\AuthorizationService;
use Magento\Framework\Exception\LocalizedException;

/**
 * Service for guest integration permissions management.
 *
 * @SuppressWarnings(PHPMD.LongVariable)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class GuestAuthService extends AuthorizationService implements GuestAuthServiceInterface
{

    /**
     * Create new ACL role.
     *
     * @param int $integrationId
     * @return \Magento\Authorization\Model\Role
     */
    protected function _createRole($integrationId)
    {
        $roleName = UserContextInterface::USER_TYPE_GUEST . $integrationId;
        $role = $this->_roleFactory->create();
        $role->setRoleName($roleName)
            ->setUserType(UserContextInterface::USER_TYPE_GUEST)
            ->setUserId(0)
            ->setRoleType(\Magento\Authorization\Model\Acl\Role\Group::ROLE_TYPE)
            ->setParentId(0)
            ->save();
        return $role;
    }

    /**
     * Identify authorization role associated with provided integration.
     *
     * @param int $integrationId
     * @return \Magento\Authorization\Model\Role|false Return false in case when no role associated with user was found.
     */
    protected function _getUserRole($integrationId)
    {
        $roleCollection = $this->_roleCollectionFactory->create();
        /** @var Role $role */
        $role = $roleCollection
            ->setUserFilter($integrationId, UserContextInterface::USER_TYPE_GUEST)
            ->getFirstItem();
        return $role->getId() ? $role : false;
    }
}
