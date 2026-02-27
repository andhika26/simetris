<img width="1920" height="878" alt="image" src="https://github.com/user-attachments/assets/367995df-76b4-4905-9dad-6468f8414ac2" />
Tampilan Login

<img width="1920" height="878" alt="image" src="https://github.com/user-attachments/assets/6996a275-c723-432f-a9d2-a10397abb36a" />
Dashboard KIB

<img width="1920" height="878" alt="image" src="https://github.com/user-attachments/assets/b18e9d2c-efd4-4d09-a3f2-49855f532714" />
Contoh Tampilan Data Table

<img width="1920" height="878" alt="image" src="https://github.com/user-attachments/assets/7684ffbe-2f9e-4777-8527-8420d53d7727" />
Contoh Tampilan Formulir

<img width="1920" height="878" alt="image" src="https://github.com/user-attachments/assets/6c7e2557-7be4-483e-8c23-060d732f9416" />
Login Aplikasi Sudah Terkoneksi ke Database

<img width="1920" height="878" alt="image" src="https://github.com/user-attachments/assets/bdc2c5fd-2e61-474e-84ab-f67e7ed66e92" />
Pop Up Nama Aplikasi dan Versi Log


==== Create Tabel User ====
```sql
CREATE TABLE `operator` (
  `id` varchar(35) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `hp` varchar(14) NOT NULL,
  `status` varchar(2) NOT NULL,
  `unor` varchar(8) NOT NULL,
  `logmasuk` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
