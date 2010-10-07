
<form method="post" action="#" id="form-reserve-hotels" class="rForm">

 <?php include('reserve_dates_chose.php'); ?>
<div class="item">
  <label class="label">Брой стаи</label>
  <span class="field value">
      <select id="broi-stai" name="BroiStai" class="required">
          <option value="1">&nbsp;1&nbsp;</option>
          <option value="2">&nbsp;2&nbsp;</option>
          <option value="3">&nbsp;3&nbsp;</option>
      </select>
  </span>
</div>
<span class="hr">&nbsp;</span>
<div class="c" style="padding-bottom: 10px;">&nbsp;</div>
<div id="vid-stai">
 <?php include('reserve_include.php'); ?>
  <div class="item" id="room-1" style="display: block">
    <div class="xitem" style="width:240px">
        <label class="label">Стая 1 *</label>
        <span class="field value">
            <select name="Staq1Vid" class="required">
                <option value="">Вид стая *</option>
                <option value="Единична">Единична</option>
        		<option value="Двойна (спалня)">Двойна (спалня)</option>
        		<option value="Двойна (отделни легла)">Двойна (отделни легла)</option>
        		<option value="Студио">Студио</option>
        		<option value="Апартамент">Апартамент</option>
            </select>
        </span>
        <div class="c" style="padding-bottom: 5px">&nbsp;</div>
        <div class="xitem" style="width: 105px">
            <label><small><strong>Възрастни:* </strong>&nbsp;</small></label>
            <span class="field">
                <select style="width:95px" name="Staq1Vazrastni">
                    <option>1</option>
                    <option>2</option>
            		<option>3</option>
                </select>
            </span>
        </div>
        <div class="xitem" style="width: 100px;">
            <label><small><strong>Деца:</strong> (1-12 год.)   </small></label>
            <span class="field">
                <select style="width:95px" name="Staq1Deca">
                    <option value="0">Изберете</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
            		<option value="3">3</option>
                </select>
            </span>
        </div>
    </div>
    <div class="xitem" style="width:240px">
        <label>Допълнително уточнение</label>
        <span class="field">
            <textarea rows="" cols="" style="height: 61px;"></textarea>
        </span>
        <div class="c"></div>
        <small>
            Tук можете да посочите Вашите специални изисквания ; вида на стаята,ако тя не е стандартен тип; имената на други гости; възрастта на децата
        </small>
    </div>

  </div>
  <div class="item" id="room-2">
    <div class="xitem" style="width:240px">
        <label>Стая 2 *</label>
        <span class="field">
            <select class="semi-required">
                <option value="">Вид стая *</option>
                <option value="Единична">Единична</option>
        		<option value="Двойна (спалня)">Двойна (спалня)</option>
        		<option value="Двойна (отделни легла)">Двойна (отделни легла)</option>
        		<option value="Студио">Студио</option>
        		<option value="Апартамент">Апартамент</option>
            </select>
        </span>
        <div class="c" style="padding-bottom: 5px">&nbsp;</div>
        <div class="xitem" style="width: 105px">
            <label><small><strong>Възрастни:* </strong>&nbsp;</small></label>
            <span class="field">
                <select style="width:95px">
                    <option>1</option>
                    <option>2</option>
            		<option>3</option>
                </select>
            </span>
        </div>
        <div class="xitem" style="width: 100px;">
            <label><small><strong>Деца:</strong> (1-12 год.)</small></label>
            <span class="field">
                <select style="width:95px">
                    <option value="0">Изберете</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
            		<option value="3">3</option>
                </select>
            </span>
        </div>
    </div>
    <div class="xitem" style="width:240px">
        <label>Допълнително уточнение</label>
        <span class="field">
            <textarea rows="" cols="" style="height: 61px;"></textarea>
        </span>
    </div>
  </div>
  <div class="item" id="room-3">
    <div class="xitem" style="width:240px">
        <label>Стая 3 *</label>
        <span class="field">
            <select class="semi-required">
                <option value="">Вид стая *</option>
                <option value="Единична">Единична</option>
        		<option value="Двойна (спалня)">Двойна (спалня)</option>
        		<option value="Двойна (отделни легла)">Двойна (отделни легла)</option>
        		<option value="Студио">Студио</option>
        		<option value="Апартамент">Апартамент</option>
            </select>
        </span>
        <div class="c" style="padding-bottom: 5px">&nbsp;</div>
          <div class="xitem" style="width: 105px">
              <label><small><strong>Възрастни:* </strong>&nbsp;</small></label>
              <span class="field">
                  <select style="width:95px">
                      <option>1</option>
                      <option>2</option>
              		  <option>3</option>
                  </select>
              </span>
          </div>
          <div class="xitem" style="width: 100px;">
              <label><small><strong>Деца:</strong> (1-12 год.)</small></label>
              <span class="field">
                  <select style="width:95px">
                    <option value="0">Изберете</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
            		<option value="3">3</option>
                  </select>
              </span>
          </div>
    </div>

    <div class="xitem" style="width:240px">
        <label>Допълнително уточнение</label>
        <span class="field">
            <textarea rows="" cols="" style="height: 61px;"></textarea>
        </span>
    </div>
  </div>
