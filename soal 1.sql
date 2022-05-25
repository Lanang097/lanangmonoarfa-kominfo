CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `nama_pegawai` varchar(255),
  `waktu_login` timestamp
);

CREATE TABLE `brg_masuk` (
  `id` int PRIMARY KEY,
  `kode_brg` int,
  `nama_brg` varchar(255),
  `wktu_masuk` timestamp,
  `jml_barang` int,
  `status` ENUM ('out_of_stock', 'in_stock', 'running_low')
);

CREATE TABLE `brg_keluar` (
  `id` int PRIMARY KEY,
  `kode_brg` int,
  `nama_brg` varchar(255),
  `wktu_keluar` timestamp,
  `price` int,
  `status` ENUM ('out_of_stock', 'in_stock', 'running_low'),
  `created_at` datetime DEFAULT (now())
);

CREATE TABLE `mstr_barang` (
  `id` int,
  `kode_brg` int,
  `barang` varchar(255),
  `jml_barang` int,
  `waktu_inpt` timestamp,
  `id_penginput` int,
  PRIMARY KEY (`id`, `barang`)
);

ALTER TABLE `mstr_barang` ADD FOREIGN KEY (`id_penginput`) REFERENCES `users` (`id`);
