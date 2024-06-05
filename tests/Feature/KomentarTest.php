<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class KomentarTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test(){

        $response = $this->get('/api/getall_komentar');

        $response->assertStatus(500); // Pastikan status respons adalah 200 (OK)
        $response->assertJsonStructure([ // Sesuaikan struktur JSON yang diharapkan
            '*' => [
                'id_komentar',
                'id_karya',
                'isi',
                // tambahkan atribut lain yang diharapkan di sini
            ],
    ]);
    }
}
