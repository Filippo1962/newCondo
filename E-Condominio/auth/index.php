<?php
$page=isset($_GET['page'])?$_GET['page']: 'login';
include_once "../inc/init.php";

include_once ROOT_PATH.'public/template-parts/header.php'; ?>
<!---Body -->
<section style="margin-top: 80px;">
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                    <?php include_once ROOT_PATH.'auth/pages/'.$page.'.php'; ?>
                </div>
                <?php include_once ROOT_PATH.'public/template-parts/sidebar.php' ?>
            </div>
        </div>
    </main>
</section>
<?php include_once ROOT_PATH.'public/template-parts/footer.php'; ?>