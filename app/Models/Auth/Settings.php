<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'theme',
        'font',
        'mode_type',
        'data_theme',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
