const card = [{
        id: 1,
        title: "Executive Room",
        image: "img/room1.jpg",
    },
    {
        id: 2,
        title: "Delux Room",
        image: "img/room2.jpg",
    },
    {
        id: 3,
        title: "Luxury Room",
        image: "img/room3.jpg",
    },
    {
        id: 4,
        title: "Suite Room",
        image: "img/room4.jpg",
    }
]

const mycontent = document.querySelector(".mycontent");

window.addEventListener("DOMContentLoaded", function() {
    const showInHtml = card.map((carditem, index) => {
        return `
            <div class="col-lg-3 col-md-3 " style="width:24%">
    
            <div class="card" style="box-shadow:10px 10px 5px #aaaaaa;">
    
            <a href=""><img src=${carditem.image} class="card-img-top"></a>
    
                <div class="card-body">
    
                    <h3 class="card-title" style="font-family:fantasy;">${carditem.title}</h3>
                    <?php

                include('dbconnection.php');

                $selectroom='Executive';

                $totalrooms_query="SELECT roomprice FROM roomprice where selectroom='$selectroom'";

                $totalrooms_query_q=mysqli_query($conn,$totalrooms_query);

                while ($row = mysqli_fetch_assoc($totalrooms_query_q))

                 {

                     $roomprice= $row['roomprice'];

                  }

            ?>

                    <div class="price-selet">
                     <h3><span class="WebRupee">&#x20B9;</span><?php echo htmlentities($roomprice);?></h3>
                    <button type='button'	class='btn	btn-success	btn-lg text-center'	role='button' name='cancel' align='center' data-toggle='modal' data-target='#mymodal' >Book Now</button>
    
                    </div>
    
                </div>
    
                </div>
    
                </div>
    
    `
    }).join('')

    mycontent.innerHTML = showInHtml
})