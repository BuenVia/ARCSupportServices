// Navbar
function navHead() {
    let nav = document.getElementById("navbar");
    if(nav.className === "header") {
        nav.className += " responsive";
    } else {
        nav.className = "header";
    }
}

// Multiple Photos

    $(document).ready(function(){
        $('.add_more').click(function(e){
          e.preventDefault();
          $(this).before("<input name='file[]' type='file'/>");
        });
      });