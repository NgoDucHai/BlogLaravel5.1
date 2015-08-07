<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model {
    protected $table = 'contents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'image','published_at'];
    protected $dates = ['published_at'];

    public function setTitleAttribute($value) {
        $this->attributes['title'] = $value;

        if (!$this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }

}
