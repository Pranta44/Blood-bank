<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cssui-usercard{
  box-sizing: border-box;
  display: flex;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
  flex-direction: column;
  background-color: #fff;  
  margin: 2rem auto 1rem;
  position: relative;
  z-index: 5;
}

@media screen and (min-width: 641px){

  .cssui-usercard{
    width: 38rem;
  }
}

@media screen and (max-width: 640px){

  .cssui-usercard{
    width: 90%;
  }
}

.cssui-usercard__body{
  padding-bottom: 2rem;
  flex-grow: 2;
  color: #000;
}

.cssui-usercard__header{
  padding: 3rem 5% 2rem;
  display: flex;
  align-items: center;
  background-image: linear-gradient(to bottom, #3F51B5, #041886);
  color: #fff;  
}

.cssui-usercard__avatar{
  border-radius: 50%;
  border: 4px solid #fff;
  box-sizing: border-box;
  margin-right: 4%;
  width: 10rem;
  height: 10rem;
}

.cssui-usercard__name{
  font-size: 3.5rem;
  font-weight: 300;
  margin-top: 0;  
  margin-bottom: 0;  
}

.cssui-usercard__name-label{
  font-weight: 700;
}

.cssui-usercard__post{
  display: block;
}

.cssui-usercard__title{
  padding: 0 5% 1.5rem;
  margin-top: 0;
  margin-bottom: 3rem;
  font-size: 2.4rem;
  font-weight: 300;
  color: #fff;  
  background-color: #041886;  
}

.cssui-stats{
  box-sizing: border-box;
  font-size: 1.4rem;
}

.cssui-stats__name, .cssui-stats__value{
  display: block;
  word-break: break-all;
}

.cssui-stats__value{
  text-decoration: none;
  color: inherit;
  margin-top: .2em;
}

.cssui-usercard__stats{
  padding-right: 4%;
  padding-left: 4%;
  text-align: center;
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  align-items: flex-start;
}

.cssui-usercard__stats-item{
  width: 48%;
  margin-top: 3rem;
}

.cssui-usercard__stats-item:first-child,
.cssui-usercard__stats-item:nth-child(2){
  margin-top: 0;
}

.cssui-usercard__stats-info{
  margin-top: .7rem;
}

.cssui-usercard__stats-name{
  font-weight: 700;
  font-size: 1.6rem;
}

.cssui-usercard__footer{
  padding: 1.5rem 4%;
  text-align: center;
  background-color: #3F51B5;
  color: #fff;  
}

.cssui-icon{
  width: 2em;
  height: 2em;
  display: inline-block;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size: contain;
}

.cssui-social{
  display: inline-block;
  vertical-align: middle;
  position: relative;
  overflow: hidden;
}

.cssui-social__name{
  position: absolute;
  left: -9999px;
}

.cssui-usercard__social{
  margin-right: 1.6rem;
  font-size: .8rem;
}

.cssui-usercard__social:last-child{
  margin-right: 0;
}

.cssui-slider{
  position: relative;
  overflow: hidden;
  box-sizing: border-box;
  height: 32rem;
}

.cssui-slider__slides{
  height: 100%;
  transform: translate3d(0, 0, 0);
  transition: transform .4s;  
}

.cssui-slider__slide{
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;  
}

.cssui-slider__slide:nth-of-type(1){
  left: 0;
}

.cssui-slider__slide:nth-of-type(2){
  left: 100%;
}

.cssui-slider__slide:nth-of-type(3){
  left: 200%;
}

.cssui-slider__control{
  width: 1.2rem;
  height: 1.2rem;
  display: block;
  border-radius: 50%;
  cursor: pointer;
  text-indent: -9999px;
  position: absolute;
  z-index: 3;
}

.cssui-usercard__switch{
  position: absolute;
  top: 0;
  left: -9999px;
}

.cssui-slider__switch:nth-of-type(1):checked ~ .cssui-slider__slides{
  transform: translate3d(0%, 0, 0);
}

.cssui-slider__switch:nth-of-type(2):checked ~ .cssui-slider__slides{
  transform: translate3d(-100%, 0, 0);
}

.cssui-slider__switch:nth-of-type(3):checked ~ .cssui-slider__slides{
  transform: translate3d(-200%, 0, 0);
}

.cssui-usercard__switch:checked + .cssui-slider__control:before{
  transform: scale(0.7) translateZ(0);
}

.cssui-usercard__control{
  border: 3px solid #3F51B5;
  overflow: hidden;
  position: absolute;
  margin-left: -.75rem;
  bottom: 1rem;
  z-index: 2;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: translateZ(0);
}

.cssui-usercard__control:before{
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  transform: scale(0) translateZ(0);
  background-color: #3F51B5;
  transition: transform .2s ease-out;
}

.cssui-usercard__control:nth-of-type(1){
  left: 40%;
}

.cssui-usercard__control:nth-of-type(2){
  left: 50%;
}

.cssui-usercard__control:nth-of-type(3){
  left: 60%;
}

/*
* demo styles
*/

@media screen and (min-width: 981px){

  html{
    font-size: 62.5%;
  }
}

@media screen and (min-width: 641px) and (max-width: 980px){

  html{
    font-size: 9px;
  }
}

@media screen and (max-width: 640px){

  html{
    font-size: 8px;
  }
}

body{
  font-family: "Roboto", "Arial", sans-serif;
  font-size: 1.6rem;
  color: #fff;
  margin: 0;
  min-height: 100vh;
  overflow-x: hidden;
  background-image: linear-gradient(29deg, #512DA8 50%, #673AB7 50%);
}

a{
  color: inherit;
  text-decoration: none;
}

.footer{
  text-align: center;
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
  position: relative;
  z-index: 5;
}

@media screen and (max-width: 640px){

  .footer{
    font-size: 1.4rem;
  }
}

.footer__container{
  display: flex;
  justify-content: center;
}

.melnik909{
  margin-left: 2rem;
}

/* loading icons */

.icon-earth{
  background-image: url("https://stas-melnikov.ru/demo-icons/capital-letter-colored.svg");
}

.icon-location{
  background-image: url("https://stas-melnikov.ru/demo-icons/location-colored.svg");
}

.icon-calendar{
  background-image: url("https://stas-melnikov.ru/demo-icons/calendar-colored.svg");
}

.icon-man-woman{
  background-image: url("https://stas-melnikov.ru/demo-icons/family-colored.svg");
}

.icon-twitter{
  background-image: url("https://stas-melnikov.ru/demo-icons/twitter-white.svg");
}

.icon-linkedin{
  background-image: url("https://stas-melnikov.ru/demo-icons/linkedin-white.svg");
}

.icon-codepen{
  background-image: url("https://stas-melnikov.ru/demo-icons/codepen-white.svg");
}

.icon-html{
  background-image: url("https://stas-melnikov.ru/demo-icons/html5-colored.svg");
}

.icon-angular{
  background-image: url("https://stas-melnikov.ru/demo-icons/angular-colored.svg");
}

.icon-vue{
  background-image: url("https://stas-melnikov.ru/demo-icons/vue-colored.svg");
}

.icon-js{
  background-image: url("https://stas-melnikov.ru/demo-icons/server-js-colored.svg");
}

.icon-email{
  background-image: url("https://stas-melnikov.ru/demo-icons/mail-colored.svg");
}

.icon-phone{
  background-image: url("https://stas-melnikov.ru/demo-icons/iphone-colored.svg");
}

.icon-whatsapp{
  background-image: url("https://stas-melnikov.ru/demo-icons/whatsapp-colored.svg");
}

.icon-skype{
  background-image: url("https://stas-melnikov.ru/demo-icons/skype-colored.svg");
}

    </style>
</head>
<body>
<article class="cssui-usercard">
		<div class="cssui-usercard__body">
			<header class="cssui-usercard__header">
				<img src="img/pranta.jpeg" class="cssui-usercard__avatar" alt="Avatar">
				<div class="cssui-usercard__header-info">
					<h3 class="cssui-usercard__name">Pranta  <span class="cssui-usercard__name-label">Banik</span></h3>
					<span class="cssui-usercard__post">Web Developer</span>
				</div>
			</header>
			<div class="cssui-usercard__content">
				<div class="cssui-slider">

					<!-- the control elements of slider -->

					<input id="slide1" type="radio" class="cssui-slider__switch cssui-usercard__switch" name="slider-controls" checked autofocus>
					<label for="slide1" class="cssui-slider__control cssui-usercard__control"></label>
					<input id="slide2" type="radio" class="cssui-slider__switch cssui-usercard__switch" name="slider-controls">
					<label for="slide2" class="cssui-slider__control cssui-usercard__control"></label>
					<input id="slide3" type="radio" class="cssui-slider__switch cssui-usercard__switch" name="slider-controls">
					<label for="slide3" class="cssui-slider__control cssui-usercard__control"></label>

					<div class="cssui-slider__slides">

						<!-- first slide -->

						<div class="cssui-slider__slide">
							<h4 class="cssui-usercard__title">About me</h4>
							<div class="cssui-usercard__stats">
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-earth"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Language</span>
										<span class="cssui-stats__value">English</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-location"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Hometown</span>
										<span class="cssui-stats__value">Dhaka</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-calendar"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Date of birth</span>
										<span class="cssui-stats__value">11 November 1999</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-man-woman"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Relationship</span>
										<span class="cssui-stats__value">Single</span>
									</div>
								</div>
							</div>
						</div>

						<!-- second slide -->

						<div class="cssui-slider__slide">
							<h4 class="cssui-usercard__title">My Skills</h4>
							<div class="cssui-usercard__stats">
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-html"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">PHP</span>
										<span class="cssui-stats__value">85%</span>
									</div>
								</div>
								
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-angular"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">HTML</span>
										<span class="cssui-stats__value">70%</span>
									</div>
								</div>
								
							</div>
						</div>

						<!-- third slide -->

						<div class="cssui-slider__slide">
							<h4 class="cssui-usercard__title">My Contacts</h4>
							<div class="cssui-usercard__stats">
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-email"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">E-mail</span>
										<a href="#0" class="cssui-stats__value">pranta1707044.com</a>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-phone"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Phone</span>
										<a href="tel:79000000000" class="cssui-stats__value">01622733936</a>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-whatsapp"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">WhatsApp</span>
										<span class="cssui-stats__value">01622733936</span>
									</div>
								</div>
								<div class="cssui-stats cssui-usercard__stats-item">
									<i class="cssui-icon icon-skype"></i>
									<div class="cssui-stats__info cssui-usercard__stats-info">
										<span class="cssui-stats__name cssui-usercard__stats-name">Facebook</span>
										<span class="cssui-stats__value">Pranta Banik</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</article>
  <footer class="footer">
    <div class="main-container footer__container">
      <div class="footer__column">
        <span>You liked?</span>
        <a href="https://www.paypal.me/melnik909" class="donate"  rel="noopener noreferrer" >Thanks</a>
      </div>
      <a href="https://stas-melnikov.ru" class="melnik909"  rel="noopener noreferrer" >Developed by Pranta Banik</a>
    </div>
  </footer>
</body>
</html>