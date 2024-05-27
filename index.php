<html class="loading"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>Fares</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    	 <link rel="stylesheet" href="./css/main.css?v=1.2">
    <link rel="stylesheet" href="./css/hyper.css?v=1.2">
    <link rel="stylesheet" href="./css/new.css">
  </head>
	
<body><div class="uk-section uk-section-muted" style="padding-top:3px;">
  <div class="uk-container"> 
  <center>
  <div class="logo_large"></div>
  </center>
    <div class="uk-background-default uk-border-rounded uk-box-shadow-small">
      <div class="uk-container uk-container-xsmall uk-padding-large" style="width:100%;padding:0px">
        <article class="uk-article">
            <center>
                
          <h1 class="uk-article-title">Fares CHECKER</h1>            	  	  
          </center>
          <div class="uk-article-content">

              </div>
            <div class="uk-form-stacked uk-margin-medium-top">
                <div class="uk-margin-bottom">
                    <div class="uk-form-controls" id="lista_con">
                      <textarea id="message" class="hyper_ccs uk-textarea uk-border-rounded form-checker" style="box-shadow:0 10px 15px black;" placeholder="DROP CCS" name="lista" rows="5" minlength="10" required=""></textarea>
                    </div>
                  </div>
                   
                <div class="uk-form-controls hyper_login">
                  <input id="cst" class="hyper_input uk-input uk-border-rounded " type="number" style="width:49%;float:left;" placeholder="AMOUNT">
                </div>
              </div>
             
              <div class="uk-margin-bottom">
           
                <div class="uk-form-controls hyper_login">
					 <select name="gate" id="currency" class="hyper_input uk-input uk-border-rounded form-control text-center" style=" width: 49%; margin-bottom:15px; float:right;">
					     	<option value="usd">USD 🇺🇸</option>
				<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="eur">EUR 🇪🇺</option>
				<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="aud">Australian dollars 🇦🇺</option>
				<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gbp">GBP 🇬🇧</option>
				<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="inr">INR 🇮🇳</option>
				<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="cad">CAD 🇨🇦</option>
				</select>
                </div>
              </div>
              </select>
           <br>
           <br>
              <div class="uk-margin-bottom">
           
                <div class="uk-form-controls hyper_login">
                
                  <input id="sec" class="hyper_input uk-input uk-border-rounded" style="width:100%" placeholder="sk_live_xxxxxxxx" type="text">
                </div>
              </div>
              
              <div class="uk-margin-bottom">
                <div class="uk-form-controls hyper_login">
                  <input id="tgid" class="hyper_input uk-input uk-border-rounded" style="width:98%" placeholder="Your TG ID" type="number">
                </div>
              </div>
              
              <div class="uk-margin-bottom">
           
                <div class="uk-form-controls hyper_login">
					 <select name="gate" id="gate" class="hyper_input uk-input uk-border-rounded form-control text-center" style=" width: 100%; margin-bottom: 1px;">
					     	<option value="gate/usd0.5.php">CVV CHARGED</option>
				<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/ccncharge.php">CCN CHARGED</option>
				<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/v.php">Braintree AUTH  </option>
				<option style="background:rgba(16, 15, 154, 0.281);color:rgb(255, 208, 0);color:white" value="gate/v.php">Adyan AUTH  </option>
								<option value="gate/ccn.php">3Ds Look Up</option>
				</select>
                </div>
              </div>
              <div class="uk-text-center">
                <button class="uk-button uk-button-primary btn-play uk-border-rounded" style="
-webkit-tap-highlight-color: transparent;">start check</button>
              </div>

<br>
             
                  
                  
          	<span class="tag_total" style="float:left;">Total CCS               <span class="carregadas">0</span></span>
                                   <span class="tag_total" style="float:right;text-align:center;background:#fb18510d;color:#b11731"><a href="https://t.me/FaReS_X4NBOT" style="text-decoration:none;color:#b11731">HIT SENDER  HERE</a></span>
              


