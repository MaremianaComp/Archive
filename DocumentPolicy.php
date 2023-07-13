<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Document;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Document $document): bool
    {
        return $document->user()->is($user);
    }
    // public function update(User $user, Document $document) {
    //     return $document->user->id === $user->id;
    //     }
    public function destroy(User $user, Document $document) 
    {
        return $this->update($user, $document);
    }
}
