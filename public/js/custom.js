$( document ).ready( function() {

    $( '.open-menu' ).click( function() {

        $( '.navbar-collapse' ).fadeIn();

    } );

    $( '.close-menu' ).click( function(){

        $( '.navbar-collapse' ).fadeOut();

    } );

    $( '.carousel-item' ).first().addClass( 'active' );
    $( '.carousel-indicators li' ).first().addClass( 'active' );

    $( '.modal-container' ).click( function(){

        let pic = $(this).find('img').attr('src');
        $( '.modal-body img' ).attr('src', pic);

    } );

    $( '#tab-contents .card-body' ).hide();
    $( '#tab-pickers .list-group-item' ).click( function(){

        $( '#tab-contents .card-body' ).hide();
        let hash = $(this).find('a').attr('id');
        let des = '#'+hash; 
        $('#tab-contents').find(des).show();

    } );

    $( '.details' ).hide();
    $( '.close-details' ).hide();
    $( '.view-details' ).click( function(e){

        e.preventDefault();
        $(this).parent().parent().find('.details').slideDown();
        $('.close-details').show();
        $('.view-details').hide();

    } );
    $( '.close-details' ).click( function(e){ 

        e.preventDefault();
        $(this).parent().parent().find('.details').slideUp();
        $('.view-details').show();
        $('.close-details').hide();

    } );

    setTimeout(function() {

        $('#flash-message').fadeOut();

    }, 700);
    
    $('#leader_picture').on('change', function(){
        
        var reader = new FileReader();
        reader.onload = function(e) {
            if ( $('.old-uploaded-thumbnail').length ) {
                $('.old-uploaded-thumbnail').hide();
            } 
            $("<img />", {
                "src": e.target.result,
                    "class": "old-uploaded-thumbnail uploaded-thumbnail img-thumbnail mt-3"
            }).appendTo(leader_picture_holder);
        }
        $('#leader_picture_holder').show();
        reader.readAsDataURL($(this)[0].files[0]);

    });

    $('#partner_logo').on('change', function(){
        
        var reader = new FileReader();
        reader.onload = function(e) {
            if ( $('.old-uploaded-thumbnail').length ) {
                $('.old-uploaded-thumbnail').hide();
            } 
            $("<img />", {
                "src": e.target.result,
                    "class": "old-uploaded-thumbnail uploaded-thumbnail img-thumbnail mt-3"
            }).appendTo(partner_picture_holder);
        }
        $('#partner_picture_holder').show();
        reader.readAsDataURL($(this)[0].files[0]);

    });
    
    $('#project_picture').on('change', function(){
        
        var reader = new FileReader();
        reader.onload = function(e) {
            if ( $('.old-uploaded-thumbnail').length ) {
                $('.old-uploaded-thumbnail').hide();
            } 
            $("<img />", {
                "src": e.target.result,
                    "class": "old-uploaded-thumbnail uploaded-thumbnail img-thumbnail mt-3"
            }).appendTo(project_picture_holder);
        }
        $('#project_picture_holder').show();
        reader.readAsDataURL($(this)[0].files[0]);

    });

    value = $('#featured').val();

    if (value == '1') {

        $('#featured').attr('checked', 'checked');

    } else {

        $('#featured').removeAttr('checked');

    }

    $('#featured').click(function(){

        if ($(this).val() == '0') {

            $(this).val('1');
            $('#featured').attr('checked', 'checked');
            
        } else {

            $(this).val('0');
            $('#featured').removeAttr('checked');
        }

    });

    

    
} );