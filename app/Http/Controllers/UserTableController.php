<?php

namespace App\Http\Controllers\Examples;

use App\Http\Controllers\Controller;
// use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;
use App\Http\Controllers\Examples\Tables\Builders\ExampleTable;

class UserTableController extends Controller
{
    use Datatable;

    protected $tableClass = UserTable::class;
}