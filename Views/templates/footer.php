
        <script src="common/front-end/assets/js/jquery.min.js"></script>
        <script src="common/front-end/assets/js/popper.js"></script>
        <script src="common/front-end/bootstrap/js/bootstrap.min.js"></script>
        <? if($page == 'home'): ?>
            <script src="common/front-end/assets/js/pricing-slider.js"></script>
            <script src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
            <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
        <? else: ?>
            <!-- bootstrap js -->
            <script src="common/assets/templates/basic/js/lib/bootstrap.bundle.min.js"></script>
            <!-- slick  slider js -->
            <script src="common/assets/templates/basic/js/lib/slick.min.js"></script>
            <!-- wow js  -->
            <script src="common/assets/templates/basic/js/lib/wow.min.js"></script>
            <!-- wow js  -->
            <script src="common/assets/templates/basic/js/lib/lightcase.js"></script>
            <script src='common/assets/templates/basic/js/gsap.min.js/index.html'></script>
            <script src='common/assets/templates/basic/js/ScrollTrigger.js'></script>
        <? endif ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="common/front-end/assets/js/jquery.backtothetop.js"></script>
        <?= $close_body_tag_description  ?>
        <? 
            if($loggedA && isset($editor)){
                echo '<script src="admin/plugins/notification/snackbar/snackbar.min.js"></script>';
                echo $editor;
             }
        ?>
    </body>
</html>