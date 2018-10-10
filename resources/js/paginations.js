/* products-links pagination */
$(document).off('click', '.products-links .pagination .page-link')
.on('click', '.products-links .pagination .page-link', function(e){
	e.preventDefault();
	if(!this.href) return;
	let page = this.href.charAt(this.href.length - 1);

	let params = getUrlParams(location.href);
	params.page = page;
	let urlparam = "?" + $.param(params);

	replace_url('#products' + urlparam);
	let container = $('#products-table-container');
	container.css('minHeight', 200).addClass('loading');
	let replace_string = getUrlStringParams(this.href);
	axios.get(this.href.replace(replace_string, urlparam)).then(r => r.data)
	.then(data => {
		container.html(data);
		container.removeClass('loading');
	});
});