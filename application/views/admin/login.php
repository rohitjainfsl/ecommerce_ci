<div class="admin-login">
    <form action="<?php echo base_url('admin/admin/login');?>" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" />
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
    </form>
</div>