<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;


use App\Models\QuickTip;
use App\Rules\PhoneNumber;

class HomeController extends Controller
{
    public function welcomee()
    {
        $icons=[
            "fab fa-500px",
            "fab fa-accessible-icon",
            "fab fa-accusoft",
            "fas fa-address-book", "far fa-address-book",
            "fas fa-address-card", "far fa-address-card",
            "fas fa-adjust",
            "fab fa-adn",
            "fab fa-adversal",
            "fab fa-affiliatetheme",
            "fab fa-algolia",
            "fas fa-align-center",
            "fas fa-align-justify",
            "fas fa-align-left",
            "fas fa-align-right",
            "fab fa-amazon",
            "fas fa-ambulance",
            "fas fa-american-sign-language-interpreting",
            "fab fa-amilia",
            "fas fa-anchor",
            "fab fa-android",
            "fab fa-angellist",
            "fas fa-angle-double-down",
            "fas fa-angle-double-left",
            "fas fa-angle-double-right",
            "fas fa-angle-double-up",
            "fas fa-angle-down",
            "fas fa-angle-left",
            "fas fa-angle-right",
            "fas fa-angle-up",
            "fab fa-angrycreative",
            "fab fa-angular",
            "fab fa-app-store",
            "fab fa-app-store-ios",
            "fab fa-apper",
            "fab fa-apple",
            "fab fa-apple-pay",
            "fas fa-archive",
            "fas fa-arrow-alt-circle-down", "far fa-arrow-alt-circle-down",
            "fas fa-arrow-alt-circle-left", "far fa-arrow-alt-circle-left",
            "fas fa-arrow-alt-circle-right", "far fa-arrow-alt-circle-right",
            "fas fa-arrow-alt-circle-up", "far fa-arrow-alt-circle-up",
            "fas fa-arrow-circle-down",
            "fas fa-arrow-circle-left",
            "fas fa-arrow-circle-right",
            "fas fa-arrow-circle-up",
            "fas fa-arrow-down",
            "fas fa-arrow-left",
            "fas fa-arrow-right",
            "fas fa-arrow-up",
            "fas fa-arrows-alt",
            "fas fa-arrows-alt-h",
            "fas fa-arrows-alt-v",
            "fas fa-assistive-listening-systems",
            "fas fa-asterisk",
            "fab fa-asymmetrik",
            "fas fa-at",
            "fab fa-audible",
            "fas fa-audio-description",
            "fab fa-autoprefixer",
            "fab fa-avianex",
            "fab fa-aviato",
            "fab fa-aws",
            "fas fa-backward",
            "fas fa-balance-scale",
            "fas fa-ban",
            "fab fa-bandcamp",
            "fas fa-barcode",
            "fas fa-bars",
            "fas fa-bath",
            "fas fa-battery-empty",
            "fas fa-battery-full",
            "fas fa-battery-half",
            "fas fa-battery-quarter",
            "fas fa-battery-three-quarters",
            "fas fa-bed",
            "fas fa-beer",
            "fab fa-behance",
            "fab fa-behance-square",
            "fas fa-bell", "far fa-bell",
            "fas fa-bell-slash", "far fa-bell-slash",
            "fas fa-bicycle",
            "fab fa-bimobject",
            "fas fa-binoculars",
            "fas fa-birthday-cake",
            "fab fa-bitbucket",
            "fab fa-bitcoin",
            "fab fa-bity",
            "fab fa-black-tie",
            "fab fa-blackberry",
            "fas fa-blind",
            "fab fa-blogger",
            "fab fa-blogger-b",
            "fab fa-bluetooth",
            "fab fa-bluetooth-b",
            "fas fa-bold",
            "fas fa-bolt",
            "fas fa-bomb",
            "fas fa-book",
            "fas fa-bookmark", "far fa-bookmark",
            "fas fa-braille",
            "fas fa-briefcase",
            "fab fa-btc",
            "fas fa-bug",
            "fas fa-building", "far fa-building",
            "fas fa-bullhorn",
            "fas fa-bullseye",
            "fab fa-buromobelexperte",
            "fas fa-bus",
            "fab fa-buysellads",
            "fas fa-calculator",
            "fas fa-calendar", "far fa-calendar",
            "fas fa-calendar-alt", "far fa-calendar-alt",
            "fas fa-calendar-check", "far fa-calendar-check",
            "fas fa-calendar-minus", "far fa-calendar-minus",
            "fas fa-calendar-plus", "far fa-calendar-plus",
            "fas fa-calendar-times", "far fa-calendar-times",
            "fas fa-camera",
            "fas fa-camera-retro",
            "fas fa-car",
            "fas fa-caret-down",
            "fas fa-caret-left",
            "fas fa-caret-right",
            "fas fa-caret-square-down", "far fa-caret-square-down",
            "fas fa-caret-square-left", "far fa-caret-square-left",
            "fas fa-caret-square-right", "far fa-caret-square-right",
            "fas fa-caret-square-up", "far fa-caret-square-up",
            "fas fa-caret-up",
            "fas fa-cart-arrow-down",
            "fas fa-cart-plus",
            "fab fa-cc-amex",
            "fab fa-cc-apple-pay",
            "fab fa-cc-diners-club",
            "fab fa-cc-discover",
            "fab fa-cc-jcb",
            "fab fa-cc-mastercard",
            "fab fa-cc-paypal",
            "fab fa-cc-stripe",
            "fab fa-cc-visa",
            "fab fa-centercode",
            "fas fa-certificate",
            "fas fa-chart-area",
            "fas fa-chart-bar", "far fa-chart-bar",
            "fas fa-chart-line",
            "fas fa-chart-pie",
            "fas fa-check",
            "fas fa-check-circle", "far fa-check-circle",
            "fas fa-check-square", "far fa-check-square",
            "fas fa-chevron-circle-down",
            "fas fa-chevron-circle-left",
            "fas fa-chevron-circle-right",
            "fas fa-chevron-circle-up",
            "fas fa-chevron-down",
            "fas fa-chevron-left",
            "fas fa-chevron-right",
            "fas fa-chevron-up",
            "fas fa-child",
            "fab fa-chrome",
            "fas fa-circle", "far fa-circle",
            "fas fa-circle-notch",
            "fas fa-clipboard", "far fa-clipboard",
            "fas fa-clock", "far fa-clock",
            "fas fa-clone", "far fa-clone",
            "fas fa-closed-captioning", "far fa-closed-captioning",
            "fas fa-cloud",
            "fas fa-cloud-download-alt",
            "fas fa-cloud-upload-alt",
            "fab fa-cloudscale",
            "fab fa-cloudsmith",
            "fab fa-cloudversify",
            "fas fa-code",
            "fas fa-code-branch",
            "fab fa-codepen",
            "fab fa-codiepie",
            "fas fa-coffee",
            "fas fa-cog",
            "fas fa-cogs",
            "fas fa-columns",
            "fas fa-comment", "far fa-comment",
            "fas fa-comment-alt", "far fa-comment-alt",
            "fas fa-comments", "far fa-comments",
            "fas fa-compass", "far fa-compass",
            "fas fa-compress",
            "fab fa-connectdevelop",
            "fab fa-contao",
            "fas fa-copy", "far fa-copy",
            "fas fa-copyright", "far fa-copyright",
            "fab fa-cpanel",
            "fab fa-creative-commons",
            "fas fa-credit-card", "far fa-credit-card",
            "fas fa-crop",
            "fas fa-crosshairs",
            "fab fa-css3",
            "fab fa-css3-alt",
            "fas fa-cube",
            "fas fa-cubes",
            "fas fa-cut",
            "fab fa-cuttlefish",
            "fab fa-d-and-d",
            "fab fa-dashcube",
            "fas fa-database",
            "fas fa-deaf",
            "fab fa-delicious",
            "fab fa-deploydog",
            "fab fa-deskpro",
            "fas fa-desktop",
            "fab fa-deviantart",
            "fab fa-digg",
            "fab fa-digital-ocean",
            "fab fa-discord",
            "fab fa-discourse",
            "fab fa-dochub",
            "fab fa-docker",
            "fas fa-dollar-sign",
            "fas fa-dot-circle", "far fa-dot-circle",
            "fas fa-download",
            "fab fa-draft2digital",
            "fab fa-dribbble",
            "fab fa-dribbble-square",
            "fab fa-dropbox",
            "fab fa-drupal",
            "fab fa-dyalog",
            "fab fa-earlybirds",
            "fab fa-edge",
            "fas fa-edit", "far fa-edit",
            "fas fa-eject",
            "fas fa-ellipsis-h",
            "fas fa-ellipsis-v",
            "fab fa-ember",
            "fab fa-empire",
            "fas fa-envelope", "far fa-envelope",
            "fas fa-envelope-open", "far fa-envelope-open",
            "fas fa-envelope-square",
            "fab fa-envira",
            "fas fa-eraser",
            "fab fa-erlang",
            "fab fa-etsy",
            "fas fa-euro-sign",
            "fas fa-exchange-alt",
            "fas fa-exclamation",
            "fas fa-exclamation-circle",
            "fas fa-exclamation-triangle",
            "fas fa-expand",
            "fas fa-expand-arrows-alt",
            "fab fa-expeditedssl",
            "fas fa-external-link-alt",
            "fas fa-external-link-square-alt",
            "fas fa-eye",
            "fas fa-eye-dropper",
            "fas fa-eye-slash", "far fa-eye-slash",
            "fab fa-facebook",
            "fab fa-facebook-f",
            "fab fa-facebook-messenger",
            "fab fa-facebook-square",
            "fas fa-fast-backward",
            "fas fa-fast-forward",
            "fas fa-fax",
            "fas fa-female",
            "fas fa-fighter-jet",
            "fas fa-file", "far fa-file",
            "fas fa-file-alt", "far fa-file-alt",
            "fas fa-file-archive", "far fa-file-archive",
            "fas fa-file-audio", "far fa-file-audio",
            "fas fa-file-code", "far fa-file-code",
            "fas fa-file-excel", "far fa-file-excel",
            "fas fa-file-image", "far fa-file-image",
            "fas fa-file-pdf", "far fa-file-pdf",
            "fas fa-file-powerpoint", "far fa-file-powerpoint",
            "fas fa-file-video", "far fa-file-video",
            "fas fa-file-word", "far fa-file-word",
            "fas fa-film",
            "fas fa-filter",
            "fas fa-fire",
            "fas fa-fire-extinguisher",
            "fab fa-firefox",
            "fab fa-first-order",
            "fab fa-firstdraft",
            "fas fa-flag", "far fa-flag",
            "fas fa-flag-checkered",
            "fas fa-flask",
            "fab fa-flickr",
            "fab fa-fly",
            "fas fa-folder", "far fa-folder",
            "fas fa-folder-open", "far fa-folder-open",
            "fas fa-font",
            "fab fa-font-awesome",
            "fab fa-font-awesome-alt",
            "fab fa-font-awesome-flag",
            "fab fa-fonticons",
            "fab fa-fonticons-fi",
            "fab fa-fort-awesome",
            "fab fa-fort-awesome-alt",
            "fab fa-forumbee",
            "fas fa-forward",
            "fab fa-foursquare",
            "fab fa-free-code-camp",
            "fab fa-freebsd",
            "fas fa-frown", "far fa-frown",
            "fas fa-futbol", "far fa-futbol",
            "fas fa-gamepad",
            "fas fa-gavel",
            "fas fa-gem", "far fa-gem",
            "fas fa-genderless",
            "fab fa-get-pocket",
            "fab fa-gg",
            "fab fa-gg-circle",
            "fas fa-gift",
            "fab fa-git",
            "fab fa-git-square",
            "fab fa-github",
            "fab fa-github-alt",
            "fab fa-github-square",
            "fab fa-gitkraken",
            "fab fa-gitlab",
            "fab fa-gitter",
            "fas fa-glass-martini",
            "fab fa-glide",
            "fab fa-glide-g",
            "fas fa-globe",
            "fab fa-gofore",
            "fab fa-goodreads",
            "fab fa-goodreads-g",
            "fab fa-google",
            "fab fa-google-drive",
            "fab fa-google-play",
            "fab fa-google-plus",
            "fab fa-google-plus-g",
            "fab fa-google-plus-square",
            "fab fa-google-wallet",
            "fas fa-graduation-cap",
            "fab fa-gratipay",
            "fab fa-grav",
            "fab fa-gripfire",
            "fab fa-grunt",
            "fab fa-gulp",
            "fas fa-h-square",
            "fab fa-hacker-news",
            "fab fa-hacker-news-square",
            "fas fa-hand-lizard", "far fa-hand-lizard",
            "fas fa-hand-paper", "far fa-hand-paper",
            "fas fa-hand-peace", "far fa-hand-peace",
            "fas fa-hand-point-down", "far fa-hand-point-down",
            "fas fa-hand-point-left", "far fa-hand-point-left",
            "fas fa-hand-point-right", "far fa-hand-point-right",
            "fas fa-hand-point-up", "far fa-hand-point-up",
            "fas fa-hand-pointer", "far fa-hand-pointer",
            "fas fa-hand-rock", "far fa-hand-rock",
            "fas fa-hand-scissors", "far fa-hand-scissors",
            "fas fa-hand-spock", "far fa-hand-spock",
            "fas fa-handshake", "far fa-handshake",
            "fas fa-hashtag",
            "fas fa-hdd", "far fa-hdd",
            "fas fa-heading",
            "fas fa-headphones",
            "fas fa-heart", "far fa-heart",
            "fas fa-heartbeat",
            "fab fa-hire-a-helper",
            "fas fa-history",
            "fas fa-home",
            "fab fa-hooli",
            "fas fa-hospital", "far fa-hospital",
            "fab fa-hotjar",
            "fas fa-hourglass", "far fa-hourglass",
            "fas fa-hourglass-end",
            "fas fa-hourglass-half",
            "fas fa-hourglass-start",
            "fab fa-houzz",
            "fab fa-html5",
            "fab fa-hubspot",
            "fas fa-i-cursor",
            "fas fa-id-badge", "far fa-id-badge",
            "fas fa-id-card", "far fa-id-card",
            "fas fa-image", "far fa-image",
            "fas fa-images", "far fa-images",
            "fab fa-imdb",
            "fas fa-inbox",
            "fas fa-indent",
            "fas fa-industry",
            "fas fa-info",
            "fas fa-info-circle",
            "fab fa-instagram",
            "fab fa-internet-explorer",
            "fab fa-ioxhost",
            "fas fa-italic",
            "fab fa-itunes",
            "fab fa-itunes-note",
            "fab fa-jenkins",
            "fab fa-joget",
            "fab fa-joomla",
            "fab fa-js",
            "fab fa-js-square",
            "fab fa-jsfiddle",
            "fas fa-key",
            "fas fa-keyboard", "far fa-keyboard",
            "fab fa-keycdn",
            "fab fa-kickstarter",
            "fab fa-kickstarter-k",
            "fas fa-language",
            "fas fa-laptop",
            "fab fa-laravel",
            "fab fa-lastfm",
            "fab fa-lastfm-square",
            "fas fa-leaf",
            "fab fa-leanpub",
            "fas fa-lemon", "far fa-lemon",
            "fab fa-less",
            "fas fa-level-down-alt",
            "fas fa-level-up-alt",
            "fas fa-life-ring", "far fa-life-ring",
            "fas fa-lightbulb", "far fa-lightbulb",
            "fab fa-line",
            "fas fa-link",
            "fab fa-linkedin",
            "fab fa-linkedin-in",
            "fab fa-linode",
            "fab fa-linux",
            "fas fa-lira-sign",
            "fas fa-list",
            "fas fa-list-alt", "far fa-list-alt",
            "fas fa-list-ol",
            "fas fa-list-ul",
            "fas fa-location-arrow",
            "fas fa-lock",
            "fas fa-lock-open",
            "fas fa-long-arrow-alt-down",
            "fas fa-long-arrow-alt-left",
            "fas fa-long-arrow-alt-right",
            "fas fa-long-arrow-alt-up",
            "fas fa-low-vision",
            "fab fa-lyft",
            "fab fa-magento",
            "fas fa-magic",
            "fas fa-magnet",
            "fas fa-male",
            "fas fa-map", "far fa-map",
            "fas fa-map-marker",
            "fas fa-map-marker-alt",
            "fas fa-map-pin",
            "fas fa-map-signs",
            "fas fa-mars",
            "fas fa-mars-double",
            "fas fa-mars-stroke",
            "fas fa-mars-stroke-h",
            "fas fa-mars-stroke-v",
            "fab fa-maxcdn",
            "fab fa-medapps",
            "fab fa-medium",
            "fab fa-medium-m",
            "fas fa-medkit",
            "fab fa-medrt",
            "fab fa-meetup",
            "fas fa-meh", "far fa-meh",
            "fas fa-mercury",
            "fas fa-microchip",
            "fas fa-microphone",
            "fas fa-microphone-slash",
            "fab fa-microsoft",
            "fas fa-minus",
            "fas fa-minus-circle",
            "fas fa-minus-square", "far fa-minus-square",
            "fab fa-mix",
            "fab fa-mixcloud",
            "fab fa-mizuni",
            "fas fa-mobile",
            "fas fa-mobile-alt",
            "fab fa-modx",
            "fab fa-monero",
            "fas fa-money-bill-alt", "far fa-money-bill-alt",
            "fas fa-moon", "far fa-moon",
            "fas fa-motorcycle",
            "fas fa-mouse-pointer",
            "fas fa-music",
            "fab fa-napster",
            "fas fa-neuter",
            "fas fa-newspaper", "far fa-newspaper",
            "fab fa-nintendo-switch",
            "fab fa-node",
            "fab fa-node-js",
            "fab fa-npm",
            "fab fa-ns8",
            "fab fa-nutritionix",
            "fas fa-object-group", "far fa-object-group",
            "fas fa-object-ungroup", "far fa-object-ungroup",
            "fab fa-odnoklassniki",
            "fab fa-odnoklassniki-square",
            "fab fa-opencart",
            "fab fa-openid",
            "fab fa-opera",
            "fab fa-optin-monster",
            "fab fa-osi",
            "fas fa-outdent",
            "fab fa-page4",
            "fab fa-pagelines",
            "fas fa-paint-brush",
            "fab fa-palfed",
            "fas fa-paper-plane", "far fa-paper-plane",
            "fas fa-paperclip",
            "fas fa-paragraph",
            "fas fa-paste",
            "fab fa-patreon",
            "fas fa-pause",
            "fas fa-pause-circle", "far fa-pause-circle",
            "fas fa-paw",
            "fab fa-paypal",
            "fas fa-pen-square",
            "fas fa-pencil-alt",
            "fas fa-percent",
            "fab fa-periscope",
            "fab fa-phabricator",
            "fab fa-phoenix-framework",
            "fas fa-phone",
            "fas fa-phone-square",
            "fas fa-phone-volume",
            "fab fa-pied-piper",
            "fab fa-pied-piper-alt",
            "fab fa-pied-piper-pp",
            "fab fa-pinterest",
            "fab fa-pinterest-p",
            "fab fa-pinterest-square",
            "fas fa-plane",
            "fas fa-play",
            "fas fa-play-circle", "far fa-play-circle",
            "fab fa-playstation",
            "fas fa-plug",
            "fas fa-plus",
            "fas fa-plus-circle",
            "fas fa-plus-square", "far fa-plus-square",
            "fas fa-podcast",
            "fas fa-pound-sign",
            "fas fa-power-off",
            "fas fa-print",
            "fab fa-product-hunt",
            "fab fa-pushed",
            "fas fa-puzzle-piece",
            "fab fa-python",
            "fab fa-qq",
            "fas fa-qrcode",
            "fas fa-question",
            "fas fa-question-circle", "far fa-question-circle",
            "fab fa-quora",
            "fas fa-quote-left",
            "fas fa-quote-right",
            "fas fa-random",
            "fab fa-ravelry",
            "fab fa-react",
            "fab fa-rebel",
            "fas fa-recycle",
            "fab fa-red-river",
            "fab fa-reddit",
            "fab fa-reddit-alien",
            "fab fa-reddit-square",
            "fas fa-redo",
            "fas fa-redo-alt",
            "fas fa-registered", "far fa-registered",
            "fab fa-rendact",
            "fab fa-renren",
            "fas fa-reply",
            "fas fa-reply-all",
            "fab fa-replyd",
            "fab fa-resolving",
            "fas fa-retweet",
            "fas fa-road",
            "fas fa-rocket",
            "fab fa-rocketchat",
            "fab fa-rockrms",
            "fas fa-rss",
            "fas fa-rss-square",
            "fas fa-ruble-sign",
            "fas fa-rupee-sign",
            "fab fa-safari",
            "fab fa-sass",
            "fas fa-save", "far fa-save",
            "fab fa-schlix",
            "fab fa-scribd",
            "fas fa-search",
            "fas fa-search-minus",
            "fas fa-search-plus",
            "fab fa-searchengin",
            "fab fa-sellcast",
            "fab fa-sellsy",
            "fas fa-server",
            "fab fa-servicestack",
            "fas fa-share",
            "fas fa-share-alt",
            "fas fa-share-alt-square",
            "fas fa-share-square", "far fa-share-square",
            "fas fa-shekel-sign",
            "fas fa-shield-alt",
            "fas fa-ship",
            "fab fa-shirtsinbulk",
            "fas fa-shopping-bag",
            "fas fa-shopping-basket",
            "fas fa-shopping-cart",
            "fas fa-shower",
            "fas fa-sign-in-alt",
            "fas fa-sign-language",
            "fas fa-sign-out-alt",
            "fas fa-signal",
            "fab fa-simplybuilt",
            "fab fa-sistrix",
            "fas fa-sitemap",
            "fab fa-skyatlas",
            "fab fa-skype",
            "fab fa-slack",
            "fab fa-slack-hash",
            "fas fa-sliders-h",
            "fab fa-slideshare",
            "fas fa-smile", "far fa-smile",
            "fab fa-snapchat",
            "fab fa-snapchat-ghost",
            "fab fa-snapchat-square",
            "fas fa-snowflake", "far fa-snowflake",
            "fas fa-sort",
            "fas fa-sort-alpha-down",
            "fas fa-sort-alpha-up",
            "fas fa-sort-amount-down",
            "fas fa-sort-amount-up",
            "fas fa-sort-down",
            "fas fa-sort-numeric-down",
            "fas fa-sort-numeric-up",
            "fas fa-sort-up",
            "fab fa-soundcloud",
            "fas fa-space-shuttle",
            "fab fa-speakap",
            "fas fa-spinner",
            "fab fa-spotify",
            "fas fa-square", "far fa-square",
            "fab fa-stack-exchange",
            "fab fa-stack-overflow",
            "fas fa-star", "far fa-star",
            "fas fa-star-half", "far fa-star-half",
            "fab fa-staylinked",
            "fab fa-steam",
            "fab fa-steam-square",
            "fab fa-steam-symbol",
            "fas fa-step-backward",
            "fas fa-step-forward",
            "fas fa-stethoscope",
            "fab fa-sticker-mule",
            "fas fa-sticky-note", "far fa-sticky-note",
            "fas fa-stop",
            "fas fa-stop-circle", "far fa-stop-circle",
            "fab fa-strava",
            "fas fa-street-view",
            "fas fa-strikethrough",
            "fab fa-stripe",
            "fab fa-stripe-s",
            "fab fa-studiovinari",
            "fab fa-stumbleupon",
            "fab fa-stumbleupon-circle",
            "fas fa-subscript",
            "fas fa-subway",
            "fas fa-suitcase",
            "fas fa-sun", "far fa-sun",
            "fab fa-superpowers",
            "fas fa-superscript",
            "fab fa-supple",
            "fas fa-sync",
            "fas fa-sync-alt",
            "fas fa-table",
            "fas fa-tablet",
            "fas fa-tablet-alt",
            "fas fa-tachometer-alt",
            "fas fa-tag",
            "fas fa-tags",
            "fas fa-tasks",
            "fas fa-taxi",
            "fab fa-telegram",
            "fab fa-telegram-plane",
            "fab fa-tencent-weibo",
            "fas fa-terminal",
            "fas fa-text-height",
            "fas fa-text-width",
            "fas fa-th",
            "fas fa-th-large",
            "fas fa-th-list",
            "fab fa-themeisle",
            "fas fa-thermometer-empty",
            "fas fa-thermometer-full",
            "fas fa-thermometer-half",
            "fas fa-thermometer-quarter",
            "fas fa-thermometer-three-quarters",
            "fas fa-thumbs-down", "far fa-thumbs-down",
            "fas fa-thumbs-up", "far fa-thumbs-up",
            "fas fa-thumbtack",
            "fas fa-ticket-alt",
            "fas fa-times",
            "fas fa-times-circle", "far fa-times-circle",
            "fas fa-tint",
            "fas fa-toggle-off",
            "fas fa-toggle-on",
            "fas fa-trademark",
            "fas fa-train",
            "fas fa-transgender",
            "fas fa-transgender-alt",
            "fas fa-trash",
            "fas fa-trash-alt", "far fa-trash-alt",
            "fas fa-tree",
            "fab fa-trello",
            "fab fa-tripadvisor",
            "fas fa-trophy",
            "fas fa-truck",
            "fas fa-tty",
            "fab fa-tumblr",
            "fab fa-tumblr-square",
            "fas fa-tv",
            "fab fa-twitch",
            "fab fa-twitter",
            "fab fa-twitter-square",
            "fab fa-typo3",
            "fab fa-uber",
            "fab fa-uikit",
            "fas fa-umbrella",
            "fas fa-underline",
            "fas fa-undo",
            "fas fa-undo-alt",
            "fab fa-uniregistry",
            "fas fa-universal-access",
            "fas fa-university",
            "fas fa-unlink",
            "fas fa-unlock",
            "fas fa-unlock-alt",
            "fab fa-untappd",
            "fas fa-upload",
            "fab fa-usb",
            "fas fa-user", "far fa-user",
            "fas fa-user-circle", "far fa-user-circle",
            "fas fa-user-md",
            "fas fa-user-plus",
            "fas fa-user-secret",
            "fas fa-user-times",
            "fas fa-users",
            "fab fa-ussunnah",
            "fas fa-utensil-spoon",
            "fas fa-utensils",
            "fab fa-vaadin",
            "fas fa-venus",
            "fas fa-venus-double",
            "fas fa-venus-mars",
            "fab fa-viacoin",
            "fab fa-viadeo",
            "fab fa-viadeo-square",
            "fab fa-viber",
            "fas fa-video",
            "fab fa-vimeo",
            "fab fa-vimeo-square",
            "fab fa-vimeo-v",
            "fab fa-vine",
            "fab fa-vk",
            "fab fa-vnv",
            "fas fa-volume-down",
            "fas fa-volume-off",
            "fas fa-volume-up",
            "fab fa-vuejs",
            "fab fa-weibo",
            "fab fa-weixin",
            "fab fa-whatsapp",
            "fab fa-whatsapp-square",
            "fas fa-wheelchair",
            "fab fa-whmcs",
            "fas fa-wifi",
            "fab fa-wikipedia-w",
            "fas fa-window-close", "far fa-window-close",
            "fas fa-window-maximize", "far fa-window-maximize",
            "fas fa-window-minimize",
            "fas fa-window-restore", "far fa-window-restore",
            "fab fa-windows",
            "fas fa-won-sign",
            "fab fa-wordpress",
            "fab fa-wordpress-simple",
            "fab fa-wpbeginner",
            "fab fa-wpexplorer",
            "fab fa-wpforms",
            "fas fa-wrench",
            "fab fa-xbox",
            "fab fa-xing",
            "fab fa-xing-square",
            "fab fa-y-combinator",
            "fab fa-yahoo",
            "fab fa-yandex",
            "fab fa-yandex-international",
            "fab fa-yelp",
            "fas fa-yen-sign",
            "fab fa-yoast",
            "fab fa-youtube"
        ];
        $quick_tips = DB::table('quick_tips')->get(); // Change to ->get() if you want to get all rows
        // Log::info('hi im in  $quick_tips here' . json_encode($quick_tips) );
        $totalqt = DB::table('quick_tips')->count();
        Log::info("\n\n *** Quick  ***" . json_encode($quick_tips));

        return view('welcome', compact('icons'), [
            'quick_tips' => $quick_tips,
            'totalqt' => $totalqt,
            ] );
    }

