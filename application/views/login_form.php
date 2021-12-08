<div class="col-md-4 ">
    <h2 class="bg-primary rounded text-white pt-2 pb-2 pl-4">User Form</h2>

    <?php echo form_open_multipart('store_image'); ?>

    <?php 
       if(isset($userListEdit)){ ?>
         <input type="hidden" class="form-control" id="userid" name="userid" value="<?php echo @$userListEdit->id;  ?>">
    
   <?php
     }
    
    ?>
    <div class="form-group">

        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo @$userListEdit->username;  ?>">
        <?php echo form_error('username'); ?>
    </div>
    <div class="form-group">

        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo @$userListEdit->email;  ?>">
        <?php echo form_error('email'); ?>
    </div>
    <div class=" form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" >
        <?php echo form_error('password'); ?>
    </div>
    <div class=" form-group">
        <label for="text">Messages:</label>
        <textarea name="text" id="editor"><?php echo @$userListEdit->text; ?></textarea>
        <?php echo form_error('text'); ?>
    </div>

    <script>
        // ClassicEditor
        CKEDITOR.replace('editor');
    </script>


    <button type="submit" class="btn btn-primary">Submit</button>
    <?php echo form_close(); ?>
</div>



<div class="col-md-8">
    <h2 class="bg-primary rounded text-white pt-2 pb-2 pl-4">User Lists</h2>
    <table class="table table-bordered" id="userList">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">email</th>
                <th scope="col">message</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php $i = 0;
            foreach ($userList as $key => $value) { ?>

                <tr>
                    <td scope="row"><?= ++$i; ?></td>
                    <td><?= $value['username']; ?></td>
                    <td><?= $value['email']; ?></td>
                    <td><?= $value['text']; ?></td>
                    <td>
                        <a href="<?php echo base_url('Upload/index'); ?>/<?= $value['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="<?php echo base_url('deleteRow'); ?>/<?= $value['id']; ?>" onclick="return confirm('Are You Sure?')" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>


    <p>
        <?php
        $message = $this->session->userdata('msg');
        $msgColor = $this->session->userdata('color');
        if ($message) {
            echo '<div class="alert alert-' . $msgColor . ' alert-dismissible fade show" role="alert">' . $message . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
            $this->session->unset_userdata('msg');
        }
        ?>
    </p>
</div>