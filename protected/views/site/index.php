<?php
    Yii::app()->clientScript->registerCssFile("https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css");
    Yii::app()->clientScript->registerScriptFile("https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js",CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/Est.js",CClientScript::POS_END);
?>
<!--<audio src="" controls autoplay loop>
<p>Tu navegador no implementa el elemento audio</p>
</audio>-->
<div class="row">
    <div class="col-12" style="text-align: center;font-size: 30px;color:#0D5EB1">Muerte Muisca</div>
    <div class="col-12" style="text-align: center;font-size: 14px;color:#A3A3A3">Exposición</div>
</div>
<div style="margin: 30px 0px;"></div>
<div class="container">
  <!-- Content here -->
          <div class="row">
            <div class="col-md-6">
                <img class="img-demo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/muertemuisca/imagen1.fw.png" alt=""/>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-demo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/muertemuisca/imagen2.fw.png" alt=""/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-demo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/muertemuisca/imagen3.fw.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
        <div id="divEstIndex">
            <audio id="myAudio" >
              <source src="<?php echo Yii::app()->request->baseUrl; ?>/media/indigena_museo.wav" controls>
              <!--<source src="horse.mp3" type="audio/mpeg">-->
              <p>Tu navegador no implementa el elemento audio</p>
            </audio>
        </div>
  </div>