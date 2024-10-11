

<body>


    <div class="row">
        <div class="col-md-4 col-sm-3">
   <h1>Monitorok</h1>
            <a style="margin:20px;" href="index.php?controller=Monitor&action=index"><img class="img-fluid" src=".\img\monitor.png"></a>
        </div>
        <div class="col-md-4 col-sm-3">
        <h1>Számitógépek</h1>
        <a style="margin:20px;" href="index.php?controller=Computer&action=index"><img class="img-thumbnail"src=".\img\pc.png"></a>
    </div>
            <div class="col-md-4 col-sm-3">
                <h1>Laptopok</h1>
        <a style="margin:20px;" href="index.php?controller=Laptop&action=index"><img class="img-fluid"src=".\img\laptop.png"></a>
            </div>
            <div class="col-12">
                <a href="index.php?controller=Gyarto&action=view"><img class="kepstyle"src="./img/gyarto.jpg" alt="Gyártók megjelenitése"</a>
                <p class="kozepre">Gyártók megjelenitése</p>
            </div>
</div>


 <?php

 include("./src/app/view/template/footer.php")

?>


