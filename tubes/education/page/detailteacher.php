<!-- course section starts  -->

<section class="course" id="course">
    <form method="post" class="form">
        <center><br><br><br>
            <input class="form_search" type="text" name="cari" placeholder="cari..">
             <button class="menu_button" for="cari">cari</button>
        </center>
    </form>

<h1 class="heading">our expert teachers</h1>    

<div class="box-container">
    <?php
        $idteacher = @$_GET['id_teacher'];
        $teacher = mysqli_query($conn, "SELECT * FROM teacher ORDER BY id_teacher");
        if (isset($_POST['cari'])) {
            $teacher = mysqli_query($conn, "SELECT * FROM teacher WHERE teacher LIKE '%" . $_POST['cari'] . "%'");
            }
        while ($teacher1 = mysqli_fetch_array($teacher)) {
    ?>
    <div class="box">
        <img src="images/teacher.jpg" alt="">
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="?page=detail_teacher2&&id_teacher=<?php echo @$teacher1['id_teacher']; ?>" class="title"><?php echo $teacher1['teacher'] ?></a>
            <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Dolorem, Beatae. Modi Quos Excepturi Id Quibusdam? Molestiae Quis Nihil Non Debitis!</p>
        </div>
    </div>
    <?php } ?>

</div>

</section>

<!-- course section ends -->