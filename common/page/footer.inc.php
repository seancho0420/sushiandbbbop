<div id="footer">
    <!--<div class="header">-->
    <!--        <div class="body">
                <ul>
                    <li>
                        <h4>Lorem Ipsum</h4>
                        <span>&gt; <a href="#header">Dolor Sit Amet</a></span> <span>&gt; <a href="#header">Lorem Ipsum</a></span> <span>&gt; <a href="#header">Nulla Pretium</a></span>
                    </li>
                    <li>
                        <h4>Dolor Sit Amet</h4>
                        <span>&gt; <a href="#header">Dolor Sit Amet</a></span> <span>&gt; <a href="#header">Lorem Ipsum</a></span> <span>&gt; <a href="#header">Nulla Pretium</a></span>
                    </li>
                    <li>
                        <h4>Nulla Pretium</h4>
                        <span>&gt; <a href="#header">Dolor Sit Amet</a></span> <span>&gt; <a href="#header">Lorem Ipsum</a></span> <span>&gt; <a href="#header">Nulla Pretium</a></span>
                    </li>
                    <li class="last-child">
                        <h4>Curabitur</h4>
                        <span>&gt; <a href="#header">Dolor Sit Amet</a></span> <span>&gt; <a href="#header">Lorem Ipsum</a></span> <span>&gt; <a href="#header">Nulla Pretium</a></span>
                    </li>
                </ul>
            </div>-->
    <div class="footer">
        <div id="connect">
            <!--                <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a>
                            <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
                            <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
                            <a href="http://freewebsitetemplates.com/go/vimeo/" target="_blank" class="vimeo"></a>-->
        </div>
        <p>
            &copy;Copyright 2013-2014 Sushi &amp; BBbop. All Rights Reserved.
        </p>
    </div>
    <!--</div>-->
</div>
</div> <!-- content-effect -->
</div> <!-- page -->


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../common/js/effect.js"></script>

<script>
    var menu = '<?php echo $menu; ?>';
    
    $(document).ready(function() {
        if (menu === '1') {
            $("#menu-info").css("background", "url(../images/menu_header_jp.gif) no-repeat right top");
        } else {
            $("#menu-info").css("background", "url(../images/menu_header_kr.gif) no-repeat right top");
        }
    });
</script>

</body>
</html>