<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Actions\Contracts\UpdatesUsersAvatar;

class UpdateUsersAvatar implements UpdatesUsersAvatar
{
    /**
     * Upload, save, and store URl for user's avatar
     *
     * @param User $user
     * @param UploadedFile $file
     * @return void
     */
    public function update(User $user, UploadedFile $file): void
    {
        if ( $user->avatar_url ) {
            Storage::disk('public')->delete($user->avatar_url);
        }

        $user->update([
            'avatar_url' => $file->storePublicly(
                'avatars',
                ['disk' => 'public']
            )
        ]);
    }
}
