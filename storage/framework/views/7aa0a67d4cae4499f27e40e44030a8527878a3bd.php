<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
<script src="http://127.0.0.1:8000/userfiles/cache/apijs_combined/api.combined.828860973.admin_2282622326.1.3.0.js"></script>
<link rel="stylesheet" href="http://127.0.0.1:8000/userfiles/modules/microweber/default.css" type="text/css" /><link rel="stylesheet" id="admin-main-css-style" href="http://127.0.0.1:8000/userfiles/modules/microweber/api/libs/mw-ui/grunt/plugins/ui/css/main_with_mw.css" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex">
    <script>
        mwAdmin = true;
        admin_url = 'http://127.0.0.1:8000/admin/';
    </script>

    <script type="text/javascript">
        mw.lib.require('jqueryui');
        mw.require("http://127.0.0.1:8000/userfiles/modules/microweber/api/libs/jquery_slimscroll/jquery.slimscroll.min.js");
        mw.require("liveadmin.js");
        mw.require("http://127.0.0.1:8000/userfiles/modules/microweber/css/wysiwyg.css");
        mw.require("http://127.0.0.1:8000/userfiles/modules/microweber/css/components.css");
        mw.require("wysiwyg.js");
        mw.require("url.js");
        mw.require("options.js");
        mw.require("events.js");
        mw.require("admin.js");
        mw.require("editor_externals.js");
        mw.require("keys.js");
        mw.require("css_parser.js");
        mw.require("custom_fields.js");
        mw.require("session.js");
        mw.require("content.js");
        mw.require("upgrades.js");
        mw.require("tree.js");

        mw.lib.require('mwui');
        mw.lib.require('mwui_init');
        mw.lib.require('flag_icons', true);
        mw.require("http://127.0.0.1:8000/userfiles/modules/microweber/css/admin.css", true);

                    </script>
            <script type="text/javascript">
            $(document).ready(function () {
                $('.mw-lazy-load-module').reload_module();

                if (self === top) {
                    window.onhashchange = function () {
                        mw.cookie.set('back_to_admin', location.href);
                    }
                    mw.cookie.set('back_to_admin', location.href);
                }

                mw.$("#mw-quick-content,#mw_edit_pages_content,#mw-admin-content").click(function () {
                    if (mw.helpinfo != undefined) {
                        mw.cookie.set('helpinfo', false, 4380);
                        $(".helpinfo_helper").fadeOut();
                    }
                });
            });
            // mw.require("http://127.0.0.1:8000/userfiles/modules/microweber/css/ui.css");
            mw.require("fonts.js");


        </script>
        

    <!-- Alpine v3 -->
    <script src="http://127.0.0.1:8000/userfiles/cache/livewire/1.3.0/livewire/livewire.js" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'Lsg6hscGLTkDJ08vd472rYuG6Dc2dH1HSf1pfHnN';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
    <style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes  livewireautofill { from {} }</style>


    <script defer src="http://127.0.0.1:8000/userfiles/modules/microweber/api/libs/alpine/alpine.min.js"></script>

</head>




