<?php

namespace Database\Seeders;

use App\Models\Canteen;
use App\Models\Category;
use App\Models\Menu;
use App\Models\MenuModifier;
use App\Models\Tenant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DemoCanteenSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            // 1. Buat 1 Kantin
            $canteen = Canteen::create([
                'name' => 'Kantin Utama Kampus',
                'code' => 'KANTIN-UTAMA',
            ]);

            // 2. Buat 2 Tenant
            $tenant1 = Tenant::create([
                'canteen_id' => $canteen->id,
                'code' => 'WARUNG-01',
                'slug' => Str::slug('Warung Bu Sastro'),
                'display_name' => 'Warung Bu Sastro',
                'status' => 'active',
            ]);

            $tenant2 = Tenant::create([
                'canteen_id' => $canteen->id,
                'code' => 'DEPOT-02',
                'slug' => Str::slug('Depot Es Segar'),
                'display_name' => 'Depot Es Segar',
                'status' => 'active',
            ]);

            // 3. Meja (Table Sessions)
            DB::table('table_sessions')->insert([
                'tenant_id' => $tenant1->id,
                'table_number' => 'A1',
                'token_hash' => hash('sha256', 'token-meja-a1', true),
                'expires_at' => now()->addHours(2),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // 4. Kategori, Menu, Modifier Tenant 1
            $category1 = Category::create([
                'tenant_id' => $tenant1->id,
                'name' => 'Makanan Utama',
                'slug' => Str::slug('Makanan Utama'),
            ]);

            $menu1 = Menu::create([
                'tenant_id' => $tenant1->id,
                'category_id' => $category1->id,
                'name' => 'Nasi Goreng Spesial',
                'slug' => Str::slug('Nasi Goreng Spesial'),
                'price_amount' => 25000,
                'is_available' => true,
            ]);

            MenuModifier::create([
                'tenant_id' => $tenant1->id,
                'menu_id' => $menu1->id,
                'name' => 'Telor Dadar Extra',
                'price_delta' => 4000,
            ]);

            // 5. Kategori & Menu Tenant 2
            $category2 = Category::create([
                'tenant_id' => $tenant2->id,
                'name' => 'Minuman Segar',
                'slug' => Str::slug('Minuman Segar'),
            ]);

            Menu::create([
                'tenant_id' => $tenant2->id,
                'category_id' => $category2->id,
                'name' => 'Es Teh Manis Jumbo',
                'slug' => Str::slug('Es Teh Manis Jumbo'),
                'price_amount' => 5000,
                'is_available' => true,
            ]);

            // 6. Komisi (Effective-dated)
            DB::table('commissions')->insert([
                'canteen_id' => $canteen->id,
                'tenant_id' => null,
                'rate_percentage' => 5.00,
                'effective_from' => now(),
                'effective_to' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        });
    }
}
