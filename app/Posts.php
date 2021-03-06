<?php

name

    public function likes()
    space App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ["name", "picture", "description", "user_id"];
{
    	return $this->hasMany("App\Likes","post_id");
    }
    public function comments()
    {
    	return $this->hasMany("App\Comments","post_id");
    }
    public function autor()
    {
    	return $this->hasOne("App\Users","user_id");
    }

}
