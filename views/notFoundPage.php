<?php
if (!defined('SECURE_ACCESS')) {
    die('Direct access not permitted');
}
include('templates/header.php') ?>

<div class="main-content login-panel login-panel-2">
    <h3 class="panel-title">Opppss!! You can't find anything here!</h3>
    <div class="login-body login-body-2 p-4">
        <form action="" class="d-flex justify-content-between align-items-center">
            <img src="/assets/images/error-404.png" alt="err-404" />
        </form>
        <div class="d-flex justify-content-center">
            <div class="my-4">
                <a href="/">Back to Home</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Copyright© <script>
                document.write(new Date().getFullYear())
            </script> All Rights Reserved By <span class="text-primary">PI SCHOOL LIBRARY</span></p>
    </div>
</div>

<?php include('templates/footer.php') ?>