<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Member List</h4>

                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            <th>Nick Name</th>
                            <th>Full name</th>
                            <th>Cell phone Number</th>
                            <th>Email</th>
                            </thead>
                            <tbody>
                                <?php foreach($members as $member) { ?>
                                    <tr>
                                        <td><?= $member->nick_name ?></td>
                                        <td><?= $member->full_name ?></td>
                                        <td><?= $member->phone_cell ?></td>
                                        <td><?= $member->email ?></td>
                                    </tr>
                                <?php }?>

                            </tbody>
                        </table>

                    </div>
                    <div class="footer">
                        <div class="container-fluid">
                            <div class="pull-right" style="display: block"><?= paginator(20, 0, $total, "admin/member/lists") ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>