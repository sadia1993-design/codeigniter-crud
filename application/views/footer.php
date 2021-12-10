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

        const newId = document.getElementById('new').innerHTML;
        $('#add_row').on('click', function(e) {
            e.preventDefault();
            $('#new').append(newId);
        })

        $('#row_close').on('click', function(event) {
            event.preventDefault();
            $(this).closest('tr').remove();
        })
    });
</script>