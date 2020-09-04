<html>
<style>
    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>

    <form action="insert_record.php" method="post">
        <table class="center">
            <tr>
                <td colspan="2">
                    <center>
                        <h1>Tambahkan Data Jejak ke Sistem</h1>
                    </center>
                </td>
            </tr>
            <tr>
                <td>Nomor Order :</td>
                <td><input type="text" name="noorder"></td>
            </tr>
            <tr>
                <td>Tanggal :</td>
                <td><input type="text" name="tanggal"></td>
            </tr>
            <tr>
                <td>Jam :</td>
                <td><input type="text" name="jam"></td>
            </tr>
            <tr>
                <td>Jenis Kegiatan :</td>
                <td><input type="text" name="jeniskegiatan"></td>
            </tr>
            <tr>
                <td>Detail :</td>
                <td><textarea rows="4" cols="21" name="detail"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" value="Tambah Record"></center>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>