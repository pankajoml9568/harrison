<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BecomeAssociate extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'state',
        'city',
        'i_am_a',
    ];

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
