
// Data for the card, we can put this in a relation mysql database
const serviceData = [
    { title: "Basic Subscription", content: "At a price of $50 per 3-month cycle, you will get access to coffee ranging from 3 to 5 stars in a secret. This ranges from standard office coffee to the ones you see in your advertisements.", serviceButton: "You are Basic" },
    { title: "The Mid Subscription", content: "At a price of $70 per 3-month cycle, you will get access to coffee ranging from 4 to 5 stars in a secret. This ranges from the ones you see in your advertisements to the ones you see food critics drink.", serviceButton: "You are Mid" },
    { title: "The Math is Mathing Subscription", content: "At a price of $100 per 3-month cycle, you will get access to the coffees that Patrick would recommend as well as other coffee critics.", serviceButton: "You are cool" }
];



const newsData = [
    { Title: "Coffee Ex-Press-O was voted the #1 glowing start-up by the Late-Love Foundation", image: "coffee" }, 
    { Title: "Anonymous Food Blogger Patrick has rated the service 6 out of 5 stars", image: "turtle" }, 
    { Title: "Coffee Ex-Press-O is expanding to the Southern Bay Area", image: "mid" }
];

function createCard(title, content, serviceButton ="Click Here for more ") {
    const cardDiv = document.createElement('div');
    cardDiv.classList.add('card');


    const titleElement = document.createElement("h2");
    titleElement.innerHTML = title;

    const contentElement = document.createElement('p');
    contentElement.innerHTML = content;
    

    const button = document.createElement("button");
    button.innerHTML = serviceButton;

    cardDiv.appendChild(titleElement);
    cardDiv.appendChild(contentElement);
    cardDiv.appendChild(button);

    return cardDiv;
}





const cardContainer = document.getElementById("cardContainer");

serviceData.forEach(data => {
    const card = createCard(data.title, data.content, data.serviceButton);
    cardContainer.appendChild(card);
});


const newsContainer = document.getElementById("newsCardContainer");
newsData.forEach(data =>{ 
    
const card = createCard(data.Title, data.image); 
newsContainer.appendChild(card)

})
