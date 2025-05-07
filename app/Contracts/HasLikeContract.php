<?php

declare(strict_types=1);

namespace Modules\Rating\Contracts;

/**
 * This interface allows models to receive replies.
 */
interface HasLikeContract
{
    /**
<<<<<<< HEAD
     * @param \Modules\Xot\Contracts\UserContract|null $user
     *
=======
     * @param  \Modules\Xot\Contracts\UserContract|null  $user
>>>>>>> 34a017e (.)
     * @return bool
     */
    public function isLikedBy($user);

    /**
<<<<<<< HEAD
     * @param \Modules\Xot\Contracts\UserContract|null $user
     *
=======
     * @param  \Modules\Xot\Contracts\UserContract|null  $user
>>>>>>> 34a017e (.)
     * @return void
     */
    public function likedBy($user);

    /**
<<<<<<< HEAD
     * @param \Modules\Xot\Contracts\UserContract|null $user
     *
=======
     * @param  \Modules\Xot\Contracts\UserContract|null  $user
>>>>>>> 34a017e (.)
     * @return void
     */
    public function dislikedBy($user);
}