<body class="is_admin loading view-modules action-profile">

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-modal')->html();
} elseif ($_instance->childHasBeenRendered('3Tt8Jcu')) {
    $componentId = $_instance->getRenderedChildComponentId('3Tt8Jcu');
    $componentTag = $_instance->getRenderedChildComponentTagName('3Tt8Jcu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3Tt8Jcu');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('3Tt8Jcu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>





<script>
    $(document).ready(function () {
        $(".mw-admin-mobile-admin-sidebar-toggle").on('click', function () {
            $("#main-bar").toggleClass('mobile-active')
        })
        $("body").on('click', function (e) {
            if (!mw.tools.hasAnyOfClassesOnNodeOrParent(e.target, ['mw-admin-mobile-admin-sidebar-toggle'])) {
                $("#main-bar").removeClass('mobile-active')
            }

        })
    })


    function mw_admin_add_order_popup(ord_id) {
        var contentHolder = document.createElement('div');
        contentHolder.style.padding = '25px';
        var dlg = mw.dialog({
            content: contentHolder,
            title: !!ord_id ? 'Edit order' : 'Add order',
            width: 900
        });
        mw.spinner({element: contentHolder, size: 32})
        mw.load_module('shop/orders/admin/add_order', contentHolder, function (){
            contentHolder.style.padding = '0';
            mw.spinner({element: contentHolder, size: 32}).remove()
            dlg.center()
        }, { order_id: ord_id });
    }

</script>







<div id="mw-admin-container">
    <header class="position-sticky sticky-top bg-white admin-navigation-colorscheme">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-1">

                <ul class="nav">
                    <li class="mx-1 mobile-toggle">
                        <button type="button" class="js-toggle-mobile-nav"><i class="mdi mdi-menu"></i></button>
                    </li>

                    <li class="mx-1 logo d-none d-lg-block">
                        <a href="http://127.0.0.1:8000/admin/view:dashboard">
                            <h5 class="text-white mr-3 d-flex align-items-center h-100">
                                                                    <img src="http://127.0.0.1:8000/userfiles/modules/microweber/api/libs/mw-ui/assets/img/logo.svg" class="logo svg" style="height: 40px;">
                                                            </h5>
                         </a>
                    </li>

                                            <li class="mx-1 d-none d-md-block">
                            <button type="button" class="btn btn-success btn-rounded btn-sm-only-icon " data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-plus"></i> <span class="d-none d-md-block">Add New</span>
                            </button>
                            <div class="dropdown-menu ">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://127.0.0.1:8000/admin/page/create"><span class="mai-page"></span> Page</a>
                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://127.0.0.1:8000/admin/post/create"><span class="mai-post"></span> Post</a>
                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://127.0.0.1:8000/admin/category/create"><span class="mai-category"></span> Category</a>
                                                                                                                                                                                                                                                                                                                                                                    <a class="dropdown-item" href="http://127.0.0.1:8000/admin/product/create"><span class="mai-product"></span> Product</a>
                                                                                                </div>
                        </li>
                    
                </ul>

                <div class="mw-lazy-load-module module" id="admin-header-notification" type="admin/header_notifications"></div>


                
                <ul class="nav">
                    
                        <li class="mx-1">
                            <a href="http://127.0.0.1:8000/?editmode=n" class="btn btn-outline-success btn-rounded btn-sm-only-icon go-live-edit-href-set go-live-edit-href-set-view">
                                <i class="mdi mdi-earth"></i><span class="d-none d-md-block ml-1">Website</span>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="http://127.0.0.1:8000/?editmode=y" class="btn btn-primary btn-rounded btn-sm-only-icon go-live-edit-href-set">
                                <i class="mdi mdi-eye-outline"></i><span class="d-none d-md-block ml-1">Live Edit</span>
                            </a>
                        </li>
                    
                                    </ul>
            </div>
        </div>
    </header>
            <script>
            $(document).ready(function () {
                if ($('body').find('.main-toolbar').length == 0) {
                    $('main').prepend('<div id="info-toolbar" type="admin/modules/info" history_back="true"></div>');
                    mw.reload_module('#info-toolbar');
                }
            })
        </script>
    
    <div class="main container my-3">
        <aside>
                                    
            
            
            <ul class="nav flex-column" id="mw-admin-main-navigation">
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/admin/" class="nav-link ">
                        <i class="mdi mdi-view-dashboard"></i> Dashboard                    </a>
                </li>

                
                                    <li class="nav-item dropdown-no-js ">
                        <a href="http://127.0.0.1:8000/admin/view:content" class="nav-link dropdown-toggle  ">
                            <i class="mdi mdi-earth"></i>
                            <span class="badge-holder">Website</span>
                        </a>

                        <div class="dropdown-menu">
                            <a href="http://127.0.0.1:8000/admin/view:content/action:pages" class="dropdown-item ">
                                Pages                                <span class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Add new page" data-href="http://127.0.0.1:8000/admin/page/create"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewbox="0 0 24 24"><path fill="white" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path></svg></span>
                            </a>

                            <a class="dropdown-item " href="http://127.0.0.1:8000/admin/view:content/action:posts">
                                Posts                                <span class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Add new post" data-href="http://127.0.0.1:8000/admin/post/create"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewbox="0 0 24 24"><path fill="white" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path></svg></span>
                            </a>

                            <a class="dropdown-item " href="http://127.0.0.1:8000/admin/view:content/action:categories">
                                Categories                                <span class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-href="http://127.0.0.1:8000/admin/category/create" data-bs-toggle="tooltip" title="Add new category"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewbox="0 0 24 24"><path fill="white" d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z"></path></svg></span>
                            </a>

                            <a class="dropdown-item " href="http://127.0.0.1:8000/admin/view:content/action:settings">
                                Settings                            </a>
                        </div>
                    </li>
                
                                    <li class="nav-item dropdown-no-js ">
                        <a href="http://127.0.0.1:8000/admin/view:shop" class="nav-link dropdown-toggle ">
                            <i class="mdi mdi-shopping"></i>
                            <span class="badge-holder">Shop</span>
                        </a>
                        <div class="dropdown-menu">
                                                            <a href="http://127.0.0.1:8000/admin/view:shop/action:products" class="dropdown-item ">
                                    Products                                    <span data-href="http://127.0.0.1:8000/admin/product/create" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Add new product"><i class="mdi mdi-plus"></i></span>
                                </a>
                                
                                                            <a href="http://127.0.0.1:8000/admin/order" class="dropdown-item ">
                                    Orders                                                                        <span data-href="javascript:mw_admin_add_order_popup()" class="btn btn-success btn-rounded btn-icon btn-sm add-new" data-bs-toggle="tooltip" title="Add order"><i class="mdi mdi-plus"></i></span>
                                </a>
                            
                                                        <a href="http://127.0.0.1:8000/admin/customers" class="dropdown-item ">
                                Clients                            </a>

                                                        
                            
                            <a href="http://127.0.0.1:8000/admin/view:shop/action:options" class="dropdown-item ">
                                Settings                            </a>
                        </div>
                    </li>
                
                                    <li class="nav-item">
                                                <a href="http://127.0.0.1:8000/admin/view:modules" class="nav-link "><i class="mdi mdi-view-grid-plus"></i> Modules </a>
                    </li>
                
                                    
                        
                        <li class="nav-item">
                            <a href="http://127.0.0.1:8000/admin/view:packages" class="nav-link ">
                                <i class="mdi mdi-fruit-cherries"></i> Marketplace                                                            </a>
                        </li>
                                    
                <li class="nav-item dropdown">
                    <a class="nav-link  " href="http://127.0.0.1:8000/admin/view:settings#option_group=all">
                        <i class="mdi mdi-cog"></i>
                        <span class="badge-holder">Settings</span>
                    </a>

                </li>





                
                                <li class="nav-item dropdown active">
                    <a class="nav-link active" href="http://127.0.0.1:8000/admin/view:modules/load_module:users/action:profile">
                        <i class="mdi mdi-account-multiple"></i> Users                    </a>

                                                                        <!--                            <a class="dropdown-item" href="javascript:;" onmousedown="mw.contactForm();"><strong>--><!--</strong></a>-->
                                                                <!--                    <a href="--><!--?editmode=y" class="go-live-edit-href-set dropdown-item">--><!--</a>-->
                </li>

                <li class="nav-item"><a href="http://127.0.0.1:8000/logout" class="nav-link"><i class="mdi mdi-power"></i> Log out</a></li>



              

                <div class="mt-5">
                    




<div class="form-group text-center">
     <div class="plain-language-selector tip" data-tip="Admin language">
        <select name="lang" id="lang_selector_admin_footer" data-width="100%" data-title="English">
                            <option value="en_US"
                     selected="selected" >
                    English                </option>
                            <option value="af_ZA"
                    >
                    Afrikaans                </option>
                            <option value="sq_AL"
                    >
                    Albania                </option>
                            <option value="ar_SA"
                    >
                    Arab                </option>
                            <option value="id_ID"
                    >
                    Bahasa Indonesia                </option>
                            <option value="ms_MY"
                    >
                    Bahasa Melayu                </option>
                            <option value="da_DK"
                    >
                    Dansk                </option>
                            <option value="de_DE"
                    >
                    Deutsch                </option>
                            <option value="es_ES"
                    >
                    Español                </option>
                            <option value="fr_FR"
                    >
                    Français                </option>
                            <option value="it_IT"
                    >
                    Italiano                </option>
                            <option value="ja_JP"
                    >
                    Jepang                </option>
                            <option value="hr_HR"
                    >
                    Kroasia                </option>
                            <option value="hu_HU"
                    >
                    Magyar                </option>
                            <option value="nl_NL"
                    >
                    Nederlands                </option>
                            <option value="no_NO"
                    >
                    Norwegia                </option>
                            <option value="pl_PL"
                    >
                    Polski                </option>
                            <option value="ro_RO"
                    >
                    Română                </option>
                            <option value="sk_SK"
                    >
                    Slovenčina                </option>
                            <option value="sl_SI"
                    >
                    Slovenščina                </option>
                            <option value="fi_FI"
                    >
                    Suomi                </option>
                            <option value="sv_SE"
                    >
                    Svenska                </option>
                            <option value="th_TH"
                    >
                    Thai                </option>
                            <option value="tr_TR"
                    >
                    Türkçe                </option>
                            <option value="uk_UA"
                    >
                    Ukraina                </option>
                            <option value="vi_VN"
                    >
                    Vietnam                </option>
                            <option value="el_GR"
                    >
                    Yunani                </option>
                            <option value="zu_ZA"
                    >
                    Zulu                </option>
                            <option value="cs_CZ"
                    >
                    Čeština                </option>
                            <option value="ru_RU"
                    >
                    Русский                </option>
                            <option value="bg_BG"
                    >
                    български                </option>
                            <option value="he_IL"
                    >
                    עברית                </option>
                            <option value="hi_IN"
                    >
                    हिन्दी                </option>
                            <option value="zh_CN"
                    >
                    中文 (中国)                </option>
                            <option value="ko_KR"
                    >
                    한국어                </option>
                    </select>
    </div>
</div>
    <script>
        document.querySelector("#lang_selector_admin_footer").addEventListener("change", function () {
            mw.admin.language(this.value);
        });
    </script>
                </div>
            </ul>


            <script>

                var handleConfirmBeforeLeave = function (c) {
                    if (mw.askusertostay) {
                        mw.confirm(mw.lang("You have unsaved changes. Do you want to save them first") + '?',
                            function () {

                                c.call(undefined, true)
                            },
                            function (){
                                mw.askusertostay = false;
                                c.call(undefined, false)
                            });
                    } else {
                        c.call(undefined, false)
                    }
                };
                $(document).ready(function () {



                    mw.$('.go-live-edit-href-set').each(function () {
                        var el = $(this);

                        if(self !== top){
                            el.attr('target', '_parent');
                        }


                        var href = el.attr('href');

                        if (href.indexOf("editmode") === -1) {
                            href = href + ((href.indexOf('?') === -1 ? '?' : '&') + 'editmode:y');

                            el.attr('href', href);

                        }
                    }).on('mousedown touchstart', function (event){
                        var el = this;

                        if(event.which === 1 || event.type === 'touchstart') {
                            handleConfirmBeforeLeave(function (shouldSave){
                                if(shouldSave) {
                                    var edit_cont_form =  $('#quickform-edit-content');
                                    var edit_cont_form_is_disabled_btn =  $('#js-admin-save-content-main-btn').attr('disabled');
                                    var edit_cont_title =  $('#content-title-field').val();
                                    if (edit_cont_form.length /*&& mw.edit_content && edit_cont_title && !edit_cont_form_is_disabled_btn*/) {
                                        event.stopPropagation();
                                        event.preventDefault();
                                        mw.askusertostay = false;
                                        mw.edit_content.saving = false;
                                        if($(this).hasClass('go-live-edit-href-set-view')){
                                            mw.edit_content.handle_form_submit('n');
                                        } else {
                                            mw.edit_content.handle_form_submit('y');
                                        }
                                    }
                                } else {
                                    mw.askusertostay = false;
                                    location.href = el.getAttribute('href');

                                }
                            });
                        }

                    });
                });
            </script>
        </aside>


        
    <main class="module-users">

                                    
                <div class=' module module-users '   data-mw-title="Users" view="admin"   backend="true"   id="mw-main-module-backend"   data-type="users"   parent-module="users"   parent-module-id="mw-main-module-backend"  >
    <div class=' module module-admin-modules-info ' id='mw-main-module-backend-admin-modules-info'  history_back="true"   parent-module-id="mw-main-module-backend"   parent-module="users"   data-type="admin/modules/info"  ><script>

    $( document ).ready(function() {
        var el = $('.mw-modules-toolbar-back-button-holder').first();

        if(el){
            if(!el.is(":visible")){
            $('.mw-modules-toolbar-back-button-holder').show();
            }
        }
    })

</script>
<div class="position-relative">
    <div class="main-toolbar mw-modules-toolbar-back-button-holder" id="mw-modules-toolbar" style="display: none">
                    <a href="javascript:;" onClick="history.go(-1)" class="btn btn-link text-silver px-0"><i class="mdi mdi-chevron-left"></i> Back</a>
                    
            </div>
</div></div>

<div class=' module module-users-profile-my-profile-admin ' id='mw-main-module-backend-users-profile-my-profile-admin'  parent-module-id="mw-main-module-backend"   parent-module="users"   data-type="users/profile/my_profile_admin"  >
<div class="card style-1 bg-light mb-3">
    <div class="card-header">
        <h5>
            <i class="mdi mdi-account-multiple text-primary mr-3"></i> <strong>Users</strong>
        </h5>
    </div>

    <div class="card-body pt-3">
        <div class="row d-flex align-items-center justify-content-around">
            <div class="col-md-5 py-5">
                <h5 class="font-weight-bold">Manage your users</h5>
                <p>You are able to create and manage users, groups and roles.</p>
                <br/>

                <h6 class="font-weight-bold mb-1">Working with users</h6>
                <small class="text-muted d-block mb-2">Create and manage users</small>
                <a href="http://127.0.0.1:8000/admin/view:modules/load_module:users/edit-user:0" class="btn btn-primary btn-sm"><i class="mdi mdi-account-plus"></i>Add new user</a>
                <a href="http://127.0.0.1:8000/admin/user" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-account-cog"></i>Manage users</a>
                <br/>
                <br/>
                <br/>

                
            </div>

            <div class="col-md-5">
                <div class="text-center">
                    <div class="d-inline-block mb-1">
                        <div class="img-circle-holder img-absolute w-80">
                            <img src="http://127.0.0.1:8000/api/image-generate-tn-request/177?saved"/>
                        </div>
                    </div>

                    <small class="d-block text-muted">You are logged in as</small>
                    <span class="d-block text-outline-primary font-weight-bold"></span>
                    <small class="d-block text-dark">User</small>

                    <a
                        href="http://127.0.0.1:8000/admin/view:modules/load_module:users/edit-user:1"
                        class="btn btn-outline-primary btn-sm mt-2">Edit profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>        
        
        <div class="row copyright mt-3">
    <div class="col-12">
        <p class=" text-muted text-center small ">  <span class="mw-powered-by"><a href="https://microweber.org/" title="Website Builder">Website Builder</a> by <a href="https://microweber.org" target="_blank" title="Make a website">Microweber</a></span>   Version:  1.3.0 </p>
    </div>
</div>

    </main>


            </div>
            <!--  /.main.container -->
        </div>
        <!--  /#mw-admin-main-block -->





    </body>
</html>
<?php /**PATH D:\laragon\www\LARAVEL\microweber-master\storage\framework\views/87733c9419ee398f53f6a42a796ee87f33706c57.blade.php ENDPATH**/ ?>