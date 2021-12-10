<div class="col-md-7">
    <h2 class="bg-success rounded text-white pt-2 pb-2 pl-4">Add Category</h2>
    <button type="submit" class="btn  btn-primary new-row" id="add_row">Add New Row</button>

    <?php echo form_open_multipart(); ?>


    <div class="form-group">
        <label for="username">Category <span style="color:red;font-weight:bold">*</span></label>
        <div class="form-group ">
            <table style="width: 100%;">
                <tbody id="new">
                    <tr>
                        <td><input type="text" style="width: 100%;" class="form-control " id="category" name="category[]"></td>
                        <td><button type="submit" class="btn  btn-danger " id="row_close"><i class="fa fa-window-close"></i></button></td>
                    </tr>
                </tbody>
            </table>


        </div>
    </div>

    <button type="submit" class="btn btn-block btn-success">Save</button>

    <?php echo form_close(); ?>

</div>


<div class="col-md-5">

    <h2 class="bg-success rounded text-white pt-2 pb-2 pl-4">category Lists</h2> <br>

    <table class="table table-bordered" id="userList">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">category name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>


        </tbody>
    </table>
    <hr>

    <br>


</div>