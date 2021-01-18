<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>List Of Customers</title>

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
</head>
<body>

<div class="container-fluid">
    <br><h1 class="text-center"><strong>List Of Customers</strong></h1><br><br>
<table id="Customers" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Active Plan</th>
                <th>Date/Time</th>
                <th>Map Doctors</th>
                <th>----</th>
            </tr>
        </thead>
        <tbody id="Customers_List">
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Active Plan</th>
                <th>Date/Time</th>
                <th>Map Doctors</th>
                <th>----</th>
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
                    url: "listCustomers.php",
                    data: d,
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {

                    
                         myObj = JSON.parse(JSON.stringify(response));
                         Ajax_Map();
                        buildTable(myObj) 
                       

                    },
                    failure: function (response) {
                        alert(response.d);
                    }
                });
            });
        }



	function buildTable(data){
		var table = document.getElementById('Customers_List')
           table.innerHTML = ''
		for (var i = 0; i < data.length; i++){
		    
		    var row = `<tr>
							<td>${data[i].firstName}</td>
							<td>${data[i].emailId}</td>
							<td>${data[i].phoneNumber}</td>
							<td>${data[i].ActivePlan}</td>
							<td>${data[i].dateTime}</td>
							<td><div class="form-group">
                                     <select id="select_Map" onchange="SelectChanged(this)" class="custom-select" data-placeholder="Map To Customer">
                                             
                                     </select>
                            </div></td>
							<td><label class="switch"><input type="checkbox"><span class="slider round"></span></label></td>
					  </tr>`
			table.innerHTML += row

		}
	}
	
</script>
<!-------- List of Contacts Table script ---------->
<script>
	
        function Ajax_Map() {
            var d = JSON.stringify({ "var": 0 }); 
            $(document).ready(function () {
                $.ajax({
                    type: "POST",
                    url: "listContacts.php",
                    data: d,
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function (response) {
           
                        var myObj = JSON.parse(JSON.stringify(response));
                        ParseJSON_map(myObj);
                   
                    },
                    
                    failure: function (response) {
                        alert(response.d);
                    }
                    
                    
                });
            });
        }

        function  ParseJSON_map (myObj) {
        var select_raw = document.getElementById('select_Map');

            for (var i = 0; i < myObj.length; i++)
            {
                var option_map = document.createElement('option');
                option_map.value= myObj[i].id;
                option_map.innerHTML= myObj[i].firstName;
                select_map.appendChild(option_map);

            }
        
            
        }
        
		</script>

<!-- Table-->

<script>
 $(document).ready(function() {
        $('#Customers').DataTable();
    });
</script>
<!-----dropdown change event-->
<script type="text/javascript">
    $("#select_Map").on("change", function() {
   alert(this.value); 
});
</script>

</body>
</html>