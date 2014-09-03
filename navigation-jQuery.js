$( document ).ready( function() {
	//showContent( "main" );
/*
	selectContentLink( "main" );

	$( '#link-main' ).click( function() {
		showContent( "main" );
		selectContentLink( "main" );
		scrollTop();
	});

	$( '#link-projects' ).click( function() {
		showContent( "projects" );
		selectContentLink( "projects" );
		scrollTop();
	});

	$( '#link-contact' ).click( function() {
		showContent( "contact" );
		selectContentLink( "contact" );
		scrollTop();
	});
*/
});

$(function() {
	$( "#tabs" ).tabs({ active: 0 });
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

var animationDuration = 10;

function showContent( content )
{
	if( content == "main" )
	{
		$( "#content-contact, #content-projects" ).addClass( "hidden" );
		$( "#content-main" ).removeClass( "hidden" );
	}
	else if( content == "projects" )
	{
		$( "#content-contact, #content-main" ).addClass( "hidden" );
		$( "#content-projects" ).removeClass( "hidden" );
	}
	else if( content == "contact" )
	{
		$( "#content-projects, #content-main" ).addClass( "hidden" );
		$( "#content-contact" ).removeClass( "hidden" );
	}
	else
	{
		$( "#content-contact, #content-projects" ).addClass( "hidden" );
		$( "#content-main" ).removeClass( "hidden" );
	}
}

function selectContentLink( content )
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

function scrollTop()
{
	$('html, body').animate({
        scrollTop: $("h1").offset().top
    }, animationDuration);
}
