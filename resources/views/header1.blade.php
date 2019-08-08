@extends('master')
@section('content')
<style>
@charset "UTF-8";
/*** Reset css** */

div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, u, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  box-sizing: border-box;
  list-style-type: none;
}

div:focus, span:focus, applet:focus, object:focus, iframe:focus, h1:focus, h2:focus, h3:focus, h4:focus, h5:focus, h6:focus, p:focus, blockquote:focus, pre:focus, a:focus, abbr:focus, acronym:focus, address:focus, big:focus, cite:focus, code:focus, del:focus, dfn:focus, em:focus, img:focus, ins:focus, kbd:focus, q:focus, s:focus, samp:focus, small:focus, strike:focus, strong:focus, sub:focus, sup:focus, tt:focus, var:focus, u:focus, center:focus, dl:focus, dt:focus, dd:focus, ol:focus, ul:focus, li:focus, fieldset:focus, form:focus, label:focus, legend:focus, table:focus, caption:focus, tbody:focus, tfoot:focus, thead:focus, tr:focus, th:focus, td:focus, article:focus, aside:focus, canvas:focus, details:focus, embed:focus, figure:focus, figcaption:focus, footer:focus, header:focus, hgroup:focus, menu:focus, nav:focus, output:focus, ruby:focus, section:focus, summary:focus, time:focus, mark:focus, audio:focus, video:focus {
  outline: none;
}

html {
  height: 100%;
  font-size: 100%;
  line-height: 1.5;
  background: #fff;
}

body {
  width: 100%;
  height: 100%;
  min-width: auto;
  color: #000;
  font-size: 0.875rem;
  font-family: Helvetica, Arial, Verdana, "Microsoft JhengHei", "微軟正黑體", "PMingLiU", sans-serif;
  font-weight: 300;
  word-wrap: break-word;
  -webkit-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  margin: 0 !important;
  padding: 0 !important;
}

div, h1, h2, h3, h4, h5, h6, p, dl, dt, dd, ol, ul, li, form, legend, input, textarea, button, table, tr, th, td, article, aside, footer, header, hgroup, nav, section, img, a, select {
  box-sizing: border-box;
  list-style: none;
  font-size: 0.875rem;
}

a {
  text-decoration: none;
  color: #000;
}

a:hover {
  color: #e61e25;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

header, footer, section {
  display: block;
}

.container {
  margin: 0 auto;
  width: 100%;
  max-width: 1150px;
}

.row {
  display: -ms-flexbox;
  display: flex;
  margin-right: -15px;
  margin-left: -15px;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.icon {
  display: inline-block;
  background: url(../img/icon@2x.png) 0 0 no-repeat;
  background-size: 242px 242px;
  line-height: inherit;
  vertical-align: middle;
  overflow: hidden;
  white-space: nowrap;
  width: 22px;
  height: 22px;
}

#wrapper {
  margin-top: 148px;
}

/*** End Reset css** */

.media {
  display: flex;
  align-items: flex-start;
}

.media-body {
  flex: 1;
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

.hide {
  display: none !important;
}

.hide-form {
  display: none;
}

.dropdown {
  position: relative;
}

.dropdown .dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 3;
  width: 100%;
  -moz-transition: all 0.15s ease-in-out;
  -o-transition: all 0.15s ease-in-out;
  -ms-transition: all 0.15s ease-in-out;
  -webkit-transition: all 0.15s ease-in-out;
  transition: all 0.15s ease-in-out;
  display: none;
}

.dropdown .dropdown-menu ul {
  min-width: 200px;
  background-color: #fff;
  width: 100%;
  display: inline-block;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}

.dropdown .dropdown-menu ul li {
  display: block;
}

.dropdown .dropdown-menu ul li a {
  text-align: left;
  width: 100%;
  padding: 8px 16px;
  color: #000;
  display: block;
}

.dropdown .dropdown-menu ul li a:hover {
  color: #e61e25;
}

.dropdown-full {
  position: inherit;
}

@media (min-width: 992px) {
  .dropdown .dropdown-menu {
    padding-top: 16px;
    opacity: 0;
    visibility: hidden;
    display: block;
  }
  .dropdown:hover>.dropdown-menu {
    padding-top: 0;
    visibility: inherit;
    opacity: 1;
  }
}

/* Side nav mobile */

@media (max-width: 991.98px) {
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 999;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    -ms-transition: 0.3s;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }
  .side-nav-open {
    position: fixed;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  .side-nav-open .closebtn {
    display: block;
  }
  .closebtn {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 998;
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
  }
  #main {
    -moz-transition: margin-left 0.3s;
    -o-transition: margin-left 0.3s;
    -ms-transition: margin-left 0.3s;
    -webkit-transition: margin-left 0.3s;
    transition: margin-left 0.3s;
    padding: 0;
    width: 100%;
    float: left;
  }
}

