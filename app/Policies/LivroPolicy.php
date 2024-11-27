<?php
 
namespace App\Policies;

use App\Models\Livro;
use App\Models\User;
 
class LivroPolicy
{
    public function create(?User $user): bool
    {
        //return !is_null($user);
        return false;
    }


    public function delete(?User $user): bool
    {
        return !is_null($user);
    }


    /**
     * Determine if the given post can be updated by the user.
     */
    public function update(?User $user): bool
    {
        return !is_null($user);
    }

    public function edit(?User $user): bool
    {
        return !is_null($user);
    }
}