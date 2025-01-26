<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    </head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-3"><h3>Payment Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
           
            
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Contact</th>
            <th>Amount</th>
            <th>Payment ID </th>
            <th>Payment Type</th>
            
         
        </tr>   
        </thead>
        
        <tbody>
          <?php get_payment(); ?>
        </tbody>
    </table>
    <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Make new Payment</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
               <label>Customer ID</label>
                    <input type="text" name="customer_id" class="form-control"><br>  
                    
                   <label>Customer Name</label>
                    <input type="text" name="customer_name" class="form-control"><br>
                    
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control"><br>

                    <label>Amount</label>
                    <input type="text" name="Amount" class="form-control"><br>
                    
                    <label>Payment ID</label>
                   <input type="text" name="Payment_id" class="form-control"><br>
 
                   
                    
                    <label>Payment Type</label>
                    <input type="text" name="payment_type" class="form-control"><br> 

                    <script>
function newPopup(url) {
    popupWindow = window.open(
        url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=yes')
}
</script>
<button style="background-color:blue;border:skyblue;width:80px;height:80px"><a href="javascript:void(0);" onClick="newPopup('images\\QR800.png');"style="color: white;";>QR.800</a></button>
 
<button style="background-color:blue;border:skyblue;width:80px;height:80px"><a href="javascript:void(0);" onClick="newPopup('images\\QR1500.png');"style="color: white;";>QR.1500</a></button>

<button style="background-color:blue;border:skyblue;width:80px;height:80px"><a href="javascript:void(0);" onClick="newPopup('images\\QR4500.png');"style="color: white;";>QR.4500</a></button>

<button style="background-color:blue;border:skyblue;width:80px;height:80px"><a href="javascript:void(0);" onClick="newPopup('images\\QR6000.png');"style="color: white;";>QR.6000</a></button>

</span>
</div><br>
<br>

<input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>