<style type="text/css">
	.totalSaleAmount{
		border: 2px solid #ff0011;
		width: 30%;		
		padding: 40px;
		font-size: 32px;
		margin-left: 39%;	
		margin-top: 290px;
		text-align: center;
		color: #fff;
		background-color: #000;
	}
	.totalSaleText{
		margin-left: 48%;
	}
</style>

<?php

use yii\helpers\Html;

$this->title = 'Food List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    	$today = date('m-d-Y');
    	//echo $today;	
    ?>
<input class="form-control col-md-4 col-xs-12 col-sm-6" type="text" id="today_datepicker" name="today_datepicker" placeholder="<?php echo $today;?>">
<h5>LIST OF FOOD SALE FOR THE DAY</h5>  

<div class="totalSaleAmount">Rs. 30003</div>
<label class="totalSaleText">Total Sale for today</label>
</div>