<div class="uk-card card_cvv uk-card-category hyper_mt3 uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded uk-width-1-1">
    <h3 class="uk-card-title uk-margin-remove uk-text-primary green_title"><i class="fa fa-check-circle btn-nex"></i>CHARGED - <span class="charge">0</span>
               <div class="float-right">
               	 <button type="show" class="btn-primary btn-copy1" style="margin-left:5px;"><i class="fa fa-copy" style="color:cyan;"></i></button>
             <button type="show" class="btn-primary show-charge"><i class="fa fa-eye-slash" style="color:cyan ;"></i></button>
           </div>
           </h3>
           <div id="lista_charge"></div>
              </div>

      

            <div class="uk-card ccn_card uk-card-category hyper_mt3 uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded uk-width-1-1">

                <h3 class="uk-card-title uk-margin-remove uk-text-primary warn_title"><i class="fa fa-check-circle btn-nex"></i>CVV - <span class="cvvs">0</span>

             <div class="float-right">
               	 <button type="show" class="btn-primary btn-copy2" style="margin-left:5px;"><i class="fa fa-copy" style="color:cyan;"></i></button>
             <button type="show" class="btn-primary show-live"><i class="fa fa-eye-slash" style="color:cyan ;"></i></button>
</div>
             </h3>
                         <div id="lista_cvvs"></div>
                         </div>
            <div class="uk-card ccn_card uk-card-category hyper_mt3 uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded uk-width-1-1">

                <h3 class="uk-card-title uk-margin-remove uk-text-primary warn_title"><i class="fa fa-check-circle btn-nex"></i>CCN - <span class="aprovadas">0</span>

             <div class="float-right">
               	 <button type="show" class="btn-primary btn-copy" style="margin-left:5px;"><i class="fa fa-copy" style="color:cyan;"></i></button>
             <button type="show" class="btn-primary show-lives"><i class="fa fa-eye-slash" style="color:cyan ;"></i></button>
</div>
             </h3>
                         <div id="lista_aprovadas"></div>
</div>
              <!-- dead  -->
              <div class="uk-card dead_card uk-card-category hyper_mt3 uk-card-default uk-card-hover uk-card-body uk-inline uk-border-rounded uk-width-1-1">
         
                <h3 class="uk-card-title uk-margin-remove uk-text-primary dead_title"><i class="fa fa-times btn-nex"></i>DEAD - <span class="reprovadas">0</span> 
                <div class="float-right">
               	 <button type="show" class="btn-primary btn-trash" style="margin-left:5px;"><i class="fa fa-trash" style="color:cyan;"></i></button>
             <button type="show" class="btn-primary show-dies"><i class="fa fa-eye-slash" style="color:cyan ;"></i></button>
             </div></h3>
               <div style="display: none;" id="lista_reprovadas"></div>
               
              </div>

        </article>
      </div>
    </div>
  </div>
</div>



<div id="offcanvas-docs" data-uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
    <h5 class="uk-margin-top">Contact us</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li class="uk-active"><a href="https://t.me/SWCDL">Join Group</a></li>
      <li><a href="https://t.me/SWCDL">Join Channel</a></li>
    </ul>
  
  </div>
</div>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index.html">Flex</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-top uk-text-center">
      
    </ul>
    <div class="uk-margin-top uk-text-center">
      <div data-uk-grid="" class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="uk-section uk-text-center uk-text-muted">
	<div class="uk-container uk-container-small">
		<div>
			<ul class="uk-subnav uk-flex-center">
	
				<li><a href="https://t.me/SWCDL">Support</a></li>
				<li><a href="https://t.me/SWCDL">Contact</a></li>
			</ul>
		</div>

		<div class="uk-margin-medium uk-text-small uk-link-muted">Crafted by <a href="t.me/SWCDL">Fares</a></div>
	</div>
</footer><script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

<script>







$(document).ready(function(){


const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})



function RedirectUrl(){    
       window.location.href ="https://t.me/SWCDL";
    }
    
$('.show-charge').click(function(){
var type = $('.show-charge').attr('type');
$('#lista_charge').slideToggle();
if(type == 'show'){
$('.show-charge').html('<i class="fa fa-eye"style="color:cyan ;"></i>');
$('.show-charge').attr('type', 'hidden');
}else{
$('.show-charge').html('<i class="fa fa-eye-slash" style="color:cyan ;"></i>');
$('.show-charge').attr('type', 'show');
}});

$('.show-live').click(function(){
var type = $('.show-live').attr('type');
$('#lista_cvvs').slideToggle();
if(type == 'show'){
$('.show-live').html('<i class="fa fa-eye" style="color:cyan ;"></i>');
$('.show-live').attr('type', 'hidden');
}else{
$('.show-live').html('<i class="fa fa-eye-slash" style="color:cyan ;"></i>');
$('.show-live').attr('type', 'show');
}});

