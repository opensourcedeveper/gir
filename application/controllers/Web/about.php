<?php $this->load->view('templates/web_header') ?>
<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "BreadcrumbList",
		"itemListElement":
		[
		{
			"@type": "ListItem",
			"position": 1,
			"item":
			{
				"type":"Website",
				"@id": "/",
				"name": "Home"
			}
		},
		{
			"@type": "ListItem",
			"position": 2,
			"item":
			{
				"type":"WebPage",
				"@id": "/about-us/",
				"name": "About Us"
			}
		}]
	}
</script>
 <!-- BREADCRUMB -->
        <div class="mwidth pt-3">
        <nav aria-label="breadcrumb pl-0">
            <ol class="breadcrumb pl-0" style="background: transparent;">
            <li class="breadcrumb-item"><a href="/" class="prime-color">Home</a></li>
<!--             <li class="breadcrumb-item"><a href="#" class="prime-color">Reports</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque, ullam.</li> -->
            </ol>
        </nav>
        </div>
        <!--  -->

        <!-- Report Details -->

        <section>


        	<div class="container">
	<div class="row mt-30">
		<div class="col-md-8 col-sm-12 col-xs-12">
			<h1 class="heading-center"><span class="heading-center-span">About Us</span></h1>
			<div class="mt-30 text-justify">
				<P>“Research is creating new knowledge.” - Neil Armstrong</P><p>
One of the most intriguing facets of research is its ubiquity. The practice of collecting information, examining it, and generating insights can be applied in an impressive array of setting – from science to studies, business to governmental issues, and beyond. </P><p>
Tryangle Market Intellegence is one of the leading provider of premium market research products and services, as well as industry insights, on the Web.</P><p> We offer research reports from top-notch publishers and refresh our database at regular intervals, in order to furnish you with instantaneous online access to our current database of skilled standpoints on global enterprises, organizations, products, and patterns. By providing sound market research solutions and a long-term vision, we help the clients to identify their goals and make strategic business decisions.Work closely with your team to ensure timely delivery of reports</P>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12 mt-30">
			<img src="<?php echo base_url().'web_assets/' ?>image/about-us.jpg" class="img-responsive">
		</div>
	</div><!--row ends here-->  
</div><!-- main content container ends here--> 
</section>

        <!--  -->
 

    <!-- End content -->


<?php $this->load->view('templates/web_footer') ?>

