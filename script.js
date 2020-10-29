// DOM MANIPULATION

// NAV TOGGLE
$(".nav-toggle").click(() => $(".nav").toggleClass("nav--visible"));

// Navbar Scroll Effect
$(() => {
  // When the user scrolls the page
  $(document).scroll(() => {
    var $nav = $("#navbar");
    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    // $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    $nav.toggleClass("sticky", $(this).scrollTop() > $nav.height());
  });
});
