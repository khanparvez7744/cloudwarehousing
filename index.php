<?php require_once("conn.php")?>


<!-- <?php
    $sql = "UPDATE counter SET visits = visits+1 WHERE id = 1";
    $conn->query($sql);

    $sql = "SELECT visits FROM counter WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        echo "no results";
    }

    $conn->close();

?> -->


<?php
include("header.php");
?>

<section class="homeBnrContent">
  <div class="row">
    <div class="col s12">
      <h2 class="montserratBold beflexH2">Be Flexible</h2>
      <h2 class="montserratSemibold">Focus on your core strengths,<br>
        We will handle the rest !
      </h2>
      <p>Convert all your fixed costs to variable cost with <br>
        latest state of the art technology</p>
      <a href="#lifeSec" class="btn">READ MORE</a>
    </div>
    <div class="col s12">
      <img src="images/manRocket.png" alt="Rocket" class="responsive-img right">
    </div>
  </div>
</section>
<section class="lifeSec" id="lifeSec">
  <div class="row">
    <div class="col s12 center">
      <h3 class="montserratSemibold lifeCycle white-text">Life Cycle OF An <span class="montserratBold">Entrepreneur</span></h3>
      <img src="images/lifeCycle.png" alt="Entrepreneur" class="responsive-img">
    </div>
  </div>
</section>
<section class="flexSec">
  <div class="row">
    <div class="col m5 s3 center">
      <img src="images/wanGo.png" id="" alt="Truck" class="responsive-img">
    </div>
    <div class="col m6 s9">
      <h3 class="montserratBold">Would You like to go
        variable in SCM costs?
      </h3>
      <p class="text-justify">All your supply chain, warehousing, distribution cost
        can be flexible. You Pay Per Use and all your damages,
        pilferage and returns are risk free.
        You also get a chance to go with the latest technology
        as it when it changes.</p>
      <p class="goBigPara montserratBold">Cloudwarehousing.in intends to become SCM partners for such entrepreneurs who
        have a strong desire to</p>
      <h5 class="goBig montserratBold">Go Big.</h5>
    </div>
    <div class="col m1 s0"></div>
  </div>
</section>
<section class="clientSec">
  <div class="container">
    <div class="row">
      <h2 class="montserratBold goFlex text-blue">Yes!! Go Flexible....</h2>
      <div class="col m7 s12">
        <p>Our expertise and experience can enhance value in the following domains, let’s look at flexible
          CloudWarehousing.in</p>
      </div>
    </div>
    <div class="col s12 center">
      <img src="images/cloudMan.png" alt="cloud Man" class="responsive-img">
    </div>
  </div>
</section>
<section class="featureSec white-text">
  <h1 class="montserratBold center">Product Features</h1>
  <section id="showFeature" class="showFeature">
  <div class="row">
    <div class="col m4 s12">
      <h3 class="montserratBold">MIS & Analytics </h3>
      <p class="text-justify">A transparent live MIS. It will help to design and develop the existing system and also to analyze the
        data and process in order to make a report and its respective business.
      </p>
    </div>
    <div class="col m4 s12">
      <h3 class="montserratBold">HHT based operations</h3>
      <p class="text-justify">All the operation process is handled through HHT (Hand held terminal), whether it is putaway, picking
        or Inventory consolidation.</p>
    </div>
    <div class="col m4 s12">
      <h3 class="montserratBold">Pay Per Use</h3>
      <p class="text-justify">Pay per use for Inbound / Outbound shipments. The charges are for the actual usage of the services. If
        there is no sale then are nil charges for the day.</p>
    </div>
    <div class="col m4 s12">
      <h3 class="montserratBold">Handling Returns & RTO </h3>
      <p class="text-justify">Handling Returns & RTO reduction through AI based tools.</p>
    </div>
    <div class="col m4 s12">
      <h3 class="montserratBold">Regional Inventory</h3>
      <p class="text-justify">We provide regional warehouse for solid and affordable distribution.</p>
    </div>
    <div class="col m4 s12">
      <h3 class="montserratBold">Accounts & GST consolidation </h3>
      <p class="text-justify">A concise monthly record for accounts & GST consolidation.</p>
    </div>
  </div>
