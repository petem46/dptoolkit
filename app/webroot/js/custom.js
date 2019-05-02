    $(document).ready(function(){
        setTimeout(function() {
          $('#flashMessage').slideUp();
        }, 3000); // <-- time in milliseconds
    });

function goBack() {
    window.history.back();
}