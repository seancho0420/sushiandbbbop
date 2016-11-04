<?php
$page_title = 'Sushi &amp; BBbop - Menu';

include '../common/page/header.inc.php';

$menu = isset($_REQUEST['menu']) ? $_REQUEST['menu'] : '1';

switch($menu) {
    case '1':
        $menu_title = 'Sushi & Roll';
        $menu_content = 'Sushi is cooked vinegared rice combined with other ingredients, '
                . 'usually raw fish or other seafood. ';
        $menu_img = 'menu_1.jpg';
        $img_alt = 'Menu1';
        break;
    case '2':
        $menu_title = 'Korean Cuisine';
        $menu_content = 'Korean cuisine is largely based upon rice, vegetables, and meats. '
                . 'Traditional Korean meals are noted for the number of side dishes.';
        $menu_img = 'menu_2.jpg';
        $img_alt = 'Menu2';
        break;
}
?>

<div id="content-effect">
    <div id="contents">
        <div id="menu-info">
            <div class="details">
                <h1><?php print $menu_title; ?></h1>
                <p>
                    <?php print $menu_content; ?>
                </p>
            </div>
        </div>

		<div class="text-center notification">
			<h3>*Free delivery for orders $20 or more before taxes to the Aura suites.</h3>
		</div>
        <div id="gallery">
            <img src="../images/<?php print $menu_img; ?>" class="menu-img" alt="<?php print $img_alt; ?>">
        </div>
    </div>


    <?php
    include '../common/page/footer.inc.php';
    ?>