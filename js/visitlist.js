const vist = [{
        id: 1,
        image: "http://localhost/BlueValley/img/visit1.jpg"
    },
    {
        id: 2,
        image: "http://localhost/BlueValley/img/visit2.jpg"
    },
    {
        id: 3,
        image: "http://localhost/BlueValley/img/visit3.jpg"
    },
    {
        id: 4,
        image: "http://localhost/BlueValley/img/visit4.jpg"
    }
];

const brand = [{
        id: 1,
        title: "Hotel Lotus",
        image: "http://localhost/BlueValley/img/lotus.jpg"
    },
    {
        id: 2,
        title: "Hotel Sea",
        image: "http://localhost/BlueValley/img/sea.jpg"
    },
    {
        id: 3,
        title: "Hotel Paras",
        image: "http://localhost/BlueValley/img/paras.jpg"
    }
];

const myvisit = document.querySelector(".myvisit");

window.addEventListener("DOMContentLoaded", function() {
    const showInHtml = vist.map((visititem, index) => {
        return `
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    
            <div class="card" style="box-shadow:10px 10px 5px #aaaaaa;">
    
            <a href=""><img src=${visititem.image} class="card-img-top" style="height:143px;"></a>
    
            </div>
        </div>              
    `
    }).join('')

    myvisit.innerHTML = showInHtml
})
const mybrand = document.querySelector(".mybrand");

window.addEventListener("DOMContentLoaded", function() {
    const showInHtml = brand.map((branditem, index) => {
        return `
        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
    
            <div class="card" style="box-shadow:10px 10px 5px #aaaaaa;">
    
            <a href=""><img src=${branditem.image} class="card-img-top"></a>
    
                <div class="card-body">
    
                    <h3 class="card-title brandtitle" style="font-family:fantasy;">${branditem.title}</h3>
                </div>
            </div>
        </div>    
            
    `
    }).join('')

    mybrand.innerHTML = showInHtml
})