</section>
  <section id="hideFeature" class="hideFeature">
    <div class="row">
      <div class="col m4 s12">
        <h3 class="montserratBold">Inhouse WMS </h3>
        <p class="text-justify">Our Inhouse WMS can cater for all your B2B needs. There are some challenges in a typical E-commerce
          WMS or an order processing software. At CloudWarehousing.in we understand the B2B needs of an entrepreneur. We
          take care of all these dynamics through our custom-built WMS.</p>
      </div>
      <div class="col m4 s12">
        <h3 class="montserratBold">Handling all market platforms </h3>
        <p class="text-justify">We can handle all the market platforms like Amazon, Flipkart, Ajio, Paytm, TataCliq, your own
          website. Each of this platform has a different methodology for order processing and fulfillment. They have
          different cut off times for dispatches and varied labelling methods. At CloudWarehousing.in all market
          platforms can be handled with ease.</p>
      </div>
      <div class="col m4 s12">
        <h3 class="montserratBold">All your damages & pilferages are derisked.</h3>
        <p class="text-justify">Handling large inventory is a specialized skill. It is easy to gain expertise for handling smaller
          volumes over a period of time. But growth demands an increase in Inventory size. Adding more inventory than
          desired in a smaller space leads to damages, pilferages or simply an inventory which is not traceable when
          demand comes. All Cloud warehouse challenges are taken care of even better, an entrepreneur is compensated on
          even a single default.</p>
      </div>
      <div class="col m4 s12">
        <h3 class="montserratBold">Pay only for the Inventory you keep </h3>
        <p class="text-justify">With 100% accountability and traceability of each and every piece of inventory. This helps you to
          expand your inventory as per your convenience without bothering for a smaller or a bigger warehouse. Actually,
          one can even have a warehouse for one cubic foot of inventory.</p>
      </div>
      <div class="col m4 s12">
        <h3 class="montserratBold">Order management and SLA breaches </h3>
        <p class="text-justify">This is our responsibility that there will be no worries on account of SLA breaches, or a new method
          of order management with CloudWarehousing.in. Our expertise which is always in sync with the latest
          methodology ensures nil breaches.</p>
      </div>
      <div class="col m4 s12">
        <h3 class="montserratBold">We handle all the manpower challenges </h3>
        <p class="text-justify">All the peaks & troughs of the sale & lean period. It is observed that the manpower required during
          peak sales period versus the lean period is almost a ratio of 1:4. This becomes a difficult proposition for an
          entrepreneur to control costs. Also, to find a trained manpower in a short period of time is also a tough
          assignment. An entrepreneur is relieved of these challenges in a CloudWarehousing.in</p>
      </div>
    </div>
  </section>
  <div class="row center">
    <button class="btn waves-effect waves-light text-capitalize featureBtn" id="featureBtn">Read More</button>
    <button class="btn waves-effect waves-light text-capitalize featureBtn" id="feaHideBtn">Hide</button>
  </div>
  <div class="row center">
    <div class="col s12 ">
      <h5 class=""> <mark class="featuHigh montserratBold">All above features through a simple transparent
          pricing.</mark> </h5>
    </div>
  </div>
