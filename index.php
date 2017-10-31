<?php
/**
 * Created by PhpStorm.
 * User: 1033801
 * Date: 12.09.2017
 * Time: 11:21
 */


?>

<html>
<header>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <!-- Custom CSSs -->
    <link rel="stylesheet" href="assets/css/bg.css">
    <link rel="stylesheet" href="assets/css/card.scss">
    <link rel="stylesheet" href="assets/css/flip.css">
    <link rel="stylesheet" href="assets/css/text.css">


</header>
<div class="content"></div>
<body scroll=""no" style="overflow:hidden">


/*test

<div id="card">
    <div class="front">
        <div class="paper"><img class="poster" src="https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/PD0XWZZSX5.jpg"/>
            <h2>Featured</h2>
            <legend>Meine ideale Gemeinde</legend>
            <div class="form-group">
                <label for="ewz" class="col-lg-2 control-label">Einwohnerzahl</label>
                <div class="col-lg-10">
                    <select class="form-control" id="ewz">
                        <option>Keine Angabe</option>
                        <option>50 und weniger</option>
                        <option>50 und mehr</option>
                        <option>100 und mehr</option>
                        <option>250 und mehr</option>
                        <option>300 und mehr</option>
                        <option>400 und mehr</option>
                        <option>500 und mehr</option>
                        <option>1'000 und mehr</option>
                        <option>1'500 und mehr</option>
                        <option>2'000 und mehr</option>
                        <option>2'500 und mehr</option>
                        <option>3'000 und mehr</option>
                        <option>4'000 und mehr</option>
                        <option>5'000 und mehr</option>
                        <option>7'500 und mehr</option>
                        <option>10'000 und mehr</option>
                        <option>15'000 und mehr</option>
                        <option>20'000 und mehr</option>
                        <option>25'000 und mehr</option>
                    </select>
                    <br>
                </div>
                <label for="age" class="col-lg-2 control-label">Alter</label>
                <div class="col-lg-10">
                    <select class="form-control" id="age">
                        <option>Keine Angabe</option>
                        <option>0-4</option>
                        <option>5-9</option>
                        <option>10-14</option>
                        <option>15-19</option>
                        <option>20-24</option>
                        <option>25-29</option>
                        <option>30-34</option>
                        <option>35-39</option>
                        <option>40-44</option>
                        <option>45-49</option>
                        <option>50-54</option>
                        <option>55-59</option>
                        <option>60-64</option>
                        <option>65-69</option>
                        <option>70-74</option>
                        <option>75-79</option>
                        <option>80-84</option>
                        <option>85-89</option>
                        <option>90+</option>
                    </select>
                    <br>
                </div>
                <label for="gs" class="col-lg-2 control-label">Geschlecht</label>
                <div class="col-lg-10">
                    <select class="form-control" id=gs>
                        <option>Keine Angabe</option>
                        <option>Männlich</option>
                        <option>Weiblich</option>
                    </select>
                    <br>
                </div>
                <label for="ps" class="col-lg-2 control-label">Stärkste Partei</label>
                <div class="col-lg-10">
                    <select class="form-control" id="ps">
                        <option>Keine Angabe</option>
                        <option>SVP</option>
                        <option>SP</option>
                    </select>
                    <br>
                </div>
                <label for="sf" class="col-lg-2 control-label">Steuerfuss in %</label>
                <div class="col-lg-10">
                    <select class="form-control" id="sf">
                        <option>Keine Angabe</option>
                        <option>...</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <br>
                </div>
                <label for="eh" class="col-lg-2 control-label">Erhohlungsraum</label>
                <div class="col-lg-10">
                    <select class="form-control" id="eh">
                        <option>Keine Angabe</option>
                        <option>Sehr wenig Natur</option>
                        <option>Etwas Natur</option>
                        <option>Viel Natur</option>
                    </select>
                    <br>
                </div>

                <label for="checkbox" class="col-lg-2 control-label">Sonstiges</label>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Seeanstoss</label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button id="go" type="submit" class="btn">Submit</button>
                </div>
            </div>
            <hr/>


            <p><br></p>
            <div class="space"></div>
        </div>
    </div>
    <div class="back">

        <div class="paper"><img class="poster" src="src/test.jpg"/>
            <h2>Featured</h2>
            <legend>Meine ideale Gemeinde</legend>
            <br><br>
            <ul class="list-group">
                <li class="list-group-item">Name: HA?</li>
                <li class="list-group-item">Einwohnerzahl: 1</li>
                <li class="list-group-item">Alter: ..</li>
                <li class="list-group-item">Anzahl Personen in diesem Alter: ..</li>
                <li class="list-group-item">Geschlecht: ..</li>
                <li class="list-group-item">Stärkste Partei: ..</li>
                <li class="list-group-item">Steuerfuss in %: ..</li>
                <li class="list-group-item">Erhohlungsraum: ..</li>
                <li class="list-group-item">Seeanstoss: ..</li>
            </ul>
            <hr/>

            <a id="back" class="btn">Zurück</a>
            <p><br></p>
            <div class="space"></div>
        </div>
    </div>
</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/jquery.flip.js"></script>
<script>
    $(function($) {
        $("#card").flip({
            trigger: 'manual'
        });
    });


    $('#go').click(function () {
        $("#card").flip('toggle');
    });

    $('#back').click(function () {
        $("#card").flip('toggle');
    });

</script>







<script>

</script>


</body>


<footer>



</footer>
</html>
