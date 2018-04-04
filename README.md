# Laravel package - biography  
* optimized for Vue.js & Bulma  

## Dependencies  
[vue-router](https://github.com/vuejs/vue-router)  

### Install  
``` bash  
composer require vilbur/biography @dev  
```  

### Publish files  
``` bash  
php artisan vendor:publish --tag="vilbur/biography"  
```  

### app.js  
``` javascript  

// import vilbur-biography view  
const Biography	= () => import('./biography/views/biography.vue');  

// routes for vue-router  
const router = new VueRouter({  
	routes:  
	{  
		path:	'/biography',  
		name:	'biography',  
		component:	Skills  
	},  
});  
```  

### app.scss  
``` scss  
@import 'biography/biography.scss';  
```  