$('.show-lives').click(function(){
var type = $('.show-lives').attr('type');
$('#lista_aprovadas').slideToggle();
if(type == 'show'){
$('.show-lives').html('<i class="fa fa-eye " style="color:cyan ;" ></i>');
$('.show-lives').attr('type', 'hidden');
}else{
$('.show-lives').html('<i class="fa fa-eye-slash" style="color:cyan ;"></i>');
$('.show-lives').attr('type', 'show');
}});

$('.show-dies').click(function(){
var type = $('.show-dies').attr('type');
$('#lista_reprovadas').slideToggle();
if(type == 'show'){
$('.show-dies').html('<i class="fa fa-eye" style="color:cyan ;"></i>');
$('.show-dies').attr('type', 'hidden');
}else{
$('.show-dies').html('<i class="fa fa-eye-slash" style="color:cyan ;"></i>');
$('.show-dies').attr('type', 'show');
}});

$('.btn-trash').click(function(){
	Swal.fire({title: 'REMOVED DEAD', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
$('#lista_reprovadas').text('');
});

$('.btn-copy1').click(function(){
	Swal.fire({title: 'COPIED LIVE', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_charge = document.getElementById('lista_charge').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_charge;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});

$('.btn-copy2').click(function(){
	Swal.fire({title: 'COPIED CVV', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_live = document.getElementById('lista_cvvs').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_live;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});

$('.btn-copy').click(function(){
	Swal.fire({title: 'COPIED CCN', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var lista_lives = document.getElementById('lista_aprovadas').innerText;
var textarea = document.createElement("textarea");
textarea.value = lista_lives;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-play').click(function(){
var sec = $("#sec").val();
var tgid = $("#tgid").val();
var cst = $("#cst").val();
var c = document.getElementById("currency");
var e = document.getElementById("gate");
var cur = c.options[c.selectedIndex].value;
var gate = e.options[e.selectedIndex].value;
var lista = $('.form-checker').val().trim();
var array = lista.split('\n');
var charge = 0, live = 0, lives = 0, dies = 0, testadas = 0, txt = '';

if(!lista){
	Swal.fire({title: 'You did not provide a card :(', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}
if(!sec){
	Swal.fire({title: 'You did not provide SK LIVE  :(', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}
Swal.fire({title: 'CHECKING CARDS...', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});

var line = array.filter(function(value){
if(value.trim() !== ""){
	txt += value.trim() + '\n';
	return value.trim();
}
});

/*
var line = array.filter(function(value){
return(value.trim() !== "");
});
*/

var total = line.length;


/*
line.forEach(function(value){
txt += value + '\n';
});
*/

$('.form-checker').val(txt.trim());
// ảo ma hả, đừng lấy code chứ !!
if(total > 20000000000000000000000){
  Swal.fire({title: ' < 20000 CCS', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

$('.carregadas').text(total);
$('.btn-play').attr('disabled', true);
$('.btn-stop').attr('disabled', false);
 
line.every(function(data, index){
setTimeout(
function() {
var callBack = $.ajax({
	url:  gate + '?lista=' + data + '&sec=' + sec + '&cst=' + cst + '&cur=' + cur + '&tgid=' + tgid ,
	success: function(retorno){
		if(retorno.indexOf("CHARGED") >= 0){
			$('#lista_charge').append(retorno);
			removelinha();
			charge = charge +1;
			}
			else if(retorno.indexOf("CVV") >= 0){
			$('#lista_cvvs').append(retorno);
			removelinha();
			live = live +1;
		    }
			else if(retorno.indexOf("CCN") >= 0){
			$('#lista_aprovadas').append(retorno);
			removelinha();
			lives = lives +1;
		    }
		    else{
			$('#lista_reprovadas').append(retorno);
			removelinha();
			dies = dies +1;
		}
		testadas = charge + live + lives + dies;
	    $('.charge').text(charge);
	    $('.cvvs').text(live);
		$('.aprovadas').text(lives);
		$('.reprovadas').text(dies);
		$('.testadas').text(testadas);
		
		if(testadas == total){
			Swal.fire({title: 'ALL CARDS HAS BEEN CHECKED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('.btn-play').attr('disabled', false);
			$('.btn-stop').attr('disabled', true);
		}
        }

});
      $('.btn-stop').click(function(){
      Swal.fire({title: 'PAUSED', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('.btn-play').attr('disabled', false);
      $('.btn-stop').attr('disabled', true);      
      	callBack.abort();
      	return false;

});
}, 300 * index);
return true;
    });
  });
});

function removelinha() {
var lines = $('.form-checker').val().split('\n');
lines.splice(0, 1);
$('.form-checker').val(lines.join("\n"));
}


  
	
</script>

  

</body></html>