<?php

namespace Tests\Feature;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ContactsTest extends TestCase
{
    public function testUpload()
    {
        $file = UploadedFile::fake()->createWithContent('valid.txt', 'valid');

        $response = $this->json('POST', '/', [
            'name' => 'Willy Stadnick',
            'email' => 'willy.stadnick@gmail.com',
            'phone' => '48999098394',
            'message' => 'Lorem ipsum',
            'attach' => $file,
        ]);

        $response->assertOk();

        Storage::assertExists('contacts/'.$file->hashName());
    }
}
