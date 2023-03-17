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
  color:#aa8453;
  background-color: #212529;
  
  
}
.dropdown_menu-1 .dropdown_item-1 {
  transform-origin: top center;
  animation: slideDown 300ms 60ms ease-in-out forwards;
  /* animation:  slideDownOut 300ms 60ms ease-in-out forwards; */
 
}
.dropdown_menu-1 .dropdown_item-2 {
  transform-origin: top center;
  animation: slideDown 300ms 120ms ease-in-out forwards;
}
.dropdown_menu-1 .dropdown_item-3 {
  transform-origin: top center;
  animation: slideDown 300ms 180ms ease-in-out forwards;
}
.dropdown_menu-1 .dropdown_item-4 {
  transform-origin: top center;
  animation: slideDown 300ms 240ms ease-in-out forwards;
}
.dropdown_menu-1 .dropdown_item-5 {
  transform-origin: top center;
  animation: slideDown 300ms 300ms ease-in-out forwards;
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




 
</style>

@endsection
@section('content')
@include('home._body')
@endsection