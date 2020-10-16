<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class customer extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'email',
        'telephone',
        'day_of_the_week',
        'coffee_a_large',
        'coffee_a_small',
        'coffee_b_large',
        'coffee_b_small',
        'coffee_c_large',
        'coffee_c_small',
        'chocolate_a',
        'chocolate_b',
        'information',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
