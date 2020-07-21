<?php

include 'include/session.php';

if(isset($_FILES['img'])){
      $errors= array();
      $file_name = $_FILES['img']['name'];

      $file_size =$_FILES['img']['size'];
      $file_tmp =$_FILES['img']['tmp_name'];
      $file_type=$_FILES['img']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['img']['name'])));

      $expensions= array("psd","jpeg","png","jpg");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a docx , doc or pdf file.";
      }

      if($file_size > 10097152){
         $errors[]='File size must be excately 10 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../pictures/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
$file_name;
        $title = $_POST['title'];
        $about = $_POST['about'];
        $class = $_POST['class'];

        $sql="INSERT  INTO gallery (img, title, about, class) VALUES('$file_name','$title','$about','$class')";
    if(mysqli_query($conn, $sql))
      header("location: add-new-gallery-post.php?epr=success");
    else
      $msg='error1:'.mysqli_error();


   }


?>




<?php
    include 'include/header.php';
    include 'include/adminnav.php';
    ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <?php
        include 'include/adminsidenav.php';

        ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">

                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Basic Form</strong> Elements
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" action='add-new-gallery-post.php' enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="title" placeholder="Text" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">about</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="about" placeholder="Text" class="form-control"></div>
                          </div>


                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">categories</label></div>
                            <div class="col-12 col-md-9">
                              <select name="class" id="select" class="form-control">
                                <option value="0">Please select</option>
                                <option value="manicure">manicure</option>
                                <option value="body">body</option>
                                <option value="makeup">makeup</option>
                                <option value="face">face</option>
                                <option value="hair">hair</option>
                                <option value="pedicure">pedicure</option>

                              </select>
                            </div>
                          </div>


                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="img" class="form-control-file"></div>
                          </div>
                          <div class="card-footer">
                            <button type="submit"  class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Reset
                            </button>
                          </div>
                        </form>
                      </div>

                    </div>
                  </div>




                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
