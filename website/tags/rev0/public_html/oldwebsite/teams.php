<?php
    // This includes the <HTML> tags and all the necessary meta
    include 'header.php';
?>
    
    <!--		Title, edit on every page			-->
    <title>Teams of Triton Rocket Club</title>

<?php
    // This includes the </HTML> tag and opening body 
    // tags, as well as nav elements
    include 'nav.php';
?>


<!--		Unique Page Info Starts HERE		-->

<div class="main-container">

	<header class="banner" id="team-banner">
    </header>

	<div class="wrapper clearfix main">

		<h1 id="team">Integrated Product Teams (IPT)</h1>

        <section class="team">
            <img src="img/Team Pictures/Avionics.jpg" alt="Avionics Team" width="100%">
            <div class="team-text">
                <h2>Avionics IPT</h2>
                <p>The Avionics IPT handles the design of electronics to
                acquire live data/video from launch all the way to our
                project goal of 62+ miles in altitude.</p>
            </div>
        </section>
        
        <section class="team" id="propulsion">
            <img src="img/Team Pictures/APCP.jpg" alt="APCP Motor Team" width="100%">
            <div class="team-text">
                <h2>Propulsion IPT</h2>
                <p>The Propulsion IPT is building a scaled version of our test 
                Ammonium perchlorate composite propellant (APCP) rocket to 
                acheive our 62+ mile altitude goal.</p>
            </div>
        </section>

			<div class="clearfix"></div>

		  <section class="team">
            <img src="img/Team Pictures.png" alt="SLV Team" width="100%">
            <div class="team-text">
                <h2>Space Launch Vehicle (SLV) IPT</h2>
                <p>The SLV IPT is tasked with building the rocket body itself: 
                the the structure that will house the avionics package and the 
                APCP motor.</p>
            </div>
        </section>
        
        <section class="team">
            <img src="img/Team Pictures/Balloon.jpg" alt="Balloon Team" width="100%">
            <div class="team-text">
                <h2>Balloon IPT</h2>
                <p>The Balloon IPT is creating a lightweight, but durable, 
                structure that will hoise the rocket and its launchpad to 
                100,000 feet.</p>
            </div>
        </section>
        
        <div class="clearfix"></div>
        
        <h1 id="team">Previous Projects</h1>
        <section class="previous">
        		<img src="img/Old Projects/Triteia/triteia.jpg" alt="Triteia" width="100%">
        		<div class="project-text">
        			<h2>2012-2013: Triteia</h2>
        			<p>Triton Rocket's second successful solid rocket build.</p>
        		</div>
        </section>
        <section class="previous">
        		<img src="img/Old Projects/Frankenstein/Frankenstein.JPG" alt="Frankenstein" width="100%">
        		<div class="project-text">
        			<h2>2011-2012: Frankenstein</h2>
        			<p>Frankenstein is a solid rocket and the Triton Rocket 
                        Club’s first project. Christened Frankenstein due 
                        to its mish-mashed appearance akin to the creature 
                        in Mary Shelley’s Frankenstein, it was launched on 
                        February 4, 2012 in Plaster City.</p>
        		</div>
        </section>
	
<?php
    include 'footer.php';
?>