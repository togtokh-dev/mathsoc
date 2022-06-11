<?php if (isset($_SESSION['user_mms'])){?>
  <!--begin::User-->
  <div class="dropdown">
    <!--begin::Toggle-->
    <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
      <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto active">
        <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4"><?php echo $_SESSION['user_mms']['username']; ?></span>
        <span class="symbol symbol-35">
          <img src="<?php if($_SESSION['user_mms']['photo']=='img_null'){
            echo $host_url."uploads/logo.png";
          }else{
            echo $_SESSION['user_mms']['photo'];
          } ?>" alt="" />
        </span>
      </div>
    </div>
    <!--end::Toggle-->
    <!--begin::Dropdown-->
    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
      <!--begin::Header-->
      <div class="d-flex align-items-center p-8 rounded-top">
        <!--begin::Symbol-->
        <div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
          <img src="<?php if($_SESSION['user_mms']['photo']=='img_null'){
            echo $host_url."uploads/logo.png";
          }else{
            echo $_SESSION['user_mms']['photo'];
          } ?>" alt="" />
        </div>
        <!--end::Symbol-->
        <!--begin::Text-->
        <div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5"><?php echo $_SESSION['user_mms']['username']; ?></div>
        <span class="label label-light-success label-lg font-weight-bold label-inline"><?php
        if($_SESSION['user_mms']['user_type']=='user'){
          echo "Зочин";
        }
        if($_SESSION['user_mms']['user_type']=='co_user'){
          echo "Хэрэглэгч";
        }
         if($_SESSION['user_mms']['user_type']=='admin'){
          echo "Админ";
        }
         if($_SESSION['user_mms']['user_type']=='god'){
          echo "Хөгжүүлэгч";
        } ?></span>
        <!--end::Text-->
      </div>
      <div class="separator separator-solid"></div>
      <!--end::Header-->
      <!--begin::Nav-->
      <div class="navi navi-spacer-x-0 pt-5">
        <!--begin::Item-->
        <a href="<?php if($_SESSION['user_mms']['user_type']=='user'){
          echo "APanel/profile.php";
        }else if($_SESSION['user_mms']['user_type']=='co_user'){
          echo "APanel/profile.php";
        }else if($_SESSION['user_mms']['user_type']=='admin' || $_SESSION['user_mms']['user_type']=='god'){
          echo "APanel/";
        } ?>" class="navi-item px-8">
          <div class="navi-link">
            <div class="navi-icon mr-2">
              <i class="flaticon2-calendar-3 text-success"></i>
            </div>
            <div class="navi-text">
              <div class="font-weight-bold">Профайл</div>
              <div class="text-muted">Дансны тохиргоо болон бусад
              <span class="label label-light-danger label-inline font-weight-bold">шинэчлэлт</span></div>
            </div>
          </div>
        </a>
        <!--end::Item-->
        <!--begin::Footer-->
        <div class="navi-separator mt-3"></div>
        <div class="navi-footer px-8 py-5">
          <a href="?logout" class="btn btn-light-primary font-weight-bold">Гарах</a>
          <a href="#" target="_blank" class="btn btn-clean font-weight-bold">Төлөв шинэчлэх</a>
        </div>
        <!--end::Footer-->
      </div>
      <!--end::Nav-->
    </div>
    <!--end::Dropdown-->
  </div>
  <!--end::User-->
<?php } else{ ?>
  <!--begin::User-->
  <a class="topbar-item" href="login.php">
    <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto active ">
      <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4 text-hover-warning"><?php echo $lang[$lan]['login']; ?></span>
      <span class="symbol symbol-35">
        <span class=" fas fa-sign-in-alt"></span>
      </span>
    </div>
  </a>
  <!--end::User-->
<?php } ?>
