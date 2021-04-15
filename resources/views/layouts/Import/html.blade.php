<div class="col-md-4">
  <div class="card card-primary">
    <div class="card-header">
      Import File
    </div>
    <!-- /.card-header -->
    <!-- form start -->

      <div class="card-body">
        <form method="POST" action="" enctype="multipart/form-data" name>
          @csrf
          <!-- form input -->
          <div class="form-group">
            <label for="file">File input</label>
            <input type="file" class="form-control" name="file" id="file">
          </div>

          <!-- select input -->
          <div class="form-group">
            <label>Select Type</label>
            <select class="form-control">
              <option>Comments</option>
              <option>Posts</option>
              <option>Like & Reaction</option>
            </select>
          </div>
          
          <button type="submit" class="btn btn-primary">Import</button>


        </form>
      </div>
      <!-- /.card-body -->



  </div>
  <!-- /.card -->
</div>
