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
        $('#add_row').on('click', function() {
            $('#new').append(newId);
        })
    });
</script>