@media (min-width: 992px) {
  .sidenav {
    position: relative;
    width: 100% !important;
  }
  #main {
    margin-left: 0 !important;
  }
  .btn-navmenu {
    display: none;
  }
}

/* End side nav mobile */

/* Header */

.dotted-line-1 {
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 1;
  line-height: 1.5;
}

.icon-shopping {
  background-position: -22px 0;
}

.icon-media {
  background-position: -44px 0;
}

.icon-deals {
  background-position: -66px 0;
}

.icon-review {
  background-position: -88px 0;
}

.icon-wholesale {
  background-position: -110px 0;
}

.icon-sign-out {
  background-position: -22px -22px;
}

.icon-user {
  background-position: 0 -22px;
}

.icon-search {
  background-position: -44px -22px;
}

.icon-flag-th {
  width: 30px;
  background-position: -35px -66px;
}

.icon-flag-en {
  width: 30px;
  background-position: 0 -66px;
}

.icon-social-facebook {
  background-position: -154px 0;
}

.icon-social-line {
  background-position: -220px 0;
}

.icon-social-youtube {
  background-position: -176px 0;
}

.icon-social-instagram {
  background-position: -132px 0;
}

.icon-social-twitter {
  background-position: -198px 0;
}

.chevron::before {
  border-style: solid;
  border-width: 0.04rem 0.04rem 0 0;
  content: "";
  display: inline-block;
  height: 0.4rem;
  transform: rotate(-45deg);
  vertical-align: top;
  width: 0.4rem;
}

.chevron.right:before {
  transform: rotate(45deg);
}

.chevron.bottom:before {
  transform: rotate(135deg);
}

.chevron.left:before {
  transform: rotate(-135deg);
}

.lazy {
  opacity: 0.5;
  transition: opacity 0.3s ease-in;
}

.popup-show {
  overflow: hidden;
  position: relative;
}

@media (min-width: 992px) {
  .popup-show {
    overflow: auto;
  }
}

.sidenav {
  background-color: #202732;
  border-bottom: 2px solid #e61e25;
  display: block;
}

.sidenav .header_top {
  padding: 0;
}

.sidenav .header_top .left, .sidenav .header_top .right {
  display: -webkit-box;
  width: 250px;
}

.sidenav .header_top .left .social, .sidenav .header_top .left .language, .sidenav .header_top .right .social, .sidenav .header_top .right .language {
  display: none;
}

.sidenav .header_top .left .social, .sidenav .header_top .right .social {
  display: none;
  padding: 0 10px;
  vertical-align: middle;
}

.sidenav .header_top .left .social>li, .sidenav .header_top .right .social>li {
  display: inline-block;
}

.sidenav .header_top .left .login, .sidenav .header_top .right .login {
  border-bottom: 1px solid #535558;
  background-color: #2e3745;
  width: 100%;
  float: left;
}

.sidenav .header_top .left .login>li, .sidenav .header_top .right .login>li {
  width: 100%;
  position: relative;
  white-space: nowrap;
  float: left;
}

.sidenav .header_top .left .login>li>span, .sidenav .header_top .right .login>li>span {
  color: #57647b;
  line-height: 42px;
  height: 42px;
  float: left;
}

