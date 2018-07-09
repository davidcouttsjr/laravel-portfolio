let nav = "querySelector('.navbar-collapse')";
$('button#navToggle').on('click', function () {
    if (nav.classList.contains(show)) {
        nav.classList.remove(show);
        nav.classList.add(collapsing);
    }   
});