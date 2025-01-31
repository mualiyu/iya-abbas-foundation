<?php include(__DIR__."/layouts/_header.php"); ?>

<?php include(__DIR__."/layouts/_nav.php"); ?>

<?php include(__DIR__."/layouts/_sidebar.php"); ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Gallery</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Apps</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Upload Image</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                    </div>
                </div>
            </div>

            <div class="container-fluid">
            <?php
            if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show"
                    role="alert">
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                    </button>
                    <?php echo $_SESSION["errorMessage"]; $_SESSION["errorMessage"]=null;?>
                </div>
                <?php
            }
            ?>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Photo</h4>
                                    
                                    <form class="mt-4" action="/uploads/gallery_upload.php" method="POST" enctype="multipart/form-data">
                                        
                                        <div class="form-group mt-2 mb-1">
                                            <label for="">Upload Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <div class="form-group mt-2 mb-1">
                                            <label for="">Description</label>
                                            <textarea name="description" rows="10" class="form-control p-2"></textarea>
                                        </div>


                                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                
            </div>
        </div>

 <?php include(__DIR__."/layouts/_footer.php"); ?>