@extends('layouts.index')
@section('css')
<style>
/* .text{
  color: #fff;
}
.dropdown {  
  color: #fff;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;} */


/* star - white  */
.star {
  position: relative;
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.9em;
  margin-right: 0.9em;
  margin-bottom: 1.2em;
  border-right: 0.3em solid transparent;
  border-bottom: 0.7em solid #fff;
  border-left: 0.3em solid transparent;
  /* Controlls the size of the stars. */
  font-size: 8px;
}
.star:before, .star:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  top: 0.6em;
  left: -1em;
  border-right: 1em solid transparent;
  border-bottom: 0.7em solid #fff;
  border-left: 1em solid transparent;
  transform: rotate(-35deg);
}
.star:after {
  transform: rotate(35deg);
}

/* Star rating  */
.star-rating {
  position: relative;
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.9em;
  margin-right: 0.9em;
  margin-bottom: 2em;
  border-right: 0.3em solid transparent;
  border-bottom: 0.7em solid #e4a853;
  border-left: 0.3em solid transparent;
  /* Controlls the size of the stars. */
  font-size: 8px;
}
.star-rating:before, .star-rating:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  position: absolute;
  top: 0.6em;
  left: -1em;
  border-right: 1em solid transparent;
  border-bottom: 0.7em solid #e4a853;
  border-left: 1em solid transparent;
  transform: rotate(-35deg);
}
.star-rating:after {
  transform: rotate(35deg);
}


.dropdown {
  padding: 20px 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  position: relative;
  font-size: 18px;
  perspective: 1000px;
  z-index: 100;
}
.dropdown:hover {
  color:#aa8453;
  cursor: pointer;
}
.dropdown:hover .dropdown_menu li {
  display: block;
}

.dropdown_menu {
  position: absolute;
  top: 100%;
  left: 0;
  width: auto;
  perspective: 1000px;
  z-index: -1;
}

.dropdown_menu li {
  display: none;
  color: #fff;
  background-color: #212529;
  padding: 10px 20px;
  font-size: 16px;
  opacity: 0;
}
.dropdown_menu li:hover {
  /* animation: slideLeft 300ms 120ms ease-in-out forwards; */
  color:#aa8453;
}
.dropdown_menu-1 .dropdown_item-1 {
  transform-origin: top center;
  animation: slideDown 300ms 60ms ease-in-out forwards;
  /* animation:  slideDownOut 300ms 60ms ease-in-out forwards; */
 
}
.dropdown_menu-1 .dropdown_item-2 {
  transform-origin: top center;
  animation: slideDown 300ms 60ms ease-in-out forwards;
}
.dropdown_menu-1 .dropdown_item-3 {
  transform-origin: top center;
  animation: slideDown 300ms 60ms ease-in-out forwards;
}
.dropdown_menu-1 .dropdown_item-4 {
  transform-origin: top center;
  animation: slideDown 300ms 60ms ease-in-out forwards;
}
.dropdown_menu-1 .dropdown_item-5 {
  transform-origin: top center;
  animation: slideDown 300ms 60ms ease-in-out forwards;
}

