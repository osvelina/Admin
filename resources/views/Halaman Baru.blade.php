<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Baru</title>
</head>
<body>
    <h1>Halaman Baru</h1>

    <!-- Tombol untuk menambahkan data baru -->
    <button onclick="tambahData()">Tambah Data</button>

    <!-- Tabel untuk menampilkan data -->
    <table id="tabelData" border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <!-- Tambahkan kolom sesuai kebutuhan -->
            <th>Aksi</th>
        </tr>
    </table>

    <script>
        function tambahData() {
            var namaBaru = prompt("Masukkan nama baru:");

            if (namaBaru) {
                // Mendapatkan tabel
                var tabel = document.getElementById("tabelData");

                // Menambahkan baris baru
                var row = tabel.insertRow(-1);

                // Menambahkan sel-sel baru
                var cellID = row.insertCell(0);
                var cellNama = row.insertCell(1);
                var cellAksi = row.insertCell(2);

                // Mengisi sel-sel dengan data
                cellID.innerHTML = tabel.rows.length - 1; // ID dapat dihitung berdasarkan jumlah baris
                cellNama.innerHTML = namaBaru;
                cellAksi.innerHTML = '<button onclick="editData(this)">Edit</button> | <button onclick="hapusData(this)">Hapus</button>';
            }
        }

        function editData(button) {
            var row = button.parentNode.parentNode;

            // Mendapatkan data yang ingin diubah
            var id = row.cells[0].innerHTML;
            var nama = row.cells[1].innerHTML;

            // Menggunakan prompt untuk keperluan contoh, Anda dapat menggunakan formulir atau modul yang lebih canggih
            var namaBaru = prompt("Edit Nama:", nama);

            if (namaBaru) {
                // Mengganti data dalam sel
                row.cells[1].innerHTML = namaBaru;
            }
        }

        function hapusData(button) {
            var row = button.parentNode.parentNode;

            // Menghapus baris
            row.parentNode.removeChild(row);
        }
    </script>
</body>
</html>
