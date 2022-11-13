<script src="./resources/js/main.js"></script>
<script src="./resources/js/slider.js"></script>

<script>
  window.addEventListener("scroll", function () {
    const scrollArrow = document.getElementById("scroll-arrow");
    if (window.scrollY > 650) {
      scrollArrow.style.display = "none";
    } else {
      scrollArrow.style.display = "flex";
    }
  });
</script>