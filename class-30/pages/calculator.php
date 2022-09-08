<?php include('header.php'); ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Calculator</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Number 1 </label>
                                <div class="col-sm-10">
                                    <input type="number" value="<?php echo isset($num1)? $num1 : ' '?>" name="num1" class="form-control form-control-sm" id="colFormLabelSm" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Number 2</label>
                                <div class="col-sm-10">
                                    <input type="number" name="num2" value="<?php echo isset($num2)? $num2 : ' '?>" class="form-control form-control-sm" id="colFormLabelSm" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row" align="center">
                                <div class="col-sm-10">
                                    <input type="submit" name="add" value="+" class=" form-control-sm" id="colFormLabelSm" >
                                    <input type="submit" name="sub" value="-"  class=" form-control-sm" id="colFormLabelSm" >
                                    <input type="submit" name="mul" value="*"  class=" form-control-sm" id="colFormLabelSm" >
                                    <input type="submit" name="div" value="/"  class=" form-control-sm" id="colFormLabelSm" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Result</label>
                                <div class="col-sm-10">
                                    <input type="number" name="result"  value="<?php echo isset($result)? $result : ' '?>" class="form-control form-control-sm" id="colFormLabelSm" >
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Calculator Sir</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Number 1 </label>
                                <div class="col-sm-10">
                                    <input type="number" value="<?php echo isset($firstNumber)? $firstNumber : ' '?>" name="firstNumber" class="form-control form-control-sm" id="colFormLabelSm" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Number 2</label>
                                <div class="col-sm-10">
                                    <input type="number" name="secondNumber" value="<?php echo isset($secondNumber)? $secondNumber : ' '?>" class="form-control form-control-sm" id="colFormLabelSm" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row" align="center">
                                <div class="col-sm-10">
                                    <input type="radio" name="addition" value="plus" class=" form-control-sm" id="colFormLabelSm" > plus
                                    <input type="submit" name="add" value="+" class=" form-control-sm" id="colFormLabelSm" >
                                    <input type="submit" name="sub" value="-"  class=" form-control-sm" id="colFormLabelSm" >
                                    <input type="submit" name="mul" value="*"  class=" form-control-sm" id="colFormLabelSm" >
                                    <input type="submit" name="div" value="/"  class=" form-control-sm" id="colFormLabelSm" >
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Result</label>
                                <div class="col-sm-10">
                                    <input type="number" name="result"  value="<?php echo isset($result_s)? $result_s : ' '?>" class="form-control form-control-sm" id="colFormLabelSm" >
                                    <input type="submit" name="calculate"  value="Result" class="form-control form-control-sm" id="colFormLabelSm" >
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php // echo  '<pre>'?>
<?php //print_r($productById)?>

<?php include('footer.php'); ?>


































































































































































































































































