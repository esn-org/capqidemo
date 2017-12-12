<?php

  include(__DIR__ . '/functions.php');
  include(__DIR__ . '/code.php');
  
  print(generateHeader(false));
  print(generateMenu('howto'));
  print(generateSkeletonTop('How To use the API','Steps for having the widget in our website using the CapqiAPI Library'));

?>

  <div id="internships-block">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="step-header">Step 1</div>
          <div class="step-text">
            First of all, you need to have an account created in the website <a href="http://transparencyatwork.org" target="_blank">Transparency At Work</a> to be able to continue.
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
            Then, you need to download and install the CapqiAPI Library from its repository.
            <div class="alert alert-secondary block-code" role="alert">
              <i class="fa fa-github icon" aria-hidden="true"></i><a href="https://github.com/esn-org/capqiApi-library" target="_blank">https://github.com/esn-org/capqiApi-library</a>
            </div>
            Once is downloaded, upload it to your website, open a <code>SSH</code> sesion and go to the path you have uploaded the library. Then, install it via <code>Composer</code>
            <div class="alert alert-secondary block-code" role="alert">
              <i class="fa fa-terminal icon" aria-hidden="true"></i>user$ cd path/to/library
              <br>
              <i class="fa fa-terminal icon" aria-hidden="true"></i>user$ composer install
            </div>
          </div>

        </div>
      </div>      

      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="step-header">Step 3</div>
          <div class="step-text">
            Once the library is installed, we need to load it in the code of our platform. First, we need to include the path to the <code>autoload.php</code> file and initialize the classes we will use.
            <div class="alert alert-secondary block-code" role="alert">
              <pre class="block-code-text"><code><?php echo codeApi1();?></code></pre>
            </div>
            Now we are ready to use the methods and functions included in the library to get the information of the companies using the API
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="step-header">Step 4</div>
          <div class="step-text">
            The first thing we have to do after installing the library, is to Authenticate in the API using the same credentials we use for the TAW website (email and password);
            <br>
            The code for this operation we can use is
            <div class="alert alert-secondary block-code" role="alert">
              <pre class="block-code-text"><code><?php echo codeApi2();?></code></pre>
            </div>
            <br>
            In the <code>$auth</code> object we have after executing the function, we will have all the neccesary information about the API connection, like the access_token we may need for getting the information. We can check if the operation has been successful by executing this function.
            <div class="alert alert-secondary block-code" role="alert">
              <pre class="block-code-text"><code><?php echo codeApi3();?></code></pre>
            </div>
            If the result of this is <code>TRUE</code>, it means we have logged in perfectly. If it is <code>FALSE</code>, there is an error with the login process and we need to check the error messages.
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="step-header">Step 5</div>
          <div class="step-text">
            With the <code>$auth</code> object we have gotten in the previous step, now we can request information to the API easily, like obtain the full list of employers, perform a search or individual information.
            <br>
            First, we need to create an API object and then, get the object of the collection we want to use, in this example, 'Employers'.
            <div class="alert alert-secondary block-code" role="alert">
              <pre class="block-code-text"><code><?php echo codeApi4();?></code></pre>
            </div>
            <br>
            Now, we can use all the methods the class have and interact with the API easily.
            <br>
            If we want to get the list of employers, we can execute
            <div class="alert alert-secondary block-code" role="alert">
              <pre class="block-code-text"><code><?php echo codeApi5();?></code></pre>
            </div>
            And we will get the list of all the employers form the API
            <br>
            <br>
            If we execute
            <div class="alert alert-secondary block-code" role="alert">
              <pre class="block-code-text"><code><?php echo codeApi6();?></code></pre>
            </div>
            we will get the information of the employer with ID <code>internsgopro_be</code>, in a format like
            <div class="alert alert-secondary block-code" role="alert">
              <pre class="block-code-text"><code><?php echo codeApi7();?></code></pre>
            </div>
          </div>
        </div>
      </div>
    
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="step-header">Step 6</div>
          <div class="step-text">
            With the information we get from the API thanks to this library, we can customize the information according to the VIM or the style we are using in our website. 
          </div>
        </div>
      </div>

    </div>
  </div> <!-- Internship Block -->
  
<?php
  
  print(generateSkeletonBottom());
  print(generateFooter());

?>