.sidenav .header_top .left .login>li>a, .sidenav .header_top .right .login>li>a {
  width: 50%;
  padding: 0 5px;
  line-height: 50px;
  height: 50px;
  text-align: center;
  background-color: #e61e25;
  color: #fff;
  float: left;
}

.sidenav .header_top .left .login>li .login-success-top, .sidenav .header_top .right .login>li .login-success-top {
  width: 65%;
  display: block;
}

.sidenav .header_top .left .login>li .btn-logout, .sidenav .header_top .right .login>li .btn-logout {
  width: 35%;
}

.sidenav .header_top .left .login>li ul a:hover, .sidenav .header_top .right .login>li ul a:hover {
  color: #e61e25;
}

.sidenav .header_top .left .login>li>.btn-register, .sidenav .header_top .left .login>li>.login-success-top, .sidenav .header_top .right .login>li>.btn-register, .sidenav .header_top .right .login>li>.login-success-top {
  border-right: 1px solid #f5434a;
}

.sidenav .header_top .left .language, .sidenav .header_top .right .language {
  vertical-align: middle;
}

.sidenav .header_top .left .language>li>a, .sidenav .header_top .right .language>li>a {
  padding: 0 10px;
  display: table-cell;
  height: 38px;
  vertical-align: middle;
  color: #fff;
}

.sidenav .header_top .left .language>li>.dropdown-menu ul, .sidenav .header_top .right .language>li>.dropdown-menu ul {
  float: right;
}

.sidenav .header_top .left .language>li>.dropdown-menu ul a:hover, .sidenav .header_top .right .language>li>.dropdown-menu ul a:hover {
  color: #e61e25;
}

.sidenav .header_top .left>.menu-main {
  width: 100%;
  display: block;
}

.sidenav .header_top .left>.menu-main>ul {
  display: block;
}

.sidenav .header_top .left>.menu-main>ul>li {
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  display: block;
}

.sidenav .header_top .left>.menu-main>ul>li a {
  text-transform: uppercase;
  padding: 12px;
  display: block;
  color: #fff;
  position: relative;
}

.sidenav .header_top .left>.menu-main>ul>li a::before {
  position: absolute;
  right: 10px;
  top: calc(50% - 0.25rem);
}

.sidenav .header_top .left>.menu-main>ul>li>a:hover {
  background-color: #e61e25;
}

.sidenav .header_top .left>.menu-main>ul>li>.navbar {
  background-color: #10151d;
}

.sidenav .header_top .left>.menu-main>ul>li>.navbar a {
  padding: 12px 20px 12px 35px;
}

.sidenav .header_top .left>.menu-main>ul>li>.navbar .nav-item>.dropdown-menu {
  display: none;
}

.sidenav .header_top .left>.menu-main>ul>li>.navbar .nav-item.show>.dropdown-menu.show {
  position: initial;
  display: inline-block;
}

.sidenav .header_top .left>.menu-main>ul>li>.navbar>ul>li>.dropdown-menu>a {
  padding: 12px 20px 12px 45px;
  text-transform: none;
  background-color: #000;
}

.sidenav .header_top .left>.menu-main>ul>li.show>a {
  background-color: #e61e25;
}

