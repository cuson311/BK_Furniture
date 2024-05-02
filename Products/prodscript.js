//Data for cards
const cardData = [
    {
        class: "pro sofa",
        id: "sofa1",
        name: "Product 1",
        imageSrc: "/img/sofa/sofa-1.jpg",
        rating: 5,
        price: "1$"
    },
    {
        class: "pro sofa",
        id: "sofa2",
        name: "Product 2",
        imageSrc: "/img/sofa/sofa-2.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro sofa",
        id: "sofa3",
        name: "Product 3",
        imageSrc: "/img/sofa/sofa-3.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro giuongngu",
        id: "giuongngu1",
        name: "Product 4",
        imageSrc: "/img/giuongngu/giuongngu-1.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro giuongngu",
        id: "giuongngu2",
        name: "Product 5",
        imageSrc: "/img/giuongngu/giuongngu-2.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro giuongngu",
        id: "giuongngu3",
        name: "Product 6",
        imageSrc: "/img/giuongngu/giuongngu-3.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro tuquanao",
        id: "tuquanao1",
        name: "Product 7",
        imageSrc: "/img/tuquanao/tuquanao-1.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro tuquanao",
        id: "tuquanao2",
        name: "Product 8",
        imageSrc: "/img/tuquanao/tuquanao-2.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro tuquanao",
        id: "tuquanao3",
        name: "Product 9",
        imageSrc: "/img/tuquanao/tuquanao-3.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro tubep",
        id: "tubep1",
        name: "Product 10",
        imageSrc: "/img/tubep/tubep-1.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro tubep",
        id: "tubep2",
        name: "Product 11",
        imageSrc: "/img/tubep/tubep-2.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro tubep",
        id: "tubep3",
        name: "Product 12",
        imageSrc: "/img/tubep/tubep-3.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro bantrangdiem",
        id: "bantrangdiem1",
        name: "Product 13",
        imageSrc: "/img/bantrangdiem/bantrangdiem-1.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro bantrangdiem",
        id: "bantrangdiem2",
        name: "Product 14",
        imageSrc: "/img/bantrangdiem/bantrangdiem-2.jpg",
        rating: 5,
        price: "2$"
    },
    {
        class: "pro bantrangdiem",
        id: "bantrangdiem3",
        name: "Product 15",
        imageSrc: "/img/bantrangdiem/bantrangdiem-3.jpg",
        rating: 5,
        price: "2$"
    }
];

// Parent container for the cards
const cardContainer = document.getElementById("pro-container");

// Create and append cards
cardData.forEach(item => {
    const card = document.createElement("div");
    card.className = item.class; // Set class name for the card
    card.id = item.id; // Set the ID of the card
    
    card.innerHTML = `
        <img src="${item.imageSrc}" alt="image">
        <div class="des">
            <span>${item.name}</span>
            <h5>${item.name}</h5>
            <div class="star">
                ${'<i class="fas fa-star"></i>'.repeat(item.rating)}
            </div>
            <h4>${item.price}</h4>
        </div>
        <a href="#" class="btn btn-outline-dark">Xem chi tiết</a>
    `;
    
    cardContainer.appendChild(card);
});
