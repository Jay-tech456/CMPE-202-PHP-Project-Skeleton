<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
    <section class = "Cover container" >

      <div class = "front-text">
      <h1> Coffee Ex-Press-O </h1>
    </div>
      </section>

    <section id = "about" class = "container">

      <h1> About Us </h1>
      <h4>

        Founded in 2024, at the height of the massive layoffs, we are a small coffee delivery service that scours the entire internet to find the highest
         quality coffee for our customers. As remote work becomes more prevalent, we've noticed a significant demand for caffeine among our customers, many 
         of whom are reluctant to go through the hassle of ordering coffee through an app. With our service, we deliver coffee straight to your door, requiring 
         no effort on your part. The service is simple: pay a monthly subscription, and our suppliers will deliver your coffee in a mystery container every 2 weeks. As the 
         consumer, you won't have to do anything except wait for it to arrive. Subscriptions are billed every three months.
      </h4>
    </section>


    <section id = "services">

      <h1> Services </h1>
        <div id="cardContainer"> </div> 
    </section>
    

    <section id = "News">

      <h1> News </h1>
      <div id="newsCardContainer"> </div> 
    </section>


    <section id = "contactUs">
      <h1> Contact Us </h1>
      <?php 
        // find the file path 
        $filePath = "contactInfo.txt"; 
        // See if it can locate the file path
        if (!file_exists($filePath)) {
          echo "didnt Find the file"; 
        } else {
          // once the file exist, we need to read it
          $file_handle = fopen($filePath, "r");

          while (!feof($file_handle)) {
            $line = fgets($file_handle);
            echo "<p>". $line . "</p>" ."<br>";
        }

        // Close the file handle
        fclose($file_handle);
        }
      ?>
    </section>

    <script defer src="js/index.js"></script>
  </body>
</html>
