<div class="col-lg-12">
    <div class="signin row">
        <h1>Da thay doi noi dung </h1>
        <div id="logo">
            <!-- <img src="assets/img/logo.png" alt="Metis Logo"> -->
            <!-- <h1 class="muted">Wusic Admin Panel</h1> -->
            <img src="<?php //echo base_url('assets/img/AppLogo_300.png'); ?>">
        </div>
        <?php if($this->session->flashdata('success_message')):?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $this->session->flashdata('success_message');?>
        </div>
        <?php elseif($this->session->flashdata('error_message')):?>
        <div class="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $this->session->flashdata('error_message'); ?>
        </div>
        <?php endif;?>
        <div id="login" class="col-md-6 col-md-offset-3">
            <form action="<?php echo site_url('home/signin');?>" accept-charset="utf-8" method="post" role="form">
                <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button class="btn btn-inverse btn-block" type="submit">Sign in</button>
            </form>
        </div>
    </div>
</div>