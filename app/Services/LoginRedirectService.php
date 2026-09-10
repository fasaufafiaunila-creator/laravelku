<?php

namespace App\Services;

use App\Models\User;

class LoginRedirectService
{
    public static function redirectPath(User $user): string
    {
        if (! $user->is_active ?? true) {
            abort(403, 'Akun Anda sedang dinonaktifkan.');
        }

        return match ($user->role) {
            'admin' => route('admin.dashboard'),
            'tenant' => route('tenant.dashboard', ['tenant' => $user->tenant_id ?? 'default']),
            'customer' => route('customer.home'),
            default => abort(403, 'Akses ditolak: User belum memiliki peran resmi.'),
        };
    }
}
