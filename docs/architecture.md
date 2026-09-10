# Arsitektur & Konvensi Sistem - Kantin Multi-Tenant

## Diagram Dependensi Modul

```text
[ Admin ] ──────┐
                ├──> [ Catalog / Common Data ] <─── [ Kitchen ]
[ Customer ] ───┘                                       │
    │                                                   │
    └──────────────────> [ Ordering ] <────────────────┘
                             │
                             ▼
                         [ Payment ]