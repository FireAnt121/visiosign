
// // const editor = new EditorJS({ 
// //     /** 
// //      * Id of Element that should contain the Editor 
// //      */ 
// //     holderId: 'editorjs', 
    
// //     /** 
// //      * Available Tools list. 
// //      * Pass Tool's class or Settings object for each Tool you want to use 
// //      */ 
// //     tools: {
// //         header: {
// //           class: Header,
// //           inlineToolbar : true,
// //           config: {
// //               placeholder : "Entere Heading",
// //           }
// //         },
// //         // ...
// //     },
// //   });
// //   editor.save().then((outputData) => {
// //     console.log('Article data: ', outputData)
// //   }).catch((error) => {
// //     console.log('Saving failed: ', error)
// //   });
 jQuery( document ).ready( function($) {


    if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
	CKEDITOR.tools.enableHtml5Elements( document );

// The trick to keep the editor in the sample quite small
// unless user specified own height.
CKEDITOR.config.height = 150;
CKEDITOR.config.width = 'auto';

var initSample = ( function() {
	var wysiwygareaAvailable = isWysiwygareaAvailable(),
		isBBCodeBuiltIn = !!CKEDITOR.plugins.get( 'bbcode' );

	return function() {
		var editorElement = CKEDITOR.document.getById( 'editor' );

		// :(((
		if ( isBBCodeBuiltIn ) {
			editorElement.setHtml(
				'Hello world!\n\n' +
				'I\'m an instance of [url=https://ckeditor.com]CKEditor[/url].'
			);
		}

		// Depending on the wysiwygarea plugin availability initialize classic or inline editor.
		if ( wysiwygareaAvailable ) {
			CKEDITOR.replace( 'editor' );
		} else {
			editorElement.setAttribute( 'contenteditable', 'true' );
			CKEDITOR.inline( 'editor' );

			// TODO we can consider displaying some info box that
			// without wysiwygarea the classic editor may not work.
		}
	};

	function isWysiwygareaAvailable() {
		// If in development mode, then the wysiwygarea must be available.
		// Split REV into two strings so builder does not replace it :D.
		if ( CKEDITOR.revision == ( '%RE' + 'V%' ) ) {
			return true;
		}

		return !!CKEDITOR.plugins.get( 'wysiwygarea' );
	}
} )();
//     // CKEDITOR.plugins.add( 'timestamp', {

//     //     // Register the icons. They must match command names.
//     //     icons: 'timestamp',
    
//     //     // The plugin initialization logic goes inside this method.
//     //     init: function( editor ) {
    
//     //         // Define the editor command that inserts a timestamp.
//     //         editor.addCommand( 'insertTimestamp', {
    
//     //             // Define the function that will be fired when the command is executed.
//     //             exec: function( editor ) {
//     //                 var now = new Date();
    
//     //                 // Insert the timestamp into the document.
//     //                 editor.insertHtml( 'The current date and time is: <em>' + now.toString() + '</em>' );
//     //             }
//     //         });
    
//     //         // Create the toolbar button that executes the above command.
//     //         editor.ui.addButton( 'Timestamp', {
//     //             label: 'Insert Timestamp',
//     //             command: 'insertTimestamp',
//     //             toolbar: 'insert'
//     //         });
//     //     }
//     // });
//     CKEDITOR.disableAutoInline = true;
//     CKEDITOR.editorConfig = function( config ) {
//         // Define changes to default configuration here.
//         // For complete reference see:
//         // https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html
    
//         // The toolbar groups arrangement, optimized for a single toolbar row.
//         // config.extraPlugins= 'strinsert';
//         config.toolbarGroups = [
//             { name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
//             { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
//             { name: 'editing',     groups: [ 'find', 'selection' ] },
//             { name: 'forms' },
//             { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
//             { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
//             { name: 'links' },
//             { name: 'insert' },
//             { name: 'styles' },
//             { name: 'colors' },
//             { name: 'tools' },
//             { name: 'others' },
//         ];
    
//         // The default plugins included in the basic setup define some buttons that
//         // are not needed in a basic editor. They are removed here.
//         config.removeButtons = 'Cut,Copy,Paste,Undo,Redo,Anchor,Underline,Strike';
    
//         // Dialog windows are also simplified.
//         config.removeDialogTabs = 'link:advanced';
//     };
//     CKEDITOR.config.removePlugins = 'sourcearea,elementspath,save,font';
//     CKEDITOR.config.disableNativeSpellChecker = true;
//     CKEDITOR.stylesSet.add( 'default', [
//         // Block Styles
//         { name: 'Blue Title',       element: 'h3'  ,  attributes: {'class' : 'fg-brown'}},


//         // Inline Styles
//         { name: 'T',   element: 'span',    styles: { 'background-color': 'Yellow' } },
//         { name: 'Marker: Green',    element: 'span',    styles: { 'background-color': 'Lime' } },
    
//         // Object Styles
//         {
//             name: 'Image on Left',
//             element: 'img',
//             attributes: {
//                 style: 'padding: 5px; margin-right: 5px',
//                 border: '2',
//                 align: 'left'
//             }
//         }
//     ] );
// 	//ckeditor initialization
// 	// CKEDITOR.on( 'instanceReady', function ( event ) {

// 	// 	var editor = event.editor,
//     //             element = editor.element;
//     //             console.log(editor.config);
//     //             editor.config.removeButtons = 'Underline,NumberedList';
//     //             editor.config.removePlugins = 'sourcearea,colorbutton,find,flash,font,' +
//     //             'forms,iframe,image,newpage,removeformat,' +
//     //             'smiley,specialchar,stylescombo,templates';
// 	// 	// Customize editors for headers and tag list.
// 	// 	// These editors do not need features like smileys, templates, iframes etc.
// 	// 	if ( element.is( 'h1', 'h2', 'h3' ,'textarea' ) || element.getAttribute( 'id' ) == 'taglist' ) {
// 	// 		// Customize the editor configuration on "configLoaded" event,
// 	// 		// which is fired after the configuration file loading and
// 	// 		// execution. This makes it possible to change the
//     //         // configuration before the editor initialization takes place.


//     //             console.log("created in");
// 	// 			// Remove redundant plugins to make the editor simpler.
// 	// 			editor.config.removePlugins = 'colorbutton,find,flash,font,' +
// 	// 					'forms,iframe,image,newpage,removeformat,' +
// 	// 					'smiley,specialchar,stylescombo,templates';

// 	// 			// Rearrange the toolbar layout.
// 	// 			editor.config.toolbarGroups = [
// 	// 				{ name: 'editing', groups: [ 'basicstyles', 'links' ] },
// 	// 				{ name: 'undo' },
// 	// 				{ name: 'clipboard', groups: [ 'selection', 'clipboard' ] },
// 	// 				{ name: 'about' }
// 	// 			];

// 	// 	}
// 	// } );

// //  InlineEditor
// // 	.create( document.querySelector( '.fireEditor' ) )
// // 	.catch( error => {
// // 		console.error( error );
// // 	} );


 });

