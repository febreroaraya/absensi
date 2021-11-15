<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Data Guru &mdash; Page</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>

    <section class="section">
        <div class="section-header">
            <h1>Guru</h1>
            <div class="section-header-button">
                <a href="<?= site_url('guru/add') ?>" class="btn btn-primary">Tambah</a>
            </div>
        </div>

        <?php if(session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success!</b>
                    <?= session()->getFlashdata('success') ?>
                </div>
            </div>
        <?php endif ?>
        <?php if(session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Error!</b>
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
        <?php endif ?>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Guru</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($tb_user as $key => $value): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->nama?></td>
                                <td><?= date('d/m/Y', strtotime($value->tgl_insert))?></td>
                                <td><?= $value->status?></td>
                                <td class="text-center" style="width:15%">
                                    <a href="<?= site_url('guru/edit/'.$value->id) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form action="<?= site_url('guru/'.$value->id) ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin?')">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">    
                                        <button href="" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>   
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </section>

<?= $this->endSection() ?>