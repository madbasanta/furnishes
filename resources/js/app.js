
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

require('./summernote');
require('./select2');
require('./alerts');
require('./paginations');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
// $(document).ready(function() {
// 	const app = new Vue({
// 	    el: '#app'
// 	});
// });


$(document).ready(function() {
  console.log('ready');
    let bag = location.href;
    let url = bag.substring(bag.indexOf('dashboard'));
    let data = url.split('#');
    if (1 in data) {
        url = data[1];
        data = url.split('/');
        let con = data[0];
        let params = {};
        if(con.indexOf('?') !== -1) {
            params = getUrlParams(con);
            con = con.substring(0, con.indexOf('?'));
        }
        switch (con) {
            case 'orders':
                console.log('orders');
                break;
            case 'products':
                activate_link('#_products');
                let urlparam = getUrlStringParams(location.href) || '';
                load_page('/products' + urlparam, function(){
                    load_table('#products-table-container', 'products/getAllProducts' + urlparam);
                });
                break;
            default:
                load_page('/dash', function() {
                    initChart();
                });
                break;
        }
    } else if(data[0] === 'dashboard') {

        load_page('/dash', function() {
            initChart();
        });
    }
});

window.getUrlParams = function(con) {
    params = {};
    let props = con.indexOf('?') === -1 ? [] : con.substring(con.indexOf('?'), con.length).replace('?', '').split('&');
    for(let i in props) {
        params[props[i].substring(0, props[i].indexOf('='))] = props[i].substring(props[i].indexOf('=') + 1, props[i].length);
    }
    return params;
}

window.getUrlStringParams = function(url) {
    let params = getUrlParams(url);
    let urlparam = '';
    let comma = '?';
    for (let i in params) {
        urlparam += `${comma}${i}=${params[i]}`;
        comma = '&';
    };
    return urlparam;
}

function activate_link(el) {
    $(el).addClass('active').closest('.nav-item')
    .siblings('.nav-item').find('.nav-link').removeClass('active');
}

$(document).ready(function() {
	$('#productSlider').carousel({interval: 10000});
});

$(document).on('click', '#goto-top', function(e) {
	$('html').animate({scrollTop: 0}, 500, 'swing');
});

$(window).on('scroll', function(e) {
	var $el = $('.fixedElement'); 
	  var isPositionFixed = ($el.css('position') == 'fixed');
	  if ($(this).scrollTop() > 120 && !isPositionFixed){ 
	  	let $w = $('#width-cather').width();
	    $el.css({'position': 'fixed', 'top': '30px', 'width' : $w}); 
	  }
	  if ($(this).scrollTop() < 120 && isPositionFixed){
	    $el.css({'position': 'static', 'top': '0px'}); 
	  }
});


$(document).off('click', '#side-bar .nav-link')
.on('click', '#side-bar .nav-link', function(e){
	e.preventDefault();
	let target = $(this);
	let url = $(this).attr('ajax-url');
    if(!url) return;
	load_page(url, function(){
        url = url.replace('/', '');
        switch(url) {
            case 'products':
                load_table('#products-table-container', '/products/getAllProducts');
                break;
            default:
                initChart();
                break;
        }
	});
	activate_link('#' + target.attr('id'));
});


window.replace_url = function(has_url) {
	location.replace(has_url);
}

window.load_page = function(url, callback = '') {
	$('#main').addClass('loading').css('minHeight', 200);
	axios.get(url)
	.then(r => r.data)
	.then(body => {
	    $('#main').html(body).removeClass('loading');
	    if (typeof callback === 'function') {
	    	callback(body);
	    }
	});

	replace_url(url.replace('/', '#'));
}

window.load_table = function(container, url, callback = '')
{
    $(container).css('minHeight', 200).addClass('loading');
    axios.get(url).then(r => r.data)
    .then(table => {
        $(container).html(table).removeClass('loading');
        if (typeof callback === 'function') callback(table);
    })
}

function initChart() {
	var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
}

