window.addEventListener( "load", function () {

    function sendData() {
      const XHR = new XMLHttpRequest();
      const FD = new FormData( form );
      XHR.addEventListener( "load", function(event) 
      {
        alert( event.target.responseText );
      } );
      XHR.addEventListener( "error", function( event )
       {
        alert( 'failed');
      } );
  
      XHR.open( "POST", "insert.php" );
  
      XHR.send( FD );
    }
    const form = document.getElementById( "myForm" );
  
    form.addEventListener( "submit", function ( event ) 
    {
      event.preventDefault();
  
      sendData();
    } );
  } );