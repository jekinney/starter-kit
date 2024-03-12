<?php

namespace App\Actions\Contracts;

use App\Models\User;
use Illuminate\Http\UploadedFile;

interface UpdatesUsersAvatar
{
    /**
     * Upload and save a user's avatar image
     *
     * @param  User $user
     * @param  UploadedFile $file
     * @return void
     */
    public function update(User $user, UploadedFile $file): void;
}
