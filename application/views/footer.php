</div>
</div>
</body>

</html>


<script>
    $(document).ready(function() {
        $('#userList').DataTable({
            pageLength: 4,
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, 'Todos']
            ]
        });

        $('#add_row').on('click', function(e) {
            e.preventDefault();
            $('#new').append(`<tr>
          <td class="row-index text-center">
                <input type="text" name="category[]" class="form-control"></td>
           <td class="text-center">
            <button class="btn btn-danger remove" 
                type="button">Remove</button>
            </td>
           </tr>`);
        })

        $('.row_close').on('click', function(event) {
            alert('test');
            event.preventDefault();
            $(this).parent('tr').remove();
        })
    });
</script>