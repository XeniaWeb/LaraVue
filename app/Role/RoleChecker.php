<?php

namespace App\Role;

use App\Models\User;

/**
 * Class RoleChecker
 */
class RoleChecker
{
    /**
     * @param User $user
     * @param string $role
     * @return bool
     */
    public function check(User $user, string $role): bool
    {
        return $user->hasRole($role);
    }
}
