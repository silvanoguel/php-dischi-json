<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCS</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Css -->
    <link rel="stylesheet" href="./css/style.css" />

</head>

<body>

    <div id="app">

        <header>
            <div class="container">
                <div>
                    logo
                </div>
            </div>

        </header>

        <div class="main">        

            <div class="container py-3">
                <div class="row">
                    <div class="col-4 g-4" v-for="(disc,index) in discs" :key="index" >
                        <!-- card -->
                        <div class="card px-5 py-3"  style="width: 18rem;">
                            <img :src="disc.poster" :alt="disc.title">
                            <div class="card-body text-center">
                                <p><b>{{ disc.title }}</b></p>
                                <p>{{ disc.author}}</p>
                                <p><b>{{ disc.year }}</b></p>
                            </div>
                        </div>
                        <!-- /card -->
                    </div>
                </div>
            </div>


        </div>

    </div>

    <script src="js/script.js"></script>
</body>

</html>