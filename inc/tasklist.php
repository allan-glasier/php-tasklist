<table class="table table-hover mx-auto text-center">
  <thead>
    <tr class="d-flex">
      <th class="col-2" scope="col"></th>
      <th class="col-5" scope="col">Task</th>
      <th class="col-5" scope="col">Notes</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($taskList as $task) : ?>
      <tr class="table-primary d-flex">
        <td class="col-2" scope="row">
          <button type="button" class="btn btn-outline-info font-weight-bold">Competed</button>
        </td>
        <td class="col-5 d-flex align-items-center justify-content-center"><?php echo $task['task'] ?></td>
        <td class="col-5 d-flex align-items-center justify-content-center"><?php echo $task['notes'] ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>