<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BukuTamuTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_guestbook_page_can_be_rendered(): void
    {
        $response = $this->get('/bukutamu');

        $response->assertOk();
        $response->assertSee('Buku Tamu');
    }

    public function test_guest_can_submit_a_message(): void
    {
        $response = $this->post('/bukutamu', [
            'nama' => 'Andi',
            'email' => 'andi@example.com',
            'pesan' => 'Selamat siang, saya senang dengan website ini.',
        ]);

        $this->assertDatabaseHas('pesan_tamus', [
            'nama' => 'Andi',
            'email' => 'andi@example.com',
        ]);

        $response->assertRedirect('/bukutamu');
    }
}