$(document).off('click', '._show-modal').on('click', '._show-modal', function(e) {
	e.preventDefault();
	let target = $(this);
	if(!target.attr('ajax-url')) return;
	load_modal(target.attr('ajax-url'));
});

window.load_modal = function(url)
{
	axios.get(url).then(r => r.data).then(body => {
		$('#myModal').html(body).removeAttr('tabindex').modal({backdrop: 'static'}).modal('show');
	});
}

/* product add  */
$(document).off('submit', '#product-add').on('submit', '#product-add', function(e){
	e.preventDefault();
	let form = this;
	form.className += ' loading';
	disableSubmit(form);
	axios.post(form.action, new FormData(form))
	.then(r => r.data).then(data => {
		success_alert(data.message);
		$('#myModal').modal('hide');
        params = getUrlParams(location.href);
        let page = params.page || 1;
        load_table('#products-table-container', '/products/getAllProducts?page=' + page);
	}).catch(e => {
		removeLoader(form);
        console.log(e);
		if(typeof e.response !== 'undefined' && e.response.status === 422) {
			$(form).removeClass('loading');
			let errors = e.response.data.errors;
			resetBorders(form);
			enableSubmit(form);
            resetErrorMessages(form);
            setErrorMessages(errors);
		}
	});
});

window.setErrorMessages = function(errors) {
    for (let i in errors) {
        $(form).find(`[name="${i}"]`).css('border', '1px solid brown')
        .closest('.field').find(`.${i}-error`).text(errors[i][0]).css('color', 'brown')
        .siblings('.note-editor').css('border', '1px solid brown');
        $(form).find(`[name="${i}"]`).closest('.field')
        .find('.select2-selection').css('border', '1px solid brown');
    }
}

$(document).off('focus', 'form').on('focus', 'form', function(){
	resetBorders(this);
});

window.resetBorders = function(form) {
    $(form).find(`[name]`).css('border', '1px solid #ccc')
        .siblings('.note-editor').css('border', '1px solid #ccc');
    $(form).find('.select2-selection').css('border', '1px solid #ccc');
}

window.resetErrorMessages = function(form) {
	$(form).find('[name]').each(function(i, el) {
		if(el.type === 'file')
			$(this).siblings(`.file-error`).html('&nbsp;');	
		else
			$(this).closest('.field').find(`.${el.name}-error`).html('&nbsp;');
	});
}

window.disableSubmit = function(form) {
	$(form).closest('.modal').find('.modal-footer button[type="submit"]').prop('disabled', true);
}

window.enableSubmit = function(form) {
	$(form).closest('.modal').find('.modal-footer button[type="submit"]').prop('disabled', false);
}

window.removeLoader = function(form) {
	$(form).removeClass('loading');
}

window.initSelect2 = props => {
	let el = props.id.indexOf('#') !== -1 ? props.id : '#'+props.id;
    props.placeholder = $(el).attr('data-v');
    $(el).select2({
        allowClear: true,
        placeholder : props.placeholder ? props.placeholder : 'Select',
        tags: true,
        ajax: {
            url: props.url,
            cache: true,
            data: function(param) {
                return {
                    q: param.term,
                    page: param.page || 1
                };
            },
            processResults: function(response, params) {
                let results = [];
                $.each(response.data, function(idx, item) {
                    results.push({
                        id: item.id,
                        text: item.name
                    });
                });
                return {
                    results: results,
                    pagination: {
                        more: (params.page * 10) < response.total
                    }
                };
            }
        }
    });
}

let timeoutFunc;
$(document).off('keyup', '#products-search')
.on('keyup', '#products-search', function(e) {
    e.preventDefault();
    let urlparam = '?page=1';
    let param = $('[name="search_col"]').val() || 'name';
    if (this.value.length) urlparam += `&${param}=${this.value}`;
    clearTimeout(timeoutFunc);
    timeoutFunc = setTimeout(() => {
        load_table('#products-table-container', '/products/getAllProducts' + urlparam,
            function(){
                replace_url('#products' + urlparam);
            });
    }, 1000);
});