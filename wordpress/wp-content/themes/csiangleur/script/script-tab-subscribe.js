( function() {

    "use strict";

    var fPageIsLoaded,
        fExternalLinkIsClicked,
        fTabLinkIsClicked,
        $tabLinks,
        $tabPanes;

    fExternalLinkIsClicked = function( oEvent ) {
        var sURL;

        oEvent.preventDefault();

        sURL = this.getAttribute( "href" );

        window.open( sURL, "_new" );
    };

    fTabLinkIsClicked = function( oEvent ) {
        var sTargetPaneID,
            i;

        oEvent.preventDefault();

        // 0. do nothing if current link is already active
        if ( this.parentNode.className.indexOf( "aside__container--active" ) > -1 ) {
            return;
        }

        // 1. remove active class on pane
        for ( i = 0 ; i < $tabPanes.length ; i++ ) {
            if ( $tabPanes[ i ].className.indexOf( "subscription__active" ) > -1 ) {
                $tabPanes[ i ].className = "subscription__article";
            }
        }

        // 2. get target pane
        sTargetPaneID = this.getAttribute( "data-tab-target" );
        console.log(sTargetPaneID.className);

        // 3. add active class on target pane
        document.getElementById( sTargetPaneID ).className = "subscription__article subscription__active";

        // 4. remove active class from link
        for ( i = 0 ; i < $tabLinks.length ; i++ ) {
            $tabLinks[ i ].parentNode.className = $tabLinks[ i ].parentNode.className.replace( "aside__container--active", "" );
        }

        // 5. add active class on current link
        this.parentNode.className = "aside__container aside__container--active";
    };

    fPageIsLoaded = function() {
        var $externalLinks,
            i;

        // external links
        $externalLinks = document.querySelectorAll( "a[rel=\"external\"]" );

        for ( i = 0 ; i < $externalLinks.length ; i++ ) {
            $externalLinks[ i ].addEventListener( "click", fExternalLinkIsClicked );
        }

        // tab panes
        $tabLinks = document.querySelectorAll( ".subscription__aside div a" );
        $tabPanes = document.querySelectorAll( ".subscription__article" );

        for ( i = 0 ; i < $tabLinks.length ; i++ ) {
            $tabLinks[ i ].addEventListener( "click", fTabLinkIsClicked );
        }
    };

    window.addEventListener( "load", fPageIsLoaded );

} )();
