<form action="{{ action([App\Http\Controllers\MahasiswaController::class, 'store']) }}"  method="post">
    @csrf
    <table>
        <tr>
            <td>Nama Lengkap</td><td>:</td><td><input type="text" name="fullname"></td>
        </tr>
        <tr>
            <td>Nomor Induk Mahasiswa</td><td>:</td><td><input type="text" name="NIM"></td>
        </tr>
        <tr>
            <td>Nomor Induk Siswa Nasional</td><td>:</td><td><input type="text" name="NIDN"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td><td>:</td><td><input type="text" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Alamat</td><td>:</td><td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;"><input type="submit" value="Add">
            <input type="reset" value="Clear"></td>
        </tr>
    </table>
</form>