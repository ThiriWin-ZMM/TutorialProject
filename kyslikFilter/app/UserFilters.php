<?php

namespace App;


class UserFilters extends QueryFilter
{
    public function recent($minutes = null)
    {
        $minutes = (is_numeric($minutes));

        return $this->builder->where('created_at', '>=', Carbon\Carbon::now()->subMinutes($minutes));
    }
    
    public function name($word)
    {
        return $this->builder->where('name',$word);
    }
}
