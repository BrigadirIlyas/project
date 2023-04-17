<h1>Edit Data</h1>
{{-- @vite('resources/css/app.css') --}}
<form action="/siswa/{{ $siswa->id }}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="nama" value="{{ $siswa->nama }}"><br>
    <input type="text" name="nisn" value="{{ $siswa->nisn }}"><br>
    <select name="jenis_kelamin">
        <option selected  value="">PIlih Jenis Kelamin</option>
        <option value="Laki-Laki" @if($siswa->jenis_kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>
        <option value="Perempuan" @if($siswa->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
    </select><br>
    <textarea name="alamat" rows="10">{{ $siswa->alamat }}</textarea><br>
    <input type="submit" name="siswa" value="Update">
</form>