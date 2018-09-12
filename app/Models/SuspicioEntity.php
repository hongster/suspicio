<?php

namespace App\Models;

use App\Models\Model;

class SuspicioEntity extends Model {

    /**
     * Belongs to relationship.
     */
    public function suspicioList()
    {
        return $this->belongsTo('App\Models\SuspicioList');
    }

    /**
     * Setup search query for given keyword.
     * Search by name and URL.
     * @param string $keyword
     */
    public function scopeSearch($query, $keyword)
    {
        return $query->where('name', 'like', "%{$keyword}%")
            ->orWhere('websites', 'like', "%{$keyword}%");
    }

}