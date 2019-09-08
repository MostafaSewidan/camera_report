<!--================================================================-->


<script src="../js/respond.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/gnmenu.js"></script>
<script src = "../js/all.min.js"></script>
<script src = "../js/fontawesome.min.js"></script>

<script>
    new gnMenu( document.getElementById( 'gn-menu' ) );

    $(document).ready(function(){
        $("#categore").click(function(){
            $(".list-categore").slideToggle(-200);
        });
    });
</script>