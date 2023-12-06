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
                  <td>@mdo</td>
                </tr>
              @endforeach
          </tbody>
        </table>
      <div>
    @endsection
