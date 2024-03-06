
document.getElementById("printCertificate").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default link behavior

    // Create an iframe element
    var iframe = document.createElement('iframe');
    iframe.style.display = 'none';

    // Set the source of the iframe to the page you want to print
    iframe.src = this.href; // This will set the source to "main.php" in "../certificate generation/" directory

    // Append the iframe to the body
    document.body.appendChild(iframe);

    // Wait for the iframe to load
    iframe.onload = function() {
        // Once the iframe has loaded, print its contents
        iframe.contentWindow.print();
    };
});

document.getElementById("printApplication").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default link behavior

    // Create an iframe element
    var iframe = document.createElement('iframe');
    iframe.style.display = 'none';

    // Set the source of the iframe to the page you want to print
    iframe.src = this.href; // This will set the source to "main.php" in "../certificate generation/" directory

    // Append the iframe to the body
    document.body.appendChild(iframe);

    // Wait for the iframe to load
    iframe.onload = function() {
        // Once the iframe has loaded, print its contents
        iframe.contentWindow.print();
    };
});