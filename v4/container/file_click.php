
<div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
  <!--begin::Header-->
  <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
    <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Зураг файл</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Хавтсан ...файл</a>
      </li>
    </ul>
    <div class="offcanvas-close mt-n1 pr-5">
      <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
        <i class="ki ki-close icon-xs text-muted"></i>
      </a>
    </div>
  </div>
  <!--end::Header-->
  <!--begin::Content-->
  <div class="offcanvas-content px-10">
    <div class="tab-content">
      <!--begin::Tabpane-->
      <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
        <div class="mb-5">
          <h5 class="font-weight-bold mb-5">size</h5>
          <?php
           $po1= mysqli_query($db, "SELECT * FROM web_photo WHERE user='$user_id' order by id DESC");
           while ($rows1 = mysqli_fetch_array($po1)) { ?>
          <!--begin: Item-->
          <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
            <input type = "text" value="<?php echo $host_url; ?>/uploads/<?php echo $rows1['photo_name']; ?>" id="myInput<?php echo $rows1['id']; ?>" style="position: absolute; left: -1000px; top: -1000px">
            <img src="<?php echo $host_url; ?>uploads/<?php echo $rows1['photo_name']; ?>" onclick="myFunction<?php echo $rows1['id']; ?>()" class="img-responsive center-block d-block mx-auto" height="200"  alt="<?php echo $rows1['up_date']; ?>">
            <script>
              function myFunction<?php echo $rows1['id']; ?>() {
                var copyText = document.getElementById("myInput<?php echo $rows1['id']; ?>");
                copyText.select();
                document.execCommand("copy");
                Swal.fire({
                     position: "top-left",
                     icon: "success",
                     title: "Зурагний url-ийг хуулсан ",
                     showConfirmButton: false,
                     timer: 1500
                 });
              }
            </script>
          </div>
          <!--end: Item-->
          <?php } ?>
        </div>
        <!--end::Section-->
      </div>
      <!--end::Tabpane-->
      <!--begin::Tabpane-->
      <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
        <!--begin::Nav-->
        <div class="navi navi-icon-circle navi-spacer-x-0">
          <?php
           $po2= mysqli_query($db, "SELECT * FROM web_file WHERE user='$user_id' order by id DESC");
           while ($rows1 = mysqli_fetch_array($po2)) { ?>
          <!--begin: Item-->
          <input type = "text" value="<?php echo $host_url; ?><?php echo $rows1['file_name']; ?>" id="myInput_u<?php echo $rows1['id']; ?>" style="position: absolute; left: -1000px; top: -1000px">
            <a href="#" class="navi-item" onclick="myFunction_u<?php echo $rows1['id']; ?>()">
              <div class="navi-link rounded">
                <div class="symbol symbol-50 mr-3">
                  <div class="symbol-label">
                  <img alt="" class="max-h-40px" src="assets/media/svg/files/<?php echo $rows1['icon']; ?>.svg">
                  </div>
                </div>
                <div class="navi-text">
                  <div class="font-weight-bold font-size-lg"><?php echo $rows1['file_name']; ?></div>
                  <div class="text-muted"><?php echo $rows1['up_date']; ?></div>
                </div>
              </div>
            </a>
            <script>
              function myFunction_u<?php echo $rows1['id']; ?>() {
                var copyText = document.getElementById("myInput_u<?php echo $rows1['id']; ?>");
                copyText.select();
                document.execCommand("copy");
                Swal.fire({
                     position: "top-left",
                     icon: "success",
                     title: "Зурагний url-ийг хуулсан ",
                     showConfirmButton: false,
                     timer: 1500
                 });
              }
            </script>
          <!--end: Item-->
          <?php } ?>
        </div>
        <!--end::Nav-->
      </div>
      <!--end::Tabpane-->
    </div>
  </div>
  <!--end::Content-->
</div>
