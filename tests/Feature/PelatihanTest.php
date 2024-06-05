<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PelatihanTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test(){

        $response = $this->get('/api/getall_pelatihan');

        $response->assertStatus(500); // Pastikan status respons adalah 200 (OK)
        $response->assertJsonStructure([ // Sesuaikan struktur JSON yang diharapkan
            '*' => [
                'id_pelatihan',
                'bidang',
                'deskripsi',
                'nama',
                'tahun_pelaksanaan',
                'nim',
                'sertifikat',
                // tambahkan atribut lain yang diharapkan di sini
            ],
     ]);
    }
}
