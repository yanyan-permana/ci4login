<?= $this->extend('templates/index') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div class="col-md-3">
            <img src="<?= base_url('img/' . user()->user_image) ?>" class="img-thumbnail" alt="<?= user()->username ?>" width="300">
        </div>
        <div class="col-md-9">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Email</th>
                            <td><?= user()->email ?></td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td><?= user()->username ?></td>
                        </tr>
                        <tr>
                            <th>Fullname</th>
                            <td><?= user()->fullname ?></td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td><?= date('d M Y H:i:d', strtotime(user()->created_at)) ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>