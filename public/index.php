<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include('css/style.css') ?></style>
    <title>PHP Mundi</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <head>
                <h1>PHP Mundi</h1>
            </head>
        </div>
        
        <div class="card">
            <div class="card-item">
                <label>Countries</label>
                <select id="select-country" data-countries="<?php json_encode($countries) ?>">
                    <?php foreach($countries as $country) { ?>
                    <option><?php echo $country->name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <hr />
            <div class="card-item">
                <label>States</label>
                <select id="select-state" data-countries="<?php $countries ?>">
                    <option>Select the State</option>
                </select>
            </div>
            <hr />
            <div class="card-item">
                <label>States</label>
                <select id="select-state" data-countries="<?php json_encode($countries) ?>">
                    <option>Select the City</option>
                </select>
            </div>
        </div>

        <div>
            <div class="debug">
                <pre>
<?php print_r($countries); ?>
                </pre>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        <?php include('js/script.js') ?>
    </script>
</body>
</html>