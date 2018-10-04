window.addEventListener("load", function(event) {
    $(".accordion").accordion();

    
});

$('.menu .item').tab();

$('.ui.rating')
  .rating()
;


function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


function openFilter() {
    document.getElementById("filterSidebar").style.width = "100%";
    
    document.getElementById("filterSidebar").style.opacity = "1";
}

function closeFilter() {
    document.getElementById("filterSidebar").style.width = "0";
    document.getElementById("filterSidebar").style.opacity = "0";
}



