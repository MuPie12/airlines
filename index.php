

<!DOCTYPE html>
<html>
<head>
	<title>Accueil Projet reservation</title>
	<link rel="stylesheet" href="css/style.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
</head>
<body>
	<div id="corps">
	<header>
		<a href="index2.html"><img src="images/logo.png" alt="logo" width="75px"></a>
		<nav>
		<ul id="navigation">
			<li >
				<a href="index.php" >Reserver</a>
			</li>
			<li>
				<a href="consulter.php">Consulter</a>
			</li>
			<li>
				<a href="formlogin.php">Login</a>
			</li>

		</ul>
		</nav>
	</header>
	<h1>Reservation Vol</h1>
	<div class="main-agileinfo">
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Aller Retour</span></li>
					<li class="resp-tab-item"><span>Aller Simple</span></li>
					<!--<li class="resp-tab-item"><span>Multi destination</span></li>-->				
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						<form action="vol.php" method="post">
							<div class="from">
								<h3>From</h3>
								<select name="ville_depart" id="ville-depart" required>
									<option selected="">Abidjan (ABJ)</option>
									<option>Abu Dhabi (AUH)</option>
									<option>Accra (ACC) </option>
									<option>Alger (ALG)</option>
									<option>Amsterdam (AMS)</option>
									<option>Bamako (BKO)</option>
									<option>Barcelone (BCN)</option>
									<option>Berlin (TXL)</option>
									<option>Bordeaux (BOD)</option>
									<option>Bruxelles (BRU)</option>
									<option>Casablanca (CMN)</option>
									<option>Copenhague (CPH)</option>
									<option>Dakar(DKR)</option>
									<option>Doha (DOH)</option>
									<option>Francfort (FRA)</option>
									<option>Genève (GVA)</option>
									<option>Lagos (LOS)</option>
									<option>Las Vegas (LAS)</option>
									<option>Lisbonne (LIS)</option>
									<option>Londres-Heathrow (LHR)</option>
									<option>Madrid (MAD)</option>
									<option>New York (JFK)</option>
									<option>Paris-Orly (ORY)</option>
									<option>Pékin (PEK)</option>
									<option>Rome (FCO)</option>
									<option>Washington (IAD)</option>
									<option>Zurich (ZRH)</option>
								</select>
							</div>
							<div class="to">
								<h3>To</h3>
								<select name="ville-arrivee" id="ville-arrivee" required="">
									<option>Abidjan (ABJ)</option>
									<option selected="">Abu Dhabi (AUH)</option>
									<option>Accra (ACC) </option>
									<option>Alger (ALG)</option>
									<option>Amsterdam (AMS)</option>
									<option>Bamako (BKO)</option>
									<option>Barcelone (BCN)</option>
									<option>Berlin (TXL)</option>
									<option>Bordeaux (BOD)</option>
									<option>Bruxelles (BRU)</option>
									<option>Casablanca (CMN)</option>
									<option>Copenhague (CPH)</option>
									<option>Dakar(DKR)</option>
									<option>Doha (DOH)</option>
									<option>Francfort (FRA)</option>
									<option>Genève (GVA)</option>
									<option>Lagos (LOS)</option>
									<option>Las Vegas (LAS)</option>
									<option>Lisbonne (LIS)</option>
									<option>Londres-Heathrow (LHR)</option>
									<option>Madrid (MAD)</option>
									<option>New York (JFK)</option>
									<option>Paris-Orly (ORY)</option>
									<option>Pékin (PEK)</option>
									<option>Rome (FCO)</option>
									<option>Washington (IAD)</option>
									<option>Zurich (ZRH)</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
									<input  id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									<!--<span class="checkbox1">
										<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>
									</span>-->
								</div>
								<div class="return">
									<h3>Return</h3>
									<input  id="datepicker1" name="Text1" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="true">
									<!--<span class="checkbox1">
										<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>
									</span>-->
								</div>
								<div class="clear"></div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select name="classe" id="w3_country1" onchange="change_country(this.value)" class="frm-field" required>
									<option value="Economique">Economy</option>  
									<option value="Business">Business</option>   
									  						
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Adulte:(12+)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<select name="qte" id="qte">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
												<option>9</option>
											</select>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Enfant:(2-11 ans)</h3>
									<div class="quantity"> 
										<select name="qte1" id="qte">
												<option selected="">0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
												<option>9</option>
											</select>
											</select>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Rechercher Vol">
						</form>						
					</div>		
					<div class="tab-1 resp-tab-content oneway">
						<form action="vol.php" method="post">
							<div class="from">
								<h3>From</h3>
								<select name="ville_depart" id="ville-depart" required="">
									<option selected="">Abidjan (ABJ)</option>
									<option >Abu Dhabi (AUH)</option>
									<option>Accra (ACC) </option>
									<option>Alger (ALG)</option>
									<option>Amsterdam (AMS)</option>
									<option>Bamako (BKO)</option>
									<option>Barcelone (BCN)</option>
									<option>Berlin (TXL)</option>
									<option>Bordeaux (BOD)</option>
									<option>Bruxelles (BRU)</option>
									<option>Casablanca (CMN)</option>
									<option>Copenhague (CPH)</option>
									<option>Dakar(DKR)</option>
									<option>Doha (DOH)</option>
									<option>Francfort (FRA)</option>
									<option>Genève (GVA)</option>
									<option>Lagos (LOS)</option>
									<option>Las Vegas (LAS)</option>
									<option>Lisbonne (LIS)</option>
									<option>Londres-Heathrow (LHR)</option>
									<option>Madrid (MAD)</option>
									<option>New York (JFK)</option>
									<option>Paris-Orly (ORY)</option>
									<option>Pékin (PEK)</option>
									<option>Rome (FCO)</option>
									<option>Washington (IAD)</option>
									<option>Zurich (ZRH)</option>
								</select>
							</div>
							<div class="to">
								<h3>To</h3>
								<select name="ville-arrivee" id="ville-arrivee" required="" >
									<option>Abidjan (ABJ)</option>
									<option selected="">Abu Dhabi (AUH)</option>
									<option>Accra (ACC) </option>
									<option>Alger (ALG)</option>
									<option>Amsterdam (AMS)</option>
									<option>Bamako (BKO)</option>
									<option>Barcelone (BCN)</option>
									<option>Berlin (TXL)</option>
									<option>Bordeaux (BOD)</option>
									<option>Bruxelles (BRU)</option>
									<option>Casablanca (CMN)</option>
									<option>Copenhague (CPH)</option>
									<option>Dakar(DKR)</option>
									<option>Doha (DOH)</option>
									<option>Francfort (FRA)</option>
									<option>Genève (GVA)</option>
									<option>Lagos (LOS)</option>
									<option>Las Vegas (LAS)</option>
									<option>Lisbonne (LIS)</option>
									<option>Londres-Heathrow (LHR)</option>
									<option>Madrid (MAD)</option>
									<option>New York (JFK)</option>
									<option>Paris-Orly (ORY)</option>
									<option>Pékin (PEK)</option>
									<option>Rome (FCO)</option>
									<option>Washington (IAD)</option>
									<option>Zurich (ZRH)</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
									<input class="date" id="datepicker2" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									<!--<span class="checkbox1">
										<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>
									</span>-->
								</div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select name="classe" id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
									<option value="Economique">Economy</option>    
									<option value="Business	">Business</option>   
									   						
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Adultes:(12+ ans)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
												<select name="qte" id="qte">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
												<option>9</option>
											</select>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Enfant:(2-11 ans)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
												<select name="qte1" id="qte">
												<option selected="">0</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
												<option>9</option>
											</select>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Rechercher Vol">
						</form>	
								
					</div>
					<!--<div class="tab-1 resp-tab-content multicity">
						
									<form action="#" method="post">
										<div class="from">
											<h3>From</h3>
											<input type="text" name="city1" class="city1" placeholder="Ville Depart" required="">
										</div>
										<div class="to">
											<h3>To</h3>
											<input type="text" name="city2" class="city2" placeholder="Ville arrivée" required="">
										</div>
										<div class="clear"></div>
										<div class="date">
											<div class="depart">
												<h3>Depart</h3>
												<input class="date" id="datepicker3" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
												<span class="checkbox1">
													<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>
												</span>
											</div>
										</div>
										<div class="class">
											<h3>Class</h3>
											<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
												<option value="null">Economy</option>  
												
												<option value="null">Business</option>   
												   						
											</select>
										</div>
										<div class="clear"></div>
										<div id="loadMore">Ajouter Ville+</div>
										<div id="showLess">Retirer</div>
									</form>
				<div class="load_more">	
						<ul id="myList">
							<li>
			
								<div class="l_g spcl">
									<form action="vol.php" method="post" class="blackbg">
										<div class="from">
											<h3>From</h3>
											<input type="text" name="city1" class="city1" placeholder="ville arrivée" required="">
										</div>
										<div class="to">
											<h3>To</h3>
											<input type="text" name="city2" class="city2" placeholder="Ville Depart" required="">
										</div>
										<div class="clear"></div>
										<div class="date">
											<div class="depart">
												<h3>Depart</h3>
												<input class="date" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
												<span class="checkbox1">
													<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>
												</span>
											</div>
										</div>
										<div class="clear"></div>
									</form>
					
								</div>
								
							</li>
							<form action="vol.php" method="post">
							<div class="numofppl">
								<div class="adults">
									<h3>Adulte:(12+ ans)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Enfant:(2-11 ans)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>0</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Rechercher Vol">
							</form>
						</ul>
					</div>
					</div>
		
				</div>	-->					
			</div>
		</div>
	</div>
</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2018 PFE</p>
	</div>
	<!--script for portfolio-->
		<script src="js/jquery.min.js"> </script>
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!--//script for portfolio-->
				<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=0) divUpd.text(newVal);
									});
									</script>
								<!--//quantity-->
						<!--load more-->
								<script>
	$(document).ready(function () {
		size_li = $("#myList li").size();
		x=1;
		$('#myList li:lt('+x+')').show();
		$('#loadMore').click(function () {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('#myList li:lt('+x+')').show();
		});
		$('#showLess').click(function () {
			x=(x-1<0) ? 1 : x-1;
			$('#myList li').not(':lt('+x+')').hide();
		});
	});
</script>
<!-- //load-more -->



</body>
</html>