/* FrireFox */
/* @-moz-keyframes slideDown {
  0% {
    opacity: 0;
    transform: translateY(-60px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
} */
/* GoogleChrome
@-webkit-keyframes slideDown {
  0% {
    opacity: 0;
    transform: translateY(-60px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
} */
/* Opera
@-o-keyframes slideDown {
  0% {
    opacity: 0;
    transform: translateY(-60px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
} */
@keyframes slideDown {
  0% {
    opacity: 0;
    /* ระยะเริ่มจากบนลงล่าง */
    transform: translateY(-60px); 
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
  
}
@keyframes slideDownOut {
  0% {
    opacity: 1;
    /* ระยะเริ่มจากบนลงล่าง */
    transform: translateY(0); 
  }
  100% {
    opacity: 0;
    transform: translateY(60px);
  }
  
}
@keyframes slideLeft {
  0% {
   
    opacity: 0;
    transform: translateX(0);
  }
  100% {

   
    opacity: 1;
    transform: translateX(60px);
  }
}
/* .dropdown_item-1 :hover{
  transform-origin: top center;
  animation: slideLeft 300ms 60ms ease-in-out forwards;
} */



/* ฺBODY  */
@keyframes fadeInUp {
    from {
        transform: translate3d(0,40px,0)
    }

    to {
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

@-webkit-keyframes fadeInUp {
    from {
        transform: translate3d(0,40px,0)
    }

    to {
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
    -webkit-animation-duration: 1s;
    -webkit-animation-fill-mode: both
}

.animatedFadeInUp {
    opacity: 0
}

.fadeInUp {
    opacity: 0;
    animation-name: fadeInUp;
    -webkit-animation-name: fadeInUp;
}

 .TextFadeInUP h1 {
    position: relative;
    right:50% ;
    top: 50%;
   
    font-family: 'Gilda Display', serif;
    font-size: 55px;
    text-transform: uppercase;
    line-height: 1.35em;
    color: #fff;
    font-weight: 400;
    letter-spacing: 15px; /*ระยะห่างช่องไฟ*/
    display: flex;
  justify-content: center; /* จัดให้ตัวอักษรอยู่ตรงกลางแนวนอน */
  align-items: center; /* จัดให้ตัวอักษรอยู่ตรงกลางแนวตั้ง */
}
.animated.fadeInUp h1{
  -webkit-animation-delay: .60s; /* หน่วงเวลาเป็น 1 วินาที */
  animation-delay: .60s;
}
.TextFadeInUP h4 {
  position: relative;
    right:50% ;
    top: 50%;

  padding: 5%;

  font-family: 'Barlow Condensed', serif;
    font-size: 15px;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 6px;
    color: #fff;
    margin-bottom: 20px;
    margin-top: 20px;
    -webkit-animation-delay: .40s;
    animation-delay: .40s;
    display: flex;
  justify-content: center; /* จัดให้ตัวอักษรอยู่ตรงกลางแนวนอน */
  align-items: center; /* จัดให้ตัวอักษรอยู่ตรงกลางแนวตั้ง */
}
/*Hoverปุ่มBody*/
.btnfade{
  font-weight: 400;
    font-family: 'Barlow Condensed', sans-serif;
    text-transform: uppercase;
    padding: 12px 20px;
    margin: 30px;
    position: relative;
    right: 22%;
    font-size: 15px;
    letter-spacing: 3px;
    border: 1px solid rgba(255,255,255,0.5);

  background-color: transparent;
  color: white;
  background-image: linear-gradient(to left, rgb(255, 255, 255) 50%, rgba(232, 64, 64, 0) 50%);
  background-size: 200% 100%;
  transition: background-position 0.5s ease;
}
.btnfade:hover{
  border: 1px solid rgba(255,255,255,0.5);
  background-position: -100% 0;
  color: #aa8453;
}
/*Hoverปุ่มBody*/


/*Body1*/
.section-subtitle {
    font-size: 15px;
    font-family: 'Barlow Condensed', sans-serif;
    font-weight: 400;
    color: #aa8453;
    text-transform: uppercase;
    position: relative;
    letter-spacing: 6px;
    margin-bottom: 5px;
}
.section-title {
    font-size: 46px;
    font-family: 'Gilda Display', serif;
    font-weight: 400;
    color: #fff;
    position: relative;
    margin-bottom: 20px;
    line-height: 1.25em;
}
p {
    font-family: 'Barlow', sans-serif;
    font-size: 15px;
    font-weight: 400;
    line-height: 1.75em;
    color: rgba(255,255,255,0.5);
    margin-bottom: 20px;
}
/*Body1*/

</style>

@endsection
@section('content')
<div class="" style="background-color: #212529;" id="App-Home">
  @include('home._body')
  @include('home._body1')
</div>

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('.carousel-control-next').click(function() {
    $('h1').removeClass('animated fadeInUp').addClass('animated fadeInUp').one('animationend', function() {
      $(this).removeClass('animated fadeInUp');
    });
    $('h4').removeClass('animated fadeInUp').addClass('animated fadeInUp').one('animationend', function() {
      $(this).removeClass('animated fadeInUp');
    });
  });

  $('#carouselExampleInterval').on('slid.bs.carousel', function () {
    $('h1').removeClass('animated fadeInUp').addClass('animated fadeInUp').one('animationend', function() {
      $(this).removeClass('animated fadeInUp');
    });
    $('h4').removeClass('animated fadeInUp').addClass('animated fadeInUp').one('animationend', function() {
      $(this).removeClass('animated fadeInUp');
    });
  });
});

const HOME ={
        data(){
            return{
              haed: 'sfdsf',
            }
        },
      methods:{},
      mounted(){

      }
    };
    Vue.createApp(HOME).mount('#App-Home');

</script>
@endsection