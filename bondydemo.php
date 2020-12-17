<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Software Revolo</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.5.1/css/colReorder.dataTables.min.css">

		<link rel="stylesheet" type="text/css" href="assets/css/mgDialog.css">
		<link href="https://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.0/css/bootstrap-select.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/plugins/fSelect.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/dashboard.css">
		<link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel='stylesheet' type='text/css'>
		<link href="assets/css/popnotify.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
		<div class="col-md-4 form-group">
		<label>Sttl Date</label>
		<input class="form-control datetimepicker" id="settl_date" value=""></input>
		<label>Price</label>
		<input class="form-control" id="settl_price" value=""></input>
		<label>Maturity Date</label>
		<input class="form-control datetimepicker" id="settl_matdate" value=""></input>
		<label>coupon Rate</label>
		<input class="form-control" id="coupon_rate" value=""></input>
		<label>frequency of coupon payment</label>
		<input class="form-control" id="focpy" value=""></input>
		<label>redemption value</label>
		<input class="form-control" id="redval" value=""></input>
		<button type="button" onclick="getyield()">Calculate Yield</button>
		<div id="byield" style="color:green;margin:10px;">
		
		</div>
		</div>
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		 <script type="text/javascript" src="assets/js/main.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		 <script src="assets/js/plugins/moment.min.js"></script>

		  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="application/javascript"></script>

		 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		 <!--<script src="https://cdn.datatables.net/plug-ins/1.10.19/api/sum().js"></script>-->

		 <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/animations.min.js"></script>-->

		 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" type="application/javascript"></script>

		 <script src="assets/js/plugins/jquery.nicescroll.js"></script>

		 <script src="assets/js/plugins/contextmenu.min.js"></script>

		 <script src="assets/js/plugins/chartist.min.js"></script>

		 <script type="text/javascript" src="assets/js/plugins/fSelect.js"></script>

		<script src="https://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.0/js/bootstrap-select.min.js"></script>
		<script type="text/javascript" src="assets/js/mgDialog.js" ></script>
   		<script  type="application/javascript" src="assets/js/popnotify.js"></script>
		 <script type="text/javascript" src="assets/js/webcamjs/webcam.min.js"></script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn8Pn600axNiT1xVOBYwVvAc728m6yuKw"></script>

         <script type="text/javascript">
			function getyield(){
				var settl_date = $("#settl_date").val();
				var settl_price = $("#settl_price").val();
				var settl_matdate = $("#settl_matdate").val();
				var coupon_rate = $("#coupon_rate").val();
				var focpy = $("#focpy").val();
				var redval = $("#redval").val();
				 $.ajax({
				  type: "POST",
				  url:"example.php",
				  data:{
					  settl_date:settl_date,
					  settl_price:settl_price,
					  settl_matdate:settl_matdate,
					  coupon_rate:coupon_rate,
					  focpy:focpy,
					  redval:redval
				  },
					success:function(result){
						$("#byield").text(result);
					}
				  });
			}
				</script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="application/javascript"></script>
	<script src="https://cdn.datatables.net/select/1.2.3/js/dataTables.select.min.js" type="application/javascript"></script>
	<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js" type="application/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="application/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js" type="application/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js" type="application/javascript"></script>
	<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js" type="application/javascript"></script>
	<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js" type="application/javascript"></script>
	<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.colVis.min.js" type="application/javascript"></script>
	<script src="https://cdn.datatables.net/colreorder/1.5.1/js/dataTables.colReorder.min.js" type="application/javascript"></script>
    </body>
</html>
