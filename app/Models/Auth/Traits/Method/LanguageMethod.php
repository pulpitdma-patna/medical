<?php
namespace App\Models\Auth\Traits\Method;

/**
 * Trait LanguageMethod.
 */
trait LanguageMethod
{
    /**
     * @return mixed
     */
    public function isAdmin()
    {
        return $this->name === config('access.users.admin_role');
    }
}
