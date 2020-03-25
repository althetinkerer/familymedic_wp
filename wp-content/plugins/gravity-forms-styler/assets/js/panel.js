// General panel scripts .
function gravity_forms_styler_randomUUID() {
		var s = [], itoh = '0123456789ABCDEF';
		for (var i = 0; i <6; i++) s[i] = Math.floor(Math.random()*0x10);
		return s.join('');
}
var gravity_forms_styler_field_callbacks = [];
jQuery('document').ready(function($){
	// add row
	$('body').on('click', '.gravity-forms-styler-add-group-row', function(){
		var clicked = $( this ),
			rowid = gravity_forms_styler_randomUUID(),
			template = $( '#' + clicked.data('rowtemplate')).html().replace(/{{id}}/g, rowid);
			if(clicked.data('field')){	
				var ref = clicked.data('field').split('-');
				template = template.replace(/\_\_i\_\_/g, ref[ref.length-2]);
			}
			//console.log(clicked.parent().parent().find('.groupitems').last());
			template = template.replace(/\_\_count\_\_/g, clicked.parent().parent().find('.groupitems').length);
			clicked.parent().before(template);

			for(var callback in gravity_forms_styler_field_callbacks){
				if( typeof window[gravity_forms_styler_field_callbacks[callback]] === 'function'){
					window[gravity_forms_styler_field_callbacks[callback]]();
				}
			}

	});
	$('body').on('click', '.gravity-forms-styler-removeRow', function(){
		$(this).next().remove();
		$(this).remove();
		////console.log(this);
	});
	// tabs
	$('body').on('click', '.gravity-forms-styler-metabox-config-nav li a, .gravity-forms-styler-shortcode-config-nav li a, .gravity-forms-styler-settings-config-nav li a, .gravity-forms-styler-widget-config-nav li a', function(){
		$(this).parent().parent().find('.current').removeClass('current');
		$(this).parent().parent().parent().parent().find('.group').hide();
		$(''+$(this).attr('href')+'').show();
		$(this).parent().addClass('current');
		if($(this).data('tabset').length){
			$('#'+$(this).data('tabset')).val($(this).data('tabkey'));
		}
		return false;
	});

	// initcallbacks
	setInterval(function(){
		$('.gravity-forms-styler-init-callback').each(function(k,v){
			var callback = $(this);
			if( typeof window[callback.data('init')] === 'function'){
				console.log(callback.data('init'));
				window[callback.data('init')]();
				callback.removeClass('gravity-forms-styler-init-callback');
			}
		});
	}, 100);
});
