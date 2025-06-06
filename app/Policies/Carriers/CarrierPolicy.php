<?php

namespace App\Policies\Carriers;

use App\Enums\Permission;
use App\Models\Carriers\Carrier;
use App\Models\User;

class CarrierPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Carrier $carrier): bool
    {
        return $user->can(Permission::CARRIER_VIEW);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can(Permission::CARRIER_EDIT);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Carrier $carrier): bool
    {
        return $user->can(Permission::CARRIER_EDIT);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Carrier $carrier): bool
    {
        return $user->can(Permission::CARRIER_EDIT);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Carrier $carrier): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Carrier $carrier): bool
    {
        return false;
    }
}
