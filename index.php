<?php include "inc/html-top.php";?>

	<body>
		
		<div class="above">

			<?php include "inc/nav.php";?>

			<header>
				<h1 class="index_header">The City of Brotherly Love</h1>
				<p class="description">Philadelphia is a scrappy underdog with a heart of gold, and who can resist a Rocky reference? The eye of the tiger. Slowly but steadily Philly has changed from a city of industrial might in the first half of the past century to a city of ingenious makers. The evidence is everywhere.</p>
			</header>

		</div>

		<div class="container">

			<article>

				<h2>History</h2>
				<figure>
					<img src="images/WilliamPennStatue.jpg" alt="The William Penn Statue">
				</figure>
				
				<p>The written history of Philadelphia begins in 1682, when the city was founded by William Penn in the English Crown Province of Pennsylvania between the Delaware and Schuylkill rivers.</p>
				<p>Before then, the area was inhabited by the Lenape people. Philadelphia quickly grew into an important colonial city and during the American Revolution was the site of the First and Second Continental Congresses. After the Revolution the city was chosen to be the temporary capital of the United States. At the beginning of the 19th century, the federal and state governments left Philadelphia, but the city remained the cultural and financial center of the country. Philadelphia became one of the first U.S. industrial centers and the city contained a variety of industries, the largest being textiles.</p>

			</article>

			<aside>
				<p>After the American Civil War Philadelphia's government was controlled by a corrupt Republican political machine and by the beginning of the 20th Century Philadelphia was described as "corrupt and contented." Various reform efforts slowly changed city government with the most significant in 1950 where a new city charter strengthened the position of mayor and weakened the Philadelphia City Council. At the same time Philadelphia moved its supports from the Republican Party to the Democratic Party which has since created a strong Democratic organization. The city began a population decline in the 1950s as mostly white and middle-class families left for the suburbs. Many of Philadelphia's houses were in poor condition and lacked proper facilities, and gang and mafia warfare plagued the city. Revitalization and gentrification of certain neighborhoods started bringing people back to the city. Promotions and incentives in the 1990s and the early 21st century have improved the city's image and created a condominium boom in Center City and the surrounding areas that has slowed the population decline.</p>

			</aside>

		</div>
		
		<div id="owl-owl">
			<h2>Major Events of Philadelphia</h2>
			<div id="owl-demo" class="owl-carousel owl-theme">

				<div class="item">
					<img src="images/carousel/charter.jpg" alt="Pennsylvania Charter">
					<p>Pennsylvania Charter given to Willam Penn</p>
				</div>
				<div class="item">
					<img src="images/carousel/carpenters-hall.jpg" alt="Carpenter's Hall">
					<p>Continental Congress meets at Carpenter's Hall</p>
				</div>
				<div class="item">
					<img src="images/carousel/declaration.jpg" alt="Declaration of Independance">
					<p>Declaration of Independance Signed</p>
				</div>
				<div class="item">
					<img src="images/carousel/betsy-ross.jpg" alt="The First US Flag">
					<p>Betsy Ross makes the first US flag</p>
				</div>
				<div class="item">
					<img src="images/carousel/bus.jpg" alt="The First Bank of United States">
					<p>The First Bank of US established</p>
				</div>
				<div class="item">
					<img src="images/carousel/independance-hall.jpg" alt="Independance Hall">
					<p>Constitutional Convention at Independance Hall</p>
				</div>
				<div class="item">
					<img src="images/carousel/congress-hall.jpg" alt="Congress Hall">
					<p>First Congress of US meets at Congress Hall</p>
				</div>
				<div class="item">
					<img src="images/carousel/hospital.jpg" alt="Children's Hospital of Philadelphia">
					<p>First Pediatric Hospital of US</p>
				</div>

			</div>
		</div>

		<?php include "inc/footer.php";?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {
 
  				$("#owl-demo").owlCarousel({
 
      				autoPlay: 4000, //Set AutoPlay to 4 seconds
 					navigation: false,
 					goToFirst: true,

      				items : 3,
      				itemsDesktop : [1199,3],
      				itemsDesktopSmall : [979,2],
      				itemsTablet: [768,2],
      				itemsMobile: [479,1]
 
  				});
 
			});
		</script>

	</body>
</html>