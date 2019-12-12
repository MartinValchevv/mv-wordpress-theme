<?php
if (!defined('ABSPATH')) exit;
global $salaryCalculatorPlugin;
?>

<!-- <div class="contact-us-container">
    <div class="information">
        <h2><?php _e('Information'); ?></h2>
        <p>
            <?php _e('Email'); ?>:
            <?php echo $salaryCalculatorPlugin->getOption('email'); ?>
        </p>
        <p><?php _e('Phone'); ?>:
            <?php echo $salaryCalculatorPlugin->getOption('phone'); ?>
        </p>
        <p>
            <?php _e('Additional info'); ?>:
            <?php echo $salaryCalculatorPlugin->getOption('additional_info'); ?>
        </p>
    </div>
     <div class="google-map">
        <h2><?php _e('Google maps'); ?></h2>
        <?php echo $salaryCalculatorPlugin->getOption('gm_code'); ?>
    </div>
</div> -->

<div class="container">

    <form class="well form-horizontal" action=" " method="post" id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend>
                <center>
                    <h2><b><?php echo __('Заплата калкулатор') ?></b></h2>
                </center>
            </legend><br>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Брой дежурства</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="number-of-duty" id="number-of-duty" placeholder="Брой дежурства"
                            class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Дни отпуска</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="vacation-days" id="vacation-days" placeholder="Дни отпуска" class="form-control"
                            type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Награди</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="awards" id="awards" placeholder="Награди" class="form-control" type="text">
                    </div>
                </div>
            </div>



            <div class="form-group">
                <label class="col-md-4 control-label">Обща Сума</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="total-sum" id="total-sum" placeholder="Обща сума" class="form-control"
                            type="text">
                    </div>
                </div>
            </div>



            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4"><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit"
                       id="calculateBtn" class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span
                        class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</div><!-- /.container -->

<script>

    $('#calculateBtn').click(function(e){
        e.preventDefault()
        var duty = $('#number-of-duty').val()
        var vocation = $('#vacation-days').val()
        var awards = $('#awards').val()

        var sum = Number(duty) + Number(vocation) + Number(awards)

        $('#total-sum').val(sum)


 });

</script>

