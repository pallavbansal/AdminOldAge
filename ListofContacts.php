<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>List Of Contacts</title>
</head>
<body>

<div class="container-fluid">
    <br><h1 class="text-center"><strong>List Of Contacts</strong></h1><br><br>
<table id="Doctors" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Skype Id</th>
                <th>Email</th>
                <th>Map to customer</th>
            </tr>
        </thead>
        <tbody id="Contact_List">
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Skype Id</th>
                <th>Email</th>
                <th>Map to customer</th>
            </tr>
        </tfoot>
    </table>

</div>


<!-------  list of Contacts Table script----------->
<script>
	var myArray = []
	var myObj ;
	GetAllDealerDataAJAX() ;
	     function GetAllDealerDataAJAX() 
      {
            var d = JSON.stringify({ "var": 0 }); //need all details of emplyoees
            $(document).ready(function () {
                $.ajax({
                    type: "POST",
                    url: "listcontacts.php",
                    data: d,
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {

                    
                         myObj = JSON.parse(JSON.stringify(response));

                        buildTable(myObj) 
                       

                    },
                    failure: function (response) {
                        alert(response.d);
                    }
                });
            });
        }



	function buildTable(data){
		var table = document.getElementById('Contact_List')
           table.innerHTML = ''
		for (var i = 0; i < data.length; i++){
		    
		    var row = `<tr>
							<td>${data[i].firstName}</td>
							<td>${data[i].phoneNumber}</td>
							<td>${data[i].skypeId}</td>
							<td>${data[i].emailId}</td>
							<td>${data[i].dateTime}</td>
					  </tr>`
			table.innerHTML += row
 

		}
	}
</script>
<!-------- List of Contacts Table script ---------->
<!-- List of Contacts-->

<script>
 $(document).ready(function() {
        $('#Doctors').DataTable();
    });
</script>
</body>
</html>