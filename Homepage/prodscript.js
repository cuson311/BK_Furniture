//Data for the carousel items and cards
const carouselData = [
    {
        items: [
            {
                class: "card",
                id: "sofa1",
                imageSrc: "/img/sofa/sofa-1.jpg",
                title: "Bộ bàn ghế sofa",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/sofa.php"
            },
            {
                class: "card d-none d-md-block",
                id: "sofa2",
                imageSrc: "/img/sofa/sofa-2.jpg",
                title: "Bộ bàn ghế sofa",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/sofa.php"
            },
            {
                class: "card d-none d-md-block",
                id: "sofa3",
                imageSrc: "/img/sofa/sofa-3.jpg",
                title: "Bộ bàn ghế sofa",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/sofa.php"
            }
        ]
    },
    {
        items: [
            {
                class: "card",
                id: "giuongngu1",
                imageSrc: "/img/giuongngu/giuongngu-1.jpg",
                title: "Giường ngủ",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/giuongngu.php"
            },
            {
                class: "card d-none d-md-block",
                id: "giuongngu2",
                imageSrc: "/img/giuongngu/giuongngu-2.jpg",
                title: "Giường ngủ",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/giuongngu.php"
            },
            {
                class: "card d-none d-md-block",
                id: "giuongngu3",
                imageSrc: "/img/giuongngu/giuongngu-3.jpg",
                title: "Giường ngủ",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/giuongngu.php"
            }
        ]
    },
    {
        items: [
            {
                class: "card",
                id: "tuquanao1",
                imageSrc: "/img/tuquanao/tuquanao-1.jpg",
                title: "Tủ quần áo",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/tuquanao.php"
            },
            {
                class: "card d-none d-md-block",
                id: "tuquanao2",
                imageSrc: "/img/tuquanao/tuquanao-2.jpg",
                title: "Tủ quần áo",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/tuquanao.php"
            },
            {
                class: "card d-none d-md-block",
                id: "tuquanao3",
                imageSrc: "/img/tuquanao/tuquanao-3.jpg",
                title: "Tủ quần áo",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/tuquanao.php"
            }
        ]
    },
    {
        items: [
            {
                class: "card",
                id: "tubep1",
                imageSrc: "/img/tubep/tubep-1.jpg",
                title: "Tủ bếp",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/tubep.php"        
            },
            {
                class: "card d-none d-md-block",
                id: "tubep2",
                imageSrc: "/img/tubep/tubep-2.jpg",
                title: "Tủ bếp",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/tubep.php"
            },
            {
                class: "card d-none d-md-block",
                id: "tubep3",
                imageSrc: "/img/tubep/tubep-3.jpg",
                title: "Tủ bếp",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/tubep.php"
            }
        ]
    },
    {
        items: [
            {
                class: "card",
                id: "bantrangdiem1",
                imageSrc: "/img/bantrangdiem/bantrangdiem-1.jpg",
                title: "Bàn trang điểm",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/bantrangdiem.php"
            },
            {
                class: "card d-none d-md-block",
                id: "bantrangdiem2",
                imageSrc: "/img/bantrangdiem/bantrangdiem-2.jpg",
                title: "Bàn trang điểm",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/bantrangdiem.php"
            },
            {
                class: "card d-none d-md-block",
                id: "bantrangdiem3",
                imageSrc: "/img/bantrangdiem/bantrangdiem-3.jpg",
                title: "Bàn trang điểm",
                content: "Some quick example text to build on the card title and make up the bulk of the card's content.",
                link: "/Products/bantrangdiem.php"
            }
        ]
    }
];

// Parent container for the carousel inner
const carouselInner = document.getElementById("carouselInner");

// Create and append carousel items with cards
carouselData.forEach(carouselItemData => {
    const carouselItem = document.createElement("div");
    carouselItem.className = "carousel-item";
    if (carouselItemData.items[0].id === "sofa1") {
        carouselItem.classList.add("active");
    }
    const cardsWrapper = document.createElement("div");
    cardsWrapper.className = "cards-wrapper";
    carouselItemData.items.forEach(item => {
        const card = document.createElement("div");
        card.className = item.class;
        card.id = item.id;

        card.innerHTML = `
            <img src="${item.imageSrc}" class="card-img-top" alt="image">
            <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
                <p class="card-text">${item.content}</p>
                <a href="${item.link}" class="btn btn-primary">Mua ngay</a>
            </div>
        `;

        cardsWrapper.appendChild(card);
        carouselItem.appendChild(cardsWrapper);
    });

    carouselInner.appendChild(carouselItem);
});
