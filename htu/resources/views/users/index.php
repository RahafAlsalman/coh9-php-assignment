<div id="titel-user" class="d-flex d-flex justify-content-between">
<h2 id="user"class="mt-3">USER </h2>
<button id="creat-user" type="button" class="btn btn-primary"><i class="fa-solid fa-plus align-center"></i></button>

</div>

<table class="table">
  <thead>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>permissions</th>
    <th>Acction</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  <?php foreach ($data->users as $user) : ?>
    <tr>
    <td><?= $user->display_name ?></td>
    <td><?= $user->email ?></td>
    <td>p</td>
    <td><button id="actionuser" type="button" class="btn btn-info">Deteils</button>
  </td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>




