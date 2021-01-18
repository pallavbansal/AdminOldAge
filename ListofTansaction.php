<!DOCTYPE html>
<html>
<head>
    <title>List Of Tansactions</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src ="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"> </script>
    <script src ="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" type="text/javascript"> </script>
</head>
<body>

<div class="container-fluid">
    <br><h1 class="text-center"><strong>List Of Transactions</strong></h1><br><br>
<table id="Transaction" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Status</th>
                <th>Transaction Time</th>
                <th>User Name</th>
                <th>Plan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Active</td>
                <td>12/3/2011/22:00</td>
                <td>Alen</td>
                <td>Silver</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Active</td>
                <td>12/3/2011/22:00</td>
                <td>Alen</td>
                <td>Silver</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Active</td>
                <td>12/3/2011/22:00</td>
                <td>Alen</td>
                <td>Silver</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Active</td>
                <td>12/3/2011/22:00</td>
                <td>Alen</td>
                <td>Silver</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Active</td>
                <td>12/3/2011/22:00</td>
                <td>Alen</td>
                <td>Silver</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Transaction ID</th>
                <th>Status</th>
                <th>Transaction Time</th>
                <th>User Name</th>
                <th>Plan</th>
            </tr>
        </tfoot>
    </table>

</div>

<!-- Teacher's Balance -->

<script>
 $(document).ready(function() {
        $('#Transaction').DataTable();
    });
</script>
</body>
</html>