<div >
    <h2 class="breadcrumb" style="text-align: center;">Newsportal Admin Panel v1.1</h2><hr>
</div>
<div>
    <h3>Author Name: <?php echo ucfirst($this->session->userdata('admin_name')); ?></h3>
    <?php
    $access_level = $this->session->userdata('access_level');
    if ($access_level == 1) {
        ?>
        <h3>Author Type: Super Admin</h3>
    <?php } else { ?>
        <h3>Author Type: Manager</h3>
<?php } ?>
</div>

