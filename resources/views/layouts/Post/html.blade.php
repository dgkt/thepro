<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">My Facebook Posts</h3>
              </div>

              <div class="card-body">
                <table id="posttable" class="table table-bordered table-hover">
                    <thead> 
                  <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Posts</th>
                    <th>Tags</th>
                    <th>URL</th>
                  </tr>
                  </thead>
                  <tbody>

                     @foreach($my_posts as $row)
                     <tr>
                        <td>{{$row['timestamp']}}</td>
                        <td>{{$row['attachments']}}</td>
                        <td>{{$row['data']}}</td>
                        <td>{{$row['title']}}</td>
                        <td>{{$row['title']}}</td>
                     </tr>

                     @endforeach
    
                  </tbody>

                </table>
              </div>

            </div>
            </div>
        </div>
    </div>
</section>