<!-- course section starts  -->

<section class="course" id="course">
    <form method="post" class="form">
        <center><br><br><br>
            <input class="form_search" type="text" name="cari" placeholder="cari..">
             <button class="menu_button" for="cari">cari</button>
        </center>
    </form>
<h1 class="heading">our popular courses</h1>    

<div class="box-container">
    <!-- ambil data yang ada di tabel course -->
    <?php
        $course = mysqli_query($conn, "SELECT * FROM course ORDER BY id_course");
        if (isset($_POST['cari'])) {
            $course = mysqli_query($conn, "SELECT * FROM course WHERE judul LIKE '%" . $_POST['cari'] . "%'");
            }
        while ($course1 = mysqli_fetch_array($course)) {
    ?>
    <div class="box">
        <!-- ambil data images dari tabel course  -->
        <img src="<?php echo$course1['images'] ?>" alt="">
        <h3 class="price">Rp.<?php echo number_format($course1['harga']); ?></h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="?page=detail_courses&&id_course=<?php echo$course1['id_course'] ?>" class="title"><?php echo $course1['judul'] ?></a>
            <p><?php echo $course1['title'] ?></p>
            <div class="info">
                <!-- ambil data dari tabel course yang nama kolomnya jam -->
                <h3> <i class="far fa-clock"></i> <?php echo $course1['jam'] ?> hours </h3>
                <!-- ambil data dari tabel course yang nama kolomnya bulan -->
                <h3> <i class="far fa-calendar-alt"></i> <?php echo $course1['bulan'] ?> months </h3>
                <!-- ambil data dari tabel course yang nama kolomnya modules -->
                <h3> <i class="fas fa-book"></i> <?php echo $course1['modules'] ?> modules </h3>
            </div>
        </div>
    </div>
    <?php } ?>

</div>

</section>

<!-- course section ends -->