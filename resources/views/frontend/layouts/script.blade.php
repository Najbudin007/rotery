<script src="{{ asset('/resources/js/main.js') }}"></script>
@yield('scripts')
<script>
    window.addEventListener("scroll", function() {
        const scrollArrow = document.getElementById("scroll-arrow");
        if (window.scrollY > 650) {
            scrollArrow.style.display = "none";
        } else {
            scrollArrow.style.display = "flex";
        }
    });
</script>
