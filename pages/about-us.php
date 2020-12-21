<?php

$sql = "SELECT COUNT(oauth_uid) AS `amount` FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $amount = $row['amount'];
  }
} else {
  echo "0 results";
}

$sql = "SELECT COUNT(m_id) AS `amount2` FROM mods";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $amount2 = $row['amount2'];
  }
} else {
  echo "0 results";
}

$sql = "SELECT COUNT(name) AS `amount3` FROM user WHERE premium = '1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $amount3 = $row['amount3'];
  }
} else {
  echo "0 results";
}

?>
<style>
   .hr-theme-slash-2 {
	 display: flex;
}
 .hr-theme-slash-2 .hr-line {
	 width: 100%;
	 position: relative;
	 margin: 15px;
	 border-bottom: 1px solid #fff;
}
 .hr-theme-slash-2 .hr-icon {
	 position: relative;
	 top: 6px;
	 color: #fff;
    font-size: 12px;
}
 
</style>
<section class="pt-2 pb-2 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(/static-assets/img/city-view2.jpg);">
   <div class="container ">
      <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
         <div class="col-12 col-md-12 h-50 ">
            <p class="text-uppercase text-white">FiveMods.net</p>
            <h1 class="font-weight-bold text-white display-1 mt-5">About Us
               <br>
               <div class="hr-theme-slash-2">
                  <div class="hr-line"></div>
                  <div class="hr-icon">&</div>
                  <div class="hr-line"></div>
               </div>
               Corporate Identity</h1>
            <p>
               <a href="#features" class="btn btn-success btn-lg mt-5 mb-5 ">Show me more &gt;</a>
            </p>
         </div>
      </div>
   </div>
</section>
<section class="pt-5 pb-5">
   <div class="container">
      <div class="row">
      <div class="col-12">
         <h2 class="mb-2 text-center">What people say about FiveMods</h2>
         <p class="mb-5 text-center">Feedback is the way to improve. Help us to improve.</p>
      </div>
      <div class="col-12">
         <div class="card-columns">
            <div class="card mb-4">
            <div class="card-body">
               <blockquote class=" ">
                  <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                  <p class=" m-0 text-muted ">
                  Feedback is the best way to show us what you like and what you want to get changed. Quote FiveMods.net and let others know what you think.
                  </p>
                  <footer class="blockquote-footer small p-1">
                  <span class="small">Your Name
                     <cite class="font-weight-bold">YOUR COMPANY</cite>
                  </span>
                  </footer>
               </blockquote>
            </div>
            </div>
            <div class="card mb-4">
            <div class="card-body">
               <blockquote class=" ">
                  <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                  <p class=" m-0 text-muted ">
                  Feedback is the best way to show us what you like and what you want to get changed. Quote FiveMods.net and let others know what you think.</p>
                  <footer class="blockquote-footer small p-1">
                  <span class="small">Your Name
                     <cite class="font-weight-bold">YOUR COMPANY</cite>
                  </span>
                  </footer>
               </blockquote>
            </div>
            </div>
            <div class="card mb-4">
            <div class="card-body">
               <blockquote class=" ">
                  <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                  <p class=" m-0 text-muted ">
                  Feedback is the best way to show us what you like and what you want to get changed. Quote FiveMods.net and let others know what you think.</p>
                  <footer class="blockquote-footer small p-1">
                  <span class="small">Your Name
                     <cite class="font-weight-bold">YOUR COMPANY</cite>
                  </span>
                  </footer>
               </blockquote>
            </div>
            </div>
            <div class="card mb-4">
            <div class="card-body">
               <blockquote class=" ">
                  <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                  <p class=" m-0 text-muted ">
                  Feedback is the best way to show us what you like and what you want to get changed. Quote FiveMods.net and let others know what you think.</p>
                  <footer class="blockquote-footer small p-1">
                  <span class="small">Your Name
                     <cite class="font-weight-bold">YOUR COMPANY</cite>
                  </span>
                  </footer>
               </blockquote>
            </div>
            </div>
            <div class="card mb-4">
            <div class="card-body">
               <blockquote class=" ">
                  <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                  <p class=" m-0 text-muted ">
                  Feedback is the best way to show us what you like and what you want to get changed. Quote FiveMods.net and let others know what you think.</p>
                  <footer class="blockquote-footer small p-1">
                  <span class="small">Your Name
                     <cite class="font-weight-bold">YOUR COMPANY</cite>
                  </span>
                  </footer>
               </blockquote>
            </div>
            </div>
            <div class="card mb-4">
            <div class="card-body">
               <blockquote class=" ">
                  <i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3" aria-hidden="true"></i>
                  <p class=" m-0 text-muted ">
                  Feedback is the best way to show us what you like and what you want to get changed. Quote FiveMods.net and let others know what you think.</p>
                  <footer class="blockquote-footer small p-1">
                  <span class="small">Your Name
                     <cite class="font-weight-bold">YOUR COMPANY</cite>
                  </span>
                  </footer>
               </blockquote>
            </div>
            </div>
         </div>
      </div>
      </div>
   </div>