@media (min-width: 992px) {
  .sidenav .header_top {
    padding: 0;
  }
  .sidenav .header_top .left, .sidenav .header_top .right {
    width: auto;
  }
  .sidenav .header_top .right {
    float: right;
    margin: 0;
  }
  .sidenav .header_top .right .social, .sidenav .header_top .right .login, .sidenav .header_top .right .language {
    display: inline-block;
  }
  .sidenav .header_top .right .social {
    display: table-cell;
    height: 36px;
    vertical-align: middle;
  }
  .sidenav .header_top .right .social a:hover i {
    background-position-y: -22px;
  }
  .sidenav .header_top .right .language>li>a::after {
    content: "";
    border: 5px solid transparent;
    border-top-color: #fff;
    display: inline-table;
    margin-left: 5px;
    vertical-align: text-bottom;
  }
  .sidenav .header_top .right .language>li>a:hover {
    background-color: #e61e25;
  }
  .sidenav .header_top .right>.login {
    border-bottom: none !important;
    width: auto;
    background-color: #2e3745;
    float: left;
  }
  .sidenav .header_top .right>.login>li:hover>.sub-menu-user {
    padding-top: 2px;
    display: block !important;
  }
  .sidenav .header_top .right>.login>li {
    width: auto;
    position: relative;
    white-space: nowrap;
    float: left;
    background-color: #2e3745;
    border-left: 1px solid #171d27 !important;
    border-right: 1px solid #171d27 !important;
  }
  .sidenav .header_top .right>.login>li>span {
    color: #57647b;
    line-height: 36px;
    height: 36px;
    float: left;
  }
  .sidenav .header_top .right>.login>li>a {
    border-right: none !important;
    width: auto !important;
    padding: 0 10px;
    line-height: 36px;
    height: 36px;
    background-color: transparent;
    float: left;
  }
  .sidenav .header_top .right>.login>li>a.login-success-top {
    max-width: 125px;
  }
  .sidenav .header_top .right>.login>li>a:hover {
    background-color: #e61e25;
  }
  .sidenav .header_top .right>.login>li .login-ct {
    padding: 16px;
    border-bottom: 1px solid #F6F6F6;
  }
  .sidenav .header_top .right>.login>li .login-ct>p {
    text-align: center;
  }
  .sidenav .header_top .right>.login>li .login-ct>.btn-login {
    background-color: #e61e25;
    color: #fff;
    text-align: center;
    border-radius: 1px;
  }
  .sidenav .header_top .right>.login>li .login-ct>.btn-login:hover {
    background-color: #c8070e;
  }
  .sidenav .header_top .right>.login>li .login-ct>.btn-login-facebook {
    background-color: #3B5999;
    color: #fff;
    text-align: center;
    border-radius: 1px;
  }
  .sidenav .header_top .right>.login>li .login-ct>.btn-login-facebook:hover {
    background-color: #283d6b;
  }
  .sidenav .header_top .right>.login>li .btn-logout {
    border-top: 1px solid #F6F6F6;
    width: 100%;
  }
  .sidenav .header_top .left>.menu-main>ul>li {
    float: left;
    margin-right: 2px;
    width: auto;
    border-bottom: 0;
    display: block;
  }
  .sidenav .header_top .left>.menu-main>ul>li a {
    padding: 7px 12px;
    text-transform: none;
  }
  .sidenav .header_top .left>.menu-main>ul>li a::before {
    content: none;
  }
}

.menu-media>ul>li>a::after {
  position: absolute;
  border-style: solid;
  border-width: 0.04rem 0.04rem 0 0;
  content: "";
  display: inline-block;
  height: 0.4rem;
  vertical-align: top;
  width: 0.4rem;
  right: 10px;
  top: calc(50% - 0.25rem);
  transform: rotate(45deg);
}

.menu-media>ul>li.dropdown>a::after {
  opacity: 0.6;
  line-height: inherit;
  vertical-align: middle;
  overflow: hidden;
  white-space: nowrap;
  width: 22px;
  height: 22px;
  background: url(../img/icon@2x.png) 0 0 no-repeat;
  background-size: 242px 242px;
  border-style: none;
  border-width: initial;
  top: initial;
  transform: none;
  background-position: -66px -22px;
  right: 0;
}

.menu-media>ul>li.dropdown.show>a::after {
  background-position: -88px -22px;
}

.header_middle {
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
  -o-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
  -ms-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
}

.header {
  position: relative;
  padding: 16px 0;
  text-align: center;
}

.header .logo img {
  height: 30px;
}

.header .btn-navmenu {
  width: 44px;
  height: 44px;
  font-size: 1.75rem;
  cursor: pointer;
  text-align: center;
  position: absolute;
  top: 10px;
  left: 0;
}

