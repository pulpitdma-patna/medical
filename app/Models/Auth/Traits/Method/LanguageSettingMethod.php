<?php
namespace App\Models\Auth\Traits\Method;

/**
 * Trait LanguageSettingMethod.
 */
trait LanguageSettingMethod
{
    /**
     * @return mixed
     */
    public function isAdmin()
    {
        return $this->name === config('access.users.admin_role');
    }
}
