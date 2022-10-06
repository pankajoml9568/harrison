<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'dob',
        'gender',
        'country',
        'state',
        'city',
        'apply_for',
        'highest_education',
        'total_experince',
        'prefered_location',
        'current_designation',
        'current_employer',
        'current_annual_ctc',
        'resume',
    ];

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
