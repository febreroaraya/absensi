<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Edit &mdash; Data Guru</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>

    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= site_url('guru') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Guru</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Guru</h4>
                </div>
                <div class="card-body col-md-6">
                    <form action="<?= site_url('guru/'.$guru->id) ?>" method="post" autocomplete="off">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" value="<?= $guru->nama ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="<?= $guru->username ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" value="<?= $guru->password ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" value="<?= $guru->status ?>" class="form-control" required>
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