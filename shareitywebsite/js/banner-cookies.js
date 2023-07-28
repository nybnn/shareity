const botonAllowCookies = document.getElementById('btn-allow-cookies');
// const botonCookiesPolicy = document.getElementById('btn-cookies-policy');
const bannerCookies = document.getElementById('banner-cookies');
const backbannerCookies = document.getElementById('back-banner-cookies');

dataLayer = [];

if(!localStorage.getItem('cookies-allowed')){
	bannerCookies.classList.add('activo');
	backbannerCookies.classList.add('activo');
} else {
	dataLayer.push({'event': 'cookies-allowed'});
}

botonAllowCookies.addEventListener('click', () => {
	bannerCookies.classList.remove('activo');
	backbannerCookies.classList.remove('activo');

	localStorage.setItem('cookies-allowed', true);

	dataLayer.push({'event': 'cookies-allowed'});
});

// botonCookiesPolicy.addEventListener('click', () => {
// 	bannerCookies.classList.remove('activo');
// 	backbannerCookies.classList.remove('activo');
	
// 	localStorage.setItem('cookies-allowed', false);

// });