</div>
<div class="c" style="padding-bottom: 10px;">&nbsp;</div>

<div class="item">
   <div class="xitem" style="width:125px">
        <label>
            <span>Дата на настаняване</span>
        </label>
        <span class="field">
            <input style="width:125px" type="text" class="datepick" />
        </span>
    </div>
</div>

<div class="item">
   <div class="xitem" style="width:125px">
        <label>
            <span>Дата на напускане</span>
        </label>
        <span class="field">
            <input style="width: 125px;" type="text" class="datepick" />
        </span>
    </div>
</div>

<div class="item">
   <div class="xitem" style="width:125px">
        <label>
            <span>Брой нощувки</span>
        </label>
        <span class="field">
            <input style="width:125px;" type="text" class="" />
        </span>
    </div>
</div>


<div class="c" style="padding-bottom: 10px;">&nbsp;</div>
<span class="hr">&nbsp;</span>
<div class="c" style="padding-bottom: 10px;">&nbsp;</div>

<div id="user-info">
<div class="item">
    <div class="xitem" style="width:140px">
        <label>Обръщение</label>
        <span class="field">
            <select style="width: 120px;">
                <option>Г-н</option>
                <option>Г-жа</option>
        		<option>Г-ца</option>
            </select>
        </span>
    </div>
    <div class="xitem" style="width:140px">
        <label>Име *</label>
        <span class="field">
            <input type="text" name="Ime" class="required" style="width:120px" />
        </span>
    </div>
    <div class="xitem" style="width:140px">
        <label>Фамилия *</label>
        <span class="field">
            <input type="text" name="Familia" class="required" style="width:120px" />
        </span>
    </div>

  </div>

  <div class="item">
    <div class="xitem" style="width:190px">
        <label>E-mail *</label>
        <span class="field">
            <input type="text" name="Email" class="required-email-equal" style="width:170px" />
        </span>
    </div>
    <div class="xitem" style="width:190px">
        <label>Потвърждение на E-mail *</label>
        <span class="field">
            <input type="text" name="PotvarjdenieEmail" class="required-email-equal" style="width:170px" />
        </span>
    </div>

  </div>

  <div class="item">
    <div class="xitem" style="width:140px">
        <label>Телефон *</label>
        <span class="field">
            <input type="text" name="Telefon" class="required" style="width:120px" />
        </span>
    </div>


  </div>


  <div class="item">
   <div class="xitem" style="width:340px">
        <label>
            <span>Допълнителна информация</span>
            <small style="display: block;">(тук можете да посочите, ако имате други специални изисквания)</small>
        </label>

        <span class="field">
            <textarea style="width:340px"></textarea>
        </span>
    </div>
  </div>

</div>  <!-- /#user-info -->





  <div class="item">
    <div class="xitem" style="width:140px">
            <label style="padding-bottom: 5px;"><strong>Начин на плащане*</strong></label>

              <ul style="width: 200px;">
                <li><input type="radio" id="vbroi" name="NachinNaPlashtane" checked="checked" /> В брой в офиса на фирмата</li>
                <li><input type="radio" id="vbanka" name="NachinNaPlashtane" /> По банков път</li>
                <li><input type="radio" id="vkarta" name="NachinNaPlashtane" /> С кредитна карта *</li>
              </ul>
              <div style="display: none" id="nachin-txt-vbroi">
                  София<br />
                  ул. "Иван Вазов" 12А<br />
                  (02) 981 09 56<br />
                  (02) 981 09 63<br />
                  <a href="mailto:yomex@yomexbg.com">yomex@yomexbg.com</a>
              </div>
              <div style="display: none" id="nachin-txt-vbanka">
               <p><strong>Банкова информация</strong> </p>

                <p>Банка – Уникредит Булбанк <br />
                <strong>BIC:UNCRBGSF </strong></p>

                <p>Сметка в лв.  <br />
                <strong>BG34 UNCR 7000 1503 9330 48</strong></p>

              </div>
              <div style="display: none" id="nachin-txt-vkarta">
                <span class="kreditnikarti">&nbsp;</span>
                <p>Върху плащанията с кредитна карта се начислява банкова такса от 3%</p>
              </div>
              <div id="nachin-txt">
                София<br />
                ул. "Иван Вазов" 12А<br />
                (02) 981 09 56<br />
                (02) 981 09 63<br />
                <a href="mailto:yomex@yomexbg.com">yomex@yomexbg.com</a>

             </div>
             <?php /*
             <p style="width: 500px;color: #8E1756"> На следващата стъпка ще получите информация за разплащането онлайн. </p>
             */ ?>




    </div>


  </div>
  <?php /*
  <div class="item">
    <div class="xitem" style="width:140px">


              <ul style="width: 300px;">
                <li><span><input type="checkbox" name="Usloviia" class="required" />  Приемам <a href="javascript:;" onclick="pop('usloviia-za-rezervaciia')">условията за резервация</a></span></li>

              </ul>



    </div>


  </div>
  */ ?>






 <input type="submit" class="search" value="Изпрати">

