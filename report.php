<!DOCTYPE html>
<html>
<head>
    <title>Report Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="font-family: Poppins, sans-serif;">
    <div class="container" style="font-family: Poppins, sans-serif;">
        <h2 class="my-3">Report Form</h2>
        <p>Report all traffic offenses you witness!</p>
        <form method="POST" action="submit_report.php" enctype="multipart/form-data" class="mt-3">
            <div class="form-group">
                <label for="citizen_name">Citizen Name:</label>
                <input type="text" class="form-control" id="citizen_name" name="citizen_name" required>
            </div>
            <div class="form-group">
                <label for="citizen_nin">Citizen NIN:</label>
                <input type="text" class="form-control" id="citizen_nin" name="citizen_nin" required>
            </div>
            <div class="form-group">
                <label for="license_plate_no">Offender License Plate No:</label>
                <input type="text" class="form-control" id="license_plate_no" name="license_plate_no" required>
            </div>
            <div class="form-group">
                <label for="offense_type">Type of Offense:</label>
                <select class="form-control" id="offense_type" name="offense_type" required>
                    <option value="">Select Offense Type</option>
                    <option value="Speeding">Speeding</option>
                    <option value="Reckless Driving">Reckless Driving</option>
                    <option value="DUI">DUI</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="license_plate_no">Description</label>
                <input type="textarea" class="form-control" id="license_plate_no" name="license_plate_no" required>
            </div>
            <div class="form-group">
                <label for="images">Images:</label>
                <input type="file" class="form-control-file" id="images" name="images[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
