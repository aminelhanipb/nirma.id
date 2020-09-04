<html>
<style>
    .center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>

    <table class="center">
        <tr>
            <td colspan="2">
                <center>
                    <h1>Masukkan Nomor Tracking Anda</h1>
                </center>
            </td>
        </tr>

        <form action="do_tracking.php" method="post">
            <tr>
                <td>Kode Unik:</td>
                <td><input type="text" name="kodeunik"></td>
            </tr>
            <tr>
                <td colspan="2"><br></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" value="Track !"></center>
                </td>
            </tr>
    </table>
    </form>

</body>

</html>