<form action="/siswa/store" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama"><br>
    <input type="text" name="nisn"><br>
    <select name="jenis_kelamin">
        <option selected value="">PIlih Jenis Kelamin</option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    <input type="file" name="foto"><br>
    <textarea name="alamat" rows="10"></textarea><br>
    <input type="submit" name="siswa" value="Save">
</form>