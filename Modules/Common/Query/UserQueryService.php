<?php
/**
 * Created By PhpStorm
 * Code By : trungphuna
 * Date: 7/19/24
 */

namespace Modules\Common\Query;

use App\Models\User;
use Modules\Common\Base\ModelService;

class UserQueryService extends ModelService
{
    public static function findById($id)
    {
        return User::find($id);
    }
}