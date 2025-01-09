/* eslint-disable no-undef */
$(function() {

	// custom select
	$('.js-select').select2({
		minimumResultsForSearch: -1,
		containerCssClass: 'custom-select',
		dropdownCssClass: 'custom-select-drop',
		width: 'auto',
		dropdownAutoWidth : true,
	});  
	
	// custom select
	$('.js-select-border').select2({
		minimumResultsForSearch: -1,
		containerCssClass: 'custom-select custom-select_border',
		dropdownCssClass: 'custom-select-drop custom-select-drop_border',
		width: 'auto',
		dropdownAutoWidth : true,
	});  

	$('.js-select-review').select2({
		minimumResultsForSearch: -1,
		containerCssClass: 'custom-select custom-select_review',
		dropdownCssClass: 'custom-select-drop custom-select-drop_review',
		width: 'auto',
		dropdownAutoWidth : true,
		templateResult: formatOptionDesign,
		templateSelection: formatSelectDesign,
		
	});  

	function formatSelectDesign(item) {
		const selectionText = item.text.split("\\n");
		const $returnString = $('<span>'+selectionText[0] + "<br>" + selectionText[1]+ '</span>');
		return $returnString;
	}

	function formatOptionDesign(item) {
		const selectionText = item.text.split("\\n");
		const $returnString = $('<span>' + selectionText[1] + '</span>');
		return $returnString;
	}
  
});


