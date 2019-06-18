function nav() {

    var toggle = $('#navigation-trigger'),
        navContainer = $('#navigation-items'),
        navLink = $('#navigation-items li a');
        sideBar = $('#sidebar');

    toggle.on('click', function(){
        navContainer.toggleClass('active');
        sideBar.toggleClass('active');
    });

    navLink.on('click', function(){
        navContainer.removeClass('active');
        sideBar.removeClass('active');
    });

};

nav();
