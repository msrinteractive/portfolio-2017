// MSR Interactive portfolio - copyright @ 2017 Michael Scott Riccardi

function hideAll(){
    $('#projects').hide();
    $('#about').hide();
    $('#contact').hide();
    $('#fh5co-offcanvass').removeClass('fh5co-awake');
    return false;
}

$('.about-trigger').click(function(){
    hideAll();
    $('#about').show('slide');
    return false;
});

$('.contact-trigger').click(function(){
    hideAll();
    $('#contact').show('slide');
    return false;
});

$('.projects-trigger').click(function(){
    hideAll();
    $('#projects').show('slide');
    return false;
});

function showContact(){
    hideAll();
    $('#contact').show('slide');
    return false;
}
