<div class="col-md-9 total-news">
    <?php
    $exc = $this->session->userdata('exception');
    if (isset($exc)) {
        ?>
        <h2 style="text-align: center; color:red; margin-bottom: 20px; font-size: 38px; padding-top: 5px; ">       
            <?php
            echo $exc;
            $this->session->unset_userdata('exception');
            ?>
        </h2> 
    <?php } ?>
    <?php
    $reg = $this->session->userdata('success');
    if (isset($reg)) {
        ?>
        <h2 style="text-align: center; color:green; margin-bottom: 20px; font-size: 38px; padding-top: 5px; ">       
            <?php
            echo $reg;
            $this->session->unset_userdata('success');
            ?>
        </h2> 
<?php } ?>
</div>	