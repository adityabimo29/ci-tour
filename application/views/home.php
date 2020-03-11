<h1 class='text-center'>Lists Genre</h1>
<a class="btn btn-primary" href="<?php echo site_url('home/add') ?>">Tambah Data</a>
<ul class="list-group">
    <?php foreach($datas as $data) : ?>
        <li class="list-group-item"><?php echo $data['name'] ?></li>
    <?php endforeach ?>
</ul>


