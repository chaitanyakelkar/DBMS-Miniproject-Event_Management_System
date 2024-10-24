

 <head>
 <style>
        /* Forcefully hide the div by overriding any styles */
        #copyright {
            display: none !important;  /* Hides the div */
            visibility: hidden !important;  /* Makes sure it's invisible */
            background-color: transparent !important;  /* No background */
            color: transparent !important;  /* No text color */
            height: 0 !important;  /* Zero height */
            width: 0 !important;  /* Zero width */
            pointer-events: none !important;  /* Disables any interaction */
        }
    </style>
 </head>
 <script src="assets/vendor/js/vendor.bundle.base.js"></script>
 
 
 <script src="assets/vendor/chart.js/Chart.min.js"></script>

 
 
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

 <script src="assets/js/off-canvas.js"></script>
 <script src="assets/js/hoverable-collapse.js"></script>
 <script src="assets/js/misc.js"></script>
 
 
 
 <script src="assets/js/todolist.js"></script>
 <script src="assets/js/file-upload.js"></script>
 


 



 <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="assets/vendor/datatables/dataTables.bootstrap.js"></script>
 <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>


 

<script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
  <script >
 function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 1000);
    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}

onReady(function () {
    show('page', true);
    show('loading', false);
});
</script>

<script>
    // Function to remove the div from the DOM
    function disableDiv() {
        var div = document.getElementById("copyright");
        if (div) {
            div.parentNode.removeChild(div);  // Completely removes the div from the DOM
        }
    }

    // Call the function after a delay to ensure no external scripts re-enable it
    window.onload = function() {
        setTimeout(disableDiv, 100);  // Small delay to ensure removal after load
    };
</script>

<script>
    // Function to find and remove the div with the specific inline styles
    function removeRgbDiv() {
        // Get all divs on the page
        var divs = document.getElementsByTagName('div');
        
        // Loop through all divs to find the one with the specific styles
        for (var i = 0; i < divs.length; i++) {
            var div = divs[i];
            var computedStyle = window.getComputedStyle(div);

            // Check for the unique styles that match the target div
            if (computedStyle.position === 'fixed' && 
                computedStyle.bottom === '0px' && 
                computedStyle.left === '0px' && 
                computedStyle.right === '0px' && 
                computedStyle.color === 'rgb(156, 159, 166)' && 
                computedStyle.backgroundColor === 'rgb(255, 255, 255)') {
                
                // Remove the matching div from the DOM
                div.remove();
            }
        }
    }

    // Call the function to remove the div when the page loads
    window.onload = function() {
        removeRgbDiv();
    };
</script>
