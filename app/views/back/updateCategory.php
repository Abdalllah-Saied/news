 <?php require 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="/adminCategory/postUpdateCategory" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label >Category Name</label>
                                <input type="text" name="categoryname" value="<?= $category->name ?>" class="form-control" placeholder="Enter Category Name">
                            </div>
                            <div class="form-group">
                                <label >Icon</label>
                                <input type="text" name="icon" value="<?= $category->icon ?>" class="form-control" placeholder="Icon">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label><br>
                                <img src="<?=PATH.'image/'.$category->img; ?>" height="100px" width="100px" alt="">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" value="<?=$category->img;?>" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="hidden" name="id" value="<?=$category->id;?>">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php require 'footer.php'; ?>