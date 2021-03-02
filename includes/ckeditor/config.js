CKEDITOR.editorConfig = function( config ) {
	config.toolbarGroups = [
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		'/',
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		'/',
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];
	config.format_page_header = { element: 'h1', attributes: { 'class': 'editorTitle1' } };
	config.format_h2 = { element: 'h2', attributes: { 'class': 'editorTitle2' } };
	config.format_pre = { element: 'pre', attributes: { 'class': 'editorCode' } };
	config.colorButton_colors = 'ffffff,f2f2f2,fafafa,cccccc,999999,666666,333333,000000,aa8c46,5064be,8ca5aa,343a40';
	config.fontSize_style = {
		element: 'div',
		attributes: { 'class': '#(size)' },
		overrides: [ {
			element: 'font', attributes: { 'size': null }
		} ]
	};
	config.enterMode = CKEDITOR.ENTER_BR;
	config.extraPlugins = 'lineheight';
	config.line_height = "0;0.5;1;1.1;1.2;1.3;1.4;1.5;2;3;4;5;6;7;8;9;10;11;12" ;
	config.lineHeight_style = {
		element: 'div',
		styles: { 'line-height': '#(size)' },
		overrides: [ {
		element: 'line-height', attributes: { 'size': null }
		} ]
	};
	config.fontSize_sizes = '12/display-13;15/display-12;16/display-2;18/display-10;20/display-1;24/display-9;26/display-4;28/display-14;'+
	'30/display-5;35/display-8;40/display-11;45/display-6;65/display-3;112/display-7;';
	config.font_names = 'Work Sans/Work Sans, sans-serif;' +
	'Mark Regular Italic/Mark-Regular-Italic;' +
	'Mark Regular/Mark-Pro;' +
	'Mark Pro Medium/Mark-Pro-Medium'+
	'Mark Book/Mark-Book;';
	config.removeButtons = 'Save,NewPage,Print,Preview,Templates,Select,Textarea,TextField,Radio,Checkbox,Form,HiddenField,Image,Flash,Smiley,PageBreak,Iframe,About,Button,ImageButton';
};

