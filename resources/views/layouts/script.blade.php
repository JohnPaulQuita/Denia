<script src="{{ asset('uikit/js/uikit.min.js') }}"></script>
<script src="{{ asset('uikit/js/uikit-icons.min.js') }}"></script>
<script>
    let mybutton = document.getElementById("teal-btn");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
</script>