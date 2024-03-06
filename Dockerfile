FROM php:apache

# Update package lists and upgrade installed packages
RUN apt-get update && apt upgrade -y --no-install-recommends \
        && rm -rf /var/lib/apt/lists/*

#Set the working diretory inside the container
WORKDIR /app

#copy everything in the current directory to the working directory in the container
COPY . .

#Expose port 3000 for the PHP server
EXPOSE 3000

#Set the command to run the PHP built-in server serving index.php
CMD ["php", "-S", "0.0.0.0:3000", "-t", "public/"]


#echo this in order to devug later .....