</section>
<section class="pt-5 pb-5 bg-dark mb-5">
   <div class="container">
      <div class="row text-center">
      <div class="col-md-3 col-6">
         <div class="counter card card-body bg-light rounded">
            <i class="fa fa-code fa-2x text-primary mb-3"></i>
            <h2 class="timer count-title count-number" data-to="7,000" data-speed="1500">7,000+</h2>
            <p class="count-text ">Lines of code</p>
         </div>
      </div>
      <div class="col-md-3 col-6">
         <div class="counter card card-body bg-light rounded">
            <i class="fa fa-users fa-2x text-primary mb-3"></i>
            <h2 class="timer count-title count-number" data-to="<?php echo $amount; ?>" data-speed="1500"><?php echo $amount; ?></h2>
            <p class="count-text ">Total Users</p>
         </div>
      </div>
      <div class="col-md-3 col-6">
         <div class="counter card card-body bg-light rounded">
            <i class="fas fa-upload fa-2x text-primary mb-3"></i>
            <h2 class="timer count-title count-number" data-to="<?php echo $amount2; ?>" data-speed="1500"><?php echo $amount2; ?></h2>
            <p class="count-text">Total Projects</p>
         </div>
      </div>
      <div class="col-md-3 col-6">
         <div class="counter card card-body bg-light rounded">
            <i class="fas fa-award fa-2x text-primary mb-3"></i>
            <h2 class="timer count-title count-number" data-to="<?php echo $amount3; ?>" data-speed="1500"><?php echo $amount3; ?></h2>
            <p class="count-text ">Premium Partners</p>
         </div>
      </div>
      </div>
   </div>
</section>
<section class="pt-3 pb-5">
   <div class="container">
      <div class="  text-center pb-0">
      <div class="row justify-content-center d-flex">
         <div class="col-12 col-md-12 align-self-center">
            <img src="https://cdn.skyfs.net/go/1a7bb524c18bb33bfb32e3d2eded823a.png" alt="" class="img-fluid shadow-lg rounded mt-2 mb-2" style="margin:auto">
            <div class="row mt-5  justify-content-around d-flex">
            <div class="col-md-3">
               <div class="featured-list-icon mt-1 mr-md-2 mb-4">
               </div>
               <h5 class="mb-3">Responsive Structure</h5>
               <p class="font-weight-light">Our website is built completely responsive, mobile, laptop and more.</p>
            </div>
            <div class="col-md-3">
               <div class="featured-list-icon mt-1 mr-md-2 mb-4">
               </div>
               <h5 class="mb-3">Simple and strong design</h5>
               <p class="font-weight-light">FiveMods offers a light and dark mode as well as modern structures.</p>
            </div>
            <div class="col-md-3">
               <div class="featured-list-icon mt-1 mr-md-2 mb-4">
               </div>
               <h5 class="mb-3">Built to stand</h5>
               <p class="font-weight-light">We gave our best to improve the performance</p>
            </div>
            </div>
         </div>
      </div>
      </div>
   </div>
</section>
<section class="mt-3 mb-5 pt-1 pb-1 bg-dark" id="features">
   <div class="container-fluid">
      <div class="row d-flex">
      <div class="col-md-12">
         <div class="card bg-transparent text-light text-center border-0">
            <div class="card-body pt-3 pb-1">
            </div>
         </div>
      </div>
      </div>
   </div>
