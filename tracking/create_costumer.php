<html>
<style>
    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>

    <form action="insert_costumer.php" method="post">
        <table class="center">
            <tr>
                <td colspan="2">
                    <center>
                        <h1>Tambahkan Costumer ke Sistem</h1>
                    </center>
                </td>
            </tr>
            <tr>
                <td>Nomor Order :</td>
                <td><input type="text" name="noorder"></td>
            </tr>
            <tr>
                <td>Agen :</td>
                <td><input type="text" name="agen"></td>
            </tr>
            <tr>
                <td>Nama Costumer:</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>Kode Unik Transaksi :</td>
                <td><input type="text" name="kodeunik"></td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" value="Tambah Customer"></center>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>