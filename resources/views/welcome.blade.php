    @extends('navbarTemplate')
    @section('content')
    <br>
      <div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Description</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php $k = 0; ?>
            <tr>
              @foreach ($tasks as $val)
                <tr>
                  <th scope="row"><?= ++$k; ?></th>
                  <td><?=$val['title']; ?></td>
                  <td><?=$val['description']?></td>
                  <td>
                     <form action="{{route('delete',['id'=>$val['id']])}}" method="get">
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                            <br>
                        <form action="{{route('update',['id'=>$val['id']])}}" method="get">
                            <input type="submit" value="Update" class="btn btn-info">
                        </form>
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      <div>
    @endsection
