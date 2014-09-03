$( document ).ready( function() {
	showContent( "main" );
	selectContent( "main" );

	$( '#link-main' ).click( function() {
		showContent( "main" );
		selectContent( "main" );
	});

	$( '#link-projects' ).click( function() {
		showContent( "projects" );
		selectContent( "projects" );
	});

	$( '#link-contact' ).click( function() {
		showContent( "contact" );
		selectContent( "contact" );
	});
});
			
$( "a" ).hover( 
	function()
	{
		if( $(this).hasClass( "header-deselected" ) )
		{
			$(this).addClass( "header-hover" );
		}
	}, 
	function()
	{
		$(this).removeClass( "header-hover" );
	}
);
			
function showContent( content )
{
	if( content == "main" )
	{
		$( "#content-main" ).show();
		$( "#content-projects" ).hide();
		$( "#content-contact" ).hide();
	}
	else if( content == "projects" )
	{
		$( "#content-projects" ).show();
		$( "#content-main" ).hide();
		$( "#content-contact" ).hide();
	}
	else if( content == "contact" )
	{
		$( "#content-contact" ).show();
		$( "#content-main" ).hide();
		$( "#content-projects" ).hide();
	}
	else
	{
		$( "#content-main" ).show();
		$( "#content-projects" ).hide();
		$( "#content-contact" ).hide();
	}
}

function selectContent( content )
{
	if( content == "main" )
	{
		$( "#link-main" ).addClass( "header-selected" );
		$( "#link-main" ).removeClass( "header-deselected" );
		$( "#link-projects" ).removeClass( "header-selected" );
		$( "#link-projects" ).addClass( "header-deselected" );
		$( "#link-contact" ).removeClass( "header-selected" );
		$( "#link-contact" ).addClass( "header-deselected" );
	}
	else if( content == "projects" )
	{
		$( "#link-projects" ).addClass( "header-selected" );
		$( "#link-projects" ).removeClass( "header-deselected" );
		$( "#link-main" ).removeClass( "header-selected" );
		$( "#link-main" ).addClass( "header-deselected" );
		$( "#link-contact" ).removeClass( "header-selected" );
		$( "#link-contact" ).addClass( "header-deselected" );
	}
	else if( content == "contact" )
	{
		$( "#link-contact" ).addClass( "header-selected" );
		$( "#link-contact" ).removeClass( "header-deselected" );
		$( "#link-main" ).removeClass( "header-selected" );
		$( "#link-main" ).addClass( "header-deselected" );
		$( "#link-projects" ).removeClass( "header-selected" );
		$( "#link-projects" ).addClass( "header-deselected" );
	}
	else
	{
		$( "#link-main" ).addClass( "header-selected" );
		$( "#link-main" ).removeClass( "header-deselected" );
		$( "#link-projects" ).removeClass( "header-selected" );
		$( "#link-projects" ).addClass( "header-deselected" );
		$( "#link-contact" ).removeClass( "header-selected" );
		$( "#link-contact" ).addClass( "header-deselected" );
	}
}
