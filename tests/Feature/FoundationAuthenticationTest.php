<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FoundationAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_is_redirected_to_login_when_accessing_tenant_or_admin_routes()
    {
        // Route tenant & admin harus mengarahkan guest ke halaman login
        $this->get('/tenant/stand-utama/dashboard')
            ->assertRedirect('/login');

        $this->get('/admin/dashboard')
            ->assertRedirect('/login');
    }

    /** @test */
    public function authenticated_and_verified_user_can_access_dashboard()
    {
        // Buat user terverifikasi
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        // Pengguna terautentikasi dapat membuka route internal
        $this->actingAs($user)
            ->get('/tenant/stand-utama/dashboard')
            ->assertStatus(200);

        $this->actingAs($user)
            ->get('/admin/dashboard')
            ->assertStatus(200);
    }

    /** @test */
    public function public_customer_route_is_accessible_by_anyone()
    {
        // Route pelanggan publik dapat diakses tanpa login
        $this->get('/kantin/stand-utama')
            ->assertStatus(200);
    }
}
