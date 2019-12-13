<?php
if (!defined('ABSPATH')) exit;
global $salaryCalculatorPlugin;
$sumPerHour = $salaryCalculatorPlugin->getOption('sum_per_hour');
$dayHours = $salaryCalculatorPlugin->getOption('day_hours');
?>

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
                <label class="col-md-4 control-label">Работни дни</label>
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
                <label class="col-md-4 control-label">Болнични дни</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="sick-days" id="sick-days" placeholder="Болнични дни" class="form-control"
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
</div>

<script>

    $('#calculateBtn').click(function(e){
        e.preventDefault()
        var duty = $('#number-of-duty').val()
        var sickDays = $('#sick-days').val()
        var awards = $('#awards').val()
        var sumPerHour = "<?php echo $sumPerHour ?>";
        var dayHours = "<?php echo $dayHours ?>";

        var resultHours = Number(duty * dayHours)
        var resultSalary = Number(resultHours * sumPerHour)
        var resultFromSickDays = Number((sickDays * dayHours * sumPerHour) * 0.7 )

        var result = Number(resultSalary + resultFromSickDays + Number(awards))

        $('#total-sum').val(result.toFixed(2))


 });

</script>

