# Pemetaan Modul & Bounded Context

1. **Core / Shared**: Konfigurasi dasar, middleware, utility global.
2. **Auth / User**: Autentikasi, otorisasi, manajemen profil (Admin, Tenant, Customer).
3. **Merchant / Tenant**: Pengelolaan toko, menu makanan/minuman, status operasional.
4. **Ordering / Kasir**: Pemesanan pelanggan, manajemen keranjang, antrean pesanan.
5. **Kitchen / Dapur**: Tampilan layar dapur (KDS), pembaruan status pemrosesan makanan.
6. **Payment / Pembayaran**: Integrasi QRIS/Gateway, konfirmasi status pembayaran.
## Komunikasi Lintas Modul (Event-Driven)
- `OrderCreated` (Ordering) $\rightarrow$ Didengar oleh `Payment` untuk membuat transaksi.
- `PaymentPaid` (Payment) $\rightarrow$ Didengar oleh `Kitchen` untuk menampilkan pesanan di layar dapur.
- `OrderReady` (Kitchen) $\rightarrow$ Didengar oleh `Ordering` untuk notifikasi ke Customer.