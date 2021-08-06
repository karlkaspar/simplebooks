<div class="w-100 d-flex justify-content-center">
  <table class="table w-auto m-5">
    <thead>
      <tr>
        <th scope="col"><?php echo AppController::translate('id'); ?></th>
        <th scope="col"><?php echo AppController::translate('f_name'); ?></th>
        <th scope="col"><?php echo AppController::translate('l_name'); ?></th>
        <th scope="col"><?php echo AppController::translate('email'); ?></th>
        <th scope="col"><?php echo AppController::translate('username'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($users as $key => $user) {
      ?>
        <tr>
            <td><?php echo $user['User']['id'] ?></td>
            <td><?php echo $user['User']['f_name'] ?></td>
            <td><?php echo $user['User']['l_name'] ?></td>
            <td><?php echo $user['User']['email'] ?></td>
            <td><?php echo $user['User']['username'] ?></td>
          </tr>
          <?php
        }
       ?>
    </tbody>
  </table>
</div>
