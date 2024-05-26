<?php

use App\Models\User;
use Illuminate\Http\UploadedFile;



it('authenticated user can view their attachments', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $response = $this->get(route('attachments.index'));

    $response->assertStatus(200);
    // Add further assertions as needed
});

