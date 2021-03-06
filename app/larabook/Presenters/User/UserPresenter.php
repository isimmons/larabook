<?php namespace Larabook\Presenters\User;

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    /**
    * Present a link to the users gravatar
    *
    * @param int $size
    * @return string
    */
    public function gravatar($size = 45)
    {
        //check if user has gravatar
        $email = md5($this->email);

        return "//www.gravatar.com/avatar/{$email}?s={$size}&d=//placekitten.com/{$size}/{$size}";
    }

    public function followerCount()
    {
        $count = $this->entity->followers()->count();
        $plural = str_plural('Follower', $count);

        return "{$count} {$plural}";
    }

    public function statusCount()
    {
        $count = $this->entity->statuses()->count();
        $plural = str_plural('Status', $count);

        return "{$count} {$plural}";
    }

}
