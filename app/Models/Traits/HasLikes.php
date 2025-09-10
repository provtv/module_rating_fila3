<?php

declare(strict_types=1);

namespace Modules\Rating\Models\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Rating\Models\Like;

trait HasLikes
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function likes()
    {
        return $this->likesRelation;
    }

    /**
     * param \Modules\Xot\Contracts\UserContract|null $user.
     *
<<<<<<< HEAD
     * @param \Modules\Xot\Contracts\UserContract|null $user
=======
     * @param  \Modules\Xot\Contracts\UserContract|null  $user
>>>>>>> ade9b58 (.)
     */
    public function likedBy($user): void
    {
        $this->likesRelation()->create(['user_id' => $user->id]);

        $this->unsetRelation('likesRelation');
    }

    /**
     * param \Modules\Xot\Contracts\UserContract|null $user.
     *
<<<<<<< HEAD
     * @param \Modules\Xot\Contracts\UserContract|null $user
=======
     * @param  \Modules\Xot\Contracts\UserContract|null  $user
>>>>>>> ade9b58 (.)
     */
    public function dislikedBy($user): void
    {
        /**
         * @var Like
         */
        $where = $this->likesRelation()->where('user_id', $user->id)->first();
<<<<<<< HEAD
        if (null !== $where) {
=======
        if ($where !== null) {
>>>>>>> ade9b58 (.)
            $where->delete();
        }

        $this->unsetRelation('likesRelation');
    }

    /**
     * It's important to name the relationship the same as the method because otherwise
     * eager loading of the polymorphic relationship will fail on queued jobs.
     *
     * @see https://github.com/laravelio/laravel.io/issues/350
     */
    public function likesRelation(): MorphMany
    {
        return $this->morphMany(Like::class, 'likesRelation', 'likeable_type', 'likeable_id');
    }

    /**
     * param \Modules\Xot\Contracts\UserContract|null $user.
     *
<<<<<<< HEAD
     * @param \Modules\Xot\Contracts\UserContract|null $user
     *
=======
     * @param  \Modules\Xot\Contracts\UserContract|null  $user
>>>>>>> ade9b58 (.)
     * @return bool
     */
    public function isLikedBy($user)
    {
        return $this->likesRelation()->where('user_id', $user->id)->exists();
    }

    /**
     * Undocumented function.
     *
     * @return void
     */
    protected static function bootHasLikes()
    {
        static::deleting(function ($model): void {
<<<<<<< HEAD
            $model->likesRelation()->delete();

=======
            $model->likesRelation()->delete(); /** @phpstan-ignore method.nonObject */
>>>>>>> ade9b58 (.)
            $model->unsetRelation('likesRelation');
        });
    }
}
