<?php

namespace Gimmersta\Cronos\Core\Models\Types;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * Class BaseAuthenticatableModel
 *
 * This class replaces Illuminate\Foundation\Auth\User and should replicate its functionality.
 * The reason we replace it is so that we can replace the model it extends.
 *
 * @package App\Models\Types
 */
class BaseAuthenticatableModel extends BaseModel implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable;
    use Authorizable;
    use CanResetPassword;
    use MustVerifyEmail;
}
