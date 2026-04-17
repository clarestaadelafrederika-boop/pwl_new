<form action="{{ action([App\Http\Controllers\MahasiswaController::class, 'update'], [$mahasiswa->id]) }}"  method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>Nama Lengkap</td><td>:</td><td><input type="text" name="fullname" value="{{$mahasiswa->fullname}}"></td>
        </tr>
        <tr>
            <td>Nomor Induk Mahasiswa</td><td>:</td><td><input type="text" name="NIM" value="{{$mahasiswa->NIM}}"></td>
        </tr>
        <tr>
            <td>Nomor Induk Siswa Nasional</td><td>:</td><td><input type="text" name="NIDN" value="{{$mahasiswa->NIDN}}"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td><td>:</td><td><input type="text" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}"></td>
        </tr>
        <tr>
            <td>Alamat</td><td>:</td><td><textarea name="alamat">{{$mahasiswa->alamat}}</textarea></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;"><input type="submit" value="Update">
            <input type="reset" value="Clear"></td>
        </tr>
    </table>
</form>