<div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <p class="pull-left">Copyright© GitHub, Inc 2021</p>

            <p class="pull-right">PHP Web Store by <u>serguz</u></p>
        </div>
    </div>
</div>
</footer><!--/Footer-->



<script src="/Eshopper/template/js/jquery.js"></script>
<script src="/Eshopper/template/js/jquery.cycle2.min.js"></script>
<script src="/Eshopper/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/Eshopper/template/js/bootstrap.min.js"></script>
<script src="/Eshopper/template/js/jquery.scrollUp.min.js"></script>
<script src="/Eshopper/template/js/price-range.js"></script>
<script src="/Eshopper/template/js/jquery.prettyPhoto.js"></script>
<script src="/Eshopper/template/js/main.js"></script>
<script>
$(document).ready(function(){
    $(".add-to-cart").click(function () {
        var id = $(this).attr("data-id");
        $.post("/Eshopper/cart/addAjax/"+id, {}, function (data) {
            $("#cart-count").html(data);
        });
        return false;
    });
});
</script>

</body>
</html>
