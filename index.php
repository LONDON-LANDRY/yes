<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">

	<style type="text/css">
		
		body{
			margin:0;
			/*color:#6a6f8c;*/
			background:#c8c8c8;
			font:600 16px/18px 'Open Sans',sans-serif;}

			.cntn{
				width:100%;
				margin:auto;
				max-width:1000px;
				min-height:670px;
				position:relative;
				/*background:url('Bienvenue.jpg') no-repeat center;*/
				box-shadow:4px 12px 35px 4px rgba(0,0,0,.24),0 17px 50px 4px rgba(0,0,0,.19);

			 background-image: url('salon.jpg');
				    -webkit-animation-name: example; /* Chrome, Safari, Opera */
				    -webkit-animation-duration: 2s; /* Chrome, Safari, Opera */
				    animation-name: example;
				    animation-duration: 90s;
				     animation-iteration-count: infinite;
				     animation-direction: alternate; 
				}
			.cntn-1{
				width: 100%;
				height:100%;
				position:absolute;
				background:rgba(242,242,242,.8);
				}
			
				/* Chrome, Safari, Opera */
				@-webkit-keyframes example{
			 			   0%   {background-image:url('salon.jpg');}
			  			  10%  {background-image:url('traffic.jpg'); }
			    	      20%  {background-image:url('market.png');}
			    		  30%  {background-image:url('marketing.png');}
			    		 40% {background-image:url('car.jpg'); }
			    		  50% {background-image:url('toyota.jpg'); }
			    		   60% {background-image:url('casserole.jpg'); }
			    		    70% {background-image:url('image_processing20200408-15509-1muhz9a.jpg'); }
			    		     80% {background-image:url('shutterstock_251372266.jpg'); }
			    		      90% {background-image:url('téléchargement.jpg'); }
			    		       100% {background-image:url('salon.jpg'); }
									}


				/* Standard syntax */
				@keyframes example{
			 			    0%   {background-image:url('salon.jpg');}
			  			  10%  {background-image:url('traffic.jpg'); }
			    	      20%  {background-image:url('market.png');}
			    		  30%  {background-image:url('marketing.png');}
			    		 40% {background-image:url('car.jpg'); }
			    		  50% {background-image:url('toyota.jpg'); }
			    		   60% {background-image:url('casserole.jpg'); }
			    		    70% {background-image:url('image_processing20200408-15509-1muhz9a.jpg'); }
			    		     80% {background-image:url('shutterstock_251372266.jpg'); }
			    		      90% {background-image:url('téléchargement.jpg'); }
			    		       100% {background-image:url('salon.jpg'); }
	</style>
</head>
<body>


	<div class="cntn">
		<div class="cntn-1">

			<div class=""><?php include 'title.php'?></div>
			<div> <?php include 'menu.php'?></div>
			
			<div> <?php include 'A-connexion.php'?></div>
		</div>
	</div>
</body>
</html>
