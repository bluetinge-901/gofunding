<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="footer-1-title"><a href="#"><?= Yii::$app->params['brand'] ?></a> is a website to raise funds get funding and donate online and transparently. </p>
                <p>
                    Oza Nivas
                    India
                    PIN:- 362565
                </p>
            </div>
            <div class="col-md-3">
                <h3>Take Action</h3>
                <ul>
                    <li><a href="/campaign/create">Create campaign</a></li>
                    <li><a href="/campaign/">Invest or Donate</a></li>
                    <!-- <li><a href="#"></a></li> -->
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Learn More</h3>
                <ul>
                    <li><a href="#">What is it ? <?= Yii::$app->params['brand'] ?></a></li>
                    <li><a href="#">Features and pricing</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Contact Us</h3>
                <ul>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Our Partners</a></li>
                    <li><a href="#">Careers #lifeatoza</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="text-center copyright">&copy; <?= Yii::$app->params['brand'] ?> <?= date('Y') ?>. All right reserved. by Oza DigiFin, website designed and developed by oza Technologies for oza digital finace and OdX Platform</div>
    </div>
</footer>