.header .search {
  position: absolute;
  top: 10px;
  right: 0;
}

.header .search .btn-search-mobile {
  width: 50px;
  height: 44px;
  background-color: transparent;
  border: none;
}

.header .search>form {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 999;
  background-color: #fff;
  display: none;
  overflow-x: auto;
}

.header .search>form>.header-search {
  min-height: 44px;
  background-color: #fff;
  position: relative;
}

.header .search>form>.header-search>a.btn-back {
  color: #676D70;
  text-align: center;
  min-width: 44px;
  padding: 0 10px;
  height: 44px;
  line-height: 44px;
  left: 0;
  top: 0;
  position: absolute;
}

.header .search>form>.header-search>a.btn-back::before {
  margin-top: 19px;
}

.header .search>form>.header-search>h3 {
  font-size: 1rem;
  line-height: 44px;
}

.header .search>form>.txt-search-top {
  padding: 10px;
  display: block;
  background-color: #F6F6F6;
  position: relative;
}

.header .search>form>.txt-search-top>input {
  width: 100%;
  display: inline-block;
  height: 44px;
  border-radius: 5px;
  background-color: #fff;
  border: 1px solid #dcdcdc;
  padding: 0 35px 0 16px;
  outline: none;
}

.header .search>form>.txt-search-top>.icon-search {
  position: absolute;
  top: 20px;
  right: 20px;
  opacity: 0.5;
}

.header .search>form>.suggestion {
  padding: 16px;
  width: 100%;
  float: left;
}

.header .search>form>.suggestion>label {
  text-align: left;
  width: 100%;
  margin-bottom: 16px;
  float: left;
  font-size: 1rem;
}

.header .search>form>.suggestion div.recent-list {
  text-align: left;
  display: block;
  margin-left: -8px;
  margin-right: -8px;
}

.header .search>form>.suggestion div.recent-list>a {
  color: #000;
  border-radius: 4px;
  background-color: #F6F6F6;
  padding: 8px;
  display: inline-block;
  margin: 0px 6px 12px;
}

.header .search>form.active {
  display: block;
}

@media (min-width: 992px) {
  .header {
    padding: 16px 0;
  }
  .header .logo img {
    height: 38px;
  }
  .header .search {
    position: absolute;
    top: 20px;
    left: 0;
    width: 300px;
  }
  .header .search>form {
    position: initial;
    background-color: transparent;
    display: block;
  }
  .header .search>form .txt-search-top {
    padding: 0;
    background-color: transparent;
    width: 250px;
  }
  .header .search>form .txt-search-top>input {
    height: 40px;
  }
  .header .search>form .txt-search-top>.icon-search {
    top: 8px;
    right: 8px;
  }
}

.menu_second>span {
  padding: 12px;
  display: inline-block;
}

.menu_second nav {
  white-space: nowrap;
  display: flex;
  overflow-x: auto;
  overflow-y: hidden;
  -webkit-overflow-scrolling: touch;
  vertical-align: top;
}

.menu_second nav>ul {
  text-align: center;
  margin: 0 auto;
  display: block;
}

.menu_second nav>ul>li {
  display: inline-block;
  vertical-align: top;
}

.menu_second nav>ul>li>a {
  text-transform: uppercase;
  font-weight: bold;
}

.menu_second nav>ul>li a {
  position: relative;
  padding: 12px;
  float: left;
}

.menu_second nav>ul>li>.dropdown-menu a::before {
  position: absolute;
  right: 16px;
  top: calc(50% - 0.2rem);
}

@media (min-width: 992px) {
  .menu_second nav {
    overflow: inherit;
  }
  .menu_second nav ul>li>a {
    text-transform: none;
    font-weight: normal;
  }
}

/* End header */

.icon-footer-facebook {
  background-position: -132px -44px;
}

.icon-footer-youtube {
  background-position: -154px -45px;
}

.icon-footer-twitter {
  background-position: -176px -45px;
}

