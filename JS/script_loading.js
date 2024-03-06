
// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    //preloaing next page to have safety
    preload();
  // Set a timeout to navigate to the next page after 7 seconds
  setTimeout(function () {
    Navigate();
  }, 5000); // 5 seconds in milliseconds
});

function Navigate() {
 // Navigate to the next page
  window.location.href = 'Student_Dash/Dashboard.php';//===============================================>>>to be changed
}
function preload() {
    // Create an invisible iframe to preload the next page
    let iframe = document.createElement('iframe');
    iframe.style.display = 'none';
    iframe.src = '../Student_Dash/Dashboard.php';//========================================================>>>to be changed
    document.body.appendChild(iframe);

    // After preloading, remove the iframe
    iframe.onload = function () {
      document.body.removeChild(iframe);
    };
  }     