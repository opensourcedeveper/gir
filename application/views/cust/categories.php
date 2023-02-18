<!DOCTYPE html>
<html lang="en">
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
.secHead h1{
          margin-top: 151px;
        }
    </style>
</head>
<body>
<div class="mxwidth4">
    <div class="secHead pb-2">
    <h1 class="">CATEGORIES</h1>
    </div>
  </div>
<section class="container pt-4 pb-4">
    <div class="row">
       <?php $icon = "";?>
        <?php foreach ($category as $cat) {
            
            
            switch ($cat['id']) {
                case 1:
                    $icon = "fa-plane";
                    break;
                case 2:
                    $icon = "fa-automobile";
                    break;
                case 3:
                    $icon = "fa-wrench";
                    break;
                case 4:
                    $icon = "fa-cart-arrow-down";
                    break;
                case 5:
                    $icon = "fa-bolt";
                    break;
                case 6:
                    $icon = "fa-glass";
                    break;
                case 7:
                    $icon = "fa-camera";
                    break;
                case 8:
                    $icon = "fa-cog";
                    break;
                case 9:
                    $icon = "fa-flask";
                    break;
                case 10:
                    $icon = "fa-ambulance";
                    break;
                case 12:
                    $icon = "fa-fax";
                    break;
                case 13:
                    $icon = "fa-briefcase";
                    break;
                default:
                   $icon = "fa-wrench";
            }
            
//            echo $cat['id'];?>
            <div class="col-md-6 col-sm-12 pt-2 pb-2">
            <!--<a href="category-details.html">-->
            <a href="<?php echo base_url('categories/'.$cat['slug']) ?>">
              <div class="cat-box">
              <h4  class="pb-1 pl-3 pt-2"><i class="fa <?php echo $icon;?> pr-3"></i> <?php echo $cat['name'];?> </h4>
              <p> <?php echo $cat['description']?> </p>
               <!--<p><?php // echo mb_strimwidth($cat['short_description'], 0, 350, "...");?></p>-->
              </div>
            </a>
            </div>
        <?php } ?>
        
        
        