footer .container {
  padding: 16px 0;
  text-align: center;
}

footer .container .copyright {
  font-size: 0.75rem;
  color: #676D70;
}

footer .container .social-footer {
  margin: 16px 0;
  display: inline-block;
}

footer .container .social-footer>li {
  margin: 0 5px;
  display: inline-block;
  vertical-align: top;
}

footer .container .social-footer>li a {
  border-radius: 3px;
  border: 1px solid #000;
  width: 44px;
  height: 44px;
  display: table-cell;
  vertical-align: middle;
  -moz-transition: all 0.15s ease-in-out;
  -o-transition: all 0.15s ease-in-out;
  -ms-transition: all 0.15s ease-in-out;
  -webkit-transition: all 0.15s ease-in-out;
  transition: all 0.15s ease-in-out;
}

footer .container .social-footer>li a:hover {
  opacity: 0.4;
}

#gotop {
  display: none;
  bottom: 47px;
  font-size: 10px;
  position: fixed;
  right: 10px;
  z-index: 9999;
}

#gotop a {
  background: none repeat scroll 0 0 #666666;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  color: #FFFFFF;
  display: block;
  opacity: 0.8;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  font-size: 0.625rem;
}

#gotop span {
  min-width: 44px;
  background: none repeat scroll 0 0 #666666;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  display: block;
  opacity: 0.8;
  padding: 15px;
  text-align: center;
  color: #fff;
}

#gotop span::before {
  margin-top: 5px;
}

/*# sourceMappingURL=template.css.map */

