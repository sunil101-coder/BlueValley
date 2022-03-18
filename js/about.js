const gallery = [{
        id: 1,
        image: "img/gallery1.jpg"
    },
    {
        id: 2,
        image: "img/gallery2.jpg"
    },
    {
        id: 3,
        image: "img/gallery3.jpg"
    },
    {
        id: 4,
        image: "img/gallery4.jpg"
    },
    {
        id: 5,
        image: "img/gallery5.jpg"
    },
    {
        id: 6,
        image: "img/gallery6.jpg"
    }
];


const mygallery = document.querySelector(".mygallery");

window.addEventListener("DOMContentLoaded", function() {
    const showInHtml = gallery.map((galleryitem, index) => {
        return `
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <img src=${galleryitem.image} alt="Avatar" class="image">
    <div class="middle">
      <div class="text">John Doe</div>
      <h3 class="content-title">Khumbu Valley Hotel</h3>
      <p class="content-text"><i class="fa fa-map-marker"></i> Nepal</p>
    </div>
  </div>           
`
    }).join('')

    mygallery.innerHTML = showInHtml
})
const mybrand = document.querySelector(".team");

window.addEventListener("DOMContentLoaded", function() {
    const showInHtml = brand.map((teamitem, index) => {
        return `
    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">

        <div class="card" style="box-shadow:10px 10px 5px #aaaaaa;">

        <a href=""><img src=${teamitem.image} class="card-img-top"></a>

            <div class="card-body">

                <h3 class="card-title brandtitle" style="font-family:fantasy;">${teamitem.title}</h3>
            </div>
        </div>
    </div>    
        
`
    }).join('')

    mybrand.innerHTML = showInHtml
})