<ul style="padding: 10px 0 0 17px;list-style: disc">
  <li><small>Чрез този формуляр Вие извършвате онлайн заявка за резервация в хотел.</small></li>
  <li><small>До 24 часа (в работни дни) ще получите потвърждение по имейл за наличните места и детайлите по резервацията.</small></li>
  <?php /*
  <li><small>За да гарантирате своята резервация е необходимо да направите пълно разплащане по избрания от Вас начин.</small></li>
  */ ?>
</ul>


</form>


<style type="text/css">
    #vid-stai .item{
         display: none;
    }


</style>


<script type="text/javascript">
var pop = function(url){
  var url = site_url + url;
  var window_center = $(window).width()/2-300 + 'px';
  var printPopup=window.open(url,"myWin","menubar,scrollbars,left="+ window_center+",top=90px,height=400px,width=600px");
}

var rand = function(){
   return Math.floor(Math.random()*9999);
}

var dataCollector = function(){

var hotel = 'item' + rand() + ':"Хотел - ' + $(".gtitle:first").text() + '",';
var hotel = hotel.replace(/  /g, "").replace(/\n/, "");

var url = 'item' + rand() + ':"Адрес - ' + window.location.href + '",';
var url = url.replace(/  /g, "").replace(/#/, "");

var broi_stai  =  $("#broi-stai").val();

    var vid_stai = "";
  $("#vid-stai .item:lt(" + broi_stai + ")").each(function(i){
    $(this).find("label").each(function(){
      var label = $(this).text();
      var val = $(this).next(".field").find("select, textarea, input").eq(0).val();
      vid_stai = vid_stai + 'item' + rand() + ':"' + label + ' - ' + val + '",';
    });
  });
  vid_stai = vid_stai.replace(/  /g, "").replace(/\n/, "");

  var user_info = "";
  $("#user-info label").each(function(i){
    var label = $(this).text();
    var val = $(this).next().find("select, textarea, input").eq(0).val();
    user_info = user_info + 'item' + rand() + ':"' + label + ' - ' + val + '",';

  });

  user_info = user_info.replace(/  /g, "").replace(/\n/g, "");

  var nachin_na_plashtane = 'item' + rand() + ':"Начин на плащане - ' + $("ul input[type='radio']:checked").parent().text() + '"';
  var subject = 'subject:"Заявка за хотел",';

  var data = subject + url + hotel + vid_stai + user_info + nachin_na_plashtane;
  var data = data.replace(/  /g, "").replace(/\n/g, "");
  var data = eval('({' + data + '})');


  return data;

}





$(document).ready(function(){
  $(".gtitle:first").clone(true).prependTo(".rForm");  
   $(".datepick").datepicker()

$("#form-reserve-hotels").validate(function(){

    //$(".xitem label small").remove();

    var data = dataCollector();
    $.post(template_url+"mail_sender.php", data, function(data){

      Modal.box("<h2 style='text-align:center;padding:20px'>Вашата резервация е изпратена успешно.</h2>", 400, 150);
      Modal.overlay();
    });


});


    $("#broi-stai").bind("change", function(){
      var val = parseFloat($(this).val());
      visibles = $("#vid-stai .item:visible");
      if(visibles.length==0){
        for(var i=1; i<=val; i++){
          $("#room-" + i).show();
          $(".semi-required").parent().removeClass("error");
        }
      }
      else{
        if(visibles.length<val){
          for(var i=visibles.length; i<=val; i++){
            $("#room-" + i).show();
            $(".semi-required").parent().removeClass("error");
          }
        }
        else if(visibles.length>val){
          for(var i=visibles.length; i>val; i--){
            $("#room-" + i).hide();
            $(".semi-required").parent().removeClass("error");
          }
        }
      }

    });


    $("input[name='NachinNaPlashtane']").click(function(){
      var id = $(this).attr("id");
      $("#nachin-txt").html($("#nachin-txt-" + id).html());
    });


    setTimeout(function(){
      $(".sec-nav a.active:last").clone(true).insertAfter(".rForm .gtitle");
      var ahahtml = $(".rForm a.active").html();
      $(".rForm a.active").replaceWith("Град: " + ahahtml + "<div style='padding-bottom:12px;' class='c'>&nbsp;</div>") ;
      $(".rForm .gtitle").css("paddingBottom", 0);
    }, 300);


});

</script>
























