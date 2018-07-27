<?php

namespace App\Http\Controllers\Customers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Tables\Builders\CustomerTable;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class CustomerTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = CustomerTable::class;
}
