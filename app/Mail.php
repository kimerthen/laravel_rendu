<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'object', 'content', 'user_id',
    ];

    /**
     * Get the user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
