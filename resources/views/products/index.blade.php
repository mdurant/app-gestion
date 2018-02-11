<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Created At</th>
        </tr>
    </thead>
</table>


 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}"></script>
 <!-- jQuery -->
 <script src="//code.jquery.com/jquery.js"></script>
 <!-- DataTables -->
 <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
 <!-- Bootstrap JavaScript -->
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <!-- App scripts -->



  <script>
      $(function() {
          $('#table').DataTable({
              processing: true,
              serverSide: true,
              ajax: '{!! url('products.data') !!}',
              columns: [
                  { data: 'id', name: 'id' },
                  { data: 'name', name: 'name' },
                  { data: 'price', name: 'price' },
                  { data: 'created_at', name: 'created_at' }
              ]
          });
      });
      </script>