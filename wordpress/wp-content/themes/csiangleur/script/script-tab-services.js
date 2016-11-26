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
        if ( this.parentNode.className.indexOf( "information__choix--active" ) > -1 ) {
            return;
        }

        // 1. remove active class on pane
        for ( i = 0 ; i < $tabPanes.length ; i++ ) {
            if ( $tabPanes[ i ].className.indexOf( "information__content--active" ) > -1 ) {
                $tabPanes[ i ].className = "information__content";
            }
        }

        // 2. get target pane
        sTargetPaneID = this.getAttribute( "data-tab-target" );

        // 3. add active class on target pane
        document.getElementById( sTargetPaneID ).className = "information__content information__content--active";


        // 4. remove active class from link
        for ( i = 0 ; i < $tabLinks.length ; i++ ) {
            $tabLinks[ i ].parentNode.className = $tabLinks[ i ].parentNode.className.replace( "information__choix--active", "" );
        }

        // 5. add active class on current link
        this.parentNode.className = "information__choix information__choix--active";
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
        $tabLinks = document.querySelectorAll( ".information__container div a" );
        $tabPanes = document.querySelectorAll( ".information__content" );

        for ( i = 0 ; i < $tabLinks.length ; i++ ) {
            $tabLinks[ i ].addEventListener( "click", fTabLinkIsClicked );
        }
    };

    window.addEventListener( "load", fPageIsLoaded );

} )();
