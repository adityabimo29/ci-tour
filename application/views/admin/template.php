<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homey</title>
    <?php $this->load->view('admin/layouts/head.php') ?>
</head>
<body>
    <?php echo $_content; ?>
    <?php $this->load->view('admin/layouts/js.php') ?>
</body>
</html>