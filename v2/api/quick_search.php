<?php include('../serverV1.php'); ?>
<div class="quick-search-result">
    <!--begin::Message-->
    <div class="text-muted d-none">
        No record found
        <?php $var = @$_GET['query']; ?>
        <?php
        $t_post="SELECT * FROM post WHERE title_mon LIKE '%".$var."%' ";
        $t_user="SELECT * FROM users_1 WHERE username LIKE '%".$var."%' ";
        $t_file="SELECT * FROM web_file WHERE file_name LIKE '%".$var."%' ";
        $post_d = mysqli_query($db,$t_post );
        $user_d = mysqli_query($db, $t_user);
        $file_d = mysqli_query($db,$t_file );
        ?>
    </div>
    <!--end::Message-->

    <!--begin::Section-->
    <div class="font-size-sm text-primary font-weight-bolder text-uppercase mb-2">
        Post
    </div>
    <div class="mb-10">
      <?php while ($row = mysqli_fetch_array($post_d)) {  ?>
      <div class="d-flex align-items-center flex-grow-1 mb-2">
            <div class="symbol symbol-30 bg-transparent flex-shrink-0">
                <img src="<?php echo $row['photo']; ?>" alt="">
            </div>
            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                <?php echo $row['title_mon']; ?>
                </a>
                <span class="font-size-sm font-weight-bold text-muted">
                <?php echo $row['time_s']; ?>
                </span>
            </div>
        </div>
        <?php } ?>
    </div>
    <!--end::Section-->

    <!--begin::Section-->
    <div class="font-size-sm text-primary font-weight-bolder text-uppercase mb-2">
        Members
    </div>
    <div class="mb-10">
      <?php while ($row = mysqli_fetch_array($user_d)) {  ?>
      <div class="d-flex align-items-center flex-grow-1 mb-2">
            <div class="symbol symbol-30 bg-transparent flex-shrink-0">
                <img src="<?php echo $row['photo']; ?>" alt="">
            </div>
            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                <?php echo $row['username']; ?>
                </a>
                <span class="font-size-sm font-weight-bold text-muted">
                <?php echo $row['fb_name']; ?>
                </span>
            </div>
        </div>
        <?php } ?>
    </div>
    <!--end::Section-->

    <!--begin::Section-->
    <div class="font-size-sm text-primary font-weight-bolder text-uppercase mb-2">
        Files
    </div>
    <div class="mb-10">
      <?php while ($row = mysqli_fetch_array($file_d)) {  ?>
      <div class="d-flex align-items-center flex-grow-1 mb-2">
            <div class="symbol symbol-30 bg-transparent flex-shrink-0">
                <img src="assets/media/svg/files/<?php echo $row['icon']; ?>.svg" alt="">
            </div>
            <div class="d-flex flex-column ml-3 mt-2 mb-2">
                <a href="#" class="font-weight-bold text-dark text-hover-primary">
                <?php echo $row['file_anme']; ?>
                </a>
                <span class="font-size-sm font-weight-bold text-muted">
                <?php echo $row['up_date']; ?>
                </span>
            </div>
        </div>
        <?php } ?>
    </div>
    <!--end::Section-->
</div>
