 
      $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
          $("#sidebar").toggleClass("active");
          $(this).toggleClass("active");
          $('#overlay').toggleClass('active'); // Toggle overlay

          // Check if sidebar is active and if viewport width is less than or equal to 768px (typical mobile view)
    if ($("#sidebar").hasClass("active") && $(window).width() <= 768) {
      $(".wrapper").css({"height": "100vh", "overflow": "hidden"});
    } else {
      $(".wrapper").css({"height": "", "overflow": ""});
    }
        });
      });
   