</section>
<section class="pb-5 pt-5">
   <div class="container">
      <div class="row my-4">
      <div class="col-sm-6">
         <dl class=" ">
            <dd class="mb-5   d-flex justify-content-between">
            <div class="featured-list-icon mt-1 mr-md-2">
               <i class="far fa-2x fa-gem text-primary  rounded p-3"></i>
            </div>
            <div class="featured-list-content pl-4">
               <h3>Feature title</h3>
               <p>
                  Use dropbox to save things in the "cloud" because throwing things away is stressful and this way you don't have to.
               </p>
            </div>
            </dd>
            <dd class="mb-5   d-flex justify-content-between">
            <div class="featured-list-icon mt-1 mr-md-2">
               <i class="far fa-2x fa-gem text-primary  rounded p-3"></i>
            </div>
            <div class="featured-list-content pl-4">
               <h3>Feature title</h3>
               <p>
                  Use dropbox to save things in the "cloud" because throwing things away is stressful and this way you don't have to.
               </p>
            </div>
            </dd>
            <dd class="mb-5   d-flex justify-content-between">
            <div class="featured-list-icon mt-1 mr-md-2">
               <i class="far fa-2x fa-gem text-primary  rounded p-3"></i>
            </div>
            <div class="featured-list-content pl-4">
               <h3>Feature title</h3>
               <p>
                  Use github to share things on the internet then change them. Make things better. Free software? But not as in beer.
               </p>
            </div>
            </dd>
         </dl>
      </div>
      <div class="col-sm-6">
         <dl class=" ">
            <dd class="mb-5   d-flex justify-content-between">
            <div class="featured-list-icon mt-1 mr-md-2">
               <i class="far fa-2x fa-gem text-primary  rounded p-3"></i>
            </div>
            <div class="featured-list-content pl-4">
               <h3>Feature title</h3>
               <p>
                  Use dropbox to save things in the "cloud" because throwing things away is stressful and this way you don't have to.
               </p>
            </div>
            </dd>
            <dd class="mb-5   d-flex justify-content-between">
            <div class="featured-list-icon mt-1 mr-md-2">
               <i class="far fa-2x fa-gem text-primary  rounded p-3"></i>
            </div>
            <div class="featured-list-content pl-4">
               <h3>Feature title</h3>
               <p>
                  Use dropbox to save things in the "cloud" because throwing things away is stressful and this way you don't have to.
               </p>
            </div>
            </dd>
            <dd class="mb-5   d-flex justify-content-between">
            <div class="featured-list-icon mt-1 mr-md-2">
               <i class="far fa-2x fa-gem text-primary  rounded p-3"></i>
            </div>
            <div class="featured-list-content pl-4">
               <h3>Feature title</h3>
               <p>
                  Use github to share things on the internet then change them. Make things better. Free software? But not as in beer.
               </p>
            </div>
            </dd>
         </dl>
      </div>
      </div>
   </div>
</section>
<section class="pt-2 pb-0">
   <div class="container  py-5 ">
      <div class="row    w-100 overflow-hidden">
      <div class="col-md-6 mb-4 text-center  overflow-hidden">
         <div class="card border-0 bg-light">
            <div class="card-body">
            <div class="my-3 py-3">
               <h2 class="display-5">Easy to browse</h2>
               <p class="lead">No big ads, simple and clean modern structure.</p>
            </div>
            <div class="bg-light shadow mx-auto overflow-hidden" style="width: 80%; max-height: 300px; border-radius: 21px 21px 0 0;">
               <img alt="image" class="img-fluid rounded m-0" src="https://cdn.skyfs.net/go/1a7bb524c18bb33bfb32e3d2eded823a.png">
            </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 mb-4 text-center  overflow-hidden">
         <div class="card border-0 bg-light">
            <div class="card-body">
            <div class="my-3 py-3">
               <h2 class="display-5">Login system</h2>
               <p class="lead">No extra account needed. Easy login with Google or Discord.</p>
            </div>
            <div class="bg-light shadow mx-auto overflow-hidden" style="width: 80%; max-height: 300px; border-radius: 21px 21px 0 0;">
               <img alt="image" class="img-fluid rounded m-0" src="https://cdn.skyfs.net/go/54edeea7c8acae777c3260ca85247ba1.png">
            </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 mb-4 text-center  overflow-hidden">
         <div class="card border-0 bg-light">
            <div class="card-body">
            <div class="my-3 py-3">
               <h2 class="display-5">Easy upload</h2>
               <p class="lead">The upload process is fairly easy to use.</p>
            </div>
            <div class="bg-light shadow mx-auto overflow-hidden" style="width: 80%; max-height: 300px; border-radius: 21px 21px 0 0;">
               <img alt="image" class="img-fluid rounded m-0" src="https://cdn.skyfs.net/go/36260f67b56571c677c66ef7ccfc4e56.png">
            </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 mb-4 text-center  overflow-hidden">
         <div class="card border-0 bg-light">
            <div class="card-body">
            <div class="my-3 py-3">
               <h2 class="display-5">Global status</h2>
               <p class="lead">Easy to check if FiveM or FiveMods is having issues.</p>
            </div>
            <div class="bg-light shadow mx-auto overflow-hidden" style="width: 80%; max-height: 300px; border-radius: 21px 21px 0 0;">
               <img alt="image" class="img-fluid rounded m-0" src="https://cdn.skyfs.net/go/e6f711c9f686e00dac74f297205214ac.png">
            </div>
            </div>
         </div>
      </div>
      </div>
   </div>
</section>