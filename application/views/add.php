<?php echo form_open('home/save') ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" name='name' class="form-control"  placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>