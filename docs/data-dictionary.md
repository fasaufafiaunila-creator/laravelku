# Data Dictionary & Audit ERD - System Kantin Multi-Tenant

## 1. Domain & Scope Tabel

### A. Platform-Scoped (Milik Platform Utama)
- `canteens`: Entitas gedung/area kantin utama.
- `users`: Identitas seluruh pengguna (admin, kasir, pelanggan).
- `roles`: Hak akses pengguna.
- `orders`: Checkout transaksi (dapat menampung barang dari banyak tenant).
- `payments`: Data transaksi pembayaran platform.

### B. Tenant-Owned (Milik Warung/Penjual - Wajib `tenant_id`)
- `tenants`: Data warung/penjual (Terikat pada `canteen_id`).
- `categories`: Kategori menu warung.
- `menus`: Produk/menu makanan & minuman.
- `menu_modifiers`: Opsi/varian tambahan menu.
- `tenant_orders`: Sub-order spesifik per warung.
- `order_items`: Rincian item pesanan per warung.
- `ledgers`: Catatan keuangan/saldo warung.

---

## 2. Foreign Key & Constraint Komposit

- **Tabel `tenants`**: Composite unique `(id, canteen_id)` sebagai sasaran FK komposit dari tabel anak.
- **Tabel `menus`**: Composite unique `(id, tenant_id)` untuk memastikan item pesanan tidak tertukar antar tenant.
```[cite: 1]

5. Tekan `Ctrl + S` untuk menyimpan file.

---

### **Eksekusi Penutup Tahap 1**

Setelah file `docs/data-dictionary.md` dibuat, jalankan perintah ini di terminal untuk mengosongkan database dan bersiap masuk ke **Tahap 2**:

```