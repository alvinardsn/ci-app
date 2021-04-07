<div class="container">
    <h3 class="mt-3">List of People</h3>

    <div class="row">
        <div class="col-md-5">
            <form action="<?= base_url('peoples') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search keyword" name="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <input class="btn btn-secondary" type="submit" name="submit"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md">

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($peoples)) : ?>
                        <>
                            <td colspan="4">
                                <div class="alert alert-danger" role="alert">
                                    Data not Found
                                </div>
                            </td>
                        </ tr>
                    <?php endif; ?>
                    <?php
                    foreach ($peoples as $people) : ?>
                        <tr>
                            <th><?= ++$start;  ?></th>
                            <th><?= $people['name']; ?></th>
                            <th><?= $people['email']; ?></th>
                            <td>
                                <a href="" class="badge badge-warning">detail</a>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>