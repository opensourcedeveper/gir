<!DOCTYPE html>
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <meta name="title" content="<?php echo $reports_data['metaTitle']?>">
    <meta name="description" content="<?php echo $reports_data['metaDescription']?>">
    <meta name="keywords" content="<?php echo $reports_data['metaKeyword']?>">-->
<!--    <link rel="stylesheet" href="<?php // echo base_url('assets/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php // echo base_url('assets/dist/css/style.css') ?>">-->
    
<!--     <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>-->
     
<!--    <title><?php // echo $reports_data['title']?>
    </title>
</head>-->
<!--<body>-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="./css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <title>GI Research</title>
    <style>
        
        .pthTitle{
            display: none;
        }
        /* .secHead h1{
          margin-top: 151px;
        } */
        .deslist li a { background:#0056b3; color:#fff}
        .deslist li:nth-child(2) a { background:#fff; color:#000 }
        .sr-forms a:nth-child(1) { color:#fff}
        .sr-forms a { color:#000}
        .deslist li a, .sr-forms a { display:block; border: 1px solid #000; margin-bottom:15px; padding:10px; text-align:center}
    </style>
</head>
<body>
<div class="container mt-4">
  <div class="secHead pb-2">
  <h1 class=""><?php echo $reports_data['metaKeyword']?></h1>
  </div>
</div>


<section class="reportTitle pt-3 pb-5" >
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bgtrans">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Report</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo mb_strimwidth($reports_data['title'], 0, 100, "...");?></li>
      </ol>
    </nav>
    <div class="row">
      <div class="col-md-9 col-sm-12">
               <!-- <h1 class="pt-3 pb-3 op05"><?php echo $reports_data['metaKeyword']?></h1> -->
        <h2 class=""><?php echo $reports_data['title']?></h2>
        <!--<h1 class="op05"><?php echo $reports_data['title']?></h1>-->
        <!-- <p class="op05">Pages : <?php echo $reports_data['pages']?></p> -->
      </div>
      <div class="col-md-3 col-sm-12">
        
        <div>
          <p class="price"><i class="fa fa-dollar"></i><?php echo $reports_data['singleUserAmount']?></p>
          <!--<p class="buybtn"><a href="buy-now" class="clrfff">BUY NOW</a></p>-->
          <p class="buybtn"><a href="<?php echo base_url('buy-now/'.$reports_data['id'])?>" class="clrfff">BUY NOW</a></p>
          <!--<a href="<?php // echo base_url('buy-now/'.$report['id'])?>">Buy now</a>-->
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container singlRp">
  <div class="row pt-5 pb-5">
    <div class="col-lg-3 col-md-12 col-sm-12">
      <!-- <ul id="tabs" class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a id="rpDesc" href="#reportDescription" class="nav-link active" data-toggle="tab" role="tab">Description</a>
        </li>
        <li class="nav-item">
            <a id="rpToc" href="#reportToc" class="nav-link" data-toggle="tab" role="tab">Table of Content</a>
        </li>
      
    </ul> -->
    <!-- <div class="rp-include">
      <h3>Report Includes</h3>
      <ul>
        <li><i class="fa fa-check"></i>Statistics</li>
      </ul>
    </div> -->
    <div style="position: sticky; top: 0;">
    <ul  class="deslist list-unstyled mb-3 bx-shadow" >
      <li class="">
          <a  href="#reportDescription" class="scroll-links active">DESCRIPTION</a>
      </li>
      <li class="nav-item">
          <a href="#reportToc" class="scroll-links">TABLE OF CONTENT</a>
      </li>
    
  </ul>
    <div class="p-3 mt-4" style="background-color: #EEF3F9;">
      <h5 class="">This Report includes</h5>
      <ul class="list-unstyled rp-includes pt-3 pb-3">
        <li><i class="fa fa-check"></i>Executive Summary</li>
        <li><i class="fa fa-check"></i>Infographic Overview</li>
        <li><i class="fa fa-check"></i>Interactive Databook</li>
        <li><i class="fa fa-check"></i>Report PDF</li>
        <li><i class="fa fa-check"></i>PowerPoint Presentation</li>
        <li><i class="fa fa-check"></i>   Previous Editions</li>

      </ul>
  </div>
  <div class="sr-forms mt-1 pt-2 pb-2">
      <!--<a href="<?php // echo base_url('reports/sample/'.$reports_data['id'])?>" style="background-color: #0063FA;text-align:center;">SAMPLE REQUEST <i class="fa fa-external-link"></i></a>-->
      <a href="<?php echo base_url('request-sample/'.$reports_data['id'])?>" style="background-color: #0063FA;text-align:center;">SAMPLE REQUEST <i class="fa fa-book"></i></a>
      <!--<a href="<?php // echo base_url('reports/custom/'.$reports_data['id'])?>" style="background-color: #FD6500;text-align:center;">MAKE IT CUSTOM <i class="fa fa-external-link"></i></a>-->
      <a href="<?php echo base_url('custom-research/'.$reports_data['id'])?>" style="background-color: #FD6500;text-align:center;">MAKE IT CUSTOM <i class="fa fa-pencil"></i></a>
      <a href="<?php echo base_url('reports/enquiry/'.$reports_data['id'])?>" class="bg-prime" style=";text-align:center;">ENQUIRY <i class="fa fa-phone"></i></a>
   
  </div>

</div>
    </div>
    <div class="col-lg-9 col-md-12 col-sm-12">
      <!-- <div id="content" class="tab-content" role="tablist">
        <div id="reportDescription" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="rpDesc">
            <div class="card-header" role="tab" id="heading-A">
                <h5 class="mb-0">
                  
                    <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                       Description
                    </a>
                </h5>
            </div>
  
        
            <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                <div class="card-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit rem ea saepe distinctio adipisci ullam quam enim! Pariatur, temporibus obcaecati. Ea eum facilis debitis veniam maiores incidunt voluptates expedita officiis aperiam. Natus, sapiente. Expedita assumenda voluptatum possimus minus laborum alias nihil tempora, officiis quasi tenetur neque cumque consequatur dolore modi recusandae voluptatibus ipsum libero unde a dolores nostrum accusantium architecto sint? Deserunt laudantium adipisci atque ut quae commodi ab porro veritatis deleniti saepe itaque voluptatibus mollitia a reiciendis recusandae ex, quod dolores cumque eius facilis numquam amet accusantium! Earum odit, quidem exercitationem eveniet dolore iure aspernatur? Voluptatem, facere. Tenetur, dolor?
                </div>
            </div>
        </div>
  
        <div id="reportToc" class="card tab-pane fade" role="tabpanel" aria-labelledby="rpToc">
            <div class="card-header" role="tab" id="heading-B">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                      Table of Content
                    </a>
                </h5>
            </div>
            <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                <div class="card-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae rem veniam incidunt impedit vel ipsam error accusantium, unde temporibus explicabo quos ipsum neque expedita iusto omnis magni aliquam quibusdam corporis magnam, eveniet dolor quis illum? Earum doloremque id ipsam perferendis architecto dolore nam soluta, numquam consequuntur ipsa tempora veritatis beatae saepe! Beatae repudiandae officia fugit harum et corporis, blanditiis nemo sed minus. Quia ut libero perspiciatis, laudantium veritatis cum voluptas.
                </div>
            </div>
        </div>
  
    </div> -->
    <div class="rListrpTitle bx-shadow p-3">
    <h5 class=" pb-2"  id="reportDescription">Report Description</h5>
    <p><?php echo $reports_data['description']?></p>
    <h5 class="pt-4 pb-2"  id="reportToc">Table of Content</h5>
   <!--<textarea type="text" class="ckeditor" name="tableOfContent" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php // echo $reports_data['tableOfContent']; ?></textarea>-->
    <p><?php echo $reports_data['tableOfContent']?></p>
    </div>
    <!--<a href="report.html">-->
<!--                                    <div class="rListrpTitle" name="tableOfContent">
                                        <h2><?php // echo $reports_data['description']?></h2>
                                        <p><?php // echo $reports_data['tableOfContent']?></p>
                                        <p class="p-0"><i class="fa fa-dollar f16"></i> <span class="f24 font-weight-bold ls-1  text-success"><?php // echo $reports_data['singleUserAmount']?></span><span class="op05">(Excl. Tax)</span></p>
                                    </div>-->
                                <!--</a>-->
    <?php if(count($faqs_data) > 0) { ?> 
    <h5 class="p-4 font-weight-bold">FAQs</h5>
    <div class="panel-group" id="help-accordion-1">
              
        <?php foreach ($faqs_data as $faq) { ?>            
        
            <div class="panel cust-panel  panel-default panel-help">
            <a href="#gifaq<?php echo $faq['id']; ?>" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h2> <?php echo $faq['question']; ?></h2>
              </div>
            </a>
            <div id="gifaq<?php echo $faq['id']; ?>" class="collapse">
              <div class="panel-body">
                <p><?php echo $faq['answer']; ?></p> 

              </div>
            </div>
          </div>
        
        <?php } ?>
        
        
    </div>
    <?php } ?>
    </div>
  </div>




</div>
<!-- faqs -->




    <!--  -->
<!-- Why Choose us -->
<section class="sectionWcu mt-5 mb-5">
 

  <div class="container pb-4">

     <div class="container">
       <div class="row pt-5">
         <div class="col-md-5 col-sm-12 align-self-center">
         <h4 class="font-weight-bold ls-1 prime-color">What should be an effective go-to-market strategy that delivers exceptional results?</h4>
         <!-- <h5>Lorem ipsum dolor sit amet lorem</h5> -->
      
         </div>
         <div class="col-md-7 col-sm-12 align-self-center">
           <div>
             <img src="<?php echo base_url("assets/images/cust/img/why-choose-us.png")?>" alt="" class="w-100">
           </div>
         </div>
       </div>
     </div>     
</div>
</section>
<!--  -->

        
<script>
    
document.querySelector( '#tableOfContent' ).style.display = 'none';



</script>

<script type="application/ld+json">
{
	"@context": "https://schema.org/",
	"@type": "Product",
	"name": "<?php echo $reports_data['title']?>",
	"image": "Category Image",
	"sku" : "<?php echo $reports_data['category']?>",
	"mpn": "<?php echo $reports_data['id']?>",
	"description": "<?php echo $reports_data['description']?>",
	"productID": "<?php echo $reports_data['id']?>",
	"brand": 
	{
			"@type": "Organization",
			"legalName": "Company Name"
	},
	"review": 
	{
		"@type": "Review",
		"reviewRating": 
		{
				"@type": "Rating",
				"ratingValue": "4.9",
				"bestRating": "5"
		},
		"author": 
		{
				"@type": "Organization",
				"name": "admin"
		}
	},
	"aggregateRating": 
	{
				"@type": "AggregateRating",
				"ratingValue": "4.9",
				"reviewCount": "19"
	},
	"offers": 
	{
	  "@type": "Offer",
	  "url": "Report URL",
	  "priceCurrency": "USD",
	  "price": "<?php echo $reports_data['singleUserAmount']?>",
	  "priceValidUntil": "2021/08/26",
	  "itemCondition": "https://schema.org/NewCondition",
	  "availability": "https://schema.org/InStock",
	  "seller": {
	  "@type": "Organization",
	  "name": "Company Name"
	  }
	}
}
</script>

<!--</body>-->
<!--</html>-->