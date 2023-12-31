<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />



	<?php wp_head(); ?>
	<style>
     html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    height: 100%;
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
    text-decoration: none;
}

a:active,
a:hover {
    outline: 0;
}

abbr[title] {
    border-bottom: 1px dotted;
}

b,
optgroup,
strong {
    font-weight: 700;
}

dfn {
    font-style: italic;
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
    top: -.5em;
}

sub {
    bottom: -.25em;
}

img {
    border: 0;
    max-width: 100%;
    vertical-align: middle;
    display: inline-block;
}

svg:not(:root) {
    overflow: hidden;
}

hr {
    box-sizing: content-box;
    height: 0;
}

pre,
textarea {
    overflow: auto;
}

code,
kbd,
pre,
samp {
    font-family: monospace,monospace;
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
html input[type=button],
input[type=reset] {
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

input[type=checkbox],
input[type=radio] {
    box-sizing: border-box;
    padding: 0;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    height: auto;
}

input[type=search] {
    -webkit-appearance: none;
}

input[type=search]::-webkit-search-cancel-button,
input[type=search]::-webkit-search-decoration {
    -webkit-appearance: none;
}

legend {
    border: 0;
    padding: 0;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

td,
th {
    padding: 0;
}

@font-face {
    font-family: webflow-icons;
    src: url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMg8SBiUAAAC8AAAAYGNtYXDpP+a4AAABHAAAAFxnYXNwAAAAEAAAAXgAAAAIZ2x5ZmhS2XEAAAGAAAADHGhlYWQTFw3HAAAEnAAAADZoaGVhCXYFgQAABNQAAAAkaG10eCe4A1oAAAT4AAAAMGxvY2EDtALGAAAFKAAAABptYXhwABAAPgAABUQAAAAgbmFtZSoCsMsAAAVkAAABznBvc3QAAwAAAAAHNAAAACAAAwP4AZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADpAwPA/8AAQAPAAEAAAAABAAAAAAAAAAAAAAAgAAAAAAADAAAAAwAAABwAAQADAAAAHAADAAEAAAAcAAQAQAAAAAwACAACAAQAAQAg5gPpA//9//8AAAAAACDmAOkA//3//wAB/+MaBBcIAAMAAQAAAAAAAAAAAAAAAAABAAH//wAPAAEAAAAAAAAAAAACAAA3OQEAAAAAAQAAAAAAAAAAAAIAADc5AQAAAAABAAAAAAAAAAAAAgAANzkBAAAAAAEBIAAAAyADgAAFAAAJAQcJARcDIP5AQAGA/oBAAcABwED+gP6AQAABAOAAAALgA4AABQAAEwEXCQEH4AHAQP6AAYBAAcABwED+gP6AQAAAAwDAAOADQALAAA8AHwAvAAABISIGHQEUFjMhMjY9ATQmByEiBh0BFBYzITI2PQE0JgchIgYdARQWMyEyNj0BNCYDIP3ADRMTDQJADRMTDf3ADRMTDQJADRMTDf3ADRMTDQJADRMTAsATDSANExMNIA0TwBMNIA0TEw0gDRPAEw0gDRMTDSANEwAAAAABAJ0AtAOBApUABQAACQIHCQEDJP7r/upcAXEBcgKU/usBFVz+fAGEAAAAAAL//f+9BAMDwwAEAAkAABcBJwEXAwE3AQdpA5ps/GZsbAOabPxmbEMDmmz8ZmwDmvxmbAOabAAAAgAA/8AEAAPAAB0AOwAABSInLgEnJjU0Nz4BNzYzMTIXHgEXFhUUBw4BBwYjNTI3PgE3NjU0Jy4BJyYjMSIHDgEHBhUUFx4BFxYzAgBqXV6LKCgoKIteXWpqXV6LKCgoKIteXWpVSktvICEhIG9LSlVVSktvICEhIG9LSlVAKCiLXl1qal1eiygoKCiLXl1qal1eiygoZiEgb0tKVVVKS28gISEgb0tKVVVKS28gIQABAAABwAIAA8AAEgAAEzQ3PgE3NjMxFSIHDgEHBhUxIwAoKIteXWpVSktvICFmAcBqXV6LKChmISBvS0pVAAAAAgAA/8AFtgPAADIAOgAAARYXHgEXFhUUBw4BBwYHIxUhIicuAScmNTQ3PgE3NjMxOAExNDc+ATc2MzIXHgEXFhcVATMJATMVMzUEjD83NlAXFxYXTjU1PQL8kz01Nk8XFxcXTzY1PSIjd1BQWlJJSXInJw3+mdv+2/7c25MCUQYcHFg5OUA/ODlXHBwIAhcXTzY1PTw1Nk8XF1tQUHcjIhwcYUNDTgL+3QFt/pOTkwABAAAAAQAAmM7nP18PPPUACwQAAAAAANciZKUAAAAA1yJkpf/9/70FtgPDAAAACAACAAAAAAAAAAEAAAPA/8AAAAW3//3//QW2AAEAAAAAAAAAAAAAAAAAAAAMBAAAAAAAAAAAAAAAAgAAAAQAASAEAADgBAAAwAQAAJ0EAP/9BAAAAAQAAAAFtwAAAAAAAAAKABQAHgAyAEYAjACiAL4BFgE2AY4AAAABAAAADAA8AAMAAAAAAAIAAAAAAAAAAAAAAAAAAAAAAAAADgCuAAEAAAAAAAEADQAAAAEAAAAAAAIABwCWAAEAAAAAAAMADQBIAAEAAAAAAAQADQCrAAEAAAAAAAUACwAnAAEAAAAAAAYADQBvAAEAAAAAAAoAGgDSAAMAAQQJAAEAGgANAAMAAQQJAAIADgCdAAMAAQQJAAMAGgBVAAMAAQQJAAQAGgC4AAMAAQQJAAUAFgAyAAMAAQQJAAYAGgB8AAMAAQQJAAoANADsd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzVmVyc2lvbiAxLjAAVgBlAHIAcwBpAG8AbgAgADEALgAwd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzUmVndWxhcgBSAGUAZwB1AGwAYQByd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzRm9udCBnZW5lcmF0ZWQgYnkgSWNvTW9vbi4ARgBvAG4AdAAgAGcAZQBuAGUAcgBhAHQAZQBkACAAYgB5ACAASQBjAG8ATQBvAG8AbgAuAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==") format('truetype');
    font-weight: 400;
    font-style: normal;
}

[class*=" w-icon-"],
[class^=w-icon-] {
    font-family: webflow-icons!important;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.w-icon-slider-right:before {
    content: "\e600";
}

.w-icon-slider-left:before {
    content: "\e601";
}

.w-icon-nav-menu:before {
    content: "\e602";
}

.w-icon-arrow-down:before,
.w-icon-dropdown-toggle:before {
    content: "\e603";
}

.w-icon-file-upload-remove:before {
    content: "\e900";
}

.w-icon-file-upload-icon:before {
    content: "\e903";
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

html.w-mod-touch * {
    background-attachment: scroll!important;
}

.w-block {
    display: block;
}

.w-inline-block {
    max-width: 100%;
    display: inline-block;
}

.w-clearfix:after,
.w-clearfix:before {
    content: " ";
    display: table;
    grid-column-start: 1;
    grid-row-start: 1;
    grid-column-end: 2;
    grid-row-end: 2;
}

.w-clearfix:after {
    clear: both;
}

.w-hidden {
    display: none;
}

.w-button {
    display: inline-block;
    padding: 9px 15px;
    background-color: #3898ec;
    color: #fff;
    border: 0;
    line-height: inherit;
    text-decoration: none;
    cursor: pointer;
    border-radius: 0;
}

input.w-button {
    -webkit-appearance: button;
}

html[data-w-dynpage] [data-w-cloak] {
    color: transparent!important;
}

.w-webflow-badge,
.w-webflow-badge * {
    position: static;
    left: auto;
    top: auto;
    right: auto;
    bottom: auto;
    z-index: auto;
    display: block;
    visibility: visible;
    overflow: visible;
    overflow-x: visible;
    overflow-y: visible;
    box-sizing: border-box;
    width: auto;
    height: auto;
    max-height: none;
    max-width: none;
    min-height: 0;
    min-width: 0;
    margin: 0;
    padding: 0;
    float: none;
    clear: none;
    border: 0 transparent;
    border-radius: 0;
    background: 0 0;
    box-shadow: none;
    opacity: 1;
    transform: none;
    transition: none;
    direction: ltr;
    font-family: inherit;
    font-weight: inherit;
    color: inherit;
    font-size: inherit;
    line-height: inherit;
    font-style: inherit;
    font-variant: inherit;
    text-align: inherit;
    letter-spacing: inherit;
    text-decoration: inherit;
    text-indent: 0;
    text-transform: inherit;
    list-style-type: disc;
    text-shadow: none;
    font-smoothing: auto;
    vertical-align: baseline;
    cursor: inherit;
    white-space: inherit;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
}

.w-webflow-badge {
    position: fixed!important;
    display: inline-block!important;
    visibility: visible!important;
    z-index: 2147483647!important;
    top: auto!important;
    right: 12px!important;
    bottom: 12px!important;
    left: auto!important;
    color: #aaadb0!important;
    background-color: #fff!important;
    border-radius: 3px!important;
    padding: 6px 8px 6px 6px!important;
    font-size: 12px!important;
    opacity: 1!important;
    line-height: 14px!important;
    text-decoration: none!important;
    transform: none!important;
    margin: 0!important;
    width: auto!important;
    height: auto!important;
    overflow: visible!important;
    white-space: nowrap;
    box-shadow: 0 0 0 1px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.1);
    cursor: pointer;
}

.w-webflow-badge>img {
    display: inline-block!important;
    visibility: visible!important;
    opacity: 1!important;
    vertical-align: middle!important;
}

h1 {
    margin: .67em 0;
    font-size: 38px;
    line-height: 44px;
}

h2 {
    font-size: 32px;
    line-height: 36px;
}

h3 {
    font-size: 24px;
    line-height: 30px;
}

h4 {
    font-size: 18px;
    line-height: 24px;
}

h5 {
    font-size: 14px;
    line-height: 20px;
}

h6 {
    font-size: 12px;
    line-height: 18px;
}

p {
    margin-top: 0;
    margin-bottom: 0;
}

figure {
    margin: 0 0 10px;
}

figcaption {
    margin-top: 5px;
    text-align: center;
}

ol,
ul {
    margin-top: 0;
    margin-bottom: 10px;
    padding-left: 40px;
}

.w-list-unstyled {
    padding-left: 0;
    list-style: none;
}

.w-embed:after,
.w-embed:before {
    content: " ";
    display: table;
    grid-column-start: 1;
    grid-row-start: 1;
    grid-column-end: 2;
    grid-row-end: 2;
}

.w-embed:after {
    clear: both;
}

.w-video {
    width: 100%;
    position: relative;
    padding: 0;
}

.w-video embed,
.w-video iframe,
.w-video object {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}

.section_cuatro{
    position: relative;
    z-index: 1030;
    left: 0;
    width: 100%;
    height: 50vh;
    border: none;
}

.section_cinco{
    position: relative;
    top: 28.5%;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    z-index: 3000;
}

@media (min-width: 1610px) and (max-width: 1670px) {
    .section_cinco{
        top: 31.7%;
    }
}

@media (min-width: 1570px) and (max-width: 1610px) {
    .section_cinco{
        top: 32.5%;
    }
}

@media (min-width: 1510px) and (max-width: 1570px) {
    .section_cinco{
        top: 33.3%;
    }
}

@media (min-width: 1470px) and (max-width: 1510px) {
    .section_cinco{
        top: 34%;
    }
}

@media (min-width: 1410px) and (max-width: 1470px) {
    .section_cinco{
        top: 35%;
    }
}


@media (min-width: 1370px) and (max-width: 1410px) {
    .section_cinco{
        top: 36%;
    }
}

@media (min-width: 1310px) and (max-width: 1370px) {
    .section_cinco{
        top: 37%;
    }
}

@media (min-width: 1270px) and (max-width: 1310px) {
    .section_cinco{
        top: 38%;
    }
}

@media (min-width: 1210px) and (max-width: 1270px) {
    .section_cinco{
        top: 39%;
    }
}

@media (min-width: 1170px) and (max-width: 1210px) {
    .section_cinco{
        top: 40%;
    }
}

@media (min-width: 1110px) and (max-width: 1170px) {
    .section_cinco{
        top: 41%;
    }
}
@media (min-width: 970px) and (max-width: 1110px) {
    .section_cinco{
        top: 43%;
    }
}


@media (min-width: 910px) and (max-width: 970px) {
    .section_cinco{
        top: 44%;
    }
}

@media (min-width: 870px) and (max-width: 910px) {
    .section_cinco{
        top: 45%;
    }
}

@media (min-width: 810px) and (max-width: 870px) {
    .section_cinco{
        top: 46%;
    }
}

fieldset {
    padding: 0;
    margin: 0;
    border: 0;
}

[type=button],
[type=reset],
button {
    border: 0;
    cursor: pointer;
    -webkit-appearance: button;
}

.w-form {
    margin: 0 0 15px;
}

.w-form-done {
    display: none;
    padding: 20px;
    text-align: center;
    background-color: #ddd;
}

.w-form-fail {
    display: none;
    margin-top: 10px;
    padding: 10px;
    background-color: #ffdede;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: 700;
}

.w-input,
.w-select {
    display: block;
    width: 100%;
    height: 38px;
    padding: 8px 12px;
    margin-bottom: 10px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    vertical-align: middle;
    background-color: #fff;
    border: 1px solid #ccc;
}

.w-input:-moz-placeholder,
.w-select:-moz-placeholder {
    color: #999;
}

.w-input::-moz-placeholder,
.w-select::-moz-placeholder {
    color: #999;
    opacity: 1;
}

.w-input:-ms-input-placeholder,
.w-select:-ms-input-placeholder {
    color: #999;
}

.w-input::-webkit-input-placeholder,
.w-select::-webkit-input-placeholder {
    color: #999;
}

.w-input:focus,
.w-select:focus {
    border-color: #3898ec;
    outline: 0;
}

.w-input[disabled],
.w-input[readonly],
.w-select[disabled],
.w-select[readonly],
fieldset[disabled] .w-input,
fieldset[disabled] .w-select {
    cursor: not-allowed;
}

.w-input[disabled]:not(.w-input-disabled),
.w-input[readonly],
.w-select[disabled]:not(.w-input-disabled),
.w-select[readonly],
fieldset[disabled]:not(.w-input-disabled) .w-input,
fieldset[disabled]:not(.w-input-disabled) .w-select {
    background-color: #eee;
}

textarea.w-input,
textarea.w-select {
    height: auto;
}

.w-select {
    background-color: #f3f3f3;
}

.w-select[multiple] {
    height: auto;
}

.w-form-label {
    display: inline-block;
    cursor: pointer;
    font-weight: 400;
    margin-bottom: 0;
}

.w-radio {
    display: block;
    margin-bottom: 5px;
    padding-left: 20px;
}

.w-radio:after,
.w-radio:before {
    content: " ";
    display: table;
    grid-column-start: 1;
    grid-row-start: 1;
    grid-column-end: 2;
    grid-row-end: 2;
}

.w-radio:after {
    clear: both;
}

.w-radio-input {
    margin: 3px 0 0 -20px;
    line-height: normal;
    float: left;
}

.w-file-upload {
    display: block;
    margin-bottom: 10px;
}

.w-file-upload-input {
    width: .1px;
    height: .1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -100;
}

.w-file-upload-default,
.w-file-upload-success,
.w-file-upload-uploading {
    display: inline-block;
    color: #333;
}

.w-file-upload-error {
    display: block;
    margin-top: 10px;
}

.w-file-upload-default.w-hidden,
.w-file-upload-error.w-hidden,
.w-file-upload-success.w-hidden,
.w-file-upload-uploading.w-hidden {
    display: none;
}

.w-file-upload-uploading-btn {
    display: flex;
    font-size: 14px;
    font-weight: 400;
    cursor: pointer;
    margin: 0;
    padding: 8px 12px;
    border: 1px solid #ccc;
    background-color: #fafafa;
}

.w-file-upload-file {
    display: flex;
    flex-grow: 1;
    justify-content: space-between;
    margin: 0;
    padding: 8px 9px 8px 11px;
    border: 1px solid #ccc;
    background-color: #fafafa;
}

.w-file-upload-file-name {
    font-size: 14px;
    font-weight: 400;
    display: block;
}

.w-file-remove-link {
    margin-top: 3px;
    margin-left: 10px;
    width: auto;
    height: auto;
    padding: 3px;
    display: block;
    cursor: pointer;
}

.w-icon-file-upload-remove {
    margin: auto;
    font-size: 10px;
}

.w-file-upload-error-msg {
    display: inline-block;
    color: #ea384c;
    padding: 2px 0;
}

.w-file-upload-info {
    display: inline-block;
    line-height: 38px;
    padding: 0 12px;
}

.w-file-upload-label {
    display: inline-block;
    font-size: 14px;
    font-weight: 400;
    cursor: pointer;
    margin: 0;
    padding: 8px 12px;
    border: 1px solid #ccc;
    background-color: #fafafa;
}

.w-icon-file-upload-icon,
.w-icon-file-upload-uploading {
    display: inline-block;
    margin-right: 8px;
    width: 20px;
}

.w-icon-file-upload-uploading {
    height: 20px;
}

.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}

.w-container:after,
.w-container:before {
    content: " ";
    display: table;
    grid-column-start: 1;
    grid-row-start: 1;
    grid-column-end: 2;
    grid-row-end: 2;
}

.w-container:after {
    clear: both;
}

.w-container .w-row {
    margin-left: -10px;
    margin-right: -10px;
}

.w-row:after,
.w-row:before {
    content: " ";
    display: table;
    grid-column-start: 1;
    grid-row-start: 1;
    grid-column-end: 2;
    grid-row-end: 2;
}

.w-row:after {
    clear: both;
}

.w-row .w-row {
    margin-left: 0;
    margin-right: 0;
}

.w-col {
    position: relative;
    float: left;
    width: 100%;
    min-height: 1px;
    padding-left: 10px;
    padding-right: 10px;
}

.w-col .w-col {
    padding-left: 0;
    padding-right: 0;
}

.w-col-1 {
    width: 8.33333333%;
}

.w-col-2 {
    width: 16.66666667%;
}

.w-col-3 {
    width: 25%;
}

.w-col-4 {
    width: 33.33333333%;
}

.w-col-5 {
    width: 41.66666667%;
}

.w-col-6 {
    width: 50%;
}

.w-col-7 {
    width: 58.33333333%;
}

.w-col-8 {
    width: 66.66666667%;
}

.w-col-9 {
    width: 75%;
}

.w-col-10 {
    width: 83.33333333%;
}

.w-col-11 {
    width: 91.66666667%;
}

.w-col-12 {
    width: 100%;
}

.w-hidden-main {
    display: none!important;
}

@media screen and (max-width:991px) {
    .w-container {
        max-width: 728px;
    }

    .w-hidden-main {
        display: inherit!important;
    }

    .w-hidden-medium {
        display: none!important;
    }

    .w-col-medium-1 {
        width: 8.33333333%;
    }

    .w-col-medium-2 {
        width: 16.66666667%;
    }

    .w-col-medium-3 {
        width: 25%;
    }

    .w-col-medium-4 {
        width: 33.33333333%;
    }

    .w-col-medium-5 {
        width: 41.66666667%;
    }

    .w-col-medium-6 {
        width: 50%;
    }

    .w-col-medium-7 {
        width: 58.33333333%;
    }

    .w-col-medium-8 {
        width: 66.66666667%;
    }

    .w-col-medium-9 {
        width: 75%;
    }

    .w-col-medium-10 {
        width: 83.33333333%;
    }

    .w-col-medium-11 {
        width: 91.66666667%;
    }

    .w-col-medium-12 {
        width: 100%;
    }

    .w-col-stack {
        width: 100%;
        left: auto;
        right: auto;
    }
}

@media screen and (max-width:767px) {
    .w-hidden-main,
    .w-hidden-medium {
        display: inherit!important;
    }

    .w-hidden-small {
        display: none!important;
    }

    .w-container .w-row,
    .w-row {
        margin-left: 0;
        margin-right: 0;
    }

    .w-col {
        width: 100%;
        left: auto;
        right: auto;
    }

    .w-col-small-1 {
        width: 8.33333333%;
    }

    .w-col-small-2 {
        width: 16.66666667%;
    }

    .w-col-small-3 {
        width: 25%;
    }

    .w-col-small-4 {
        width: 33.33333333%;
    }

    .w-col-small-5 {
        width: 41.66666667%;
    }

    .w-col-small-6 {
        width: 50%;
    }

    .w-col-small-7 {
        width: 58.33333333%;
    }

    .w-col-small-8 {
        width: 66.66666667%;
    }

    .w-col-small-9 {
        width: 75%;
    }

    .w-col-small-10 {
        width: 83.33333333%;
    }

    .w-col-small-11 {
        width: 91.66666667%;
    }

    .w-col-small-12 {
        width: 100%;
    }
}

@media screen and (max-width:479px) {
    .w-container {
        max-width: none;
    }

    .w-hidden-main,
    .w-hidden-medium,
    .w-hidden-small {
        display: inherit!important;
    }

    .w-hidden-tiny {
        display: none!important;
    }

    .w-col {
        width: 100%;
    }

    .w-col-tiny-1 {
        width: 8.33333333%;
    }

    .w-col-tiny-2 {
        width: 16.66666667%;
    }

    .w-col-tiny-3 {
        width: 25%;
    }

    .w-col-tiny-4 {
        width: 33.33333333%;
    }

    .w-col-tiny-5 {
        width: 41.66666667%;
    }

    .w-col-tiny-6 {
        width: 50%;
    }

    .w-col-tiny-7 {
        width: 58.33333333%;
    }

    .w-col-tiny-8 {
        width: 66.66666667%;
    }

    .w-col-tiny-9 {
        width: 75%;
    }

    .w-col-tiny-10 {
        width: 83.33333333%;
    }

    .w-col-tiny-11 {
        width: 91.66666667%;
    }

    .w-col-tiny-12 {
        width: 100%;
    }
}

.w-widget {
    position: relative;
}

.w-widget-map {
    width: 100%;
    height: 400px;
}

.w-widget-map label {
    width: auto;
    display: inline;
}

.w-widget-map img {
    max-width: inherit;
}

.w-widget-map .gm-style-iw {
    text-align: center;
}

.w-widget-map .gm-style-iw>button {
    display: none!important;
}

.w-widget-twitter {
    overflow: hidden;
}

.w-widget-twitter-count-shim {
    display: inline-block;
    vertical-align: top;
    position: relative;
    width: 28px;
    height: 20px;
    text-align: center;
    background: #fff;
    border: 1px solid #758696;
    border-radius: 3px;
}

.w-widget-twitter-count-shim * {
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.w-widget-twitter-count-shim .w-widget-twitter-count-inner {
    position: relative;
    font-size: 15px;
    line-height: 12px;
    text-align: center;
    color: #999;
    font-family: serif;
}

.w-widget-twitter-count-shim .w-widget-twitter-count-clear {
    position: relative;
    display: block;
}

.w-widget-twitter-count-shim.w--large {
    width: 36px;
    height: 28px;
}

.w-widget-twitter-count-shim.w--large .w-widget-twitter-count-inner {
    font-size: 18px;
    line-height: 18px;
}

.w-widget-twitter-count-shim:not(.w--vertical) {
    margin-left: 5px;
    margin-right: 8px;
}

.w-widget-twitter-count-shim:not(.w--vertical).w--large {
    margin-left: 6px;
}

.w-widget-twitter-count-shim:not(.w--vertical):after,
.w-widget-twitter-count-shim:not(.w--vertical):before {
    top: 50%;
    left: 0;
    border: solid transparent;
    content: ' ';
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
}

.w-widget-twitter-count-shim:not(.w--vertical):before {
    border-color: rgba(117,134,150,0);
    border-right-color: #5d6c7b;
    border-width: 4px;
    margin-left: -9px;
    margin-top: -4px;
}

.w-widget-twitter-count-shim:not(.w--vertical).w--large:before {
    border-width: 5px;
    margin-left: -10px;
    margin-top: -5px;
}

.w-widget-twitter-count-shim:not(.w--vertical):after {
    border-color: rgba(255,255,255,0);
    border-right-color: #fff;
    border-width: 4px;
    margin-left: -8px;
    margin-top: -4px;
}

.w-widget-twitter-count-shim:not(.w--vertical).w--large:after {
    border-width: 5px;
    margin-left: -9px;
    margin-top: -5px;
}

.w-widget-twitter-count-shim.w--vertical {
    width: 61px;
    height: 33px;
    margin-bottom: 8px;
}

.w-widget-twitter-count-shim.w--vertical:after,
.w-widget-twitter-count-shim.w--vertical:before {
    top: 100%;
    left: 50%;
    border: solid transparent;
    content: ' ';
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
}

.w-widget-twitter-count-shim.w--vertical:before {
    border-color: rgba(117,134,150,0);
    border-top-color: #5d6c7b;
    border-width: 5px;
    margin-left: -5px;
}

.w-widget-twitter-count-shim.w--vertical:after {
    border-color: rgba(255,255,255,0);
    border-top-color: #fff;
    border-width: 4px;
    margin-left: -4px;
}

.w-widget-twitter-count-shim.w--vertical .w-widget-twitter-count-inner {
    font-size: 18px;
    line-height: 22px;
}

.w-widget-twitter-count-shim.w--vertical.w--large {
    width: 76px;
}

.w-background-video {
    position: relative;
    overflow: hidden;
    height: 500px;
    color: #fff;
}

.w-background-video>video {
    background-size: cover;
    background-position: 50% 50%;
    position: absolute;
    margin: auto;
    width: 100%;
    height: 100%;
    right: -100%;
    bottom: -100%;
    top: -100%;
    left: -100%;
    object-fit: cover;
    z-index: -100;
}

.w-background-video>video::-webkit-media-controls-start-playback-button {
    display: none!important;
    -webkit-appearance: none;
}

.w-background-video--control {
    position: absolute;
    bottom: 1em;
    right: 1em;
    background-color: transparent;
    padding: 0;
}

.w-background-video--control>[hidden] {
    display: none!important;
}

.w-slider {
    position: relative;
    height: 300px;
    text-align: center;
    background: #ddd;
    clear: both;
    -webkit-tap-highlight-color: transparent;
    tap-highlight-color: rgba(0,0,0,0);
}

.w-slider-mask {
    position: relative;
    display: block;
    overflow: hidden;
    z-index: 1;
    left: 0;
    right: 0;
    height: 100%;
    white-space: nowrap;
}

.w-slide {
    position: relative;
    display: inline-block;
    vertical-align: top;
    width: 100%;
    height: 100%;
    white-space: normal;
    text-align: left;
}

.w-slider-nav {
    position: absolute;
    z-index: 2;
    top: auto;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    padding-top: 10px;
    height: 40px;
    text-align: center;
    -webkit-tap-highlight-color: transparent;
    tap-highlight-color: rgba(0,0,0,0);
}

.w-slider-nav.w-round>div {
    border-radius: 100%;
}

.w-slider-nav.w-num>div {
    width: auto;
    height: auto;
    padding: .2em .5em;
    font-size: inherit;
    line-height: inherit;
}

.w-slider-nav.w-shadow>div {
    box-shadow: 0 0 3px rgba(51,51,51,.4);
}

.w-slider-nav-invert {
    color: #fff;
}

.w-slider-nav-invert>div {
    background-color: rgba(34,34,34,.4);
}

.w-slider-nav-invert>div.w-active {
    background-color: #222;
}

.w-slider-dot {
    position: relative;
    display: inline-block;
    width: 1em;
    height: 1em;
    background-color: rgba(255,255,255,.4);
    cursor: pointer;
    margin: 0 3px .5em;
    transition: background-color .1s,color .1s;
}

.w-slider-dot.w-active {
    background-color: #fff;
}

.w-slider-dot:focus {
    outline: 0;
    box-shadow: 0 0 0 2px #fff;
}

.w-slider-dot:focus.w-active {
    box-shadow: none;
}

.w-slider-arrow-left,
.w-slider-arrow-right {
    position: absolute;
    width: 80px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    cursor: pointer;
    overflow: hidden;
    color: #fff;
    font-size: 40px;
    -webkit-tap-highlight-color: transparent;
    tap-highlight-color: rgba(0,0,0,0);
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.w-slider-arrow-left [class*=' w-icon-'],
.w-slider-arrow-left [class^=w-icon-],
.w-slider-arrow-right [class*=' w-icon-'],
.w-slider-arrow-right [class^=w-icon-] {
    position: absolute;
}

.w-slider-arrow-left:focus,
.w-slider-arrow-right:focus {
    outline: 0;
}

.w-slider-arrow-left {
    z-index: 3;
    right: auto;
}

.w-slider-arrow-right {
    z-index: 4;
    left: auto;
}

.w-icon-slider-left,
.w-icon-slider-right {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    width: 1em;
    height: 1em;
}

.w-slider-aria-label {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

.w-slider-force-show {
    display: block!important;
}

.w-dropdown {
    display: inline-block;
    position: relative;
    text-align: left;
    margin-left: auto;
    margin-right: auto;
    z-index: 900;
}

.w-dropdown-btn,
.w-dropdown-link,
.w-dropdown-toggle {
    position: relative;
    vertical-align: top;
    text-decoration: none;
    color: #222;
    padding: 20px;
    text-align: left;
    margin-left: auto;
    margin-right: auto;
    white-space: nowrap;
}

.w-dropdown-toggle {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    display: inline-block;
    cursor: pointer;
    padding-right: 40px;
}

.w-dropdown-toggle:focus {
    outline: 0;
}

.w-icon-dropdown-toggle {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    margin: auto 20px auto auto;
    width: 1em;
    height: 1em;
}

.w-dropdown-list {
    position: absolute;
    background: #ddd;
    display: none;
    min-width: 100%;
}

.w-dropdown-list.w--open {
    display: block;
}

.w-dropdown-link {
    padding: 10px 20px;
    display: block;
    color: #222;
}

.w-dropdown-link.w--current {
    color: #0082f3;
}

.w-dropdown-link:focus {
    outline: 0;
}

@media screen and (max-width:767px) {
    .w-nav-brand {
        padding-left: 10px;
    }
}

.w-lightbox-backdrop {
    cursor: auto;
    font-style: normal;
    font-variant: normal;
    letter-spacing: normal;
    list-style: disc;
    text-indent: 0;
    text-shadow: none;
    text-transform: none;
    visibility: visible;
    white-space: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    color: #fff;
    font-family: "Helvetica Neue",Helvetica,Ubuntu,"Segoe UI",Verdana,sans-serif;
    font-size: 17px;
    line-height: 1.2;
    font-weight: 300;
    text-align: center;
    background: rgba(0,0,0,.9);
    z-index: 2000;
    outline: 0;
    opacity: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -webkit-tap-highlight-color: transparent;
    -webkit-transform: translate(0,0);
}

.w-lightbox-backdrop,
.w-lightbox-container {
    height: 100%;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}

.w-lightbox-content {
    position: relative;
    height: 100vh;
    overflow: hidden;
}

.w-lightbox-view {
    position: absolute;
    width: 100vw;
    height: 100vh;
    opacity: 0;
}

.w-lightbox-view:before {
    content: "";
    height: 100vh;
}

.w-lightbox-group,
.w-lightbox-group .w-lightbox-view,
.w-lightbox-group .w-lightbox-view:before {
    height: 86vh;
}

.w-lightbox-frame,
.w-lightbox-view:before {
    display: inline-block;
    vertical-align: middle;
}

.w-lightbox-figure {
    position: relative;
    margin: 0;
}

.w-lightbox-group .w-lightbox-figure {
    cursor: pointer;
}

.w-lightbox-img {
    width: auto;
    height: auto;
    max-width: none;
}

.w-lightbox-image {
    display: block;
    float: none;
    max-width: 100vw;
    max-height: 100vh;
}

.w-lightbox-group .w-lightbox-image {
    max-height: 86vh;
}

.w-lightbox-caption {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: .5em 1em;
    background: rgba(0,0,0,.4);
    text-align: left;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

.w-lightbox-embed {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.w-lightbox-control {
    position: absolute;
    top: 0;
    width: 4em;
    background-size: 24px;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
    -webkit-transition: .3s;
    transition: .3s;
}

.w-lightbox-left {
    display: none;
    bottom: 0;
    left: 0;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0yMCAwIDI0IDQwIiB3aWR0aD0iMjQiIGhlaWdodD0iNDAiPjxnIHRyYW5zZm9ybT0icm90YXRlKDQ1KSI+PHBhdGggZD0ibTAgMGg1djIzaDIzdjVoLTI4eiIgb3BhY2l0eT0iLjQiLz48cGF0aCBkPSJtMSAxaDN2MjNoMjN2M2gtMjZ6IiBmaWxsPSIjZmZmIi8+PC9nPjwvc3ZnPg==");
}

.w-lightbox-right {
    display: none;
    right: 0;
    bottom: 0;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00IDAgMjQgNDAiIHdpZHRoPSIyNCIgaGVpZ2h0PSI0MCI+PGcgdHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cGF0aCBkPSJtMC0waDI4djI4aC01di0yM2gtMjN6IiBvcGFjaXR5PSIuNCIvPjxwYXRoIGQ9Im0xIDFoMjZ2MjZoLTN2LTIzaC0yM3oiIGZpbGw9IiNmZmYiLz48L2c+PC9zdmc+");
}

.w-lightbox-close {
    right: 0;
    height: 2.6em;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00IDAgMTggMTciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxNyI+PGcgdHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cGF0aCBkPSJtMCAwaDd2LTdoNXY3aDd2NWgtN3Y3aC01di03aC03eiIgb3BhY2l0eT0iLjQiLz48cGF0aCBkPSJtMSAxaDd2LTdoM3Y3aDd2M2gtN3Y3aC0zdi03aC03eiIgZmlsbD0iI2ZmZiIvPjwvZz48L3N2Zz4=");
    background-size: 18px;
}

.w-lightbox-strip {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 0 1vh;
    line-height: 0;
    white-space: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
}

.w-lightbox-item {
    display: inline-block;
    width: 10vh;
    padding: 2vh 1vh;
    box-sizing: content-box;
    cursor: pointer;
    -webkit-transform: translate3d(0,0,0);
}

.w-lightbox-active {
    opacity: .3;
}

.w-lightbox-thumbnail {
    position: relative;
    height: 10vh;
    background: #222;
    overflow: hidden;
}

.w-lightbox-thumbnail-image {
    position: absolute;
    top: 0;
    left: 0;
}

.w-lightbox-thumbnail .w-lightbox-tall {
    top: 50%;
    width: 100%;
    -webkit-transform: translate(0,-50%);
    -ms-transform: translate(0,-50%);
    transform: translate(0,-50%);
}

.w-lightbox-thumbnail .w-lightbox-wide {
    left: 50%;
    height: 100%;
    -webkit-transform: translate(-50%,0);
    -ms-transform: translate(-50%,0);
    transform: translate(-50%,0);
}

.w-lightbox-spinner {
    position: absolute;
    top: 50%;
    left: 50%;
    box-sizing: border-box;
    width: 40px;
    height: 40px;
    margin-top: -20px;
    margin-left: -20px;
    border: 5px solid rgba(0,0,0,.4);
    border-radius: 50%;
    -webkit-animation: .8s linear infinite spin;
    animation: .8s linear infinite spin;
}

.w-lightbox-spinner:after {
    content: "";
    position: absolute;
    top: -4px;
    right: -4px;
    bottom: -4px;
    left: -4px;
    border: 3px solid transparent;
    border-bottom-color: #fff;
    border-radius: 50%;
}

.w-lightbox-hide {
    display: none;
}

.w-lightbox-noscroll {
    overflow: hidden;
}

@media (min-width:768px) {
    .w-lightbox-content {
        height: 96vh;
        margin-top: 2vh;
    }

    .w-lightbox-view,
    .w-lightbox-view:before {
        height: 96vh;
    }

    .w-lightbox-group,
    .w-lightbox-group .w-lightbox-view,
    .w-lightbox-group .w-lightbox-view:before {
        height: 84vh;
    }

    .w-lightbox-image {
        max-width: 96vw;
        max-height: 96vh;
    }

    .w-lightbox-group .w-lightbox-image {
        max-width: 82.3vw;
        max-height: 84vh;
    }

    .w-lightbox-left,
    .w-lightbox-right {
        display: block;
        opacity: .5;
    }

    .w-lightbox-close {
        opacity: .8;
    }

    .w-lightbox-control:hover {
        opacity: 1;
    }
}

.w-lightbox-inactive,
.w-lightbox-inactive:hover {
    opacity: 0;
}

.w-richtext:after,
.w-richtext:before {
    content: " ";
    display: table;
    grid-column-start: 1;
    grid-row-start: 1;
    grid-column-end: 2;
    grid-row-end: 2;
}

.w-richtext:after {
    clear: both;
}

.w-richtext[contenteditable=true]:after,
.w-richtext[contenteditable=true]:before {
    white-space: initial;
}

.w-richtext ol,
.w-richtext ul {
    overflow: hidden;
}

.w-richtext .w-richtext-figure-selected.w-richtext-figure-type-image div,
.w-richtext .w-richtext-figure-selected.w-richtext-figure-type-video div:after,
.w-richtext .w-richtext-figure-selected[data-rt-type=image] div,
.w-richtext .w-richtext-figure-selected[data-rt-type=video] div:after {
    outline: #2895f7 solid 2px;
}

.w-richtext figure.w-richtext-figure-type-video>div:after,
.w-richtext figure[data-rt-type=video]>div:after {
    content: '';
    position: absolute;
    display: none;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
}

.w-richtext figure {
    position: relative;
    max-width: 60%;
}

.w-richtext figure>div:before {
    cursor: default!important;
}

.w-richtext figure img {
    width: 100%;
}

.w-richtext figure figcaption.w-richtext-figcaption-placeholder {
    opacity: .6;
}

.w-richtext figure div {
    font-size: 0px;
    color: transparent;
}

.w-richtext figure.w-richtext-figure-type-image,
.w-richtext figure[data-rt-type=image] {
    display: table;
}

.w-richtext figure.w-richtext-figure-type-image>div,
.w-richtext figure[data-rt-type=image]>div {
    display: inline-block;
}

.w-richtext figure.w-richtext-figure-type-image>figcaption,
.w-richtext figure[data-rt-type=image]>figcaption {
    display: table-caption;
    caption-side: bottom;
}

.w-richtext figure.w-richtext-figure-type-video,
.w-richtext figure[data-rt-type=video] {
    width: 60%;
    height: 0;
}

.w-richtext figure.w-richtext-figure-type-video iframe,
.w-richtext figure[data-rt-type=video] iframe {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.w-richtext figure.w-richtext-figure-type-video>div,
.w-richtext figure[data-rt-type=video]>div {
    width: 100%;
}

.w-richtext figure.w-richtext-align-center {
    margin-right: auto;
    margin-left: auto;
    clear: both;
}

.w-richtext figure.w-richtext-align-center.w-richtext-figure-type-image>div,
.w-richtext figure.w-richtext-align-center[data-rt-type=image]>div {
    max-width: 100%;
}

.w-richtext figure.w-richtext-align-normal {
    clear: both;
}

.w-richtext figure.w-richtext-align-fullwidth {
    width: 100%;
    max-width: 100%;
    text-align: center;
    clear: both;
    display: block;
    margin-right: auto;
    margin-left: auto;
}

.w-richtext figure.w-richtext-align-fullwidth>div {
    display: inline-block;
    padding-bottom: inherit;
}

.w-richtext figure.w-richtext-align-fullwidth>figcaption {
    display: block;
}

.w-richtext figure.w-richtext-align-floatleft {
    float: left;
    margin-right: 15px;
    clear: none;
}

.w-richtext figure.w-richtext-align-floatright {
    float: right;
    margin-left: 15px;
    clear: none;
}

.w-nav {
    position: relative;
    background: #ddd;
    z-index: 1000;
}

.w-nav:after,
.w-nav:before {
    content: " ";
    display: table;
    grid-column-start: 1;
    grid-row-start: 1;
    grid-column-end: 2;
    grid-row-end: 2;
}

.w-nav:after {
    clear: both;
}

.w-nav-brand {
    position: relative;
    float: left;
    text-decoration: none;
    color: #333;
}

.w-nav-link {
    position: relative;
    display: inline-block;
    vertical-align: top;
    text-decoration: none;
    color: #222;
    padding: 20px;
    text-align: left;
    margin-left: auto;
    margin-right: auto;
}

.w-nav-link.w--current {
    color: #0082f3;
}

.w-nav-menu {
    position: relative;
    float: right;
}

[data-nav-menu-open] {
    display: block!important;
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: #c8c8c8;
    text-align: center;
    overflow: visible;
    min-width: 200px;
}

.w--nav-link-open {
    display: block;
    position: relative;
}

.w-nav-overlay {
    position: absolute;
    overflow: hidden;
    display: none;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
}

.w-nav-overlay [data-nav-menu-open] {
    top: 0;
}

.w-nav[data-animation=over-left] .w-nav-overlay {
    width: auto;
}

.w-nav[data-animation=over-left] .w-nav-overlay,
.w-nav[data-animation=over-left] [data-nav-menu-open] {
    right: auto;
    z-index: 1;
    top: 0;
}

.w-nav[data-animation=over-right] .w-nav-overlay {
    width: auto;
}

.w-nav[data-animation=over-right] .w-nav-overlay,
.w-nav[data-animation=over-right] [data-nav-menu-open] {
    left: auto;
    z-index: 1;
    top: 0;
}

.w-nav-button {
    position: relative;
    float: right;
    padding: 18px;
    font-size: 24px;
    display: none;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
    tap-highlight-color: rgba(0,0,0,0);
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.w-nav-button:focus {
    outline: 0;
}

.w-nav-button.w--open {
    background-color: #c8c8c8;
    color: #fff;
}

.w-nav[data-collapse=all] .w-nav-menu {
    display: none;
}

.w--nav-dropdown-open,
.w--nav-dropdown-toggle-open,
.w-nav[data-collapse=all] .w-nav-button {
    display: block;
}

.w--nav-dropdown-list-open {
    position: static;
}

@media screen and (max-width:991px) {
    .w-nav[data-collapse=medium] .w-nav-menu {
        display: none;
    }

    .w-nav[data-collapse=medium] .w-nav-button {
        display: block;
    }
}

@media screen and (max-width:767px) {
    .w-nav[data-collapse=small] .w-nav-menu {
        display: none;
    }

    .w-nav[data-collapse=small] .w-nav-button {
        display: block;
    }

    .w-nav-brand {
        padding-left: 10px;
    }
}

.w-tabs {
    position: relative;
}

.w-tabs:after,
.w-tabs:before {
    content: " ";
    display: table;
    grid-column-start: 1;
    grid-row-start: 1;
    grid-column-end: 2;
    grid-row-end: 2;
}

.w-tabs:after {
    clear: both;
}

.w-tab-menu {
    position: relative;
}

.w-tab-link {
    position: relative;
    display: inline-block;
    vertical-align: top;
    text-decoration: none;
    padding: 9px 30px;
    text-align: left;
    cursor: pointer;
    color: #222;
    background-color: #ddd;
}

.w-tab-link.w--current {
    background-color: #c8c8c8;
}

.w-tab-link:focus {
    outline: 0;
}

.w-tab-content {
    position: relative;
    display: block;
    overflow: hidden;
}

.w-tab-pane {
    position: relative;
    display: none;
}

.w--tab-active {
    display: block;
}

@media screen and (max-width:479px) {
    .w-nav[data-collapse=tiny] .w-nav-menu {
        display: none;
    }

    .w-nav[data-collapse=tiny] .w-nav-button,
    .w-tab-link {
        display: block;
    }
}

.w-ix-emptyfix:after {
    content: "";
}

@keyframes spin {
    0% {
        transform: rotate(0);
    }

    100% {
        transform: rotate(360deg);
    }
}

.w-dyn-empty {
    padding: 10px;
    background-color: #ddd;
}

.w-condition-invisible,
.w-dyn-bind-empty,
.w-dyn-hide {
    display: none!important;
}

.wf-layout-layout {
    display: grid!important;
}

.w-pagination-wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.w-pagination-previous {
    display: block;
    color: #333;
    font-size: 14px;
    margin-left: 10px;
    margin-right: 10px;
    padding: 9px 20px;
    background-color: #fafafa;
    border-width: 1px;
    border-color: #ccc;
    border-top: 1px solid #ccc;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    border-style: solid;
    border-radius: 2px;
}

.w-pagination-previous-icon {
    margin-right: 4px;
}

.w-pagination-next {
    display: block;
    color: #333;
    font-size: 14px;
    margin-left: 10px;
    margin-right: 10px;
    padding: 9px 20px;
    background-color: #fafafa;
    border-width: 1px;
    border-color: #ccc;
    border-top: 1px solid #ccc;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    border-style: solid;
    border-radius: 2px;
}

.w-page-count {
    width: 100%;
    text-align: center;
    margin-top: 20px;
}

.w-layout-grid {
    display: -ms-grid;
    display: grid;
    grid-auto-columns: 1fr;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto auto;
    grid-template-rows: auto auto;
    grid-row-gap: 16px;
    grid-column-gap: 16px;
}

.w-checkbox {
    display: block;
    margin-bottom: 5px;
    padding-left: 20px;
}

.w-checkbox::before {
    content: ' ';
    display: table;
    -ms-grid-column-span: 1;
    grid-column-end: 2;
    -ms-grid-column: 1;
    grid-column-start: 1;
    -ms-grid-row-span: 1;
    grid-row-end: 2;
    -ms-grid-row: 1;
    grid-row-start: 1;
}

.w-checkbox::after {
    content: ' ';
    display: table;
    -ms-grid-column-span: 1;
    grid-column-end: 2;
    -ms-grid-column: 1;
    grid-column-start: 1;
    -ms-grid-row-span: 1;
    grid-row-end: 2;
    -ms-grid-row: 1;
    grid-row-start: 1;
    clear: both;
}

.w-checkbox-input {
    float: left;
    margin: 4px 0 0 -20px;
    line-height: normal;
}

.w-checkbox-input--inputType-custom {
    border-width: 1px;
    border-color: #ccc;
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    border-left: 1px solid #ccc;
    border-style: solid;
    width: 12px;
    height: 12px;
    border-radius: 2px;
}

.w-checkbox-input--inputType-custom.w--redirected-checked {
    background-color: #3898ec;
    border-color: #3898ec;
    background-image: url(https://d3e54v103j8qbb.cloudfront.net/static/custom-checkbox-checkmark.589d534424.svg);
    background-position: 50% 50%;
    background-size: cover;
    background-repeat: no-repeat;
}

.w-checkbox-input--inputType-custom.w--redirected-focus {
    box-shadow: 0 0 3px 1px #3898ec;
}

body {
    margin: 0;
    min-height: 100%;
    /*background-color: #fff;*/
    font-family: Arial,'Helvetica Neue',Helvetica,sans-serif;
    color: #333;
    font-size: 16px;
    line-height: 1.2;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-weight: 700;
    margin-top: 0;
    margin-bottom: 0;
}

ul {
    margin-top: 0;
    margin-bottom: 10px;
    padding-left: 40px;
}

blockquote {
    margin: 0 0 10px;
    padding: 10px 20px;
    border-left: 5px solid #e2e2e2;
    font-size: 18px;
    line-height: 22px;
}

.c-header {
    position: fixed;
    top: 0;
    z-index: 600;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: 3.75em;
    padding-left: 1.25em;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: hsla(0,0%,95.7%,0);
    -webkit-transition: height .8s,background-color .8s;
    transition: height .8s,background-color .8s;
}

.c-headerNav {
    position: sticky;
    top: 0%;
    z-index: 500;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: min-content;
    padding: 0 5vw;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-evenly;
    -ms-flex-pack: justify;
    justify-content: space-evenly;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: hsl(0, 0%, 100%);
    -webkit-transition: height .8s,background-color .8s;
    transition: height .8s,background-color .8s;
}

.c-header.scrolled {
    height: 4.5em;
}

.c-logo-link {
    position: fixed;
    z-index: 500;
    -webkit-transform: translate(1.25em,.75em);
    -ms-transform: translate(1.25em,.75em);
    transform: translate(1.25em,.75em);
    color: #fafbff;
    mix-blend-mode: normal;
}

.c-logo-Lnav {
    z-index: 500;
    color: #fafbff;
    mix-blend-mode: normal;
}

.c-logo-img {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
}

c-logo-img img {
    z-index: 700;
    position: relative;
    width: 85px;
    height: 150px;
}

.c-header-nav {
    position: relative;
    z-index: 600;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 16em;
    height: 100%;
    padding-right: 1.25em;
    padding-left: 1.25em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-flex: 0;
    -webkit-flex: 0 auto;
    -ms-flex: 0 auto;
    flex: 0 auto;
    grid-column-gap: 2em;
    border-bottom-left-radius: .5em;
    background-color: #ffffff;
    -webkit-transition: color .6s,background-color .6s;
    transition: color .6s,background-color .6s;
    color: #000000;
    list-style-type: none;
}

.c-section {
    padding-top: 1em;
    padding-bottom: 1em;
}

.c-section.padding-bt-0 {
    padding-bottom: 0;
}

.c-section.page-404 {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100vh;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #141519;
    color: #fafbff;
}

.c-section.footer {
    position: relative;
    overflow: hidden;

    /* ! padding-top:2.5em; */
    /* ! padding-bottom:2px; */
    color: #fff;

    /* ! margin-right: auto; */
    /* ! margin-left: auto; */
    min-height: auto;
    max-width: 100%;
    background-color: transparent;
    background-image: url('footer.png');
    background-position: center right;
    background-clip: border-box;
    background-origin: padding-box;
    background-size: cover;
    background-repeat: no-repeat;

    /* ! height:400px; */
}

.c-section.hm-hero {
    position: relative;
    z-index: 10;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: visible;
    height: 100vh;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    color: #fafbff;
}

.c-section.info {
    position: relative;
    z-index: 5;
    top: 2620px;
    padding-top: 0;
    padding-bottom: 3em;
}

.c-section.partners {
    padding-top: 2.5em;
    padding-bottom: 11.625em;
}

.c-section.hm-app {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 61.25em;
    padding-top: 1.25em;
    padding-bottom: 9.75em;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    color: #fafbff;
}

.c-section.te {
    position: relative;
    padding-top: 8em;
    padding-bottom: 8em;
}

.c-section.hm-mi {
    position: relative;
    padding-top: 1.25em;
    padding-bottom: 8em;
    background-color: #141519;
    color: #fafbff;
}

.c-section.hm-solutions {
    position: relative;
    z-index: 5;
    overflow: hidden;
    padding-top: 0em;
    height: 100vh;
    padding-bottom: 1.25em;
}

.c-section.hm-wi {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 57.6em;
    margin-top: -1px;
    padding-top: 1.25em;
    padding-bottom: 0;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    color: rgba(255,255,255,.7);
}

.c-section.hm-values {
    margin-top: -1px;
    padding-top: 3em;
    padding-bottom: 8em;
    background-color: #141519;
    color: #fafbff;
}

.c-section.hm-hero-pause {
    position: relative;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 50;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    height: 100vh;
    padding-top: 7.75em;
    padding-bottom: 1.25em;
    background-color: #141519;
    color: #fafbff;
}

.c-section.so-hero {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    height: 100vh;
    padding-top: 7.75em;
    padding-bottom: 1.25em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    background-color: #141519;
    color: #fafbff;
}

.c-section.so-hero.careers {
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.c-section.so-product {
    position: relative;
    overflow: hidden;
    margin-top: -1px;
    margin-bottom: -1px;
    padding-top: 10em;
    padding-bottom: 10em;
    background-color: #141519;
    color: #fafbff;
}

.c-section.so-be {
    margin-top: -1px;
    background-color: #141519;
    color: #fafbff;
}

.c-section.so-list {
    position: relative;
    margin-bottom: -1px;
    padding-top: 1.25em;
    padding-bottom: 5em;
    background-color: #141519;
    color: #fafbff;
}

.c-section.so-list.is-dark {
    padding-bottom: 9.625em;
    background-color: #fafbff;
    color: #141519;
}

.c-section.so-product-light {
    position: relative;
    overflow: hidden;
    padding-top: 10em;
    padding-bottom: 9em;
    background-color: #fafbff;
    color: #141519;
}

.c-section.me-content {
    padding-top: 1.25em;
    padding-bottom: 10.5em;
    background-color: #47ceff;
}

.c-section.so-be-light {
    margin-top: -1px;
    padding-top: 2em;
    background-color: #fafbff;
    color: #141519;
}

.c-section.au-content {
    padding-top: 1.25em;
    padding-bottom: 10.5em;
    background-color: #1ee699;
}

.c-section.co-content {
    padding-top: 1.25em;
    padding-bottom: 10.5em;
    background-color: #955cff;
}

.c-section.ap-hero {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    height: 300vh;
    padding-top: 0;
    padding-bottom: 1.25em;
    background-color: #141519;
    color: #fafbff;
}

.c-section.ap-intro {
    margin-top: -1px;
    padding-top: 11.625em;
    padding-bottom: 12.5em;
    background-color: #141519;
    color: #fafbff;
}

.c-section.ap-job {
    position: relative;
    overflow: hidden;
    margin-top: -1px;
    margin-bottom: -1px;
    padding-top: 0;
    padding-bottom: 1px;
    background-color: #141519;
    color: #fafbff;
}

.c-section.ap-commit {
    position: relative;
    overflow: hidden;
    padding-top: 16.25em;
    padding-bottom: 34em;
}

.c-section.ap-possible {
    overflow: hidden;
    padding-top: 0;
}

.c-section.re-hero {
    padding-top: 15.625em;
    padding-bottom: 4em;
}

.c-section.stack {
    padding-bottom: 6em;
}

.c-section.latest {
    position: relative;
    padding-top: 11em;
    padding-bottom: 6.75em;
}

.c-section.news-content {
    position: relative;
}

.c-section.more-news {
    position: relative;
    padding-top: 6em;
}

.c-section.about {
    position: relative;
    overflow: hidden;
    margin-top: -1px;
    background-color: #141519;
    color: #fafbff;
}

.c-section.leadership {
    overflow: hidden;
    padding-bottom: 0;
}

.c-section.values {
    padding-top: 10.75em;
}

.c-section.careers {
    position: relative;
    overflow: hidden;
    padding-top: 12em;
    padding-bottom: 1.5em;
}

.c-section.history {
    padding-top: 1.25em;
    background-color: #083553;
    color: #fafbff;
}

.c-section.job-listing {
    padding-top: 3em;
    padding-bottom: 10em;
}

.c-section.hire {
    padding-top: 1.25em;
    padding-bottom: 5em;
}

.c-section.contact {
    position: relative;
    padding-top: 14em;
    padding-bottom: 5em;
}

.c-section.location {
    padding-top: 2.75em;
    padding-bottom: 10em;
}

.c-section.legal {
    position: relative;
    padding-top: 17.5em;
    padding-bottom: 1.5em;
}

.c-section.newsroom {
    position: relative;
    padding-top: 0;
    padding-bottom: 7.75em;
}

.c-section.so-industrial {
    padding-top: 1.25em;
    padding-bottom: 10.5em;
    background-color: #c7de30;
}

.c-section.insights-hero {
    padding-top: 15.625em;
    padding-bottom: 8em;
}

.c-section.cs-data {
    padding-top: 1.25em;
    padding-bottom: 10.5em;
    background-color: #141519;
    color: #fafbff;
}

.c-section.cs-about {
    position: relative;
    overflow: hidden;
    padding-bottom: 8em;
}

.c-section.camp-contact {
    position: relative;
    padding-top: 0;
    padding-bottom: 5em;
}

.c-section.lp-content {
    padding-top: 1.25em;
    padding-bottom: 10.5em;
    background-color: #141519;
    color: #fafbff;
}

.t-display-1 {
    margin-top: 0;
    margin-bottom: 0;
    font-family: Ppneuemontreal,sans-serif;
    font-size: 10.875em;
    line-height: .82;
    font-weight: 500;
    letter-spacing: -.02em;
}

.t-display-2 {
    margin-top: 0;
    margin-bottom: 0;
    font-family: Ppneuemontreal,sans-serif;
    font-size: 6.875em;
    line-height: .86;
    font-weight: 400;
    letter-spacing: -.02em;
}

.t-display-2_title {
    margin-top: 0;
    margin-bottom: 0;
    font-family: Ppneuemontreal,sans-serif;
    font-size: 3em;
    line-height: 1;
    font-weight: 400;
    letter-spacing: -.02em;
}

.t-display-2.is-bold.percentage {
    opacity: 0;
}

.t-display-3 {
    margin-top: 0;
    margin-bottom: 0;
    font-family: Ppneuemontreal,sans-serif;
    font-size: 5.375em;
    line-height: .9;
    font-weight: 400;
    letter-spacing: -.02em;
}

.t-display-4 {
    margin-top: 0;
    margin-bottom: 0;
    font-family: Ppneuemontreal,sans-serif;
    font-size: 4.875em;
    line-height: .82;
    font-weight: 400;
    letter-spacing: -.02em;
}

.t-display-4.is-te {
    font-size: 3.625em;
    line-height: 1;
    text-indent: 4em;
}

.t-display-4.swiper-pag {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
}

.t-display-4.nav-link {
    -webkit-transition: opacity .6s;
    transition: opacity .6s;
}

.t-display-5 {
    margin-top: 0;
    margin-bottom: 0;
    font-family: Ppneuemontreal,sans-serif;
    font-size: 3em;
    line-height: .96;
    font-weight: 400;
    letter-spacing: 0;
    font-size: 45rem;
    justify-content: center;

    /* ! align-items: center; */
}

.t-display-5.swiper-pag {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
}

.t-display-6 {
    margin-top: 0;
    margin-bottom: 0;
    font-family: Ppneuemontreal,sans-serif;
    font-size: 2em;
    line-height: .96;
    font-weight: 400;
    letter-spacing: .02em;
}

.t-body-1 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 1.125em;
    line-height: 1.3;
}

.t-body-2 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 1em;
    line-height: 1.3;
    letter-spacing: .02em;
}

.t-micro-1 {
    font-family: Dmmono,sans-serif;
    font-size: 16px;
    line-height: 1.3;
    font-weight: 400;
    letter-spacing: .002em;
    text-transform: uppercase;
}

.t-micro-2 {
    font-family: Dmmono,sans-serif;
    font-size: 12px;
    line-height: 1.2;
    font-weight: 500;
    text-transform: uppercase;
}

.t-micro-2.is-grey300 {
    color: #5d6069;
}

.c-btn {
    padding: .75em 1.5em;
    border: 1px solid #333;
    background-color: #333;
    text-decoration: none;
}

.c-btn.is-large {
    width: 100%;
    padding-top: 5.625em;
    padding-bottom: 5.625em;
    border-color: #141519;
    border-radius: 500px;
    background-color: rgba(20,21,26,0);
    -webkit-transition: color .6s,background-color .6s;
    transition: color .6s,background-color .6s;
    color: #141519;
    text-align: center;
}

.c-btn.is-large:hover {
    background-color: #141519;
    color: #fafbff;
}

.c-btn.is-large.is-light {
    border-color: #fafbff;
    -webkit-transition: color .6s,background-color .6s;
    transition: color .6s,background-color .6s;
    color: #fafbff;
}

.c-btn.is-large.is-light:hover {
    background-color: #fafbff;
    color: #141519;
}

.c-btn.is-main {
    position: relative;
    width: 100%;
    padding: 0 0 1em;
    border-style: none none solid;
    background-color: transparent;
}

.c-btn.is-menu {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 23.125em;
    height: 7.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-color: #141519;
    border-top-right-radius: .5em;
    background-color: #fafbff;
    color: #141519;
    text-align: center;
}

.c-pw-form {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    max-width: 44.375em;
    padding-right: 2em;
    padding-left: 2em;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    text-align: center;
}

.c-color {
    background-color: #ccc;
}

.c-color.black {
    background-color: #000;
}

.c-color.carbon {
    background-color: #141519;
}

.c-color.cloud {
    background-color: #fafbff;
}

.c-color.grey-100 {
    background-color: #e7e8e9;
}

.c-color.grey-200 {
    background-color: #7b7f8a;
}

.c-color.grey-300 {
    background-color: #5d6069;
}

.c-color.grey-400 {
    background-color: #333438;
}

.c-color.grey-500 {
    background-color: #292a2e;
}

.c-color.grey-600 {
    background-color: #212226;
}

.c-color.medical {
    background-color: #47ceff;
}

.c-color.industrial {
    background-color: #c7de30;
}

.c-color.automotive {
    background-color: #1ee699;
}

.c-color.consumer {
    background-color: #955cff;
}

.o-container {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 1.25em;
    padding-left: 1.25em;
}

.o-container_title {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 1.25em;
    padding-left: 1.25em;
}

/*
.container_BestPractices {
    width: 100%;
    position: relative;
    top: 900px;
    margin-right: auto;
    margin-left: auto;
    padding-right: 1.25em;
    padding-left: 1.25em;
}
*/
.o-container.z-index-1.hm-app {
    height: 100%;
}

.c-header-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: 100%;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-nav-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    padding: 0;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    cursor: pointer;
}

.c-line {
    width: 100%;
    height: 1px;
    background-color: #000;
}

.c-line.list {
    background-color: #424347;
}

.c-line.re-pag {
    width: 1px;
    height: 100%;
}

.c-line.bio {
    background-color: #292a2e;
}

.o-col {
    width: 100%;
}

.o-col._w-1 {
    max-width: 4.166666666666667%;
}

.o-col._w-2 {
    max-width: 8.333333333333334%;
}

.o-col._w-3 {
    max-width: 12.5%;
}

.o-col._w-4 {
    max-width: 16.666666666666668%;
}

.o-col._w-4.load {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-align-self: stretch;
    -ms-flex-item-align: stretch;
    align-self: stretch;
}

.o-col._w-5 {
    max-width: 20.833333333333336%;
}

.o-col._w-6 {
    max-width: 25%;
}

.o-col._w-6.swiper-pag-wrap {
    position: relative;
}

.o-col._w-7 {
    max-width: 29.166666666666668%;
}

.o-col._w-8 {
    max-width: 33.333333333333336%;
}

.o-col._w-8_title {
    max-width: 70%;
}

.o-col._w-9 {
    max-width: 37.5%;
}

.o-col._w-10 {
    max-width: 41.66666666666667%;
}

.o-col._w-11 {
    max-width: 45.833333333333336%;
}

.o-col._w-12 {
    max-width: 50%;
}

.o-col._w-13 {
    max-width: 54.16666666666667%;
}

.o-col._w-14 {
    max-width: 58.333333333333336%;
}

.o-col._w-15 {
    max-width: 62.50000000000001%;
}

.o-col._w-16 {
    max-width: 66.66666666666667%;
}

.o-col._w-16.shrink-0 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
}

.o-col._w-17 {
    max-width: 70.83333333333334%;
}

.o-col._w-18 {
    max-width: 75%;
}

.o-col._w-19 {
    max-width: 79.16666666666667%;
}

.o-col._w-20 {
    max-width: 83.33333333333334%;
}

.o-col._w-21 {
    max-width: 87.5%;
}

.o-col._w-22 {
    max-width: 91.66666666666667%;
}

.o-col._w-23 {
    max-width: 95.83333333333334%;
}

.o-col._w-24 {
    max-width: 100%;
}

.c-sg-block {
    width: 100%;
    height: 4em;
    background-color: #000;
}

.o-grid {
    display: -ms-grid;
    display: grid;
    width: 100%;
    grid-auto-columns: 1fr;
    grid-column-gap: 1em;
    grid-row-gap: 1em;
    -ms-grid-columns: 1fr;
    grid-template-columns: 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
}

.o-grid.sg-colors {
    -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
}

.o-grid.partners {
    overflow: hidden;
    grid-column-gap: 0em;
    grid-row-gap: 0em;
    -ms-grid-columns: 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    border: 1px solid #141519;
    border-radius: .5em;
}

.o-grid.footer {
    /* ! grid-column-gap:1.5em; */
    /* ! grid-row-gap:1.5em; */
    -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr;
    text-align: left !important;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    margin-top: 1em;
}

.o-grid.legal {
    grid-column-gap: 1em;
    grid-row-gap: 1em;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
}

.o-grid.so-be {
    grid-column-gap: 3em;
    grid-row-gap: 3em;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
}

.o-grid.down {
    grid-column-gap: 3em;
    grid-row-gap: 3em;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
}

.o-grid.partners-xxl {
    overflow: hidden;
    grid-column-gap: 0em;
    grid-row-gap: 0em;
    -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
    border: 1px solid #141519;
    border-radius: .5em;
}

.o-grid.values {
    grid-column-gap: 2.5em;
    grid-row-gap: 2.5em;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
}

.o-grid.perks {
    grid-column-gap: 2.5em;
    grid-row-gap: 2.5em;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    padding-bottom: 2rem;
}

.o-grid.datasheet {
    grid-column-gap: 3em;
    grid-row-gap: 3em;
    -ms-grid-columns: 1fr;
    grid-template-columns: 1fr;
}

.o-grid.values {
    min-height: 38em;
    grid-column-gap: 2.5em;
    grid-row-gap: 2.5em;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
}

.c-title {
    margin-bottom: 2em;
}

.c-btn-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-btn-inner.is-main {
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.c-global-css {
    position: fixed;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    display: none;
}

.o-row {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin-right: auto;
    margin-left: auto;
}

.o-row._404 {
    position: relative;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.o-row.hm-hero {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.o-row.hm-hero_title {
    display: flex;
    flex-direction: row;
    text-align: left;
}

.o-row.sec-header {
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    padding-top: 8rem;
}

.o-row.hm-solutions {
    position: relative;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
}

.o-row.info {
    margin-top: -1px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.o-row.info.is-medical {
    -webkit-transition: color .6s;
    transition: color .6s;
}

.o-row.info.is-medical:hover {
    color: #47ceff;
}

.o-row.info.is-industrial {
    -webkit-transition: color .6s;
    transition: color .6s;
}

.o-row.info.is-industrial:hover {
    color: #c7de30;
}

.o-row.info.is-automotive {
    -webkit-transition: color .6s;
    transition: color .6s;
}

.o-row.info.is-automotive:hover {
    color: #1ee699;
}

.o-row.info.is-consumer {
    -webkit-transition: color .6s;
    transition: color .6s;
}

.o-row.info.is-consumer:hover {
    color: #955cff;
}

.o-row.partners-header {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    padding-top: 4rem;
    padding-bottom: 4rem;
}

.o-row.swiper.hm-solutions {
    position: static;
    min-height: 58em;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.o-row.hm-values {
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.o-row.list {
    margin-top: -1px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.o-row.pre-footer {
    margin-bottom: 27.375em;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.o-row.menu {
    position: relative;
    height: 100%;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
}

.o-row.load {
    height: 100%;
    padding-bottom: 2.5em;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    -webkit-align-self: stretch;
    -ms-flex-item-align: stretch;
    -ms-grid-row-align: stretch;
    align-self: stretch;
}

.o-row.hm-app {
    height: 100%;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.o-row.hm-hero-pause {
    height: 100%;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.o-row.so-hero {
    position: relative;
    z-index: 5;
    display: -ms-grid;
    display: grid;
    height: 100%;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    grid-auto-columns: 1fr;
    grid-column-gap: 0em;
    grid-row-gap: 0em;
    -ms-grid-columns: 58.33% 1fr;
    grid-template-columns: 58.33% 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
}

.o-row.ap-hero {
    position: relative;
    height: 100%;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.o-row.ap-job {
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
}

.o-row.re-hero {
    position: relative;
}

.o-row.news {
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
}

.o-row.news-list {
    margin-top: -1px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.o-row.re-next {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.o-row.about {
    margin-top: -4em;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    grid-column-gap: 1.5em;
    grid-row-gap: 1.5em;
}

.o-row.content-end {
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
}

.o-row.leadership-title {
    position: relative;
}

.o-row.values-title {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.o-row.ab-tech {
    position: relative;
}

.o-row.job-op {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.o-row.history {
    grid-column-gap: 2.5em;
    grid-row-gap: 2.5em;
}

.o-row.job-header {
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.o-row.te-control {
    position: relative;
    z-index: 100;
    -webkit-transform: translate(0,-3.8em);
    -ms-transform: translate(0,-3.8em);
    transform: translate(0,-3.8em);
}

.o-row.hm-hero-content {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.o-row.lp-content,
.o-row.related-datasheets {
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.c-body {
    background-color: #fafbff !important;
    font-family: Ppneuemontreal,sans-serif;
    color: #141519;
    font-size: 1vw;
    font-weight: 400;
}

.c-pw-form-block {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: 100vh;
    margin-bottom: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-reel-contain {
    position: relative;
    display: block;
    width: 100vw;
    height: 100%;
    padding-top: 0;
    -webkit-transition: padding 250ms ease-in-out;
    transition: padding 250ms ease-in-out;
    cursor: pointer;
}

.c-reel-contain.hm-hero {
    position: absolute;
}

.c-reel {
    position: absolute;
    top: 195%;
    width: 100%;
    height: 100%;
}

.c-reel_other {
    position: relative;
    width: 100%;
    height: 100%;
}

.margin-2 {
    margin-bottom: .125em;
}

.margin-4 {
    margin-bottom: .25em;
}

.margin-8 {
    margin-bottom: .5em;
}

.margin-12 {
    margin-bottom: .75em;
}

.margin-16 {
    margin-bottom: 1em;
}

.margin-24 {
    margin-bottom: 1.5em;
}

.margin-32 {
    margin-bottom: 2em;
}

.margin-40 {
    margin-bottom: 2.5em;
}

.margin-48 {
    margin-bottom: 3em;
}

.margin-56 {
    margin-bottom: 3.5em;
}

.margin-64 {
    margin-bottom: 4em;
}

.margin-80 {
    margin-bottom: 5em;
}

.margin-96 {
    margin-bottom: 6em;
}

.margin-120 {
    margin-bottom: 7.5em;
}

.margin-128 {
    margin-bottom: 8em;
}

.margin-136 {
    margin-bottom: 8.5em;
}

.margin-144 {
    margin-bottom: 9em;
}

.margin-160 {
    margin-bottom: 10em;
}

.margin-176 {
    margin-bottom: 11em;
}

.z-index-1 {
    position: relative;
    z-index: 5;
}

.z-index-2 {
    position: relative;
    top: 190%;
    z-index: 10;
}

.z-index-22 {
    position: relative;
    bottom: 45%;
    z-index: 10;
}

.z-index-23 {
    position: relative;
    z-index: 10;
}

.z-index-3 {
    position: relative;
    z-index: 15;
}

.z-index-4 {
    position: relative;
    z-index: 20;
}

.z-index-5 {
    position: relative;
    z-index: 25;
}

.c-txt-link {
    -webkit-transition: color .4s;
    transition: color .4s;
}

.c-txt-link:hover {
    color: #e7e8e9;
}

.c-txt-link.is-light:hover {
    color: #c7de30;
}

.c-img-contain {
    position: relative;
    overflow: hidden;
}

.c-img-contain.partner {
    width: 100%;
    height: 100%;
}

.c-img-contain.app {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
}

.c-img-contain.te-headshot {
    width: 4.5em;
    height: 4.5em;
    border-radius: 50%;
}

.c-img-contain.mi-img {
    height: 47.125em;
    border-radius: .5em;
}

.c-img-contain.hm-wi {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
}

.c-img-contain.footer-shape {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
    width: 51%;
    height: 110%;
    -webkit-transform: translate(0,.5em);
    -ms-transform: translate(0,.5em);
    transform: translate(0,.5em);
}

.c-img-contain.so-hero {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
}

.c-img-contain.so-content {
    height: 40.75em;
    border-radius: .5em;
}

.c-img-contain.ap-hero {
    position: absolute;
    left: auto;
    top: auto;
    right: auto;
    bottom: auto;
    width: 50%;
    height: 85vh;
    border-radius: .5em;
}

.c-img-contain.ap-job-img {
    width: 76.8em;
    height: 46.875em;
    border-top-left-radius: .5em;
    border-bottom-left-radius: .5em;
    -webkit-transform: translate(1.5em,0);
    -ms-transform: translate(1.5em,0);
    transform: translate(1.5em,0);
}

.c-img-contain.ap-possible {
    width: 51.0625em;
    height: 34.0625em;
    border-radius: .5em;
}

.c-img-contain.news {
    padding-top: 100%;
    border-radius: .5em;
}

.c-img-contain.main-image {
    width: 100%;
    height: 44em;
    border-radius: .5em;
}

.c-img-contain.author {
    width: 3.5em;
    height: 3.5em;
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    border-radius: 50%;
}

.c-img-contain.team {
    height: 48.75em;
    border-radius: .5em;
}

.c-img-contain.leadership {
    height: 36.25em;
    border-radius: .5em;
    color: #fafbff;
}

.c-img-contain.ab-tech {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    width: 60.55em;
    height: 68.51249999999999em;
    -webkit-transform: rotate(33deg) translate(-14em,2em);
    -ms-transform: rotate(33deg) translate(-14em,2em);
    transform: rotate(33deg) translate(-14em,2em);
}

.c-img-contain.job-op {
    height: 48.75em;
    border-radius: .5em;
}

.c-img-contain.history-1 {
    height: 36em;
    border-radius: .5em;
}

.c-img-contain.history-2 {
    height: 48.75em;
    border-radius: .5em;
}

.c-img-contain.hire {
    height: 51.875em;
    border-radius: .5em;
}

.c-img-contain.perks {
    width: 4em;
    height: 4em;
}

.c-img-contain.so-industrial {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    overflow: visible;
    width: 110%;
    height: 100%;
    -webkit-transform: translate(-9.5%,0);
    -ms-transform: translate(-9.5%,0);
    transform: translate(-9.5%,0);
}

.c-img-contain.pause {
    display: none;
}

.c-img-contain.lp {
    height: 50em;
    border-radius: 0 .5em .5em 0;
    -webkit-transform: translate(-2em,0);
    -ms-transform: translate(-2em,0);
    transform: translate(-2em,0);
}

.c-img {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 110%;
    -webkit-transform: translate(0,-5%);
    -ms-transform: translate(0,-5%);
    transform: translate(0,-5%);
    -o-object-fit: cover;
    object-fit: cover;
}

.c-img.is-static {
    position: static;
    height: 100%;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
}

.c-img.ab-tech,
.c-img.footer-glyph {
    height: 100%;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
}

.c-img.so-industrial {
    width: 100%;
    height: 230%;
    -webkit-transform: translate(0,-15%);
    -ms-transform: translate(0,-15%);
    transform: translate(0,-15%);
}

.t-body-3 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: .875em;
    line-height: 1.3;
}

.is-caps {
    text-transform: uppercase;
}

.hide,
.hide-desktop {
    display: none;
}

.c-nav-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.is-bold {
    font-weight: 600;
}

.t-display-7 {
    margin-top: 0;
    margin-bottom: 0;
    font-family: Ppneuemontreal,sans-serif;
    font-size: 1.5em;
    line-height: 1;
    font-weight: 400;
    letter-spacing: .02em;
}

.t-display-7.nav-link {
    -webkit-transition: opacity .6s;
    transition: opacity .6s;
}

.indent-64 {
    letter-spacing: 0;
}

.indent-32 {
    letter-spacing: 0;
    text-indent: 2em;
}

.t-micro-3 {
    font-family: Dmmono,sans-serif;
    font-size: 10px;
    line-height: 1.2;
    font-weight: 400;
    text-transform: uppercase;
}

.t-micro-4 {
    font-family: Dmmono,sans-serif;
    font-size: 9px;
    line-height: 1.2;
    font-weight: 400;
    text-transform: uppercase;
}

.t-label-1 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 13px;
    line-height: 1;
    font-weight: 500;
    letter-spacing: .02em;
}

.t-label-2 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: .9375em;
    line-height: 1;
    font-weight: 500;
    letter-spacing: .02em;
}

.t-label-2.is-2 {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
}

.t-label-3 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 1.125em;
    line-height: 1;
    font-weight: 500;
    letter-spacing: .02em;
}

.t-label-4 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 1.5em;
    line-height: .82;
    font-weight: 500;
    letter-spacing: 0;
}

.t-label-4.is-2 {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    line-height: 1;
}

.t-label-4.is-1 {
    line-height: 1;
}

.t-label-5 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 13px;
    line-height: 1;
    font-weight: 500;
    letter-spacing: .02em;
}

.is-medium {
    font-weight: 500;
}

.c-ornement {
    z-index: 5;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    overflow: hidden;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    align-self: flex-end;
    grid-column-gap: 0.5em;
}

.c-ornement.hm-hero-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-ornement.solutions-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    padding-top: 30.4em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-ornement.app-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    padding-bottom: 12em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 16em;
    grid-row-gap: 6.5em;
    opacity: .7;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-ornement.mi-lt {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: 0;
    padding-bottom: 7.75em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(1.25em,0);
    -ms-transform: translate(1.25em,0);
    transform: translate(1.25em,0);
}

.c-ornement.wi-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    padding-top: 1.25em;
    padding-bottom: 12.125em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 6.5em;
    grid-row-gap: 6.5em;
    opacity: .7;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-ornement.menu-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    padding-bottom: 16em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
    color: #7b7f8a;
}

.c-ornement.load-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    padding-top: 16.5em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-ornement.hm-hero-pause {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    -webkit-transform: translate(-34.5em,0);
    -ms-transform: translate(-34.5em,0);
    transform: translate(-34.5em,0);
}

.c-ornement.so-content {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-ornement.so-hero-lt {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: 0;
    padding-bottom: 0;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(1.25em,0);
    -ms-transform: translate(1.25em,0);
    transform: translate(1.25em,0);
}

.c-ornement.so-content {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    padding-top: 21em;
    padding-bottom: 23.6em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 6.5em;
    grid-row-gap: 6.5em;
    opacity: 1;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-ornement.so-content-lt {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: 0;
    padding-bottom: 0;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(0,-.3em);
    -ms-transform: translate(0,-.3em);
    transform: translate(0,-.3em);
}

.c-ornement.app-lt {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: 0;
    padding-top: 26.5em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(1.25em,0);
    -ms-transform: translate(1.25em,0);
    transform: translate(1.25em,0);
}

.c-ornement.mi-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    padding-top: 8.25em;
    padding-bottom: 12.125em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 12.5em;
    grid-row-gap: 6.5em;
    opacity: 1;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-ornement.medical-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    padding-top: 21em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 10.25em;
    grid-row-gap: 10.25em;
    opacity: 1;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-ornement.re-hero {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    padding-bottom: .3em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-ornement.about-lt {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    -webkit-transform: translate(1.25em,-1.25em);
    -ms-transform: translate(1.25em,-1.25em);
    transform: translate(1.25em,-1.25em);
}

.c-ornement.about-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 10em;
    grid-row-gap: 10em;
    opacity: 1;
    -webkit-transform: translate(-.75em,-11.25em);
    -ms-transform: translate(-.75em,-11.25em);
    transform: translate(-.75em,-11.25em);
}

.c-ornement.contact-rt {
    padding-top: 22.25em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    grid-column-gap: 0.5em;
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 21.6em;
    grid-row-gap: 6.5em;
    opacity: 1;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-ornement._404 {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    padding-top: 0;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-ornement-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.c-ornement-icon.hm-hero {
    width: 100%;
    -webkit-transform: translate(0,3px);
    -ms-transform: translate(0,3px);
    transform: translate(0,3px);
}

.c-ornement-icon.app-2 {
    position: relative;
    z-index: 100;
    -webkit-transform: translate(0,3px);
    -ms-transform: translate(0,3px);
    transform: translate(0,3px);
}

.c-ornement-icon.so-content {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    -webkit-transform: translate(1.25em,-29.375em);
    -ms-transform: translate(1.25em,-29.375em);
    transform: translate(1.25em,-29.375em);
}

.c-ornement-icon.about-leadership {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    -webkit-transform: translate(0,3px);
    -ms-transform: translate(0,3px);
    transform: translate(0,3px);
}

.c-overlay {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    background-color: rgba(0,0,0,.3);
}

.overlay {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    background-color: rgba(0,0,0,.3);
}

.overlay_title {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    background-color: rgba(0,0,0,.3);
}

.overlay_primary {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 195%;
    right: 0;
    bottom: 0;
    z-index: 3;
    background-color: rgba(0,0,0,.3);
}

.c-overlay.ap-hero {
    display: none;
    background-color: rgba(0,0,0,.2);
}

.margin-192 {
    margin-bottom: 12em;
}

.c-btn-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.margin-72 {
    margin-bottom: 4.5em;
}

.c-info-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
}

.c-partner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 12.625em;
    margin-right: -1px;
    margin-bottom: -1px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-right: 1px solid #141519;
    border-bottom: 1px solid #141519;
}

.c-partner.view {
    width: 100%;
    height: 100%;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
    border-style: none solid none none;
    border-width: 1px;
    border-color: #000 #141519 #000 #000;
    border-radius: 0;
    background-color: transparent;
    font-size: 1vw;
}

.c-partner.view-xxl {
    width: 100%;
    height: 100%;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
    border-style: none;
    border-width: 1px;
    border-color: #000 #141519 #000 #000;
    border-radius: 0;
    background-color: transparent;
    font-size: 1vw;
}

.margin-244 {
    margin-bottom: 15.25em;
}

.c-plus-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.c-plus-icon.mi-lt {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(1.25em,-1.5em);
    -ms-transform: translate(1.25em,-1.5em);
    transform: translate(1.25em,-1.5em);
}

.c-plus-icon.mi-rt {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-1.25em,-1.5em);
    -ms-transform: translate(-1.25em,-1.5em);
    transform: translate(-1.25em,-1.5em);
}

.c-plus-icon.so-content-lt {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(1.25em,5em);
    -ms-transform: translate(1.25em,5em);
    transform: translate(1.25em,5em);
}

.c-plus-icon.so-content-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-1.25em,5em);
    -ms-transform: translate(-1.25em,5em);
    transform: translate(-1.25em,5em);
}

.c-plus-icon.re-lt {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(1.25em,2em);
    -ms-transform: translate(1.25em,2em);
    transform: translate(1.25em,2em);
}

.c-plus-icon.re-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-1.25em,2em);
    -ms-transform: translate(-1.25em,2em);
    transform: translate(-1.25em,2em);
}

.c-plus-icon.ab-lt {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(1.25em,1.75em);
    -ms-transform: translate(1.25em,1.75em);
    transform: translate(1.25em,1.75em);
}

.c-plus-icon.ab-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-1.25em,1.75em);
    -ms-transform: translate(-1.25em,1.75em);
    transform: translate(-1.25em,1.75em);
}

.c-plus-icon.contact-lt {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    width: 3.75em;
    -webkit-transform: translate(1.25em,0);
    -ms-transform: translate(1.25em,0);
    transform: translate(1.25em,0);
}

.c-plus-icon.contact-rt {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    width: 3.75em;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-plus-icon.news-lt {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-plus-icon.news-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-plus-icon.more-news-lt {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(1.25em,0);
    -ms-transform: translate(1.25em,0);
    transform: translate(1.25em,0);
}

.c-plus-icon.more-news-rt {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-1.25em,0);
    -ms-transform: translate(-1.25em,0);
    transform: translate(-1.25em,0);
}

.c-te-top {
    height: 27em;
}

.c-te-bt {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 6em;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.c-te-client {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 1.5em;
    grid-row-gap: 1.5em;
}

.swiper-controls {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 0.5em;
    grid-row-gap: 0.5em;
}

.swiper-controls.solutions {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    z-index: 25;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-transform: translate(-1em,0);
    -ms-transform: translate(-1em,0);
    transform: translate(-1em,0);
}

.swiper-prev {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 3.5em;
    height: 3.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #141519;
    border-radius: 50%;
    background-color: transparent;
    -webkit-transition: background-color .4s,color .4s;
    transition: background-color .4s,color .4s;
    color: #141519;
    cursor: pointer;
}

.swiper-prev:hover {
    background-color: #141519;
    color: #fafbff;
}

.swiper-arrow {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.swiper-next {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 3.5em;
    height: 3.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #141519;
    border-radius: 50%;
    background-color: transparent;
    -webkit-transition: color .4s,background-color .4s;
    transition: color .4s,background-color .4s;
    color: #141519;
    cursor: pointer;
}

.swiper-next:hover {
    background-color: #141519;
    color: #fafbff;
}

.c-ornement-wrap.hm-app {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-ornement-wrap.load {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: auto;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 16.5em;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-values-title {
    position: relative;
    z-index: 1;
    margin-top: -18em;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
}

.c-list-lt {
    display: -ms-grid;
    display: grid;
    width: 35.5em;
    grid-auto-columns: 1fr;
    grid-column-gap: 3.75em;
    grid-row-gap: 3.75em;
    -ms-grid-columns: 40px 1fr;
    grid-template-columns: 40px 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
}

.c-list-lt.is-light {
    color: #fafbff;
}

.c-list-lt.tech {
    width: auto;
    -ms-grid-columns: 40px;
    grid-template-columns: 40px;
}

.c-list-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    min-height: 10em;
    padding-top: 1.5em;
    padding-bottom: 4em;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
}

.c-list-inner.is-large {
    padding-bottom: 5.25em;
}

.c-list-inner.tech {
    padding-bottom: 5.25em;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    grid-column-gap: 12.25em;
    grid-row-gap: 2em;
}

.margin-88 {
    margin-bottom: 5.5em;
}

.c-footer-list {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    grid-column-gap: 0.25em;
    grid-row-gap: 0.25em;
}

.c-footer-item {
    -webkit-transition: color .4s;
    transition: color .4s;
}

.c-footer-item:hover {
    color: #7b7f8a;
}

.c-social-wrap {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 1em;
    grid-row-gap: 1em;
}

.c-social-item {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 2.5em;
    height: 2.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #141519;
    border-radius: 50%;
}

.c-social-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(1px,3px);
    -ms-transform: translate(1px,3px);
    transform: translate(1px,3px);
}

.c-social-icon.share {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
}

.margin-216 {
    margin-bottom: 3.5em;
}

.is-grey100 {
    color: #e7e8e9;
}

.c-arrow-link {
    position: absolute;
    left: 50%;
    top: auto;
    right: auto;
    bottom: 0;
    z-index: 60;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate(-50%,-1.25em);
    -ms-transform: translate(-50%,-1.25em);
    transform: translate(-50%,-1.25em);
}

.c-arrow-link.so-hero {
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    -webkit-transform: translate(-1.25em,-1.25em);
    -ms-transform: translate(-1.25em,-1.25em);
    transform: translate(-1.25em,-1.25em);
}

.c-arrow-link.ap-hero {
    position: static;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
}

.c-arrow-link.hm-hero {
    position: static;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
}

.c-arrow {
    -webkit-transition: -webkit-transform .8s;
    transition: transform .8s;
    transition: transform .8s,-webkit-transform .8s;
}

.c-arrow:hover {
    -webkit-transform: translate(0,4px);
    -ms-transform: translate(0,4px);
    transform: translate(0,4px);
}

.swiper-wrapper {
    position: relative;
    width: 100%;
}

.swiper-wrapper.solutions {
    position: static;
}

.swiper-wrapper.leadership {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.swiper-slide {
    position: relative;
    width: 100%;
}

.swiper-slide.te {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.swiper-slide.solutions {
    position: static;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.swiper-slide.leadership {
    width: 29.125em;
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
}

.c-menu {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 1000;
    display: none;
    overflow: hidden;
    width: 100%;
    height: 100%;
    padding-top: 1.25em;
    padding-bottom: 3em;
    background-color: #141519;
    color: #fafbff;
}

.c-menu-links {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: center;
    grid-column-gap: 0.5em;
    grid-row-gap: 0.5em;
}

.is-right {
    text-align: right;
}

.is-grey200 {
    color: #7b7f8a;
}

.c-menu-txt {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
}

.c-menu-sub-links {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    grid-column-gap: 0.75em;
    grid-row-gap: 0.75em;
}

.c-menu-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: center;
}

.margin-20 {
    margin-bottom: 1.25em;
}

.c-menu-close {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    z-index: 100;
    width: 4.125em;
    -webkit-transform: translate(-1.25em,1.25em);
    -ms-transform: translate(-1.25em,1.25em);
    transform: translate(-1.25em,1.25em);
    cursor: pointer;
}

.c-menu-noise {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 5;
    display: block;
    width: 100%;
    height: 100%;
    background-image: url("https://uploads-ssl.webflow.com/6356a48dff70251d68facdf8/6358fa1481ac6f97acafa356_grain.gif");
    background-position: 0 0;
    background-size: auto;
    opacity: .03;
}

.c-load {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 1500;
    display: none;
    width: 100%;
    height: 100%;
    background-color: #141519;
    color: #fafbff;
}

.t-load {
    margin-top: 0;
    margin-bottom: 0;
    font-family: Ppneuemontreal,sans-serif;
    font-size: 23.75em;
    line-height: .82;
    font-weight: 600;
    letter-spacing: -.03em;
}

.c-load-num {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    grid-column-gap: 2em;
    grid-row-gap: 2em;
    -webkit-transform: translate(0,2em);
    -ms-transform: translate(0,2em);
    transform: translate(0,2em);
}

.c-load-bar {
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 12px;
    background-color: rgba(250,251,255,.1);
}

.c-load-progress {
    width: 0%;
    height: 100%;
    background-color: #fafbff;
}

.c-load-inner {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
}

.c-solutions-pag {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
}

.c-social-menu-item {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 2.5em;
    height: 2.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #fafbff;
    border-radius: 50%;
}

.c-btn-txt {
    position: relative;
    overflow: hidden;
}

.swiper-so-next {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 3.5em;
    height: 3.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #141519;
    border-radius: 50%;
    background-color: transparent;
    -webkit-transition: color .4s,background-color .4s;
    transition: color .4s,background-color .4s;
    color: #141519;
    cursor: pointer;
}

.swiper-so-next:hover {
    background-color: #141519;
    color: #fafbff;
}

.swiper-so-next.solutions {
    width: 3.5em;
    height: 3.5em;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    -webkit-transition: color .4s,background-color .4s,opacity .4s;
    transition: color .4s,background-color .4s,opacity .4s;
}

.swiper-so-next.solutions:hover {
    background-color: #141519;
    color: #fafbff;
}

.swiper-so-prev {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 3.5em;
    height: 3.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #141519;
    border-radius: 50%;
    background-color: transparent;
    -webkit-transition: background-color .4s,color .4s;
    transition: background-color .4s,color .4s;
    color: #141519;
    cursor: pointer;
}

.swiper-so-prev:hover {
    background-color: #141519;
    color: #fafbff;
}

.swiper-so-prev.solutions {
    width: 3.5em;
    height: 3.5em;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    -webkit-transition: background-color .4s,color .4s,opacity .4s;
    transition: background-color .4s,color .4s,opacity .4s;
    color: #141519;
}

.swiper-so-prev.solutions:hover {
    color: #fafbff;
}

.swiper-te-next {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 3.5em;
    height: 3.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #141519;
    border-radius: 50%;
    background-color: transparent;
    -webkit-transition: color .4s,background-color .4s;
    transition: color .4s,background-color .4s;
    color: #141519;
    cursor: pointer;
}

.swiper-te-next:hover {
    background-color: #141519;
    color: #fafbff;
}

.swiper-te-prev {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 3.5em;
    height: 3.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #141519;
    border-radius: 50%;
    background-color: transparent;
    -webkit-transition: background-color .4s,color .4s;
    transition: background-color .4s,color .4s;
    color: #141519;
    cursor: pointer;
}

.swiper-te-prev:hover {
    background-color: #141519;
    color: #fafbff;
}

.c-reel-controls {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    z-index: 100;
    width: 2em;
    height: 2em;
    -webkit-transform: translate(-1.25em,-1.25em);
    -ms-transform: translate(-1.25em,-1.25em);
    transform: translate(-1.25em,-1.25em);
    cursor: pointer;
}

.c-reel-controls_primary {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 100%;
    z-index: 100;
    width: 2em;
    height: 2em;
    -webkit-transform: translate(-1.25em,-1.25em);
    -ms-transform: translate(-1.25em,-1.25em);
    transform: translate(-1.25em,-1.25em);
    cursor: pointer;
}

.c-reel-play-wrap {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    display: none;
}

.c-reel-play-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-reel-pause-wrap {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    display: none;
}

.c-reel-pause-wrap.is-active {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.c-reel-pause-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.margin-104 {
    margin-bottom: 6.5em;
}

.c-hm-pause-mask {
    position: relative;
}

.c-hm-pause-txt {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
}

.swiper-controls-te {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 0.5em;
    grid-row-gap: 0.5em;
}

.swiper-controls-te.testimonials {
    position: relative;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    z-index: 30;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
}

.c-so-hero-title {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    grid-column-gap: 2em;
    grid-row-gap: 2em;
}

.c-so-hero-icon {
    width: 5em;
}

.c-card {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 23.75em;
    padding: 2.5em 4em 2.5em 2.5em;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    border: 2px solid #141519;
    border-radius: .5em;
}

.c-card.download {
    height: 31em;
    padding-right: 7em;
    border-color: #213fbb;
    -webkit-transition: color .6s,background-color .6s;
    transition: color .6s,background-color .6s;

    /* align-items: center; */
    /* ! justify-content: center; */
}

.c-card.download:hover {
    background-color: #263884;
    color: #fafbff;
}

.c-card.values {
    height: 28.25em;
    border-color: #141519;
}

.c-card.perks {
    height: 22em;
    padding-right: 2.5em;
    border-color: #fafbff;
}

.c-card.is-industrial {
    border-color: #fafbff;
}

.c-card.datasheet {
    height: auto;
    padding: 4em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-color: #141519;
    -webkit-transition: color .6s,background-color .6s;
    transition: color .6s,background-color .6s;
}

.c-card.datasheet:hover {
    background-color: #141519;
    color: #fafbff;
}

.c-card.datasheet.is-gated {
    grid-column-gap: 5em;
}

.c-be-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.c-be-icon.datasheet {
    width: 6em;
}

.c-card-top.datasheet {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 2.5em;
}

.c-card-top.is-industrial {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    grid-column-gap: 2em;
    grid-row-gap: 2em;
}

.c-card-bt {
    -webkit-align-self: flex-start;
    -ms-flex-item-align: start;
    align-self: flex-start;
}

.c-card-bt.datasheet {
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
}

.c-be-title {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    grid-column-gap: 0.75em;
    grid-row-gap: 0.75em;
}

.c-card-down {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 0.75em;
    grid-row-gap: 0.75em;
}

.c-card-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-rich-text h2 {
    font-family: Ppneuemontreal,sans-serif;
    font-size: 7.5em;
    line-height: .86;
    font-weight: 400;
    letter-spacing: -.02em;
}

.c-footer-trigger {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
}

.c-line-break.mi-2 {
    display: none;
}

.c-partners-wrap {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
}

.c-partners-wrap.is-large {
    display: none;
}

.is-carbon {
    color: #141519;
}

.c-me-content-txt {
    position: relative;
    z-index: 5;
}

.c-ap-hero-rt {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
}

.c-ap-hero {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: 100vh;
    padding-bottom: 1.25em;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}

.c-job-content-lt {
    -webkit-transform: translate(0,-19.5em);
    -ms-transform: translate(0,-19.5em);
    transform: translate(0,-19.5em);
}

.margin-156 {
    margin-bottom: 9.75em;
}

.margin-132 {
    margin-bottom: 8.25em;
}

.c-pause {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    display: none;
    background-color: #141519;
}

.c-re-hero-title {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
}

.c-news {
    position: relative;
    width: 100%;
    -webkit-box-flex: 0;
    -webkit-flex: 0 48%;
    -ms-flex: 0 48%;
    flex: 0 48%;
}

.c-news-bt {
    display: -ms-grid;
    display: grid;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-auto-columns: 1fr;
    grid-column-gap: 0.5em;
    grid-row-gap: 16px;
    -ms-grid-columns: 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
}

.c-label {
    display: inline-block;
    padding: .25em .5em;
    border: 1px solid #141519;
    border-radius: 10em;
}

.c-news-load {
    margin-top: 1.5em;
    margin-right: 0;
    margin-left: 15.2em;
    padding: 0;
    border-style: none;
    border-color: transparent;
    border-radius: 0;
    background-color: transparent;
    color: #141519;
    font-size: 1vw;
}

.c-news-item {
    margin-top: 8em;
    padding-right: 0;
    padding-left: 0;
}

.c-news-item:nth-child(odd) {
    padding-right: 1.25em;
}

.c-news-item:nth-child(even) {
    padding-left: 1.25em;
}

.c-pagination {
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
}

.c-list-col-item {
    -webkit-transition: opacity .6s;
    transition: opacity .6s;
}

.c-author {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-author.headshot {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    grid-column-gap: 1em;
    grid-row-gap: 1em;
}

.t-rich-text ul {
    padding-left: 0;
}

.t-rich-text blockquote {
    margin-bottom: 0;
    padding-top: 1em;
    background-image: url("https://uploads-ssl.webflow.com/6356a48dff70251d68facdf8/637378c5ceeed72d40100803_quotes.svg");
    background-position: 0 0;
    background-size: .6em;
    background-repeat: no-repeat;
}

.text-center {
    text-align: center;
}

.c-re-bt {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    padding-right: 2em;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 6.5em;
    grid-row-gap: 6.5em;
}

.c-share {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 1.5em;
    grid-row-gap: 1.5em;
}

.c-re-pagination {
    display: -ms-grid;
    display: grid;
    width: 100%;
    grid-auto-columns: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    -ms-grid-columns: 1fr 1px 1fr;
    grid-template-columns: 1fr 1px 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
    border: 1px solid #141519;
    border-radius: .5em;
}

.c-re-prev {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: 100%;
    padding: 3.25em 5em 3.25em 2em;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 3.25em;
    grid-row-gap: 3.25em;
    -webkit-transition: background-color .6s;
    transition: background-color .6s;
}

.c-re-prev:hover {
    background-color: #141519;
    color: #fafbff;
}

.c-re-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-re-next {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: 100%;
    padding: 3.25em 2em 3.25em 5em;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 3.25em;
    grid-row-gap: 3.25em;
    -webkit-transition: background-color .6s;
    transition: background-color .6s;
}

.c-re-next:hover {
    background-color: #141519;
    color: #fafbff;
}

.c-leadership {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    grid-column-gap: 0.75em;
    grid-row-gap: 0.75em;
}

.c-leadership-bt {
    display: -ms-grid;
    display: grid;
    grid-auto-columns: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
}

.c-leadership-title {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 0.75em;
    grid-row-gap: 0.75em;
    -webkit-transform: translate(.75em,.75em);
    -ms-transform: translate(.75em,.75em);
    transform: translate(.75em,.75em);
}

.c-leadership-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.swiper-controls-leadership {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 0.5em;
    grid-row-gap: 0.5em;
    -webkit-transform: translate(-7.25em,0);
    -ms-transform: translate(-7.25em,0);
    transform: translate(-7.25em,0);
}

.swiper-leadership-prev {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 3.5em;
    height: 3.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #141519;
    border-radius: 50%;
    background-color: transparent;
    -webkit-transition: background-color .4s,color .4s;
    transition: background-color .4s,color .4s;
    color: #141519;
    cursor: pointer;
}

.swiper-leadership-prev:hover {
    background-color: #141519;
    color: #fafbff;
}

.swiper-leadership-next {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 3.5em;
    height: 3.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border: 1px solid #141519;
    border-radius: 50%;
    background-color: transparent;
    -webkit-transition: color .4s,background-color .4s;
    transition: color .4s,background-color .4s;
    color: #141519;
    cursor: pointer;
}

.swiper-leadership-next:hover {
    background-color: #141519;
    color: #fafbff;
}

.margin-312 {
    margin-bottom: 19.5em;
}

.margin-264 {
    margin-bottom: 16.5em;
}

.c-hire-asterisk {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    grid-column-gap: 1em;
    grid-row-gap: 1em;
}

.c-job-listing {
    width: 100%;
    background-color: transparent;
}

.c-form-block {
    margin-bottom: 0;
    padding: 5.25em;
    border-radius: 1em;
    background-color: #212226;
    color: #fafbff;
}

.c-text-field {
    height: 4.5em;
    margin-bottom: 0;
    padding: 0 0 0 1.5em;
    border: 1px solid #5d6069;
    border-radius: .5em;
    background-color: transparent;
    -webkit-transition: border-color .4s;
    transition: border-color .4s;
    color: #fafbff;
}

.c-text-field:focus {
    border-color: #fafbff;
}

.c-form-item {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    grid-column-gap: 0.75em;
    grid-row-gap: 0.75em;
}

.c-form-item.is-checkbox {
    color: #7b7f8a;
}

.c-form {
    display: -ms-grid;
    display: grid;
    grid-auto-columns: 1fr;
    grid-column-gap: 0.75em;
    grid-row-gap: 2em;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
}

.c-textarea {
    min-height: 15em;
    margin-bottom: 0;
    padding: 1.5em 0 0 1.5em;
    border: 1px solid #5d6069;
    border-radius: .5em;
    background-color: transparent;
    -webkit-transition: border-color .4s;
    transition: border-color .4s;
    color: #fafbff;
}

.c-textarea:focus {
    border-color: #fafbff;
}

.c-submit {
    padding: 2em 0;
    border: 1px solid #fafbff;
    border-radius: 10em;
    background-color: transparent;
    -webkit-transition: color .6s,background-color .6s;
    transition: color .6s,background-color .6s;
    font-size: 1.5em;
}

.c-submit:hover {
    background-color: #fafbff;
    color: #141519;
}

.c-form-success {
    border-radius: .5em;
    background-color: #7b7f8a;
}

.c-location {
    -webkit-transform: translate(-2.9em,0);
    -ms-transform: translate(-2.9em,0);
    transform: translate(-2.9em,0);
}

.c-circles {
    position: absolute;
    left: auto;
    top: -26%;
    right: auto;
    bottom: auto;
    z-index: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 60em;
    height: 60em;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-perspective-origin: 50% 100%;
    perspective-origin: 50% 100%;
    -webkit-transform-origin: 50% 100%;
    -ms-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
}

.c-circle {
    position: absolute;
    width: 100%;
    height: 100%;
    border: 1px solid #333438;
    border-radius: 100%;
}

.c-circle.is-1 {
    width: 55em;
    height: 55em;
}

.c-circle.is-2 {
    width: 60em;
    height: 80%;
}

.c-circle.is-3 {
    width: 65em;
    height: 60%;
}

.c-circle.is-4 {
    width: 70em;
    height: 50%;
}

.c-circle.is-5 {
    width: 75em;
    height: 40%;
}

.c-circle.is-6 {
    width: 80em;
    height: 30%;
}

.c-month-day {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 0.25em;
}

.c-num-wrap {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: end;
    -webkit-justify-content: flex-end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    -webkit-transform: translate(-2em,0);
    -ms-transform: translate(-2em,0);
    transform: translate(-2em,0);
}

.t-displayf-1 {
    font-size: 23.75em;
    line-height: .9;
    letter-spacing: -.03em;
}

.c-404-lt {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    -webkit-transform: translate(1.25em,-1.25em);
    -ms-transform: translate(1.25em,-1.25em);
    transform: translate(1.25em,-1.25em);
}

.c-404-rt {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    width: 25%;
    -webkit-transform: translate(-1.25em,-1.25em);
    -ms-transform: translate(-1.25em,-1.25em);
    transform: translate(-1.25em,-1.25em);
}

.c-404-un {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
}

.c-social-link {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 5;
    border-radius: 50%;
}

.c-plus-wrap {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 0.375em;
}

.c-solutions-bt {
    position: absolute;
    left: auto;
    top: auto;
    right: 0;
    bottom: 0;
    z-index: 20;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 59%;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
    -webkit-transform: translate(0,-8em);
    -ms-transform: translate(0,-8em);
    transform: translate(0,-8em);
}

.c-card-item.is-light {
    border-radius: .5em;
    background-color: #fafbff;
}

.c-card-item-re {
    background-color: #fafbff;
}

.c-bio-close-icon {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-bio-item {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    border-radius: 50%;
    -webkit-transition: color .4s;
    transition: color .4s;
    cursor: pointer;
}

.c-bio-item:hover {
    color: #7b7f8a;
}

.c-bio-overlay {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 4000;
    display: none;
    background-color: rgba(20,21,26,.2);
}

.c-bio-close {
    position: absolute;
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 3.5em;
    height: 3.5em;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: transparent;
    -webkit-transform: translate(-1em,1em);
    -ms-transform: translate(-1em,1em);
    transform: translate(-1em,1em);
    color: #fafbff;
    cursor: pointer;
}

.c-bio-panel {
    position: fixed;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 10000;
    display: none;
    width: 50%;
    height: 100vh;
    padding-top: 6em;
    padding-right: 3em;
    padding-left: 3em;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    background-color: #141519;
    color: #fafbff;
}

.c-bio-title {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    grid-column-gap: 1em;
    grid-row-gap: 1em;
}

.c-bio-title.margin-40 {
    color: #e7e8e9;
}

.c-logo-lottie {
    position: absolute;
    left: 0;
    top: 0;
    right: auto;
    bottom: auto;
    width: 14em;
    -webkit-transform: translate(1.2em,1.75em);
    -ms-transform: translate(1.2em,1.75em);
    transform: translate(1.2em,1.75em);
}

.transition {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 10000;
    display: none;
    width: 100%;
    height: 100vh;
    background-color: #141519;
}

.transition-trigger {
    display: none;
}

.c-btn-holder.aphero {
    position: absolute;
    left: 0;
    top: auto;
    right: auto;
    bottom: 0;
    z-index: 10;
    width: 23%;
}

.swiper.te {
    width: 100%;
}

.c-hm-app {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.c-ap-bg {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    height: 100%;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}

.c-checkbox-field {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 0;
    padding-left: 0;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    color: #7b7f8a;
}

.c-checkbox {
    width: 1.5em;
    height: 1.5em;
    margin-top: 0;
    margin-right: .75em;
    margin-left: 0;
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    border-color: #5d6069;
    border-radius: .4em;
    -webkit-transition: background-color .6s;
    transition: background-color .6s;
    color: #7b7f8a;
}

.c-checkbox.w--redirected-checked {
    border-style: solid;
    border-color: #5d6069;
    background-color: #5d6069;
    background-size: .75em;
}

.c-checkbox.w--redirected-focus {
    box-shadow: none;
}

.c-hm-title.line-2 {
    -webkit-transform: translate(0,5em);
    -ms-transform: translate(0,5em);
    transform: translate(0,5em);
}

.c-video {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
}

.c-video.is-2 {
    -webkit-transform: translate(0,4em);
    -ms-transform: translate(0,4em);
    transform: translate(0,4em);
}

.c-video.is-1 {
    /* ! -webkit-transform:rotate(-15deg); */
    -ms-transform: rotate(-15deg);

    /* ! transform:rotate(-15deg) */
}

.c-video.is-4 {
    /* ! -webkit-transform:rotate(-5deg); */
    -ms-transform: rotate(-5deg);

    /* ! transform:rotate(-5deg) */
}

.c-video-wrap {
    position: absolute;
    width: 100%;
    padding-top: 900px;
    -webkit-transform: translate(-1.5em,0);
    -ms-transform: translate(-1.5em,0);
    transform: translate(-1.5em,0);
}

.c-video-wrap.industrial {
    left: 0;
    top: 0;
    right: 0;
    bottom: auto;
    -webkit-transform: translate(0,-6em);
    -ms-transform: translate(0,-6em);
    transform: translate(0,-6em);
}

.c-video-gradient {
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    height: 50%;
    background-image: -webkit-gradient(linear,left top,left bottom,color-stop(30%,rgba(19,21,25,0)),color-stop(50%,#131519));
    background-image: linear-gradient(180deg,rgba(19,21,25,0) 30%,#131519 50%);
}

.c-privacy-updates {
    position: absolute;
    left: 0;
    top: auto;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 40em;
}

.canvas-wrap {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: auto;
    z-index: -1;
    width: 100%;
    height: auto;
}

.canvas-wrap.phone {
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    z-index: auto;
    width: 60em;
    height: 60em;
}

.canvas-wrap.medical {
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: auto;
    width: 100%;
    height: 50em;
}

.canvas-wrap.car {
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: auto;
    width: 100%;
    height: 54em;
}

.canvas-wrap.consumer {
    left: auto;
    top: 0;
    right: auto;
    bottom: auto;
    z-index: auto;
    width: 60em;
    height: 60em;
    -webkit-transform: translate(18em,6em);
    -ms-transform: translate(18em,6em);
    transform: translate(18em,6em);
}

.canvas-wrap.medical-test {
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    z-index: auto;
    width: 100%;
    height: 50em;
}

.canvas-wrap.car-test {
    left: auto;
    top: 0;
    right: 0;
    bottom: auto;
    z-index: auto;
    width: 100%;
    height: 54em;
}

.embed {
    position: relative;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
}

@media screen and (max-width:991px) {
    .c-header {
        height: 3em;
        padding-left: 1em;
    }

    .t-display-2_title {
        margin-top: 0;
        margin-bottom: 0;
        font-family: Ppneuemontreal,sans-serif;
        font-size: 2em;
        line-height: 1;
        font-weight: 400;
        letter-spacing: -.02em;
    }

    .c-logo-link {
        z-index: 2000;
        -webkit-transform: translate(1em,1em);
        -ms-transform: translate(1em,1em);
        transform: translate(1em,1em);
        font-size: 13px;
    }

    .c-header-nav {
        width: 12em;
        padding-right: 1em;
        padding-left: 1em;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .c-section {
        padding-top: 6.25em;
        padding-bottom: 6.25em;
    }

    .c-section.page-404 {
        z-index: 0;
    }

    .c-section.footer {
        padding-top: 4.5em;
    }

    .c-section.hm-hero {
        height: 100%;
        padding-top: 0;
        background-color: #141519;
    }

    .c-section.info {
        padding-bottom: 0;
    }

    .c-section.partners {
        padding-top: 6em;
        padding-bottom: 4.5em;
    }

    .c-section.hm-app {
        padding-bottom: 4.375em;
    }

    .c-section.te {
        padding-top: 4.5em;
        padding-bottom: 4.5em;
    }

    .c-section.hm-solutions {
        position: relative;
        min-height: auto;
    }

    .c-section.hm-wi {
        height: 32.1875em;
    }

    .c-section.hm-values {
        padding-top: 0;
        padding-bottom: 4.5em;
    }

    .c-section.hm-hero-pause {
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        height: 100%;
        padding-top: 14em;
    }

    .c-section.so-hero {
        height: 100%;
        padding-top: 0;
        padding-bottom: 1.25em;
    }

    .c-section.so-product {
        padding-top: 7em;
        padding-bottom: 2px;
    }

    .c-section.so-product-light {
        padding-top: 7em;
        padding-bottom: 5.5em;
    }

    .c-section.me-content {
        overflow: hidden;
        padding-bottom: 4.5em;
    }

    .c-section.so-be-light {
        padding-top: 0;
    }

    .c-section.au-content,
    .c-section.co-content {
        overflow: hidden;
        padding-bottom: 4.5em;
    }

    .c-section.ap-hero {
        height: 100%;
        padding-top: 0;
        padding-bottom: 0;
    }

    .c-section.ap-intro {
        padding-top: 5em;
        padding-bottom: 5em;
    }

    .c-section.ap-commit {
        padding-top: 6em;
        padding-bottom: 2em;
    }

    .c-section.ap-possible {
        padding-bottom: 5em;
    }

    .c-section.ap-tech {
        padding-top: 5em;
        padding-bottom: 5em;
    }

    .c-section.re-hero {
        padding-top: 10em;
    }

    .c-section.stack {
        padding-top: 0;
        padding-bottom: 5em;
    }

    .c-section.latest {
        padding-top: 0;
        padding-bottom: 0;
    }

    .c-section.news-content {
        padding-bottom: 3em;
    }

    .c-section.more-news {
        padding-bottom: 1em;
    }

    .c-section.values {
        padding-top: 5em;
        padding-bottom: 5em;
    }

    .c-section.careers {
        padding-top: 6.25em;
    }

    .c-section.job-listing {
        padding-bottom: 0;
    }

    .c-section.hire {
        padding-bottom: 2em;
    }

    .c-section.contact {
        padding-top: 8em;
    }

    .c-section.location {
        padding-bottom: 0;
    }

    .c-section.legal {
        padding-top: 8em;
    }

    .c-section.newsroom {
        padding-top: 0;
        padding-bottom: 0;
    }

    .c-section.so-industrial {
        overflow: hidden;
        padding-bottom: 4.5em;
    }

    .c-section.insights-hero {
        padding-top: 10em;
        padding-bottom: 4em;
    }

    .c-section.cs-data {
        overflow: hidden;
        padding-bottom: 4.5em;
    }

    .c-section.cs-about {
        padding-bottom: 6.25em;
    }

    .c-section.camp-contact {
        padding-top: 8em;
    }

    .c-section.lp-content {
        overflow: hidden;
        padding-bottom: 4.5em;
    }

    .t-display-1 {
        font-size: 3.75em;
    }

    .t-display-2 {
        font-size: 3em;
    }

    .t-display-2.is-right.so-text-2 {
        text-align: left;
    }

    .t-display-3 {
        font-size: 3em;
    }

    .t-display-4 {
        font-size: 2.5em;
    }

    .t-display-4.is-te {
        font-size: 2em;
        text-indent: 0;
    }

    .t-display-4.swiper-pag {
        position: relative;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-box-align: end;
        -webkit-align-items: flex-end;
        -ms-flex-align: end;
        align-items: flex-end;
    }

    .t-display-4.nav-link {
        font-size: 3em;
    }

    .t-display-4.indent-32 {
        text-indent: 0;
    }

    .t-display-5 {
        font-size: 1.75em;
    }

    .t-display-5.swiper-pag {
        left: auto;
        top: auto;
        right: 0;
        bottom: 0;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 2em;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-transform: translate(-1em,-2.4em);
        -ms-transform: translate(-1em,-2.4em);
        transform: translate(-1em,-2.4em);
    }

    .t-display-6 {
        font-size: 1.5em;
    }

    .c-btn.is-large {
        padding: 2em 1em;
        font-size: 14px;
    }

    .c-btn.is-main {
        padding-bottom: .5em;
    }

    .c-btn.is-menu {
        width: 100%;
        height: 5em;
        border-top-left-radius: .5em;
    }

    .o-container {
        padding-right: 1em;
        padding-left: 1em;
    }

    .c-nav-btn {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .c-line.re-pag {
        width: 100%;
        height: 1px;
    }

    .o-col._w-6.swiper-pag-wrap,
    .o-col._w-6.z-index-1 {
        position: static;
    }

    .o-col._w-8.md-w-14.sm-w-24.margin-80 {
        margin-bottom: 0;
    }

    .o-col._w-14.margin-88 {
        margin-bottom: 3em;
    }

    .o-col._w-14.margin-72.sm-w-24 {
        margin-bottom: 1em;
    }

    .o-col.md-w-20 {
        max-width: 83.33333333333334%;
    }

    .o-col.md-w-5 {
        max-width: 20.833333333333336%;
    }

    .o-col.md-w-22 {
        max-width: 91.66666666666666%;
    }

    .o-col.md-w-23 {
        max-width: 95.83333333333334%;
    }

    .o-col.md-w-7 {
        max-width: 29.16666666666667%;
    }

    .o-col.md-w-2 {
        max-width: 8.333333333333332%;
    }

    .o-col.md-w-9 {
        max-width: 37.5%;
    }

    .o-col.md-w-3 {
        max-width: 12.5%;
    }

    .o-col.md-w-1 {
        max-width: 4.166666666666666%;
    }

    .o-col.md-w-24 {
        max-width: 100%;
    }

    .o-col.md-w-11 {
        max-width: 45.83333333333333%;
    }

    .o-col.md-w-13 {
        max-width: 54.16666666666666%;
    }

    .o-col.md-w-16 {
        max-width: 66.66666666666666%;
    }

    .o-col.md-w-4 {
        max-width: 16.666666666666664%;
    }

    .o-col.md-w-19 {
        max-width: 79.16666666666666%;
    }

    .o-col.md-w-10 {
        max-width: 41.66666666666667%;
    }

    .o-col.md-w-18 {
        max-width: 75%;
    }

    .o-col.md-w-12 {
        max-width: 50%;
    }

    .o-col.md-w-6 {
        max-width: 25%;
    }

    .o-col.md-w-21 {
        max-width: 87.5%;
    }

    .o-col.md-w-15 {
        max-width: 62.5%;
    }

    .o-col.md-w-14 {
        max-width: 58.33333333333334%;
    }

    .o-col.md-w-8 {
        max-width: 33.33333333333333%;
    }

    .o-col.md-w-17 {
        max-width: 70.83333333333334%;
    }

    .o-grid.no-space {
        grid-column-gap: 0em;
        grid-row-gap: 0em;
    }

    .o-grid.footer,
    .o-grid.partners {
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
    }

    .o-grid.footer.margin-216 {
        margin-bottom: 5em;
    }

    .o-grid.so-be {
        grid-column-gap: 1em;
        grid-row-gap: 1em;
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
    }

    .o-grid.so-be.is-consumer {
        -ms-grid-columns: 1fr 1fr 1fr;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .o-grid.down {
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .o-grid.partners-xxl {
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
    }

    .o-grid.perks,
    .o-grid.values {
        grid-column-gap: 1em;
        grid-row-gap: 1em;
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
    }

    .o-grid.datasheet {
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .o-grid.values {
        margin-bottom: 4em;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
        -ms-grid-columns: 1fr 1fr 1fr;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .o-row {
        padding-right: 0;
        padding-left: 0;
    }

    .o-row.hm-hero {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-box-align: stretch;
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        grid-column-gap: 2em;
        grid-row-gap: 2em;
    }

    .o-row.swiper.hm-solutions {
        min-height: auto;
        margin-top: 2em;
        -webkit-box-align: stretch;
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
    }

    .o-row.hm-values {
        margin-bottom: -15em;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-row-gap: 5em;
        -webkit-transform: translate(0,-31em);
        -ms-transform: translate(0,-31em);
        transform: translate(0,-31em);
    }

    .o-row.hm-values-info {
        margin-top: 5em;
    }

    .o-row.pre-footer {
        margin-bottom: 5em;
    }

    .o-row.menu {
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
    }

    .o-row.hm-app {
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .o-row.hm-hero-pause {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: stretch;
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
    }

    .o-row.so-hero {
        -webkit-box-orient: vertical;
        -webkit-box-direction: reverse;
        -webkit-flex-direction: column-reverse;
        -ms-flex-direction: column-reverse;
        flex-direction: column-reverse;
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
        -ms-grid-rows: auto auto;
        grid-template-rows: auto auto;
    }

    .o-row.margin-244 {
        margin-bottom: 2em;
    }

    .o-row.future {
        position: relative;
        -webkit-box-orient: vertical;
        -webkit-box-direction: reverse;
        -webkit-flex-direction: column-reverse;
        -ms-flex-direction: column-reverse;
        flex-direction: column-reverse;
        -webkit-box-align: end;
        -webkit-align-items: flex-end;
        -ms-flex-align: end;
        align-items: flex-end;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .o-row.ap-hero,
    .o-row.ap-job-content {
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    .o-row.so-content {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
    }

    .o-row.margin-132 {
        margin-bottom: 4em;
    }

    .o-row.au-rt,
    .o-row.medical,
    .o-row.mi-rt {
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    .o-row.re-hero {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .o-row.news {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-flex-wrap: nowrap;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    }

    .o-row.margin-192 {
        margin-bottom: 3em;
    }

    .o-row.about {
        margin-top: 1.5em;
    }

    .o-row.content-end.margin-312 {
        margin-bottom: 5em;
    }

    .o-row.ab-tech,
    .o-row.history {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .o-row.te-control {
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .o-row.te {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 1.5em;
        grid-row-gap: 1.5em;
    }

    .o-row.possible-content {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-row-gap: 1.5em;
    }

    .o-row.hm-hero-content {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: end;
        -webkit-align-items: flex-end;
        -ms-flex-align: end;
        align-items: flex-end;
        grid-row-gap: 5.5em;
    }

    .o-row.margin-312 {
        margin-bottom: 2em;
    }

    .o-row.lp-content {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 2em;
        grid-row-gap: 2em;
    }

    .o-row.related-datasheets {
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .c-body {
        font-size: 16px;
    }



    .margin-24 {
        margin-bottom: 1.25em;
    }

    .margin-32 {
        margin-bottom: 1.5em;
    }

    .margin-40,
    .margin-48 {
        margin-bottom: 2em;
    }

    .margin-56 {
        margin-bottom: 2.5em;
    }

    .margin-64 {
        margin-bottom: 3em;
    }

    .margin-80,
    .margin-96 {
        margin-bottom: 4em;
    }

    .margin-120,
    .margin-128,
    .margin-136,
    .margin-144,
    .margin-160,
    .margin-176 {
        margin-bottom: 5em;
    }

    .c-img-contain.mi-img {
        height: auto;
        padding-top: 100%;
    }

    .c-img-contain.footer-shape {
        display: none;
    }

    .c-img-contain.so-content {
        width: 105%;
        height: 23.75em;
    }

    .c-img-contain.ap-hero {
        left: auto;
        width: 100%;
        height: 100%;
        border-radius: 0;
    }

    .c-img-contain.ap-job-img {
        width: 100%;
        height: 100%;
        padding-top: 100%;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .c-img-contain.ap-possible {
        width: 105%;
        height: 100%;
        padding-top: 56.25%;
    }

    .c-img-contain.main-image {
        height: auto;
        padding-top: 56.25%;
    }

    .c-img-contain.team {
        height: 100%;
        padding-top: 130%;
    }

    .c-img-contain.leadership {
        height: auto;
        padding-top: 125%;
    }

    .c-img-contain.ab-tech {
        position: relative;
        width: 120%;
        height: 100%;
        margin-bottom: -4em;
        padding-top: 123%;
        -webkit-transform: rotate(33deg) translate(-7em,13em);
        -ms-transform: rotate(33deg) translate(-7em,13em);
        transform: rotate(33deg) translate(-7em,13em);
    }

    .c-img-contain.history-1 {
        height: auto;
        padding-top: 70%;
    }

    .c-img-contain.history-2 {
        height: 100%;
        padding-top: 100%;
    }

    .c-img-contain.hire {
        height: 100%;
        padding-top: 56.25%;
    }

    .c-img-contain.pause {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        display: block;
        background-image: -webkit-gradient(linear,left top,left bottom,from(#fafbff),to(#fafbff));
        background-image: linear-gradient(180deg,#fafbff,#fafbff);
    }

    .c-img-contain.lp {
        height: auto;
        padding-top: 80%;
        -webkit-transform: translate(-1em,0);
        -ms-transform: translate(-1em,0);
        transform: translate(-1em,0);
    }

    .c-img,
    .c-img.ab-tech,
    .c-img.is-static {
        height: 100%;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .hide-tablet {
        display: none;
    }

    .hide-desktop {
        display: block;
    }

    .c-nav-icon {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .t-display-7.nav-link {
        font-size: 1.125em;
    }

    .indent-64 {
        text-indent: 2em;
    }

    .t-label-4 {
        font-size: 15px;
    }

    .t-label-4.is-2 {
        display: none;
        line-height: .82;
    }

    .t-label-4.is-1 {
        line-height: .82;
    }

    .t-label-5 {
        font-size: 16px;
    }

    .c-ornement.hm-hero-rt {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding-bottom: 9.375em;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-transform: translate(-1em,0);
        -ms-transform: translate(-1em,0);
        transform: translate(-1em,0);
    }

    .c-ornement.hm-hero-rt.hide-tablet {
        display: none;
    }

    .c-ornement.app-rt,
    .c-ornement.solutions-rt,
    .c-ornement.wi-rt {
        -webkit-transform: translate(-1em,0);
        -ms-transform: translate(-1em,0);
        transform: translate(-1em,0);
    }

    .c-ornement.menu-rt {
        padding-bottom: 11em;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .c-ornement.margin-96.menu-number {
        position: absolute;
        left: auto;
        top: 0;
        right: 0;
        bottom: auto;
    }

    .c-ornement.load-rt {
        -webkit-transform: translate(-1em,0);
        -ms-transform: translate(-1em,0);
        transform: translate(-1em,0);
    }

    .c-ornement.hm-hero-pause {
        display: none;
    }

    .c-ornement.so-hero-lt {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding-bottom: 15em;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-transform: translate(1em,0);
        -ms-transform: translate(1em,0);
        transform: translate(1em,0);
    }

    .c-ornement.so-content {
        display: none;
        -webkit-transform: translate(-1em,0);
        -ms-transform: translate(-1em,0);
        transform: translate(-1em,0);
    }

    .c-ornement.mi-rt {
        -webkit-transform: translate(-1em,0);
        -ms-transform: translate(-1em,0);
        transform: translate(-1em,0);
    }

    .c-ornement.medical-rt {
        display: none;
        -webkit-transform: translate(-1em,0);
        -ms-transform: translate(-1em,0);
        transform: translate(-1em,0);
    }

    .c-ornement.about-rt,
    .c-ornement.re-hero {
        -webkit-transform: translate(-1em,0);
        -ms-transform: translate(-1em,0);
        transform: translate(-1em,0);
    }

    .c-ornement._404,
    .c-ornement.contact-rt {
        -webkit-transform: translate(-1em,0);
        -ms-transform: translate(-1em,0);
        transform: translate(-1em,0);
    }

    .c-ornement-icon.so-content {
        -webkit-transform: translate(1em,-29.375em);
        -ms-transform: translate(1em,-29.375em);
        transform: translate(1em,-29.375em);
    }

    .c-overlay.ap-hero {
        display: block;
    }

    .c-overlay.pause {
        background-color: rgba(0,0,0,.2);
    }

    .c-info-inner.margin-24 {
        grid-column-gap: 1.5em;
    }

    .c-partner {
        height: 11em;
    }

    .c-partner.view {
        min-height: 11em;
    }

    .c-plus-icon.so-content-lt {
        -webkit-transform: translate(1.25em,1.25em);
        -ms-transform: translate(1.25em,1.25em);
        transform: translate(1.25em,1.25em);
        font-size: 12px;
    }

    .c-plus-icon.so-content-rt {
        -webkit-transform: translate(-1.25em,1.25em);
        -ms-transform: translate(-1.25em,1.25em);
        transform: translate(-1.25em,1.25em);
        font-size: 12px;
    }

    .c-plus-icon.contact-lt,
    .c-plus-icon.contact-rt {
        width: 2em;
    }

    .c-te-top.margin-80 {
        height: auto;
        margin-bottom: 2em;
    }

    .c-te-bt {
        position: static;
        height: auto;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .c-te-client {
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .c-te-data {
        -webkit-transform: translate(0,3px);
        -ms-transform: translate(0,3px);
        transform: translate(0,3px);
    }

    .swiper-controls {
        position: static;
        left: 0;
        top: auto;
        right: auto;
        bottom: 0;
        -webkit-transform: translate(0,0);
        -ms-transform: translate(0,0);
        transform: translate(0,0);
    }

    .swiper-controls.solutions {
        position: absolute;
        z-index: 5;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        grid-column-gap: 0.5em;
        grid-row-gap: 1em;
        -webkit-transform: translate(-1em,-2em);
        -ms-transform: translate(-1em,-2em);
        transform: translate(-1em,-2em);
    }

    .swiper-prev {
        width: 2.5em;
        height: 2.5em;
    }

    .swiper-arrow {
        font-size: 2vw;
    }

    .swiper-arrow.solutions {
        font-size: 10px;
    }

    .swiper-next {
        width: 2.5em;
        height: 2.5em;
    }

    .c-values-title {
        margin-top: 0;
        margin-bottom: -2em;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .c-list-lt {
        width: auto;
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
    }

    .c-list-inner {
        min-height: auto;
        padding-bottom: 1.5em;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 0.75em;
        grid-row-gap: 0.75em;
    }

    .c-list-inner.tech {
        padding-bottom: 1.5em;
        grid-row-gap: 1.25em;
    }

    .c-social-icon {
        -webkit-transform: translate(0,2px);
        -ms-transform: translate(0,2px);
        transform: translate(0,2px);
    }

    .c-arrow-link {
        left: auto;
        top: auto;
        right: 0;
        bottom: 0;
        -webkit-transform: translate(-62%,-1.25em);
        -ms-transform: translate(-62%,-1.25em);
        transform: translate(-62%,-1.25em);
    }

    .swiper-wrapper.solutions {
        height: 100%;
    }

    .swiper-wrapper.te {
        position: static;
    }

    .swiper-slide.te {
        position: static;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 1.5em;
        grid-row-gap: 1.5em;
    }

    .swiper-slide.solutions {
        height: 100%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: end;
        -webkit-align-items: flex-end;
        -ms-flex-align: end;
        align-items: flex-end;
    }

    .swiper-slide.leadership {
        width: 27em;
    }

    .c-menu {
        display: none;
        padding-top: 6.625em;
        padding-bottom: 9.625em;
    }

    .c-menu-links.margin-72 {
        margin-bottom: 2.5em;
    }

    .c-menu-txt {
        display: none;
    }

    .c-menu-bt {
        position: relative;
        width: 100%;
    }

    .c-menu-close {
        width: 2.3em;
        -webkit-transform: translate(-1em,1em);
        -ms-transform: translate(-1em,1em);
        transform: translate(-1em,1em);
    }

    .c-load {
        display: none;
    }

    .t-load {
        font-size: 3.75em;
    }

    .c-load-num {
        -webkit-transform: translate(0,0);
        -ms-transform: translate(0,0);
        transform: translate(0,0);
    }

    .c-solutions-pag {
        left: auto;
        top: auto;
        right: 0;
        bottom: 0;
        -webkit-transform: translate(1em,-2em);
        -ms-transform: translate(1em,-2em);
        transform: translate(1em,-2em);
    }

    .c-btn-txt {
        overflow: visible;
    }

    .swiper-so-next {
        width: 2.5em;
        height: 2.5em;
    }

    .swiper-so-next.solutions {
        width: 2.5em;
        height: 2.5em;
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -webkit-transform: translate(0,0);
        -ms-transform: translate(0,0);
        transform: translate(0,0);
    }

    .swiper-so-prev {
        width: 2.5em;
        height: 2.5em;
    }

    .swiper-so-prev.solutions {
        width: 2.5em;
        height: 2.5em;
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -webkit-transform: translate(0,0);
        -ms-transform: translate(0,0);
        transform: translate(0,0);
    }

    .swiper-te-next,
    .swiper-te-prev {
        width: 2.5em;
        height: 2.5em;
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 auto;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    }

    .c-demo {
        font-size: 14px;
    }

    .swiper-controls-te {
        position: relative;
        left: 0;
        top: auto;
        right: auto;
        bottom: 0;
    }

    .swiper-controls-te.testimonials {
        position: static;
        left: auto;
        top: auto;
        right: 0;
        bottom: 0;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .c-so-hero-title {
        grid-column-gap: 0.75em;
        grid-row-gap: 0.75em;
    }

    .c-so-hero-icon {
        width: 3em;
    }

    .c-card {
        height: 23.75em;
    }

    .c-card.download {
        height: 23.75em;
        padding-right: 2.5em;
    }

    .c-card.values.is-1 {
        height: 20em;
        padding: 2em;
    }

    .c-card.values.is-2,
    .c-card.values.is-3 {
        height: 20em;
    }

    .c-card.datasheet {
        padding: 2em 1em;
        grid-column-gap: 5em;
    }

    .c-card.is-consumer {
        height: 20em;
    }

    .c-card-top.datasheet {
        grid-column-gap: 1.5em;
    }

    .c-card-top.is-industrial {
        grid-column-gap: 0.75em;
        grid-row-gap: 0.75em;
    }

    .c-rich-text h2 {
        font-size: 3em;
    }

    .c-line-break.about-1,
    .c-line-break.about-2 {
        display: none;
    }

    .c-me-content-txt {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .c-ap-hero {
        height: 100%;
    }

    .c-news-load {
        margin-left: 0;
        font-size: 16px;
    }

    .c-news-item {
        width: 100%;
        margin-top: 0;
        margin-bottom: 3em;
    }

    .c-news-item:nth-child(even),
    .c-news-item:nth-child(odd) {
        padding-right: 0;
        padding-left: 0;
    }

    .c-news-item:last-child {
        margin-bottom: 0;
    }

    .c-re-bt {
        padding-right: 0;
        grid-column-gap: 1.5em;
        grid-row-gap: 1.5em;
    }

    .c-re-pagination {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
    }

    .c-re-prev {
        padding: 2em 1em;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .c-re-next {
        padding: 2em 1em;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .c-leadership-title {
        position: absolute;
        left: 0;
        top: 0;
        right: auto;
        bottom: auto;
    }

    .swiper-controls-leadership {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .swiper-leadership-next,
    .swiper-leadership-prev {
        width: 2.5em;
        height: 2.5em;
    }

    .c-form-block {
        padding: 4em 2em;
        -webkit-transform: translate(-1em,0);
        -ms-transform: translate(-1em,0);
        transform: translate(-1em,0);
    }

    .c-form-error {
        margin-top: 1.5em;
        padding: 1em;
        border-radius: .5em;
        background-color: #ff5151;
    }

    .c-location {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .c-circles {
        display: none;
    }

    .c-num-wrap {
        -webkit-transform: translate(0,0);
        -ms-transform: translate(0,0);
        transform: translate(0,0);
    }

    .t-displayf-1 {
        font-size: 15em;
    }

    .c-solutions-bt {
        width: 100%;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .c-bio-close {
        width: 2.3em;
        height: 2.3em;
    }

    .c-bio-panel {
        display: none;
        width: 100%;
        padding-right: 16em;
        padding-left: 1em;
    }

    .c-logo-lottie {
        display: none;
    }

    .transition {
        height: 100%;
    }

    .c-btn-holder.aphero {
        z-index: 20;
        width: 40%;
    }

    .c-ap-bg {
        width: 100%;
        height: 100%;
    }

    .c-hm-title.line-2 {
        -webkit-transform: translate(50%,0);
        -ms-transform: translate(50%,0);
        transform: translate(50%,0);
    }

    .c-video.is-2 {
        -webkit-transform: translate(0,-1.5em);
        -ms-transform: translate(0,-1.5em);
        transform: translate(0,-1.5em);
    }

    .c-video.is-1 {
        left: -40%;
        top: -40%;
        width: 180%;
        -webkit-transform: rotate(-5deg);
        -ms-transform: rotate(-5deg);
        transform: rotate(-5deg);
    }

    .c-video.is-3 {
        left: -30%;
        top: -30%;
        width: 160%;
    }

    .c-video.is-4 {
        left: -10%;
        top: -18%;
        width: 120%;
    }

    .c-video-wrap {
        position: relative;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        width: 100%;
        padding-top: 100%;
        -webkit-transform: translate(1em,0);
        -ms-transform: translate(1em,0);
        transform: translate(1em,0);
    }

    .c-video-wrap.industrial {
        position: relative;
        margin-top: -11em;
        margin-bottom: -14em;
        -webkit-transform: translate(-1.5em,0);
        -ms-transform: translate(-1.5em,0);
        transform: translate(-1.5em,0);
    }

    .c-video-gradient {
        display: none;
    }

    .canvas-wrap.phone {
        position: relative;
        width: 100%;
        height: auto;
    }

    .canvas-wrap.car,
    .canvas-wrap.medical {
        position: relative;
        left: -40%;
        width: 180%;
        height: auto;
        margin-top: -4em;
        margin-bottom: -2em;
    }

    .canvas-wrap.consumer {
        position: relative;
        width: 100%;
        height: auto;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .canvas-wrap.car-test,
    .canvas-wrap.medical-test {
        position: relative;
        left: -40%;
        width: 180%;
        height: auto;
        margin-top: -4em;
        margin-bottom: -2em;
    }

    .embed {
        position: relative;
    }

    .test {
        width: 150%;
        -webkit-transform: translate(-25%,0);
        -ms-transform: translate(-25%,0);
        transform: translate(-25%,0);
    }
}

@media screen and (max-width:767px) {
    .c-logo-link {
        padding-left: 0;
    }

    .c-section {
        padding-top: 3.75em;
        padding-bottom: 3.75em;
    }

    .c-section.hm-app {
        height: auto;
        padding-bottom: 5em;
    }

    .c-section.so-list.is-dark {
        padding-bottom: 4.5em;
    }

    .c-section.news-content {
        padding-top: 5em;
    }

    .c-section.careers {
        padding-top: 3.75em;
    }

    .c-section.cs-about {
        padding-bottom: 3.75em;
    }

    .t-display-4 {
        font-size: 2.5em;
    }

    .t-display-4.is-te {
        font-size: 2em;
    }

    .t-display-4.indent-32 {
        text-indent: 0;
    }

    .c-pw-form {
        padding-right: 1.5em;
        padding-left: 1.5em;
    }

    .o-col.sm-w-4 {
        max-width: 16.666666666666664%;
    }

    .o-col.sm-w-23 {
        max-width: 95.83333333333334%;
    }

    .o-col.sm-w-19 {
        max-width: 79.16666666666666%;
    }

    .o-col.sm-w-11 {
        max-width: 45.83333333333333%;
    }

    .o-col.sm-w-14 {
        max-width: 58.33333333333334%;
    }

    .o-col.sm-w-20 {
        max-width: 83.33333333333334%;
    }

    .o-col.sm-w-7 {
        max-width: 29.16666666666667%;
    }

    .o-col.sm-w-24 {
        max-width: 100%;
    }

    .o-col.sm-w-15 {
        max-width: 62.5%;
    }

    .o-col.sm-w-13 {
        max-width: 54.16666666666666%;
    }

    .o-col.sm-w-5 {
        max-width: 20.833333333333336%;
    }

    .o-col.sm-w-17 {
        max-width: 70.83333333333334%;
    }

    .o-col.sm-w-1 {
        max-width: 4.166666666666666%;
    }

    .o-col.sm-w-22 {
        max-width: 91.66666666666666%;
    }

    .o-col.sm-w-16 {
        max-width: 66.66666666666666%;
    }

    .o-col.sm-w-12 {
        max-width: 50%;
    }

    .o-col.sm-w-8 {
        max-width: 33.33333333333333%;
    }

    .o-col.sm-w-3 {
        max-width: 12.5%;
    }

    .o-col.sm-w-10 {
        max-width: 41.66666666666667%;
    }

    .o-col.sm-w-6 {
        max-width: 25%;
    }

    .o-col.sm-w-21 {
        max-width: 87.5%;
    }

    .o-col.sm-w-2 {
        max-width: 8.333333333333332%;
    }

    .o-col.sm-w-9 {
        max-width: 37.5%;
    }

    .o-col.sm-w-18 {
        max-width: 75%;
    }

    .o-grid.values {
        min-height: auto;
        grid-column-gap: 0.75em;
    }

    .o-row.partners-header {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        grid-column-gap: 2em;
        grid-row-gap: 2em;
    }

    .o-row.app-header {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 1.5em;
        grid-row-gap: 1.5em;
    }

    .o-row.mi-title {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 2em;
        grid-row-gap: 2em;
    }

    .o-row.hm-values {
        margin-bottom: -12em;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-row-gap: 2em;
    }

    .o-row.hm-app {
        height: auto;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .o-row.mi-content {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 2em;
        grid-row-gap: 2em;
    }

    .o-row.ap-hero {
        -webkit-transform: translate(0,-3em);
        -ms-transform: translate(0,-3em);
        transform: translate(0,-3em);
    }

    .o-row.about {
        -webkit-box-orient: vertical;
        -webkit-box-direction: reverse;
        -webkit-flex-direction: column-reverse;
        -ms-flex-direction: column-reverse;
        flex-direction: column-reverse;
        -webkit-box-align: stretch;
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
    }

    .o-row.job-header,
    .o-row.job-op {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .o-row.hire-title {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .o-row.partners-subtitle {
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .o-row.related-datasheets {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -webkit-align-items: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        grid-column-gap: 1.5em;
        grid-row-gap: 1.5em;
    }

    .margin-120,
    .margin-128,
    .margin-136,
    .margin-144,
    .margin-160,
    .margin-176 {
        margin-bottom: 4em;
    }

    .c-img-contain.footer-shape {
        width: 52%;
    }

    .c-img-contain.team {
        padding-top: 100%;
    }

    .c-img-contain.ab-tech {
        -webkit-transform: rotate(33deg) translate(-5.8em,8em);
        -ms-transform: rotate(33deg) translate(-5.8em,8em);
        transform: rotate(33deg) translate(-5.8em,8em);
    }

    .c-img-contain.job-op {
        height: 100%;
        padding-top: 100%;
    }

    .c-img-contain.history-1 {
        height: 100%;
    }

    .c-img-contain.history-2 {
        height: 100%;
        padding-top: 100%;
    }

    .c-img-contain.lp {
        padding-top: 100%;
    }

    .hide-landscape {
        display: none;
    }

    .c-partner {
        height: 10em;
    }

    .c-partner.view {
        min-height: 10em;
    }

    .swiper-controls {
        position: absolute;
        -webkit-transform: translate(1em,0);
        -ms-transform: translate(1em,0);
        transform: translate(1em,0);
    }

    .c-values-title {
        margin-bottom: 0;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .c-list-inner.tech {
        grid-row-gap: 1em;
    }

    .swiper-slide.solutions {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .swiper-slide.leadership {
        width: 22em;
    }

    .swiper-controls-te {
        position: absolute;
        -webkit-transform: translate(1em,0);
        -ms-transform: translate(1em,0);
        transform: translate(1em,0);
    }

    .c-card {
        height: 20em;
        padding: 1.5em;
    }

    .c-card.download {
        padding-right: 1.5em;
    }

    .c-card.values {
        height: auto;
        padding: 1em;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        grid-row-gap: 2em;
    }

    .c-card.values.is-1 {
        padding: 1em;
    }

    .c-card.perks {
        height: 24em;
        padding: 1em;
    }

    .c-card.datasheet {
        grid-column-gap: 2em;
    }

    .c-news {
        width: 100%;
    }

    .c-news-item {
        margin-top: 0;
    }

    .swiper-controls-leadership {
        position: absolute;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .c-404-rt {
        width: 50%;
    }

    .c-bio-panel {
        padding-right: 8em;
    }

    .c-btn-holder.aphero {
        width: 50%;
    }

    .c-hm-app {
        grid-column-gap: 8em;
        grid-row-gap: 8em;
    }

    .c-checkbox-field {
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .c-hm-title.line-2 {
        -webkit-transform: translate(20%,0);
        -ms-transform: translate(20%,0);
        transform: translate(20%,0);
    }

    .c-video-wrap.industrial {
        margin-top: -8em;
        margin-bottom: -10em;
    }

    .embed {
        height: 100%;
    }
}

@media screen and (max-width:479px) {
    .c-header {
        padding: 0;
    }

    .c-logo-link {
        border-top: 1px transparent;
    }

    .c-section.news-content {
        padding-top: 6em;
        padding-bottom: 0;
    }

    .t-display-1 {
        font-size: 3em;
    }

    .t-display-3 {
        font-size: 2.5em;
    }

    .t-display-5 {
        font-size: 1.5em;
    }

    .t-display-5.swiper-pag {
        -webkit-transform: translate(-1em,-2.8em);
        -ms-transform: translate(-1em,-2.8em);
        transform: translate(-1em,-2.8em);
    }

    .o-grid.footer.margin-216 {
        grid-column-gap: 2.5em;
        grid-row-gap: 2.5em;
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
    }

    .o-grid.legal {
        grid-column-gap: 0.5em;
        grid-row-gap: 0.5em;
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
    }

    .o-grid.so-be,
    .o-grid.so-be.is-consumer {
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
    }

    .o-grid.so-be.is-industrial {
        -ms-grid-columns: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
    }

    .o-grid.down {
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
    }

    .o-grid.datasheet,
    .o-grid.perks,
    .o-grid.values {
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
    }

    .o-row.app-header {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .o-row.hm-values {
        margin-bottom: -13em;
    }

    .o-row.ap-hero {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-auto-columns: 1fr;
        grid-column-gap: 4em;
        grid-row-gap: 4em;
        -ms-grid-columns: 1fr;
        grid-template-columns: 1fr;
        -ms-grid-rows: auto;
        grid-template-rows: auto;
        -webkit-transform: translate(0,0);
        -ms-transform: translate(0,0);
        transform: translate(0,0);
    }

    .o-row.ap-intro {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .o-row.ind-rt {
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    .o-row.history {
        grid-column-gap: 4em;
        grid-row-gap: 4em;
    }

    .margin-80,
    .margin-96 {
        margin-bottom: 3em;
    }

    .c-img-contain.partner {
        height: 2em;
    }

    .c-img-contain.footer-shape {
        width: 50%;
        height: 50%;
        -webkit-transform: translate(0,-1em);
        -ms-transform: translate(0,-1em);
        transform: translate(0,-1em);
    }

    .c-img-contain.so-content {
        width: 110%;
    }

    .c-img-contain.ap-hero {
        border-radius: 0;
    }

    .c-img-contain.ab-tech {
        -webkit-transform: rotate(33deg) translate(-4.5em,3.5em);
        -ms-transform: rotate(33deg) translate(-4.5em,3.5em);
        transform: rotate(33deg) translate(-4.5em,3.5em);
    }

    .hide-mobile {
        display: none;
    }

    .t-display-7 {
        font-size: 1.25em;
    }

    .c-partner {
        height: 7em;
    }

    .c-partner.view {
        min-height: 7em;
    }

    .swiper-arrow {
        font-size: 4vw;
    }

    .swiper-slide.leadership {
        width: 20em;
    }

    .t-load {
        font-size: 3em;
    }

    .c-so-hero-icon {
        width: 1.5em;
    }

    .c-card.values {
        min-height: 17em;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .c-card.perks {
        height: 20em;
    }

    .c-card.is-industrial {
        height: auto;
        min-height: 17em;
        padding: 1em;
        -webkit-box-pack: start;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        grid-column-gap: 2em;
        grid-row-gap: 2em;
    }

    .c-card.datasheet {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .c-card.datasheet.is-gated {
        padding-top: 1.5em;
        padding-bottom: 1.5em;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .c-be-icon.datasheet {
        width: 3em;
    }

    .c-card-top.datasheet {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;
        grid-column-gap: 1em;
        grid-row-gap: 1em;
    }

    .c-card-bt.datasheet {
        -webkit-align-self: flex-start;
        -ms-flex-item-align: start;
        align-self: flex-start;
    }

    .c-rich-text h2 {
        font-size: 2.5em;
    }

    .margin-156.ap-fix {
        margin-bottom: 0;
    }

    .c-re-pagination {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .c-form-block {
        padding: 2em 1em;
    }

    .c-submit {
        font-size: 1em;
    }

    .t-displayf-1 {
        font-size: 8em;
    }

    .c-404-rt {
        width: 100%;
        margin-bottom: 1em;
        padding-right: 1em;
        padding-left: 1em;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    .c-bio-close {
        width: 3em;
        height: 3em;
    }

    .c-bio-panel {
        padding-right: 1em;
    }

    .c-btn-holder.aphero {
        position: absolute;
        left: auto;
        top: auto;
        right: 0;
        bottom: 0;
        width: 75%;
        -webkit-transform: translate(0,-7.5em);
        -ms-transform: translate(0,-7.5em);
        transform: translate(0,-7.5em);
    }

    .c-hm-app {
        grid-column-gap: 5em;
        grid-row-gap: 5em;
    }

    .sm-is-left {
        text-align: left;
    }

    .c-video-wrap.industrial {
        margin-top: -5em;
        margin-bottom: -6em;
    }
}

#w-node-_060fbb9c-011c-33d0-6735-e7a308e3a0e8-08e3a0e8,
#w-node-_1b5c3f9a-e142-95fe-994a-20adb5408584-fd5d6cb2,
#w-node-_23e877cc-b586-3136-80e7-163d6633ccff-21f65c03,
#w-node-_3117fff8-adff-7b8a-b4da-f55629c6a0c2-29c6a0c2,
#w-node-_6dcec443-33d7-5070-6312-76364c0b2460-4c0b2426,
#w-node-_763a208e-0186-4035-25dd-f613ca2871c0-ca2871c0,
#w-node-c936f853-cbf1-9ed8-35cd-1d560f56f5bf-fd5d6cb2,
#w-node-ca35c4ee-e587-0c78-6cbc-38b864813869-64813855 {
    -ms-grid-column-align: start;
    justify-self: start;
}

#w-node-_0b83739c-323b-5ebb-8f56-1ad863af7b23-479cb805,
#w-node-_0d377c63-54b3-e6ec-e4c2-19d7997fccf1-219bcd3e,
#w-node-_0f7dca71-f3b7-b33c-ff85-fe34b7498da7-d9aae086,
#w-node-_10bfc4e9-700e-edd9-4243-0735d7915de1-d7915dd5,
#w-node-_10bfc4e9-700e-edd9-4243-0735d7915dea-d7915dd5,
#w-node-_10bfc4e9-700e-edd9-4243-0735d7915df3-d7915dd5,
#w-node-_112b10b7-4fae-43f1-64b4-13720570f5f9-479cb805,
#w-node-_122295e0-cf05-56fc-2c31-4890b2f8ea41-031ba986,
#w-node-_16b367e8-d4a9-46ea-9f20-193e11519375-479cb805,
#w-node-_1e19e9bd-82f9-d91c-c3be-47cb7c23cafd-479cb805,
#w-node-_21a66231-58e2-e795-5fd6-76bbe01e76e0-fd5d6cb2,
#w-node-_221b020c-21e7-3d81-e99b-59129864bf4d-479cb805,
#w-node-_22a140f7-5030-1d71-fdc3-e37b873bb693-01830c03,
#w-node-_22a140f7-5030-1d71-fdc3-e37b873bb693-031ba986,
#w-node-_22a140f7-5030-1d71-fdc3-e37b873bb693-123b74f8,
#w-node-_22a140f7-5030-1d71-fdc3-e37b873bb693-148b7089,
#w-node-_25dc32f8-e03b-9bf1-cc0d-5ca44ccccb6f-479cb805,
#w-node-_28a4ad4f-1199-2443-74ce-0297f973878d-479cb805,
#w-node-_2d35d7e5-7c9a-5890-5cef-8d6c3b0e1cae-01830c03,
#w-node-_2d35d7e5-7c9a-5890-5cef-8d6c3b0e1cae-031ba986,
#w-node-_2d35d7e5-7c9a-5890-5cef-8d6c3b0e1cae-123b74f8,
#w-node-_2d35d7e5-7c9a-5890-5cef-8d6c3b0e1cae-148b7089,
#w-node-_3726cfe6-6e32-e6b4-4ada-aefe58748e95-479cb805,
#w-node-_47a3ad97-3cf7-eed4-9591-6b5c6b198665-d9aae086,
#w-node-_4b96e600-fa1a-fc83-b45e-d57566c6ab2e-66c6ab2e,
#w-node-_4d05d009-eb00-f4cb-09d1-e19cb54e4a71-219bcd3e,
#w-node-_4d05d009-eb00-f4cb-09d1-e19cb54e4a71-d9aae086,
#w-node-_4e1180cd-bc34-c0ab-f17e-d49a70a16d50-a9659e9b,
#w-node-_51920f87-d777-a187-5be0-7da0826f9630-479cb805,
#w-node-_550d898a-f264-f17e-250b-d591f6d243a9-d9aae086,
#w-node-_56103231-8ee2-4804-8f9e-3a4dd6006c7f-479cb805,
#w-node-_56d66632-5d28-e9b9-271e-538de56a1068-479cb805,
#w-node-_58312cad-83c0-214a-d3a7-253c0af757b3-479cb805,
#w-node-_5e3aa9d7-05d7-2d21-2673-b0a8cb7a3303-479cb805,
#w-node-_6518c215-da02-ddfa-859d-d86e6d4629ef-479cb805,
#w-node-_6553ea04-5dbd-a0c9-d0c5-83e51e2e7e5c-479cb805,
#w-node-_67dca321-a562-1778-de56-26fd8c14c3c3-479cb805,
#w-node-_693060af-014e-7814-2dc8-f08c717e66d2-031ba986,
#w-node-_6c909324-4fa0-8b75-662f-0e153873b750-479cb805,
#w-node-_6e4febbb-2378-a799-fffe-674d59ce45d2-479cb805,
#w-node-_6f97fa2a-fc90-2e79-13e8-1f55bda3f27c-479cb805,
#w-node-_76f60a61-8328-1248-eed8-c08927d81e16-479cb805,
#w-node-_7a7bb423-1542-33db-c003-71e8385f9d1d-479cb805,
#w-node-_84d42b6e-f0c6-edc9-e63e-e2a125adf741-479cb805,
#w-node-_8b47a8fd-9a90-79f4-55d2-724ef071c3f1-fd5d6cb2,
#w-node-_8bd3dd04-70a9-9db0-2ed1-4bad50ab43a0-fd5d6cb2,
#w-node-_8ca96a50-9d2a-d62b-e509-9df2bf0a507a-219bcd3e,
#w-node-_8ca96a50-9d2a-d62b-e509-9df2bf0a507a-d9aae086,
#w-node-_957a8e22-4536-05a4-e0b7-c15f9c271124-479cb805,
#w-node-a193befc-5a20-269a-d160-b8e715721f4e-479cb805,
#w-node-a4292030-6cbe-1702-02d5-becc50228fb0-479cb805,
#w-node-a61a6e1b-2245-ede9-bb15-0abb2af6bcad-479cb805,
#w-node-a6e5b44f-7617-5e74-555c-5c524cc29bbe-479cb805,
#w-node-a997a037-45a6-fff9-58ce-57efe6ee960c-219bcd3e,
#w-node-a997a037-45a6-fff9-58ce-57efe6ee960c-d9aae086,
#w-node-ad2f3c5b-905d-929c-46ec-a91d3f60c2d5-479cb805,
#w-node-af337f17-3b17-87b9-7d3f-cf5f989ceb24-479cb805,
#w-node-af930d58-a026-3605-a186-5eccd34a64da-479cb805,
#w-node-b3735a09-29f8-9190-f762-e8c45305946e-d9aae086,
#w-node-b56f07d6-ae0f-7545-4973-4806cefd4412-479cb805,
#w-node-bea9248d-2f6e-5af6-74c4-d2544e15495a-479cb805,
#w-node-bea9248d-2f6e-5af6-74c4-d2544e15495d-479cb805,
#w-node-bea9248d-2f6e-5af6-74c4-d2544e154960-479cb805,
#w-node-bea9248d-2f6e-5af6-74c4-d2544e154963-479cb805,
#w-node-bea9248d-2f6e-5af6-74c4-d2544e154966-479cb805,
#w-node-bea9248d-2f6e-5af6-74c4-d2544e154969-479cb805,
#w-node-bea9248d-2f6e-5af6-74c4-d2544e15496c-479cb805,
#w-node-c477a03b-baa2-d5bc-7a46-f450138548d6-a9659e9b,
#w-node-c4d63293-285e-bea4-9401-88711c9b59e4-598c3627,
#w-node-c4d63293-285e-bea4-9401-88711c9b59e4-81e1bc5a,
#w-node-c6fe2110-2bbb-4697-bcc9-485841b8ae56-479cb805,
#w-node-c7e2cf6b-8118-2466-5cd8-9ecb9242525c-479cb805,
#w-node-cb6ada3c-f781-419c-fd0a-cc257ed3e186-479cb805,
#w-node-ccaa3d5e-d031-396f-824d-e3abb1b4e739-479cb805,
#w-node-d2d16d4c-54a5-54f9-a290-720ca28a0305-d9aae086,
#w-node-d66a3ca4-66a2-d2a3-03c2-f05d47543746-479cb805,
#w-node-e2ebc24f-3e45-67cf-73bb-af9de97d72ed-479cb805,
#w-node-e331341b-6912-89c4-4a4a-07c5ea82cc94-031ba986,
#w-node-e5e2fc57-caa6-66b1-3940-e0136d228c7c-479cb805,
#w-node-ebca98b3-b116-3eda-bcbf-03002c0cc410-fd5d6cb2,
#w-node-edb7839b-0c75-814b-c7db-5aa820a90b09-479cb805,
#w-node-f061d16a-1238-1a1b-8e6d-33887b092e35-fd5d6cb2,
#w-node-f35f2803-314c-5b30-9ba6-c29a39231b4e-479cb805,
#w-node-f91721ee-e329-7836-2206-1b80563ff5db-479cb805,
#w-node-f9f8cedb-44cc-d04e-728a-e1c0dd260499-01830c03,
#w-node-f9f8cedb-44cc-d04e-728a-e1c0dd260499-031ba986,
#w-node-f9f8cedb-44cc-d04e-728a-e1c0dd260499-123b74f8,
#w-node-f9f8cedb-44cc-d04e-728a-e1c0dd260499-148b7089,
#w-node-fdc98abd-2b4e-4718-5758-af98972831cf-d9aae086,
#w-node-fe3c2e45-33e3-5ac4-3640-eff6fe199880-479cb805,
#w-node-feda91f3-426c-68ef-7113-27f8a0d53ebe-479cb805 {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
}

#w-node-_988dfb0b-52c5-eceb-f14b-368c3acc570e-fd5d6cb2 {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
    -ms-grid-column-align: center;
    justify-self: center;
}

#w-node-c4d63293-285e-bea4-9401-88711c9b59e6-598c3627,
#w-node-c4d63293-285e-bea4-9401-88711c9b59e6-81e1bc5a,
#w-node-c679f897-c110-62af-9958-6a95e3a1d30a-fd5d6cb2 {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
    -ms-grid-column-align: end;
    justify-self: end;
}

#w-node-_939981a1-0003-49a4-3d04-a98e658912cf-031ba986,
#w-node-_939981a1-0003-49a4-3d04-a98e658912cf-123b74f8,
#w-node-_939981a1-0003-49a4-3d04-a98e658912cf-148b7089,
#w-node-_939981a1-0003-49a4-3d04-a98e658912cf-9baf51cf,
#w-node-d5d640d5-aeec-f9b8-f3b4-fb0ebc8bbc8b-01830c03 {
    -ms-grid-column-align: end;
    justify-self: end;
    -webkit-align-self: center;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
}

#w-node-_029b2e55-10cd-f643-6a90-7b5e6fe14e1d-d9aae086,
#w-node-_0c0c6251-4550-d835-03e2-a4beb42303a4-d9aae086,
#w-node-_0c0c6251-4550-d835-03e2-a4beb42303ae-d9aae086,
#w-node-_0c0c6251-4550-d835-03e2-a4beb42303b8-d9aae086,
#w-node-_0c0c6251-4550-d835-03e2-a4beb42303c2-d9aae086,
#w-node-_1c249de9-9011-c0c8-9fc7-faf57fc6c0c1-9ed1d7b7,
#w-node-_3ccb6214-056a-7186-ae5d-4819ed5c02da-598c3627,
#w-node-_3ccb6214-056a-7186-ae5d-4819ed5c02da-81e1bc5a,
#w-node-_54b64bb1-e249-dcec-2517-7e6ca83d2e8f-9ed1d7b7,
#w-node-d1c296c2-04a9-cd92-d0a2-fbeb2c31151c-9ed1d7b7,
#w-node-eaaa343d-a18e-2c78-8439-95b794f63e98-d9aae086,
#w-node-ec4f37ef-fa24-97d9-fa12-b152fa109021-9ed1d7b7 {
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
}

#w-node-c4d63293-285e-bea4-9401-88711c9b59e1-598c3627,
#w-node-c4d63293-285e-bea4-9401-88711c9b59e1-81e1bc5a {
    -ms-grid-column: span 1;
    grid-column-start: span 1;
    -ms-grid-column-span: 1;
    grid-column-end: span 1;
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
    -ms-grid-column-align: start;
    justify-self: start;
}

#w-node-_3b1ae006-0911-43a3-25d4-8b6a00f9cd64-ca23c430,
#w-node-_3b1ae006-0911-43a3-25d4-8b6a00f9cd6f-ca23c430,
#w-node-_3b1ae006-0911-43a3-25d4-8b6a00f9cd73-ca23c430,
#w-node-_3b1ae006-0911-43a3-25d4-8b6a00f9cd77-ca23c430,
#w-node-_3b1ae006-0911-43a3-25d4-8b6a00f9cd82-ca23c430,
#w-node-_4df6d9e9-0b2e-954b-caa5-137fd13a2ea6-28690c4f,
#w-node-_4df6d9e9-0b2e-954b-caa5-137fd13a2eaa-28690c4f,
#w-node-_4df6d9e9-0b2e-954b-caa5-137fd13a2eae-28690c4f,
#w-node-_4df6d9e9-0b2e-954b-caa5-137fd13a2eb2-28690c4f,
#w-node-_4df6d9e9-0b2e-954b-caa5-137fd13a2eb6-28690c4f,
#w-node-_56d44d0d-5b0c-2205-07b1-f113737aea74-ca23c430,
#w-node-_56d44d0d-5b0c-2205-07b1-f113737aea7f-ca23c430,
#w-node-_56d44d0d-5b0c-2205-07b1-f113737aea83-ca23c430,
#w-node-_56d44d0d-5b0c-2205-07b1-f113737aea87-ca23c430,
#w-node-_56d44d0d-5b0c-2205-07b1-f113737aea92-ca23c430,
#w-node-_5da870de-9c78-2fac-632f-2db810833599-ca23c430,
#w-node-_5da870de-9c78-2fac-632f-2db8108335a4-ca23c430,
#w-node-_5da870de-9c78-2fac-632f-2db8108335a8-ca23c430,
#w-node-_5da870de-9c78-2fac-632f-2db8108335ac-ca23c430,
#w-node-_5da870de-9c78-2fac-632f-2db8108335b7-ca23c430,
#w-node-_619ab7fd-a970-4152-ffdf-75e2b4290f05-ca23c430,
#w-node-_619ab7fd-a970-4152-ffdf-75e2b4290f09-ca23c430,
#w-node-_619ab7fd-a970-4152-ffdf-75e2b4290f15-ca23c430,
#w-node-_6d171fe2-c1a4-0c3b-59aa-021450ccb3ac-ca23c430,
#w-node-_6d171fe2-c1a4-0c3b-59aa-021450ccb3b7-ca23c430,
#w-node-_6d171fe2-c1a4-0c3b-59aa-021450ccb3bb-ca23c430,
#w-node-_6d171fe2-c1a4-0c3b-59aa-021450ccb3ca-ca23c430,
#w-node-_6f5d9860-4e4b-a4dd-f6a3-c4b9fd92b698-fd92b684,
#w-node-_6f5d9860-4e4b-a4dd-f6a3-c4b9fd92b69c-fd92b684,
#w-node-_6f5d9860-4e4b-a4dd-f6a3-c4b9fd92b6a0-fd92b684,
#w-node-_6f5d9860-4e4b-a4dd-f6a3-c4b9fd92b6a4-fd92b684,
#w-node-_6f5d9860-4e4b-a4dd-f6a3-c4b9fd92b6a8-fd92b684,
#w-node-_6f5d9860-4e4b-a4dd-f6a3-c4b9fd92b6b2-fd92b684,
#w-node-b6261869-78f2-76c4-08ec-daf6550ce07d-ca23c430,
#w-node-ca72478b-ad67-e8c9-2535-b51a0fa945ce-28690c4f,
#w-node-dbb6ca6d-3760-1948-2c4b-341318690107-ca23c430,
#w-node-dbb6ca6d-3760-1948-2c4b-341318690112-ca23c430,
#w-node-dbb6ca6d-3760-1948-2c4b-341318690116-ca23c430,
#w-node-dbb6ca6d-3760-1948-2c4b-34131869011a-ca23c430,
#w-node-dbb6ca6d-3760-1948-2c4b-341318690125-ca23c430,
#w-node-fc71a492-6cb2-2f88-08e9-05afbe2b9432-ca23c430 {
    -ms-grid-row: span 1;
    grid-row-start: span 1;
    -ms-grid-row-span: 1;
    grid-row-end: span 1;
    -ms-grid-column: span 2;
    grid-column-start: span 2;
    -ms-grid-column-span: 2;
    grid-column-end: span 2;
}

@media screen and (max-width:991px) {
    #w-node-_30cb7d9b-4108-5695-04b5-32ad01c9f448-919cb7e7,
    #w-node-_5789c1e2-9e44-39c6-62be-57d1c1038777-919cb7e7,
    #w-node-_893235c0-32bb-f4aa-71b3-0b55fd6e8c43-919cb7e7,
    #w-node-be7db8ec-e635-2acc-5966-ece440209f00-919cb7e7 {
        -ms-grid-column: 2;
        grid-column-start: 2;
        -ms-grid-column-span: 0;
        grid-column-end: 2;
        -ms-grid-row: 1;
        grid-row-start: 1;
        -ms-grid-row-span: 1;
        grid-row-end: 2;
    }

    #w-node-_30cb7d9b-4108-5695-04b5-32ad01c9f44b-919cb7e7,
    #w-node-_5789c1e2-9e44-39c6-62be-57d1c103877a-919cb7e7,
    #w-node-_893235c0-32bb-f4aa-71b3-0b55fd6e8c46-919cb7e7,
    #w-node-e8b44f93-f5f9-770b-fd9d-3c9df9f3ce9e-919cb7e7 {
        -ms-grid-column-span: 1;
        grid-column-end: 3;
        -ms-grid-column: 2;
        grid-column-start: 2;
        -ms-grid-row-span: 1;
        grid-row-end: 3;
        -ms-grid-row: 2;
        grid-row-start: 2;
    }

    #w-node-_001575ce-1fa2-0cfb-23f8-9639bbfd2e75-919cb7e7,
    #w-node-_6dcec443-33d7-5070-6312-76364c0b2435-4c0b2426,
    #w-node-_9ab3aabc-68a0-4431-613a-ba9ac9930a1a-01830c03,
    #w-node-_9ab3aabc-68a0-4431-613a-ba9ac9930a1a-031ba986,
    #w-node-_9ab3aabc-68a0-4431-613a-ba9ac9930a1a-123b74f8,
    #w-node-_9ab3aabc-68a0-4431-613a-ba9ac9930a1a-148b7089,
    #w-node-_9ab3aabc-68a0-4431-613a-ba9ac9930a1a-9baf51cf {
        -ms-grid-row: span 1;
        grid-row-start: span 1;
        -ms-grid-row-span: 1;
        grid-row-end: span 1;
        -ms-grid-column: span 1;
        grid-column-start: span 1;
        -ms-grid-column-span: 1;
        grid-column-end: span 1;
    }

    #w-node-_856b85e9-05ee-141b-7cb9-5ffb7593d185-031ba986,
    #w-node-_856b85e9-05ee-141b-7cb9-5ffb7593d185-123b74f8,
    #w-node-_856b85e9-05ee-141b-7cb9-5ffb7593d185-148b7089,
    #w-node-_856b85e9-05ee-141b-7cb9-5ffb7593d185-9baf51cf,
    #w-node-a53760e1-4092-cf81-e5d5-645b54b75764-54b75761,
    #w-node-af815904-fa0c-8b1c-d5cf-292a705636e4-cc9e429a,
    #w-node-af815904-fa0c-8b1c-d5cf-292a705636e4-d9aae086,
    #w-node-af815904-fa0c-8b1c-d5cf-292a705636e4-e3201d8a,
    #w-node-d5d640d5-aeec-f9b8-f3b4-fb0ebc8bbc86-01830c03 {
        -ms-grid-column-span: 1;
        grid-column-end: 2;
        -ms-grid-column: 1;
        grid-column-start: 1;
        -ms-grid-row-span: 1;
        grid-row-end: 3;
        -ms-grid-row: 2;
        grid-row-start: 2;
    }

    #w-node-_939981a1-0003-49a4-3d04-a98e658912cf-031ba986,
    #w-node-_939981a1-0003-49a4-3d04-a98e658912cf-123b74f8,
    #w-node-_939981a1-0003-49a4-3d04-a98e658912cf-148b7089,
    #w-node-_939981a1-0003-49a4-3d04-a98e658912cf-9baf51cf,
    #w-node-d5d640d5-aeec-f9b8-f3b4-fb0ebc8bbc8b-01830c03 {
        -ms-grid-column-span: 1;
        grid-column-end: 2;
        -ms-grid-column: 1;
        grid-column-start: 1;
        -ms-grid-row-span: 2;
        grid-row-end: 3;
        -ms-grid-row: 1;
        grid-row-start: 1;
        -ms-grid-column-align: end;
        justify-self: end;
        -ms-grid-row-align: center;
        align-self: center;
    }
}

@media screen and (max-width:767px) {
    #w-node-_939981a1-0003-49a4-3d04-a98e658912cf-9baf51cf,
    #w-node-d5d640d5-aeec-f9b8-f3b4-fb0ebc8bbc8b-01830c03 {
        -ms-grid-column-align: end;
        justify-self: end;
        -ms-grid-row-align: center;
        align-self: center;
        -ms-grid-column-span: 1;
        grid-column-end: 2;
        -ms-grid-column: 1;
        grid-column-start: 1;
        -ms-grid-row-span: 1;
        grid-row-end: 3;
        -ms-grid-row: 2;
        grid-row-start: 2;
    }
}

@media screen and (max-width:479px) {
    #w-node-_988dfb0b-52c5-eceb-f14b-368c3acc570e-fd5d6cb2,
    #w-node-c679f897-c110-62af-9958-6a95e3a1d30a-fd5d6cb2 {
        -ms-grid-column-align: start;
        justify-self: start;
    }

    #w-node-_6d72a666-03e0-8afa-81b3-8c7baf6a197b-9ed1d7b7,
    #w-node-bfeddc47-fbdc-f919-d4de-319f5413d09d-9ed1d7b7 {
        -ms-grid-row: span 1;
        grid-row-start: span 1;
        -ms-grid-row-span: 1;
        grid-row-end: span 1;
        -ms-grid-column: span 1;
        grid-column-start: span 1;
        -ms-grid-column-span: 1;
        grid-column-end: span 1;
    }

    #w-node-_3b1ae006-0911-43a3-25d4-8b6a00f9cd67-ca23c430,
    #w-node-_3b1ae006-0911-43a3-25d4-8b6a00f9cd6b-ca23c430,
    #w-node-_4df6d9e9-0b2e-954b-caa5-137fd13a2e9e-28690c4f,
    #w-node-_4df6d9e9-0b2e-954b-caa5-137fd13a2ea2-28690c4f,
    #w-node-_56d44d0d-5b0c-2205-07b1-f113737aea77-ca23c430,
    #w-node-_56d44d0d-5b0c-2205-07b1-f113737aea7b-ca23c430,
    #w-node-_5da870de-9c78-2fac-632f-2db81083359c-ca23c430,
    #w-node-_5da870de-9c78-2fac-632f-2db8108335a0-ca23c430,
    #w-node-_619ab7fd-a970-4152-ffdf-75e2b4290efd-ca23c430,
    #w-node-_619ab7fd-a970-4152-ffdf-75e2b4290f01-ca23c430,
    #w-node-_6d171fe2-c1a4-0c3b-59aa-021450ccb3af-ca23c430,
    #w-node-_6d171fe2-c1a4-0c3b-59aa-021450ccb3b3-ca23c430,
    #w-node-_6f5d9860-4e4b-a4dd-f6a3-c4b9fd92b690-fd92b684,
    #w-node-_6f5d9860-4e4b-a4dd-f6a3-c4b9fd92b694-fd92b684,
    #w-node-dbb6ca6d-3760-1948-2c4b-34131869010a-ca23c430,
    #w-node-dbb6ca6d-3760-1948-2c4b-34131869010e-ca23c430 {
        -ms-grid-row: span 1;
        grid-row-start: span 1;
        -ms-grid-row-span: 1;
        grid-row-end: span 1;
        -ms-grid-column: span 2;
        grid-column-start: span 2;
        -ms-grid-column-span: 2;
        grid-column-end: span 2;
    }
}

@font-face {
    font-family: 'Ppneuemontreal';
    src: url('https://uploads-ssl.webflow.com/6356a48dff70251d68facdf8/6356b981583d410c7992d51e_PPNeueMontreal-Regular.woff2') format('woff2');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Ppneuemontreal';
    src: url('https://uploads-ssl.webflow.com/6356a48dff70251d68facdf8/6356b981e3a3e65b27abcdce_PPNeueMontreal-Semibold.woff2') format('woff2');
    font-weight: 600;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Ppneuemontreal';
    src: url('https://uploads-ssl.webflow.com/6356a48dff70251d68facdf8/6356b9816ed7636608a7cb25_PPNeueMontreal-Medium.woff2') format('woff2');
    font-weight: 500;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Dmmono';
    src: url('https://uploads-ssl.webflow.com/6356a48dff70251d68facdf8/6356ba961271192eb1291166_DMMono-Medium.woff2') format('woff2');
    font-weight: 500;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Dmmono';
    src: url('https://uploads-ssl.webflow.com/6356a48dff70251d68facdf8/6356ba96a037156eabad5d13_DMMono-Regular.woff2') format('woff2');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
}

#w-node-_47a3ad97-3cf7-eed4-9591-6b5c6b198665-d9aae086 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    /* background-image: url('https://source.unsplash.com/random/444x316?sig=1'); */
    background-image: linear-gradient(0deg, rgba(8, 7, 7, 0.52), rgba(26, 19, 23, 0.98)), url(./why_1.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 316px;
    width: 100% !important;
    opacity: .6;
    justify-content: center !important;
    justify-items: center !important;
    text-align: center !important;
}

#w-node-d2d16d4c-54a5-54f9-a290-720ca28a0305-d9aae086 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: linear-gradient(0deg, rgba(8, 7, 7, 0.52), rgba(26, 19, 23, 0.98)), url(./why_2.png);

    /* background-image: url('https://source.unsplash.com/random/444x316?sig=2'); */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 316px;
    width: 100% !important;
    opacity: .6;
    justify-content: center !important;
    justify-items: center !important;
    text-align: center !important;
}

#w-node-_0f7dca71-f3b7-b33c-ff85-fe34b7498da7-d9aae086 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: linear-gradient(0deg, rgba(8, 7, 7, 0.52), rgba(26, 19, 23, 0.98)), url(./why_3.png);

    /* background-image: url('https://source.unsplash.com/random/444x316?sig=3'); */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 316px;
    width: 100% !important;
    opacity: .6;
    justify-content: center !important;
    justify-items: center !important;
    text-align: center !important;
}

#w-node-_550d898a-f264-f17e-250b-d591f6d243a9-d9aae086 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: linear-gradient(0deg, rgba(8, 7, 7, 0.52), rgba(26, 19, 23, 0.98)), url(./why_4.png);

    /* background-image: url('https://source.unsplash.com/random/444x316?sig=4'); */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 316px;
    width: 100% !important;
    opacity: .6;
    justify-content: center !important;
    justify-items: center !important;
    text-align: center !important;
}

#w-node-b3735a09-29f8-9190-f762-e8c45305946e-d9aae086 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: linear-gradient(0deg, rgba(8, 7, 7, 0.52), rgba(26, 19, 23, 0.98)), url(./why_5.png);

    /* background-image: url('https://source.unsplash.com/random/444x316?sig=5'); */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 316px;
    width: 100%  !important;
    opacity: .6;
    justify-content: center !important;
    justify-items: center !important;
    text-align: center !important;
}

#w-node-fdc98abd-2b4e-4718-5758-af98972831cf-d9aae086 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: linear-gradient(0deg, rgba(8, 7, 7, 0.52), rgba(26, 19, 23, 0.98)), url(./why_6.png);

    /* background-image: url('https://source.unsplash.com/random/444x316?sig=6'); */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 316px;
    width: 100% !important;
    opacity: .6;
    justify-content: center !important;
    justify-items: center !important;
    text-align: center !important;
}

.c-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    overflow: hidden;
}

.c-video video {
    min-width: 100%;
    min-height: 100%;
}

/* mostrar{ */
/* img{ */
/* visibility:visible */
/* } */
/* } */
/* ocultar{ */
/* img{ */
/* visibility:hidden */
/* } */
/* } */
/* .c-section card::after img{ */
/* visibility:hidden; */
/* } */
/* .c-section .c-card:hover img{ */
/* visibility:visible; */
/* } */
.c-card .t-display-7 {
    display: inline-block;
    padding-bottom: 0.25rem;

    /* defines the space between text and underline */
    padding-top: 1.5rem;
    font-weight: bold;
    position: relative;
}

.c-card .t-display-7::before {
    content: "";
    position: absolute;
    right: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: blue;
    transition: width 0.25s ease-out;
}

.c-card .t-display-7:hover::before {
    width: 100%;
    left: 0;
    right: auto;
}

/* mostrar:.c-section .c-card::before { */
/* visibility:visible */
/* } */
/* .c-section .c-card:hover::before { */
/* visibility:hidden */
/* } */
.oculto {
    opacity: 0;
}

.c-card:hover .oculto {
    opacity: 1;
}

/* .c-menu-links { */
/* position: relative; */
/* display: -webkit-box; */
/* display: -webkit-flex; */
/* display: -ms-flexbox; */
/* display: flex; */
/* -webkit-box-orient: vertical; */
/* -webkit-box-direction: normal; */
/* -webkit-flex-direction: column; */
/* -ms-flex-direction: column; */
/* -webkit-box-align: center; */
/* -webkit-align-items: flex-start; */
/* -ms-flex-align: start; */
/* align-items: center; */
/* grid-column-gap: 0.5em; */
/* grid-row-gap: 0.5em; */
/* padding-right: 709px; */
/* } */
.list-1 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: url('./list1.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    width: 100%;
}

.list-2 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: url('./list2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    width: 100%;
}

.list-3 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: url('./list3.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    width: 100%;
}

.list-4 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: url('./list4.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
    width: 100%;
}


	</style>
	        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
      <style>

.c-body {
    overscroll-behavior: none;
}

* {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    scrollbar-width: none;

    /* ! align-items: center; */
    /* ! align-self: center; */
    /* ! position: relative; */
}

/* Remove Scrollbar Chrome */
::-webkit-scrollbar {
    display: none;
}

[decoration],
[plus] {
    opacity: 0;
}

/* Show in the live build */
.swiper-slide.te:not(:first-child),
.swiper-slide.solutions:not(:first-child),
.swiper-controls.solutions,
.c-social-icon {
    display: flex !important;
}

@media only screen and (min-width: 992px) {
    .c-section.ap-hero {
        height: 300vh !important;
    }
    .feat-1{
      
    }
    
}

.c-partner-pag {
    display: block;
}

/* Page transition settings */
body .transition {
    display: block;
}

.w-editor .transition {
    display: none;
}

.no-scroll-transition {
    overflow: hidden;
    position: relative;
}

.c-body {
    background-color: var(--carbon);
}

.footer-shape {
    margin-top: 2em;
}

html:not(.w-editor) .o-wrapper {
    opacity: 0;
}

html:not(.w-editor) .c-logo-link {
    opacity: 0;
}

html:not(.w-editor) .c-header {
    opacity: 0;
}

/* Variables */
:root {
    --carbon: #141519;
    --cloud: #FAFBFF;
    --grey100: #E6E7E9;
    --grey200: #7B7F8A;
    --grey300: #5D5F68;
    --grey400: #323337;
    --grey500: #28292D;
    --grey600: #202125;
    --medical: #45CCFF;
    --industrial: #C7DE30;
    --automotive: #1EE698;
    --consumer: #955CFF;
}

/* Root Scaling */
@media only screen and (min-width: 992px) and (max-width: 1920px) {
    .t-display-5 {
        font-size: clamp(1.8em, 2em, 1.5em);
    }

    .t-display-6 {
        font-size: clamp(1.75em, 2em, 2.5em);
    }

    .t-display-7 {
        font-size: clamp(1.25em, 1.5em, 2em);
    }

    .t-body-1 {
        font-size: clamp(17px, 1.125em, 1.375em);
    }

    .t-body-2 {
        font-size: clamp(16px, 1.125em, 1.125em);
    }

    .t-body-3 {
        font-size: clamp(15px, 0.9375em, 0.9375em);
    }

    .t-label-2 {
        font-size: clamp(12px, 0.9375em, 15px);
    }

    .t-label-3 {
        font-size: clamp(16px, 1.125em, 1.125em);
    }

    .t-label-4 {
        font-size: clamp(18px, 1.375em, 1.375em);
    }

    .t-label-5 {
        font-size: clamp(18px, 1.5em, 1.5em);
    }
}

/* Media Query XXL */
@media only screen and (min-width: 1921px) {
    .c-partners-wrap.is-large {
        display: flex;
    }

    .c-partners-wrap {
        display: none;
    }

    .t-micro-1 {
        font-size: 1em;
    }

    .t-micro-2 {
        font-size: calc(0.75em, 0.75em, 16px);
    }

    .t-micro-3 {
        font-size: calc(0.625em, 0.625em, 15px);
    }

    .t-micro-4 {
        font-size: calc(0.5625em, 0.5625em, 14px);
    }

    .t-label-5 {
        font-size: 0.8125em;
    }

    .ornament-xxl {
        width: calc(0.625em, 0.625em, 16px);
        height: calc(2.125em, 2.125em, 34px);
    }

    .ornament-horizontal-xxl {
        width: calc(2.125em, 2.125em, 34px);
        height: calc(0.875em, 0.875em, 14px);
    }

    .c-nav-icon-bars {
        height: 0.5em;
    }

    .plus-xxl {
        width: calc(0.5625em, 0.5625em, 12px);
        height: calc(1.4375em, 1.4375em, 31px);
    }

    .c-plus-icon {
        width: calc(1.875em, 1.875em, 32px);
        height: calc(1.875em, 1.875em, 32px);
    }

    .c-btn.is-large {
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .c-btn.is-menu {
        height: calc(7.5em, 7.5em, 140px);
    }

    .c-section.te,
    .c-section.so-product,
    .c-section.so-be,
    .c-section.so-product-light {
        padding-top: calc(8.333333333333334% + 1.25em);
        padding-bottom: calc(8.333333333333334% + 1.25em);
    }

    [full-height] {
        height: 100vh !important;
    }

    .c-logo-img {
        width: 156px;
        height: 45px;
    }

    .c-header {
        height: 60px;
    }

    .c-header-nav {
        width: 300px;
        font-size: 18px;
    }
}

/* Media Query Tablet */
@media only screen and (max-width: 991px) {
    .c-nav-icon-bars {
        width: 48px;
    }

    .swiper-controls-te {
        position: relative !important;
        transform: translate(0em, 0em) !important;
    }

    /* 100vh Height fix */
    .c-section.hm-hero,
    .c-section.so-hero,
    .c-section.ap-hero,
    .c-section.page-404,
    .c-ap-hero {
        /* height: calc(var(--vh, 1vh) * 100); */
        height: calc(100vh - 3.2em);
    }

    .c-btn-txt .t-label-4 {
        font-size: 1.125em;
    }

    .c-form-block {
        width: calc(100% + 2em);
    }

    [industrial-title] {
        font-size: 20vw;
    }

    [medical-title] {
        font-size: 20vw;
    }

    [consumer-title] {
        font-size: 19vw;
    }

    [automotive-title] {
        font-size: 17vw;
    }

    .c-card.is-consumer .t-display-3 {
        font-size: 4em;
    }

    .c-video-wrap {
        width: calc(100% + 2em);
    }

    .canvas-wrap.phone,
    .canvas-wrap.consumer {
        aspect-ratio: 1 / 1;
    }

    .canvas-wrap.medical,
    .canvas-wrap.car {
        aspect-ratio: 16 / 9;
    }
}

/* Media Query - Desktop */
@media only screen and (min-width: 992px) {
    .swiper-slide.leadership:first-child {
        margin-left: 14.5em;
    }

    .c-section.te,
    .c-section.so-be,
    .c-section.so-product-light,
    .c-section.cs-data,
    .c-section.cs-about {
        padding-top: calc(8.333333333333334% + 1em);
        padding-bottom: calc(8.333333333333334% + 1em);
    }

    .c-header-nav {
        width: clamp(190px, 16em, 16em);
    }

    .c-video-wrap {
        width: calc(100% + 8em);
    }
}

/* Disable clicking */
[no-click] {
    pointer-events: none;
}

[click] {
    pointer-events: auto;
}

/* Global */
a {
    color: inherit;
}

/* Safari border fix */
.c-img-contain {
    -webkit-mask-image: -webkit-radial-gradient(white, black);
}

.c-btn {
    border-color: inherit;
}

.no-scroll {
    overflow: hidden;
}

.c-menu-links:hover > .nav-link:not(:hover) {
    opacity: 0.2;
}

.c-menu-sub-links:hover > .nav-link:not(:hover) {
    opacity: 0.2;
}

.c-header-nav.is-light {
    background-color: var(--cloud);
    color: var(--carbon);
}

.c-header-nav.is-carbon {
    background-color: var(--carbon);
    color: var(--cloud);
}

.c-partner.view {
    width: calc(100% + 1px);
}

.o-row.swiper.hm-solutions,
.o-row.swiper.leadership {
    overflow: visible;
}

.swiper-button-disabled {
    opacity: 0.4;
    pointer-events: none;
}

.c-reel-play-wrap.is-active,
.c-reel-pause-wrap.is-active,
.c-section.hm-hero-pause.is-active {
    display: flex;
}

.self-center {
    align-self: center;
}

.self-end {
    align-self: flex-end;
}

.c-logo-link.is-light {
    /* mix-blend-mode: difference; */
}

.c-logo-link.is-dark {
    color: var(--cloud) !important;
}

.c-more:hover > .c-list-col-item:not(:hover) {
    opacity: 0.4 !important;
}

.plyr {
    width: 100%;
    height: 100%;
}

.plyr video {
    object-fit: fill;
}

.c-reel.solutions {
    width: 100%;
    height: 100%;
}

.c-reel.solutions video {
    object-fit: cover;
}

[no-selection]::selection {
    background: transparent;
    color: var(--carbon);
    text-shadow: none;
}

[vertical-text] {
    writing-mode: vertical-rl;
    text-orientation: mixed;
}

[split-text] {
    overflow: hidden;
    padding-top: 0.03em;
    margin-top: -0.03em;
}

.c-card-cs .c-card {
    border: 2px solid var(--cloud);
}

.c-card-cs .c-card:hover {
    background-color: var(--cloud);
    color: var(--carbon);
}

.w-form-label {
    color: var(--grey200) !important;
}

/* Hide in the Webflow designer */
.swiper-slide.te:not(:first-child),
.swiper-slide.solutions:not(:first-child),
.c-partner-pag,
.c-social-icon {
    display: none;
}

.c-section.ap-hero {
    height: 100vh;
}

.canvas-wrap .embed {
    overflow: hidden;
}

.canvas-wrap canvas {
    position: absolute;
    left: 0%;
    top: 0%;
    right: 0%;
    bottom: 0%;
    width: 100%;
    height: 100%;
}

@media only screen and (max-width: 832px) {
    .o-grid.values {
        grid-template-columns: 1fr !important;
    }
}

.list-1 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: url('../../media/list1.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
}

.list-2 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: url('../../media/list2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
}

.list-3 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: url('../../media/list3.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
}

.list-4 {
    /* * position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;* */
    background-image: url('../../media/list4.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
}

/* .crd-1{ */
/* /** position: absolute; */
/* top: 0; */
/* left: 0; */
/* right: 0; */
/* bottom: 0;* */
*/                              */                              */                              */                              */                              */                  .video-overlay,
.video-placeholder {
    background-color: rgba(0,0,0,0.55);
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 5;
    background: transparent url(media/grid.png) repeat;
    -webkit-backface-visibility: hidden;
}

@media screen and (min-width: 0px){
  .t-margin{
    margin-left: 0px;
   
}  
 
}

@media screen and (min-width: 640px){
.t-margin{
    margin-left: 26px !important;
}
}

@media screen and (max-width: 768px){
   .o-row.hm-hero-content{
     justify-content: center;
 }   
     
}

@media screen and (max-width: 640px){
   .o-col.sm-w-22 {
      max-width: 83.33333333333334%;
} 
}
  
	  </style>

	  <style>


/* CSS */
.button-28 {
  appearance: none;
  background-color: transparent;
  border: 2px solid #1D97D4;
 /* border-radius: 15px;*/
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 16px;
  font-weight: 600;
  line-height: normal;
  margin: 0;
  min-height: 40px;
  min-width: 0;
  outline: none;
  /*padding: 16px 24px;*/
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 100%;
  will-change: transform;
  
}

.button-28:disabled {
  pointer-events: none;
}

.button-28:hover {
  color: #fff;
  background-color: #1D97D4;
  box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
  transform: translateY(-2px);
}

.button-28:active {
  box-shadow: none;
  transform: translateY(0);
}

	  </style>
  <style>.fullscreen-video { width: 100vw; height: 100vh; object-fit: cover; position: fixed; left: 0; right: 0; top: 0; bottom: 0; z-index: -1; } @media (min-aspect-ratio: 16/9) { .fullscreen-video {  width: 100%;  height: auto; } } @media (max-aspect-ratio: 16/9) { .fullscreen-video {  width: auto;  height: 100%; } }</style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsload@1/cmsload.js"></script>
        <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css"/>
        <script>
            function resizeIframe(obj) {
                if(window.innerWidth>768 && screen.orientation.type=="landscape-primary"){
                    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight +410+'px';
                }else if(window.innerWidth<768 && screen.orientation.type=="portrait-primary"){
                    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 350+'px';
                }
            }


          </script>
</head>

<style>

.img-header{
  justify-content: start !important;
  width: 170%;
  padding: 0.3em 0rem;
}

@media screen and (max-width:767px) {
    .responsive-margin{
        margin-top: 4em;
    }
}


@media screen and (min-width:768px) and (orientation:landscape) {
    .responsive-margin{
        margin-top: 3em;
    }
}

@media screen and (min-width:768px) and (orientation:portrait) {
    .responsive-margin{
        margin-top: 3em;
    }

}



    </style>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
	</a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
