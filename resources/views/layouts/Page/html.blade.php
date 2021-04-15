<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title">My Facebook Likes & Reactions</h3>
              </div>

              <div class="card-body">
                <table id="liketable" class="table table-bordered table-hover">
                    <thead> 
                  <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Reaction</th>
                  </tr>
                  </thead>
                  <tbody>
            
                     @foreach($my_likes as $row)

                     <tr>
                        <td>{{$row->timestamp}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->data->reactions}}</td>
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