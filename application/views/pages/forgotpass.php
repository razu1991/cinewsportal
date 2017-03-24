<div style="text-align: center;">
<form action="<?php echo base_url(); ?>welcome/get_password" method="post" onsubmit="return validateStandard(this)">   
    <label>Email Address</label>
    <input style="padding-bottom: 5px; padding-top: 5px;" type="email" name="user_email_address" id="username" type="text" Placeholder="Email Address" err=" your are email" required="true" onblur="makerequest(this.value, 'res')"/><span id="res"></span>
    <br />                                                 
    <div class="action_btns" style="margin-left: 80px;"><br/>        
        <button type="submit" id="cbutton" class="btn btn-red" >Send</button>
    </div>
</form>
</div>