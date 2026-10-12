<form action="/hasil-cari" method="GET">
    <!-- Tidak perlu @csrf karena ini method GET -->
    <label for="nama">Cari Nama Mahasiswa:</label>
    <input type="text" name="nama" id="nama" placeholder="Masukkan nama...">
    <button type="submit">Cari</button>
</form>