</section>
<section class="pricingSec" id="serviceSec">
  <h1 class="montserratBold center text-blue">Services offered & Pricing structure</h1>
  <p class="center pricingPara">The pricing is simple, easy and incorporates all economies of scale for a big player.
  </p>
  <div class="row">
    <div class="col m6 s12 pricingLeft">
      <ul>
        <li class="tecPricing">
          <h3 class="montserratBold">Tech support</h3>
          <p class="">Through Unicommerce, Vinculum, PDS WMS, any other platform.</p>
        </li>
        <li class="invenPricing">
          <h3 class="montserratBold">Inventory management</h3>
          <p class="">Pricing is per piece/Cft per day. Rates including all infrastructure costs.</p>
        </li>
        <li class="rtrnPricing">
          <h3 class="montserratBold">Returns management</h3>
          <p class="">Pricing is per piece. Services include Returns, claim filing, QC.</p>
        </li>
      </ul>
    </div>
    <div class="col m6 s12 pricingRight">
      <ul>
        <li class="inboPricing">
          <h3 class="montserratBold">Inbound management</h3>
          <p class="">Pricing is per piece/ Box.</p>
        </li>
        <li class="outbPricing">
          <h3 class="montserratBold">Outbound management</h3>
          <p class="">Pricing is per piece. Services include Picking, Packing, Invoicing, Manifest & dispatch.</p>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="fulImgSec">
  <div class="row">
    <h5 class="montserratSemibold weAlso center">We also take care of all your distribution needs through our in-house
    </h5>
    <h2 class="montserratBold center text-blue brainHdng">FulfillZy (A Courier Aggregator)</h2>
  </div>
  <div class="row FulfillzyRow">
    <div class="col m4 s12">
      <h2 class="montserratBold white-text brainSubHdng">Fulfillzy</h2>
      <p class="white-text text-lighten-4">is a global logistics platform that
        fulfills ecommerce orders for
        direct-to-consumer brands</p>
    </div>
    <div class="col m4 s12"></div>
    <div class="col m4 s12"></div>
  </div>
  <div class="row">
    <div class="col s12 center">
      <img src="images/threeBox.png" alt="Fulfillzy" class="responsive-img threeBoxImg">
      <div class="row center">
      <h3 class="montserratSemibold text-blue weProvideH3">What We Provide</h3>
      <img src="images/weProvide.png" alt="services" class="responsive-img hexImg">
    </div>
  </div>
</section>
<section class="fulfilSec">
  <div class="row center">
    <img src="images/mapHow.png" alt="map" class="responsive-img mapHow">
  </div>
</section>
<section class="factSec center">
  <img src="images/factCircle.png" alt="fact" class="responsive-img">
</section>
<section class="clVisit">
  <div class="row">
    <div class="col m4 s12 center">
      <img src="images/visit.png" alt="visit" class="responsive-img" id="clientVisit">
      <div class="visitCircle">
        <p class="visitNumber montserratBold text-blue counter"><?php print $visits; ?></p>
        <p class="visitText montserratBold text-blue">Visitors</p>
      </div>
      <h5 class="montserratBold">Client Visits</h5>
    </div>
    <div class="col m4 s12 center">
      <img src="images/shipment.png" alt="shipment" class="responsive-img" id="shipmentHndl">
      <div class="handledCircle">
        <p class="handledNumber montserratBold text-blue counter">20</p>
        <p class="handledText montserratBold text-blue">Million</p>
      </div>
      <h5 class="montserratBold">No. of shipments handled</h5>
    </div>
    <div class="col m4 s12 center">
      <img src="images/visit.png" alt="visit" class="responsive-img" id="shipmentHour">
      <div class="hourCircle">
        <p class="hourNumber montserratBold text-blue counter">3500</p>
      </div>
      <h5 class="montserratBold">No. of Shipments in <br> last one hour</h5>
    </div>
  </div>
</section>
<section class="servingSec">
  <div class="row">
    <div class="col s12">
      <h2 class="Clients Serving montserratBold text-blue">Client Serving</h2>
    </div>
    <div class="col s12">
      <div class="owl-carousel owl-theme">
        <div class="item card z-depth-3 center">
          <img src="images/benetonn.png" class="responsive-img" alt="benetonn">
        </div>
        <div class="item card z-depth-3 center">
          <img src="images/asort.png" class="responsive-img" alt="asort">
        </div>
        <div class="item card z-depth-3 center">
          <img src="images/adidas.png" class="responsive-img" alt="adidas">
        </div>
        <div class="item card z-depth-3 center">
          <img src="images/cult.png" class="responsive-img" alt="cult">
        </div>
        <div class="item card z-depth-3 center">
          <img src="images/emami.png" class="responsive-img" alt="emami">
        </div>
        <div class="item card z-depth-3 center">
          <img src="images/lencekart.png" class="responsive-img" alt="lencekart">
        </div>
        <div class="item card z-depth-3 center">
          <img src="images/reebok.png" class="responsive-img" alt="reebok">
        </div>
        <div class="item card z-depth-3 center">
          <img src="images/sassafras.png" class="responsive-img" alt="sassafras">
        </div>
        <div class="item card z-depth-3 center">
          <img src="images/jshoes.png" class="responsive-img" alt="jshoes">
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script>
        $(document).ready(function(){
            $('.counter').counterUp({
                delay:10,
                time:1000
            });
        });
</script>
<?php
include("footer.php");
?>