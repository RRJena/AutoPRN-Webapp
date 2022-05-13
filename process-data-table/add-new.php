
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ADD NEW PRN DATA</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Header---Apple.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/NZButtonSaveClose.css">
    <link rel="stylesheet" href="assets/css/Pretty-Table-1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Table.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search--sort-filters.css">
</head>

<body>
  

    <div style="background-color: #226e93;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-left" style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;line-height: 66px;">ADD Auto PRN Machine and Part Details</h1>
                </div>
            </div>
        </div>
    </div>

  
<div class="container" width="">
        <i> <center> <p>Please Give All Required input details to Update Machine</p></center></i>
          <form id="rendered-form" method="POST" action="add.php"><div class="form-group">
                  <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                  <div class="formbuilder-text form-group field-part"><label for="part" class="formbuilder-text-label">Part ID<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Enter Part ID to be consider for PRN"> </span></label><input type="text" placeholder="Enter The Part ID(As Per SAP)" class="form-control" name="part_id"  id="part_id" title="Enter Part ID to be consider for PRN" required="required" aria-required="true"></div>
                  <div class="formbuilder-text form-group field-part"><label for="part" class="formbuilder-text-label">Part Name<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Enter Part Name to be consider for PRN"> </span></label><input type="text" placeholder="Enter The Part Name" class="form-control" name="part" access="false" id="part" title="Enter Part Name to be consider for PRN" required="required" aria-required="true"></div>
                  <div class="formbuilder-select form-group field-model"><label for="model" class="formbuilder-select-label">Select Product Model<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Please Select Product Model"> </span></label><select class="form-control selectpicker" data-show-subtext="true" data-live-search="true"  name="model" id="model" required="required" aria-required="true"><?php include "../inc/product.php" ?></select></div>
                  <div class="formbuilder-select form-group field-product_type"><label for="product_type" class="formbuilder-select-label">Select Product Type<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Shift Fork or Shift Tower "> </span></label><select class="form-control selectpicker" data-show-subtext="true" data-live-search="true"  name="product_type" id="product_type" required="required" aria-required="true"><?php include "../inc/product_type.php" ?></select></div>
                  <div class="formbuilder-select form-group field-process"><label for="process" class="formbuilder-select-label">Select Process Name<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Please Select Process Name "> </span></label><select class="form-control selectpicker" data-show-subtext="true" data-live-search="true"  name="process" id="process" required="required" aria-required="true"><?php include "../inc/process.php" ?></select></div>
                  <div class="formbuilder-text form-group field-machine"><label for="machine" class="formbuilder-text-label">Machine Name<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Enter The Machine Name"> </span></label><select class="form-control selectpicker" data-show-subtext="true" data-live-search="true"   class="form-control choosenSelect" name="machine" access="false" id="machine" title="Enter The Machine Name" required="required" aria-required="true"><?php include "../inc/machine.php" ?></select></div><div class="formbuilder-text form-group field-pcost"><label for="pcost" class="formbuilder-text-label">Process Cost<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Enter the cost in Rupees "> </span></label><input type="text" placeholder="Enter Cost for the Process" class="form-control" name="pcost" access="false" id="pcost" title="Enter the cost in Rupees " required="required" aria-required="true"></div>
                  <div class="formbuilder-text form-group field-part_cost"><label for="part_cost" class="formbuilder-text-label">Part Cost<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Enter the cost in Rupees "> </span></label><input type="text" placeholder="Enter Cost for the Process" class="form-control" name="part_cost" access="false" id="part_cost" title="Enter the cost in Rupees " required="required" aria-required="true"></div><div class="formbuilder-select form-group field-customer"><label for="customer" class="formbuilder-select-label">Select Customer Name<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Please Select Company Name "> </span></label><select class="form-control selectpicker" data-show-subtext="true" data-live-search="true"  name="customer" id="customer" required="required" aria-required="true"><?php include "../inc/customer.php" ?></select></div>
                  <div class="formbuilder-text form-group field-cycle_time"><label for="cycle_time" class="formbuilder-text-label">Please Enter the IDEAL Cycle Time<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Cycle Time in Seconds for This Process ."> </span></label><input type="text" placeholder="Please Enter Cycle Time in Seconds" class="form-control" name="cycle_time" access="false" id="cycle_time" title="Cycle Time in Seconds for This Process ." required="required" aria-required="true"></div>
                <div class="formbuilder-button form-group field-button-1615099597406">  <center><button type="submit" class="btn-success btn" name="button-1615099597406" access="false" style="success" id="button-1615099597406">Submit</button>
                  <button type="reset" class="btn-danger btn" name="button-1615099656198" access="false" style="danger" id="button-1615099656198">Clear</button></center></div></div></form>
      

</div>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Table-with-search--sort-filters.js"></script>
</body>

</html>