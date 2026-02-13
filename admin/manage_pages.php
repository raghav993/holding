<?php
$page_title = "About Us Page Content";
include('includes/header.php');
?>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"><?= $page_title ?></h4>
                    <div>
                        <button type="button" class="btn btn-success btn-sm">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">About Us Content</h5>
                    </div>
                    <div class="card-body">
                        <!-- WYSIWYG Editor - you can integrate Summernote / CKEditor / TinyMCE -->
                        <textarea id="editor" class="form-control" rows="15">
                            <h2>Welcome to Our Company</h2>
                            <p>We are committed to excellence...</p>
                        </textarea>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('includes/footer.php'); ?>