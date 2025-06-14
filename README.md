# Sparepart Management App (CI4)

A simple monolith CRUD application built using **CodeIgniter 4**, integrated with **SQL Server**, featuring **DataTables**, **AJAX**, and **Select2** enhancements.

---

## ✨ Features

* ✅ Create, Read, Update, Delete (CRUD) for spareparts
* ✅ Datatables + AJAX listing with live rendering
* ✅ Dropdown + freetext (Select2) for units
* ✅ Category relationship (JOIN with categories table)
* ✅ Bootstrap 5 + jQuery + Select2
* ✅ SQL Server-compatible structure

---

## 🖼️ Screenshots

### 📋 Daftar Spareparts
![Index Page](public/screenshots/index.jpg)

### ➕ Tambah Sparepart
![Create Page](public/screenshots/create.jpg)

### ✏️ Edit Sparepart
![Edit Page](public/screenshots/edit.jpg)

---

## 🏗️ Tech Stack

* **Framework**: CodeIgniter 4
* **Database**: SQL Server
* **Frontend**: Bootstrap 5, jQuery, DataTables, Select2

---

## 🧰 Setup Instructions

### 1. Clone Repo

```bash
git clone https://github.com/namamu/ci4-sparepart-app.git
cd ci4-sparepart-app
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Copy .env Example

```bash
cp .env.example .env
```

### 4. Configure Database in `.env`

```dotenv
database.default.hostname = localhost
database.default.database = sparepart_db
database.default.username = sa
database.default.password = your_password
database.default.DBDriver = SQLSRV
```

### 5. Run Migrations & Seeds

```bash
php spark migrate
php spark db:seed CategorySeeder
php spark db:seed SparepartsSeeder
```

### 6. Start Local Server

```bash
php spark serve
```

Akses aplikasi di: [http://localhost:8080](http://localhost:8080)

---

## 📁 Folder Struktur Penting

```
app/
├── Controllers/
│   └── Spareparts.php
├── Models/
│   ├── SparepartModel.php
│   └── CategoryModel.php
├── Views/
│   └── spareparts/
│       ├── index.php
│       ├── create.php
│       └── edit.php
│   └── layouts/
│       └── default.php
├── Database/
│   ├── Migrations/
│   │   ├── CreateCategories.php
│   │   └── CreateSpareparts.php
│   └── Seeds/
│       ├── CategorySeeder.php
│       └── SparepartsSeeder.php
```

---

## 🧪 Sample Seeder Data

* Kategori: 1. Electrical, 2. Mechanical, 3. Chemical
* Spareparts:

  * "Kabel Listrik", 100, meter, 1
  * "Baut Baja", 500, pcs, 2
  * "Pelumas", 30, liter, 3

---

## 📜 License

MIT License
