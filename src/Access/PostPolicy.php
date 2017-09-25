<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flarum\Likes\Access;

use Flarum\Core\Access\AbstractPolicy;
use Flarum\Core\Post;
use Flarum\Core\User;

class PostPolicy extends AbstractPolicy
{
    /**
     * {@inheritdoc}
     */
    protected $model = Post::class;

    /**
     * @param User $actor
     * @param Post $post
     * @return bool
     */
    public function like(User $actor, Post $post)
    {
        if ($post->discussion->is_locked) {
            return false;
        }
    }
}
