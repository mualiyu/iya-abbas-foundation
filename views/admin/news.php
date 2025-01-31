<?php include(__DIR__."/layouts/_header.php"); ?>

<?php include(__DIR__."/layouts/_nav.php"); ?>

<?php include(__DIR__."/layouts/_sidebar.php"); ?>

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">News</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Apps</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">News List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                    <div class="customize-input float-end">
                            <a href="/admin/news/add" class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius"> Add </a>
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
                <div class="row">
                <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">News Latest</h4>
                                <div class="table-responsive">
                                    <table id="default_order" class="table border table-striped table-bordered text-nowrap">
                                        <thead>
                                           
                                            <tr>
                                                <th>S/N</th>
                                                <th>Title</th>
                                                <th>Read By</th>
                                                <th>status</th>
                                                <th>Comments</th>
                                                <th>Post date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if (count($news)>0) {
                                            $is = 0;
                                            foreach ($news as $key => $row) {
                                                $is++;
                                             ?>
                                               <tr>
                                                   <td><?=$is?></td>
                                                   <td><?=$row['title']?></td>
                                                   <td><?=$row['read_by']?></td>
                                                   <td><?=$row['status']?></td>
                                                   <td>0</td>
                                                   <td><?=date("M d, Y", strtotime($row["date"]))?></td>
                                                   <td>
                                                        <a href="/admin/news/edit/<?=$row['id']?>" class="btn btn-primary">Edit</a>
                                                        <?php $id = $row['id'];?>
                                                        <a href="#" onclick="if(confirm('Do you want to delete this news?')){ window.location.href = '/admin/news/delete/<?=$id?>';}"  class="btn btn-warning">Delete</a>
                                                   </td>
                                               </tr>
                                            <?php
                                            }
                                        }else{
                                            ?>
                                            <tr>
                                                   <td colspan="6" align="center"> No news found, <a href="/admin/news/add">Add one?</a></td>
                                               </tr>
                                            <?php
                                        }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>S/N</th>
                                                <th>Title</th>
                                                <th>Read By</th>
                                                <th>status</th>
                                                <th>Comments</th>
                                                <th>Post date</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>

 <?php include(__DIR__."/layouts/_footer.php"); ?>