    public function welcome()
{
    $section1Data = DB::table('section_1')->first(); // Change to ->get() if you want to get all rows

    $quick_tips = DB::table('quick_tips')->get(); // Change to ->get() if you want to get all rows

    $section2Data = DB::table('section_2')->first(); 

    $section3Data = DB::table('section_3')->first(); 

    $sectioncards = DB::table('sectioncards')->get(); 

    $section4Data = DB::table('section_4')->first(); 

    return view('about', [
        'section1Data' => $section1Data,
        'quick_tips' => $quick_tips, 
        'section2Data' => $section2Data, 
        'section3Data' => $section3Data, 
        'sectioncards' => $sectioncards, 
        'section4Data' => $section4Data,
    ]);


}

public function delete($id)
{
    Log::info(" *** Quick Tip DELETE   %%%%%%%%%%%%% ***" . $id);
  

    $quickTip = QuickTip::findOrFail($id);
    
    // Delete the QuickTip
    $quickTip->delete();
    
    // Redirect back with success message
    return redirect()->back()->with('success', 'QuickTip deleted successfully.');
}

public function home2(Request $request)
{        Log::info(" *** Quick Tip ***" );

    $validatedData = $request->validate([

        'quicktipsHeading' => 'required|array',
        'quicktipsHeading.*' => 'required|string',
        'quicktipsID' => 'nullable|array',
        'quicktipsID.*' => 'nullable|integer',
        'quicktipsText' => 'nullable|array',
        'quicktipsText.*' => 'nullable|string',
        'inputquicktipsimage' => 'nullable|array',
        'inputquicktipsimage.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:92048', 
        'selectedIconNameqt' => 'nullable|array',
        'selectedIconNameqt.*' => 'nullable|string',

    ]);

    Log::info(" *** Quick v f gfvgdxzcg ***" );
    
    // Log for Quick Tips
    for ($i = 0; $i < count($validatedData['quicktipsHeading'])-1; $i++) {
        Log::info("\n\n *** Quick Tip $i ***" );
        if (isset($validatedData['quicktipsHeading'][$i])) {
            Log::info('quicktipsHeading: ' . ($validatedData['quicktipsHeading'][$i]));
        }
        if (isset($validatedData['quicktipsText'][$i])) {
            Log::info(' quicktipsText: ' . ($validatedData['quicktipsText'][$i]));
        }
        if (isset($validatedData['selectedIconNameqt'][$i])) {
            Log::info(' selectedIconNameqt: ' . ($validatedData['selectedIconNameqt'][$i]));
        }
        if (isset($validatedData['inputquicktipsimage'][$i])) {
            Log::info(' inputquicktipsimage: ' . ($validatedData['inputquicktipsimage'][$i])); 
        }
        if (isset($validatedData['quicktipsID'][$i])) {
            Log::info(" \n quicktipsID: " . ($validatedData['quicktipsID'][$i]));
        }
    }
        function addOrUpdateRecord($quickTipData)
        {
            if (!empty($quickTipData)) {
                // Check if quicktipsID is provided
                if (isset($quickTipData['quicktipsID'])) {
                    $quickTip = QuickTip::find($quickTipData['quicktipsID']);
                    if ($quickTip) {
                        // Update existing record
                        if (isset($quickTipData['image'])) {
                        $quickTip->image = $quickTipData['image'];
                        }
                        if (isset($quickTipData['title'])) {
                            $quickTip->title = $quickTipData['title'];
                        }
                        if (isset($quickTipData['text'])) {
                            $quickTip->text = $quickTipData['text'];
                        }
                        if (isset($quickTipData['icon'])) {
                            $quickTip->icon = $quickTipData['icon'];
                        }
                        $quickTip->save();
                        return;
                    }
                }
                $quickTip = new QuickTip();
                if (isset($quickTipData['image'])) {
                    Log::info(" adding imageeee ****************** to DB ");
                    $quickTip->image = $quickTipData['image'];
                }
                if (isset($quickTipData['title'])) {
                    $quickTip->title = $quickTipData['title'];
                }
                if (isset($quickTipData['text'])) {
                    $quickTip->text = $quickTipData['text'];
                }
                if (isset($quickTipData['icon'])) {
                    Log::info(" adding icon ****************** to DB ");

                    $quickTip->icon = $quickTipData['icon'];
                }   
            
                $quickTip->save();
            }
        }

for ($i = 0; $i < count($validatedData['quicktipsHeading']); $i++) {
    $quickTipData = [];       
    
    // Adding other quick tip data
    if (isset($validatedData['quicktipsHeading'][$i])) {
        $quickTipData['title'] = $validatedData['quicktipsHeading'][$i];
    }

    if (isset($validatedData['quicktipsText'][$i])) {
        $quickTipData['text'] = $validatedData['quicktipsText'][$i];
    }
    if (isset($validatedData['quicktipsID'][$i])) {
        $quickTipData['quicktipsID'] = $validatedData['quicktipsID'][$i];
    }
    else{
        $quickTipData['quicktipsID'] = null;
    }

    if (isset($validatedData['selectedIconNameqt'][$i])) {
        $quickTipData['icon'] = $validatedData['selectedIconNameqt'][$i];
    }
    if ($request->hasFile("inputquicktipsimage.{$i}")) {
        Log::info(" image 1111");
        $image = $request->file("inputquicktipsimage.{$i}");

        $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $originalFilenameWithoutSpaces = str_replace(' ', '', $originalFilename);


        $filename = now()->format('YmdHisu') . mt_rand(1000, 9999) . '_' . $originalFilenameWithoutSpaces . '.' . $image->getClientOriginalExtension();

        $imagePath = public_path('storage/images') . '/' . $filename;

        $image->move(public_path('storage/images'), $filename);

        $quickTipData['image'] = 'images/' . $filename;
    }

    if (!empty($quickTipData)) {
        addOrUpdateRecord($quickTipData);
    }
}

    return redirect()->back()->with('success', 'Form submitted successfully.');

}
 


