<?php

namespace App\Http\Controllers\Examples\Tables\Builders;

use App;
use LaravelEnso\VueDatatable\app\Classes\Table;

class UserTable extends Table
{
    protected $templatePath = __DIR__.'/../Templates/users.json';

    public function query()
    {
        return User::select(\DB::raw(
                'users.id as "dtRowId", users.full_name, users.email'
            ))
    }
}