<style>
    body {
        background-image:url('<?php echo base_url('assets/imgs/Guides_The-ultimate-guide-to-administrative-tasks.png') ?>');
        background-position: bottom  right;
        background-repeat: no-repeat;
        background-color:#fff;
    }
    .avatar {background-image:url('<?php echo base_url('assets/imgs/login-cover.png') ?>')}
</style>
<div class="container">
    <div class="">
        <div id="output">       
            <?php
            if ($this->session->flashdata('err_login')) {
                ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('err_login') ?></div>
                <?php
            }
            ?></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form action="" method="POST">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <button class="btn btn-info btn-block login" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>