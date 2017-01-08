<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = [
        'code',
        'target'
    ];

    protected $visible = [
        'id',
        'target',
        'url'
    ];

    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        return env('LINK_BASE_URL') . '/' . $this->code;
    }

    public function user()
        {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::created(function ($link) {
            $link->setDefaultCodeFromId();
        });
    }
    
    public function setDefaultCodeFromId()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code = '';

        $n = $this->id;
        $base = strlen($alphabet);

        while ($n > 0) {
            $char = $n % $base;
            $code .= $alphabet[$char];
            $n = floor($n / $base);
        }

        $this->code = $code;
        $this->save();
    }
}
