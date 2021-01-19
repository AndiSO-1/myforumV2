<?php

namespace App\Policies;

use App\Models\Opinion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OpinionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Opinion  $opinion
     * @return mixed
     */
    public function view(User $user, Opinion $opinion)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Opinion  $opinion
     * @return mixed
     */
    public function update(User $user, Opinion $opinion)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Opinion  $opinion
     * @return mixed
     */
    public function delete(User $user, Opinion $opinion)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Opinion  $opinion
     * @return mixed
     */
    public function restore(User $user, Opinion $opinion)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Opinion  $opinion
     * @return mixed
     */
    public function forceDelete(User $user, Opinion $opinion)
    {
        //
    }

    /**
     * A user can comment an opinion only if he has posted some opinions of his own
     * @param User $user
     * @return bool
     */
    public function comment(User $user)
    {
        return $user->opinions->count() > config('app.min_opinions_for_comments');
    }

    public function commentOpinion(User $user, Opinion $opinion)
    {
        return preg_match('/\@'.$user->pseudo.'/i',$opinion->description);
    }
}
