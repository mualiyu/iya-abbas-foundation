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
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Galleries</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-end">
                            <a href="/admin/galleries/add" class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius"> Add </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

            <?php
            if(isset($_SESSION["message"])) {
                ?>
                <div class="alert alert-secondary alert-dismissible bg-secondary text-white border-0 fade show"
                    role="alert">
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                    </button>
                    <?php echo $_SESSION["message"]; $_SESSION["message"]=null;?>
                </div>
                <?php
            }
            ?>
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                            <!-- column -->

                            <?php
                            if (count($galleries)>0) {
                                foreach ($galleries as $key => $g) {
                                    ?>
                                    <div class="col-lg-3 col-md-6">
                                        <!-- Card -->
                                        <div class="card">
                                            <img class="card-img-top img-fluid" src="/uploads/gallery/<?=$g['image']?>"
                                                alt="Card image cap">
                                            <div class="card-body">
                                                <p class="card-text"><?=$g['description']?></p>
                                                <a href="javascript:void(0)" class="btn btn-primary">view</a>
                                                <?php $id = $g['id'];?>
                                                <a href="#" onclick="if(confirm('Do you want to delete this?')){ window.location.href = '/admin/galleries/delete/<?=$id?>';}" class="btn btn-warning">remove</a>
                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>
                                    <?php
                                }
                            }else{
                                ?>
                                <div class="col-lg-3 col-md-6">
                                    <P>Gallery is empty, <a href="/admin/galleries/add">Upload new image!</a></P>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <!-- Row -->
                    </div>
                </div>

            </div>

        </div>

 <?php include(__DIR__."/layouts/_footer.php"); ?>