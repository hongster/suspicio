<?php

namespace App\Models;

use App\Models\Model;

class SuspicioList extends Model {

    /**
     * Has many relationship.
     */
    public function suspicioEntities()
    {
        return $this->hasMany('App\Models\SuspicioEntity');
    }

}