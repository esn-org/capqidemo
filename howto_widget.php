<?php

  include(__DIR__ . '/functions.php');
  include(__DIR__ . '/code.php');
  
  print(generateHeader(false));
  print(generateMenu('howto'));
  print(generateSkeletonTop('How To install the widget','Steps for having the widget in our website'));

?>

  <div id="internships-block">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="step-header">Step 1</div>
          <div class="step-text">
            First of all, you have to go to the website of <a href="http://transparencyatwork.org" target="_blank">Transparency At Work</a> and do login in the partners area, to access to your dashboard.
            <div class="alert alert-secondary block-code" role="alert">
              <i class="fa fa-external-link icon" aria-hidden="true"></i><a href="http://transparenciatwork.org" target="_blank">http://transparencyatwork.org/partners</a>
            </div>
          </div>
        </div>
      </div>      

      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="step-header">Step 2</div>
          <div class="step-text">
            Go to the 'Widget' section in the left menu, where you will find the widget code you have to place between the <code>&lt;head&gt;&lt;/head&gt;</code> tags to be loaded. The code looks like this:
            <div class="alert alert-secondary block-code" role="alert">
              <pre class="block-code-text"><code><?php echo codeWidget2();?></code></pre>
            </div>
            Copy that code and put between the mentioned tags in your website.
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="step-header">Step 3</div>
          <div class="step-text">
            In the same page you have copied the code for load the widget as we have explained in the previous step, you will find the different snipet codes for each of the companies that are in the platform registered. Each of them will show the rating and label of this companies. 
            <br>
            For doing that, you can click on <span class="btn btn-primary btn-sm"><i class="fa fa-files-o" aria-hidden="true"></i> Copy Widget Code</span> and the code will be copied into your clibpoard (a success message will be displayed too). This widget code looks like:
            <div class="alert alert-secondary block-code" role="alert">
              <pre class="block-code-text"><code><?php echo codeWidget3();?></code></pre>
            </div>
            <code>ID-COMPANY</code> is unique and is the Widget TW_ID id you can find in the TAW widget page.
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="step-header">Step 4</div>
          <div class="step-text">
            Once the website is loaded, if everything is ok, the snipet code in step 3 will be replaced automatically with the plugin that contains the rating of the company and the label if exists, as we can see in this image
            <img src="./img/widget.png" class="mx-auto d-block" alt="Widget output"/>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- Internship Block -->
  
<?php
  
  print(generateSkeletonBottom());
  print(generateFooter());

?>
