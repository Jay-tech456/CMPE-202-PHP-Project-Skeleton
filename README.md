 
//************ To Run the application ***************** // 

//Step 1: Download Docker Desktop 

    https://www.docker.com/products/docker-desktop/

Step 2: Build the Docker Container
Using your terminal or command prompt, navigate to the directory containing the docker file: 
 <br>
    docker build -t run-php-application .

 <br> (I personally use Bash in VS code)

Step 3: Run the Docker Image
Once the Docker image is successfully built, run it using the following command: 
  <br>  
    docker run -p 3000:3000 run-php-application
    
    
Step 4: 
Navigate to your browser and type in: 
<br>
    http://localhost:3000
    
Step 5: 
    Hello world should be displayed
    



Side note: 
    You need to repeate Step 2 and Step 3 if there are any changes to the code.
