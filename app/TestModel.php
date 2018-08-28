<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    protected $primaryKey = 'identifier_1';

    public $timestamps = false;
    public $incrementing = false;

    public function relate() {
        return $this->hasOne(RelatedModel::class, 'identifier_1', 'identifier_1')
            ->where('identifier_2', '=', $this->identifier_2);
    }
}
