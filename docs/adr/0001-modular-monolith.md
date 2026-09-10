# 1. Arsitektur Modular Monolith

## Status
Diterima (Accepted)

## Konteks
Aplikasi Kantin Multi-Tenant membutuhkan pemisahan domain yang jelas (Admin, Tenant, Customer) namun tetap sederhana dalam pengoperasian dan *deployment*.

## Keputusan
Menggunakan pola **Modular Monolith** berbasis namespace `App\Modules\*`. Komunikasi lintas modul wajib menggunakan **Event/Listener** untuk menjaga *decoupling*.

## Konsekuensi
- Modul tidak boleh memanggil Controller/Service dari modul lain secara langsung.
- Setiap modul mengelola logika dan batas datanya sendiri.