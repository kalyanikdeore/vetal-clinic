
</div>


<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    /* =====================================================
       MOBILE SIDEBAR
    ===================================================== */
    const menuToggle =
        document.getElementById("menuToggle");
    const sidebar =
        document.getElementById("sidebar");
    const overlay =
        document.getElementById("sidebarOverlay");
    function openSidebar() {
        sidebar.classList.add("show");
        overlay.classList.add("show");
        document.body.style.overflow = "hidden";
    }

    function closeSidebar() {
        sidebar.classList.remove("show");
        overlay.classList.remove("show");
        document.body.style.overflow = "";
    }

    menuToggle.addEventListener(
        "click",
        function () {
            if (sidebar.classList.contains("show")) {
                closeSidebar();
            } else {
                openSidebar();
            }
        }
    );

    overlay.addEventListener(
        "click",
        closeSidebar
    );


    /* =====================================================
       CLOSE MOBILE SIDEBAR AFTER CLICKING MENU
    ===================================================== */

    document
        .querySelectorAll(".sidebar-menu a")
        .forEach(function(link) {
            link.addEventListener(
                "click",
                function() {
                    if (window.innerWidth <= 991) {
                        closeSidebar();
                    }
                }
            );
        });


    /* =====================================================
       ACTIVE MENU
    ===================================================== */

    document
        .querySelectorAll(".sidebar-menu a")
        .forEach(function(link) {
            link.addEventListener(
                "click",
                function(event) {
                    document
                        .querySelectorAll(".sidebar-menu a")
                        .forEach(function(item) {

                            item.classList.remove("active");

                        });
                    this.classList.add("active");
                }
            );
        });


    /* =====================================================
       RESPONSIVE RESET
    ===================================================== */

    window.addEventListener(
        "resize",
        function() {
            if (window.innerWidth > 991) {
                sidebar.classList.remove("show");
                overlay.classList.remove("show");
                document.body.style.overflow = "";
            }
        }
    );

</script>

</body>
</html>