<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Tambah &mdash; Data Guru</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>

    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= site_url('guru') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Guru</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data Guru</h4>
                </div>
                <div class="card-body col-md-6">
                    <form action="<?= site_url('guru') ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </section>

<?= $this->endSection() ?>