<!--<div class="col-md-6 col-sm-12 pt-2 pb-2">
    <a href="category-details.html">
    <a href="<?php echo base_url('category/1') ?>">
      <div class="cat-box">
      <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-plane pr-3"></i> Aerospace & Defence </h4>
      <p> As the name only gives an idea, that is two industries: aerospace that is basically all about manufacturing, sales, services of commercial aircraft. And the second is the defence which consists of all the military equipment that a country requires whether it is land, water, as well as sea. This industry will remain to attain growth for the coming years as well. With the introduction of new technologies like artificial intelligence, robotics, etc. have made the demand more for the upcoming decades. Also, it may have many challenges as well like, safety, environment sustainability and effectiveness. Our reports will highlight the in-depth growth factors for the aerospace and defence industry. It will also be having the consumer behaviour as well their shifting demands. </p>
      </div>
    </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
      <a href="<?php echo base_url('category/1') ?>">
    <div class="cat-box">
    <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-automobile pr-3"></i> Automotive & Transportation </h4>
   <p> Past in the 20th century, the automotive industry was being established and since then till now it has been become so vast that it has become a necessity among us. The industry has become stronger with the past times due to the rise in sale for vehicles over the century. The rise in demand for electric vehicles will be the major growth factor for the industry. And with the rise in living standards and economic stability this industry can lead the globe. Our reports are fully focused on these types of dynamic activity in the market. This will help the stakeholders to attain ideas as well as to increase revenue.</p>
    </div>
  </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
      <a href="<?php echo base_url('category/1') ?>">
    <div class="cat-box">
    <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-wrench pr-3"></i> Construction & Manufacturing </h4>
   <p> With the rise in commercialization, the rise in constructional and manufacturing domain is also been triggering. Construction is a domain that can never be stopped as it is growing with the economy. And talking about manufacturing, it is the better half of construction. Our reports will give you a thorough brief out of this industry with suitable strategies as well as growth factors which will help in attaining success in this market domain.</p>
    </div>
  </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
         <a href="<?php echo base_url('category/1') ?>">
    <div class="cat-box">
    <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-cart-arrow-down pr-3"></i> Consumer Goods </h4>
   <p> The consumer goods industry is a place with rapid sales, fluctuating inventory turnovers and durability of the products. This industry has a high competition level and pressure of surviving. The suppliers are having unpredictable pressure in order to sustain in the market and making their products reach out to the consumers. With the rise in technology, manufacturers are in the ease for the supply chain management. Furthermore, the challenges that are given by the trade wars between countries is also hindering the growth of this industry. All these factors are then surveyed, researched and studied by our expertise professionals and then a detailed and systematic report has been created to give the clients all the data that is required.</p>
    </div>
  </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
         <a href="<?php echo base_url('category/1') ?>">
    <div class="cat-box">
    <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-bolt pr-3"></i> Energy & Power </h4>
   <p> The demand for energy will always be on rise, but due to the depletion of natural resources across the globe because of climatic change the government is opting for the green alternatives. And this shift has been supported by the government as well to make the world more efficient in producing the natural resources. The industry has been experiencing a rapid transformation as government has been adopting renewable sources for the human use. Our report will help in identifying growth opportunities for the industries. </p>
    </div>
  </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
         <a href="<?php echo base_url('category/1') ?>">
    <div class="cat-box">
    <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-glass pr-3"></i> Food & Beverages </h4>
   <p> The food & growth industry has been recorded a stable growth rate even after facing economic downturn, when other domains were struggling the food and beverages domain was moving with its normal pace. The major growth factor for this domain is the rise in demand for food with growing time. And with the introduction of new technologies, the industry has been facing a fast rate of growth in the upcoming years. Our reports will provide you with in depth knowledge of consumer behaviour and shifts of preferences.</p>
    </div>
  </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
         <a href="<?php echo base_url('category/1') ?>">
    <div class="cat-box">
    <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-camera pr-3"></i> ICT Media </h4>
   <p> Innovation is the major highlight in Information Technology. And from this only the major companies attract consumers to increase their sales revenue. The technology is a very essential part of our life now. With the rise in sustainable growth the technology will make its way for digital transformation. Our reports provide a way to understand the requirements of any business and will help in achieving the set targets.</p>
    </div>
  </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
         <a href="<?php echo base_url('category/1') ?>">
    <div class="cat-box">
    <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-cog pr-3"></i> Machinery & Equipment </h4>
   <p> As the rise in technological advancements the machinery & equipment sector has been at par since then. As this was the only industry that was a path for the technology to enter into the market domain. The evolution of technology has been a pivotal for shaping the industrial equipment industry. Even though, the industry faced an economic downturn in the past years it is now recovering and is growing at a very fast pace. We offer you the prevalent report with all the market trends along with that we also study challenges and provide our clients with useful recommendations as well.</p>
    </div>
  </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
         <a href="<?php echo base_url('category/1') ?>">
    <div class="cat-box">
    <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-flask pr-3"></i> Materials & Chemicals </h4>
   <p> The products of the chemical & material industry have been consumed in a huge quantity across the globe on daily basis. Apart from the perfumes, soaps, detergents and washes are consumed directly by the consumers. As there is huge competition among the competitor’s innovation plays the vital role in attracting consumers to use their products rather than their rivals and in fulfilling the needs of the consumers. Our report provides strategies to grow and compete in the competitive environment, our reports fulfil your requirements according to your growth targets. </p>
    </div>
  </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
         <a href="<?php echo base_url('category/1') ?>">
    <div class="cat-box">
    <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-ambulance pr-3"></i> Pharmaceuticals & Healthcare </h4>
   <p> This Pharmaceuticals & Healthcare industry is a runner in the dynamic environment. With the use of technology now pocket friendly healthcare apps have been used world widely at a rapid pace. Here, in Global Infi Research we research and study the industry so well that it gets into the minds of the stakeholders and then it starts designing growth strategies. </p>
    </div>
  </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
         <a href="<?php echo base_url('category/1') ?>">
    <div class="cat-box">
    <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-fax pr-3"></i> Semiconductor & Electronics </h4>
   <p> The Semiconductor & Electronics industry is rapidly adopting small sized equipment and also have made the chips size small. Power utilization has always been a major issue in this industry. Also heat issue were also a major hurdle in the growth of this industry from a very long time. Our research reports will provide you with useful insights to overcome these hurdles and make growth in thus market domain.</p>
    </div>
  </a>
    </div>
    <div class="col-md-6 col-sm-12 pt-2 pb-2">
         <a href="<?php echo base_url('category/1') ?>">
      <div class="cat-box">
      <h4  class="pb-1 pl-3 pt-2"><i class="fa fa-briefcase pr-3"></i> Business Opportunities </h4>
     <p> A business opportunity includes the sale or rental of any product, service, equipment, and so on that will allow the buyer-licensee to start a business. Global Infi research provides reports that provide a comprehensive account of a particular sector, with in-depth information, facts and statistics. Our solutions, knowledge and vast database will enable you to have a through and standard experience as well as astounding service towards your requirement. Our business opportunities report allows you to learn about the emerging industries, recent developments, growth factors and future prospect.</p>
      </div>
    </a>
      </div>-->
        
    </div>
</section>

    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap-slider.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/slim.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>