</style>
<div id="mySidenav" class="sidenav">
    <div class="container header_top">
        <div class="right">
            <ul class="social">
                <li><a href="#" target="_blank"><i class="icon icon-social-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon icon-social-youtube"></i></a></li>
                <li><a href="#" target="_blank"><i class="icon icon-social-twitter"></i></a></li>
            </ul>
            <ul class="login">
                <li class="has-child dropdown">
                    @if(Auth::check())
                    <a href="#" class="expand dropdown-toggle login-success-top dotted-line-1" data-toggle="dropdown"
                        aria-expanded="false"><i class="icon icon-user" aria-hidden="true"></i>
                        {{Auth::user()->full_name}}</a>
                    <a href="#" class="btn-logout hidden-md hidden-lg"><i
                            class=" hidden-xs hidden-sm icon icon-sign-out" aria-hidden="true"></i> Đăng xuất</a>
                    @else
                    <a href="dang-nhap" class="btn-register"><i class="icon icon-user" aria-hidden="true"></i> Đăng
                        nhập</a>
                    <span class="hidden-xs hidden-sm">|</span>
                    <a href="dang-ky" class="btn-register">Đăng ký</a>
                    @endif
                    <div class="hidden-xs hidden-sm sub dropdown-menu sub-menu-user">
                        <ul class="sub-menu-user">
                            @if(Auth::check())
                            <li>
                                <a href="info">Tài khoản</a>
                            </li>
                            <li>
                                <a href="posts">Viết bài</a>
                            </li>
                            <li>
                                <a href="my-posts">Bài viết</a>
                            </li>
                            <li>
                                <a href="messages">Tin nhắn</a>
                            </li>
                            <li>
                                <a href="notifice">Thông báo</a>
                            </li>
                            <li>
                                <a href="dang-xuat" class="btn-logout"><i class="icon icon-sign-out"
                                        aria-hidden="true"></i>
                                    Log out</a>
                            </li>
                            @else
                            <li class="login-ct">
                                <a href="dang-nhap" class="btn-login">Đăng nhập</a>
                                <p>or</p>
                                <a href="dang-ky-nhanh" class="btn-login">Đăng ký nhanh</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="left" hidden>
            <nav class="menu-main">
                <ul>
                    <li class="nav-item show">
                        <a class="chevron right" href="javascript:void(0)"><i class="icon icon-wholesale"></i> Chú mèo
                            con</a>
                        <nav class="navbar hidden-md hidden-lg menu-media">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="dropdown-item" href="truyen-moi">Truyện mới</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Cổ tích</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="co-tich-viet-nam">Cổ tích Việt Nam</a>
                                        <a class="dropdown-item" href="co-tich-nhat-ban">Cổ tích Nhật Bản</a>
                                        <a class="dropdown-item" href="truyen-co-grimms">Truyện cổ Grimms</a>
                                        <a class="dropdown-item" href="than-thoai-hi-lap">Thần thoại Hi Lạp</a>
                                    </div>
                                </li>

                                <!-- <li class="nav-item">
                                    <a class="dropdown-item" href="mototube.html">Cổ tích Nhật Bản</a>
                                </li>
																<li class="nav-item">
                                    <a class="dropdown-item" href="mototube.html">Truyện cổ Grimm</a>
                                </li>
																<li class="nav-item">
                                    <a class="dropdown-item" href="mototube.html">Thần thoại Hi Lạp</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="dropdown-item" href="ca-dao-tuc-ngu">Ca dao - Tục ngữ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="loi-hay-y-dep">Lời hay ý đẹp</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="truyen-cuoi">Truyện cười</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="gop-y">Góp ý</a>
                                </li>

                            </ul>
                        </nav>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div id="main">
{{Auth::user()}}
    <header>
        <div class="header_middle">
            <div class="container header">
                <div class="search">
                    <button type="submit" class="hidden-md hidden-lg btn-search-mobile"><i
                            class="icon icon-search"></i></button>
                    <form class="search-form">
                        <div class="hidden-md hidden-lg header-search">
                            <a class="chevron left btn-back " href="#">Back</a>
                            <h3>Search</h3>
                        </div>
                        <div class="txt-search-top"><input type="text" placeholder="Enter Keyword"><i
                                class="icon icon-search"></i></div>
                        <div class="hidden-md hidden-lg suggestion">
                            <label>Recent search list</label>
                            <div class="recent-list">
                                <a href="detail.html">Parts & Gear</a>
                                <a href="detail.html">Columns</a>
                                <a href="detail.html">Motorcycle Review</a>
                                <a href="detail.html">Asia</a>
                                <a href="detail.html">Worldwide</a>
                                <a href="detail.html">Triumth</a>
                                <a href="detail.html">Custom Motorcycle</a>
                                <a href="detail.html">Honda cb250</a>
                                <a href="detail.html">Parts</a>
                                <a href="detail.html">News</a>
                            </div>
                        </div>
                    </form>
                </div>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>
                <span class="btn-navmenu" onclick="openNav()">&#9776;</span>
                <a class="logo" href="index"><img src="img/img-logo.png" alt="Logo webike"></a>
            </div>
            <div class="media container menu_second">
                <nav class="media-body">
                    <ul>
                        <li><a href="truyen-moi">Truyện mới</a></li>
                        <li class="dropdown">
                            <a class="nav-link" href="">Cổ tích</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="chevron right" href="co-tich-viet-nam">Cổ tích Việt Nam</a></li>
                                    <li><a class="chevron right" href="co-tich-nhat-ban">Cổ tích Nhật Bản</a></li>
                                    <li><a class="chevron right" href="truyen-co-grimms">Truyện cổ Grimms</a></li>
                                    <li><a class="chevron right" href="than-thoai-hi-lap">Thần thoại Hi Lạp</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li><a href="mototube.html">Cổ tích Việt Nam</a></li>
                        <li><a href="mototube.html">Cổ tích Nhật Bản</a></li>
                        <li><a href="mototube.html">Truyện cổ Grimm</a></li>
                        <li><a href="mototube.html">Thần thoại Hi Lạp</a></li> -->
                        <li><a href="ca-dao-tuc-ngu">Cao dao tục ngữ</a></li>
                        <li><a href="loi-hay-y-dep">Lời hay ý đẹp</a></li>
                        <li><a href="truyen-cuoi">Truyện cười</a></li>
                        <li><a href="gop-y">Góp ý</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--End Header-->
    @endsection