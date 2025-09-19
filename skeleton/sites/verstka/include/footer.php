<?php

use ZLabs\Asset\AsyncJs;
use ZLabs\Asset\DeferredJs;
use ZLabs\Asset\DeferredStyles;
use ZLabs\Frontend\Helpers\BundlesPathBuilder;
use ZLabs\EnvSingleton;
use ZLabs\Frontend\MustacheSingleton;

/** @var array $pageConfig */
/** @var MustacheSingleton $mustache */
?>
</main>
<footer class="footer">
    <div id="contact" class="footer-list">
        <div class="inner">
            <div class="footer-content">
                <div class="about">
                    <h4>About the store</h4>
                    <p class="about-description">We offer high-quality furniture and home decor products for every style. Our collection combines modern design with timeless elegance. Subscribe to our newsletter to stay updated on the latest trends and exclusive offers.</p>
                </div>

                <nav class="profile">
                    <h4>Profile</h4>
                    <ul>
                        <li><a class="profile-link" href="#">My account</a></li>
                        <li><a class="profile-link" href="#">Help</a></li>
                        <li><a class="profile-link" href="#">Support</a></li>
                    </ul>
                </nav>

                <div class="signUp">
                    <h4>Sign Up for our awesome news</h4>
                    <form>
                        <input type="email" placeholder="Email Address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<? // page-inner
?>
</div>
<?php

$frontendBuilt = EnvSingleton::getInstance()->isFrontendMode();

// Если фронтенд собран, покажем отложенные css файлы
if ($frontendBuilt) {
    echo (new DeferredStyles(BundlesPathBuilder::buildCssAssets($pageConfig['deferredCss']), true))->render();
} else {
    // костыль для вебпак 5 версии. Общий runtime вынесен в отдельный файл
    $pageConfig['deferredJs']->prepend('bundle-runtime');
}

// Эти скрипты всегда будут грузится отложено (defer)
echo (new DeferredJs(BundlesPathBuilder::buildJsAssets($pageConfig['deferredJs']), true))->render();

// Эти скрипты всегда будут грузится отложено (async - нужно использовать scriptsReady в js файлах)
echo (new AsyncJs(BundlesPathBuilder::buildJsAssets($pageConfig['asyncJs']), true))->render();
?>
</body>

</html>