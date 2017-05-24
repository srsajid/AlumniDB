<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="<?php echo base_url("static/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("static/css/dcalendar.picker.css") ?>" rel="stylesheet">
    <script src="<?php echo base_url("static/js/jquery-3.1.1.min.js") ?>"></script>
    <script src="<?php echo base_url("static/js/dcalendar.picker.js") ?>"></script>
    <script src="<?php echo base_url("static/bootstrap/js/bootstrap.min.js") ?>"></script>
    <script type='text/javascript'>
        $(function () {
            $('.datepicker').dcalendarpicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>
</head>
<body>
<div class="container">
    <?php if (isset($success)) : ?>
        <div class="col-md-12">
            <div class="alert alert-success" role="alert"><?= $success ?></div>
        </div>
    <?php endif; ?>
    <form method="post" action="<?php echo base_url("member/index") ?>">
        <div class="col-md-12 col-sm-12">
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['nick_name']) ? " has-error": ""?>">
                <label>Nick Name* </label>
                <input name="nick_name" type="text" class="form-control" placeholder="Nick Name" value="<?php echo set_value('nick_name') ?>">
                <div class="help-block"><?php echo form_error("nick_name")?></div>
            </div>
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['full_name']) ? " has-error": ""?>">
                <label >Full Name* </label>
                <input name="full_name" type="text" class="form-control"  placeholder=""  value="<?php echo set_value('full_name') ?>">
                <div class="help-block"><?php echo form_error("full_name")?></div>
            </div>
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['profession']) ? " has-error": ""?>">
                <label >Profession*</label>
                <input name="profession" type="text" class="form-control"  placeholder=""  value="<?php echo set_value('profession') ?>">
                <div class="help-block"><?php echo form_error("profession")?></div>
            </div>
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['designation']) ? " has-error": ""?>">
                <label >Designation</label>
                <input name="designation" type="text" class="form-control"  placeholder=""  value="<?php echo set_value('designation') ?>">
                <div class="help-block"><?php echo form_error("designation")?></div>
            </div>
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['mailing_address']) ? " has-error": ""?>">
                <label >Mailing Address*</label>
                <textarea name="mailing_address" class="form-control"  rows="3"><?php echo set_value('mailing_address') ?></textarea>
                <div class="help-block"><?php echo form_error("mailing_address")?></div>
            </div>
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['permanent_address']) ? " has-error": ""?>">
                <label >Permanent Address*</label>
                <textarea name="permanent_address" class="form-control"  rows="3"><?php echo set_value('permanent_address') ?></textarea>
                <div class="help-block"><?php echo form_error("permanent_address")?></div>
            </div>
            <div class="form-group col-sm-12">
                <label>Phone Numbers</label>
            </div>
            <div class="form-group col-md-4 col-sm-4<?php echo isset($error['phone_cell']) ? " has-error": ""?>">
                <label >Cell*</label>
                <input name="phone_cell" type="text" class="form-control"  placeholder=""  value="<?php echo set_value('phone_cell') ?>">
                <div class="help-block"><?php echo form_error("phone_cell")?></div>
            </div>
            <div class="form-group col-md-4 col-sm-4<?php echo isset($error['phone_work']) ? " has-error": ""?>">
                <label >Work</label>
                <input name="phone_work" type="text" class="form-control"  placeholder=""  value="<?php echo set_value('phone_work') ?>">
                <div class="help-block"><?php echo form_error("phone_work")?></div>
            </div>
            <div class="form-group col-md-4 col-sm-4<?php echo isset($error['phone_home']) ? " has-error": ""?>">
                <label >Home</label>
                <input name="phone_home" type="text" class="form-control"  placeholder=""  value="<?php echo set_value('phone_home') ?>">
                <div class="help-block"><?php echo form_error("phone_home")?></div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['email']) ? " has-error": ""?>">
                <label >Email*</label>
                <input name="email" type="email" class="form-control"  placeholder=""  value="<?php echo set_value('email') ?>">
                <div class="help-block"><?php echo form_error("email")?></div>
            </div>
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['date_of_birth']) ? " has-error": ""?>">
                <label >Date of Birth*</label>
                <div>
                    <input name="date_of_birth" type="text" class="form-control datepicker"  placeholder="" value="<?php echo set_value('date_of_birth') ?>">
                    <div class="help-block"><?php echo form_error("date_of_birth")?></div>
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label>Year of Admission</label>
            </div>
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['batch_bsc']) ? " has-error": ""?>">
                <label >Honors*</label>
                <input name="batch_bsc" type="text" class="form-control"  placeholder=""  value="<?php echo set_value('batch_bsc') ?>">
                <div class="help-block"><?php echo form_error("batch_bsc")?></div>
            </div>
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['batch_msc']) ? " has-error": ""?>">
                <label >Masters</label>
                <input name="batch_msc" type="text" class="form-control"  placeholder=""  value="<?php echo set_value('batch_msc') ?>">
                <div class="help-block"><?php echo form_error("batch_msc")?></div>
            </div>
            <div class="form-group col-md-6 col-sm-6<?php echo isset($error['blood_group']) ? " has-error": ""?>">
                <label >Blood Group</label>
                <input name="blood_group" type="text" class="form-control"  placeholder="" value="<?php echo set_value('blood_group') ?>">
                <div class="help-block"><?php echo form_error("blood_group")?></div>
            </div>

            <div class="clearfix"></div>
            <div class="btn-group-lg col-md-12 col-sm-12">
            <button type="submit" class="btn btn-default ">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>