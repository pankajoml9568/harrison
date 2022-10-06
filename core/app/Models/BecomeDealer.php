<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BecomeDealer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'state',
        'city',
        'address',
        'message',
    ];

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
