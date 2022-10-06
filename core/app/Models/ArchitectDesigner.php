<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchitectDesigner extends Model
{
    protected $fillable = [
        'name',
        'email',
        'state',
        'city',
        'design_plans',
    ];

    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
