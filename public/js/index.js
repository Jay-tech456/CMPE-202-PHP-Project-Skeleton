
// Data for the card, we can put this in a relation mysql database
const serviceData = [
    { title: "Basic Subscription", content: "Basic Benefits", serviceButton: "You are Basic"},
    { title: "MidSubscription", content: "Mid Benefits", serviceButton: "You are Mid"},
    { title: "Prenium Subscription", content: "One hawt man Benefits", serviceButton: "You are cool"}
];


function createCard(title, content, serviceButton ="Optional") {
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