<!-- 
 Lokasi dan Nama File	: page/detail_produk.php
-->
<br>
<div class="container">
    <div class="col-12">
        <h1>DETAIL COURSES</h1>
    </div>
</div>
<div class="container">
    <!-- pilih semua yang ada di tabel course berdasarkan id -->
    <?php
    $idcourse = mysqli_real_escape_string($conn, @$_GET['id_course']);
    $tampil = mysqli_query($conn, "SELECT * FROM course WHERE id_course='$idcourse'");
    $tampil1 = mysqli_fetch_array($tampil);
    ?>
    <div class="row">
        <div class="col-5">
            <!-- ambil data dari tabel course yang namanya images, sesuai dengan id yang di ambilny -->
            <img src="<?php echo $tampil1['images']; ?>" width="80%">
        </div>
        <div class="col-7 produk_detail">
            <!-- ambil data dari tabel course yang namanya judul, sesuai dengan id yang di ambilnya-->
            <h3><?php echo $tampil1['judul']; ?></h3><br>
            <table width="100%" cellpadding="5" cellspacing="0">
                <tr>
                    <td width="20%">Harga</td>
                    <td>
                        <!-- ambil data dari tabel course yang namanya harga, sesuai dengan id yang di ambilnya -->
                        : Rp. <?php echo number_format($tampil1['harga']); ?><br>
                    </td>
                </tr>
                <tr>
                    <td>1 video</td>
                    <td>
                        <!-- ambil data dari tabel course yang namanya jam, sesuai dengan id yang di ambil -->
                        : <i class="far fa-clock"> <?php echo $tampil1['jam']; ?> jam
                    </td>
                </tr>
                <tr>
                    <td>Lama Belajar</td>
                    <td>
                        <!-- ambil data dari tabel course yang namanya bulan, sesuai dengan id yang di ambil -->
                        : <i class="far fa-calendar-alt"> <?php echo $tampil1['bulan']; ?> Bulan
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php echo $tampil1['title']; ?>
                    </td>
                </tr>
            </table><br>
            <a href="" class="form_button2">Add to Cart</a>

        </div>
    </div>

    <div class="produk_deskripsi">
        <?php echo $tampil1['title']; ?>
    </div>
</div>