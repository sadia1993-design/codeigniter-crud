<div class="col-md-4">
    <h2 class="bg-primary rounded text-white pt-2 pb-2 pl-4">Add User</h2>

    <?php echo form_open_multipart('User_list/saveUser'); ?>

    <?php
    if (isset($user_data_edit)) {
        echo form_hidden('id', @$user_data_edit->id);
    }
    ?>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo @$user_data_edit->username; ?>" placeholder="<?php echo set_value('username'); ?>">
        <?php echo form_error('username'); ?>
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo @$user_data_edit->email; ?>" placeholder="<?php echo set_value('email'); ?>">
        <?php echo form_error('email'); ?>
    </div>
    <div class=" form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password">
        <?php echo form_error('password'); ?>
    </div>
    <div class=" form-group">
        <label for="text">Messages:</label>
        <textarea id="editor" name="text" placeholder="<?php echo set_value('text'); ?>"><?php echo @$user_data_edit->text; ?></textarea>
        <?php echo form_error('text'); ?>
    </div>


    <script>
        // ClassicEditor
        CKEDITOR.replace('editor');
    </script>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
<div class="col-md-8">

    <h2 class="bg-primary rounded text-white pt-2 pb-2 pl-4">User Lists</h2> <br>

    <table class="table table-bordered" id="userList">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">email</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $i = 0;
            foreach ($user_list as $key => $value) { ?>

                <tr>
                    <td scope="row"><?= ++$i; ?></td>
                    <td><?= $value->username; ?></td>
                    <td><?= $value->email; ?></td>
                    <td><?= $value->text; ?></td>
                    <td>
                        <a href="<?php echo base_url('User_list/index/' . $value->id) ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url('User_list/delete_user/' . $value->id) ?>" onclick="return confirm('Are You Sure?')" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>