    public function home(Request $request)
{
    // Log::info('hi im in  Section 1 here '. $request->section1image );
    // Log::info('hi im in quicktipsHeading  here '. $request->quicktipsHeading0 );

    $validatedData = $request->validate([
        //validating Section 1 data
        'section1Heading' => 'nullable|string',
        'section1text' => 'nullable|string',
        'section1image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:22048', 

        //validating Quick Tips data
        'quicktipsHeading' => 'required|array',
        'quicktipsHeading.*' => 'required|string',
        'quicktipsID' => 'nullable|array',
        'quicktipsID.*' => 'nullable|integer',
        'quicktipsText' => 'nullable|array',
        'quicktipsText.*' => 'nullable|string',
        'inputquicktipsimage' => 'nullable|array',
        'inputquicktipsimage.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:92048', 
        'selectedIconNameqt' => 'nullable|array',
        'selectedIconNameqt.*' => 'nullable|string',

         //validating Section 2 data
         'section2Heading' => 'nullable|string',
         'section2Text' => 'nullable|string',
         'section2image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:22048', 
         'section2Slideimage1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:22048', 
         'section2Slideimage2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:22048',
         'section2Slideimage3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:22048', 
         'section2Slideimage4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:22048', 
         'section2Text2' => 'nullable|string',
         'section2YoutubeURL' => 'nullable|string',

         //validating Section 3 data
         'section3Heading' => 'nullable|string',
         'section3Text' => 'nullable|string',
         'section3buttonText'  => 'nullable|string',
         'cardimagesection3' => 'nullable|image|mimes:jpeg,PNG,png,jpg,gif|max:22048', 
         'cardtitlesection3' => 'nullable|string', 
         'cardtextsection3' => 'nullable|string', 
         'iconDropdownnn'  => 'nullable|string',
         'cardbuttontextsection3' => 'nullable|string', 

        //   //validating Section 4 data
          'footertitle' => 'nullable|string',
          'footertext' => 'nullable|string',
          'footeremail'  => 'nullable|string',
          'footerphone' => 'nullable|string',
        //   'footerphone' => ['required', new PhoneNumber], 
          'footerdesktext' => 'nullable|string', 
          'footerfacebook' => 'nullable|string', 
          'footerinsta' => 'nullable|string', 
          'fotertwiter' => 'nullable|string', 
          'footerlikedin' => 'nullable|string', 
    ]);


    $logData = ' section1Heading: ' . ($validatedData['section1Heading'] ?? 'Not provided') . 
    ' section1text: ' . ($validatedData['section1text'] ?? 'Not provided') . 
    ' section1image: ' . ($validatedData['quicktipsimage[0]'] ?? 'Not provided');

    Log::info('hi Section 1 is complicated here' . $logData);

    
    // Log for Quick Tips
//     $logQuickTips = '';

// for ($i = 0; $i < count($validatedData['quicktipsHeading']); $i++) {
//     $logQuickTips .= "Quick Tip $i:\n";
//     $logQuickTips .= ' quicktipsHeading: ' . ($validatedData['quicktipsHeading'][$i] ?? 'Not provided') .
//                     ' quicktipsText: ' . ($validatedData['quicktipsText'][$i] ?? 'Not provided') .
//                     ' quicktipsIcon: ' . ($validatedData['iconDropdownqt'][$i] ?? 'Not provided') .
//                     "\n\n quicktipsimage is : " . ($validatedData['quicktipsimage'][$i] ?? 'Not provided') . "\n\n";
// }

// Log::info("\nhi Quick Tips details:\n" . $logQuickTips);
$logQuickTips = ' quicktipsHeading: ' . ($validatedData['quicktipsHeading0'] ?? 'Not provided') . 
' quicktipsText: ' . ($validatedData['quicktipsText0'] ?? 'Not provided') . 
' quicktipsIcon: ' . ($validatedData['iconDropdownqt0'] ?? 'Not provided') .
"\n\n quicktipsimage is : " . ($validatedData['quicktipsimage0'] ?? 'Not provided');

Log::info("\nhi Quick Tips is complicated here" . $logQuickTips);

// Log for Section 2
$logSection2 = ' section2Heading: ' . ($validatedData['section2Heading'] ?? 'Not provided') . 
' section2Text: ' . ($validatedData['section2Text'] ?? 'Not provided') . 
' section2image: ' . ($validatedData['section2image'] ?? 'Not provided') .    
' section2Slideimage1: ' . ($validatedData['section2Slideimage1'] ?? 'Not provided') .    
' section2Slideimage2: ' . ($validatedData['section2Slideimage2'] ?? 'Not provided') .    
' section2Slideimage3: ' . ($validatedData['section2Slideimage3'] ?? 'Not provided') .    
' section2Slideimage4: ' . ($validatedData['section2Slideimage4'] ?? 'Not provided') .   
' section2Text2: ' . ($validatedData['section2Text2'] ?? 'Not provided') .
' section2YoutubeURL: ' . ($validatedData['section2YoutubeURL'] ?? 'Not provided');

Log::info('hi Section 2 is complicated here' . $logSection2);

// Log for Section 3
$logSection3 = ' section3Heading: ' . ($validatedData['section3Heading'] ?? 'Not provided') . 
' section3Text: ' . ($validatedData['section3Text'] ?? 'Not provided') . 
' section3buttonText: ' . ($validatedData['section3buttonText'] ?? 'Not provided') .    
' cardimagesection3: ' . ($validatedData['cardimagesection3'] ?? 'Not provided') .    
' cardtitlesection3: ' . ($validatedData['cardtitlesection3'] ?? 'Not provided') .    
' cardtextsection3: ' . ($validatedData['cardtextsection3'] ?? 'Not provided') . 
'******* iconDropdownnn  *******8: ' . ($validatedData['iconDropdownnn'] ?? 'iconDropdownnn Not provided') .    
' cardbuttontextsection3: ' . ($validatedData['cardbuttontextsection3'] ?? 'Not provided');

Log::info('hi Section 3 is complicated here' . $logSection3);

// Log for Section 4
$logSection4 = ' footertitle: ' . ($validatedData['footertitle'] ?? 'Not provided') . 
' footertext: ' . ($validatedData['footertext'] ?? 'Not provided') . 
' footeremail: ' . ($validatedData['footeremail'] ?? 'Not provided') .    
' footerphone: ' . ($validatedData['footerphone'] ?? 'Not provided') .    
' footerdesktext: ' . ($validatedData['footerdesktext'] ?? 'Not provided') .    
' footerfacebook: ' . ($validatedData['footerfacebook'] ?? 'Not provided') .    
' footerinsta: ' . ($validatedData['footerinsta'] ?? 'Not provided') .
' fotertwiter: ' . ($validatedData['fotertwiter'] ?? 'Not provided') .    
' footerlikedin: ' . ($validatedData['footerlikedin'] ?? 'Not provided');

Log::info('hi Section 4 is completed here' . $logSection4);

    
    
    //Storing Section 1 image
    if ($request->hasFile('section1image')) {
        $image = $request->file('section1image');
        $imagePathsection1image = $image->store('images', 'public'); // Store the image in the storage folder
    }

    function addOrUpdateRecord($quickTipData)
    {
        if (!empty($quickTipData)) {
            // Check if quicktipsID is provided
            if (isset($quickTipData['quicktipsID'])) {
                $quickTip = QuickTip::find($quickTipData['quicktipsID']);
                if ($quickTip) {
                    // Update existing record
                    if (isset($quickTipData['image'])) {
                    $quickTip->image = $quickTipData['image'];
                    }
                    if (isset($quickTipData['title'])) {
                        $quickTip->title = $quickTipData['title'];
                    }
                    if (isset($quickTipData['text'])) {
                        $quickTip->text = $quickTipData['text'];
                    }
                    if (isset($quickTipData['icon'])) {
                        $quickTip->icon = $quickTipData['icon'];
                    }
                    $quickTip->save();
                    return;
                }
            }
            $quickTip = new QuickTip();
            if (isset($quickTipData['image'])) {
                Log::info(" adding imageeee ****************** to DB ");
                $quickTip->image = $quickTipData['image'];
            }
            if (isset($quickTipData['title'])) {
                $quickTip->title = $quickTipData['title'];
            }
            if (isset($quickTipData['text'])) {
                $quickTip->text = $quickTipData['text'];
            }
            if (isset($quickTipData['icon'])) {
                Log::info(" adding icon ****************** to DB ");

                $quickTip->icon = $quickTipData['icon'];
            }   
        
            $quickTip->save();
        }
    }

    Log::info("\n\n\nhi image checking for Quick Tips is here  ::::: " . $request->hasFile('quicktipsimage0'));

//Storing Quick Tips image
for ($i = 0; $i < count($validatedData['quicktipsHeading']); $i++) {
    $quickTipData = [];       
    
    // Adding other quick tip data
    if (isset($validatedData['quicktipsHeading'][$i])) {
        $quickTipData['title'] = $validatedData['quicktipsHeading'][$i];
    }

    if (isset($validatedData['quicktipsText'][$i])) {
        $quickTipData['text'] = $validatedData['quicktipsText'][$i];
    }
    if (isset($validatedData['quicktipsID'][$i])) {
        $quickTipData['quicktipsID'] = $validatedData['quicktipsID'][$i];
    }
    else{
        $quickTipData['quicktipsID'] = null;
    }

    if (isset($validatedData['selectedIconNameqt'][$i])) {
        $quickTipData['icon'] = $validatedData['selectedIconNameqt'][$i];
    }
    if ($request->hasFile("inputquicktipsimage.{$i}")) {
        Log::info(" image 1111");
        $image = $request->file("inputquicktipsimage.{$i}");

        $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $originalFilenameWithoutSpaces = str_replace(' ', '', $originalFilename);


        $filename = now()->format('YmdHisu') . mt_rand(1000, 9999) . '_' . $originalFilenameWithoutSpaces . '.' . $image->getClientOriginalExtension();

        $imagePath = public_path('storage/images') . '/' . $filename;

        $image->move(public_path('storage/images'), $filename);

        $quickTipData['image'] = 'images/' . $filename;
    }

    if (!empty($quickTipData)) {
        addOrUpdateRecord($quickTipData);
    }
}

    
    
    
//Storing Section 2 image
if ($request->hasFile('section2image')) {
        $image = $request->file('section2image');
        $imagePathsection2image = $image->store('images', 'public'); // Store the image in the storage folder
        
    }
    if ($request->hasFile('section2Slideimage1')) {
        $image = $request->file('section2Slideimage1');
        $imagePathsection2Slideimage1 = $image->store('images', 'public'); // Store the image in the storage folder
        
    }if ($request->hasFile('section2Slideimage2')) {
        $image = $request->file('section2Slideimage2');
        $imagePathsection2Slideimage2 = $image->store('images', 'public'); // Store the image in the storage folder

    }if ($request->hasFile('section2Slideimage3')) {
        $image = $request->file('section2Slideimage3');
        $imagePathsection2Slideimage3 = $image->store('images', 'public'); // Store the image in the storage folder
        
    }if ($request->hasFile('section2Slideimage4')) {
        $image = $request->file('section2Slideimage4');
        $imagePathsection2Slideimage4 = $image->store('images', 'public'); // Store the image in the storage folder

    }

    //Storing Section 3 image
    if ($request->hasFile('cardimagesection3')) {
        $image = $request->file('cardimagesection3');
        $imagePathcardimagesection3 = $image->store('images', 'public'); // Store the image in the storage folder
        // You can store the $imagePath in your database or process it further
    }
    
    //SECTION 1 DATA Storing to DATABASE
    $existingData = DB::table('section_1')->where('id', 1)->first();

    $Section1Update = [];

    if (isset($validatedData['section1Heading'])) {
        $Section1Update['heading'] = $validatedData['section1Heading'];
    }

    if (isset($validatedData['section1text'])) {
        $Section1Update['bodyText'] = $validatedData['section1text'];
    }

    if (isset($imagePathsection1image)) {
        $Section1Update['backgroundImage'] = $imagePathsection1image;

    }
    if (!empty($Section1Update)) {
    if ($existingData) {
        DB::table('section_1')->where('id', 1)->update($Section1Update);
    } else {
        DB::table('section_1')->insert($Section1Update);
    }}


    //SECTION 2 DATA Storing to DATABASE
    $existingDatasection_2 = DB::table('section_2')->where('id', 1)->first();

    $section_2Update = [];

    if (isset($validatedData['section2Heading'])) {
        $section_2Update['heading'] = $validatedData['section2Heading'];
    }

    if (isset($validatedData['section2Text'])) {
        $section_2Update['bodyText'] = $validatedData['section2Text'];
    }
    if (isset($validatedData['section2Text2'])) {
        $section_2Update['text_2'] = $validatedData['section2Text2'];
    }

    if (isset($imagePathsection2image)) {
        $section_2Update['image'] = $imagePathsection2image;
    }
    if (isset($imagePathsection2Slideimage1)) {
        $section_2Update['sliderimage1'] = $imagePathsection2Slideimage1;

    }
    if (isset($imagePathsection2Slideimage2)) {
        $section_2Update['sliderimage2'] = $imagePathsection2Slideimage2;

    }
    if (isset($imagePathsection2Slideimage3)) {
        $section_2Update['sliderimage3'] = $imagePathsection2Slideimage3;

    }
    if (isset($imagePathsection2Slideimage4)) {
        $section_2Update['sliderimage4'] = $imagePathsection2Slideimage4;

    }

    if (isset($validatedData['section2YoutubeURL'])) {
       $section_2Update['video_url'] = $validatedData['section2YoutubeURL'];
   }

   if (!empty($section_2Update)) {
    if ($existingDatasection_2) {
        DB::table('section_2')->where('id', 1)->update($section_2Update);
    } else {
        DB::table('section_2')->insert($section_2Update);
    }
   }


   //SECTION 3 DATA Storing to DATABASE
   $existingDatasection_3 = DB::table('section_3')->where('id', 1)->first();

   $section_3Update = [];

   if (isset($validatedData['section3Heading'])) {
       $section_3Update['heading'] = $validatedData['section3Heading'];
   }

   if (isset($validatedData['section3Text'])) {
       $section_3Update['bodyText'] = $validatedData['section3Text'];
   }
   if (isset($validatedData['section3buttonText'])) {
       $section_3Update['buttonText'] = $validatedData['section3buttonText'];
   }

  if (!empty($section_3Update)) {
   if ($existingDatasection_3) {
       DB::table('section_3')->where('id', 1)->update($section_3Update);
   } else {
       DB::table('section_3')->insert($section_3Update);
   }
  }

  // Cards DATA Storing to DATABASE
  $existingDatasection_3Cards = DB::table('sectioncards')->where('id', 1)->first();
 
  $section_3UpdateCards = [];

  if (isset($validatedData['cardtitlesection3'])) {
      $section_3UpdateCards['cardTitle'] = $validatedData['cardtitlesection3'];
  }

  if (isset($validatedData['iconDropdownnn'])) {
    $section_3UpdateCards['cardIcon'] = $validatedData['iconDropdownnn'];
 }

  if (isset($validatedData['cardtextsection3'])) {
      $section_3UpdateCards['cardText'] = $validatedData['cardtextsection3'];
  }
  if (isset($validatedData['cardbuttontextsection3'])) {
      $section_3UpdateCards['buttonText'] = $validatedData['cardbuttontextsection3'];
  }
  if (isset($imagePathcardimagesection3)) {
    $section_3UpdateCards['backgroundimage'] = $imagePathcardimagesection3;

    }

    Log::info("\n\n\nhi cards data is here  ::::: " . json_encode($section_3UpdateCards));

 if (!empty($section_3UpdateCards)) {
//   if ($existingDatasection_3Cards) {
//       DB::table('sectioncards')->where('id', 1)->update($section_3UpdateCards);
//   } else {
      DB::table('sectioncards')->insert($section_3UpdateCards);
//   }
 }


 //SECTION 4 DATA Storing to DATABASE
 $existingDatasection_4 = DB::table('section_4')->where('id', 1)->first();
 


 $section_4Update = [];

 if (isset($validatedData['footertitle'])) {
     $section_4Update['Title'] = $validatedData['footertitle'];
 }

 if (isset($validatedData['footertext'])) {
     $section_4Update['Text'] = $validatedData['footertext'];
 }
 if (isset($validatedData['footeremail'])) {
     $section_4Update['email'] = $validatedData['footeremail'];
 }
 if (isset($validatedData['footerphone'])) {
    $section_4Update['phone'] = $validatedData['footerphone'];
}

if (isset($validatedData['footerdesktext'])) {
    $section_4Update['FrontDeskText'] = $validatedData['footerdesktext'];
}
if (isset($validatedData['footerfacebook'])) {
    $section_4Update['facebook_link'] = $validatedData['footerfacebook'];
}
if (isset($validatedData['footerinsta'])) {
    $section_4Update['insta_link'] = $validatedData['footerinsta'];
}

if (isset($validatedData['fotertwiter'])) {
    $section_4Update['twitter_link'] = $validatedData['fotertwiter'];
}
if (isset($validatedData['footerlikedin'])) {
    $section_4Update['linkedin_link'] = $validatedData['footerlikedin'];
}

if (!empty($section_4Update)) {
 if ($existingDatasection_4) {
     DB::table('section_4')->where('id', 1)->update($section_4Update);
 } else {
     DB::table('section_4')->insert($section_4Update);
 }
}


    // Process other form data

    return redirect()->back()->with('success', 'Form submitted successfully.');



}

}
