<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appointment
 *
 * @property $id
 * @property $title
 * @property $description
 * @property $date
 * @property $time
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Appointment extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['title', 'description', 'date', 'time'/* ,'time_start', 'time_end','status','category','frequency',"id_user","name_user" */];

    public static function search($field, $keyword)
    {
        return self::where($field, 'ilike', '%' . $keyword . '%');
    }
    public function appointment()
{
    return $this->belongsTo(Appointemnt::class);
}
}
