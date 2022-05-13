<?php include $_SERVER['DOCUMENT_ROOT']."/eol/controller/database-config.php"?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>EDIT PRN DATA</title>
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
                    <h1 class="text-left" style="font-weight: bold;color: rgb(255,255,255);font-size: 24px;line-height: 66px;">Edit Auto PRN Target</h1>
                </div>
            </div>
        </div>
    </div>

  
<div class="container" width="">
        <i> <center> <p>Please Give All Required input details to Update PRN TARGET</p></center></i>
          <form id="rendered-form" method="POST" action="add1.php"><div class="form-group">
                  <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                  <div class="formbuilder-text form-group field-part"><label for="" class="formbuilder-text-label">Order No<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Enter Order No to be consider for PRN"> </span></label><input type="text" placeholder="Enter The Part ID(As Per SAP)" class="form-control" name="order_no"  id="order_no" title="Enter Order NO or ID to be consider for PRN" required="required" aria-required="true"></div>
                  <div class="formbuilder-text form-group field-part"><label for="" class="formbuilder-text-label">Part Name<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Enter Part Name to be consider for PRN"> </span></label><select class="form-control selectpicker" data-show-subtext="true" data-live-search="true" placeholder="Select The Part Name" class="form-control" name="part" access="false" id="part" title="Select to be consider for PRN" required="required" aria-required="true"><?php include "../inc/part_name.php" ?></select></div>
                  <div class="formbuilder-text form-group field-part"><label for="" class="formbuilder-text-label">Select Machine<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Select Machine Name Whrere PART to be made"> </span></label><select class="form-control selectpicker" data-show-subtext="true" data-live-search="true" placeholder="Select The Machine Name Where Part to be made" class="form-control" name="machine_name" access="false" id="machine_name" title="Select to be consider for PRN" required="required" aria-required="true"><?php include "../inc/machine.php" ?></select></div>
                  <div class="formbuilder-select form-group field-model"><label for="" class="formbuilder-select-label">Target<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip=""> </span></label><input type="number" class="form-control" name="target" id="target" required="required" aria-required="true"></div>
                  <div class="formbuilder-select form-group field-product_type"><label for="" class="formbuilder-select-label">Completed<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Comleted? "> </span></label><input type="number" class="form-control"   name="completed" id="completed" required="required" aria-required="true"></div>
                  <div class="formbuilder-select form-group field-process"><label for="" class="formbuilder-select-label">Production Date<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Please Select Production Date "> </span></label><input type="date"  class="form-control" name="production_date" id="production_date" required="required" aria-required="true"></div>
                  <div class="formbuilder-text form-group field-machine"><label for="" class="formbuilder-text-label">Priority<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip="Select Priority"> </span></label><select class="form-control selectpicker" data-show-subtext="true" data-live-search="true"   class="form-control choosenSelect" name="priority" access="false" id="priority" title="Select The Priority LEVEL" required="required" aria-required="true"><?php include "../inc/priority.php" ?></select></div>
                  <div class="formbuilder-text form-group field-cycle_time"><label for="" class="formbuilder-text-label">Status<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip=""> </span></label><select class="form-control selectpicker" data-show-subtext="true" data-live-search="true"  class="form-control" name="status" access="false" id="status" title="Status." required="required" aria-required="true"><?php include "../inc/status.php" ?></select></div>
                  <div class="formbuilder-text form-group field-cycle_time"><label for="" class="formbuilder-text-label">Remark<span class="formbuilder-required">*</span><span class="tooltip-element" tooltip=""> </span></label><input type="text" placeholder="Please Put Remark" class="form-control" name="remark" access="false" id="remark" title="Remark?" required="required" aria-required="true"></div>
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