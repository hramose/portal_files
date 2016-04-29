<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ani-Theme Laravel Dashboard | @yield('page_title')</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	</head>
	<body style="margin: 0;">
	
<style type="text/css">
/*! normalize.css v3.0.2 | MIT License | git.io/normalize */
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600);
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: textfield;
  box-sizing: content-box;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
  *,
  *:before,
  *:after {
    background: transparent !important;
    color: #000 !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  select {
    background: #fff !important;
  }
  .navbar {
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../fonts/glyphicons-halflings-regular.eot');
  src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\2a";
}
.glyphicon-plus:before {
  content: "\2b";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
.glyphicon-cd:before {
  content: "\e201";
}
.glyphicon-save-file:before {
  content: "\e202";
}
.glyphicon-open-file:before {
  content: "\e203";
}
.glyphicon-level-up:before {
  content: "\e204";
}
.glyphicon-copy:before {
  content: "\e205";
}
.glyphicon-paste:before {
  content: "\e206";
}
.glyphicon-alert:before {
  content: "\e209";
}
.glyphicon-equalizer:before {
  content: "\e210";
}
.glyphicon-king:before {
  content: "\e211";
}
.glyphicon-queen:before {
  content: "\e212";
}
.glyphicon-pawn:before {
  content: "\e213";
}
.glyphicon-bishop:before {
  content: "\e214";
}
.glyphicon-knight:before {
  content: "\e215";
}
.glyphicon-baby-formula:before {
  content: "\e216";
}
.glyphicon-tent:before {
  content: "\26fa";
}
.glyphicon-blackboard:before {
  content: "\e218";
}
.glyphicon-bed:before {
  content: "\e219";
}
.glyphicon-apple:before {
  content: "\f8ff";
}
.glyphicon-erase:before {
  content: "\e221";
}
.glyphicon-hourglass:before {
  content: "\231b";
}
.glyphicon-lamp:before {
  content: "\e223";
}
.glyphicon-duplicate:before {
  content: "\e224";
}
.glyphicon-piggy-bank:before {
  content: "\e225";
}
.glyphicon-scissors:before {
  content: "\e226";
}
.glyphicon-bitcoin:before {
  content: "\e227";
}
.glyphicon-btc:before {
  content: "\e227";
}
.glyphicon-xbt:before {
  content: "\e227";
}
.glyphicon-yen:before {
  content: "\00a5";
}
.glyphicon-jpy:before {
  content: "\00a5";
}
.glyphicon-ruble:before {
  content: "\20bd";
}
.glyphicon-rub:before {
  content: "\20bd";
}
.glyphicon-scale:before {
  content: "\e230";
}
.glyphicon-ice-lolly:before {
  content: "\e231";
}
.glyphicon-ice-lolly-tasted:before {
  content: "\e232";
}
.glyphicon-education:before {
  content: "\e233";
}
.glyphicon-option-horizontal:before {
  content: "\e234";
}
.glyphicon-option-vertical:before {
  content: "\e235";
}
.glyphicon-menu-hamburger:before {
  content: "\e236";
}
.glyphicon-modal-window:before {
  content: "\e237";
}
.glyphicon-oil:before {
  content: "\e238";
}
.glyphicon-grain:before {
  content: "\e239";
}
.glyphicon-sunglasses:before {
  content: "\e240";
}
.glyphicon-text-size:before {
  content: "\e241";
}
.glyphicon-text-color:before {
  content: "\e242";
}
.glyphicon-text-background:before {
  content: "\e243";
}
.glyphicon-object-align-top:before {
  content: "\e244";
}
.glyphicon-object-align-bottom:before {
  content: "\e245";
}
.glyphicon-object-align-horizontal:before {
  content: "\e246";
}
.glyphicon-object-align-left:before {
  content: "\e247";
}
.glyphicon-object-align-vertical:before {
  content: "\e248";
}
.glyphicon-object-align-right:before {
  content: "\e249";
}
.glyphicon-triangle-right:before {
  content: "\e250";
}
.glyphicon-triangle-left:before {
  content: "\e251";
}
.glyphicon-triangle-bottom:before {
  content: "\e252";
}
.glyphicon-triangle-top:before {
  content: "\e253";
}
.glyphicon-console:before {
  content: "\e254";
}
.glyphicon-superscript:before {
  content: "\e255";
}
.glyphicon-subscript:before {
  content: "\e256";
}
.glyphicon-menu-left:before {
  content: "\e257";
}
.glyphicon-menu-right:before {
  content: "\e258";
}
.glyphicon-menu-down:before {
  content: "\e259";
}
.glyphicon-menu-up:before {
  content: "\e260";
}
* {
  box-sizing: border-box;
}
*:before,
*:after {
  box-sizing: border-box;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333333;
  background-color: #fff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #3ca2e0;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #1c7ab3;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 0px;
}
.img-thumbnail {
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 0px;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role="button"] {
  cursor: pointer;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 36px;
}
h2,
.h2 {
  font-size: 30px;
}
h3,
.h3 {
  font-size: 24px;
}
h4,
.h4 {
  font-size: 18px;
}
h5,
.h5 {
  font-size: 14px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0 0 10px;
}
.lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 21px;
  }
}
small,
.small {
  font-size: 85%;
}
mark,
.mark {
  background-color: #f0ad4e;
  padding: .2em;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777777;
}
.text-primary {
  color: #3ca2e0;
}
.text-success {
  color: #5cb85c;
}
.text-info {
  color: #5bc0de;
}
.text-warning {
  color: #f0ad4e;
}
.text-danger {
  color: #de6764;
}
.bg-primary {
  color: #fff;
  background-color: #3ca2e0;
}
.bg-success {
  color: #fff;
  background-color: #5cb85c;
}
.bg-info {
  color: #fff;
  background-color: #5bc0de;
}
.bg-warning {
  color: #fff;
  background-color: #f0ad4e;
}
.bg-danger {
  color: #fff;
  background-color: #de6764;
}
.page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eeeeee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 10px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 20px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777777;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eeeeee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
  text-align: right;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014';
}
address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 0px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 0px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  box-shadow: none;
}
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  word-break: break-all;
  word-wrap: break-word;
  color: #333333;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 0px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 5px;
  padding-right: 5px;
}
@media (min-width: 768px) {
  .container {
    width: 730px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 950px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1150px;
  }
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 5px;
  padding-right: 5px;
}
.row {
  margin-left: -5px;
  margin-right: -5px;
}
.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 5px;
  padding-right: 5px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777777;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #5cb85c;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #4cae4c;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #5bc0de;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #46b8da;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #f0ad4e;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #eea236;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #de6764;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #da524f;
}
.table-responsive {
  overflow-x: auto;
  min-height: 0.01%;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555555;
}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 0px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #eeeeee;
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"],
  input[type="time"],
  input[type="datetime-local"],
  input[type="month"] {
    line-height: 34px;
  }
  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm,
  .input-group-sm input[type="date"],
  .input-group-sm input[type="time"],
  .input-group-sm input[type="datetime-local"],
  .input-group-sm input[type="month"] {
    line-height: 30px;
  }
  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg,
  .input-group-lg input[type="date"],
  .input-group-lg input[type="time"],
  .input-group-lg input[type="datetime-local"],
  .input-group-lg input[type="month"] {
    line-height: 46px;
  }
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  min-height: 20px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 4px \9;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
  min-height: 34px;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-left: 0;
  padding-right: 0;
}
.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 0px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 0px;
}
select.form-group-sm .form-control {
  height: 30px;
  line-height: 30px;
}
textarea.form-group-sm .form-control,
select[multiple].form-group-sm .form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  min-height: 32px;
}
.input-lg {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 0px;
}
select.input-lg {
  height: 46px;
  line-height: 46px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 0px;
}
select.form-group-lg .form-control {
  height: 46px;
  line-height: 46px;
}
textarea.form-group-lg .form-control,
select[multiple].form-group-lg .form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  min-height: 38px;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 42.5px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none;
}
.input-lg + .form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px;
}
.input-sm + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #fff;
}
.has-success .form-control {
  border-color: #fff;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #e6e6e6;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffffff;
}
.has-success .input-group-addon {
  color: #fff;
  border-color: #fff;
  background-color: #5cb85c;
}
.has-success .form-control-feedback {
  color: #fff;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #fff;
}
.has-warning .form-control {
  border-color: #fff;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #e6e6e6;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffffff;
}
.has-warning .input-group-addon {
  color: #fff;
  border-color: #fff;
  background-color: #f0ad4e;
}
.has-warning .form-control-feedback {
  color: #fff;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #fff;
}
.has-error .form-control {
  border-color: #fff;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #e6e6e6;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ffffff;
}
.has-error .input-group-addon {
  color: #fff;
  border-color: #fff;
  background-color: #de6764;
}
.has-error .form-control-feedback {
  color: #fff;
}
.has-feedback label ~ .form-control-feedback {
  top: 25px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-static {
    display: inline-block;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px;
}
.form-horizontal .form-group {
  margin-left: -5px;
  margin-right: -5px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 5px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 14.333333px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
  }
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  border-radius: 0px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  outline: 0;
  background-image: none;
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  pointer-events: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  box-shadow: none;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:hover,
.btn-default:focus,
.btn-default.focus,
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #3ca2e0;
  border-color: #2698dd;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary.focus,
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #2089c9;
  border-color: #1b74aa;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
  background-color: #3ca2e0;
  border-color: #2698dd;
}
.btn-primary .badge {
  color: #3ca2e0;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success.focus,
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:hover,
.btn-info:focus,
.btn-info.focus,
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning.focus,
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #de6764;
  border-color: #da524f;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger.focus,
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #d53e3a;
  border-color: #c22d29;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
  background-color: #de6764;
  border-color: #da524f;
}
.btn-danger .badge {
  color: #de6764;
  background-color: #fff;
}
.btn-link {
  color: #3ca2e0;
  font-weight: normal;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #1c7ab3;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 0px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 0px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 0px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition-property: height, visibility;
  transition-duration: 0.35s;
  transition-timing-function: ease;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 14px;
  text-align: left;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  background-color: #3ca2e0;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #777777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  left: auto;
  right: 0;
}
.dropdown-menu-left {
  left: 0;
  right: auto;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px solid;
  content: "";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}
.btn-group.open .dropdown-toggle {
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-bottom-left-radius: 0px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 0px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  line-height: 46px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 0px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #555555;
  text-align: center;
  background-color: #eeeeee;
  border: 1px solid #ccc;
  border-radius: 0px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 0px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 18px;
  border-radius: 0px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  margin-left: -1px;
}
.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.nav > li.disabled > a {
  color: #777777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777777;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eeeeee;
  border-color: #3ca2e0;
}
.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 0px 0px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555555;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
  cursor: default;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 0px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 0px 0px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 0px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #3ca2e0;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 0px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 0px 0px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .navbar {
    border-radius: 0px;
  }
}
@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  overflow-x: visible;
  padding-right: 5px;
  padding-left: 5px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 480px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -5px;
  margin-left: -5px;
}
@media (min-width: 768px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 768px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  padding: 15px 5px;
  font-size: 18px;
  line-height: 20px;
  height: 50px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -5px;
  }
}
.navbar-toggle {
  position: relative;
  float: left;
  padding: 9px 10px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 0px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
  background: #fff;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 7.5px -5px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
}
.navbar-form {
  margin-left: -5px;
  margin-right: -5px;
  padding: 10px 5px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 8px;
  margin-bottom: 8px;
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .form-control-static {
    display: inline-block;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    box-shadow: none;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px;
}
.navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-left: 5px;
    margin-right: 5px;
  }
}
@media (min-width: 768px) {
  .navbar-left {
    float: left !important;
  }
  .navbar-right {
    float: right !important;
    margin-right: -5px;
  }
  .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #e7e7e7;
  color: #555;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #3ca2e0;
  border-color: #2089c9;
}
.navbar-inverse .navbar-brand {
  color: #f2f2f2;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #fff;
}
.navbar-inverse .navbar-nav > li > a {
  color: #f2f2f2;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #2089c9;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #2292d6;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #2089c9;
  color: #fff;
}
@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #2089c9;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #2089c9;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #f2f2f2;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #2089c9;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #f2f2f2;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #f2f2f2;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 0px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  content: "/\00a0";
  padding: 0 5px;
  color: #ccc;
}
.breadcrumb > .active {
  color: #777777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 0px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #3ca2e0;
  background-color: #fff;
  border: 1px solid #ddd;
  margin-left: -1px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 0px;
  border-top-left-radius: 0px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 0px;
  border-top-right-radius: 0px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: #1c7ab3;
  background-color: #eeeeee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: #fff;
  background-color: #3ca2e0;
  border-color: #3ca2e0;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  background-color: #fff;
  border-color: #ddd;
  cursor: not-allowed;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 0px;
  border-top-left-radius: 0px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 0px;
  border-top-right-radius: 0px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 0px;
  border-top-left-radius: 0px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 0px;
  border-top-right-radius: 0px;
}
.pager {
  padding-left: 0;
  margin: 20px 0;
  list-style: none;
  text-align: center;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #777777;
  background-color: #fff;
  cursor: not-allowed;
}
.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777777;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #3ca2e0;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #2089c9;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #de6764;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #d53e3a;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  color: #fff;
  line-height: 1;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: #777777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge,
.btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #3ca2e0;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding: 30px 15px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eeeeee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron,
.container-fluid .jumbotron {
  border-radius: 0px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding: 48px 0;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 63px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 0px;
  transition: border 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-left: auto;
  margin-right: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #3ca2e0;
}
.thumbnail .caption {
  padding: 9px;
  color: #333333;
}
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 0px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #5cb85c;
  border-color: #4cae4c;
  color: #fff;
}
.alert-success hr {
  border-top-color: #449d44;
}
.alert-success .alert-link {
  color: #e6e6e6;
}
.alert-info {
  background-color: #5bc0de;
  border-color: #46b8da;
  color: #fff;
}
.alert-info hr {
  border-top-color: #31b0d5;
}
.alert-info .alert-link {
  color: #e6e6e6;
}
.alert-warning {
  background-color: #f0ad4e;
  border-color: #eea236;
  color: #fff;
}
.alert-warning hr {
  border-top-color: #ec971f;
}
.alert-warning .alert-link {
  color: #e6e6e6;
}
.alert-danger {
  background-color: #de6764;
  border-color: #da524f;
  color: #fff;
}
.alert-danger hr {
  border-top-color: #d53e3a;
}
.alert-danger .alert-link {
  color: #e6e6e6;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  overflow: hidden;
  height: 20px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border-radius: 0px;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #3ca2e0;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  transition: width 0.6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #de6764;
}
.progress-striped .progress-bar-danger {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  zoom: 1;
  overflow: hidden;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-right-radius: 0px;
  border-top-left-radius: 0px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0px;
}
a.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
a.list-group-item:focus {
  text-decoration: none;
  color: #555;
  background-color: #f5f5f5;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  background-color: #eeeeee;
  color: #777777;
  cursor: not-allowed;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #3ca2e0;
  border-color: #3ca2e0;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #ecf6fc;
}
.list-group-item-success {
  color: #fff;
  background-color: #5cb85c;
}
a.list-group-item-success {
  color: #fff;
}
a.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
a.list-group-item-success:focus {
  color: #fff;
  background-color: #4cae4c;
}
a.list-group-item-success.active,
a.list-group-item-success.active:hover,
a.list-group-item-success.active:focus {
  color: #fff;
  background-color: #fff;
  border-color: #fff;
}
.list-group-item-info {
  color: #fff;
  background-color: #5bc0de;
}
a.list-group-item-info {
  color: #fff;
}
a.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
a.list-group-item-info:focus {
  color: #fff;
  background-color: #46b8da;
}
a.list-group-item-info.active,
a.list-group-item-info.active:hover,
a.list-group-item-info.active:focus {
  color: #fff;
  background-color: #fff;
  border-color: #fff;
}
.list-group-item-warning {
  color: #fff;
  background-color: #f0ad4e;
}
a.list-group-item-warning {
  color: #fff;
}
a.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
a.list-group-item-warning:focus {
  color: #fff;
  background-color: #eea236;
}
a.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #fff;
  border-color: #fff;
}
.list-group-item-danger {
  color: #fff;
  background-color: #de6764;
}
a.list-group-item-danger {
  color: #fff;
}
a.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
a.list-group-item-danger:focus {
  color: #fff;
  background-color: #da524f;
}
a.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #fff;
  border-color: #fff;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 10px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 0;
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: -1;
  border-top-left-radius: -1;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-footer {
  padding: 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: -1;
  border-bottom-left-radius: -1;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: -1;
  border-top-left-radius: -1;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: -1;
  border-bottom-left-radius: -1;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
  padding-left: 15px;
  padding-right: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: -1;
  border-top-left-radius: -1;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: -1;
  border-top-right-radius: -1;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: -1;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: -1;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: -1;
  border-bottom-left-radius: -1;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-left-radius: -1;
  border-bottom-right-radius: -1;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: -1;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: -1;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-group {
  margin-bottom: 20px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 0;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-control {
  display: none;
}
.panel-control a {
  font-size: 13px;
  color: #fff;
  display: inline-block;
  padding: 3px;
  opacity: 0.5;
}
.panel-control a:hover,
.panel-control a:active,
.panel-control a:focus {
  opacity: 0.8;
}
.panel-default > .panel-heading {
  color: #333333;
  background-color: #fff;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #fff;
  background-color: #333333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #3ca2e0;
  border-color: #3ca2e0;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #3ca2e0;
}
.panel-primary > .panel-heading .badge {
  color: #3ca2e0;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #3ca2e0;
}
.panel-success > .panel-heading {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #4cae4c;
}
.panel-success > .panel-heading .badge {
  color: #5cb85c;
  background-color: #fff;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #4cae4c;
}
.panel-info > .panel-heading {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #46b8da;
}
.panel-info > .panel-heading .badge {
  color: #5bc0de;
  background-color: #fff;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #46b8da;
}
.panel-warning > .panel-heading {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #eea236;
}
.panel-warning > .panel-heading .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #eea236;
}
.panel-danger > .panel-heading {
  color: #fff;
  background-color: #de6764;
  border-color: #da524f;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #da524f;
}
.panel-danger > .panel-heading .badge {
  color: #de6764;
  background-color: #fff;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #da524f;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 0px;
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 0px;
}
.well-sm {
  padding: 9px;
  border-radius: 0px;
}
.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  transform: translate(0, -25%);
  transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0px;
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
  min-height: 16.42857143px;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: normal;
  line-height: 1.4;
  opacity: 0;
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.tooltip.top {
  margin-top: -3px;
  padding: 5px 0;
}
.tooltip.right {
  margin-left: 3px;
  padding: 0 5px;
}
.tooltip.bottom {
  margin-top: 3px;
  padding: 5px 0;
}
.tooltip.left {
  margin-left: -3px;
  padding: 0 5px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  text-decoration: none;
  background-color: #000;
  border-radius: 0px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  right: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  white-space: normal;
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 14px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: -1px -1px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  border-width: 10px;
  content: "";
}
.popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  bottom: -11px;
}
.popover.top > .arrow:after {
  content: " ";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #fff;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
}
.popover.right > .arrow:after {
  content: " ";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #fff;
}
.popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  top: -11px;
}
.popover.bottom > .arrow:after {
  content: " ";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.popover.left > .arrow:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #fff;
  bottom: -10px;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.carousel-inner > .item {
  display: none;
  position: relative;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item {
    transition: -webkit-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000;
    perspective: 1000;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-control.left {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.carousel-control.right {
  left: auto;
  right: 0;
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.carousel-control:hover,
.carousel-control:focus {
  outline: 0;
  color: #fff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  margin-top: -10px;
  line-height: 1;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid #fff;
  border-radius: 10px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
}
.carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -15px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -15px;
  }
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-footer:before,
.modal-footer:after {
  content: " ";
  display: table;
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
.ui-base {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
.user-avatar {
  width: 125px;
  height: 125px;
}
.login-page {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: auto;
  background: #3ca2e0;
  text-align: center;
  color: #fff;
  padding: 3em;
}
.login-page h1 {
  font-weight: 300;
}
.login-page h1 small {
  color: rgba(255, 255, 255, 0.7);
}
.login-page .form-group {
  padding: 8px 0;
}
.login-page .form-content {
  padding: 40px 0;
}
body {
  background-color: #ecf0f1;
}
.dashboard-page {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #ecf0f1;
  color: #666;
  transition: all 0.2s ease-in-out;
  /*
     * Base structure
     */
  /*
     * Global add-ons
     */
  /*
     * Top navigation
     * Hide default border to remove 1px line.
     */
  /*
     * Sidebar
     */
  /* Hide for mobile, show later */
  /* Sidebar navigation */
  /*
     * Main content
     */
  /*
     * Placeholder dashboard ideas
     */
}
.dashboard-page .sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}
.dashboard-page .navbar-fixed-top {
  border: 0;
}
.dashboard-page .sidebar {
  display: none;
  color: #FFF;
}
.dashboard-page .sidebar .user-avatar {
  margin: 10px 0 10px 0;
}
.dashboard-page .sidebar .brand {
  padding-top: 15px;
}
.dashboard-page .sidebar h2 {
  font-weight: 300;
}
.dashboard-page .sidebar h2 small {
  color: rgba(255, 255, 255, 0.7);
}
@media (min-width: 768px) {
  .dashboard-page .sidebar {
    position: fixed;
    top: 0px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 0 20px 20px 20px;
    overflow-x: hidden;
    overflow-y: auto;
    /* Scrollable contents if viewport is shorter than content. */
    background-color: #3ca2e0;
    border-right: 1px solid #eee;
  }
}
.dashboard-page .nav > li > a:hover,
.dashboard-page .nav > li > a:focus {
  background: #2698dd;
}
.dashboard-page .nav-sidebar {
  margin-right: -21px;
  /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
  margin-top: 20px;
}
.dashboard-page .nav-sidebar > li > a {
  color: #fff;
  padding-right: 20px;
  padding-left: 20px;
}
.dashboard-page .nav-sidebar > .active > a,
.dashboard-page .nav-sidebar > .active > a:hover,
.dashboard-page .nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #2698dd;
}
.dashboard-page .main {
  padding: 20px;
  position: absolute;
  top: 0px;
  bottom: 0px;
  overflow-x: hidden;
  overflow-y: auto;
}
.dashboard-page .main .jumbotron {
  background: #FFF;
  margin-top: 20px;
}
@media (min-width: 769px) {
  .dashboard-page .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.dashboard-page .main .page-header {
  margin-top: 0;
}
.dashboard-page .placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.dashboard-page .placeholders h4 {
  margin-bottom: 0;
}
.dashboard-page .placeholder {
  margin-bottom: 20px;
}
.dashboard-page .placeholder img {
  display: inline-block;
  border-radius: 50%;
}
.dashboard-page .bg-fade {
  font-size: 500px;
  color: rgba(0, 0, 0, 0.1);
  position: absolute;
  right: -100px;
  top: 200px;
}
#body-container {
  margin-left: 235px;
  padding: 10px;
  margin-top: 50px;
  overflow-x: hidden;
  transition: all 0.2s ease-in-out;
}
#body-container .home-stats .hvr-wobble-horizontal {
  display: block;
}
#body-container .home-stats a {
  color: inherit;
}
#body-container .home-charts-middle .chart-container {
  background-color: #fff;
  border: solid 1px rgba(0, 0, 0, 0.1);
  position: relative;
  min-height: 285px;
  overflow: hidden;
  padding: 15px;
}
#body-container .home-charts-middle .chart-container .chart-comment {
  position: absolute;
  left: 15px;
  top: 15px;
}
#body-container .home-charts-middle .chart-container .chart-comment .comment-header {
  font-weight: 600;
  font-size: 23px;
}
#body-container .home-charts-middle .chart-container .chart-comment .comment-comment {
  font-size: 13px;
}
#body-container .home-charts-right .top-right-chart {
  background-color: #fff;
  border: solid 1px rgba(0, 0, 0, 0.1);
}
#body-container .home-charts-right .top-right-chart .c3 svg {
  margin-bottom: -12px;
}
#body-container .home-charts-right .top-right-chart .c3-axis-x text {
  fill: none;
}
#body-container .home-charts-right .top-right-chart .c3-axis-y text {
  fill: none;
}
#body-container .home-charts-right .top-right-chart .c3 path {
  stroke: none;
}
#body-container .home-charts-right .top-right-chart .c3 line {
  stroke: none;
}
#body-container .home-charts-right .top-left-chart {
  background-color: #fff;
  border: solid 1px rgba(0, 0, 0, 0.1);
  margin-top: 10px;
  text-align: center;
}
#body-container .home-charts-right .top-left-chart #pie-chart {
  margin-top: 6px;
}
#body-container .home-charts-right .top-left-chart .c3-chart-arc text {
  display: none;
}
#body-container .piechart-container {
  display: inline-block;
}
#body-container .piechart-container .chart1,
#body-container .piechart-container .chart2,
#body-container .piechart-container .chart3 {
  background-color: #fff;
  border: solid 1px rgba(0, 0, 0, 0.1);
  display: inline-block;
  width: 100%;
  text-align: center;
}
#body-container .piechart-container .chart1 .easypie,
#body-container .piechart-container .chart2 .easypie,
#body-container .piechart-container .chart3 .easypie {
  padding: 7px;
}
#body-container .piechart-container .chart1 .chart-header,
#body-container .piechart-container .chart2 .chart-header,
#body-container .piechart-container .chart3 .chart-header {
  height: 28px;
  padding-top: 3px;
  margin-bottom: 2px;
  font-size: 15px;
  font-weight: 600;
}
#body-container .piechart-container .chart1 .chart-header {
  background: #f0ad4e;
  color: white;
}
#body-container .piechart-container .chart2 .chart-header {
  background: #3ca2e0;
  color: white;
}
#body-container .piechart-container .chart3 .chart-header {
  background: #de6764;
  color: white;
}
#bar-chart {
  overflow: hidden;
}
.box {
  background-color: #fff;
  border: solid 1px rgba(0, 0, 0, 0.1);
}
.heading {
  font-weight: bold;
  font-size: 12px;
  text-transform: uppercase;
}
@media (max-width: 767px) {
  .home-charts-right {
    margin-top: 13px;
    margin-bottom: 13px;
  }
  .todo-container {
    margin-top: 13px;
    margin-bottom: 13px;
  }
}
@media (max-width: 767px) {
  #body-container {
    margin-left: 0;
    width: 100%;
  }
  #sidebar {
    left: -235px;
    transition: left 0.2s linear;
  }
  .dashboard-page {
    margin-left: -235px;
    position: static;
  }
  body {
    overflow-x: hidden ;
  }
  .push-right #sidebar {
    left: 0;
  }
  .push-right #body-container {
    margin-left: 235px !important;
  }
}
.inbox-container-wrap {
  display: table;
  width: 100%;
  height: 100%;
  background-color: #fff;
  border-radius: 5px;
}
.inbox-container-wrap .inbox-container,
.inbox-container-wrap .message-list-wrapper,
.inbox-container-wrap .text-wrapper {
  display: table-cell;
  vertical-align: top;
}
.email-options .email-options-title {
  opacity: 0.92;
}
.email-options .main-options {
  padding-left: 0;
  list-style-type: none;
}
.email-options .main-options li {
  font-size: 15px;
  line-height: 40px;
  padding-top: 3px;
}
.email-options .main-options a {
  color: #424242;
  opacity: 0.9;
  transition: all 0.2s ease-in-out;
}
.email-options .main-options a:hover,
.email-options .main-options a:active,
.email-options .main-options a:focus {
  color: #FFFFFF;
  text-decoration: none;
}
.email-options .main-options .badge {
  margin-top: 9px;
}
.wrap-list {
  list-style-type: none;
  position: relative;
}
.wrap-list .messages-list {
  max-height: 400px;
  overflow: auto;
}
.wrap-list .messages-list .messages-item:hover {
  opacity: 0.9;
}
.wrap-list .messages-list .messages-item .fa {
  color: #ccc;
  font-size: 11px;
}
.wrap-list .messages-list .messages-item .fa-starred {
  color: #3ca2e0;
  font-size: 11px;
}
.wrap-list .messages-list .messages-item .date-class {
  font-size: 11px;
  margin-top: 3px;
}
.wrap-list .messages-list .messages-item p {
  font-size: 11.5px;
  line-height: 14px;
}
.wrap-list .messages-list .name {
  font-size: 18px;
  opacity: 0.7;
}
.wrap-list .messages-list .text {
  float: right;
  font-size: 12px;
  margin-top: -40px;
  opacity: 0.7;
}
.wrap-list .messages-list .messages-item-subject {
  font-size: 13px;
  font-weight: 600;
  color: #555;
}
.wrap-list .messages-list .messages-item-content p {
  width: 240px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-bottom: 0;
  line-height: 18px;
}
.wrap-list .messages-list .fa:hover {
  color: #3ca2e0;
}
.wrap-list .messages-list .leftist {
  width: 8px;
  float: left;
  margin-left: -17px;
  margin-top: -2px;
}
.wrap-list .messages-list .leftist .checkbox1 {
  margin-left: -2px;
}
.wrap-list .messages-list .leftist .checkbox1 span {
  height: 12px;
  width: 12px;
}
.wrap-list .messages-list .leftist .checkbox1 span::before {
  font-size: 14px;
  line-height: 11px;
  border: solid 1px #ddd;
}
.wrap-list ul {
  padding-left: 0px;
}
.wrap-list a {
  color: #424242;
}
.wrap-list li.active-message {
  background: #3ca2e0;
  color: #F3F3F3 !important;
}
.wrap-list li.active-message .messages-item-subject,
.wrap-list li.active-message .date-class,
.wrap-list li.active-message .fa {
  color: #fff;
}
.wrap-list li.active-message .leftist .fa {
  color: #fff;
}
.wrap-list .messages-search {
  margin-bottom: 20px;
}
.wrap-list .messages-item {
  padding-top: 10px;
  border-bottom: 1px solid #C6C6C6;
  padding-left: 30px;
  padding-right: 10px;
  height: 60px;
}
.wrap-list .wrap-options {
  position: absolute;
  left: 16px;
  right: 30px;
  height: 50px;
  background-color: #fff;
  z-index: 1;
  top: 0;
}
.wrap-list .wrap-options input.form-control {
  padding-left: 10px;
}
.message-actions .nav-pills {
  background: #E7E7E7;
}
.message-actions .nav-pills a {
  transition: all 0.1s ease-in-out;
}
.message-actions .nav-pills a.repall:hover {
  color: #5cb85c;
}
.message-actions .nav-pills a.print:hover {
  color: #5bc0de;
}
.message-actions .nav-pills a.del:hover {
  color: #de6764;
}
.message-actions .print {
  margin-left: 175px;
}
.message-header .message-time {
  float: right;
  margin-top: 28px;
  margin-right: 463px;
  opacity: 0.7;
  font-size: 12px;
}
.message-header .message-from {
  float: left;
  margin-top: -70px;
  margin-left: 132px;
  font-size: 15px;
}
.message-header .icon {
  margin-top: 10px;
}
.message-subject {
  font-size: 14.5px;
  opacity: 0.9;
}
.message-to {
  opacity: 0.8;
}
.message-content {
  opacity: 0.88;
}
ul.main-options li a {
  display: block;
}
.inbox-container {
  border-radius: 5px 0 0 5px;
  min-width: 170px;
  background: #4C4C4C;
  color: #E7E7E7;
}
.inbox-container .butt-container {
  padding: 16px;
}
.inbox-container .butt-container .btn-block {
  height: 30px;
  font-size: 13px;
}
.inbox-container .poor {
  margin-top: 10px;
  margin-bottom: 10px;
  opacity: 0.7;
  border-top: 1px solid #848484;
}
.inbox-container ul.main-options h5 {
  margin-top: 15px;
  margin-bottom: 5px;
  font-size: 13px;
  font-weight: 600;
  padding-left: 13px;
  opacity: 0.5;
}
.inbox-container ul.main-options li.activeli {
  background: #3f3f3f;
}
.inbox-container ul.main-options li.activeli .badge {
  background: #5cb85c;
}
.inbox-container ul.main-options li {
  padding-left: 5px;
  padding-right: 10px;
}
.inbox-container ul.main-options li .fa-stop {
  margin-top: 10px;
}
.inbox-container ul.main-options li .faorange {
  color: #FFB457;
}
.inbox-container ul.main-options li .fayellow {
  color: #FFFA9B;
}
.inbox-container ul.main-options li .facyan {
  color: #8AEFE6;
}
.inbox-container ul.main-options li .fapurple {
  color: #DD8BFF;
}
.inbox-container ul.main-options li .badge {
  background: #de6764;
}
.inbox-container ul.main-options li a {
  color: #E7E7E7;
  font-size: 13px;
}
.message-list-wrapper {
  width: 300px;
  background: #E9E9E9;
  overflow: hidden;
  position: relative;
  padding-top: 107px;
  border-right: solid 1px #ddd;
}
.message-list-wrapper .searchbox {
  height: 107px;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  padding: 15px;
  text-align: center;
  font-size: 15px;
  opacity: 0.8;
}
.message-list-wrapper .searchbox .fa {
  font-size: 13px;
  opacity: 0.7;
}
.message-list-wrapper .searchbox .form-control {
  margin-top: 6px;
}
.message-list-wrapper .searchbox .sebox {
  font-size: 26px;
}
.message-list-wrapper .wrap-list {
  background: #F5F5F5;
}
.text-wrapper .wrap-message {
  overflow: hidden;
}
.text-wrapper .wrap-message .message-topic {
  padding: 15px;
  border-bottom: 1px solid #DEDEDE;
  font-size: 18px;
  line-height: 20px;
  color: #565656;
}
.text-wrapper .wrap-message .message-topic .pull-right .fa {
  font-size: 14px;
  padding-left: 16px;
  color: #B9B9B9;
}
.text-wrapper .wrap-message .message-topic .pull-right a {
  color: inherit;
}
.text-wrapper .wrap-message .message-topic .pull-right a:hover .fa-reply {
  color: #5cb85c;
}
.text-wrapper .wrap-message .message-topic .pull-right a:hover .fa-trash-o {
  color: #de6764;
}
.text-wrapper .wrap-message .message-sender {
  padding: 5px 15px;
  border-bottom: 1px solid #DEDEDE;
  color: #B5B5B5;
}
.text-wrapper .wrap-message .message-sender .fa-caret-o-down {
  font-size: 13px;
}
.text-wrapper .wrap-message .message-sender a {
  font-size: 14px;
}
.text-wrapper .wrap-message .message-sender .sender-img {
  width: 40px;
  border: 1px solid #ddd;
}
.text-wrapper .message-content {
  padding: 15px;
  overflow: auto;
}
.text-wrapper .messagefooter {
  height: 70px;
  padding-top: 10px;
  padding-right: 15px;
}
.text-wrapper .messagefooter .btn-rounded {
  font-size: 13px;
  height: 30px;
  width: 100px;
}
@media (max-width: 1120px) {
  .text-wrapper {
    display: none !important;
  }
  .inbox-container {
    width: 30%;
  }
  .message-list-wrapper {
    width: 70%;
  }
}
@media (max-width: 550px) {
  .message-list-wrapper {
    display: none;
  }
  .inbox-container {
    width: 100%;
  }
}
.compose-container .wrap-compose {
  overflow: hidden;
  border: solid 1px #ddd;
  border-radius: 0 5px 5px 0;
}
.compose-container .mail-header {
  height: 50px;
  border-bottom: 1px solid #D8D8D8;
  padding: 15px;
  background: #EFEFEF;
}
.compose-container .mail-header h4 {
  margin-top: 3px;
  font-size: 16px;
  color: #616161;
}
.compose-container .receipient {
  height: 45px;
  padding: 11px 15px;
  border-bottom: 1px solid #D8D8D8;
}
.compose-container .receipient strong.to {
  opacity: 0.7;
  font-size: 11.5px;
}
.compose-container .receipient .label-primary {
  padding-top: 5px;
  padding-left: 12px;
  padding-bottom: 5px;
  padding-right: 12px;
  margin-left: 50px;
  border-radius: 20px;
}
.compose-container .subject {
  height: 37px;
  border-bottom: 1px solid #D8D8D8;
  padding: 8px 15px;
}
.compose-container .subject strong.subjetc {
  margin-left: 15px;
  font-size: 12px;
}
.compose-container .subject strong.strong-header {
  opacity: 0.7;
  font-size: 11.5px;
}
.compose-container .send-footer {
  border-top: 1px solid #D8D8D8;
  padding: 15px;
}
.compose-container .send-footer .btn {
  width: 75px;
}
.compose-container .send-footer .fa {
  font-size: 19px;
}
.compose-container .send-footer .fa-trash-o {
  color: #de6764;
  margin-top: 7px;
  margin-right: 10px;
}
.cke_1 {
  border-radius: 0 !important;
}
.img-circle {
  border: 2px solid white;
}
.cover-wrapper {
  position: relative;
  margin: -10px -10px 0 -10px;
}
div.cover-photo {
  background-image: url('img/profile-cover.jpg');
  background-size: cover;
  height: 300px;
}
div.cover-photo .name-desg {
  padding: 15px;
  font-size: 13px;
  color: white;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.6);
  height: 300px;
  font-weight: 300;
  background: rgba(0, 0, 0, 0.4);
  background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.4)), color-stop(100%, rgba(255, 255, 255, 0)));
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(255, 255, 255, 0) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#ffffff', GradientType=0);
}
div.cover-photo .name-desg h3 {
  font-weight: 300;
  margin: 0;
}
div.cover-photo .name-desg h3 small {
  display: block;
  color: #eee;
  margin-top: 8px;
  font-size: 13px;
  font-weight: 300;
}
.profile-photo-warp {
  position: relative;
}
img.profile-photo {
  width: 200px;
  position: absolute;
  right: 40px;
  top: -150px;
}
.foobar {
  width: 100%;
  background-color: white;
  min-height: 45px;
  font-size: 12px;
  color: #ADADAD;
}
.foobar a {
  color: inherit;
}
.foobar a:hover {
  color: #3ca2e0;
}
.foobar .dangerfa {
  color: #de6764;
  font-size: 18px;
  padding-left: 15px;
  padding-top: 15px;
}
.foobar .fa {
  font-size: 17px;
  padding-left: 15px;
  padding-top: 15px;
  padding-right: 5px;
}
.probutton {
  margin-left: 3%;
}
.probutton .btn {
  width: 94px;
  height: 31px;
  margin-bottom: 8px;
  font-size: 13px;
  line-height: 13px;
}
.links {
  margin-right: 250px;
}
.links .fa {
  padding-left: 12px;
}
.links a {
  color: inherit;
}
.links a:hover .fa-twitter {
  color: #31DDFE;
}
.links a:hover .fa-facebook {
  color: #274EFF;
}
.links a:hover .fa-google-plus {
  color: #CD2138;
}
.links a:hover .fa-github {
  color: #141414;
}
.profile-body {
  margin-top: 15px;
}
.profile-body .item {
  width: 25%;
}
.profile-body .profile-comment .btn,
.profile-body .item .btn {
  width: 120px;
  margin-top: -6%;
  margin-right: 3%;
  font-size: 13px;
}
.profile-body .profile-comment textarea,
.profile-body .item textarea {
  border: none;
  width: 100%;
}
.profile-body .profile-comment .panel-footer,
.profile-body .item .panel-footer {
  height: 80px;
}
.profile-body .profile-comment .submit-footer .fa,
.profile-body .item .submit-footer .fa {
  font-size: 17px;
  padding-left: 15px;
  padding-top: 5%;
  padding-right: 5px;
}
.profile-body .profile-comment .submit-footer a,
.profile-body .item .submit-footer a {
  color: inherit;
  opacity: 0.4;
}
.profile-body .profile-comment .submit-footer a:hover,
.profile-body .item .submit-footer a:hover {
  opacity: 1;
}
.profile-body .prophoto .panel-photo {
  position: absolute;
  left: -8px;
  top: -8px;
  width: 50px;
}
.profile-body .prophoto .panel-heading {
  background: inherit;
  position: relative;
  padding: 10px;
}
.profile-body .prophoto .panel-heading .panel-title {
  padding-left: 40px;
  font-size: 15px;
  font-weight: 400;
  color: #444;
}
.profile-body .prophoto .panel-heading .panel-title .text-muted {
  font-size: 11px;
}
.profile-body .prophoto .panel-body {
  padding: 0;
  overflow: hidden;
}
.profile-body .post-comment,
.profile-body .prophoto {
  position: relative;
}
.profile-body .post-comment .panel-photo,
.profile-body .prophoto .panel-photo {
  position: absolute;
  left: -5px;
  top: -5px;
  width: 50px;
}
.profile-body .post-comment .panel-heading,
.profile-body .prophoto .panel-heading {
  background: inherit;
  padding: 10px;
}
.profile-body .post-comment .panel-title,
.profile-body .prophoto .panel-title {
  padding-left: 40px;
  font-size: 15px;
  color: #444;
  font-weight: 400;
}
.profile-body .post-comment .panel-title .text-muted,
.profile-body .prophoto .panel-title .text-muted {
  font-size: 11px;
}
.profile-body .post-comment .panel-body,
.profile-body .prophoto .panel-body {
  padding: 0;
}
.profile-body .post-comment .panel-body .lorem,
.profile-body .prophoto .panel-body .lorem {
  padding: 15px;
}
.profile-body .post-comment .comments-here,
.profile-body .prophoto .comments-here {
  margin-top: 0;
  border-top: 1px solid #D0D0D0;
  padding: 10px;
}
.profile-body .post-comment .comments-here .media-body,
.profile-body .prophoto .comments-here .media-body {
  font-size: 12px;
}
.profile-body .post-comment .comments-here .media-body a,
.profile-body .prophoto .comments-here .media-body a {
  color: inherit;
}
.profile-body .post-comment .comments-here .img-responsive,
.profile-body .prophoto .comments-here .img-responsive {
  width: 40px;
}
.profile-body .post-comment .comments-here .media-heading,
.profile-body .prophoto .comments-here .media-heading {
  font-size: 14px;
}
.profile-body .post-comment .comments-here .timely,
.profile-body .prophoto .comments-here .timely {
  font-size: 10px;
  margin-top: -18px;
  padding-right: 10px;
}
.profile-body .post-comment .comments-here .comment-like,
.profile-body .prophoto .comments-here .comment-like {
  margin-top: 5px;
}
.profile-body .post-comment .comments-here .comment-like .fa,
.profile-body .prophoto .comments-here .comment-like .fa {
  padding-right: 5px;
}
.profile-body .post-comment .comments-here .comment-like a,
.profile-body .prophoto .comments-here .comment-like a {
  color: inherit;
  display: inline-block;
  padding-right: 15px;
  opacity: 0.8;
}
.profile-body .post-comment .comments-here .comment-like a:hover,
.profile-body .prophoto .comments-here .comment-like a:hover {
  opacity: 1;
}
.comment-links {
  border-top: 1px solid #D0D0D0;
  padding: 10px;
  font-size: 12px;
  line-height: 14px;
  color: #999;
  text-align: right;
}
.comment-links .fa {
  padding-right: 5px;
}
.comment-links a {
  color: inherit;
  display: inline-block;
  padding-left: 15px;
  opacity: 0.8;
}
.comment-links a:hover {
  opacity: 1;
}
@media (max-width: 992px) {
  div.cover-photo,
  div.cover-photo .name-desg {
    height: 250px;
  }
  img.profile-photo {
    top: -200px;
    width: 150px;
  }
  .foobar .links {
    margin-right: 15px;
  }
}
@media (max-width: 400px) {
  img.profile-photo {
    top: -165px;
    width: 140px;
    margin: 0 auto;
    left: 0;
    right: 0;
  }
  div.cover-photo,
  div.cover-photo .name-desg {
    text-align: center;
  }
  .foobar .pull-right {
    float: none !important;
  }
}
.invoice .invoice-logo {
  padding: 12px;
  display: table;
  width: 100%;
}
.invoice .invoice-logo .ani-left {
  display: table-cell;
  vertical-align: middle;
}
.invoice .invoice-logo .ani-right {
  display: table-cell;
  vertical-align: middle;
}
.invoice .invoice-logo p {
  text-align: right;
  font-size: 15px;
}
.invoice .btn {
  margin-right: 5px;
}
.invoice .list-unstyled.invoice-details li {
  line-height: 30px;
}
.wellb {
  background: #FFFFFF;
}
.crisp {
  color: #3ca2e0;
  margin-left: 15px;
  margin-top: 15px;
}
.text {
  font-size: 30px;
}
@media (max-width: 992px) {
  .payment-detals-wrap {
    float: none !important;
  }
}
div.four-container h1 {
  font-weight: 600;
  font-size: 7em;
}
.select-options {
  width: 300px;
  margin-top: 75px;
}
.docs-content .subject-content ul.features-list {
  list-style-type: disc;
}
.docs-content .subject-content ul.features-list ul.features-list-extended {
  list-style-type: square;
}
.docs-content .subject-content .widget-docs .widget-docs-code {
  margin-top: 6px;
}
pre {
  color: #eee;
  margin-top: 5px;
  background: #444;
}
.folder-structure-docs {
  margin-top: 70px;
  font-size: 16px;
}
.folder-structure-docs ul.features-list {
  list-style-type: disc;
}
#sidebar {
  width: 235px;
  position: fixed;
  top: 0;
  bottom: 0;
  background: #3ca2e0;
}
#sidebar .sidenav-outer {
  position: absolute;
  top: 50px;
  bottom: 0;
  left: 0;
  right: 0;
  overflow: hidden;
}
#sidebar div.side-widgets {
  margin-left: 45px;
  color: rgba(255, 255, 255, 0.8);
  float: left;
  border-top: 1px solid #2395db;
  width: 190px;
  position: absolute;
  left: 0;
}
#sidebar div.side-widgets .widgets-header {
  text-align: center;
  padding: 15px;
  height: 50px;
  color: rgba(255, 255, 255, 0.8);
  font-size: 15px;
  font-weight: 600;
}
#sidebar div.side-widgets .widgets-header a {
  color: inherit;
}
#sidebar div.side-widgets .widgets-header a:hover,
#sidebar div.side-widgets .widgets-header a:focus {
  color: #ffffff;
  text-decoration: none;
}
#sidebar div.side-widgets .widgets-content {
  padding: 12px;
  overflow: hidden;
}
#sidebar div.side-widgets .widgets-content .avatar-name {
  padding-top: 12px;
}
#sidebar div.side-widgets .widgets-content .calendar-container {
  margin-top: 10px;
}
#sidebar div.side-widgets .widgets-content .news-feed .feed-header {
  text-transform: uppercase;
  margin-left: -12px;
  margin-right: -12px;
  height: 27px;
  padding-top: 6px;
  padding-left: 12px;
  font-size: 10px;
  margin-top: 10px;
  background: #2089c9;
}
#sidebar div.side-widgets .widgets-content .news-feed .feed-content {
  margin-top: 4px;
}
#sidebar div.side-widgets .widgets-content .news-feed .feed-content ul {
  list-style-type: none;
  padding: 0;
}
#sidebar div.side-widgets .widgets-content .news-feed .feed-content ul li {
  height: 40px;
  padding-top: 4px;
  font-size: 10.5px;
}
#sidebar div.side-widgets .widgets-content .news-feed .feed-content ul li .feed-date {
  float: right;
  font-size: 9px;
  padding-right: 5px;
  color: #eee;
}
#sidebar div.side-widgets .widgets-content .news-feed .feed-content ul li a {
  color: inherit;
}
#sidebar div.side-widgets .widgets-content .news-feed .feed-content ul li a:hover,
#sidebar div.side-widgets .widgets-content .news-feed .feed-content ul li a:focus {
  color: #ffffff;
  text-decoration: none;
}
#sidebar div.side-menu {
  width: 45px;
  background: #2089c9;
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 999;
  float: left;
}
#sidebar div.side-menu .menu-header {
  height: 50px;
  padding: 8px;
}
#sidebar div.side-menu .menu-body {
  width: 45px;
  border-top: 1px solid #2395db;
}
#sidebar div.side-menu .menu-body ul.sidenav {
  list-style-type: none;
  padding: 0;
}
#sidebar div.side-menu .menu-body ul.sidenav li {
  position: relative;
  margin-top: 0;
}
#sidebar div.side-menu .menu-body ul.sidenav li a {
  color: rgba(255, 255, 255, 0.8);
  border-radius: 0;
  transition: all .12s linear;
}
#sidebar div.side-menu .menu-body ul.sidenav li a:hover {
  color: #fff;
}
#sidebar div.side-menu .menu-body ul.sidenav li a:hover,
#sidebar div.side-menu .menu-body ul.sidenav li a:focus,
#sidebar div.side-menu .menu-body ul.sidenav li a:active {
  background: #3ca2e0;
  color: #fff;
}
#sidebar div.side-menu .menu-body ul.sidenav li ul.nested-dropdown {
  display: none;
  list-style: none;
  position: absolute;
  top: 0;
  left: 45px;
  background: white;
  padding-left: 0px;
  width: 190px;
  min-height: 40px;
  padding-top: 3px;
}
#sidebar div.side-menu .menu-body ul.sidenav li ul.nested-dropdown li {
  min-height: 24px;
  color: #2698dd;
}
#sidebar div.side-menu .menu-body ul.sidenav li ul.nested-dropdown li a {
  color: #3ca2e0;
  display: block;
  padding: 8px;
  height: auto;
}
#sidebar div.side-menu .menu-body ul.sidenav li ul.nested-dropdown li a:hover,
#sidebar div.side-menu .menu-body ul.sidenav li ul.nested-dropdown li a:focus,
#sidebar div.side-menu .menu-body ul.sidenav li ul.nested-dropdown li a:active {
  color: #2698dd;
  background: #f8f8f8;
  text-decoration: none;
}
#sidebar div.side-menu .menu-body ul.sidenav li ul.nested-dropdown li.sidemenu-header {
  text-transform: uppercase;
  min-height: 38px;
  padding-top: 8px;
  padding-left: 8px;
  border-bottom: 1px solid #eee;
  font-size: 12px;
  font-weight: bold;
  line-height: 21px;
  color: #2698dd;
}
#sidebar div.side-menu .menu-body ul.sidenav li ul.nested-dropdown li.sidemenu-header a {
  color: #2698dd;
}
#sidebar div.side-menu .menu-body ul.sidenav li:hover ul.nested-dropdown {
  display: block;
}
* ul {
  list-style-type: none;
}
* a:hover {
  text-decoration: none;
}
.topnav-navbar {
  background: none;
  border-radius: 0;
  border: none;
  border-bottom: solid 1px rgba(0, 0, 0, 0.05);
}
.topnav-navbar .collapse.navbar-collapse {
  background-color: #fff;
}
.topnav-navbar .navbar-header {
  width: 235px;
  background: #3ca2e0;
}
.topnav-navbar .navbar-header .navbar-brand {
  color: #d6ebf8;
  display: block;
}
.topnav-navbar .navbar-header .navbar-brand:hover {
  color: #ecf6fc;
}
.topnav-navbar ul.navbar-nav li {
  transition: all 0.2s ease-in-out;
}
.topnav-navbar ul.navbar-nav li a .glyphicon {
  font-size: 16px;
}
.topnav-navbar ul.navbar-nav li a .badge {
  font-size: 9px;
  position: absolute;
  top: 6px;
  right: 5px;
  padding: 4px;
  min-width: 16px;
  font-weight: 400;
  line-height: 1;
}
.topnav-navbar ul.navbar-nav li a .badge-green {
  background: #7BB77C;
}
.topnav-navbar ul.navbar-nav li a .badge-red {
  background: #de6764;
}
.topnav-navbar ul.navbar-nav li a:focus,
.topnav-navbar ul.navbar-nav li a:hover,
.topnav-navbar ul.navbar-nav li a:active,
.topnav-navbar ul.navbar-nav li a.active {
  background: #3ca2e0;
  color: #ecf6fc;
}
.topnav-navbar ul.navbar-nav li a:focus .hidden-message,
.topnav-navbar ul.navbar-nav li a:hover .hidden-message,
.topnav-navbar ul.navbar-nav li a:active .hidden-message,
.topnav-navbar ul.navbar-nav li a.active .hidden-message {
  display: inline-block;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu {
  padding: 0;
  border: none;
  border-top: 1px solid #eee;
  transition: all 0.1s linear;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu li.messages-top {
  padding-left: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  border: 1px solid #eee;
  border-top: none;
  font-size: 12px;
  opacity: 0.7;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu li.dropdown-messages {
  width: 260px;
  height: 53px;
  border: 1px solid #eee;
  border-top: none;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu li.dropdown-messages a {
  width: 100%;
  height: 53px;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu li.dropdown-messages a .message-sender {
  padding-top: 5px;
  font-weight: 600;
  font-size: 13px;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu li.dropdown-messages a .message-header {
  font-size: 11px;
  padding-top: 3px;
  opacity: .7;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu li.notification-header {
  padding-left: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  border: 1px solid #eee;
  border-top: none;
  font-size: 12px;
  opacity: 0.7;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu li.dropdown-notifications {
  width: 260px;
  height: 37px;
  border: 1px solid #eee;
  border-top: none;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu li.dropdown-notifications a {
  width: 100%;
  height: 37px;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu li.dropdown-notifications a .notification {
  padding-top: 5px;
  font-size: 12px;
}
.topnav-navbar ul.navbar-nav li ul.dropdown-menu li.dropdown-notifications a .notification .fa {
  margin-right: 20px;
  opacity: 0.8;
}
.topnav-navbar ul.navbar-nav li.open a:focus,
.topnav-navbar ul.navbar-nav li.open a:hover,
.topnav-navbar ul.navbar-nav li.open a:active,
.topnav-navbar ul.navbar-nav li.open a.active {
  background: #3ca2e0;
  color: #ecf6fc;
}
.topnav-navbar ul.navbar-nav li.open a:focus .hidden-message,
.topnav-navbar ul.navbar-nav li.open a:hover .hidden-message,
.topnav-navbar ul.navbar-nav li.open a:active .hidden-message,
.topnav-navbar ul.navbar-nav li.open a.active .hidden-message {
  display: inline-block;
}
.topnav-navbar .navbar-form {
  padding-left: 15px;
}
.topnav-navbar .navbar-form .glyphicon {
  opacity: 0.7;
}
.topnav-navbar .navbar-form .form-control {
  width: 40px;
  border-radius: 0;
  padding: 2px 22px;
  border: none;
  margin-left: -20px;
  border-bottom: 1px solid #68b7e7;
  background: inherit;
  box-shadow: none;
  opacity: 0.7;
  transition: all .2s linear;
}
.topnav-navbar .navbar-form .form-control:focus {
  width: 200px;
  opacity: 1;
}
.topnav-navbar ul.lang li {
  height: 35px;
}
.topnav-navbar ul.lang li a {
  height: 35px;
  padding-top: 9px;
}
.topnav-navbar ul.pull-right li.dropdown.admin-dropdown a,
.topnav-navbar ul.pull-right li.dropdown.color-picker a {
  padding-top: 10px;
  padding-bottom: 10px;
}
.topnav-navbar ul.pull-right li.dropdown.admin-dropdown a img.topnav-img,
.topnav-navbar ul.pull-right li.dropdown.color-picker a img.topnav-img {
  width: 30px;
  margin-right: 5px;
}
.topnav-navbar ul.pull-right ul.dropdown-menu li {
  border: 1px solid #eee;
  border-top: none;
}
.topnav-navbar ul.pull-right.navbar-nav {
  margin-right: 10px;
}
.topnav-navbar li.color-picker i {
  font-size: 24px;
  line-height: 30px;
}
.topnav-navbar li.color-picker table.color-swatches-table {
  margin-bottom: 0;
}
.topnav-navbar li.color-picker table.color-swatches-table a {
  padding: 0 !important;
  display: block;
}
.topnav-navbar li.color-picker table.color-swatches-table a:hover,
.topnav-navbar li.color-picker table.color-swatches-table a:focus {
  color: inherit;
  background: inherit;
}
.topnav-navbar li.color-picker table.color-swatches-table a .blue-base {
  color: #3CA2E0;
}
.topnav-navbar li.color-picker table.color-swatches-table a .red-base {
  color: #D24D57;
}
.topnav-navbar li.color-picker table.color-swatches-table a .green-base {
  color: #27ae60;
}
.topnav-navbar li.color-picker table.color-swatches-table a .purple-base {
  color: #957BBD;
}
.topnav-navbar li.color-picker table.color-swatches-table a .midnight-blue-base {
  color: #2c3e50;
}
.topnav-navbar li.color-picker table.color-swatches-table a .lynch-base {
  color: #6C7A89;
}
.topnav-navbar li.color-picker table.color-swatches-table td.colorr {
  border: 1px solid #eee;
}
.topnav-navbar li.color-picker ul.dropdown-menu {
  border-top: none !important;
}
.ureveal {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  overflow: hidden;
}
.hidd {
  display: none;
}
@media only screen and (max-width: 856px) {
  .buy-button {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .topnav-navbar {
    background: #3ca2e0;
  }
  ul.hidd {
    display: block;
    position: absolute;
    right: 0;
    top: -6px;
    z-index: 3;
  }
  ul.hidd li.dropdown a {
    padding-bottom: 8px !important;
  }
  .topnav-navbar ul.pull-right li.dropdown.admin-dropdown a img.topnav-img {
    margin-right: 0;
  }
  .navbar-nav .open .dropdown-menu {
    position: absolute;
    right: 0;
    left: auto;
  }
  .topnav-navbar .navbar-header {
    width: 100%;
  }
  .topnav-navbar ul.navbar-nav li ul.dropdown-menu {
    background-color: #fff;
  }
}
@media only screen and (min-width: 768px) and (max-width: 1024px) {
  .navbar-form .form-control {
    max-width: 120px;
  }
}
.m-t {
  margin-top: 15px;
}
.padder {
  padding: 15px;
}
.t-p {
  padding-top: 15px;
}
.m-l {
  margin-left: 15px;
}
.no-margin {
  margin: 0;
}
.input-underline {
  background: none;
  border: none;
  box-shadow: none;
  border-bottom: 2px solid rgba(255, 255, 255, 0.4);
  color: #FFF;
  border-radius: 0;
}
.input-underline::-moz-placeholder {
  color: rgba(255, 255, 255, 0.7);
}
.input-underline:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}
.input-underline::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
}
.input-underline:focus {
  border-bottom: 2px solid #ffffff;
  box-shadow: none;
}
.underline {
  background: none !important;
  background-image: none;
  border: 1px solid #c8c7cc;
  border-top: none;
  border-left: none;
  border-right: none;
  border-radius: 0 0 0 0 !important;
  color: #5b5b60;
  font-family: inherit;
  font-size: 14px;
  line-height: 1.2;
  padding: 5px 4px;
  transition-duration: 0.1s;
  box-shadow: none !important;
  transition: border 300ms ease-out;
}
.underline:focus {
  border-color: #3ca2e0;
}
div.calendar-container .fc * {
  border: none !important;
}
div.calendar-container .fc-basic-view .fc-body .fc-row {
  min-height: 20px;
}
div.calendar-container .fc-day-grid-container {
  min-height: 130px;
  overflow: hidden;
}
div.calendar-container .fc-ltr {
  font-size: 11px !important;
}
div.calendar-container .fc-today {
  background: #2089c9;
}
div.calendar-container .fc-toolbar {
  margin-left: -12px;
  width: 189px !important;
  max-height: 27px !important;
  background: #2089c9;
}
div.calendar-container .fc-header-title h2 {
  font-size: 13px !important;
  font-weight: 600;
  margin-bottom: 0 !important;
  text-transform: uppercase;
  padding-left: 6px;
  padding-top: 6px;
  padding-bottom: 6px;
}
div.calendar-container .fc-today-button {
  display: none;
}
div.calendar-container .fc-button-group {
  font-size: 9px !important;
}
div.calendar-container .fc-button-group .fc-button {
  background: inherit;
  color: inherit;
  box-shadow: none;
  padding-top: 6px;
  padding-bottom: 6px;
}
div.calendar-container .fc-button-group .fc-prev-button {
  padding-right: 0;
}
div.calendar-container .fc-button-group .fc-next-button {
  padding-left: 0;
}
div.calendar-container .fc-content {
  margin-top: 4px;
}
div.calendar-container .fc-day-header {
  font-size: 10px;
}
.fc-state-default:focus {
  outline: 0;
}
a.stat {
  background-color: #fff;
  border: solid 1px rgba(0, 0, 0, 0.1);
  display: table !important;
  width: 100%;
  padding: 10px;
  height: 89px;
  margin-bottom: 10px;
  text-align: left;
}
a.stat .stat-icon,
a.stat .stat-label {
  display: table-cell;
  vertical-align: middle;
}
a.stat .stat-icon {
  margin-top: 5px;
  width: 75px;
}
a.stat .stat-label .label-header {
  font-size: 22px;
}
a.stat .stat-detail {
  margin-top: 10px;
  font-size: 14px;
  color: #666;
}
a.stat .stat-detail i {
  margin-top: 5px;
}
.progress-sm.progress {
  height: 5px;
  margin-bottom: 0;
}
.btn-rounded {
  border-radius: 30px;
}
.btn-bordered {
  border-radius: 30px;
  background: #FFFFFF;
  border-width: 2px;
}
.btn-bordered:hover {
  color: #ffffff;
}
.btn-bordered.btn-primary {
  border-color: #3ca2e0;
  color: #3ca2e0;
}
.btn-bordered.btn-primary:hover {
  background: #3ca2e0;
  color: #ffffff;
}
.btn-bordered.btn-info {
  border-color: #5bc0de;
  color: #5bc0de;
}
.btn-bordered.btn-info:hover {
  background: #5bc0de;
  color: #ffffff;
}
.btn-bordered.btn-warning {
  border-color: #f0ad4e;
  color: #f0ad4e;
}
.btn-bordered.btn-warning:hover {
  background: #f0ad4e;
  color: #ffffff;
}
.btn-bordered.btn-success {
  border-color: #5cb85c;
  color: #5cb85c;
}
.btn-bordered.btn-success:hover {
  background: #5cb85c;
  color: #ffffff;
}
.btn-bordered.btn-danger {
  border-color: #de6764;
  color: #de6764;
}
.btn-bordered.btn-danger:hover {
  background: #de6764;
  color: #ffffff;
}
.btn-bordered.disabled {
  color: #717171;
}
.text-success {
  color: #5cb85c;
}
.text-info {
  color: #5bc0de;
}
.text-warning {
  color: #f0ad4e;
}
.text-danger {
  color: #de6764;
}
.btn-circle {
  border-radius: 50%;
  width: 50px;
}
.btn-primary {
  border-color: #3ca2e0;
}
.btn-success {
  border-color: #5cb85c;
}
.btn-info {
  border-color: #5bc0de;
}
.btn-warning {
  border-color: #f0ad4e;
}
.btn-danger {
  border-color: #de6764;
}
.alert-primary {
  border-color: #3ca2e0;
}
.alert-success {
  border-color: #5cb85c;
}
.alert-info {
  border-color: #5bc0de;
}
.alert-warning {
  border-color: #f0ad4e;
}
.alert-danger {
  border-color: #de6764;
}
button.btn.btn-primary.btn-rounded.dropdown-toggle.haha {
  border-left: 1px solid #2698dd;
}
button.btn.btn-success.btn-rounded.dropdown-toggle.haha {
  border-left: 1px solid #449d44;
}
button.btn.btn-warning.btn-rounded.dropdown-toggle.haha {
  border-left: 1px solid #ec971f;
}
button.btn.btn-danger.btn-rounded.dropdown-toggle.haha {
  border-left: 1px solid #d53e3a;
}
button.btn.btn-primary.btn-bordered.dropdown-toggle.haha {
  border-left: 1px solid #3ca2e0;
}
button.btn.btn-success.btn-bordered.dropdown-toggle.haha {
  border-left: 1px solid #5cb85c;
}
button.btn.btn-info.btn-bordered.dropdown-toggle.haha {
  border-left: 1px solid #5bc0de;
}
button.btn.btn-warning.btn-bordered.dropdown-toggle.haha {
  border-left: 1px solid #f0ad4e;
}
button.btn.btn-danger.btn-bordered.dropdown-toggle.haha {
  border-left: 1px solid #de6764;
}
button.btn.btn-default.btn-bordered.dropdown-toggle.haha {
  border-left: 1px solid #ccc;
}
button.btn.btn-primary.dropdown-toggle.haha {
  border-left: 1px solid #2698dd;
}
button.btn.btn-success.dropdown-toggle.haha {
  border-left: 1px solid #449d44;
}
button.btn.btn-warning.dropdown-toggle.haha {
  border-left: 1px solid #ec971f;
}
button.btn.btn-danger.dropdown-toggle.haha {
  border-left: 1px solid #d53e3a;
}
.btn-outline:focus,
.btn-bordered:focus {
  color: inherit;
  background: inherit;
}
#inputSuccess1 {
  border-color: #5cb85c;
}
#inputWarning1 {
  border-color: #f0ad4e;
}
#inputError1 {
  border-color: #de6764;
}
label.control-label.col-sm-2.sucesss {
  color: #5cb85c;
}
label.control-label.col-sm-2.warnings {
  color: #f0ad4e;
}
label.control-label.col-sm-2.errors {
  color: #de6764;
}
div.carousel-text {
  height: 80px;
  padding: 20px;
  padding-top: 0;
  text-align: center;
}
div.carousel-text .carousel-control {
  background: none;
  display: none;
}
div.carousel-text .carousel-indicators {
  bottom: -20px;
}
div.carousel-text .carousel-indicators li {
  width: 10px;
  height: 10px;
  border: 1px solid #CECECE;
  background: #CECECE;
}
div.carousel-text .carousel-indicators li.active {
  border: 1px solid #3ca2e0;
  background: #3ca2e0;
  width: 11px;
  height: 11px;
}
div.carousel-photo .carousel-indicators {
  display: none;
}
div.carousel-photo .carousel-control {
  background: none;
}
.tool hr {
  margin-top: 12px;
  margin-bottom: 12px;
}
.tool .btn-default {
  margin: 3px;
}
growl-notifications {
  position: fixed;
  top: 60px;
  right: 15px;
  z-index: 1000;
}
growl-notifications growl-notification {
  background: rgba(0, 0, 0, 0.6);
  color: white;
  padding: 15px 30px;
  width: 250px;
  display: block;
  border-radius: 5px;
  margin-top: 15px;
  border: 1px solid rgba(0, 0, 0, 0.8);
}
growl-notifications growl-notification .close {
  color: #fff;
  font-size: 16px;
  margin-right: -10px;
  margin-top: 2px;
}
growl-notifications growl-notification.growl-primary {
  color: #FFF;
  background: #68b7e7;
  border: 1px solid #2698dd;
}
growl-notifications growl-notification.growl-error {
  color: #FFF;
  background: #e7908e;
  border: 1px solid #da524f;
}
growl-notifications growl-notification.growl-info {
  color: #FFF;
  background: #85d0e7;
  border: 1px solid #46b8da;
}
growl-notifications growl-notification.growl-warning {
  color: #FFF;
  background: #f4c37d;
  border: 1px solid #eea236;
}
.onoffswitch {
  position: relative;
  width: 55px;
  display: inline-block;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}
.onoffswitch-checkbox {
  visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
  width: 55px;
  height: 28px;
}
.onoffswitch-label {
  display: block;
  overflow: hidden;
  cursor: pointer;
  border-radius: 20px;
}
.onoffswitch-inner {
  display: block;
  width: 200%;
  margin-left: -100%;
  transition: all 0.2s ease-in-out;
}
.onoffswitch-inner:before,
.onoffswitch-inner:after {
  display: block;
  float: left;
  width: 50%;
  height: 28px;
  padding: 0;
  line-height: 28px;
  font-size: 14px;
  color: white;
  box-sizing: border-box;
}
.onoffswitch-inner:before {
  content: "";
  background-color: #5cb853;
  color: #FFFFFF;
}
.onoffswitch-inner:after {
  content: "";
  background-color: #ccc;
  color: #444;
  text-align: right;
}
.onoffswitch-switch {
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1);
  display: block;
  width: 26px;
  height: 26px;
  margin: 0 1px 0 0;
  background: #FFFFFF;
  border-radius: 26px;
  position: absolute;
  top: 1px;
  bottom: 0;
  right: 26px;
  transition: all 0.2s ease-in-out;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
  margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
  right: 0px;
}
.todo-container {
  position: relative;
  height: 350px;
}
.todo-container .todo-header {
  position: relative;
}
.todo-container .todo-header h4 {
  color: #FFFFFF;
  font-weight: 600;
  font-size: 18px;
  margin: 0;
}
.todo-container .todo-header h4 .fa {
  font-size: 24px;
  position: relative;
  top: 3px;
  right: 2px;
}
.todo-container .todo-body .todo-list-wrap {
  height: 215px;
  overflow: hidden;
  position: relative;
  margin-bottom: 15px;
}
.todo-container .todo-body .todo-list {
  color: white;
  padding: 0;
  margin: 0;
  overflow-x: hidden;
}
.todo-container .todo-body .todo-list li {
  padding-top: 8px;
  padding-bottom: 8px;
  font-size: 15px;
}
.todo-container .todo-body .todo-list li .checkbox1 input:checked + span:before {
  background: inherit;
  border-color: inherit;
  content: "\2713";
}
.todo-container .todo-body .todo-list li .checkbox1 {
  padding-right: 7px;
}
.todo-container .todo-body .todo-list li .done-true {
  text-decoration: line-through;
}
.todo-container .todo-body .todo-from-bottom .form-control {
  border-color: white;
}
.todo-container .todo-body .todo-from-bottom .btn {
  background: inherit;
  color: white;
  border-color: white;
}
.todo-container .todo-body .checkbox1 span:before {
  border-color: #fff;
}
.todo-container.panel-danger .panel-heading {
  background-color: #db5b57;
}
.jvectormap-container {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
}
.jvectormap-tip {
  position: absolute;
  display: none;
  border: solid 1px #CDCDCD;
  border-radius: 3px;
  background: #292929;
  color: white;
  font-family: sans-serif, Verdana;
  font-size: smaller;
  padding: 3px;
}
.jvectormap-zoomin,
.jvectormap-zoomout,
.jvectormap-goback {
  position: absolute;
  left: 0;
  border-radius: 3px;
  background: #3ca2e0;
  padding: 3px;
  color: white;
  cursor: pointer;
  line-height: 10px;
  text-align: center;
  box-sizing: content-box;
}
.jvectormap-zoomin,
.jvectormap-zoomout {
  width: 10px;
  height: 10px;
}
.jvectormap-zoomin {
  top: 0;
}
.jvectormap-zoomout {
  top: 20px;
}
.jvectormap-goback {
  bottom: 10px;
  z-index: 1000;
  padding: 6px;
}
.jvectormap-spinner {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: center no-repeat url(data:image/gif;base64,R0lGODlhIAAgAPMAAP///wAAAMbGxoSEhLa2tpqamjY2NlZWVtjY2OTk5Ly8vB4eHgQEBAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAIAAgAAAE5xDISWlhperN52JLhSSdRgwVo1ICQZRUsiwHpTJT4iowNS8vyW2icCF6k8HMMBkCEDskxTBDAZwuAkkqIfxIQyhBQBFvAQSDITM5VDW6XNE4KagNh6Bgwe60smQUB3d4Rz1ZBApnFASDd0hihh12BkE9kjAJVlycXIg7CQIFA6SlnJ87paqbSKiKoqusnbMdmDC2tXQlkUhziYtyWTxIfy6BE8WJt5YJvpJivxNaGmLHT0VnOgSYf0dZXS7APdpB309RnHOG5gDqXGLDaC457D1zZ/V/nmOM82XiHRLYKhKP1oZmADdEAAAh+QQJCgAAACwAAAAAIAAgAAAE6hDISWlZpOrNp1lGNRSdRpDUolIGw5RUYhhHukqFu8DsrEyqnWThGvAmhVlteBvojpTDDBUEIFwMFBRAmBkSgOrBFZogCASwBDEY/CZSg7GSE0gSCjQBMVG023xWBhklAnoEdhQEfyNqMIcKjhRsjEdnezB+A4k8gTwJhFuiW4dokXiloUepBAp5qaKpp6+Ho7aWW54wl7obvEe0kRuoplCGepwSx2jJvqHEmGt6whJpGpfJCHmOoNHKaHx61WiSR92E4lbFoq+B6QDtuetcaBPnW6+O7wDHpIiK9SaVK5GgV543tzjgGcghAgAh+QQJCgAAACwAAAAAIAAgAAAE7hDISSkxpOrN5zFHNWRdhSiVoVLHspRUMoyUakyEe8PTPCATW9A14E0UvuAKMNAZKYUZCiBMuBakSQKG8G2FzUWox2AUtAQFcBKlVQoLgQReZhQlCIJesQXI5B0CBnUMOxMCenoCfTCEWBsJColTMANldx15BGs8B5wlCZ9Po6OJkwmRpnqkqnuSrayqfKmqpLajoiW5HJq7FL1Gr2mMMcKUMIiJgIemy7xZtJsTmsM4xHiKv5KMCXqfyUCJEonXPN2rAOIAmsfB3uPoAK++G+w48edZPK+M6hLJpQg484enXIdQFSS1u6UhksENEQAAIfkECQoAAAAsAAAAACAAIAAABOcQyEmpGKLqzWcZRVUQnZYg1aBSh2GUVEIQ2aQOE+G+cD4ntpWkZQj1JIiZIogDFFyHI0UxQwFugMSOFIPJftfVAEoZLBbcLEFhlQiqGp1Vd140AUklUN3eCA51C1EWMzMCezCBBmkxVIVHBWd3HHl9JQOIJSdSnJ0TDKChCwUJjoWMPaGqDKannasMo6WnM562R5YluZRwur0wpgqZE7NKUm+FNRPIhjBJxKZteWuIBMN4zRMIVIhffcgojwCF117i4nlLnY5ztRLsnOk+aV+oJY7V7m76PdkS4trKcdg0Zc0tTcKkRAAAIfkECQoAAAAsAAAAACAAIAAABO4QyEkpKqjqzScpRaVkXZWQEximw1BSCUEIlDohrft6cpKCk5xid5MNJTaAIkekKGQkWyKHkvhKsR7ARmitkAYDYRIbUQRQjWBwJRzChi9CRlBcY1UN4g0/VNB0AlcvcAYHRyZPdEQFYV8ccwR5HWxEJ02YmRMLnJ1xCYp0Y5idpQuhopmmC2KgojKasUQDk5BNAwwMOh2RtRq5uQuPZKGIJQIGwAwGf6I0JXMpC8C7kXWDBINFMxS4DKMAWVWAGYsAdNqW5uaRxkSKJOZKaU3tPOBZ4DuK2LATgJhkPJMgTwKCdFjyPHEnKxFCDhEAACH5BAkKAAAALAAAAAAgACAAAATzEMhJaVKp6s2nIkolIJ2WkBShpkVRWqqQrhLSEu9MZJKK9y1ZrqYK9WiClmvoUaF8gIQSNeF1Er4MNFn4SRSDARWroAIETg1iVwuHjYB1kYc1mwruwXKC9gmsJXliGxc+XiUCby9ydh1sOSdMkpMTBpaXBzsfhoc5l58Gm5yToAaZhaOUqjkDgCWNHAULCwOLaTmzswadEqggQwgHuQsHIoZCHQMMQgQGubVEcxOPFAcMDAYUA85eWARmfSRQCdcMe0zeP1AAygwLlJtPNAAL19DARdPzBOWSm1brJBi45soRAWQAAkrQIykShQ9wVhHCwCQCACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiRMDjI0Fd30/iI2UA5GSS5UDj2l6NoqgOgN4gksEBgYFf0FDqKgHnyZ9OX8HrgYHdHpcHQULXAS2qKpENRg7eAMLC7kTBaixUYFkKAzWAAnLC7FLVxLWDBLKCwaKTULgEwbLA4hJtOkSBNqITT3xEgfLpBtzE/jiuL04RGEBgwWhShRgQExHBAAh+QQJCgAAACwAAAAAIAAgAAAE7xDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfZiCqGk5dTESJeaOAlClzsJsqwiJwiqnFrb2nS9kmIcgEsjQydLiIlHehhpejaIjzh9eomSjZR+ipslWIRLAgMDOR2DOqKogTB9pCUJBagDBXR6XB0EBkIIsaRsGGMMAxoDBgYHTKJiUYEGDAzHC9EACcUGkIgFzgwZ0QsSBcXHiQvOwgDdEwfFs0sDzt4S6BK4xYjkDOzn0unFeBzOBijIm1Dgmg5YFQwsCMjp1oJ8LyIAACH5BAkKAAAALAAAAAAgACAAAATwEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GGl6NoiPOH16iZKNlH6KmyWFOggHhEEvAwwMA0N9GBsEC6amhnVcEwavDAazGwIDaH1ipaYLBUTCGgQDA8NdHz0FpqgTBwsLqAbWAAnIA4FWKdMLGdYGEgraigbT0OITBcg5QwPT4xLrROZL6AuQAPUS7bxLpoWidY0JtxLHKhwwMJBTHgPKdEQAACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GAULDJCRiXo1CpGXDJOUjY+Yip9DhToJA4RBLwMLCwVDfRgbBAaqqoZ1XBMHswsHtxtFaH1iqaoGNgAIxRpbFAgfPQSqpbgGBqUD1wBXeCYp1AYZ19JJOYgH1KwA4UBvQwXUBxPqVD9L3sbp2BNk2xvvFPJd+MFCN6HAAIKgNggY0KtEBAAh+QQJCgAAACwAAAAAIAAgAAAE6BDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfYIDMaAFdTESJeaEDAIMxYFqrOUaNW4E4ObYcCXaiBVEgULe0NJaxxtYksjh2NLkZISgDgJhHthkpU4mW6blRiYmZOlh4JWkDqILwUGBnE6TYEbCgevr0N1gH4At7gHiRpFaLNrrq8HNgAJA70AWxQIH1+vsYMDAzZQPC9VCNkDWUhGkuE5PxJNwiUK4UfLzOlD4WvzAHaoG9nxPi5d+jYUqfAhhykOFwJWiAAAIfkECQoAAAAsAAAAACAAIAAABPAQyElpUqnqzaciSoVkXVUMFaFSwlpOCcMYlErAavhOMnNLNo8KsZsMZItJEIDIFSkLGQoQTNhIsFehRww2CQLKF0tYGKYSg+ygsZIuNqJksKgbfgIGepNo2cIUB3V1B3IvNiBYNQaDSTtfhhx0CwVPI0UJe0+bm4g5VgcGoqOcnjmjqDSdnhgEoamcsZuXO1aWQy8KAwOAuTYYGwi7w5h+Kr0SJ8MFihpNbx+4Erq7BYBuzsdiH1jCAzoSfl0rVirNbRXlBBlLX+BP0XJLAPGzTkAuAOqb0WT5AH7OcdCm5B8TgRwSRKIHQtaLCwg1RAAAOwAAAAAAAAAAAA==);
}
.jvectormap-legend-title {
  font-weight: bold;
  font-size: 14px;
  text-align: center;
}
.jvectormap-legend-cnt {
  position: absolute;
}
.jvectormap-legend-cnt-h {
  bottom: 0;
  right: 0;
}
.jvectormap-legend-cnt-v {
  top: 0;
  right: 0;
}
.jvectormap-legend {
  background: black;
  color: white;
  border-radius: 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend {
  float: left;
  margin: 0 10px 10px 0;
  padding: 3px 3px 1px 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend .jvectormap-legend-tick {
  float: left;
}
.jvectormap-legend-cnt-v .jvectormap-legend {
  margin: 10px 10px 0 0;
  padding: 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick {
  width: 40px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
  height: 15px;
}
.jvectormap-legend-cnt-v .jvectormap-legend-tick-sample {
  height: 20px;
  width: 20px;
  display: inline-block;
  vertical-align: middle;
}
.jvectormap-legend-tick-text {
  font-size: 12px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick-text {
  text-align: center;
}
.jvectormap-legend-cnt-v .jvectormap-legend-tick-text {
  display: inline-block;
  vertical-align: middle;
  line-height: 20px;
  padding-left: 3px;
}
*,
*:after,
*::before {
  box-sizing: border-box;
}
@font-face {
  font-weight: normal;
  font-style: normal;
  font-family: 'icomoon';
  src: url('../fonts/icomoon.eot');
  src: url('../fonts/icomoon.eot?#iefix') format('embedded-opentype'), url('../fonts/icomoon.ttf') format('truetype'), url('../fonts/icomoon.woff') format('woff'), url('../fonts/icomoon.svg#icomoon') format('svg');
}
/* General styles for all types of buttons */
.progress-button {
  position: relative;
  display: inline-block;
  padding: 0 40px;
  outline: none;
  border: none;
  background: #3ca2e0;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 1em;
  line-height: 3;
}
.progress-button[disabled],
.progress-button[disabled].state-loading {
  cursor: default;
}
.progress-button .content {
  position: relative;
  display: block;
}
.progress-button .content::before,
.progress-button .content::after {
  position: absolute;
  right: 10px;
  color: #1f83c0;
  font-family: "icomoon";
  opacity: 0;
  transition: opacity 0.3s 0.3s;
}
.progress-button .content::before {
  content: "\e600";
  /* Checkmark for success */
}
.progress-button .content::after {
  content: "\e601";
  /* Cross for error */
}
.progress-button.state-success .content::before,
.progress-button.state-error .content::after {
  opacity: 1;
}
.notransition {
  transition: none !important;
}
.progress-button .progress {
  background: #2698dd;
}
.progress-button .progress-inner {
  position: absolute;
  left: 0;
  background: #1f83c0;
}
.progress-button[data-horizontal] .progress-inner {
  top: 0;
  width: 0;
  height: 100%;
  transition: width 0.3s, opacity 0.3s;
}
.progress-button[data-vertical] .progress-inner {
  bottom: 0;
  width: 100%;
  height: 0;
  transition: height 0.3s, opacity 0.3s;
}
/* Necessary 3d styles for buttons with perspective */
.progress-button[data-perspective] {
  position: relative;
  display: inline-block;
  padding: 0;
  background: transparent;
  -webkit-perspective: 900px;
  perspective: 900px;
}
.progress-button[data-perspective] .content {
  padding: 0 40px;
  background: #3ca2e0;
}
.progress-button[data-perspective] .progress-wrap {
  display: block;
  transition: -webkit-transform 0.2s;
  transition: transform 0.2s;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.progress-button[data-perspective] .content,
.progress-button[data-perspective] .progress {
  outline: 1px solid rgba(0, 0, 0, 0);
  /* Smoothen jagged edges in FF */
}
/* Individual styles */
/* Choose the effect(s) you want, delete the rest */
/* Fill horizontal */
/* ====================== */
.progress-button[data-style="fill"][data-horizontal] {
  overflow: hidden;
}
.progress-button[data-style="fill"][data-horizontal] .content {
  z-index: 10;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
}
.progress-button[data-style="fill"][data-horizontal] .content::before,
.progress-button[data-style="fill"][data-horizontal] .content::after {
  top: 100%;
  right: auto;
  left: 50%;
  transition: opacity 0.3s;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}
.progress-button[data-style="fill"][data-horizontal].state-success .content,
.progress-button[data-style="fill"][data-horizontal].state-error .content {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
}
/* Fill vertical */
/* ====================== */
.progress-button[data-style="fill"][data-vertical] {
  overflow: hidden;
}
.progress-button[data-style="fill"][data-vertical] .content {
  z-index: 10;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
}
.progress-button[data-style="fill"][data-vertical] .content::before,
.progress-button[data-style="fill"][data-vertical] .content::after {
  top: 100%;
  right: auto;
  left: 50%;
  transition: opacity 0.3s;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}
.progress-button[data-style="fill"][data-vertical].state-success .content,
.progress-button[data-style="fill"][data-vertical].state-error .content {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
}
/* Shrink horizontal */
/* ====================== */
.progress-button[data-style="shrink"] {
  /* common for horizontal and vertical */
  overflow: hidden;
  transition: -webkit-transform 0.2s;
  transition: transform 0.2s;
}
.progress-button[data-style="shrink"][data-horizontal] .content {
  transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, transform 0.3s;
}
.progress-button[data-style="shrink"][data-horizontal] .content::before,
.progress-button[data-style="shrink"][data-horizontal] .content::after {
  top: 100%;
  right: auto;
  left: 50%;
  transition: opacity 0.3s;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}
.progress-button[data-style="shrink"][data-horizontal].state-loading {
  -webkit-transform: scaleY(0.3);
  transform: scaleY(0.3);
}
.progress-button[data-style="shrink"][data-horizontal].state-loading .content {
  opacity: 0;
}
.progress-button[data-style="shrink"][data-horizontal].state-success .content,
.progress-button[data-style="shrink"][data-horizontal].state-error .content {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
}
/* Shrink vertical */
/* ====================== */
.progress-button[data-style="shrink"][data-vertical] .content {
  transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: opacity 0.3s, transform 0.3s;
}
.progress-button[data-style="shrink"][data-vertical] .content::before,
.progress-button[data-style="shrink"][data-vertical] .content::after {
  top: 100%;
  right: auto;
  left: 50%;
  transition: opacity 0.3s;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}
.progress-button[data-style="shrink"][data-vertical].state-loading {
  -webkit-transform: scaleX(0.1);
  transform: scaleX(0.1);
}
.progress-button[data-style="shrink"][data-vertical].state-loading .content {
  opacity: 0;
}
.progress-button[data-style="shrink"][data-vertical].state-success .content,
.progress-button[data-style="shrink"][data-vertical].state-error .content {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
}
/* Rotate bottom 3d */
/* ====================== */
.progress-button[data-style="rotate-angle-bottom"] .progress {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 20px;
  box-shadow: 0 -1px 0 #2698dd;
  /* fix the blurriness that causes a gap */
  -webkit-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
}
.progress-button[data-style="rotate-angle-bottom"].state-loading .progress-wrap {
  -webkit-transform: rotateX(45deg);
  transform: rotateX(45deg);
}
/* Rotate top 3d */
/* ====================== */
.progress-button[data-style="rotate-angle-top"] .progress {
  position: absolute;
  bottom: 100%;
  left: 0;
  width: 100%;
  height: 20px;
  box-shadow: 0 1px 0 #2698dd;
  /* fix the blurriness that causes a gap */
  -webkit-transform: rotateX(90deg);
  transform: rotateX(90deg);
  -webkit-transform-origin: 50% 100%;
  transform-origin: 50% 100%;
}
.progress-button[data-style="rotate-angle-top"].state-loading .progress-wrap {
  -webkit-transform: rotateX(-45deg);
  transform: rotateX(-45deg);
}
/* Rotate left 3d */
/* ====================== */
.progress-button[data-style="rotate-angle-left"] .progress {
  position: absolute;
  top: 0;
  right: 100%;
  width: 20px;
  height: 100%;
  box-shadow: 1px 0 0 #2698dd;
  /* fix the blurriness that causes a gap */
  -webkit-transform: rotateY(-90deg);
  transform: rotateY(-90deg);
  -webkit-transform-origin: 100% 50%;
  transform-origin: 100% 50%;
}
.progress-button[data-style="rotate-angle-left"].state-loading .progress-wrap {
  -webkit-transform: rotateY(45deg);
  transform: rotateY(45deg);
}
/* Rotate right 3d */
/* ====================== */
.progress-button[data-style="rotate-angle-right"] .progress {
  position: absolute;
  top: 0;
  left: 100%;
  width: 20px;
  height: 100%;
  box-shadow: -1px 0 0 #2698dd;
  /* fix the blurriness that causes a gap */
  -webkit-transform: rotateY(90deg);
  transform: rotateY(90deg);
  -webkit-transform-origin: 0% 50%;
  transform-origin: 0% 50%;
}
.progress-button[data-style="rotate-angle-right"].state-loading .progress-wrap {
  -webkit-transform: rotateY(-45deg);
  transform: rotateY(-45deg);
}
/* Rotate side down 3d */
/* ====================== */
.progress-button[data-style="rotate-side-down"] .progress {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 20px;
  -webkit-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.progress-button[data-style="rotate-side-down"].state-loading .progress-wrap {
  -webkit-transform: rotateX(90deg) translateZ(10px);
  transform: rotateX(90deg) translateZ(10px);
}
/* Rotate side up 3d */
/* ====================== */
.progress-button[data-style="rotate-side-up"] .progress {
  position: absolute;
  bottom: 100%;
  left: 0;
  width: 100%;
  height: 20px;
  -webkit-transform: rotateX(90deg);
  transform: rotateX(90deg);
  -webkit-transform-origin: 50% 100%;
  transform-origin: 50% 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.progress-button[data-style="rotate-side-up"].state-loading .progress-wrap {
  -webkit-transform: rotateX(-90deg) translateZ(10px);
  transform: rotateX(-90deg) translateZ(10px);
}
/* Rotate side left 3d */
/* ====================== */
.progress-button[data-style="rotate-side-left"] .progress-wrap {
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
}
.progress-button[data-style="rotate-side-left"] .progress {
  position: absolute;
  top: 0;
  left: 0;
  width: 20px;
  height: 100%;
  -webkit-transform: rotateY(90deg);
  transform: rotateY(90deg);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
}
.progress-button[data-style="rotate-side-left"].state-loading .progress-wrap {
  -webkit-transform: translateX(50%) rotateY(90deg) translateZ(10px);
  transform: translateX(50%) rotateY(90deg) translateZ(10px);
}
/* Rotate side right 3d */
/* ====================== */
.progress-button[data-style="rotate-side-right"] .progress-wrap {
  -webkit-transform-origin: 100% 50%;
  transform-origin: 100% 50%;
}
.progress-button[data-style="rotate-side-right"] .progress {
  position: absolute;
  top: 0;
  left: 100%;
  width: 20px;
  height: 100%;
  -webkit-transform: rotateY(90deg);
  transform: rotateY(90deg);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
}
.progress-button[data-style="rotate-side-right"].state-loading .progress-wrap {
  -webkit-transform: translateX(-50%) rotateY(-90deg) translateZ(10px);
  transform: translateX(-50%) rotateY(-90deg) translateZ(10px);
}
/* Rotate back 3d */
/* ====================== */
.progress-button[data-style="rotate-back"] .progress-wrap {
  transition-timing-function: ease-out;
}
.progress-button[data-style="rotate-back"] .content {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.progress-button[data-style="rotate-back"] .progress {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 100%;
  -webkit-transform: rotateX(-180deg);
  transform: rotateX(-180deg);
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.progress-button[data-style="rotate-back"].state-loading .progress-wrap {
  -webkit-transform: rotateX(180deg) scaleX(0.6) scaleY(0.3);
  transform: rotateX(180deg) scaleX(0.6) scaleY(0.3);
}
/* flip open 3d */
/* ====================== */
.progress-button[data-style="flip-open"] .content {
  z-index: 10;
  transition: -webkit-transform 0.2s;
  transition: transform 0.2s;
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
}
.progress-button[data-style="flip-open"] .progress {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.progress-button[data-style="flip-open"].state-loading .content {
  -webkit-transform: rotateX(45deg);
  transform: rotateX(45deg);
}
/* slide down */
/* ====================== */
.progress-button[data-style="slide-down"] {
  padding: 0;
  overflow: visible;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.progress-button[data-style="slide-down"] .content {
  z-index: 10;
  padding: 0 40px;
  background: #3ca2e0;
}
.progress-button[data-style="slide-down"] .progress {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: -webkit-transform 0.2s;
  transition: transform 0.2s;
}
.progress-button[data-style="slide-down"].state-loading .progress {
  -webkit-transform: translateY(10px);
  transform: translateY(10px);
}
/* move-up */
/* ====================== */
.progress-button[data-style="move-up"] {
  padding: 0;
  overflow: visible;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.progress-button[data-style="move-up"] .content {
  z-index: 10;
  padding: 0 40px;
  background: #3ca2e0;
  transition: -webkit-transform 0.2s;
  transition: transform 0.2s;
}
.progress-button[data-style="move-up"] .progress {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.progress-button[data-style="move-up"].state-loading .content {
  -webkit-transform: translateY(-10px);
  transform: translateY(-10px);
}
/* top-line */
/* ====================== */
.progress-button[data-style="top-line"] .progress-inner {
  height: 3px;
}
.progress-button[data-style="top-line"] .content::before,
.progress-button[data-style="top-line"] .content::after {
  right: auto;
  left: 100%;
  margin-left: 15px;
}
/* lateral-lines */
/* ====================== */
.progress-button[data-style="lateral-lines"] .progress-inner {
  width: 100%;
  border-right: 3px solid #1f83c0;
  border-left: 3px solid #1f83c0;
  background: transparent;
}
.progress-button[data-style="lateral-lines"] .content::before,
.progress-button[data-style="lateral-lines"] .content::after {
  right: auto;
  left: 100%;
  margin-left: 15px;
}
.progress-login {
  text-transform: none;
  font-size: 18px;
  line-height: 45px;
  padding: 0 25px;
}
.progress-login .content::before,
.progress-login .content::after {
  color: white;
}
.checkbox1 {
  position: relative;
  padding-right: 15px;
  display: inline-block;
  vertical-align: middle;
  cursor: pointer;
}
.checkbox1 input[type=checkbox] {
  position: absolute;
  height: inherit;
  width: inherit;
  opacity: 0;
  left: 0;
}
.checkbox1 span {
  cursor: pointer;
  position: relative;
  margin-right: 5px;
  display: inline-block;
  height: 20px;
  width: 20px;
  vertical-align: middle;
}
.checkbox1 span:before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: " ";
  color: #fff;
  text-align: center;
  font-size: 22px;
  border: solid 2px #ddd;
  line-height: 16px;
}
.checkbox1 input:checked + span:before {
  background: #3ca2e0;
  border-color: #3ca2e0;
  content: "\2713";
}
.radio1 {
  position: relative;
  padding-right: 15px;
  display: inline-block;
  vertical-align: middle;
  cursor: pointer;
}
.radio1 input[type=radio] {
  position: absolute;
  height: inherit;
  width: inherit;
  opacity: 0;
  left: 0;
}
.radio1 span {
  cursor: pointer;
  position: relative;
  margin-right: 5px;
  display: inline-block;
  height: 20px;
  width: 20px;
  vertical-align: middle;
}
.radio1 span:before {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: " ";
  color: #fff;
  text-align: center;
  font-size: 22px;
  border: solid 2px #ddd;
  line-height: 16px;
  border-radius: 30px;
}
.radio1 input:checked + span:before {
  height: 20px;
  width: 20px;
  background: #3ca2e0;
  border-color: #ddd;
}
table.white tbody {
  color: white;
}
.btn-outline {
  background: none;
  border-color: transparent;
  font-weight: 400;
}
.btn-outline:hover {
  background: none;
  border-color: transparent;
}
.btn-outline.btn-white {
  box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.8) inset;
  color: rgba(255, 255, 255, 0.8);
}
.btn-outline.btn-white:hover {
  box-shadow: 0 0 0 2px #ffffff inset;
  color: #ffffff;
}
.btn-outline.btn-primary {
  box-shadow: 0 0 0 2px #2089c9 inset;
  color: #2089c9;
}
.btn-outline.btn-primary:hover {
  box-shadow: 0 0 0 2px #3ca2e0 inset;
  color: #3ca2e0;
}
.btn-outline.btn-success {
  box-shadow: 0 0 0 2px #449d44 inset;
  color: #449d44;
}
.btn-outline.btn-success:hover {
  box-shadow: 0 0 0 2px #5cb85c inset;
  color: #5cb85c;
}
.btn-outline.btn-info {
  box-shadow: 0 0 0 2px #31b0d5 inset;
  color: #31b0d5;
}
.btn-outline.btn-info:hover {
  box-shadow: 0 0 0 2px #5bc0de inset;
  color: #5bc0de;
}
.btn-outline.btn-warning {
  box-shadow: 0 0 0 2px #ec971f inset;
  color: #ec971f;
}
.btn-outline.btn-warning:hover {
  box-shadow: 0 0 0 2px #f0ad4e inset;
  color: #f0ad4e;
}
.btn-outline.btn-danger {
  box-shadow: 0 0 0 2px #d53e3a inset;
  color: #d53e3a;
}
.btn-outline.btn-danger:hover {
  box-shadow: 0 0 0 2px #de6764 inset;
  color: #de6764;
}
.btn-rounded {
  border-radius: 50px;
}
.user-avatar {
  /*	cursor: pointer;
	transition: all .2s ease-in-out;
	-webkit-transition: all .2s ease-in-out;
	&:hover {
		transform: scale(1.1);
		-webkit-transform: scale(1.1);
	}
*/
}
/* Have to set height explicity on ui-view 
to prevent collapsing during animation*/
/*.well[ui-view]{
 height: 65px; 
}*/
[ui-view] {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  -webkit-transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
}
.ui-view-container {
  position: relative;
}
[ui-view].ng-enter,
[ui-view].ng-leave {
  position: absolute;
  left: 0;
  right: 0;
  transition: all 0.5s ease-in-out;
}
[ui-view].ng-enter {
  opacity: 0;
  -webkit-transform: scale3d(0.94, 0.94, 0.94);
  transform: scale3d(0.94, 0.94, 0.94);
}
[ui-view].ng-enter-active {
  opacity: 1;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
}
[ui-view].ng-leave {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
[ui-view].ng-leave-active {
  opacity: 0;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.transition {
  transition: all 0.2s ease-in-out;
}
.transition-slow {
  transition: all 0.2s slow ease-in-out;
}
.browsehappy {
  margin: 0.2em 0;
  background: #ccc;
  color: #000;
  padding: 0.2em 0;
}
html,
body {
  overflow: none;
}
.rtl * {
  direction: rtl;
}
.rtl #body-container {
  margin-right: 235px;
  margin-left: 0;
}
.rtl .navbar-header {
  float: right;
}
.rtl .side-widgets {
  margin-left: 0 !important;
}
.rtl #sidebar {
  right: 0;
}
.rtl #sidebar div.side-menu .menu-body ul.sidenav li ul.nested-dropdown {
  left: 0;
  right: 45px;
}
.rtl .radio label,
.rtl .checkbox label {
  padding-left: 0;
  padding-right: 20px;
}
.rtl .checkbox input[type="checkbox"],
.rtl .radio input[type="radio"] {
  margin-left: 0;
  margin-right: -20px;
}
.rtl ul.navbar-right {
  padding-right: 0;
}
.rtl .navbar-form {
  margin-left: 10px;
}
.rtl ul.navbar-nav {
  padding-right: 0;
  margin-right: 0;
}
.rtl .topnav-navbar ul.pull-right.navbar-nav {
  margin-right: 0;
}
.rtl .fc-toolbar {
  padding-left: 10px;
}
* a:hover {
  cursor: pointer;
}
.animation {
  -webkit-animation: cssAnimation 0.45s 1 ease;
  -moz-animation: cssAnimation 0.45s 1 ease;
  -o-animation: cssAnimation 0.45s 1 ease;
}
@-webkit-keyframes cssAnimation {
  from {
    -webkit-transform: rotate(0deg) scale(0.89) skew(0deg) translate(0px);
    opacity: 0.3;
  }
  to {
    -webkit-transform: rotate(0deg) scale(1) skew(0deg) translate(0px);
    opacity: 1;
  }
}

/*# sourceMappingURL=app-blue.css.map */
	


</style>


<style type="text/css">
	
	.progress-button {
	position: relative;
	display: inline-block;
	padding: 0 60px;
	outline: none;
	border: none;
	background: #1d9650;
	color: #fff;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-size: 1em;
	line-height: 4;
}

.progress-button[disabled],
.progress-button[disabled].state-loading {
	cursor: default;
}

.progress-button .content {
	position: relative;
	display: block;
}

.progress-button .content::before,
.progress-button .content::after  {
	position: absolute;
	right: 20px;
	color: #0e7138;
	font-family: "icomoon";
	opacity: 0;
	-webkit-transition: opacity 0.3s 0.3s;
	transition: opacity 0.3s 0.3s;
}

.progress-button .content::before {
	content: "\e600"; /* Checkmark for success */
}

.progress-button .content::after {
	content: "\e601"; /* Cross for error */
}

.progress-button.state-success .content::before,
.progress-button.state-error .content::after {
	opacity: 1;
}

.notransition {
	-webkit-transition: none !important;
	transition: none !important;
}

.progress-button .progress {
	background: #148544;
}

.progress-button .progress-inner {
	position: absolute;
	left: 0;
	background: #0e7138;
}

.progress-button[data-horizontal] .progress-inner {
	top: 0;
	width: 0;
	height: 100%;
	-webkit-transition: width 0.3s, opacity 0.3s;
	transition: width 0.3s, opacity 0.3s;
}

.progress-button[data-vertical] .progress-inner {
	bottom: 0;
	width: 100%;
	height: 0;
	-webkit-transition: height 0.3s, opacity 0.3s;
	transition: height 0.3s, opacity 0.3s;
}

/* Necessary 3d styles for buttons with perspective */

.progress-button[data-perspective] {
	position: relative;
	display: inline-block;
	padding: 0;
	background: transparent;
	-webkit-perspective: 900px;
	perspective: 900px;
}

.progress-button[data-perspective] .content {
	padding: 0 60px;
	background: #1d9650;
}

.progress-button[data-perspective] .progress-wrap {
	display: block;
	-webkit-transition: -webkit-transform 0.2s;
	transition: transform 0.2s;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.progress-button[data-perspective] .content,
.progress-button[data-perspective] .progress {
	outline: 1px solid rgba(0,0,0,0); /* Smoothen jagged edges in FF */
}

/* Individual styles */
/* Choose the effect(s) you want, delete the rest */

/* Fill horizontal */
/* ====================== */

.progress-button[data-style="fill"][data-horizontal] {
	overflow: hidden;
}

.progress-button[data-style="fill"][data-horizontal] .content {
	z-index: 10;
	-webkit-transition: -webkit-transform 0.3s;
	transition: transform 0.3s;
}

.progress-button[data-style="fill"][data-horizontal] .content::before,
.progress-button[data-style="fill"][data-horizontal] .content::after {
	top: 100%;
	right: auto;
	left: 50%;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
	-webkit-transform: translateX(-50%);
	transform: translateX(-50%);
}

.progress-button[data-style="fill"][data-horizontal].state-success .content,
.progress-button[data-style="fill"][data-horizontal].state-error .content {
	-webkit-transform: translateY(-100%);
	transform: translateY(-100%);
}

/* Fill vertical */
/* ====================== */

.progress-button[data-style="fill"][data-vertical] {
	overflow: hidden;
}

.progress-button[data-style="fill"][data-vertical] .content {
	z-index: 10;
	-webkit-transition: -webkit-transform 0.3s;
	transition: transform 0.3s;
}

.progress-button[data-style="fill"][data-vertical] .content::before,
.progress-button[data-style="fill"][data-vertical] .content::after {
	top: 100%;
	right: auto;
	left: 50%;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
	-webkit-transform: translateX(-50%);
	transform: translateX(-50%);
}

.progress-button[data-style="fill"][data-vertical].state-success .content,
.progress-button[data-style="fill"][data-vertical].state-error .content {
	-webkit-transform: translateY(-100%);
	transform: translateY(-100%);
}

/* Shrink horizontal */
/* ====================== */

.progress-button[data-style="shrink"] { /* common for horizontal and vertical */
	overflow: hidden;
	-webkit-transition: -webkit-transform 0.2s;
	transition: transform 0.2s;
}

.progress-button[data-style="shrink"][data-horizontal] .content {
	-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
	transition: opacity 0.3s, transform 0.3s;
}

.progress-button[data-style="shrink"][data-horizontal] .content::before,
.progress-button[data-style="shrink"][data-horizontal] .content::after {
	top: 100%;
	right: auto;
	left: 50%;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
	-webkit-transform: translateX(-50%);
	transform: translateX(-50%);
}

.progress-button[data-style="shrink"][data-horizontal].state-loading {
	-webkit-transform: scaleY(0.3);
	transform: scaleY(0.3);
}

.progress-button[data-style="shrink"][data-horizontal].state-loading .content {
	opacity: 0;
}

.progress-button[data-style="shrink"][data-horizontal].state-success .content,
.progress-button[data-style="shrink"][data-horizontal].state-error .content {
	-webkit-transform: translateY(-100%);
	transform: translateY(-100%);
}

/* Shrink vertical */
/* ====================== */

.progress-button[data-style="shrink"][data-vertical] .content {
	-webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
	transition: opacity 0.3s, transform 0.3s;
}

.progress-button[data-style="shrink"][data-vertical] .content::before,
.progress-button[data-style="shrink"][data-vertical] .content::after {
	top: 100%;
	right: auto;
	left: 50%;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
	-webkit-transform: translateX(-50%);
	transform: translateX(-50%);
}

.progress-button[data-style="shrink"][data-vertical].state-loading {
	-webkit-transform: scaleX(0.1);
	transform: scaleX(0.1);
}

.progress-button[data-style="shrink"][data-vertical].state-loading .content {
	opacity: 0;
}

.progress-button[data-style="shrink"][data-vertical].state-success .content,
.progress-button[data-style="shrink"][data-vertical].state-error .content {
	-webkit-transform: translateY(-100%);
	transform: translateY(-100%);
}

/* Rotate bottom 3d */
/* ====================== */

.progress-button[data-style="rotate-angle-bottom"] .progress {
	position: absolute;
	top: 100%;
	left: 0;
	width: 100%;
	height: 20px;
	box-shadow: 0 -1px 0 #148544; /* fix the blurriness that causes a gap */
	-webkit-transform: rotateX(-90deg);
	transform: rotateX(-90deg);
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
}

.progress-button[data-style="rotate-angle-bottom"].state-loading .progress-wrap {
	-webkit-transform: rotateX(45deg);
	transform: rotateX(45deg);
}

/* Rotate top 3d */
/* ====================== */

.progress-button[data-style="rotate-angle-top"] .progress {
	position: absolute;
	bottom: 100%;
	left: 0;
	width: 100%;
	height: 20px;
	box-shadow: 0 1px 0 #148544; /* fix the blurriness that causes a gap */
	-webkit-transform: rotateX(90deg);
	transform: rotateX(90deg);
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
}

.progress-button[data-style="rotate-angle-top"].state-loading .progress-wrap {
	-webkit-transform: rotateX(-45deg);
	transform: rotateX(-45deg);
}

/* Rotate left 3d */
/* ====================== */

.progress-button[data-style="rotate-angle-left"] .progress {
	position: absolute;
	top: 0;
	right: 100%;
	width: 20px;
	height: 100%;
	box-shadow: 1px 0 0 #148544; /* fix the blurriness that causes a gap */
	-webkit-transform: rotateY(-90deg);
	transform: rotateY(-90deg);
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
}

.progress-button[data-style="rotate-angle-left"].state-loading .progress-wrap {
	-webkit-transform: rotateY(45deg);
	transform: rotateY(45deg);
}

/* Rotate right 3d */
/* ====================== */

.progress-button[data-style="rotate-angle-right"] .progress {
	position: absolute;
	top: 0;
	left: 100%;
	width: 20px;
	height: 100%;
	box-shadow: -1px 0 0 #148544; /* fix the blurriness that causes a gap */
	-webkit-transform: rotateY(90deg);
	transform: rotateY(90deg);
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
}

.progress-button[data-style="rotate-angle-right"].state-loading .progress-wrap {
	-webkit-transform: rotateY(-45deg);
	transform: rotateY(-45deg);
}

/* Rotate side down 3d */
/* ====================== */

.progress-button[data-style="rotate-side-down"] .progress {
	position: absolute;
	top: 100%;
	left: 0;
	width: 100%;
	height: 20px;
	-webkit-transform: rotateX(-90deg);
	transform: rotateX(-90deg);
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.progress-button[data-style="rotate-side-down"].state-loading .progress-wrap {
	-webkit-transform: rotateX(90deg) translateZ(10px);
	transform: rotateX(90deg) translateZ(10px);
}

/* Rotate side up 3d */
/* ====================== */

.progress-button[data-style="rotate-side-up"] .progress {
	position: absolute;
	bottom: 100%;
	left: 0;
	width: 100%;
	height: 20px;
	-webkit-transform: rotateX(90deg);
	transform: rotateX(90deg);
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.progress-button[data-style="rotate-side-up"].state-loading .progress-wrap {
	-webkit-transform: rotateX(-90deg) translateZ(10px);
	transform: rotateX(-90deg) translateZ(10px);
}

/* Rotate side left 3d */
/* ====================== */

.progress-button[data-style="rotate-side-left"] .progress-wrap {
	-webkit-transform-origin: 0 50%;
	transform-origin: 0 50%;
}

.progress-button[data-style="rotate-side-left"] .progress {
	position: absolute;
	top: 0;
	left: 0;
	width: 20px;
	height: 100%;
	-webkit-transform: rotateY(90deg);
	transform: rotateY(90deg);
	-webkit-transform-origin: 0 50%;
	transform-origin: 0 50%;
}

.progress-button[data-style="rotate-side-left"].state-loading .progress-wrap {
	-webkit-transform: translateX(50%) rotateY(90deg) translateZ(10px);
	transform: translateX(50%) rotateY(90deg) translateZ(10px);
}

/* Rotate side right 3d */
/* ====================== */

.progress-button[data-style="rotate-side-right"] .progress-wrap {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
}

.progress-button[data-style="rotate-side-right"] .progress {
	position: absolute;
	top: 0;
	left: 100%;
	width: 20px;
	height: 100%;
	-webkit-transform: rotateY(90deg);
	transform: rotateY(90deg);
	-webkit-transform-origin: 0 50%;
	transform-origin: 0 50%;
}

.progress-button[data-style="rotate-side-right"].state-loading .progress-wrap {
	-webkit-transform: translateX(-50%) rotateY(-90deg) translateZ(10px);
	transform: translateX(-50%) rotateY(-90deg) translateZ(10px);
}

/* Rotate back 3d */
/* ====================== */

.progress-button[data-style="rotate-back"] .progress-wrap {
	-webkit-transition-timing-function: ease-out;
	transition-timing-function: ease-out;
}

.progress-button[data-style="rotate-back"] .content {
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.progress-button[data-style="rotate-back"] .progress {
	position: absolute;
	top: 100%;
	left: 0;
	width: 100%;
	height: 100%;
	-webkit-transform: rotateX(-180deg);
	transform: rotateX(-180deg);
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.progress-button[data-style="rotate-back"].state-loading .progress-wrap {
	-webkit-transform: rotateX(180deg) scaleX(0.6) scaleY(0.3);
	transform: rotateX(180deg) scaleX(0.6) scaleY(0.3);
}

/* flip open 3d */
/* ====================== */

.progress-button[data-style="flip-open"] .content {
	z-index: 10;
	-webkit-transition: -webkit-transform 0.2s;
	transition: transform 0.2s;
	-webkit-transform-origin: 50% 0;
	transform-origin: 50% 0;
}

.progress-button[data-style="flip-open"] .progress {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.progress-button[data-style="flip-open"].state-loading .content {
	-webkit-transform: rotateX(45deg);
	transform: rotateX(45deg);
}

/* slide down */
/* ====================== */

.progress-button[data-style="slide-down"] {
	padding: 0;
	overflow: visible;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.progress-button[data-style="slide-down"] .content {
	z-index: 10;
	padding: 0 60px;
	background: #1d9650;
}

.progress-button[data-style="slide-down"] .progress {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	-webkit-transition: -webkit-transform 0.2s;
	transition: transform 0.2s;
}

.progress-button[data-style="slide-down"].state-loading .progress {
	-webkit-transform: translateY(10px);
	transform: translateY(10px);
}

/* move-up */
/* ====================== */

.progress-button[data-style="move-up"] {
	padding: 0;
	overflow: visible;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.progress-button[data-style="move-up"] .content {
	z-index: 10;
	padding: 0 60px;
	background: #1d9650;
	-webkit-transition: -webkit-transform 0.2s;
	transition: transform 0.2s;
}

.progress-button[data-style="move-up"] .progress {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.progress-button[data-style="move-up"].state-loading .content {
	-webkit-transform: translateY(-10px);
	transform: translateY(-10px);
}

/* top-line */
/* ====================== */

.progress-button[data-style="top-line"] .progress-inner {
	height: 3px;
}

.progress-button[data-style="top-line"] .content::before,
.progress-button[data-style="top-line"] .content::after {
	right: auto;
	left: 100%;
	margin-left: 25px;
}

/* lateral-lines */
/* ====================== */

.progress-button[data-style="lateral-lines"] .progress-inner {
	width: 100%;
	border-right: 3px solid #0e7138;
	border-left: 3px solid #0e7138;
	background: transparent;
}

.progress-button[data-style="lateral-lines"] .content::before,
.progress-button[data-style="lateral-lines"] .content::after {
	right: auto;
	left: 100%;
	margin-left: 25px;
}
/*!
 * FullCalendar v2.4.0 Stylesheet
 * Docs & License: http://fullcalendar.io/
 * (c) 2015 Adam Shaw
 */.fc{direction:ltr;text-align:left}.fc-rtl{text-align:right}body .fc{font-size:1em}.fc-unthemed .fc-divider,.fc-unthemed .fc-popover,.fc-unthemed .fc-row,.fc-unthemed tbody,.fc-unthemed td,.fc-unthemed th,.fc-unthemed thead{border-color:#ddd}.fc-unthemed .fc-popover{background-color:#fff}.fc-unthemed .fc-divider,.fc-unthemed .fc-popover .fc-header{background:#eee}.fc-unthemed .fc-popover .fc-header .fc-close{color:#666}.fc-unthemed .fc-today{background:#fcf8e3}.fc-highlight{background:#bce8f1;opacity:.3;filter:alpha(opacity=30)}.fc-bgevent{background:#8fdf82;opacity:.3;filter:alpha(opacity=30)}.fc-nonbusiness{background:#d7d7d7}.fc-icon{display:inline-block;width:1em;height:1em;line-height:1em;font-size:1em;text-align:center;overflow:hidden;font-family:"Courier New",Courier,monospace;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.fc-icon:after{position:relative;margin:0 -1em}.fc-icon-left-single-arrow:after{content:"\02039";font-weight:700;font-size:200%;top:-7%;left:3%}.fc-icon-right-single-arrow:after{content:"\0203A";font-weight:700;font-size:200%;top:-7%;left:-3%}.fc-icon-left-double-arrow:after{content:"\000AB";font-size:160%;top:-7%}.fc-icon-right-double-arrow:after{content:"\000BB";font-size:160%;top:-7%}.fc-icon-left-triangle:after{content:"\25C4";font-size:125%;top:3%;left:-2%}.fc-icon-right-triangle:after{content:"\25BA";font-size:125%;top:3%;left:2%}.fc-icon-down-triangle:after{content:"\25BC";font-size:125%;top:2%}.fc-icon-x:after{content:"\000D7";font-size:200%;top:6%}.fc button{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;height:2.1em;padding:0 .6em;font-size:1em;white-space:nowrap;cursor:pointer}.fc button::-moz-focus-inner{margin:0;padding:0}.fc-state-default{border:1px solid}.fc-state-default.fc-corner-left{border-top-left-radius:4px;border-bottom-left-radius:4px}.fc-state-default.fc-corner-right{border-top-right-radius:4px;border-bottom-right-radius:4px}.fc button .fc-icon{position:relative;top:-.05em;margin:0 .2em;vertical-align:middle}.fc-state-default{background-color:#f5f5f5;background-image:-moz-linear-gradient(top,#fff,#e6e6e6);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));background-image:-webkit-linear-gradient(top,#fff,#e6e6e6);background-image:-o-linear-gradient(top,#fff,#e6e6e6);background-image:linear-gradient(to bottom,#fff,#e6e6e6);background-repeat:repeat-x;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);color:#333;text-shadow:0 1px 1px rgba(255,255,255,.75);box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05)}.fc-state-active,.fc-state-disabled,.fc-state-down,.fc-state-hover{color:#333;background-color:#e6e6e6}.fc-state-hover{color:#333;text-decoration:none;background-position:0 -15px;-webkit-transition:background-position .1s linear;-moz-transition:background-position .1s linear;-o-transition:background-position .1s linear;transition:background-position .1s linear}.fc-state-active,.fc-state-down{background-color:#ccc;background-image:none;box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05)}.fc-state-disabled{cursor:default;background-image:none;opacity:.65;filter:alpha(opacity=65);box-shadow:none}.fc-button-group{display:inline-block}.fc .fc-button-group>*{float:left;margin:0 0 0 -1px}.fc .fc-button-group>:first-child{margin-left:0}.fc-popover{position:absolute;box-shadow:0 2px 6px rgba(0,0,0,.15)}.fc-popover .fc-header{padding:2px 4px}.fc-popover .fc-header .fc-title{margin:0 2px}.fc-popover .fc-header .fc-close{cursor:pointer}.fc-ltr .fc-popover .fc-header .fc-title,.fc-rtl .fc-popover .fc-header .fc-close{float:left}.fc-ltr .fc-popover .fc-header .fc-close,.fc-rtl .fc-popover .fc-header .fc-title{float:right}.fc-unthemed .fc-popover{border-width:1px;border-style:solid}.fc-unthemed .fc-popover .fc-header .fc-close{font-size:.9em;margin-top:2px}.fc-popover>.ui-widget-header+.ui-widget-content{border-top:0}.fc-divider{border-style:solid;border-width:1px}hr.fc-divider{height:0;margin:0;padding:0 0 2px;border-width:1px 0}.fc-clear{clear:both}.fc-bg,.fc-bgevent-skeleton,.fc-helper-skeleton,.fc-highlight-skeleton{position:absolute;top:0;left:0;right:0}.fc-bg{bottom:0}.fc-bg table{height:100%}.fc table{width:100%;table-layout:fixed;border-collapse:collapse;border-spacing:0;font-size:1em}.fc th{text-align:center}.fc td,.fc th{border-style:solid;border-width:1px;padding:0;vertical-align:top}.fc td.fc-today{border-style:double}.fc .fc-row{border-style:solid;border-width:0}.fc-row table{border-left:0 hidden transparent;border-right:0 hidden transparent;border-bottom:0 hidden transparent}.fc-row:first-child table{border-top:0 hidden transparent}.fc-row{position:relative}.fc-row .fc-bg{z-index:1}.fc-row .fc-bgevent-skeleton,.fc-row .fc-highlight-skeleton{bottom:0}.fc-row .fc-bgevent-skeleton table,.fc-row .fc-highlight-skeleton table{height:100%}.fc-row .fc-bgevent-skeleton td,.fc-row .fc-highlight-skeleton td{border-color:transparent}.fc-row .fc-bgevent-skeleton{z-index:2}.fc-row .fc-highlight-skeleton{z-index:3}.fc-row .fc-content-skeleton{position:relative;z-index:4;padding-bottom:2px}.fc-row .fc-helper-skeleton{z-index:5}.fc-row .fc-content-skeleton td,.fc-row .fc-helper-skeleton td{background:0 0;border-color:transparent;border-bottom:0}.fc-row .fc-content-skeleton tbody td,.fc-row .fc-helper-skeleton tbody td{border-top:0}.fc-scroller{overflow-y:scroll;overflow-x:hidden}.fc-scroller>*{position:relative;width:100%;overflow:hidden}.fc-event{position:relative;display:block;font-size:.85em;line-height:1.3;border-radius:3px;border:1px solid #3a87ad;background-color:#3a87ad;font-weight:400}.fc-event,.fc-event:hover,.ui-widget .fc-event{color:#fff;text-decoration:none}.fc-event.fc-draggable,.fc-event[href]{cursor:pointer}.fc-not-allowed,.fc-not-allowed .fc-event{cursor:not-allowed}.fc-event .fc-bg{z-index:1;background:#fff;opacity:.25;filter:alpha(opacity=25)}.fc-event .fc-content{position:relative;z-index:2}.fc-event .fc-resizer{position:absolute;z-index:3}.fc-ltr .fc-h-event.fc-not-start,.fc-rtl .fc-h-event.fc-not-end{margin-left:0;border-left-width:0;padding-left:1px;border-top-left-radius:0;border-bottom-left-radius:0}.fc-ltr .fc-h-event.fc-not-end,.fc-rtl .fc-h-event.fc-not-start{margin-right:0;border-right-width:0;padding-right:1px;border-top-right-radius:0;border-bottom-right-radius:0}.fc-h-event .fc-resizer{top:-1px;bottom:-1px;left:-1px;right:-1px;width:5px}.fc-ltr .fc-h-event .fc-start-resizer,.fc-ltr .fc-h-event .fc-start-resizer:after,.fc-ltr .fc-h-event .fc-start-resizer:before,.fc-rtl .fc-h-event .fc-end-resizer,.fc-rtl .fc-h-event .fc-end-resizer:after,.fc-rtl .fc-h-event .fc-end-resizer:before{right:auto;cursor:w-resize}.fc-ltr .fc-h-event .fc-end-resizer,.fc-ltr .fc-h-event .fc-end-resizer:after,.fc-ltr .fc-h-event .fc-end-resizer:before,.fc-rtl .fc-h-event .fc-start-resizer,.fc-rtl .fc-h-event .fc-start-resizer:after,.fc-rtl .fc-h-event .fc-start-resizer:before{left:auto;cursor:e-resize}.fc-day-grid-event{margin:1px 2px 0;padding:0 1px}.fc-day-grid-event .fc-content{white-space:nowrap;overflow:hidden}.fc-day-grid-event .fc-time{font-weight:700}.fc-day-grid-event .fc-resizer{left:-3px;right:-3px;width:7px}a.fc-more{margin:1px 3px;font-size:.85em;cursor:pointer;text-decoration:none}a.fc-more:hover{text-decoration:underline}.fc-limited{display:none}.fc-day-grid .fc-row{z-index:1}.fc-more-popover{z-index:2;width:220px}.fc-more-popover .fc-event-container{padding:10px}.fc-toolbar{text-align:center;margin-bottom:1em}.fc-toolbar .fc-left{float:left}.fc-toolbar .fc-right{float:right}.fc-toolbar .fc-center{display:inline-block}.fc .fc-toolbar>*>*{float:left;margin-left:.75em}.fc .fc-toolbar>*>:first-child{margin-left:0}.fc-toolbar h2{margin:0}.fc-toolbar button{position:relative}.fc-toolbar .fc-state-hover,.fc-toolbar .ui-state-hover{z-index:2}.fc-toolbar .fc-state-down{z-index:3}.fc-toolbar .fc-state-active,.fc-toolbar .ui-state-active{z-index:4}.fc-toolbar button:focus{z-index:5}.fc-view-container *,.fc-view-container :after,.fc-view-container :before{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.fc-view,.fc-view>table{position:relative;z-index:1}.fc-basicDay-view .fc-content-skeleton,.fc-basicWeek-view .fc-content-skeleton{padding-top:1px;padding-bottom:1em}.fc-basic-view .fc-body .fc-row{min-height:4em}.fc-row.fc-rigid{overflow:hidden}.fc-row.fc-rigid .fc-content-skeleton{position:absolute;top:0;left:0;right:0}.fc-basic-view .fc-day-number,.fc-basic-view .fc-week-number{padding:0 2px}.fc-basic-view td.fc-day-number,.fc-basic-view td.fc-week-number span{padding-top:2px;padding-bottom:2px}.fc-basic-view .fc-week-number{text-align:center}.fc-basic-view .fc-week-number span{display:inline-block;min-width:1.25em}.fc-ltr .fc-basic-view .fc-day-number{text-align:right}.fc-rtl .fc-basic-view .fc-day-number{text-align:left}.fc-day-number.fc-other-month{opacity:.3;filter:alpha(opacity=30)}.fc-agenda-view .fc-day-grid{position:relative;z-index:2}.fc-agenda-view .fc-day-grid .fc-row{min-height:3em}.fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton{padding-top:1px;padding-bottom:1em}.fc .fc-axis{vertical-align:middle;padding:0 4px;white-space:nowrap}.fc-ltr .fc-axis{text-align:right}.fc-rtl .fc-axis{text-align:left}.ui-widget td.fc-axis{font-weight:400}.fc-time-grid,.fc-time-grid-container{position:relative;z-index:1}.fc-time-grid{min-height:100%}.fc-time-grid table{border:0 hidden transparent}.fc-time-grid>.fc-bg{z-index:1}.fc-time-grid .fc-slats,.fc-time-grid>hr{position:relative;z-index:2}.fc-time-grid .fc-bgevent-skeleton,.fc-time-grid .fc-content-skeleton{position:absolute;top:0;left:0;right:0}.fc-time-grid .fc-bgevent-skeleton{z-index:3}.fc-time-grid .fc-highlight-skeleton{z-index:4}.fc-time-grid .fc-content-skeleton{z-index:5}.fc-time-grid .fc-helper-skeleton{z-index:6}.fc-time-grid .fc-slats td{height:1.5em;border-bottom:0}.fc-time-grid .fc-slats .fc-minor td{border-top-style:dotted}.fc-time-grid .fc-slats .ui-widget-content{background:0 0}.fc-time-grid .fc-highlight-container{position:relative}.fc-time-grid .fc-highlight{position:absolute;left:0;right:0}.fc-time-grid .fc-bgevent-container,.fc-time-grid .fc-event-container{position:relative}.fc-ltr .fc-time-grid .fc-event-container{margin:0 2.5% 0 2px}.fc-rtl .fc-time-grid .fc-event-container{margin:0 2px 0 2.5%}.fc-time-grid .fc-bgevent,.fc-time-grid .fc-event{position:absolute;z-index:1}.fc-time-grid .fc-bgevent{left:0;right:0}.fc-v-event.fc-not-start{border-top-width:0;padding-top:1px;border-top-left-radius:0;border-top-right-radius:0}.fc-v-event.fc-not-end{border-bottom-width:0;padding-bottom:1px;border-bottom-left-radius:0;border-bottom-right-radius:0}.fc-time-grid-event{overflow:hidden}.fc-time-grid-event .fc-time,.fc-time-grid-event .fc-title{padding:0 1px}.fc-time-grid-event .fc-time{font-size:.85em;white-space:nowrap}.fc-time-grid-event.fc-short .fc-content{white-space:nowrap}.fc-time-grid-event.fc-short .fc-time,.fc-time-grid-event.fc-short .fc-title{display:inline-block;vertical-align:top}.fc-time-grid-event.fc-short .fc-time span{display:none}.fc-time-grid-event.fc-short .fc-time:before{content:attr(data-start)}.fc-time-grid-event.fc-short .fc-time:after{content:"\000A0-\000A0"}.fc-time-grid-event.fc-short .fc-title{font-size:.85em;padding:0}.fc-time-grid-event .fc-resizer{left:0;right:0;bottom:0;height:8px;overflow:hidden;line-height:8px;font-size:11px;font-family:monospace;text-align:center;cursor:s-resize}.fc-time-grid-event .fc-resizer:after{content:"="}
/* jQuery Growl
 * Copyright 2015 Kevin Sylvestre
 * 1.3.1
 */
#growls {
  z-index: 50000;
  position: fixed; }
  #growls.default {
    top: 10px;
    right: 10px; }
  #growls.tl {
    top: 10px;
    left: 10px; }
  #growls.tr {
    top: 10px;
    right: 10px; }
  #growls.bl {
    bottom: 10px;
    left: 10px; }
  #growls.br {
    bottom: 10px;
    right: 10px; }
  #growls.tc {
    top: 10px;
    right: 10px;
    left: 10px; }
  #growls.bc {
    bottom: 10px;
    right: 10px;
    left: 10px; }
  #growls.tc .growl, #growls.bc .growl {
    margin-left: auto;
    margin-right: auto; }

.growl {
  opacity: 0.8;
  filter: alpha(opacity=80);
  position: relative;
  border-radius: 4px;
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out; }
  .growl.growl-incoming {
    opacity: 0;
    filter: alpha(opacity=0); }
  .growl.growl-outgoing {
    opacity: 0;
    filter: alpha(opacity=0); }
  .growl.growl-small {
    width: 200px;
    padding: 5px;
    margin: 5px; }
  .growl.growl-medium {
    width: 250px;
    padding: 10px;
    margin: 10px; }
  .growl.growl-large {
    width: 300px;
    padding: 15px;
    margin: 15px; }
  .growl.growl-default {
    color: #FFF;
    background: #7f8c8d; }
  .growl.growl-error {
    color: #FFF;
    background: #C0392B; }
  .growl.growl-notice {
    color: #FFF;
    background: #2ECC71; }
  .growl.growl-warning {
    color: #FFF;
    background: #F39C12; }
  .growl .growl-close {
    cursor: pointer;
    float: right;
    font-size: 14px;
    line-height: 18px;
    font-weight: normal;
    font-family: helvetica, verdana, sans-serif; }
  .growl .growl-title {
    font-size: 18px;
    line-height: 24px; }
  .growl .growl-message {
    font-size: 14px;
    line-height: 18px; }

/*!
 * Datetimepicker for Bootstrap 3
 * version : 4.17.37
 * https://github.com/Eonasdan/bootstrap-datetimepicker/
 */.bootstrap-datetimepicker-widget{list-style:none}.bootstrap-datetimepicker-widget.dropdown-menu{margin:2px 0;padding:4px;width:19em}@media (min-width:768px){.bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs{width:38em}}@media (min-width:992px){.bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs{width:38em}}@media (min-width:1200px){.bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs{width:38em}}.bootstrap-datetimepicker-widget.dropdown-menu:before,.bootstrap-datetimepicker-widget.dropdown-menu:after{content:'';display:inline-block;position:absolute}.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before{border-left:7px solid transparent;border-right:7px solid transparent;border-bottom:7px solid #ccc;border-bottom-color:rgba(0,0,0,0.2);top:-7px;left:7px}.bootstrap-datetimepicker-widget.dropdown-menu.bottom:after{border-left:6px solid transparent;border-right:6px solid transparent;border-bottom:6px solid white;top:-6px;left:8px}.bootstrap-datetimepicker-widget.dropdown-menu.top:before{border-left:7px solid transparent;border-right:7px solid transparent;border-top:7px solid #ccc;border-top-color:rgba(0,0,0,0.2);bottom:-7px;left:6px}.bootstrap-datetimepicker-widget.dropdown-menu.top:after{border-left:6px solid transparent;border-right:6px solid transparent;border-top:6px solid white;bottom:-6px;left:7px}.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:before{left:auto;right:6px}.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:after{left:auto;right:7px}.bootstrap-datetimepicker-widget .list-unstyled{margin:0}.bootstrap-datetimepicker-widget a[data-action]{padding:6px 0}.bootstrap-datetimepicker-widget a[data-action]:active{box-shadow:none}.bootstrap-datetimepicker-widget .timepicker-hour,.bootstrap-datetimepicker-widget .timepicker-minute,.bootstrap-datetimepicker-widget .timepicker-second{width:54px;font-weight:bold;font-size:1.2em;margin:0}.bootstrap-datetimepicker-widget button[data-action]{padding:6px}.bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Increment Hours"}.bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Increment Minutes"}.bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Decrement Hours"}.bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Decrement Minutes"}.bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Show Hours"}.bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Show Minutes"}.bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Toggle AM/PM"}.bootstrap-datetimepicker-widget .btn[data-action="clear"]::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Clear the picker"}.bootstrap-datetimepicker-widget .btn[data-action="today"]::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Set the date to today"}.bootstrap-datetimepicker-widget .picker-switch{text-align:center}.bootstrap-datetimepicker-widget .picker-switch::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Toggle Date and Time Screens"}.bootstrap-datetimepicker-widget .picker-switch td{padding:0;margin:0;height:auto;width:auto;line-height:inherit}.bootstrap-datetimepicker-widget .picker-switch td span{line-height:2.5;height:2.5em;width:100%}.bootstrap-datetimepicker-widget table{width:100%;margin:0}.bootstrap-datetimepicker-widget table td,.bootstrap-datetimepicker-widget table th{text-align:center;border-radius:4px}.bootstrap-datetimepicker-widget table th{height:20px;line-height:20px;width:20px}.bootstrap-datetimepicker-widget table th.picker-switch{width:145px}.bootstrap-datetimepicker-widget table th.disabled,.bootstrap-datetimepicker-widget table th.disabled:hover{background:none;color:#777;cursor:not-allowed}.bootstrap-datetimepicker-widget table th.prev::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Previous Month"}.bootstrap-datetimepicker-widget table th.next::after{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0;content:"Next Month"}.bootstrap-datetimepicker-widget table thead tr:first-child th{cursor:pointer}.bootstrap-datetimepicker-widget table thead tr:first-child th:hover{background:#eee}.bootstrap-datetimepicker-widget table td{height:54px;line-height:54px;width:54px}.bootstrap-datetimepicker-widget table td.cw{font-size:.8em;height:20px;line-height:20px;color:#777}.bootstrap-datetimepicker-widget table td.day{height:20px;line-height:20px;width:20px}.bootstrap-datetimepicker-widget table td.day:hover,.bootstrap-datetimepicker-widget table td.hour:hover,.bootstrap-datetimepicker-widget table td.minute:hover,.bootstrap-datetimepicker-widget table td.second:hover{background:#eee;cursor:pointer}.bootstrap-datetimepicker-widget table td.old,.bootstrap-datetimepicker-widget table td.new{color:#777}.bootstrap-datetimepicker-widget table td.today{position:relative}.bootstrap-datetimepicker-widget table td.today:before{content:'';display:inline-block;border:solid transparent;border-width:0 0 7px 7px;border-bottom-color:#337ab7;border-top-color:rgba(0,0,0,0.2);position:absolute;bottom:4px;right:4px}.bootstrap-datetimepicker-widget table td.active,.bootstrap-datetimepicker-widget table td.active:hover{background-color:#337ab7;color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.25)}.bootstrap-datetimepicker-widget table td.active.today:before{border-bottom-color:#fff}.bootstrap-datetimepicker-widget table td.disabled,.bootstrap-datetimepicker-widget table td.disabled:hover{background:none;color:#777;cursor:not-allowed}.bootstrap-datetimepicker-widget table td span{display:inline-block;width:54px;height:54px;line-height:54px;margin:2px 1.5px;cursor:pointer;border-radius:4px}.bootstrap-datetimepicker-widget table td span:hover{background:#eee}.bootstrap-datetimepicker-widget table td span.active{background-color:#337ab7;color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.25)}.bootstrap-datetimepicker-widget table td span.old{color:#777}.bootstrap-datetimepicker-widget table td span.disabled,.bootstrap-datetimepicker-widget table td span.disabled:hover{background:none;color:#777;cursor:not-allowed}.bootstrap-datetimepicker-widget.usetwentyfour td.hour{height:27px;line-height:27px}.bootstrap-datetimepicker-widget.wider{width:21em}.bootstrap-datetimepicker-widget .datepicker-decades .decade{line-height:1.8em !important}.input-group.date .input-group-addon{cursor:pointer}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}
/*!
 * Hover.css (http://ianlunn.github.io/Hover/)
 * Version: 2.0.1
 * Author: Ian Lunn @IanLunn
 * Author URL: http://ianlunn.co.uk/
 * Github: https://github.com/IanLunn/Hover

 * Made available under a MIT License:
 * http://www.opensource.org/licenses/mit-license.php

 * Hover.css Copyright Ian Lunn 2014. Generated with Sass.
 */.hvr-grow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-grow:active,.hvr-grow:focus,.hvr-grow:hover{-webkit-transform:scale(1.1);transform:scale(1.1)}.hvr-shrink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-shrink:active,.hvr-shrink:focus,.hvr-shrink:hover{-webkit-transform:scale(0.9);transform:scale(0.9)}@-webkit-keyframes hvr-pulse{25%{-webkit-transform:scale(1.1);transform:scale(1.1)}75%{-webkit-transform:scale(0.9);transform:scale(0.9)}}@keyframes hvr-pulse{25%{-webkit-transform:scale(1.1);transform:scale(1.1)}75%{-webkit-transform:scale(0.9);transform:scale(0.9)}}.hvr-pulse{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-pulse:active,.hvr-pulse:focus,.hvr-pulse:hover{-webkit-animation-name:hvr-pulse;animation-name:hvr-pulse;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes hvr-pulse-grow{to{-webkit-transform:scale(1.1);transform:scale(1.1)}}@keyframes hvr-pulse-grow{to{-webkit-transform:scale(1.1);transform:scale(1.1)}}.hvr-pulse-grow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-pulse-grow:active,.hvr-pulse-grow:focus,.hvr-pulse-grow:hover{-webkit-animation-name:hvr-pulse-grow;animation-name:hvr-pulse-grow;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-direction:alternate;animation-direction:alternate}@-webkit-keyframes hvr-pulse-shrink{to{-webkit-transform:scale(0.9);transform:scale(0.9)}}@keyframes hvr-pulse-shrink{to{-webkit-transform:scale(0.9);transform:scale(0.9)}}.hvr-pulse-shrink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-pulse-shrink:active,.hvr-pulse-shrink:focus,.hvr-pulse-shrink:hover{-webkit-animation-name:hvr-pulse-shrink;animation-name:hvr-pulse-shrink;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-direction:alternate;animation-direction:alternate}@-webkit-keyframes hvr-push{50%{-webkit-transform:scale(0.8);transform:scale(0.8)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes hvr-push{50%{-webkit-transform:scale(0.8);transform:scale(0.8)}100%{-webkit-transform:scale(1);transform:scale(1)}}.hvr-push{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-push:active,.hvr-push:focus,.hvr-push:hover{-webkit-animation-name:hvr-push;animation-name:hvr-push;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-pop{50%{-webkit-transform:scale(1.2);transform:scale(1.2)}}@keyframes hvr-pop{50%{-webkit-transform:scale(1.2);transform:scale(1.2)}}.hvr-pop{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-pop:active,.hvr-pop:focus,.hvr-pop:hover{-webkit-animation-name:hvr-pop;animation-name:hvr-pop;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}.hvr-bounce-in{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-in:active,.hvr-bounce-in:focus,.hvr-bounce-in:hover{-webkit-transform:scale(1.2);transform:scale(1.2);-webkit-transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36);transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36)}.hvr-bounce-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-out:active,.hvr-bounce-out:focus,.hvr-bounce-out:hover{-webkit-transform:scale(0.8);transform:scale(0.8);-webkit-transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36);transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36)}.hvr-rotate{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-rotate:active,.hvr-rotate:focus,.hvr-rotate:hover{-webkit-transform:rotate(4deg);transform:rotate(4deg)}.hvr-grow-rotate{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-grow-rotate:active,.hvr-grow-rotate:focus,.hvr-grow-rotate:hover{-webkit-transform:scale(1.1) rotate(4deg);transform:scale(1.1) rotate(4deg)}.hvr-float{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-float:active,.hvr-float:focus,.hvr-float:hover{-webkit-transform:translateY(-8px);transform:translateY(-8px)}.hvr-sink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-sink:active,.hvr-sink:focus,.hvr-sink:hover{-webkit-transform:translateY(8px);transform:translateY(8px)}@-webkit-keyframes hvr-bob{0%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}50%{-webkit-transform:translateY(-4px);transform:translateY(-4px)}100%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}}@keyframes hvr-bob{0%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}50%{-webkit-transform:translateY(-4px);transform:translateY(-4px)}100%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}}@-webkit-keyframes hvr-bob-float{100%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}}@keyframes hvr-bob-float{100%{-webkit-transform:translateY(-8px);transform:translateY(-8px)}}.hvr-bob{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-bob:active,.hvr-bob:focus,.hvr-bob:hover{-webkit-animation-name:hvr-bob-float,hvr-bob;animation-name:hvr-bob-float,hvr-bob;-webkit-animation-duration:.3s,1.5s;animation-duration:.3s,1.5s;-webkit-animation-delay:0s,.3s;animation-delay:0s,.3s;-webkit-animation-timing-function:ease-out,ease-in-out;animation-timing-function:ease-out,ease-in-out;-webkit-animation-iteration-count:1,infinite;animation-iteration-count:1,infinite;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-direction:normal,alternate;animation-direction:normal,alternate}@-webkit-keyframes hvr-hang{0%{-webkit-transform:translateY(8px);transform:translateY(8px)}50%{-webkit-transform:translateY(4px);transform:translateY(4px)}100%{-webkit-transform:translateY(8px);transform:translateY(8px)}}@keyframes hvr-hang{0%{-webkit-transform:translateY(8px);transform:translateY(8px)}50%{-webkit-transform:translateY(4px);transform:translateY(4px)}100%{-webkit-transform:translateY(8px);transform:translateY(8px)}}@-webkit-keyframes hvr-hang-sink{100%{-webkit-transform:translateY(8px);transform:translateY(8px)}}@keyframes hvr-hang-sink{100%{-webkit-transform:translateY(8px);transform:translateY(8px)}}.hvr-hang{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-hang:active,.hvr-hang:focus,.hvr-hang:hover{-webkit-animation-name:hvr-hang-sink,hvr-hang;animation-name:hvr-hang-sink,hvr-hang;-webkit-animation-duration:.3s,1.5s;animation-duration:.3s,1.5s;-webkit-animation-delay:0s,.3s;animation-delay:0s,.3s;-webkit-animation-timing-function:ease-out,ease-in-out;animation-timing-function:ease-out,ease-in-out;-webkit-animation-iteration-count:1,infinite;animation-iteration-count:1,infinite;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-direction:normal,alternate;animation-direction:normal,alternate}.hvr-skew{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-skew:active,.hvr-skew:focus,.hvr-skew:hover{-webkit-transform:skew(-10deg);transform:skew(-10deg)}.hvr-skew-forward{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transform-origin:0 100%;transform-origin:0 100%}.hvr-skew-forward:active,.hvr-skew-forward:focus,.hvr-skew-forward:hover{-webkit-transform:skew(-10deg);transform:skew(-10deg)}.hvr-skew-backward{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transform-origin:0 100%;transform-origin:0 100%}.hvr-skew-backward:active,.hvr-skew-backward:focus,.hvr-skew-backward:hover{-webkit-transform:skew(10deg);transform:skew(10deg)}@-webkit-keyframes hvr-wobble-vertical{16.65%{-webkit-transform:translateY(8px);transform:translateY(8px)}33.3%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}49.95%{-webkit-transform:translateY(4px);transform:translateY(4px)}66.6%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}83.25%{-webkit-transform:translateY(1px);transform:translateY(1px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes hvr-wobble-vertical{16.65%{-webkit-transform:translateY(8px);transform:translateY(8px)}33.3%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}49.95%{-webkit-transform:translateY(4px);transform:translateY(4px)}66.6%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}83.25%{-webkit-transform:translateY(1px);transform:translateY(1px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}.hvr-wobble-vertical{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-wobble-vertical:active,.hvr-wobble-vertical:focus,.hvr-wobble-vertical:hover{-webkit-animation-name:hvr-wobble-vertical;animation-name:hvr-wobble-vertical;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-horizontal{16.65%{-webkit-transform:translateX(8px);transform:translateX(8px)}33.3%{-webkit-transform:translateX(-6px);transform:translateX(-6px)}49.95%{-webkit-transform:translateX(4px);transform:translateX(4px)}66.6%{-webkit-transform:translateX(-2px);transform:translateX(-2px)}83.25%{-webkit-transform:translateX(1px);transform:translateX(1px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes hvr-wobble-horizontal{16.65%{-webkit-transform:translateX(8px);transform:translateX(8px)}33.3%{-webkit-transform:translateX(-6px);transform:translateX(-6px)}49.95%{-webkit-transform:translateX(4px);transform:translateX(4px)}66.6%{-webkit-transform:translateX(-2px);transform:translateX(-2px)}83.25%{-webkit-transform:translateX(1px);transform:translateX(1px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}.hvr-wobble-horizontal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-wobble-horizontal:active,.hvr-wobble-horizontal:focus,.hvr-wobble-horizontal:hover{-webkit-animation-name:hvr-wobble-horizontal;animation-name:hvr-wobble-horizontal;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-to-bottom-right{16.65%{-webkit-transform:translate(8px,8px);transform:translate(8px,8px)}33.3%{-webkit-transform:translate(-6px,-6px);transform:translate(-6px,-6px)}49.95%{-webkit-transform:translate(4px,4px);transform:translate(4px,4px)}66.6%{-webkit-transform:translate(-2px,-2px);transform:translate(-2px,-2px)}83.25%{-webkit-transform:translate(1px,1px);transform:translate(1px,1px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes hvr-wobble-to-bottom-right{16.65%{-webkit-transform:translate(8px,8px);transform:translate(8px,8px)}33.3%{-webkit-transform:translate(-6px,-6px);transform:translate(-6px,-6px)}49.95%{-webkit-transform:translate(4px,4px);transform:translate(4px,4px)}66.6%{-webkit-transform:translate(-2px,-2px);transform:translate(-2px,-2px)}83.25%{-webkit-transform:translate(1px,1px);transform:translate(1px,1px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}.hvr-wobble-to-bottom-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-wobble-to-bottom-right:active,.hvr-wobble-to-bottom-right:focus,.hvr-wobble-to-bottom-right:hover{-webkit-animation-name:hvr-wobble-to-bottom-right;animation-name:hvr-wobble-to-bottom-right;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-to-top-right{16.65%{-webkit-transform:translate(8px,-8px);transform:translate(8px,-8px)}33.3%{-webkit-transform:translate(-6px,6px);transform:translate(-6px,6px)}49.95%{-webkit-transform:translate(4px,-4px);transform:translate(4px,-4px)}66.6%{-webkit-transform:translate(-2px,2px);transform:translate(-2px,2px)}83.25%{-webkit-transform:translate(1px,-1px);transform:translate(1px,-1px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}@keyframes hvr-wobble-to-top-right{16.65%{-webkit-transform:translate(8px,-8px);transform:translate(8px,-8px)}33.3%{-webkit-transform:translate(-6px,6px);transform:translate(-6px,6px)}49.95%{-webkit-transform:translate(4px,-4px);transform:translate(4px,-4px)}66.6%{-webkit-transform:translate(-2px,2px);transform:translate(-2px,2px)}83.25%{-webkit-transform:translate(1px,-1px);transform:translate(1px,-1px)}100%{-webkit-transform:translate(0,0);transform:translate(0,0)}}.hvr-wobble-to-top-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-wobble-to-top-right:active,.hvr-wobble-to-top-right:focus,.hvr-wobble-to-top-right:hover{-webkit-animation-name:hvr-wobble-to-top-right;animation-name:hvr-wobble-to-top-right;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-top{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}@keyframes hvr-wobble-top{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}.hvr-wobble-top{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transform-origin:0 100%;transform-origin:0 100%}.hvr-wobble-top:active,.hvr-wobble-top:focus,.hvr-wobble-top:hover{-webkit-animation-name:hvr-wobble-top;animation-name:hvr-wobble-top;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-bottom{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}@keyframes hvr-wobble-bottom{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}.hvr-wobble-bottom{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transform-origin:100% 0;transform-origin:100% 0}.hvr-wobble-bottom:active,.hvr-wobble-bottom:focus,.hvr-wobble-bottom:hover{-webkit-animation-name:hvr-wobble-bottom;animation-name:hvr-wobble-bottom;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-wobble-skew{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}@keyframes hvr-wobble-skew{16.65%{-webkit-transform:skew(-12deg);transform:skew(-12deg)}33.3%{-webkit-transform:skew(10deg);transform:skew(10deg)}49.95%{-webkit-transform:skew(-6deg);transform:skew(-6deg)}66.6%{-webkit-transform:skew(4deg);transform:skew(4deg)}83.25%{-webkit-transform:skew(-2deg);transform:skew(-2deg)}100%{-webkit-transform:skew(0);transform:skew(0)}}.hvr-wobble-skew{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-wobble-skew:active,.hvr-wobble-skew:focus,.hvr-wobble-skew:hover{-webkit-animation-name:hvr-wobble-skew;animation-name:hvr-wobble-skew;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-buzz{50%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}100%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}}@keyframes hvr-buzz{50%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}100%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}}.hvr-buzz{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-buzz:active,.hvr-buzz:focus,.hvr-buzz:hover{-webkit-animation-name:hvr-buzz;animation-name:hvr-buzz;-webkit-animation-duration:.15s;animation-duration:.15s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes hvr-buzz-out{10%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}20%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}30%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}40%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}50%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}60%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}70%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}80%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}90%{-webkit-transform:translateX(1px) rotate(0);transform:translateX(1px) rotate(0)}100%{-webkit-transform:translateX(-1px) rotate(0);transform:translateX(-1px) rotate(0)}}@keyframes hvr-buzz-out{10%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}20%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}30%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}40%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}50%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}60%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}70%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}80%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}90%{-webkit-transform:translateX(1px) rotate(0);transform:translateX(1px) rotate(0)}100%{-webkit-transform:translateX(-1px) rotate(0);transform:translateX(-1px) rotate(0)}}.hvr-buzz-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale}.hvr-buzz-out:active,.hvr-buzz-out:focus,.hvr-buzz-out:hover{-webkit-animation-name:hvr-buzz-out;animation-name:hvr-buzz-out;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}.hvr-fade{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;overflow:hidden;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:color,background-color;transition-property:color,background-color}.hvr-fade:active,.hvr-fade:focus,.hvr-fade:hover{background-color:#2098d1;color:#fff}@-webkit-keyframes hvr-back-pulse{50%{background-color:rgba(32,152,209,.75)}}@keyframes hvr-back-pulse{50%{background-color:rgba(32,152,209,.75)}}.hvr-back-pulse{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;overflow:hidden;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-property:color,background-color;transition-property:color,background-color}.hvr-back-pulse:active,.hvr-back-pulse:focus,.hvr-back-pulse:hover{-webkit-animation-name:hvr-back-pulse;animation-name:hvr-back-pulse;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-delay:.5s;animation-delay:.5s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;background-color:#2098d1;background-color:#2098d1;color:#fff}.hvr-sweep-to-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-sweep-to-right:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-sweep-to-right:active,.hvr-sweep-to-right:focus,.hvr-sweep-to-right:hover{color:#fff}.hvr-sweep-to-right:active:before,.hvr-sweep-to-right:focus:before,.hvr-sweep-to-right:hover:before{-webkit-transform:scaleX(1);transform:scaleX(1)}.hvr-sweep-to-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-sweep-to-left:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-sweep-to-left:active,.hvr-sweep-to-left:focus,.hvr-sweep-to-left:hover{color:#fff}.hvr-sweep-to-left:active:before,.hvr-sweep-to-left:focus:before,.hvr-sweep-to-left:hover:before{-webkit-transform:scaleX(1);transform:scaleX(1)}.hvr-sweep-to-bottom{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-sweep-to-bottom:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-sweep-to-bottom:active,.hvr-sweep-to-bottom:focus,.hvr-sweep-to-bottom:hover{color:#fff}.hvr-sweep-to-bottom:active:before,.hvr-sweep-to-bottom:focus:before,.hvr-sweep-to-bottom:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1)}.hvr-sweep-to-top{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-sweep-to-top:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-sweep-to-top:active,.hvr-sweep-to-top:focus,.hvr-sweep-to-top:hover{color:#fff}.hvr-sweep-to-top:active:before,.hvr-sweep-to-top:focus:before,.hvr-sweep-to-top:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1)}.hvr-bounce-to-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-to-right:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-bounce-to-right:active,.hvr-bounce-to-right:focus,.hvr-bounce-to-right:hover{color:#fff}.hvr-bounce-to-right:active:before,.hvr-bounce-to-right:focus:before,.hvr-bounce-to-right:hover:before{-webkit-transform:scaleX(1);transform:scaleX(1);-webkit-transition-timing-function:cubic-bezier(0.52,1.64,.37,.66);transition-timing-function:cubic-bezier(0.52,1.64,.37,.66)}.hvr-bounce-to-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-to-left:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-bounce-to-left:active,.hvr-bounce-to-left:focus,.hvr-bounce-to-left:hover{color:#fff}.hvr-bounce-to-left:active:before,.hvr-bounce-to-left:focus:before,.hvr-bounce-to-left:hover:before{-webkit-transform:scaleX(1);transform:scaleX(1);-webkit-transition-timing-function:cubic-bezier(0.52,1.64,.37,.66);transition-timing-function:cubic-bezier(0.52,1.64,.37,.66)}.hvr-bounce-to-bottom{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-to-bottom:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-bounce-to-bottom:active,.hvr-bounce-to-bottom:focus,.hvr-bounce-to-bottom:hover{color:#fff}.hvr-bounce-to-bottom:active:before,.hvr-bounce-to-bottom:focus:before,.hvr-bounce-to-bottom:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1);-webkit-transition-timing-function:cubic-bezier(0.52,1.64,.37,.66);transition-timing-function:cubic-bezier(0.52,1.64,.37,.66)}.hvr-bounce-to-top{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.5s;transition-duration:.5s}.hvr-bounce-to-top:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-bounce-to-top:active,.hvr-bounce-to-top:focus,.hvr-bounce-to-top:hover{color:#fff}.hvr-bounce-to-top:active:before,.hvr-bounce-to-top:focus:before,.hvr-bounce-to-top:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1);-webkit-transition-timing-function:cubic-bezier(0.52,1.64,.37,.66);transition-timing-function:cubic-bezier(0.52,1.64,.37,.66)}.hvr-radial-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden;background:#e1e1e1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-radial-out:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;border-radius:100%;-webkit-transform:scale(0);transform:scale(0);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-radial-out:active,.hvr-radial-out:focus,.hvr-radial-out:hover{color:#fff}.hvr-radial-out:active:before,.hvr-radial-out:focus:before,.hvr-radial-out:hover:before{-webkit-transform:scale(2);transform:scale(2)}.hvr-radial-in{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden;background:#2098d1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-radial-in:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#e1e1e1;border-radius:100%;-webkit-transform:scale(2);transform:scale(2);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-radial-in:active,.hvr-radial-in:focus,.hvr-radial-in:hover{color:#fff}.hvr-radial-in:active:before,.hvr-radial-in:focus:before,.hvr-radial-in:hover:before{-webkit-transform:scale(0);transform:scale(0)}.hvr-rectangle-in{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#2098d1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-rectangle-in:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#e1e1e1;-webkit-transform:scale(1);transform:scale(1);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-rectangle-in:active,.hvr-rectangle-in:focus,.hvr-rectangle-in:hover{color:#fff}.hvr-rectangle-in:active:before,.hvr-rectangle-in:focus:before,.hvr-rectangle-in:hover:before{-webkit-transform:scale(0);transform:scale(0)}.hvr-rectangle-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#e1e1e1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-rectangle-out:before{content:"";position:absolute;z-index:-1;top:0;left:0;right:0;bottom:0;background:#2098d1;-webkit-transform:scale(0);transform:scale(0);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-rectangle-out:active,.hvr-rectangle-out:focus,.hvr-rectangle-out:hover{color:#fff}.hvr-rectangle-out:active:before,.hvr-rectangle-out:focus:before,.hvr-rectangle-out:hover:before{-webkit-transform:scale(1);transform:scale(1)}.hvr-shutter-in-horizontal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#2098d1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-shutter-in-horizontal:before{content:"";position:absolute;z-index:-1;top:0;bottom:0;left:0;right:0;background:#e1e1e1;-webkit-transform:scaleX(1);transform:scaleX(1);-webkit-transform-origin:50%;transform-origin:50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-shutter-in-horizontal:active,.hvr-shutter-in-horizontal:focus,.hvr-shutter-in-horizontal:hover{color:#fff}.hvr-shutter-in-horizontal:active:before,.hvr-shutter-in-horizontal:focus:before,.hvr-shutter-in-horizontal:hover:before{-webkit-transform:scaleX(0);transform:scaleX(0)}.hvr-shutter-out-horizontal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#e1e1e1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-shutter-out-horizontal:before{content:"";position:absolute;z-index:-1;top:0;bottom:0;left:0;right:0;background:#2098d1;-webkit-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:50%;transform-origin:50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-shutter-out-horizontal:active,.hvr-shutter-out-horizontal:focus,.hvr-shutter-out-horizontal:hover{color:#fff}.hvr-shutter-out-horizontal:active:before,.hvr-shutter-out-horizontal:focus:before,.hvr-shutter-out-horizontal:hover:before{-webkit-transform:scaleX(1);transform:scaleX(1)}.hvr-shutter-in-vertical{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#2098d1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-shutter-in-vertical:before{content:"";position:absolute;z-index:-1;top:0;bottom:0;left:0;right:0;background:#e1e1e1;-webkit-transform:scaleY(1);transform:scaleY(1);-webkit-transform-origin:50%;transform-origin:50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-shutter-in-vertical:active,.hvr-shutter-in-vertical:focus,.hvr-shutter-in-vertical:hover{color:#fff}.hvr-shutter-in-vertical:active:before,.hvr-shutter-in-vertical:focus:before,.hvr-shutter-in-vertical:hover:before{-webkit-transform:scaleY(0);transform:scaleY(0)}.hvr-shutter-out-vertical{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;background:#e1e1e1;-webkit-transition-property:color;transition-property:color;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-shutter-out-vertical:before{content:"";position:absolute;z-index:-1;top:0;bottom:0;left:0;right:0;background:#2098d1;-webkit-transform:scaleY(0);transform:scaleY(0);-webkit-transform-origin:50%;transform-origin:50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-shutter-out-vertical:active,.hvr-shutter-out-vertical:focus,.hvr-shutter-out-vertical:hover{color:#fff}.hvr-shutter-out-vertical:active:before,.hvr-shutter-out-vertical:focus:before,.hvr-shutter-out-vertical:hover:before{-webkit-transform:scaleY(1);transform:scaleY(1)}.hvr-border-fade{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow;transition-property:box-shadow;box-shadow:inset 0 0 0 4px #e1e1e1,0 0 1px rgba(0,0,0,0)}.hvr-border-fade:active,.hvr-border-fade:focus,.hvr-border-fade:hover{box-shadow:inset 0 0 0 4px #2098d1,0 0 1px rgba(0,0,0,0)}.hvr-hollow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:background;transition-property:background;box-shadow:inset 0 0 0 4px #e1e1e1,0 0 1px rgba(0,0,0,0)}.hvr-hollow:active,.hvr-hollow:focus,.hvr-hollow:hover{background:0 0}.hvr-trim{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-trim:before{content:'';position:absolute;border:#fff solid 4px;top:4px;left:4px;right:4px;bottom:4px;opacity:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:opacity;transition-property:opacity}.hvr-trim:active:before,.hvr-trim:focus:before,.hvr-trim:hover:before{opacity:1}@-webkit-keyframes hvr-ripple-out{100%{top:-12px;right:-12px;bottom:-12px;left:-12px;opacity:0}}@keyframes hvr-ripple-out{100%{top:-12px;right:-12px;bottom:-12px;left:-12px;opacity:0}}.hvr-ripple-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-ripple-out:before{content:'';position:absolute;border:#e1e1e1 solid 6px;top:0;right:0;bottom:0;left:0;-webkit-animation-duration:1s;animation-duration:1s}.hvr-ripple-out:active:before,.hvr-ripple-out:focus:before,.hvr-ripple-out:hover:before{-webkit-animation-name:hvr-ripple-out;animation-name:hvr-ripple-out}@-webkit-keyframes hvr-ripple-in{100%{top:0;right:0;bottom:0;left:0;opacity:1}}@keyframes hvr-ripple-in{100%{top:0;right:0;bottom:0;left:0;opacity:1}}.hvr-ripple-in{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-ripple-in:before{content:'';position:absolute;border:#e1e1e1 solid 4px;top:-12px;right:-12px;bottom:-12px;left:-12px;opacity:0;-webkit-animation-duration:1s;animation-duration:1s}.hvr-ripple-in:active:before,.hvr-ripple-in:focus:before,.hvr-ripple-in:hover:before{-webkit-animation-name:hvr-ripple-in;animation-name:hvr-ripple-in}.hvr-outline-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-outline-out:before{content:'';position:absolute;border:#e1e1e1 solid 4px;top:0;right:0;bottom:0;left:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:top,right,bottom,left;transition-property:top,right,bottom,left}.hvr-outline-out:active:before,.hvr-outline-out:focus:before,.hvr-outline-out:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px}.hvr-outline-in{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-outline-in:before{pointer-events:none;content:'';position:absolute;border:#e1e1e1 solid 4px;top:-16px;right:-16px;bottom:-16px;left:-16px;opacity:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:top,right,bottom,left;transition-property:top,right,bottom,left}.hvr-outline-in:active:before,.hvr-outline-in:focus:before,.hvr-outline-in:hover:before{top:-8px;right:-8px;bottom:-8px;left:-8px;opacity:1}.hvr-round-corners{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:border-radius;transition-property:border-radius}.hvr-round-corners:active,.hvr-round-corners:focus,.hvr-round-corners:hover{border-radius:1em}.hvr-underline-from-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-underline-from-left:before{content:"";position:absolute;z-index:-1;left:0;right:100%;bottom:0;background:#2098d1;height:4px;-webkit-transition-property:right;transition-property:right;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-underline-from-left:active:before,.hvr-underline-from-left:focus:before,.hvr-underline-from-left:hover:before{right:0}.hvr-underline-from-center{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-underline-from-center:before{content:"";position:absolute;z-index:-1;left:50%;right:50%;bottom:0;background:#2098d1;height:4px;-webkit-transition-property:left,right;transition-property:left,right;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-underline-from-center:active:before,.hvr-underline-from-center:focus:before,.hvr-underline-from-center:hover:before{left:0;right:0}.hvr-underline-from-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-underline-from-right:before{content:"";position:absolute;z-index:-1;left:100%;right:0;bottom:0;background:#2098d1;height:4px;-webkit-transition-property:left;transition-property:left;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-underline-from-right:active:before,.hvr-underline-from-right:focus:before,.hvr-underline-from-right:hover:before{left:0}.hvr-overline-from-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-overline-from-left:before{content:"";position:absolute;z-index:-1;left:0;right:100%;top:0;background:#2098d1;height:4px;-webkit-transition-property:right;transition-property:right;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-overline-from-left:active:before,.hvr-overline-from-left:focus:before,.hvr-overline-from-left:hover:before{right:0}.hvr-overline-from-center{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-overline-from-center:before{content:"";position:absolute;z-index:-1;left:50%;right:50%;top:0;background:#2098d1;height:4px;-webkit-transition-property:left,right;transition-property:left,right;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-overline-from-center:active:before,.hvr-overline-from-center:focus:before,.hvr-overline-from-center:hover:before{left:0;right:0}.hvr-overline-from-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-overline-from-right:before{content:"";position:absolute;z-index:-1;left:100%;right:0;top:0;background:#2098d1;height:4px;-webkit-transition-property:left;transition-property:left;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-overline-from-right:active:before,.hvr-overline-from-right:focus:before,.hvr-overline-from-right:hover:before{left:0}.hvr-reveal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-reveal:before{content:"";position:absolute;z-index:-1;left:0;right:0;top:0;bottom:0;border-color:#2098d1;border-style:solid;border-width:0;-webkit-transition-property:border-width;transition-property:border-width;-webkit-transition-duration:.1s;transition-duration:.1s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-reveal:active:before,.hvr-reveal:focus:before,.hvr-reveal:hover:before{-webkit-transform:translateY(0);transform:translateY(0);border-width:4px}.hvr-underline-reveal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-underline-reveal:before{content:"";position:absolute;z-index:-1;left:0;right:0;bottom:0;background:#2098d1;height:4px;-webkit-transform:translateY(4px);transform:translateY(4px);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-underline-reveal:active:before,.hvr-underline-reveal:focus:before,.hvr-underline-reveal:hover:before{-webkit-transform:translateY(0);transform:translateY(0)}.hvr-overline-reveal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;overflow:hidden}.hvr-overline-reveal:before{content:"";position:absolute;z-index:-1;left:0;right:0;top:0;background:#2098d1;height:4px;-webkit-transform:translateY(-4px);transform:translateY(-4px);-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-overline-reveal:active:before,.hvr-overline-reveal:focus:before,.hvr-overline-reveal:hover:before{-webkit-transform:translateY(0);transform:translateY(0)}.hvr-glow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow;transition-property:box-shadow}.hvr-glow:active,.hvr-glow:focus,.hvr-glow:hover{box-shadow:0 0 8px rgba(0,0,0,.6)}.hvr-shadow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow;transition-property:box-shadow}.hvr-shadow:active,.hvr-shadow:focus,.hvr-shadow:hover{box-shadow:0 10px 10px -10px rgba(0,0,0,.5)}.hvr-grow-shadow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow,transform;transition-property:box-shadow,transform}.hvr-grow-shadow:active,.hvr-grow-shadow:focus,.hvr-grow-shadow:hover{box-shadow:0 10px 10px -10px rgba(0,0,0,.5);-webkit-transform:scale(1.1);transform:scale(1.1)}.hvr-box-shadow-outset{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow;transition-property:box-shadow}.hvr-box-shadow-outset:active,.hvr-box-shadow-outset:focus,.hvr-box-shadow-outset:hover{box-shadow:2px 2px 2px rgba(0,0,0,.6)}.hvr-box-shadow-inset{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:box-shadow;transition-property:box-shadow;box-shadow:inset 0 0 0 rgba(0,0,0,.6),0 0 1px rgba(0,0,0,0)}.hvr-box-shadow-inset:active,.hvr-box-shadow-inset:focus,.hvr-box-shadow-inset:hover{box-shadow:inset 2px 2px 2px rgba(0,0,0,.6),0 0 1px rgba(0,0,0,0)}.hvr-float-shadow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-float-shadow:before{pointer-events:none;position:absolute;z-index:-1;content:'';top:100%;left:5%;height:10px;width:90%;opacity:0;background:-webkit-radial-gradient(center,ellipse,rgba(0,0,0,.35) 0,rgba(0,0,0,0) 80%);background:radial-gradient(ellipse at center,rgba(0,0,0,.35) 0,rgba(0,0,0,0) 80%);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform,opacity;transition-property:transform,opacity}.hvr-float-shadow:active,.hvr-float-shadow:focus,.hvr-float-shadow:hover{-webkit-transform:translateY(-5px);transform:translateY(-5px)}.hvr-float-shadow:active:before,.hvr-float-shadow:focus:before,.hvr-float-shadow:hover:before{opacity:1;-webkit-transform:translateY(5px);transform:translateY(5px)}.hvr-shadow-radial{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-shadow-radial:after,.hvr-shadow-radial:before{pointer-events:none;position:absolute;content:'';left:0;width:100%;box-sizing:border-box;height:5px;opacity:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:opacity;transition-property:opacity}.hvr-shadow-radial:before{bottom:100%;background:-webkit-radial-gradient(50% 150%,ellipse,rgba(0,0,0,.6) 0,rgba(0,0,0,0) 80%);background:radial-gradient(ellipse at 50% 150%,rgba(0,0,0,.6) 0,rgba(0,0,0,0) 80%)}.hvr-shadow-radial:after{top:100%;background:-webkit-radial-gradient(50% -50%,ellipse,rgba(0,0,0,.6) 0,rgba(0,0,0,0) 80%);background:radial-gradient(ellipse at 50% -50%,rgba(0,0,0,.6) 0,rgba(0,0,0,0) 80%)}.hvr-shadow-radial:active:after,.hvr-shadow-radial:active:before,.hvr-shadow-radial:focus:after,.hvr-shadow-radial:focus:before,.hvr-shadow-radial:hover:after,.hvr-shadow-radial:hover:before{opacity:1}.hvr-bubble-top{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-bubble-top:before{pointer-events:none;position:absolute;z-index:-1;content:'';border-style:solid;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;left:calc(50% - 10px);top:0;border-width:0 10px 10px;border-color:transparent transparent #e1e1e1}.hvr-bubble-top:active:before,.hvr-bubble-top:focus:before,.hvr-bubble-top:hover:before{-webkit-transform:translateY(-10px);transform:translateY(-10px)}.hvr-bubble-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-bubble-right:before{pointer-events:none;position:absolute;z-index:-1;content:'';border-style:solid;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;top:calc(50% - 10px);right:0;border-width:10px 0 10px 10px;border-color:transparent transparent transparent #e1e1e1}.hvr-bubble-right:active:before,.hvr-bubble-right:focus:before,.hvr-bubble-right:hover:before{-webkit-transform:translateX(10px);transform:translateX(10px)}.hvr-bubble-bottom{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-bubble-bottom:before{pointer-events:none;position:absolute;z-index:-1;content:'';border-style:solid;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;left:calc(50% - 10px);bottom:0;border-width:10px 10px 0;border-color:#e1e1e1 transparent transparent}.hvr-bubble-bottom:active:before,.hvr-bubble-bottom:focus:before,.hvr-bubble-bottom:hover:before{-webkit-transform:translateY(10px);transform:translateY(10px)}.hvr-bubble-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-bubble-left:before{pointer-events:none;position:absolute;z-index:-1;content:'';border-style:solid;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;top:calc(50% - 10px);left:0;border-width:10px 10px 10px 0;border-color:transparent #e1e1e1 transparent transparent}.hvr-bubble-left:active:before,.hvr-bubble-left:focus:before,.hvr-bubble-left:hover:before{-webkit-transform:translateX(-10px);transform:translateX(-10px)}.hvr-bubble-float-top{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-top:before{position:absolute;z-index:-1;content:'';left:calc(50% - 10px);top:0;border-style:solid;border-width:0 10px 10px;border-color:transparent transparent #e1e1e1;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-top:active,.hvr-bubble-float-top:focus,.hvr-bubble-float-top:hover{-webkit-transform:translateY(10px);transform:translateY(10px)}.hvr-bubble-float-top:active:before,.hvr-bubble-float-top:focus:before,.hvr-bubble-float-top:hover:before{-webkit-transform:translateY(-10px);transform:translateY(-10px)}.hvr-bubble-float-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-right:before{position:absolute;z-index:-1;top:calc(50% - 10px);right:0;content:'';border-style:solid;border-width:10px 0 10px 10px;border-color:transparent transparent transparent #e1e1e1;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-right:active,.hvr-bubble-float-right:focus,.hvr-bubble-float-right:hover{-webkit-transform:translateX(-10px);transform:translateX(-10px)}.hvr-bubble-float-right:active:before,.hvr-bubble-float-right:focus:before,.hvr-bubble-float-right:hover:before{-webkit-transform:translateX(10px);transform:translateX(10px)}.hvr-bubble-float-bottom{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-bottom:before{position:absolute;z-index:-1;content:'';left:calc(50% - 10px);bottom:0;border-style:solid;border-width:10px 10px 0;border-color:#e1e1e1 transparent transparent;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-bottom:active,.hvr-bubble-float-bottom:focus,.hvr-bubble-float-bottom:hover{-webkit-transform:translateY(-10px);transform:translateY(-10px)}.hvr-bubble-float-bottom:active:before,.hvr-bubble-float-bottom:focus:before,.hvr-bubble-float-bottom:hover:before{-webkit-transform:translateY(10px);transform:translateY(10px)}.hvr-bubble-float-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-left:before{position:absolute;z-index:-1;content:'';top:calc(50% - 10px);left:0;border-style:solid;border-width:10px 10px 10px 0;border-color:transparent #e1e1e1 transparent transparent;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform}.hvr-bubble-float-left:active,.hvr-bubble-float-left:focus,.hvr-bubble-float-left:hover{-webkit-transform:translateX(10px);transform:translateX(10px)}.hvr-bubble-float-left:active:before,.hvr-bubble-float-left:focus:before,.hvr-bubble-float-left:hover:before{-webkit-transform:translateX(-10px);transform:translateX(-10px)}.hvr-icon-back{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-left:2.2em;-webkit-transition-duration:.1s;transition-duration:.1s}.hvr-icon-back:before{content:"\f137";position:absolute;left:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.1s;transition-duration:.1s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-back:active:before,.hvr-icon-back:focus:before,.hvr-icon-back:hover:before{-webkit-transform:translateX(-4px);transform:translateX(-4px)}.hvr-icon-forward{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.1s;transition-duration:.1s}.hvr-icon-forward:before{content:"\f138";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.1s;transition-duration:.1s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-forward:active:before,.hvr-icon-forward:focus:before,.hvr-icon-forward:hover:before{-webkit-transform:translateX(4px);transform:translateX(4px)}@-webkit-keyframes hvr-icon-down{0%,100%,50%{-webkit-transform:translateY(0);transform:translateY(0)}25%,75%{-webkit-transform:translateY(6px);transform:translateY(6px)}}@keyframes hvr-icon-down{0%,100%,50%{-webkit-transform:translateY(0);transform:translateY(0)}25%,75%{-webkit-transform:translateY(6px);transform:translateY(6px)}}.hvr-icon-down{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-down:before{content:"\f01a";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-down:active:before,.hvr-icon-down:focus:before,.hvr-icon-down:hover:before{-webkit-animation-name:hvr-icon-down;animation-name:hvr-icon-down;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}@-webkit-keyframes hvr-icon-up{0%,100%,50%{-webkit-transform:translateY(0);transform:translateY(0)}25%,75%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}@keyframes hvr-icon-up{0%,100%,50%{-webkit-transform:translateY(0);transform:translateY(0)}25%,75%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}.hvr-icon-up{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-up:before{content:"\f01b";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-up:active:before,.hvr-icon-up:focus:before,.hvr-icon-up:hover:before{-webkit-animation-name:hvr-icon-up;animation-name:hvr-icon-up;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}.hvr-icon-spin{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-spin:before{content:"\f021";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transition-duration:1s;transition-duration:1s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-in-out;transition-timing-function:ease-in-out}.hvr-icon-spin:active:before,.hvr-icon-spin:focus:before,.hvr-icon-spin:hover:before{-webkit-transform:rotate(360deg);transform:rotate(360deg)}@-webkit-keyframes hvr-icon-drop{0%{opacity:0}50%{opacity:0;-webkit-transform:translateY(-100%);transform:translateY(-100%)}100%,51%{opacity:1}}@keyframes hvr-icon-drop{0%{opacity:0}50%{opacity:0;-webkit-transform:translateY(-100%);transform:translateY(-100%)}100%,51%{opacity:1}}.hvr-icon-drop{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-drop:before{content:"\f041";position:absolute;right:1em;opacity:1;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-drop:active:before,.hvr-icon-drop:focus:before,.hvr-icon-drop:hover:before{opacity:0;-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-animation-name:hvr-icon-drop;animation-name:hvr-icon-drop;-webkit-animation-duration:.5s;animation-duration:.5s;-webkit-animation-delay:.3s;animation-delay:.3s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-timing-function:cubic-bezier(0.52,1.64,.37,.66);animation-timing-function:cubic-bezier(0.52,1.64,.37,.66)}.hvr-icon-fade{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-fade:before{content:"\f00c";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.5s;transition-duration:.5s;-webkit-transition-property:color;transition-property:color}.hvr-icon-fade:active:before,.hvr-icon-fade:focus:before,.hvr-icon-fade:hover:before{color:#0F9E5E}@-webkit-keyframes hvr-icon-float-away{0%{opacity:1}100%{opacity:0;-webkit-transform:translateY(-1em);transform:translateY(-1em)}}@keyframes hvr-icon-float-away{0%{opacity:1}100%{opacity:0;-webkit-transform:translateY(-1em);transform:translateY(-1em)}}.hvr-icon-float-away{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-float-away:after,.hvr-icon-float-away:before{content:"\f055";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome}.hvr-icon-float-away:after{opacity:0;-webkit-animation-duration:.5s;animation-duration:.5s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}.hvr-icon-float-away:active:after,.hvr-icon-float-away:focus:after,.hvr-icon-float-away:hover:after{-webkit-animation-name:hvr-icon-float-away;animation-name:hvr-icon-float-away;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}@-webkit-keyframes hvr-icon-sink-away{0%{opacity:1}100%{opacity:0;-webkit-transform:translateY(1em);transform:translateY(1em)}}@keyframes hvr-icon-sink-away{0%{opacity:1}100%{opacity:0;-webkit-transform:translateY(1em);transform:translateY(1em)}}.hvr-icon-sink-away{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-sink-away:after,.hvr-icon-sink-away:before{content:"\f056";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-sink-away:after{opacity:0;-webkit-animation-duration:.5s;animation-duration:.5s;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards}.hvr-icon-sink-away:active:after,.hvr-icon-sink-away:focus:after,.hvr-icon-sink-away:hover:after{-webkit-animation-name:hvr-icon-sink-away;animation-name:hvr-icon-sink-away;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}.hvr-icon-grow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-grow:before{content:"\f118";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-grow:active:before,.hvr-icon-grow:focus:before,.hvr-icon-grow:hover:before{-webkit-transform:scale(1.3) translateZ(0);transform:scale(1.3) translateZ(0)}.hvr-icon-shrink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-shrink:before{content:"\f119";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-shrink:active:before,.hvr-icon-shrink:focus:before,.hvr-icon-shrink:hover:before{-webkit-transform:scale(0.8);transform:scale(0.8)}@-webkit-keyframes hvr-icon-pulse{25%{-webkit-transform:scale(1.3);transform:scale(1.3)}75%{-webkit-transform:scale(0.8);transform:scale(0.8)}}@keyframes hvr-icon-pulse{25%{-webkit-transform:scale(1.3);transform:scale(1.3)}75%{-webkit-transform:scale(0.8);transform:scale(0.8)}}.hvr-icon-pulse{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-pulse:before{content:"\f015";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-pulse:active:before,.hvr-icon-pulse:focus:before,.hvr-icon-pulse:hover:before{-webkit-animation-name:hvr-icon-pulse;animation-name:hvr-icon-pulse;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes hvr-icon-pulse-grow{to{-webkit-transform:scale(1.3);transform:scale(1.3)}}@keyframes hvr-icon-pulse-grow{to{-webkit-transform:scale(1.3);transform:scale(1.3)}}.hvr-icon-pulse-grow{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-pulse-grow:before{content:"\f015";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-pulse-grow:active:before,.hvr-icon-pulse-grow:focus:before,.hvr-icon-pulse-grow:hover:before{-webkit-animation-name:hvr-icon-pulse-grow;animation-name:hvr-icon-pulse-grow;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-direction:alternate;animation-direction:alternate}@-webkit-keyframes hvr-icon-pulse-shrink{to{-webkit-transform:scale(0.8);transform:scale(0.8)}}@keyframes hvr-icon-pulse-shrink{to{-webkit-transform:scale(0.8);transform:scale(0.8)}}.hvr-icon-pulse-shrink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em}.hvr-icon-pulse-shrink:before{content:"\f015";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-pulse-shrink:active:before,.hvr-icon-pulse-shrink:focus:before,.hvr-icon-pulse-shrink:hover:before{-webkit-animation-name:hvr-icon-pulse-shrink;animation-name:hvr-icon-pulse-shrink;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-direction:alternate;animation-direction:alternate}@-webkit-keyframes hvr-icon-push{50%{-webkit-transform:scale(0.5);transform:scale(0.5)}}@keyframes hvr-icon-push{50%{-webkit-transform:scale(0.5);transform:scale(0.5)}}.hvr-icon-push{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-push:before{content:"\f006";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-push:active:before,.hvr-icon-push:focus:before,.hvr-icon-push:hover:before{-webkit-animation-name:hvr-icon-push;animation-name:hvr-icon-push;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-icon-pop{50%{-webkit-transform:scale(1.5);transform:scale(1.5)}}@keyframes hvr-icon-pop{50%{-webkit-transform:scale(1.5);transform:scale(1.5)}}.hvr-icon-pop{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-pop:before{content:"\f005";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-pop:active:before,.hvr-icon-pop:focus:before,.hvr-icon-pop:hover:before{-webkit-animation-name:hvr-icon-pop;animation-name:hvr-icon-pop;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}.hvr-icon-bounce{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-bounce:before{content:"\f087";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-bounce:active:before,.hvr-icon-bounce:focus:before,.hvr-icon-bounce:hover:before{-webkit-transform:scale(1.5);transform:scale(1.5);-webkit-transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36);transition-timing-function:cubic-bezier(0.47,2.02,.31,-.36)}.hvr-icon-rotate{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-rotate:before{content:"\f0c6";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-rotate:active:before,.hvr-icon-rotate:focus:before,.hvr-icon-rotate:hover:before{-webkit-transform:rotate(20deg);transform:rotate(20deg)}.hvr-icon-grow-rotate{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-grow-rotate:before{content:"\f095";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-grow-rotate:active:before,.hvr-icon-grow-rotate:focus:before,.hvr-icon-grow-rotate:hover:before{-webkit-transform:scale(1.5) rotate(12deg);transform:scale(1.5) rotate(12deg)}.hvr-icon-float{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-float:before{content:"\f01b";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-float:active:before,.hvr-icon-float:focus:before,.hvr-icon-float:hover:before{-webkit-transform:translateY(-4px);transform:translateY(-4px)}.hvr-icon-sink{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-sink:before{content:"\f01a";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out}.hvr-icon-sink:active:before,.hvr-icon-sink:focus:before,.hvr-icon-sink:hover:before{-webkit-transform:translateY(4px);transform:translateY(4px)}@-webkit-keyframes hvr-icon-bob{0%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}50%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}100%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}@keyframes hvr-icon-bob{0%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}50%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}100%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}@-webkit-keyframes hvr-icon-bob-float{100%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}@keyframes hvr-icon-bob-float{100%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}}.hvr-icon-bob{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-bob:before{content:"\f077";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-bob:active:before,.hvr-icon-bob:focus:before,.hvr-icon-bob:hover:before{-webkit-animation-name:hvr-icon-bob-float,hvr-icon-bob;animation-name:hvr-icon-bob-float,hvr-icon-bob;-webkit-animation-duration:.3s,1.5s;animation-duration:.3s,1.5s;-webkit-animation-delay:0s,.3s;animation-delay:0s,.3s;-webkit-animation-timing-function:ease-out,ease-in-out;animation-timing-function:ease-out,ease-in-out;-webkit-animation-iteration-count:1,infinite;animation-iteration-count:1,infinite;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-direction:normal,alternate;animation-direction:normal,alternate}@-webkit-keyframes hvr-icon-hang{0%{-webkit-transform:translateY(6px);transform:translateY(6px)}50%{-webkit-transform:translateY(2px);transform:translateY(2px)}100%{-webkit-transform:translateY(6px);transform:translateY(6px)}}@keyframes hvr-icon-hang{0%{-webkit-transform:translateY(6px);transform:translateY(6px)}50%{-webkit-transform:translateY(2px);transform:translateY(2px)}100%{-webkit-transform:translateY(6px);transform:translateY(6px)}}@-webkit-keyframes hvr-icon-hang-sink{100%{-webkit-transform:translateY(6px);transform:translateY(6px)}}@keyframes hvr-icon-hang-sink{100%{-webkit-transform:translateY(6px);transform:translateY(6px)}}.hvr-icon-hang{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-hang:before{content:"\f078";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-hang:active:before,.hvr-icon-hang:focus:before,.hvr-icon-hang:hover:before{-webkit-animation-name:hvr-icon-hang-sink,hvr-icon-hang;animation-name:hvr-icon-hang-sink,hvr-icon-hang;-webkit-animation-duration:.3s,1.5s;animation-duration:.3s,1.5s;-webkit-animation-delay:0s,.3s;animation-delay:0s,.3s;-webkit-animation-timing-function:ease-out,ease-in-out;animation-timing-function:ease-out,ease-in-out;-webkit-animation-iteration-count:1,infinite;animation-iteration-count:1,infinite;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;-webkit-animation-direction:normal,alternate;animation-direction:normal,alternate}@-webkit-keyframes hvr-icon-wobble-horizontal{16.65%{-webkit-transform:translateX(6px);transform:translateX(6px)}33.3%{-webkit-transform:translateX(-5px);transform:translateX(-5px)}49.95%{-webkit-transform:translateX(4px);transform:translateX(4px)}66.6%{-webkit-transform:translateX(-2px);transform:translateX(-2px)}83.25%{-webkit-transform:translateX(1px);transform:translateX(1px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes hvr-icon-wobble-horizontal{16.65%{-webkit-transform:translateX(6px);transform:translateX(6px)}33.3%{-webkit-transform:translateX(-5px);transform:translateX(-5px)}49.95%{-webkit-transform:translateX(4px);transform:translateX(4px)}66.6%{-webkit-transform:translateX(-2px);transform:translateX(-2px)}83.25%{-webkit-transform:translateX(1px);transform:translateX(1px)}100%{-webkit-transform:translateX(0);transform:translateX(0)}}.hvr-icon-wobble-horizontal{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-wobble-horizontal:before{content:"\f061";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-wobble-horizontal:active:before,.hvr-icon-wobble-horizontal:focus:before,.hvr-icon-wobble-horizontal:hover:before{-webkit-animation-name:hvr-icon-wobble-horizontal;animation-name:hvr-icon-wobble-horizontal;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-icon-wobble-vertical{16.65%{-webkit-transform:translateY(6px);transform:translateY(6px)}33.3%{-webkit-transform:translateY(-5px);transform:translateY(-5px)}49.95%{-webkit-transform:translateY(4px);transform:translateY(4px)}66.6%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}83.25%{-webkit-transform:translateY(1px);transform:translateY(1px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes hvr-icon-wobble-vertical{16.65%{-webkit-transform:translateY(6px);transform:translateY(6px)}33.3%{-webkit-transform:translateY(-5px);transform:translateY(-5px)}49.95%{-webkit-transform:translateY(4px);transform:translateY(4px)}66.6%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}83.25%{-webkit-transform:translateY(1px);transform:translateY(1px)}100%{-webkit-transform:translateY(0);transform:translateY(0)}}.hvr-icon-wobble-vertical{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-wobble-vertical:before{content:"\f062";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-wobble-vertical:active:before,.hvr-icon-wobble-vertical:focus:before,.hvr-icon-wobble-vertical:hover:before{-webkit-animation-name:hvr-icon-wobble-vertical;animation-name:hvr-icon-wobble-vertical;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out;-webkit-animation-iteration-count:1;animation-iteration-count:1}@-webkit-keyframes hvr-icon-buzz{50%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}100%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}}@keyframes hvr-icon-buzz{50%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}100%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}}.hvr-icon-buzz{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-buzz:before{content:"\f017";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-buzz:active:before,.hvr-icon-buzz:focus:before,.hvr-icon-buzz:hover:before{-webkit-animation-name:hvr-icon-buzz;animation-name:hvr-icon-buzz;-webkit-animation-duration:.15s;animation-duration:.15s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}@-webkit-keyframes hvr-icon-buzz-out{10%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}20%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}30%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}40%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}50%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}60%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}70%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}80%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}90%{-webkit-transform:translateX(1px) rotate(0);transform:translateX(1px) rotate(0)}100%{-webkit-transform:translateX(-1px) rotate(0);transform:translateX(-1px) rotate(0)}}@keyframes hvr-icon-buzz-out{10%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}20%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}30%{-webkit-transform:translateX(3px) rotate(2deg);transform:translateX(3px) rotate(2deg)}40%{-webkit-transform:translateX(-3px) rotate(-2deg);transform:translateX(-3px) rotate(-2deg)}50%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}60%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}70%{-webkit-transform:translateX(2px) rotate(1deg);transform:translateX(2px) rotate(1deg)}80%{-webkit-transform:translateX(-2px) rotate(-1deg);transform:translateX(-2px) rotate(-1deg)}90%{-webkit-transform:translateX(1px) rotate(0);transform:translateX(1px) rotate(0)}100%{-webkit-transform:translateX(-1px) rotate(0);transform:translateX(-1px) rotate(0)}}.hvr-icon-buzz-out{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative;padding-right:2.2em;-webkit-transition-duration:.3s;transition-duration:.3s}.hvr-icon-buzz-out:before{content:"\f023";position:absolute;right:1em;padding:0 1px;font-family:FontAwesome;-webkit-transform:translateZ(0);transform:translateZ(0)}.hvr-icon-buzz-out:active:before,.hvr-icon-buzz-out:focus:before,.hvr-icon-buzz-out:hover:before{-webkit-animation-name:hvr-icon-buzz-out;animation-name:hvr-icon-buzz-out;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}.hvr-curl-top-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-curl-top-left:before{pointer-events:none;position:absolute;content:'';height:0;width:0;top:0;left:0;background:#fff;background:linear-gradient(135deg,#fff 45%,#aaa 50%,#ccc 56%,#fff 80%);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0, startColorstr='#ffffff', endColorstr='#000000');z-index:1000;box-shadow:1px 1px 1px rgba(0,0,0,.4);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:width,height;transition-property:width,height}.hvr-curl-top-left:active:before,.hvr-curl-top-left:focus:before,.hvr-curl-top-left:hover:before{width:25px;height:25px}.hvr-curl-top-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-curl-top-right:before{pointer-events:none;position:absolute;content:'';height:0;width:0;top:0;right:0;background:#fff;background:linear-gradient(225deg,#fff 45%,#aaa 50%,#ccc 56%,#fff 80%);box-shadow:-1px 1px 1px rgba(0,0,0,.4);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:width,height;transition-property:width,height}.hvr-curl-top-right:active:before,.hvr-curl-top-right:focus:before,.hvr-curl-top-right:hover:before{width:25px;height:25px}.hvr-curl-bottom-right{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-curl-bottom-right:before{pointer-events:none;position:absolute;content:'';height:0;width:0;bottom:0;right:0;background:#fff;background:linear-gradient(315deg,#fff 45%,#aaa 50%,#ccc 56%,#fff 80%);box-shadow:-1px -1px 1px rgba(0,0,0,.4);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:width,height;transition-property:width,height}.hvr-curl-bottom-right:active:before,.hvr-curl-bottom-right:focus:before,.hvr-curl-bottom-right:hover:before{width:25px;height:25px}.hvr-curl-bottom-left{display:inline-block;vertical-align:middle;-webkit-transform:translateZ(0);transform:translateZ(0);box-shadow:0 0 1px rgba(0,0,0,0);-webkit-backface-visibility:hidden;backface-visibility:hidden;-moz-osx-font-smoothing:grayscale;position:relative}.hvr-curl-bottom-left:before{pointer-events:none;position:absolute;content:'';height:0;width:0;bottom:0;left:0;background:#fff;background:linear-gradient(45deg,#fff 45%,#aaa 50%,#ccc 56%,#fff 80%);box-shadow:1px -1px 1px rgba(0,0,0,.4);-webkit-transition-duration:.3s;transition-duration:.3s;-webkit-transition-property:width,height;transition-property:width,height}.hvr-curl-bottom-left:active:before,.hvr-curl-bottom-left:focus:before,.hvr-curl-bottom-left:hover:before{width:25px;height:25px}
/*# sourceMappingURL=vendor.css.map */
</style>

<div class="row">
               @if (isset($willquestionare[0]))
                 <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Will Questionnaire	  
										<div class="panel-control pull-right">
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-refresh"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-minus"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>

                               <div class="panel-body">
								   <label for="inputtext" class="col-sm-6 control-label">Is this a Single or Joint Will?</label>
								<div class="col-sm-6">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="Single" name="type_of_will" id="single"  style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;box-sizing: border-box;padding: 0;" onclick="javascript:uncheckjoint(this);" @if($willquestionare[0]->type_of_will=='Single')checked @endif>
											Single
										</label>
									</div>
									<div class="checkbox disabled">
										<label>
											<input type="checkbox" id="joint" name="type_of_will" value="Joint"  style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;box-sizing: border-box;padding: 0;" onclick="javascript:uncheckSingle(this);" @if($willquestionare[0]->type_of_will=='Joint')checked @endif>
											Joint
										</label>
									</div>
		                         </div>	


		                        <label for="inputtext" class="col-sm-6 control-label">Are you English or Afrikaans?</label>
								<div class="col-sm-6">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="english" name="language"  style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;box-sizing: border-box;padding: 0;" id="english" onclick="javascript:uncheckAfrikaans(this);" @if($willquestionare[0]->language=='english')checked @endif>
											English
										</label>
									</div>
									<div class="checkbox disabled">
										<label>
											<input type="checkbox" value="afrikaans" id="africans"  style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;box-sizing: border-box;padding: 0;" name="language" onclick="javascript:uncheckEnglish(this);" @if($willquestionare[0]->language=='afrikaans')checked @endif>
											Afrikaans
										</label>
									</div>
		                         </div>	

		                    </div>	
                     </div>

                   
                @endif

                @if (isset($Testator[0]))

                     <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Testator's personal details / Testateur se persoonlike besonderhede:	  <div class="panel-control pull-right">
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-refresh"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-minus"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>	

								<div class="panel-body">

                                    <div class="form-group">
										<label class="col-sm-2 control-label">Fullname/Volle naam</label>
											<div class="col-sm-5" style="margin-top:5px">
												<input type="text" name="first_name" id="first_name" value="{{$Testator[0]->fullname}}" class="form-control" placeholder="First Name/Eerste Naam" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
											<div class="col-sm-5" style="margin-top:5px">
												<input type="text" name="second_name" id="second_name" value="{{$Testator[0]->surname}}" class="form-control" placeholder="Surname/Van" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
							        </div>

							        <div class="form-group">
										<label class="col-sm-2 control-label">ID Number/ID-nommer</label>
											<div class="col-sm-10" style="margin-top:5px">
												<input type="text" name="id_number" id="id_number" class="form-control" value="{{$Testator[0]->id_number}}" placeholder="ID Number/ID-nommer" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
							        </div>

                                    
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Residential Address/Woonadres</label>
											<div class="col-sm-10">
											   <div style="margin-top:5px">											   	
											   	   <input type="text" name="street_address" id="street_address" class="form-control" placeholder="Street Address/Straatadres" value="{{$Testator[0]->street_address}}" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											   </div>

											   <div style="margin-top:5px">											   	
											   	   <input type="text" name="street_address_line_two" id="street_address_line_two" class="form-control" placeholder="Street Address Line two/Straatadres Line twee" value="{{$Testator[0]->street_address}}" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											   </div>
												
												<div class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="city" id="city" class="form-control" placeholder="City/Stad" value="{{$Testator[0]->city}}" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											   </div>
											   <div class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="province" id="province" class="form-control" placeholder="Province/Provinsie" value="{{$Testator[0]->province}}" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											   </div>

											   <div class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="Postal Code/Poskode" value="{{$Testator[0]->postal_code}}" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											   </div>
											   <div class="col-sm-6" style="margin-top:5px">								   	
											   	   @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Select Country', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
											   </div>

											</div>
							        </div>
							        <div class="form-group">
										<label class="col-sm-2 control-label">Addtional Details</label>
										   <div class="col-sm-10">

									        <div class="col-sm-3" style="margin-top:5px">
											<input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="Mobile Number/Selfoon nommer" value="{{$Testator[0]->mobile_number}}" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="email_number" id="email_number" class="form-control" placeholder="E-mail" value="{{$Testator[0]->email}}" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="employer" id="employer" class="form-control" placeholder="Name of Employer" value="{{$Testator[0]->name_of_employer}}" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="occupation" id="occupation" class="form-control" placeholder="Occupation/Selfoon nommer" value="{{$Testator[0]->occupation}}" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
										   	
  										   </div>
											
							        </div>

							        
                                   
							     </div>	

				     </div>	
               @endif

                  <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Testatrix personal details / Testatrise se persoonlike besonderhede:	  <div class="panel-control pull-right">
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-refresh"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-minus"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>	

								<div class="panel-body">

                                    <div class="form-group">
										<label class="col-sm-2 control-label">Fullname/Volle naam</label>
											<div class="col-sm-5" style="margin-top:5px">
												<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name/Eerste Naam" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->fullname;} ?>" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
											<div class="col-sm-5" style="margin-top:5px">
												<input type="text" name="second_name" id="second_name" class="form-control" placeholder="Surname/Van" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->surname;} ?>" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
							        </div>

							        <div class="form-group">
										<label class="col-sm-2 control-label">ID Number/ID-nommer</label>
											<div class="col-sm-10" style="margin-top:5px">
												<input type="text" name="id_number" id="id_number" class="form-control" placeholder="ID Number/ID-nommer" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->id_number;} ?>" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
							        </div>

                                    
                                    <div class="form-group">
										<label class="col-sm-2 control-label">Residential Address/Woonadres</label>
											<div class="col-sm-10">
											   <div style="margin-top:5px">											   	
											   	   <input type="text" name="street_address" id="street_address" class="form-control" placeholder="Street Address/Straatadres" value="<?php if(isset($testatrix[0])){$street_address=explode(" :", $testatrix[0]->street_address); echo $street_address[0];} ?>"  style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;" required>
											   </div>

											   <div style="margin-top:5px">											   	
											   	   <input type="text" name="street_address_line_two" id="street_address_line_two" class="form-control" placeholder="Street Address Line two/Straatadres Line twee" value="<?php if(isset($testatrix[0])){$street_address=explode(" :", $testatrix[0]->street_address); echo $street_address[1];} ?>"  style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;"required>
											   </div>
												
												<div class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="city" id="city" class="form-control" placeholder="City/Stad" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->city;} ?>" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											   </div>
											   <div class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="province" id="province" class="form-control" placeholder="Province/Provinsie" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->province;} ?>" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											   </div>

											   <div class="col-sm-6" style="margin-top:5px">								   	
											   	   <input type="text" name="postal_code" id="postal_code" class="form-control" placeholder="Postal Code/Poskode" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->postal_code;} ?>" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											   </div>
											   <div class="col-sm-6" style="margin-top:5px">								   	
											   	   @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Select Country', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
											   </div>

											</div>
							        </div>
							        <div class="form-group">
										<label class="col-sm-2 control-label">Addtional Details</label>
										   <div class="col-sm-10">

									        <div class="col-sm-3" style="margin-top:5px">
											<input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="Mobile Number/Selfoon nommer" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->mobile_number;} ?>" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="email_number" id="email_number" class="form-control" placeholder="E-mail" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->email;} ?>" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="employer" id="employer" class="form-control" placeholder="Name of Employer" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->name_of_employer;} ?>" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
											<div class="col-sm-3" style="margin-top:5px">
												<input type="text" name="occupation" id="occupation" class="form-control" placeholder="Occupation/Selfoon nommer" value="<?php if(isset($testatrix[0])){echo $testatrix[0]->occupation;} ?>" required style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
											</div>
										   	
  										   </div>
											
							        </div>

							        
                                   
							     </div>	

				     </div>	

				     <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Details of Marriage	  
										<div class="panel-control pull-right">
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-refresh"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-minus"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>
                               <div class="panel-body">
                               <div class="form-group">
										<label class="col-sm-2 control-label">Date of Marriage</label>
											<div class="col-sm-10">
												<p class="input-group">
													<div class="input-group date" id="datetimepicker" name="datetimepicker">
									                    <input type="text" class="form-control" style="color: inherit;font: inherit;border:none;margin: 0;line-height: normal;">
									                    <span class="input-group-addon" style="cursor: pointer;">
									                        <span class="glyphicon glyphicon-calendar"></span>
									                    </span>
									                </div>						            
									            </p>
											</div>
							    </div>

		                       <div class="row">
								<label for="inputtext" class="col-sm-2 control-label">How Married?</label>
								<div class="col-sm-10">
									<select class="form-control" name="mariage_type" style="color: inherit;font: inherit;border:none;margin: 0;text-transform: none;">
									    <?php 
                                         if (isset($mariage_details[0])) { ?>
                                         <option value="<?php echo $mariage_details[0]->marriage_type?>"> <?php echo $mariage_details[0]->marriage_type?> </option>	
                                        
                                        <?php 
                                         }
									     ?>
										<option value="In Community of Property"> In Community of Property </option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
									<br>
								</div>
							</div>
							     </div>


		                    </div>	
                     </div>


                        <form role="form" method="POST" action="/create_stage3">
	                 {!! csrf_field() !!}
                     <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Will Information
                             	  <div class="panel-control pull-right">
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-refresh"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-minus"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>	

								<div class="panel-body">


								     	<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Stipulation in case of death of Testator/Bepaling ten tye van afsterwe van Testateur:</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="stipulation_in_case_of_death_of_testator" id="stipulation_in_case_of_death_of_testator" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->stipulation_in_case_of_death_of_testator;} ?> </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Stipulation in case of death of Testatrix/Bepaling ten tye van afsterwe van Testatrise:</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="stipulation_in_case_of_death_of_testatrix" id="stipulation_in_case_of_death_of_testatrix" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->stipulation_in_case_of_death_of_testatrix;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

											<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Simultaneous death/Gesamentlike afsterwe:</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="simultaneous_death" id="simultaneous_death" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->simultaneous_death;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Will in event of family obliteration/Gesinsuitwissing (Optional):</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="will_in_event_of_family_obliteration" id="will_in_event_of_family_obliteration" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->will_in_event_of_family_obliteration;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>In case of minor beneficiaries we need the following information:/In geval waar minderjariges begunstigdes is benodig ons die volgende Inligting:</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="in_case_of_minor_beneficiaries_we_need_the_following_information" id="in_case_of_minor_beneficiaries_we_need_the_following_information" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="7" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->in_case_of_minor_beneficiaries_we_need_the_following_information;} ?>
															</textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Name/Naam en Identity/Identiteitsnommers or/of Date of Birth/Geboortedaum of minors:</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="name_identity_date_of_birth" id="name_identity_date_of_birth" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->name_identity_date_of_birth;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Guardian/Voog (Full names/Volle name)</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="guardians" id="guardians" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->guardians;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>State the maintenance amount to be paid to each minor child?</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="maintenance_amount_to_be_paid_to_each_minor_child" id="maintenance_amount_to_be_paid_to_each_minor_child" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->maintenance_amount_to_be_paid_to_each_minor_child;} ?>
															</textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>If you wish to create a Trust, Trustee: Full Names/Volle name and Identity Number/Identiteitsnommer :</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="trust_trustee_full_names_id_numbers" id="trust_trustee_full_names_id_numbers" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->trust_trustee_full_names_id_numbers;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>

										<div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Executor/Eksekuteur: Full Names/Volle name and Identity Number/Identiteitsnommer, we will appoint Executors/ with the person that you nominate</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="executor_full_names_and_and_id_numbers" id="executor_full_names_and_and_id_numbers" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="7" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->executor_full_names_and_and_id_numbers;} ?>
															</textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
										</div>



      
									</div>
							</div>

                       <div class="panel panel-info">

								<div class="panel-heading">
									<h3 class="panel-title">Other matters
										  <div class="panel-control pull-right">
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-refresh"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-minus"></i></a>
											<a class="panelButton" style="background-color: transparent;"><i class="fa fa-remove"></i></a>
										</div>
									</h3>
								</div>	

								<div class="panel-body">
								 <div class="row" style="margin-top:5px">
												<div class="col-sm-2">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<div class="text-center"><label>Any other matters you wish to add?</label></div>
														<!-- </div> -->
													<!-- </div> -->

												</div>
												<div class="col-sm-10">
													<!-- <div class="panel panel-default"> -->

														<!-- <div class="panel-body"> -->
															<textarea type="text" name="other_matters" id="other_matters" class="form-control text-left" placeholder="First Name/Eerste Naam" rows="5" required style="color: inherit;font: inherit;border:none;margin: 0;overflow: auto;"><?php if(isset($will_information[0])){echo $will_information[0]->other_matters;} ?>
															 </textarea>
														<!-- </div> -->
													<!-- </div> -->

												</div>
									</div>


									</div>
								</div>

					</form>	



					

          </body>
</html>