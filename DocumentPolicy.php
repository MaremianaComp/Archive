<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Document;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Document $document): bool
    {
        return $document->user()->is($user);
    }
   
    public function destroy(User $user, Document $document) 
    {
        return $this->update($user, $document);
    }
}
