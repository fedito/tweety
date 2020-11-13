<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Tweet extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'body'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function like($user = null, $liked = 1) {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ],
            [
                'liked'=> $liked,
            ],
            );
    }

    public function dislike($user = null){
        return $this->like($user, 0);
    }

    public function isLikedBy(User $user) {
        $this->likes->where('tweet_id', $this->id)->where('liked', 1)->count();
    }

    public function isDislikedBy(User $user) {
        $this->likes->where('tweet_id', $this->id)->where('liked', 0)->count();
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function scopeWithLikes(Builder $query){
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) disLikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }
}
