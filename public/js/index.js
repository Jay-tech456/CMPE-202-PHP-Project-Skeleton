
// Data for the card, we can put this in a relation mysql database
const serviceData = [
    { title: "Basic Subscription", content: "At a price of $50 per 3-month cycle, you will get access to coffee ranging from 3 to 5 stars in a secret. This ranges from standard office coffee to the ones you see in your advertisements.", serviceButton: "You are Basic" },
    { title: "The Mid Subscription", content: "At a price of $70 per 3-month cycle, you will get access to coffee ranging from 4 to 5 stars in a secret. This ranges from the ones you see in your advertisements to the ones you see food critics drink.", serviceButton: "You are Mid" },
    { title: "The Math is Mathing Subscription", content: "At a price of $100 per 3-month cycle, you will get access to the coffees that Patrick would recommend as well as other coffee critics.", serviceButton: "You are cool" }
];



const newsData = [
    { Title: "Coffee Ex-Press-O was voted the #1 glowing start-up by the Late-Love Foundation", image: "<img src = 'https://th.bing.com/th/id/OIP.EBb7wB2DxkCqYeQ8J6FqnAHaFu?rs=1&pid=ImgDetMain' alt = 'avatar' />" }, 
    { Title: "Anonymous Food Blogger Patrick has rated the service 6 out of 5 stars", image: "<img src = 'https://th.bing.com/th/id/R.d7a3a9d19d6a4ba7bd53817dea36f65d?rik=iVA%2fxwXjj982bw&riu=http%3a%2f%2fwww.clipartbest.com%2fcliparts%2fpi5%2fxL8%2fpi5xL85LT.png&ehk=ZcL%2fZP273QiXrkxyzB%2fqczby3rQs22O9heJD%2fQa2%2fXM%3d&risl=&pid=ImgRaw&r=0' alt = 'avatar' />" }, 
    { Title: "Coffee Ex-Press-O is expanding to the Southern Bay Area", image: "<img src = 'https://th.bing.com/th/id/R.faaa02d587ef0e17ef1b252bc1e21cbb?rik=e%2bhIv1ruMJFMdg&riu=http%3a%2f%2fimages5.fanpop.com%2fimage%2fphotos%2f26700000%2fSnoopy-peanuts-26798395-1024-768.jpg&ehk=8f2aUgW4gB6Mwghok7aUYxvgWFWSqNZNUzAXL5AeweM%3d&risl=&pid=ImgRaw&r=0' alt = 'avatar' />" }
];

function createCard(title, content, serviceButton ="Click Here for more ") {

    const cardDiv = $('<div>').addClass('card');

    const titleElement = $('<h2>').html(title);
    const contentElement = $('<p>').html(content);
    const button = $('<button>').html(serviceButton);

    cardDiv.append(titleElement, contentElement, button);

    return cardDiv;
}


$(document).ready(function() {
    const cardContainer = $('#cardContainer');
    const newsContainer = $('#newsCardContainer');

    $.each(serviceData, function(index, data) {
        const card = createCard(data.title, data.content, data.serviceButton);
        cardContainer.append(card);
    });

    $.each(newsData, function(index, data) {
        const card = createCard(data.Title, data.image);
        newsContainer.append(card);
    });
});

function userLogin() { 

   let userName = window.prompt("Please enter Username")
   let password = window.prompt("Please enter password");  

//    console.log(userName); 
//    console.log(password); 
    // exception handler loop over here
   // Sending input data to PHP script using AJAX
    // use an async javascript function. 
   $.ajax({      
    
        // sending a post request becasue it will scan through login credentials
        type:"POST", 
        url: "../process.php",              // verify the path in the public file

        data: {                             // sending it as a javascript object
            userName: userName, 
            password: password
        }, 

        success: function (res){ 
            
            alert(res); 

            $('#login').text(userName); 
        }
   })
}


