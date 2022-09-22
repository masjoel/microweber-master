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




<body class="is_admin loading view- action-">

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-modal')->html();
} elseif ($_instance->childHasBeenRendered('JyZGbIQ')) {
    $componentId = $_instance->getRenderedChildComponentId('JyZGbIQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('JyZGbIQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JyZGbIQ');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('JyZGbIQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                
                                    <li class="nav-item dropdown-no-js active">
                        <a href="http://127.0.0.1:8000/admin/view:shop" class="nav-link dropdown-toggle active">
                            <i class="mdi mdi-shopping"></i>
                            <span class="badge-holder">Shop</span>
                        </a>
                        <div class="dropdown-menu">
                                                            <a href="http://127.0.0.1:8000/admin/view:shop/action:products" class="dropdown-item  active ">
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





                
                                <li class="nav-item dropdown ">
                    <a class="nav-link " href="http://127.0.0.1:8000/admin/view:modules/load_module:users/action:profile">
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


        
    <main class="module-">

                    <div class=' module module-content-edit ' id='module-content-edit'  content_id="15"   content_type="product"   data-type="content/edit"   parent-module="content/edit"   parent-module-id="module-content-edit"  >
<div class="mw-edit-content-item-admin">


          <script>
    $(document).ready(function () {
        if (window.thismodal && thismodal.resize) {
            thismodal.resize(991);
        }
    });
</script>

    <style>
    #admin-user-nav {
        display: none;
    }
</style>

    <script>
        $(document).ready(function () {
            $('.fade-window .btn-fullscreen').on('click', function () {
                $(this).toggleClass('hidden');
                $('.fade-window .btn-close').toggleClass('hidden');
                $('.fade-window').toggleClass('closed');

            });
            $('.fade-window .btn-close').on('click', function () {
                $(this).toggleClass('hidden');
                $('.fade-window .btn-fullscreen').toggleClass('hidden');
                $('.fade-window').toggleClass('closed');
            });


            $('.fade-window').on('scroll', function () {
                var otop = $('.mw-iframe-editor').offset().top;
                $('#mw-admin-content-iframe-editor iframe').contents().find('#mw-admin-text-editor')[otop <= 0 ? 'addClass' : 'removeClass']('scrolled').css({
                    top: otop <= 0 ? Math.abs(otop) : 0
                });
            })

        });
    </script>

<script>
    $(document).ready(function () {
        $('body > #mw-admin-container > .main').removeClass('show-sidebar-tree');
    });
</script>

<script>

    var contentChanged = function (state) {
     //   document.querySelector('.btn-save').disabled = !state;
        mw.askusertostay = state;
        document.querySelector('#content-title-field-row .card-header').classList[state ? 'add' : 'remove']('post-header-content-changed')
    }

    $(document).ready(function () {
        var all = $(window);
        var header = document.querySelector('#mw-admin-container header');
        var postHeader = mw.element(document.querySelector('#content-title-field-row .card-header'));
        all.push(document)
        all.on('scroll load resize', function () {
            var stop = $(this).scrollTop(),
                otop = $('.mw-iframe-editor').offset().top,
                tbheight = $('.admin-toolbar').outerHeight(),
                is = (stop + tbheight) >= otop;


            $('#mw-admin-content-iframe-editor iframe').contents().find('#mw-admin-text-editor')[is ? 'addClass' : 'removeClass']('scrolled').css({
                top: is ? Math.abs((stop + tbheight) - otop) : 0
            });
            var fixinheaderTime = null;
            if (stop > $(".admin-toolbar").height()) {

                $(".top-bar").addClass("fix-in-header").css('left', $('.window-holder').offset().left);
                fixinheaderTime = setTimeout(function () {
                    $(".top-bar").addClass("after-fix-in-header")
                    // $("#create-content-btn").hide()
                }, 10)
            }
            else {
                $(".top-bar").removeClass("fix-in-header after-fix-in-header");
                //$("#create-content-btn").show()
                clearTimeout(fixinheaderTime)

            }
            var isFixed = (stop > (postHeader.get(0).offsetHeight + (header ? header.offsetHeight : 0) + $(postHeader).offset().top));
            postHeader[ isFixed ? 'addClass' : 'removeClass' ]('fixed')
            postHeader.width( isFixed ? postHeader.parent().width() : 'auto' )


        });

        $('[name]').on('change input', function (){
            contentChanged(true)
        })





    });
</script>


<div class="in-window">

    
    <form method="post" class="mw_admin_edit_content_form  " action="http://127.0.0.1:8000/api/product/15" id="quickform-edit-content" autocomplete="off">

                    <input name="_method" type="hidden" value="PATCH">
        
        <input type="hidden" name="id" id="mw-content-id-value" value="15">
        <input type="hidden" name="subtype" id="mw-content-subtype" value="product">
        <input type="hidden" name="subtype_value" id="mw-content-subtype-value-1830454898" value="">
        <input type="hidden" name="content_type" id="mw-content-type mw-content-type-value-1830454898" value="product">
        <input type="hidden" name="parent" id="mw-parent-page-value-1830454898" value="8" class="">
        <input type="hidden" name="layout_file" id="mw-layout-file-value-1830454898" value="inherit">
        <input type="hidden" name="active_site_template" id="mw-active-template-value-1830454898" value="">

        <script type="text/javascript">
        $(document).ready(function () {
           $('.mw-edit-page-layout-selector').change(function() {
              if ($(this).val() == 'layouts__blog.php') {
                  $('#mw-content-subtype').val('dynamic');
                  $('#mw-content-type').val('page');
              }
              if ($(this).val() == 'layouts__shop.php') {
                    $('#mw-content-subtype').val('dynamic');
                    $('#mw-content-type').val('page');
                    $('#is_shop').attr('checked','checked');
                    $('#is_shop').trigger('change');
              }
           });
        });
        </script>

        <div class="row">
            <div class="col-md-8 manage-content-body">
                <div class="content-title-field-row card style-1 mb-3 border-0" id="content-title-field-row">
                    <div class="card-header-fix">
                        <div class="card-header">
                                                        <h5>
<i class="mdi mdi-shopping text-primary mr-3"></i> <strong>Editing product</strong>
</h5>


                            <div id="content-title-field-buttons">


                               
                                                                            <a title="Live Edit" href="http://127.0.0.1:8000/camera?editmode=y" class="btn   btn-outline-primary  btn-sm  btn-sm-only-icon mw-admin-go-live-now-btn mx-1">
                                            <span>Live Edit</span>
                                        </a>
                                    
                                
                                <button id="js-admin-save-content-main-btn" type="submit" class="btn btn-sm btn-success btn-save js-bottom-save" form="quickform-edit-content"><span>Save</span></button>
                            </div>
                        </div>
                    </div>

                                            <div class="card-body pt-3">

                            <div class="form-group" id="slug-field-holder">
                                <label class="control-label">Product title</label>

                                
                                <input type="text" class="form-control" name="title" value="Camera" id="content-title-field" onkeyup="slugFromTitle();" autocomplete="">
                                                                <div class="mw-admin-post-slug">
                                    <i class="mdi mdi-link mdi-20px lh-1_3 mr-1 text-silver float-left" title="Copy link" onclick="copy_url_of_page();" style="cursor: copy"></i>
                                    <span class="mw-admin-post-slug-text">
                                            
                                        <span class="text-silver" id="slug-base-url">http://127.0.0.1:8000/</span>
                                        <span class="contenteditable js-slug-base-url" data-bs-toggle="tooltip" data-title="edit" data-placement="right" contenteditable="true">camera</span>
                                    </span>
                                  </div>

                                <div class="d-none">
                                    <input autocomplete="off" name="url" id="edit-content-url" class="js-slug-base-url-changed edit-post-slug" type="text" value="camera">

                                    <script>
                                        var slugEdited = !(mw.url.windowHashParam('action') || '').includes('new:');
                                        slugFromTitle = function () {
                                            if (slugEdited === false) {
                                                var slug = mw.slug.create($('#content-title-field').val());
                                                $('.js-slug-base-url-changed').val(slug);
                                                $('.js-slug-base-url').text(slug);
                                            }
                                        }

                                        $('.js-slug-base-url').on('paste', function (e) {
                                            e.preventDefault();
                                            var text = (e.originalEvent || e).clipboardData.getData('text/plain');
                                            document.execCommand("insertHTML", false, text);
                                            if(this.innerHTML.length > mw.slug.max) {
                                                this.innerHTML = this.innerHTML.substring(0, mw.slug.max)
                                            }
                                            contentChanged(true)
                                            slugEdited = true;
                                        })
                                        .on('keydown', function (e) {
                                            var sel = getSelection();
                                            var fn = mw.wysiwyg.validateCommonAncestorContainer(sel.focusNode);
                                            var collapsedIn = fn === this && sel.isCollapsed;
                                            slugEdited = true;
                                            contentChanged(true)
                                            if (mw.event.is.enter(e)  ) {
                                                e.preventDefault();
                                            }
                                            if (!mw.event.is.delete(e) && !mw.event.is.backSpace(e) && !e.ctrlKey) {
                                                if ($('.js-slug-base-url').html().length >= mw.slug.max && collapsedIn) {
                                                    e.preventDefault();
                                                }
                                            }
                                        })
                                        $('body').on('blur', '.js-slug-base-url', function () {
                                            var slug = mw.slug.create($(this).text());
                                            $('.js-slug-base-url-changed').val(slug);
                                            $('.js-slug-base-url').text(slug);
                                        });


                                         copy_url_of_page =function(){
                                            var site_url =  $('#slug-base-url').html();
                                            var slug_base_url =  $('.js-slug-base-url').html();
                                            var url = site_url + slug_base_url ;
                                            mw.tools.copy(url);
                                        }

                                    </script>
                                </div>

                                                            </div>


                            


                                                                                    
                            <div id="mw-edit-page-editor-holder">
                                                                                                                                                                                                                                            <div class="form-group">
                                            
                                                <label class="control-label" title="Content Body">Description</label>
                                                <script>

                    mw.require('editor.js');
                    $(mwd).ready(function () {
                        mweditor82681663773500 = mw.Editor({
                        selector: document.getElementById('82681663773500'),
                        mode: 'div',
                        smallEditor: false,
                        minHeight: 250,
                        inputLanguage: 'en_US',
                        maxHeight: '70vh',
                        controls: [
                                [
                                    'undoRedo', '|', 'image', '|',
                                {
                                    group: {
                                    controller: 'bold',
                                        controls: ['italic', 'underline', 'strikeThrough']
                                    }
                                },
                                '|',
                                {
                                    group: {
                                    icon: 'mdi mdi-format-align-left',
                                        controls: ['align']
                                    }
                                },
                                '|', 'format',
                                {
                                    group: {
                                    icon: 'mdi mdi-format-list-bulleted-square',
                                        controls: ['ul', 'ol']
                                    }
                                },
                                '|', 'link', 'unlink', 'wordPaste', 'table', 'removeFormat', 'editSource'
                            ],
                        ]
                  });
                });
                </script><textarea class="form-control" name="content_body" rows="10" cols="50" autocomplete="" id="82681663773500">How to write product descriptions that sell One of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.&lt;br&gt;&lt;br&gt;Think like a consumer Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing features.</textarea>                                                                                </div>
                                                                                                </div>

                            <div>
                                <script>
                                    $(document).ready(function () {
                                        setTimeout(function () {
                                             if (typeof(mw.adminPagesTree) != 'undefined') {
                                                mw.adminPagesTree.select({
                                                    id:15,
                                                    type: 'page'
                                                })
                                            }
                                            contentChanged(false)
                                        }, 100);
                                    });
                                </script>

                                                                
                                
                                                                                            </div>
                        </div>
                                    </div>

                <div class="admin-manage-content-wrap">

                                            <div id="mw-admin-edit-content-main-area"></div>
                    
                    
                    <div class="mw-admin-edit-content-holder">
                        
<script>
    mw.lib.require('colorpicker');
</script>


<div id="settings-tabs">
    <div class="card style-1 mb-3 images">
        <div class="card-header no-border" id="post-media-card-header">
            <h6><strong>Pictures</strong></h6>
            <div class="post-media-type-holder">
                <div class=' module module-pictures-admin-upload-pic-source-selector '   id="edit-post-gallery-main-source-selector-holder"   parent-module-id="module-content-edit"   parent-module="content/edit"   data-type="pictures/admin_upload_pic_source_selector"  ><div id="mw-admin-post-media-type-select"></div>
</div>

            </div>
        </div>
        <div class="card-body pt-3">
            <div class='pictures-admin-content-type-product module module-pictures-admin '   data-mw-title="Picture Gallery" id="edit-post-gallery-main"   for="content"   content_type="product"   for-id="15"   parent-module-id="module-content-edit"   parent-module="content/edit"   data-type="pictures/admin"  >    <script type="text/javascript">
    mw.require('http://127.0.0.1:8000/userfiles/modules/pictures/pictures.js', true);
</script>

<style>
    .image-settings {
        color: #ffffff;
        font-size: 20px;
        cursor: pointer;
        position: absolute;
        top: 0px;
        right: 3px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        opacity: .7;
        z-index: 5;
        text-shadow: 0 0 2px rgba(0, 0, 0, .5);
    }


    .image-settings.settings-img {
        margin-right: 23px
    }

    .admin-thumb-item:hover .image-settings {
        opacity: 1;
    }

    .admin-thumb-item:hover .image-settings.remove-image {
        color: #ff4f52;
    }
</style>


<script>
    mw.require("files.js");
</script>

<script>
    after_upld = function (a, e, f, id, module_id) {
        if (e !== 'done') {
            var data = {};
            data['for'] = f;
            data.src = a;
            data.media_type = 'picture';

            if (!id) {
                data.for_id = 0;
            } else {
                data.for_id = (id);

            }
            mw.module_pictures.after_upload(data);
        }
        if (e === 'done') {
            setTimeout(function () {
                if (typeof load_iframe_editor === 'function') {
                    load_iframe_editor();
                }
                // mw.reload_module('#' + module_id);
                mw.reload_module_everywhere('pictures/admin_backend_sortable_pics_list');

                //


                mw.reload_module_parent('pictures');
                if (self !== top && typeof parent.mw === 'object') {
                    mw.parent().reload_module('pictures');
                    mw.reload_module_parent("pictures/admin");
                    if (self !== top && typeof parent.mw === 'object') {
                        mw.parent().reload_module_everywhere('posts');
                        mw.parent().reload_module_everywhere('shop/products');
                        mw.parent().reload_module_everywhere('content', function () {
                            mw.reload_module_everywhere('#' + module_id);
                            mw.parent().reload_module_everywhere('pictures');
                        });
                    }
                }

                $('.admin-thumb-item-loading').remove();
                $('[data-type="pictures/admin"]').trigger('change')


            }, 1300);
        }
    }
</script>

<script>
    mw_admin_pictures_upload_browse_existing = function () {
        // var dialog = mw.top().dialogIframe({
        var dialog = mw.top().dialogIframe({
            url: 'http://127.0.0.1:8000/module/?type=files/admin&live_edit=true&remeber_path=true&ui=basic&start_path=media_host_base&from_admin=true&file_types=images&id=mw_admin_pictures_upload_browse_existing_modaledit-post-gallery-main&from_url=http://127.0.0.1:8000/',
            title: "Browse pictures",
            id: 'mw_admin_pictures_upload_browse_existing_modaledit-post-gallery-main',
            height: 'auto',
            autoHeight: true
        });

        $(dialog.iframe).on('load', function () {
            this.contentWindow.mw.on.hashParam('select-file', function (pval) {
                after_upld(pval, 'save', 'content', '15', 'edit-post-gallery-main');

                after_upld(pval, 'done', 'content', '15', 'edit-post-gallery-main');
                mw.notification.success('The image is added to the gallery');

                dialog.remove();
            })
        })
    };

    var getMediaImage = function () {
        var dialog = mw.top().tools.moduleFrame('pictures/media_library');
        dialog.title('Media library');
        $(dialog.iframe).on('load', function () {
            this.contentWindow.mw.on.hashParam('select-file', function (pval) {
                after_upld(pval, 'save', 'content', '15', 'edit-post-gallery-main');
                after_upld(pval, 'done', 'content', '15', 'edit-post-gallery-main');
                mw.notification.success('The image is added to the gallery');
                dialog.remove();
            });
        });
    };


    var toggleAll = function () {
        var all = mw.$(".admin-thumb-item input[type='checkbox']");

        if (all.length === all.filter(':checked').length) {
            all.each(function () {
                this.checked = false
            })
        } else {
            all.each(function () {
                this.checked = true
            })
        }

        doselect()
    }

</script>


<input name="thumbnail" type="hidden" value="">

<span class="post-media-select-all-pictures tip" data-tip="Select all" data-tipposition="top-left" onclick="toggleAll()">
    <span>0</span>
    picture selected
</span>

<div class="select_actions_holder">
    <div class="select_actions">
        <a href="javascript:;" class="btn btn-sm btn-link text-danger" onclick="deleteSelected()">
            <span>Delete selected</span>
        </a>
        <span>/</span>
        <a href="javascript:;" class="btn btn-sm btn-link" onclick="downloadSelected('none')">
            <span>Download selected</span>
        </a>
    </div>
</div>


<script>
    window.imageOptions = {};
</script>

<div class="pull-right">
    <div class=' module module-pictures-admin-upload-pic-source-selector '   id="edit-post-gallery-main-source-selector-holder"   parent-module-id="edit-post-gallery-main"   parent-module="pictures/admin"   data-type="pictures/admin_upload_pic_source_selector"  ><div id="mw-admin-post-media-type-select"></div>
</div>
</div>



<div class="left pt-3" style="clear:both" id="admin-thumbs-holder-sort-632b2b3cf0dd6">

    <div class="relative post-thumb-uploader m-t-10" id="backend_image_uploader_632b2b3cf0dd6"></div>



    <div class="admin-thumbs-holder">
                    <div class=' module module-pictures-admin-backend-sortable-pics-list ' id='edit-post-gallery-main-pictures-admin-backend-sortable-pics-list'  for="content"   for_id="15"   parent-module-id="edit-post-gallery-main"   parent-module="pictures/admin"   data-type="pictures/admin_backend_sortable_pics_list"  >
<script>

    var saveOptions = function (id, data) {

        mw.module_pictures.save_options(id, data, function () {
            mw.reload_module('#edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
            mw.reload_module('pictures/admin')
            mw.top().reload_module('pictures')
        });
    }

    imageConfigDialog = function (id) {
        var el = mw.$('#admin-thumb-item-' + id + ' .image-options');
        var dialog =  mw.top().dialog({
            overlay: true,
            content: el.html(),
            template: 'default',
            height: 'auto',

            title: 'Image Settings',
            onResult: function (id) {
                var data = {};
                var root = $(dialog.dialogContainer);
                root.find('input').each(function () {
                    data[this.name] = this.value;
                })
                saveOptions(id, data);
                this.remove()
            }
        })
    }


    deleteSelected = function () {
        mw.module_pictures.del(doselect());
    }
    downloadSelected = function () {
        mw.$(".admin-thumb-item .mw-ui-check input:checked").each(function () {
            var a = $("<a>")
                .attr("href", $(this).dataset('url'))
                .attr("download", $(this).dataset('url'))
                .appendTo("body");

            a[0].click();
            a.remove();
        });

    }
    doselect = function () {
        var final = [];
        var all = mw.$(".admin-thumb-item:visible")

        all.each(function () {
            var check = $('.mw-ui-check input:checked', this);
            if (check.length) {
                final.push(check[0].value);
                $(this).addClass('checked')
            } else {
                $(this).removeClass('checked');

            }
        });

        var allPicker = mw.$('.post-media-select-all-pictures');

        allPicker[final.length !== 0 ? 'addClass' : 'removeClass']('active').find('span').html(final.length);
        allPicker[final.length === all.length ? 'addClass' : 'removeClass']('all-selected');
        mw.$('#post-media-card-header')[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions")[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions_holder").stop()[final.length === 0 ? 'hide' : 'show']();
        return final;
    }
    editImageTags = function (event) {
        var parent = null;
        mw.tools.foreachParents(event.target, function (loop) {

            if (mw.tools.hasClass(this, 'admin-thumb-item')) {
                parent = this;
                mw.tools.stopLoop(loop);
            }

        });
        if (parent !== null) {
            $(".image-tags", parent).show()
        }

    }



    selectItems = function (val) {
        if (val === 'all') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = true;
            })
        }
        else if (val === 'none') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = false;
            })
        }
        doselect()
    }


    $(document).ready(function () {

        var $root = mw.$('#admin-thumbs-holder-sort-pic-sorter-632b2b3d18f26');

        mw.require('filepicker.js');

        mw._postsImageUploader = new mw.filePicker({
            element: '#backend_image_uploader_pic-sorter-632b2b3d18f26',
            nav: 'dropdown',
            footer: false,
            boxed: false,
            dropDownTargetMode: 'dialog',
            label: mw.lang('Media'),
            _frameMaxHeight: true,
            hideHeader: true,
            uploaderType: "big",
            multiple: true,
            accept: 'image/*',
        })

        mw._postsImageUploader._thumbpreload = function () {
            var el = mw.$('<div class="admin-thumb-item admin-thumb-item-loading"><span class="mw-post-media-img" style=""></span></div>');
            mw.$($root).find('.admin-thumb-item-uploader-holder').before(el);

            mw.spinner({
                element: el,
                size: 32,
                color: '#4592ff'
            });

        }

        $(mw._postsImageUploader).on('FileAdded', function (e, file) {
            mw._postsImageUploader._thumbpreload()
        });
        $(mw._postsImageUploader).on('FileUploaded FileUploadError', function (e, file) {
            mw.$('.admin-thumb-item-loading:last', $root).remove();
            mw.module_pictures.after_change();
        });
        $(mw._postsImageUploader).on('Result', function (e, res) {
            var url = res && res.src ? res.src : res;
            after_upld(url, 'Result', 'content', '15', 'edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
            after_upld(url, 'done');
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        });

        var thumbs = mw.$('.admin-thumb-item', $root);

        if (thumbs.length) {
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        }


        $(".image-tag-view").remove();
        $(".image-tags").each(function () {
            $(".mw-post-media-img", mw.tools.firstParentWithClass(this, 'admin-thumb-item'))
                .append('<span class="image-tag-view tip" onclick="editImageTags(event)" data-tip="Tags: ' + this.value + '" ><span class="mw-icon-app-pricetag"></span></span>');
            $(this).on('change', function () {
                $(".image-tag-view", mw.tools.firstParentWithClass(this, 'admin-thumb-item')).attr('data-tip', 'Tags: ' + this.value);
            });

        });

        doselect()
    });
</script>

<style>
    .admin-thumb-item-uploader-holder {
        display: block;
        position: relative;
        float: left;
        width: 18%;
        height: 110px;
        margin: 0 1% 1%;
        overflow: hidden;
    }

    .admin-thumb-item-uploader-holder:hover .dropable-zone.small-zone button {
        text-decoration: underline;
    }

    .admin-thumb-item-uploader-holder:hover .dropable-zone.small-zone {
        border-color: #4592ff;
        background-color: rgba(69, 146, 255, 0.1);
    }
</style>


<div class="mw-drop-zone" id="admin-thumbs-drop-zone-pic-sorter-632b2b3d18f26" style="display: none">Drop here</div>


<script>
    $(document).ready(function () {
        mw.module_pictures.init('#admin-thumbs-holder-sort-pic-sorter-632b2b3d18f26');

        var uploadHolder = mw.$('#admin-thumb-item-uploaderpic-sorter-632b2b3d18f26');
        mw.require('uploader.js');

        mw._postsImageUploaderSmall = mw.upload({
            element: uploadHolder,
            accept: 'image/*',
            multiple: true,
            dropZone: '#admin-thumbs-drop-zone-pic-sorter-632b2b3d18f26',
            on: {
                fileUploaded: function (xhr) {
                    mw.module_pictures.after_change();
                },
                fileUploadError: function (xhr) {
                    mw.$('.admin-thumb-item-loading:last').remove();
                    mw.module_pictures.after_change();
                }
            }
        });
        mw._postsImageUploaderSmall.$holder = uploadHolder.parent();
        $(mw._postsImageUploaderSmall).on('FileAdded', function (e, res) {
            mw._postsImageUploader._thumbpreload()
        })

        $(mw._postsImageUploaderSmall).on('FileUploaded', function (e, res) {
            var url = res.src ? res.src : res;
            if (window.after_upld) {
                after_upld(url, 'Result', 'content', '15', 'edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
                after_upld(url, 'done');
                mw._postsImageUploader.hide()
            }
        });

        if (!mw.$('#admin-thumbs-holder-sort-pic-sorter-632b2b3d18f26 .admin-thumb-item').length) {
            uploadHolder.hide();
            if (mw._postsImageUploader) {
                mw._postsImageUploader.show();
            }

        }

        var dropdownData = [
            {value: 'url', title: 'Add image from URL' },
            {value: 'server', title: 'Browse uploaded' },
            {value: 'library', title: 'Choose from Unsplash' },
            {value: 'file', title: 'Upload file' },
        ];

        var dropdownConfig = {
            placeholder: 'Add media from',
            data: dropdownData,
            element: '#mw-admin-post-media-type-select',
            size: 'small',
            color: 'default',
            showSelected: false
        }
        var slct = mw.select(dropdownConfig)
        slct.on('change', function (value){
            var val = value[0].value;
            if(val !== 'file') {
                mw._postsImageUploader.displayControllerByType(val)
            }
            slct.displayValue('Add media from')
        });
        slct.on('optionsReady', function (options) {
            var file = options.find(function (itm){
                return itm.$value.value === 'file';
            });
            if(file) {
                var up = mw.upload({
                    element: file,
                    accept: 'image/*',
                    multiple: true
                });
                $(up).on('FileAdded', function (e, res) {
                    mw._postsImageUploader._thumbpreload()
                })
                $(up).on('FileUploaded', function (e, res) {
                    var url = res.src ? res.src : res;
                    if (window.after_upld) {
                        after_upld(url, 'Result', 'content', '15', 'edit-post-gallery-main-pictures-admin-backend-sortable-pics-list');
                        after_upld(url, 'done');
                        mw._postsImageUploader.hide();
                    }
                });
            }
        });

        var dragTimer;
        $(document).on('dragover', function (e) {
            var dt = e.originalEvent.dataTransfer;
            if (dt.types && (dt.types.indexOf ? dt.types.indexOf('Files') !== -1 : dt.types.contains('Files'))) {
                $("#admin-thumbs-drop-zone-pic-sorter-632b2b3d18f26").show();
                clearTimeout(dragTimer);
            }
        });
        $(document).on('dragleave', function (e) {
            dragTimer = setTimeout(function () {
                $("#admin-thumbs-drop-zone-pic-sorter-632b2b3d18f26").hide();
            }, 25);
        });

        $("#admin-thumbs-drop-zone-pic-sorter-632b2b3d18f26").on('drop', function () {
            $("#admin-thumbs-drop-zone-pic-sorter-632b2b3d18f26").hide();
        });

        setInterval(function () {
            $('.admin-thumb-item, .admin-thumb-item-placeholder, .admin-thumb-item-uploader-holder, .mw-filepicker-desktop-type-small .mw-uploader-type-holder').each(function () {
                $(this).height($(this).width())
            })
        }, 78)


    });


</script>

<div class="admin-thumbs-holder" id="admin-thumbs-holder-sort-pic-sorter-632b2b3d18f26">
                                <div class="admin-thumb-item admin-thumb-item-35" id="admin-thumb-item-35">


                                <span class="mw-post-media-img" style="background-image: url('http://127.0.0.1:8000/api/image-generate-tn-request/167?saved');"></span>
                
                    <div class="featured-image">featured image</div>

                


                  <span class="mdi mdi-cog image-settings settings-img tip" data-tip="Image Settings" onclick="imageConfigDialog(35)"></span>

                <span class="mdi mdi-delete image-settings remove-image tip" data-tip="Delete Image" onclick="mw.module_pictures.del('35');"></span>

                <label class="mw-ui-check">
                    <input type="checkbox" onchange="doselect()" data-url="http://127.0.0.1:8000/userfiles/media/templates.microweber.com/4__71728.1557124344.jpg" value="35"><span></span>
                </label>
                <div class="mw-post-media-img-edit">

                    <template class="image-options">

                        <div id="image-json-options-35">
                            <div class="image-json-options">
                                                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" class="form-control" name="title" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Alt Text</label>
                                        <input type="text" class="form-control" name="alt-text" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Link</label>
                                        <input type="text" class="form-control" name="link" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Caption</label>
                                        <input type="text" class="form-control" name="caption" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Author</label>
                                        <input type="text" class="form-control" name="author" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Source</label>
                                        <input type="text" class="form-control" name="source" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Tags</label>
                                        <input type="text" class="form-control" name="tags" value="">
                                    </div>
                                
                                <hr class="thin">

                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="mw.dialog.get(this).remove()">Cancel</button>
                                <button type="button" class="btn btn-success btn-sm" onclick="mw.dialog.get(this).result(35)">Update</button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
                    <div class="admin-thumb-item admin-thumb-item-36" id="admin-thumb-item-36">


                                <span class="mw-post-media-img" style="background-image: url('http://127.0.0.1:8000/api/image-generate-tn-request/168?saved');"></span>
                


                  <span class="mdi mdi-cog image-settings settings-img tip" data-tip="Image Settings" onclick="imageConfigDialog(36)"></span>

                <span class="mdi mdi-delete image-settings remove-image tip" data-tip="Delete Image" onclick="mw.module_pictures.del('36');"></span>

                <label class="mw-ui-check">
                    <input type="checkbox" onchange="doselect()" data-url="http://127.0.0.1:8000/userfiles/media/templates.microweber.com/6__63475.1557125030.jpg" value="36"><span></span>
                </label>
                <div class="mw-post-media-img-edit">

                    <template class="image-options">

                        <div id="image-json-options-36">
                            <div class="image-json-options">
                                                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" class="form-control" name="title" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Alt Text</label>
                                        <input type="text" class="form-control" name="alt-text" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Link</label>
                                        <input type="text" class="form-control" name="link" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Caption</label>
                                        <input type="text" class="form-control" name="caption" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Author</label>
                                        <input type="text" class="form-control" name="author" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Source</label>
                                        <input type="text" class="form-control" name="source" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Tags</label>
                                        <input type="text" class="form-control" name="tags" value="">
                                    </div>
                                
                                <hr class="thin">

                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="mw.dialog.get(this).remove()">Cancel</button>
                                <button type="button" class="btn btn-success btn-sm" onclick="mw.dialog.get(this).result(36)">Update</button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
                    <div class="admin-thumb-item admin-thumb-item-37" id="admin-thumb-item-37">


                                <span class="mw-post-media-img" style="background-image: url('http://127.0.0.1:8000/api/image-generate-tn-request/169?saved');"></span>
                


                  <span class="mdi mdi-cog image-settings settings-img tip" data-tip="Image Settings" onclick="imageConfigDialog(37)"></span>

                <span class="mdi mdi-delete image-settings remove-image tip" data-tip="Delete Image" onclick="mw.module_pictures.del('37');"></span>

                <label class="mw-ui-check">
                    <input type="checkbox" onchange="doselect()" data-url="http://127.0.0.1:8000/userfiles/media/templates.microweber.com/10__66837.1557125165.jpg" value="37"><span></span>
                </label>
                <div class="mw-post-media-img-edit">

                    <template class="image-options">

                        <div id="image-json-options-37">
                            <div class="image-json-options">
                                                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" class="form-control" name="title" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Alt Text</label>
                                        <input type="text" class="form-control" name="alt-text" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Link</label>
                                        <input type="text" class="form-control" name="link" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Caption</label>
                                        <input type="text" class="form-control" name="caption" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Author</label>
                                        <input type="text" class="form-control" name="author" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Source</label>
                                        <input type="text" class="form-control" name="source" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Tags</label>
                                        <input type="text" class="form-control" name="tags" value="">
                                    </div>
                                
                                <hr class="thin">

                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="mw.dialog.get(this).remove()">Cancel</button>
                                <button type="button" class="btn btn-success btn-sm" onclick="mw.dialog.get(this).result(37)">Update</button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
                    <div class="admin-thumb-item admin-thumb-item-38" id="admin-thumb-item-38">


                                <span class="mw-post-media-img" style="background-image: url('http://127.0.0.1:8000/api/image-generate-tn-request/170?saved');"></span>
                


                  <span class="mdi mdi-cog image-settings settings-img tip" data-tip="Image Settings" onclick="imageConfigDialog(38)"></span>

                <span class="mdi mdi-delete image-settings remove-image tip" data-tip="Delete Image" onclick="mw.module_pictures.del('38');"></span>

                <label class="mw-ui-check">
                    <input type="checkbox" onchange="doselect()" data-url="http://127.0.0.1:8000/userfiles/media/templates.microweber.com/11__49143.1557125318_1.jpg" value="38"><span></span>
                </label>
                <div class="mw-post-media-img-edit">

                    <template class="image-options">

                        <div id="image-json-options-38">
                            <div class="image-json-options">
                                                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" class="form-control" name="title" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Alt Text</label>
                                        <input type="text" class="form-control" name="alt-text" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Link</label>
                                        <input type="text" class="form-control" name="link" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Caption</label>
                                        <input type="text" class="form-control" name="caption" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Author</label>
                                        <input type="text" class="form-control" name="author" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Source</label>
                                        <input type="text" class="form-control" name="source" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Tags</label>
                                        <input type="text" class="form-control" name="tags" value="">
                                    </div>
                                
                                <hr class="thin">

                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="mw.dialog.get(this).remove()">Cancel</button>
                                <button type="button" class="btn btn-success btn-sm" onclick="mw.dialog.get(this).result(38)">Update</button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
                    <div class="admin-thumb-item admin-thumb-item-39" id="admin-thumb-item-39">


                                <span class="mw-post-media-img" style="background-image: url('http://127.0.0.1:8000/api/image-generate-tn-request/171?saved');"></span>
                


                  <span class="mdi mdi-cog image-settings settings-img tip" data-tip="Image Settings" onclick="imageConfigDialog(39)"></span>

                <span class="mdi mdi-delete image-settings remove-image tip" data-tip="Delete Image" onclick="mw.module_pictures.del('39');"></span>

                <label class="mw-ui-check">
                    <input type="checkbox" onchange="doselect()" data-url="http://127.0.0.1:8000/userfiles/media/templates.microweber.com/14__82429.1557125318_2.jpg" value="39"><span></span>
                </label>
                <div class="mw-post-media-img-edit">

                    <template class="image-options">

                        <div id="image-json-options-39">
                            <div class="image-json-options">
                                                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" class="form-control" name="title" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Alt Text</label>
                                        <input type="text" class="form-control" name="alt-text" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Link</label>
                                        <input type="text" class="form-control" name="link" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Caption</label>
                                        <input type="text" class="form-control" name="caption" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Author</label>
                                        <input type="text" class="form-control" name="author" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Source</label>
                                        <input type="text" class="form-control" name="source" value="">
                                    </div>
                                                                    <div class="form-group">
                                        <label class="control-label">Tags</label>
                                        <input type="text" class="form-control" name="tags" value="">
                                    </div>
                                
                                <hr class="thin">

                                <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="mw.dialog.get(this).remove()">Cancel</button>
                                <button type="button" class="btn btn-success btn-sm" onclick="mw.dialog.get(this).result(39)">Update</button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
                <div class="admin-thumb-item-uploader-holder">
            <div class="dropable-zone small-zone square-zone">
                <div class="holder">
                    <button type="button" class="btn btn-link">Add file</button>
                </div>
            </div>
            <div class="admin-thumb-item-uploader" id="admin-thumb-item-uploaderpic-sorter-632b2b3d18f26">

            </div>
        </div>
    

</div>
</div>
            </div>
    <script>mw.require("files.js", true);</script>
     <script>

    var saveOptions = function (id, data) {

        mw.module_pictures.save_options(id, data, function () {
            mw.reload_module('#edit-post-gallery-main');
            mw.reload_module('pictures/admin')
            mw.top().reload_module('pictures')
        });
    }

    imageConfigDialog = function (id) {
        var el = mw.$('#admin-thumb-item-' + id + ' .image-options');
        var dialog =  mw.top().dialog({
            overlay: true,
            content: el.html(),
            template: 'default',
            height: 'auto',

            title: 'Image Settings',
            onResult: function (id) {
                var data = {};
                var root = $(dialog.dialogContainer);
                root.find('input').each(function () {
                    data[this.name] = this.value;
                })
                saveOptions(id, data);
                this.remove()
            }
        })
    }


    deleteSelected = function () {
        mw.module_pictures.del(doselect());
    }
    downloadSelected = function () {
        mw.$(".admin-thumb-item .mw-ui-check input:checked").each(function () {
            var a = $("<a>")
                .attr("href", $(this).dataset('url'))
                .attr("download", $(this).dataset('url'))
                .appendTo("body");

            a[0].click();
            a.remove();
        });

    }
    doselect = function () {
        var final = [];
        var all = mw.$(".admin-thumb-item:visible")

        all.each(function () {
            var check = $('.mw-ui-check input:checked', this);
            if (check.length) {
                final.push(check[0].value);
                $(this).addClass('checked')
            } else {
                $(this).removeClass('checked');

            }
        });

        var allPicker = mw.$('.post-media-select-all-pictures');

        allPicker[final.length !== 0 ? 'addClass' : 'removeClass']('active').find('span').html(final.length);
        allPicker[final.length === all.length ? 'addClass' : 'removeClass']('all-selected');
        mw.$('#post-media-card-header')[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions")[final.length === 0 ? 'removeClass' : 'addClass']('active');
        $(".select_actions_holder").stop()[final.length === 0 ? 'hide' : 'show']();
        return final;
    }
    editImageTags = function (event) {
        var parent = null;
        mw.tools.foreachParents(event.target, function (loop) {

            if (mw.tools.hasClass(this, 'admin-thumb-item')) {
                parent = this;
                mw.tools.stopLoop(loop);
            }

        });
        if (parent !== null) {
            $(".image-tags", parent).show()
        }

    }



    selectItems = function (val) {
        if (val === 'all') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = true;
            })
        }
        else if (val === 'none') {
            mw.$(".admin-thumb-item .mw-ui-check input").each(function () {
                this.checked = false;
            })
        }
        doselect()
    }


    $(document).ready(function () {

        var $root = mw.$('#admin-thumbs-holder-sort-632b2b3cf0dd6');

        mw.require('filepicker.js');

        mw._postsImageUploader = new mw.filePicker({
            element: '#backend_image_uploader_632b2b3cf0dd6',
            nav: 'dropdown',
            footer: false,
            boxed: false,
            dropDownTargetMode: 'dialog',
            label: mw.lang('Media'),
            _frameMaxHeight: true,
            hideHeader: true,
            uploaderType: "big",
            multiple: true,
            accept: 'image/*',
        })

        mw._postsImageUploader._thumbpreload = function () {
            var el = mw.$('<div class="admin-thumb-item admin-thumb-item-loading"><span class="mw-post-media-img" style=""></span></div>');
            mw.$($root).find('.admin-thumb-item-uploader-holder').before(el);

            mw.spinner({
                element: el,
                size: 32,
                color: '#4592ff'
            });

        }

        $(mw._postsImageUploader).on('FileAdded', function (e, file) {
            mw._postsImageUploader._thumbpreload()
        });
        $(mw._postsImageUploader).on('FileUploaded FileUploadError', function (e, file) {
            mw.$('.admin-thumb-item-loading:last', $root).remove();
            mw.module_pictures.after_change();
        });
        $(mw._postsImageUploader).on('Result', function (e, res) {
            var url = res && res.src ? res.src : res;
            after_upld(url, 'Result', 'content', '15', 'edit-post-gallery-main');
            after_upld(url, 'done');
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        });

        var thumbs = mw.$('.admin-thumb-item', $root);

        if (thumbs.length) {
            if (mw._postsImageUploader.settings.hideHeader) {
                mw._postsImageUploader.hide()
            } else {
                mw._postsImageUploader.hideUploaders()
            }
        }


        $(".image-tag-view").remove();
        $(".image-tags").each(function () {
            $(".mw-post-media-img", mw.tools.firstParentWithClass(this, 'admin-thumb-item'))
                .append('<span class="image-tag-view tip" onclick="editImageTags(event)" data-tip="Tags: ' + this.value + '" ><span class="mw-icon-app-pricetag"></span></span>');
            $(this).on('change', function () {
                $(".image-tag-view", mw.tools.firstParentWithClass(this, 'admin-thumb-item')).attr('data-tip', 'Tags: ' + this.value);
            });

        });

        doselect()
    });
</script>
</div>
</div>
        </div>
    </div>

    

    
<div class="card style-1 mb-3 js-product-pricing-card">
    <div class="card-header no-border">
        <h6><strong>Pricing</strong></h6>
    </div>

    <div class="card-body pt-3">
        <div class="row">

            <div class="col-md-12">
                <label>Price</label>
                <div class="input-group mb-3 prepend-transparent">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-muted">USD</span>
                    </div>
                    <input type="text" class="form-control js-product-price" name="price" value="19.0">
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    $('.js-product-price').on('input', function () {
                        mw.on.stopWriting(this, function () {
                            var textPrice = $('.js-product-price').val();
                            var formatPrice = textPrice.replaceAll(",", "");
                            $('.js-product-price').val(formatPrice);
                        });
                    });
                });
            </script>

                            <div class=' module module-shop-offers-special-price-field ' id='module-content-edit-shop-offers-special-price-field'  product_id="15"   parent-module-id="module-content-edit"   parent-module="content/edit"   data-type="shop/offers/special_price_field"  >
<script>
    $(document).ready(function () {
        var specialPriceElement = $('.js-product-special-price');
        var specialPriceSet = "0";

        if(specialPriceSet == 1) {
            $('#customCheck322').attr('checked','checked');
            $('.js-offer-price-form-group').show();
        }

        $(specialPriceElement).on('input', function () {
            mw.on.stopWriting(this, function () {
                var textPrice = $(specialPriceElement).val();
                var formatPrice = textPrice.replaceAll(",", "");
                $(specialPriceElement).val(formatPrice);
            });
        });

    });

    function openOfferEdit(offer_id) {
        var data = {};
        var mTitle = (offer_id ? 'Edit offer' : 'Add new offer');
        data.offer_id = offer_id;
        editModal = mw.tools.open_module_modal('shop/offers/edit_offer', data, {overlay: true, skin: 'simple', title: mTitle})
    }

    function toggleOfferPrice() {
        $('.js-offer-price-form-group').toggle();
    }
</script>

<div class="col-md-12 px-0">

<div class="form-group">
    <div class="custom-control custom-checkbox">
        <input autocomplete="off" type="checkbox" name="content_data[has_special_price]" class="custom-control-input js-toggle-offer-price-button"  id="customCheck322" data-value-checked="1" data-value-unchecked="0" onchange="toggleOfferPrice()" value="1"  />
        <label class="custom-control-label" for="customCheck322">Make offer price for product</label>
    </div>
</div>


<div class="form-group js-offer-price-form-group" style="display: none">
	<label>Offer Price</label>
	<div class="input-group mb-3 prepend-transparent append-transparent">
		<div class="input-group-prepend">
			<span class="input-group-text text-muted">USD</span>
		</div>

		<input autocomplete="off" type="text" class="form-control js-product-special-price" name="content_data[special_price]" value="">

                    <div class="input-group-append" data-bs-toggle="tooltip" data-original-title="To put a product on sale, make Compare at price the original price and enter the lower amount into Price.">
                <span class="input-group-text"><i class="mdi mdi-help-circle"></i></span>
            </div>
        
	</div>
    </div>

</div>
</div>
            
        </div>

     <!--   <hr class="thin no-padding"/>

        <div class="row">
            <div class="col-md-12">
                <label>Cost per item</label>
                <small class="text-muted d-block mb-2">Customers won’t see this</small>

                <div class="input-group mb-3 prepend-transparent">
                    <div class="input-group-prepend">
                        <span class="input-group-text text-muted">USD</span>
                    </div>
                    <input type="text" class="form-control" name="unit_price" value="0.00">
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                        <label class="custom-control-label" for="customCheck1">Charge tax on this product</label>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</div>
<style>
    .js-track-quantity {
        display: none;
    }

</style>



<script>
    $(document).ready(function () {
        $('.js-track-quantity-check').click(function () {
            mw.toggle_inventory_forms_fields();
        });

                disableTrackQuantityFields();
        
    });


    mw.toggle_inventory_forms_fields = function(){

        $('.js-track-quantity').toggle();

        if ($('.js-track-quantity-check').prop('checked')) {
            enableTrackQuantityFields();
        } else {
            disableTrackQuantityFields();
        }
    }

    function disableTrackQuantityFields() {
        $("input,select",'.js-track-quantity').prop("disabled", true);
        $("input,select",'.js-track-quantity').attr("readonly",'readonly');

    }

    function enableTrackQuantityFields() {
        $("input,select",'.js-track-quantity').prop("disabled", false);
        $("input,select",'.js-track-quantity').removeAttr("readonly");


    }

    function contentDataQtyChange(instance) {
        if ($(instance).val()== '') {
            $(instance).val('nolimit');
        }
    }
</script>

<div class="card style-1 mb-3">
    <div class="card-header no-border">
        <h6><strong>Inventory</strong></h6>
    </div>

    <div class="card-body pt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>SKU</label>
                    <small class="text-muted d-block mb-3">Stock Keeping Unit</small>
                    <input type="text" name="content_data[sku]" class="form-control js-invertory-sku" value="">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Barcode</label>
                    <small class="text-muted d-block mb-3">ISBN, UPC, GTIN, etc.</small>
                    <input type="text" name="content_data[barcode]" class="form-control js-invertory-barcode" value="">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="content_data[track_quantity]" class="custom-control-input js-track-quantity-check" value="1" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Track quantity</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input js-invertory-sell-oos" id="customCheck3" name="content_data[sell_oos]" value="1">
                        <label class="custom-control-label" for="customCheck3">Continue selling when out of stock</label>
                    </div>
                </div>
            </div>
        </div>



        <script>

            set_custom_qty_number = function (el) {
                var val =  el.value;
                if(val == 'other'){

                    var next =  $('.js-track-quantity-select-qty-other-value').first();
                    next.removeClass('d-none');
                    next.attr('name','content_data[qty]');

                    $('.js-track-quantity-select-qty').remove();

                    $('.js-track-quantity-select-qty-other-value').on('change input', function (){
                        document.querySelector('.btn-save').disabled = false;
                        mw.askusertostay = true;

                    })


                }
            }

        </script>




        <div class="js-track-quantity">
            <hr class="thin no-padding">
            <label class="control-label my-3">Quantity</label>
            <div class="row">
                <div class="col-md-6 w-100">
                    <div class="form-group">
                        <label class="control-label">Available</label>
                        <small class="text-muted d-block mb-3">How many products you have available in stock</small>

                                                <select name="content_data[qty]" class="js-track-quantity-select-qty  selectpicker " data-size="7" onchange="set_custom_qty_number(this)">
                            <option selected value="nolimit">∞ No Limit</option>
                            <option value="0" title="This item is out of stock and cannot be ordered.">Out of stock</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                            <option value="32">32</option>
                                                            <option value="33">33</option>
                                                            <option value="34">34</option>
                                                            <option value="35">35</option>
                                                            <option value="36">36</option>
                                                            <option value="37">37</option>
                                                            <option value="38">38</option>
                                                            <option value="39">39</option>
                                                            <option value="40">40</option>
                                                            <option value="41">41</option>
                                                            <option value="42">42</option>
                                                            <option value="43">43</option>
                                                            <option value="44">44</option>
                                                            <option value="45">45</option>
                                                            <option value="46">46</option>
                                                            <option value="47">47</option>
                                                            <option value="48">48</option>
                                                            <option value="49">49</option>
                                                            <option value="50">50</option>
                                                            <option value="51">51</option>
                                                            <option value="52">52</option>
                                                            <option value="53">53</option>
                                                            <option value="54">54</option>
                                                            <option value="55">55</option>
                                                            <option value="56">56</option>
                                                            <option value="57">57</option>
                                                            <option value="58">58</option>
                                                            <option value="59">59</option>
                                                            <option value="60">60</option>
                                                            <option value="61">61</option>
                                                            <option value="62">62</option>
                                                            <option value="63">63</option>
                                                            <option value="64">64</option>
                                                            <option value="65">65</option>
                                                            <option value="66">66</option>
                                                            <option value="67">67</option>
                                                            <option value="68">68</option>
                                                            <option value="69">69</option>
                                                            <option value="70">70</option>
                                                            <option value="71">71</option>
                                                            <option value="72">72</option>
                                                            <option value="73">73</option>
                                                            <option value="74">74</option>
                                                            <option value="75">75</option>
                                                            <option value="76">76</option>
                                                            <option value="77">77</option>
                                                            <option value="78">78</option>
                                                            <option value="79">79</option>
                                                            <option value="80">80</option>
                                                            <option value="81">81</option>
                                                            <option value="82">82</option>
                                                            <option value="83">83</option>
                                                            <option value="84">84</option>
                                                            <option value="85">85</option>
                                                            <option value="86">86</option>
                                                            <option value="87">87</option>
                                                            <option value="88">88</option>
                                                            <option value="89">89</option>
                                                            <option value="90">90</option>
                                                            <option value="91">91</option>
                                                            <option value="92">92</option>
                                                            <option value="93">93</option>
                                                            <option value="94">94</option>
                                                            <option value="95">95</option>
                                                            <option value="96">96</option>
                                                            <option value="97">97</option>
                                                            <option value="98">98</option>
                                                            <option value="99">99</option>
                                                            <option value="100">100</option>
                                                        <option value="other">Other</option>
                        </select>

                        <input type="number" min="0" class="form-control d-none js-track-quantity-select-qty-other-value" placeholder="No Limit" value="nolimit">
                        

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group w-100">
                        <label class="control-label">Max quantity per order</label>
                        <small class="text-muted d-block mb-3">How many products can be ordered at once</small>
                        <select name="content_data[max_qty_per_order]" class="selectpicker js-invertory-max-quantity-per-order" data-size="7">
                            <option selected value="nolimit">∞ No Limit</option>

                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                            <option value="32">32</option>
                                                            <option value="33">33</option>
                                                            <option value="34">34</option>
                                                            <option value="35">35</option>
                                                            <option value="36">36</option>
                                                            <option value="37">37</option>
                                                            <option value="38">38</option>
                                                            <option value="39">39</option>
                                                            <option value="40">40</option>
                                                            <option value="41">41</option>
                                                            <option value="42">42</option>
                                                            <option value="43">43</option>
                                                            <option value="44">44</option>
                                                            <option value="45">45</option>
                                                            <option value="46">46</option>
                                                            <option value="47">47</option>
                                                            <option value="48">48</option>
                                                            <option value="49">49</option>
                                                            <option value="50">50</option>
                                                            <option value="51">51</option>
                                                            <option value="52">52</option>
                                                            <option value="53">53</option>
                                                            <option value="54">54</option>
                                                            <option value="55">55</option>
                                                            <option value="56">56</option>
                                                            <option value="57">57</option>
                                                            <option value="58">58</option>
                                                            <option value="59">59</option>
                                                            <option value="60">60</option>
                                                            <option value="61">61</option>
                                                            <option value="62">62</option>
                                                            <option value="63">63</option>
                                                            <option value="64">64</option>
                                                            <option value="65">65</option>
                                                            <option value="66">66</option>
                                                            <option value="67">67</option>
                                                            <option value="68">68</option>
                                                            <option value="69">69</option>
                                                            <option value="70">70</option>
                                                            <option value="71">71</option>
                                                            <option value="72">72</option>
                                                            <option value="73">73</option>
                                                            <option value="74">74</option>
                                                            <option value="75">75</option>
                                                            <option value="76">76</option>
                                                            <option value="77">77</option>
                                                            <option value="78">78</option>
                                                            <option value="79">79</option>
                                                            <option value="80">80</option>
                                                            <option value="81">81</option>
                                                            <option value="82">82</option>
                                                            <option value="83">83</option>
                                                            <option value="84">84</option>
                                                            <option value="85">85</option>
                                                            <option value="86">86</option>
                                                            <option value="87">87</option>
                                                            <option value="88">88</option>
                                                            <option value="89">89</option>
                                                            <option value="90">90</option>
                                                            <option value="91">91</option>
                                                            <option value="92">92</option>
                                                            <option value="93">93</option>
                                                            <option value="94">94</option>
                                                            <option value="95">95</option>
                                                            <option value="96">96</option>
                                                            <option value="97">97</option>
                                                            <option value="98">98</option>
                                                            <option value="99">99</option>
                                                            <option value="100">100</option>
                            
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .js-physical-product {
        display: none;
    }
</style>

<script>
    $(document).ready(function () {

        $('.js-physical-product-check').click(function () {
            mw.toggle_physical_product_fields();
        });

                mw.toggle_physical_product_fields();
        enablePhysicalProductFields();
        
    });

    mw.toggle_physical_product_fields = function () {
        $('.js-physical-product').toggle();

        if ($('.js-physical-product-check').prop('checked')) {
            enablePhysicalProductFields();
        } else {
            disablePhysicalProductFields();
        }
    }

    function disablePhysicalProductFields() {
        $("input,select",'.js-physical-product').prop("disabled", true);
        $("input,select",'.js-physical-product').attr("readonly", 'readonly');
    }

    function enablePhysicalProductFields() {
        $("input,select",'.js-physical-product').prop("disabled", false);
        $("input,select",'.js-physical-product').removeAttr("readonly");
    }
</script>

<div class="card style-1 mb-3">
    <div class="card-header no-border">
        <h6><strong>Shipping</strong></h6>
    </div>

    <div class="card-body pt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input js-physical-product-check" id="customCheck4" name="content_data[physical_product]" value="1">
                        <label class="custom-control-label" for="customCheck4">This is a physical product</label>
                    </div>
                </div>
            </div>
        </div>


        <div class="js-physical-product">
            <hr class="thin no-padding">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Fixed Cost</label>
                        <small class="text-muted d-block mb-3">Used to set your shipping price at checkout and label prices during fulfillment.</small>
                        <div class="input-group mb-3 prepend-transparent">
                            <div class="input-group-prepend">
                                <span class="input-group-text text-muted">USD</span>
                            </div>
                            <input type="text" class="form-control" name="content_data[shipping_fixed_cost]" value="">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Weight</label>
                        <small class="text-muted d-block mb-3">Used to calculate shipping rates at checkout and label prices during fulfillment.</small>
                        <div class="form-group">
                            <div class="input-group mb-3 append-transparent">
                                <input type="text" class="form-control" name="content_data[weight]" value="">
                                <div class="input-group-append">
                            <span style="width:70px;">
                                <select class="selectpicker" name="content_data[weight_type]" data-width="100%">
                                    <option value="kg" selected>kg</option>
                                    <option value="lb">lb</option>
                                    <option value="oz">oz</option>
                                    <option value="g">g</option>
                                </select>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label d-block mb-3">Free Shipping</label>
                        <div class="custom-control custom-radio d-inline-block mr-3">
                            <input type="radio" id="customRadio1" class="custom-control-input" name="content_data[free_shipping]" value="1">
                            <label class="custom-control-label" for="customRadio1">Yes</label>
                        </div>
                        <div class="custom-control custom-radio d-inline-block mr-3">
                            <input type="radio" id="customRadio2" class="custom-control-input" name="content_data[free_shipping]" value="0">
                            <label class="custom-control-label" for="customRadio2">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:;" class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#advanced-weight-settings">Show advanced weight settings</a>

            <div class="collapse" id="advanced-weight-settings">
                <hr class="thin no-padding">
                <label class="control-label">Advanced</label>
                <small class="text-muted d-block mb-3">Advanced product shipping settings.</small>

                <div class="row">
                    <div class="col-lg-3 col-xl">
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="number" name="content_data[weight]" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl">
                        <div class="form-group">
                            <label>Width</label>
                            <input type="number" name="content_data[width]" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl">
                        <div class="form-group">
                            <label>Height</label>
                            <input type="number" name="content_data[height]" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl">
                        <div class="form-group">
                            <label>Depth</label>
                            <input type="number" name="content_data[depth]" class="form-control" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="show-params-checkout-page" name="content_data[params_in_checkout]" value="1">
                                <label class="custom-control-label" for="show-params-checkout-page">Show parameters in checkout page</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!--   <span class="help-box">
                       Customers won’t enter their shipping address or choose a shipping method when buying this product.
                   </span>-->

            </div>
        </div>
    </div>
</div>

            <style>
            .fields > .card-body .module > .card {
                background: transparent;
                border: 0;
                box-shadow: unset;
            }

            .fields > .card-body .module > .card > .card-body {
                padding: 0 !important;
            }
            .fields > .card-body .module > .card > .card-header {
                display: none;
            }
        </style>
    <script>
         var variants = ([main, ...[a, ...b]]) => {
             if (!a) return main
             const combined = a.reduce((acc, x) => {
                 return acc.concat(main.map(h => {
                     return [h, x]
                    })
                 )
             }, []).map(node => {
                 var clone = [...node];
                 clone.forEach(nd => {
                     if(Array.isArray(nd)) {
                         nd.forEach(obj => {
                             clone.push(obj);
                         });
                     }
                 })
                 return clone.filter(item => !Array.isArray(item));
             })
             return variants([combined, ...b])
         }
        $(document).ready(function (){
            mw.on('customFieldsRefresh', function (e, data) {
                var fields = data.data.map(function (item){
                    return item.values.map(function (val){
                        return {
                            name: val,
                            customFieldId: item.id
                        }
                    })
                });

            })
        })
    </script>
        <div class="card style-1 mb-3 card-collapse fields js-custom-fields-card-tab">
            <div class="card-header no-border">

                <h6><strong>Custom fields</strong></h6>
                <a href="javascript:;" class="btn btn-link btn-sm js-show-custom-fields" data-bs-toggle="collapse" data-bs-target="#custom-fields-settings"><span class="collapse-action-label">Show</span>  Custom fields</a>

            </div>

            <div class="card-body py-0">
                <div class="collapse" id="custom-fields-settings">
                    <div class=' module module-custom-fields-admin '   data-mw-title="Custom fields" default-fields="price"   content-id="15"   suggest-from-related="true"   list-preview="true"   id="fields_for_post_15"   parent-module-id="module-content-edit"   parent-module="content/edit"   data-type="custom_fields/admin"  >


<div class="card style-1 mb-3 ">
    <div class="card-header">
        <div class=' module module-admin-modules-info-module-title ' id='fields-for-post-15-admin-modules-info-module-title'  for-module="custom_fields/admin"   parent-module-id="fields_for_post_15"   parent-module="custom_fields/admin"   data-type="admin/modules/info_module_title"  ><h5>
            <img src="http://127.0.0.1:8000/userfiles/modules/custom_fields/custom_fields.svg" class="module-icon-svg-fill"/>
                <strong>Custom fields</strong>
    </h5>


</div>
    </div>

    <div class="card-body pt-3">
        <div class="settings-wrapper">
            <script type="text/javascript">
                mw.require("custom_fields.js", true);
                mw.require("options.js", true);
                mw.require("admin.js", true);
                mw.require("admin_custom_fields.js", true);
            </script>

            
            <script>


                function addCustomFieldByVal(fieldName) {
                    $('.js-cf-options').val(fieldName);
                    $('.js-cf-options ').trigger('change');
                }


                function addCustomFieldByExisting(fieldId) {

                    var make_field = {}
                    make_field.rel_type = 'content';
                    make_field.rel_id = '15';
                    make_field.copy_of = fieldId;
                    //   mw.custom_fields.copy_field_by_id(fieldId, 'content', '15');

                    mw.custom_fields.create(make_field, mw_custom_fileds_changed_callback);
                    mw_cf_toggle_edit_window()
                    mw.notification.success("Custom fields are saved");
                }


                $(document).ready(function () {
                    mw.dropdown();
                    mw.$('.js-cf-options').on('change', function () {
                        var val = $(this).val();
                        var copyof = mw.$('.js-cf-options li[value="' + val + '"][data-copyof]').dataset('copyof');
                        copyof = false;
                        if (copyof == false) {
                            var make_field = {}
                            make_field.rel_type = 'content';
                            make_field.rel_id = '15';
                            make_field.type = val;
                            mw.custom_fields.create(make_field, mw_custom_fileds_changed_callback);
                            mw_cf_toggle_edit_window()
                            mw.notification.success("Custom fields are saved");
                        } else {

                            // mw.custom_fields.copy_field_by_id(copyof, 'content', '15');
                        }
                    });
                });
                mw_cf_toggle_edit_window = function () {
                    $('#add-field-select').toggleClass('collapse');
                    $(this).parent().toggleClass('card-closed');
                    $(this).find('.d-flex').toggleClass('justify-content-between');
                }
                mw_custom_fileds_changed_callback = function (el) {
                    mw.tools.loading('#quick-add-post-options-items-holder-container');
                    mw.reload_module('#mw_custom_fields_list_preview', function () {
                        mw.admin.custom_fields.initValues();
                        mw.tools.loading('#quick-add-post-options-items-holder-container', false);
                    });
                    mw.custom_fields.after_save();
                }
                if (!!window.thismodal) {
                    thismodal.resize(800)
                }
            </script>

            <div class="module-live-edit-settings">
                <div id="custom-field-editor" class="mw-ui-box mw-ui-box-content" style="display: none">
                    <label class="mw-ui-label">
                        <small>Edit <b id="which_field"></b> Field</small>
                    </label>
                    <div class="custom-field-edit">
                        <div class="custom-field-edit-header">
                            <span class="custom-field-edit-title"></span>
                            <span class="custom-field-edit-title-head right" style="cursor:pointer;">close                                <span class="mw-ui-arr mw-ui-arr-down" style="opacity:0.6;"></span>
                            </span>
                        </div>
                        <div class="mw-admin-custom-field-edit-item-wrapper">
                            <div class="mw-admin-custom-field-edit-item mw-admin-custom-field-edit-fields_for_post_15"></div>
                        </div>
                    </div>
                </div>

                <div>
                    
                    
                    <div>
                        <div class="card mb-3 mt-3 card-closed">
                            <div class="card-header no-border bg-primary text-white py-1 pl-3 js-add-custom-field" style="cursor:pointer" onclick="javascript:mw_cf_toggle_edit_window()">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-plus mdi-20px mr-2"></i>
                                    <span>Add new field</span>
                                </div>
                            </div>
                            <div class="card-body collapse" id="add-field-select">




                                <div class="custom-fields-add-buttons">
                                    
                                    <script>
                                        $(document).ready(function () {
                                            var cf_existing_search_items = mw.$('.mw-custom-field-existing-item-btn', '.custom-fields-add-buttons');

                                            mw.$('#cf-add-existing-search', '.custom-fields-add-buttons').on('input', function () {
                                                mw.tools.search(this.value, cf_existing_search_items, function (found) {
                                                    $(this)[found?'show':'hide']();
                                                });
                                            });
                                        });
                                    </script>

                                        <div class="mw-flex-row">
                                            <div class="mw-flex-col-xs-10 mw-flex-col-sm-6 mw-flex-col-md-8 mw-flex-col-lg-10">
                                                <label class="control-label">Existing fields</label>
                                                <small class="d-block mb-2 text-muted">Choose from your existing fields bellow</small>
                                            </div>
                                            <div class="mw-flex-col-xs-2 mw-flex-col-sm-6 mw-flex-col-md-4 mw-flex-col-lg-2">
                                                <input type="text" class="form-control form-control-sm" aria-label="Search" id="cf-add-existing-search" placeholder="Search">
                                            </div>
                                        </div>






                                    <div class="row">
                                                                                    <button type="button" class="btn btn-link text-dark px-1 mw-custom-field-existing-item-btn" onclick="javascript:addCustomFieldByExisting('22','price');">

                                                    <span class="mw-custom-field-icon-text mw-custom-field-icon-price"></span>
                                                    <span class="mw-custom-field-title  small" title="price">price</span>
                                                    <span class="d-none">price</span>
                                            </button>
                                                                            </div>
                                        <hr>
                                    

                                    <select class="js-cf-options" data-live-search="true" data-size="7" style="display: none;">
                                                                                                                                    <option data-copyof="22" value="price">
                                                    <span class="mw-custom-field-icon-text mw-custom-field-icon-price"></span>
                                                    <span class="mw-custom-field-title" title="price">price</span>
                                                </option>
                                                                                    
                                                                                    <option value="price">
                                                <span class="mw-custom-field-icon-price"></span>
                                                <span class="mw-custom-field-title">Price</span>
                                            </option>
                                                                                    <option value="text">
                                                <span class="mw-custom-field-icon-text"></span>
                                                <span class="mw-custom-field-title">Text Field</span>
                                            </option>
                                                                                    <option value="radio">
                                                <span class="mw-custom-field-icon-radio"></span>
                                                <span class="mw-custom-field-title">Single Choice</span>
                                            </option>
                                                                                    <option value="dropdown">
                                                <span class="mw-custom-field-icon-dropdown"></span>
                                                <span class="mw-custom-field-title">Dropdown</span>
                                            </option>
                                                                                    <option value="checkbox">
                                                <span class="mw-custom-field-icon-checkbox"></span>
                                                <span class="mw-custom-field-title">Multiple choices</span>
                                            </option>
                                                                                    <option value="number">
                                                <span class="mw-custom-field-icon-number"></span>
                                                <span class="mw-custom-field-title">Number</span>
                                            </option>
                                                                                    <option value="phone">
                                                <span class="mw-custom-field-icon-phone"></span>
                                                <span class="mw-custom-field-title">Phone</span>
                                            </option>
                                                                                    <option value="site">
                                                <span class="mw-custom-field-icon-site"></span>
                                                <span class="mw-custom-field-title">Web Site</span>
                                            </option>
                                                                                    <option value="email">
                                                <span class="mw-custom-field-icon-email"></span>
                                                <span class="mw-custom-field-title">E-mail</span>
                                            </option>
                                                                                    <option value="address">
                                                <span class="mw-custom-field-icon-address"></span>
                                                <span class="mw-custom-field-title">Address</span>
                                            </option>
                                                                                    <option value="country">
                                                <span class="mw-custom-field-icon-country"></span>
                                                <span class="mw-custom-field-title">Country</span>
                                            </option>
                                                                                    <option value="date">
                                                <span class="mw-custom-field-icon-date"></span>
                                                <span class="mw-custom-field-title">Date</span>
                                            </option>
                                                                                    <option value="time">
                                                <span class="mw-custom-field-icon-time"></span>
                                                <span class="mw-custom-field-title">Time</span>
                                            </option>
                                                                                    <option value="color">
                                                <span class="mw-custom-field-icon-color"></span>
                                                <span class="mw-custom-field-title">Color</span>
                                            </option>
                                                                                    <option value="upload">
                                                <span class="mw-custom-field-icon-upload"></span>
                                                <span class="mw-custom-field-title">File Upload</span>
                                            </option>
                                                                                    <option value="property">
                                                <span class="mw-custom-field-icon-property"></span>
                                                <span class="mw-custom-field-title">Property</span>
                                            </option>
                                                                                    <option value="breakline">
                                                <span class="mw-custom-field-icon-breakline"></span>
                                                <span class="mw-custom-field-title">Break Line</span>
                                            </option>
                                                                                    <option value="hidden">
                                                <span class="mw-custom-field-icon-hidden"></span>
                                                <span class="mw-custom-field-title">Hidden Field</span>
                                            </option>
                                                                            </select>

                                    <label class="control-label"> Add new fields</label>
                                    <small class="d-block mb-2 text-muted">Add new custom field from list bellow</small>

                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-price" onclick="javascript:addCustomFieldByVal('price');">
                                            <div>
                                                <span class="mw-custom-field-icon-price"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Price</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-text" onclick="javascript:addCustomFieldByVal('text');">
                                            <div>
                                                <span class="mw-custom-field-icon-text"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Text Field</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-radio" onclick="javascript:addCustomFieldByVal('radio');">
                                            <div>
                                                <span class="mw-custom-field-icon-radio"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Single Choice</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-dropdown" onclick="javascript:addCustomFieldByVal('dropdown');">
                                            <div>
                                                <span class="mw-custom-field-icon-dropdown"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Dropdown</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-checkbox" onclick="javascript:addCustomFieldByVal('checkbox');">
                                            <div>
                                                <span class="mw-custom-field-icon-checkbox"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Multiple choices</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-number" onclick="javascript:addCustomFieldByVal('number');">
                                            <div>
                                                <span class="mw-custom-field-icon-number"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Number</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-phone" onclick="javascript:addCustomFieldByVal('phone');">
                                            <div>
                                                <span class="mw-custom-field-icon-phone"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Phone</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-site" onclick="javascript:addCustomFieldByVal('site');">
                                            <div>
                                                <span class="mw-custom-field-icon-site"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Web Site</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-email" onclick="javascript:addCustomFieldByVal('email');">
                                            <div>
                                                <span class="mw-custom-field-icon-email"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">E-mail</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-address" onclick="javascript:addCustomFieldByVal('address');">
                                            <div>
                                                <span class="mw-custom-field-icon-address"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Address</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-country" onclick="javascript:addCustomFieldByVal('country');">
                                            <div>
                                                <span class="mw-custom-field-icon-country"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Country</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-date" onclick="javascript:addCustomFieldByVal('date');">
                                            <div>
                                                <span class="mw-custom-field-icon-date"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Date</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-time" onclick="javascript:addCustomFieldByVal('time');">
                                            <div>
                                                <span class="mw-custom-field-icon-time"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Time</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-color" onclick="javascript:addCustomFieldByVal('color');">
                                            <div>
                                                <span class="mw-custom-field-icon-color"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Color</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-upload" onclick="javascript:addCustomFieldByVal('upload');">
                                            <div>
                                                <span class="mw-custom-field-icon-upload"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">File Upload</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-property" onclick="javascript:addCustomFieldByVal('property');">
                                            <div>
                                                <span class="mw-custom-field-icon-property"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Property</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-breakline" onclick="javascript:addCustomFieldByVal('breakline');">
                                            <div>
                                                <span class="mw-custom-field-icon-breakline"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Break Line</span>
                                            </div>
                                        </button>
                                    
                                        <button type="button" class="btn btn-link text-dark px-1 js-add-custom-field-hidden" onclick="javascript:addCustomFieldByVal('hidden');">
                                            <div>
                                                <span class="mw-custom-field-icon-hidden"></span>
                                                <span class="mw-custom-field-title text-break-line-1 text-center small">Hidden Field</span>
                                            </div>
                                        </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="thin">

                <label class="control-label">Your fields</label>
                <small class="d-block mb-2 text-muted">List of your added custom fields</small>

                <div id="custom-fields-box">
                    
                    <div class=' module module-custom-fields-list '   data-type="custom_fields/list"   for="content"   rel_id="15"   list-preview="true"   id="mw_custom_fields_list_preview"   parent-module-id="fields_for_post_15"   parent-module="custom_fields/admin"  >
<script>
    if (typeof __smart_field_opener !== 'function') {
        __smart_field_opener = function (e) {
            if (e === undefined) {
                return;
            }
            if (mw.tools.hasClass(e.target.className, 'mw-ui-field') || mw.tools.hasClass(e.target.className, 'mw-custom-fields-from-page-title-text')) {
                mw.tools.toggle('.custom_fields_selector', '#smart_field_opener');

            }
        }
    }
</script>

<script>mw.lib.require('mwui_init');</script>

    
    <style>
        .mobile-th {
            display: none;
        }

        #custom-fields-post-table [class*='mw-custom-field-icon-'] {
            font-size: 25px;
            display: block;
        }

        #custom-fields-post-table td {
            vertical-align: middle;
        }
    </style>

<script>

    $(document).ready(function (){
        mw.trigger('customFieldsRefresh', {data:  [{"id":28,"rel_type":"content","rel_id":"15","position":null,"type":"price","name":"price","name_key":"price","placeholder":null,"error_text":null,"updated_at":"2021-11-11 09:15:05","created_at":"2020-02-04 14:00:25","created_by":1,"edited_by":null,"session_id":"2JdK8hHpJhFUiJKzhACzm3hNlSUiajbMCnbZNvsS","options":[],"show_label":null,"is_active":1,"required":null,"copy_of_field":null,"value":"19.0","values":["19.0"],"values_plain":"19.0"}]})
    })

</script>

                        <div class="table-responsive">
                <table class="table table-hover table-hover-silver" id="custom-fields-post-table">
                    <thead>
                    <tr>
                        <th>
                            <small>Type</small>
                        </th>
                        <th>
                            <small>Name</small>
                        </th>
                                               <th>
                           <small>Value</small>
                       </th>
                       <th class="text-center">
                           <small>Settings</small>
                       </th>
                       <th class="text-center">
                           <small>Delete</small>
                       </th>
                   </tr>
                   </thead>
                   <tbody>
                                          <tr id="mw-custom-list-element-28" data-id="28" class="show-on-hover-root">
                           <td data-tip="Price" class="tip custom-field-icon" data-tipposition="top-left">
                               <span class="mobile-th">Type:</span>
                               <div><span class="mw-custom-field-icon-price"></span></div>
                           </td>

                           <td data-id="28">
                               <span class="mobile-th">Name: </span>
                               <span class="mw-custom-fields-list-preview">
                                    <span class="text-capitalize d-inline-block px-3 py-1" data-id="28"><small class="px-1 py-1">price</small></span>
                                </span>
                           </td>

                        
                            <td data-id="28">
                                <span class="mobile-th">Settings</span>
                                <div id="mw-custom-fields-list-preview-28" class="mw-custom-fields-list-preview">
                                    <div class=' module module-custom-fields-values-preview '   field-id="28"   id="mw-admin-custom-field-edit-item-preview-28"   parent-module-id="mw_custom_fields_list_preview"   parent-module="custom_fields/list"   data-type="custom_fields/values_preview"  ><style>
    .mw-admin-custom-field-value-edit-inline-holder .delete-custom-fields {
        visibility: hidden;
    }

    .mw-admin-custom-field-value-edit-inline-holder:hover .delete-custom-fields {
        visibility: visible;
    }

    .mw-custom-fields-list-preview .mw-admin-custom-field-value-edit-inline-holder:not(.mw-admin-custom-field-checkbox) {
        min-width: 100px;
        position: relative;
        padding-right: 30px !important;
    }

    .mw-custom-fields-list-preview .mw-admin-custom-field-value-edit-inline-holder:not(.mw-admin-custom-field-checkbox) .mw-admin-custom-field-value-edit-inline:empty:before {
        content: 'Edit here';
        display: block;
        position: absolute;
        top: 5px;
        padding-right: 10px !important;
    }

    .mw-custom-fields-list-preview .mw-admin-custom-field-value-edit-inline-holder:not(.mw-admin-custom-field-checkbox):hover .mw-admin-custom-field-value-edit-inline:after {
        position: absolute;
        top: 5px;
        display: inline-block;
        font: normal normal normal 24px/1 "Material Design Icons";
        text-rendering: auto;
        line-height: inherit;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        content: '\F064F';
        font-size: 14px;
        right: 6px;
        opacity:;
    }
</style>
<script>
    mw.on.moduleReload('mw-admin-custom-field-edit-item-preview-28', function () {
        mw.admin.custom_fields.initValues(document.getElementById('mw-admin-custom-field-edit-item-preview-28').querySelectorAll('.mw-admin-custom-field-name-edit-inline, .mw-admin-custom-field-placeholder-edit-inline, .mw-admin-custom-field-value-edit-inline'));
    });
</script>

        <span class="custom-fields-values-holder">
        <span class="d-inline-block px-3 py-1">
            <small class="px-1 py-1" data-id="28">19.0</small>
        </span>
    </span>
</div>
                                </div>
                            </td>
                            <td class="text-center">
                                <a href="javascript:mw.admin.custom_fields.edit_custom_field_item('#mw-custom-fields-list-settings-28',28);" class="btn btn-outline-primary btn-sm">
                                    Settings                                </a>
                            </td>

                            <td class="text-center">
                                <a class="text-danger" href="javascript:;" onclick="mw.admin.custom_fields.del(28,'#mw-custom-list-element-28');" data-bs-toggle="tooltip" title="Delete"><i class="mdi mdi-close mdi-20px"></i></a>
                            </td>
                        </tr>
                                        </tbody>
                </table>
            </div>

            <script>mw.require('admin_custom_fields.js');</script>
            <script>


                $(document).ready(function () {

                    if (typeof( mw.admin.custom_fields) != 'undefined') {
                        mw.admin.custom_fields.initValues();
                    }

                    mw.responsive.table('#custom-fields-post-table', {
                        minWidth: 270
                    });

                    mw.$("#custom-fields-post-table tbody").sortable({
                        handle: "td.custom-field-icon",
                        axis: 'y',
                        placeholder: "ui-state-highlight",
                        start: function (e, ui) {
                            ui.placeholder.height(ui.item.height());
                        },
                        update: function () {
                            var _data = $(this).sortable('serialize');
                            var xhr = $.post(mw.settings.api_url + 'fields/reorder', _data);
                            xhr.success(function () {
                                                                mw.reload_module_parent('#15');
                                                            });

                            mw.custom_fields.after_save();
                        }
                    })
                });
            </script>
            </div>
                </div>


            </div>
        </div>

        <div class=' module module-help-modal-with-button ' id='fields-for-post-15-help-modal-with-button'  for_module="custom_fields"   parent-module-id="fields_for_post_15"   parent-module="custom_fields/admin"   data-type="help/modal_with_button"  ><script>
    function openModalHelpReadmeMd(for_module = false) {
        var modal_title = 'How to use this module?';

        mw_admin_help_modal = mw.top().dialog({
            content: '<div id="mw_admin_help_modal">Loading...</div>',
            title: modal_title,
            width: 1000,
            height: 700,
            id: 'mw_admin_help_item_popup_modal'
        });

        var params = {}
        params.for_module = for_module;

        mw.top().load_module('help/read', '#mw_admin_help_modal', null, params);
    }
</script>

<a href="javascript:;" onclick="openModalHelpReadmeMd('custom_fields');"><i class="fa fa-info-circle"></i> Help</a>
</div>
    </div>
</div>
</div>
                                    </div>
            </div>
        </div>
    
    <!--
        <div class="card style-1 mb-3">
            <div class="card-body pt-3">
                            </div>
        </div>
    -->
    
    
    <div class=' module module-content-views-advanced-settings ' id='module-content-edit-content-views-advanced-settings'  content-id="15"   content-type="product"   subtype="product"   parent-module-id="module-content-edit"   parent-module="content/edit"   data-type="content/views/advanced_settings"  >    <script type="text/javascript">
        mw.lib.require('mwui_init');
    </script>
    <script type="text/javascript">
        mw.reset_current_page = function (a, callback) {
            mw.tools.confirm("Are you sure you want to Reset the content of this page?  All your text will be lost forever!!", function () {
                var obj = {id: a}
                $.post(mw.settings.site_url + "api/content/reset_edit", obj, function (data) {
                    mw.notification.success("Content was resetted!");

                    if (typeof(mw.edit_content) == 'object') {
                        mw.edit_content.load_editor()
                    }

                    typeof callback === 'function' ? callback.call(data) : '';
                });
            });
        }
        mw.copy_current_page = function (a, callback) {
            mw.tools.confirm("Are you sure you want to copy this page?", function () {
                var obj = {id: a}
                $.post(mw.settings.site_url + "api/content/copy", obj, function (data) {
                    mw.notification.success("Content was copied");
                    if (data != null) {
                        var r = confirm("Go to the new page?");
                        if (r == true) {
                            if (self != top) {
                                top.window.location = mw.settings.site_url + "api/content/redirect_to_content?id=" + data;

                            } else {
                               // mw.url.windowHashParam('action', 'editpage:' + data);
                                window.location = "http://127.0.0.1:8000/admin/content/"+data+"/edit";
                            }
                            //content/redirect_to_content_id
                        } else {
                        }
                    }
                    typeof callback === 'function' ? callback.call(data) : '';
                });
            });
        }
        mw.del_current_page = function (a, callback) {
            mw.tools.confirm("Are you sure you want to delete this", function () {
                var arr = (a.constructor === [].constructor) ? a : [a];
                var obj = {ids: arr}
                $.post(mw.settings.site_url + "api/content/delete", obj, function (data) {
                    mw.notification.warning("Content was sent to Trash");
                    typeof callback === 'function' ? callback.call(data) : '';
                    window.location.href = window.location.href;
                });
            });
        }

        mw.adm_cont_type_change_holder_event = function (el) {
            mw.tools.confirm("Are you sure you want to change the content type? Please consider the documentation for more info", function () {
                var root = document.querySelector('#module-content-edit-content-views-advanced-settings');
                var form = mw.tools.firstParentWithClass(root, 'mw_admin_edit_content_form');
                var ctype = $(el).val()
                if (form != undefined && form.querySelector('input[name="content_type"]') != null) {
                    form.querySelector('input[name="content_type"]').value = ctype;
                }
                // Change api post url to content api
                $(form).attr('action', mw.settings.site_url + "api/content/" + form.querySelector('input[name="id"]').value);
                $(form).attr('content-type-is-changed', 1);
            });
        }
        mw.adm_cont_subtype_change_holder_event = function (el) {
            mw.tools.confirm("Are you sure you want to change the content subtype? Please consider the documentation for more info", function () {
                var root = document.querySelector('#module-content-edit-content-views-advanced-settings');
                var form = mw.tools.firstParentWithClass(root, 'mw_admin_edit_content_form');
                var ctype = $(el).val();
                if (form != undefined && form.querySelector('input[name="subtype"]') != null) {
                    form.querySelector('input[name="subtype"]').value = ctype
                }
            });
        }
        mw.adm_cont_enable_edit_of_created_at = function () {
            $('.mw-admin-edit-post-change-created-at-value').removeAttr('disabled').show();
            $('.mw-admin-edit-post-display-created-at-value').remove();
        }

        mw.adm_cont_enable_edit_of_updated_at = function () {
            $('.mw-admin-edit-post-change-updated-at-value').removeAttr('disabled').show();
            $('.mw-admin-edit-post-display-updated-at-value').remove();
        }

        $(document).ready(function (){
            $(".collapse").each(function(){
                var key = 'collapse' + this.id;
                var isStored = mw.storage.get(key);

                var el = $(this);

                el.on('show.bs.collapse', function (){
                    mw.storage.set(key, true);
                    $('[data-bs-target="#'+this.id+'"] .collapse-action-label').html('Hide');
                })
                el.on('hide.bs.collapse', function (){
                    mw.storage.set(key, false);
                    $('[data-bs-target="#'+this.id+'"] .collapse-action-label').html('Show');
                })

                if( isStored ) {
                    el.collapse( 'show' );
                } else {
                    el.collapse( 'hide' );
                }

            });
        })
    </script>


    <div class=' module module-content-views-settings-from-template ' id='module-content-edit-content-views-advanced-settings-content-views-settings-from-template'  content-type="product"   content-id="15"   parent-module-id="module-content-edit-content-views-advanced-settings"   parent-module="content/views/advanced_settings"   data-type="content/views/settings_from_template"  >    <div class="card style-1 mb-3 fields">
        <div class="card-header no-border">
            <label class="control-label">Template settings</label>
            <a href="javascript:;" class="btn btn-link btn-sm" data-bs-toggle="collapse" data-bs-target="#template-settings"><span class="collapse-action-label">Show</span>&nbsp; Template settings</a>
        </div>
        <div class="card-body py-0">
            <div class="collapse" id="template-settings">

                <small class="text-muted">Best product labels examples are: Sale, Promo, Top Offer etc.</small>
                <br>
                <small class="text-muted">If you choose the Percent from the select field, it will be calculated automatically from the Price and Offer price of the product.</small>
                <hr class="thin">
                <div class="row">
                                                                                                                                                                                                                                                                                                                                            <div class="form-group col-12">
                                <label> Label</label>
                                
                                                                <input name="content_data[label]" class="form-control" type="text" placeholder="" value="">
                                                            </div>
                                                                                                                                                                                                                                                                                                                                            <div class="form-group col-12">
                                <label> Label Color</label>
                                
                                                                <input name="content_data[label-color]" class="form-control mw-ui-color-picker w100" type="text" placeholder="" value="">
                                                            </div>
                                        </div>
            </div>
        </div>
    </div>
</div>

   

    

    <!-- SEO Settings -->
    <div class="card style-1 mb-3 card-collapse js-card-search-engine">
        <div class="card-header no-border">
            <h6><strong>Search engine</strong></h6>
            <a href="javascript:;" class="btn btn-link btn-sm" data-bs-toggle="collapse" data-bs-target="#seo-settings"><span class="collapse-action-label">Show</span> SEO setttings</a>
        </div>
        <div class="card-body py-0">
            <div class="collapse" id="seo-settings">
                <small class="text-muted d-block">Add a title and description to see how this product might appear in a search engine listing</small>

                <hr class="thin no-padding">

                <div class="row">



                    <div class="col-md-12">
                        <div class="form-group ">
                            <label class="control-label">Meta title</label>
                            <small data-bs-toggle="tooltip" title="Title to appear on the search engines results page"></small>
                            <small class="text-muted d-block mb-2">Title to appear on the search engines results page</small>

                            <input type="text" class="form-control" name="content_meta_title" autocomplete="">                        </div>
                    </div>






                    <div class="col-md-12">
                        <div class="form-group ">
                        <label class="control-label">Meta description</label>
                        <small data-bs-toggle="tooltip" title="Short description for yor content."></small>

                    <textarea class="form-control" name="description" rows="10" cols="50" autocomplete=""></textarea>                        </div>
                    </div>





                    <div class="col-md-12">
                        <div class="form-group ">
                        <label class="control-label">Meta keywords</label>
                        <small data-bs-toggle="tooltip" title="Short description for yor content."></small>
                            <small class="text-muted d-block mb-2">Separate keywords with a comma and space</small>

                    <input type="text" class="form-control" name="content_meta_keywords" autocomplete="">                        </div>

                        <small class="text-muted">Type keywords that describe your content - Example: Blog, Online News, Phones for Sale etc</small>

                    </div>










                    <div class="col-md-12">
                        <div class="form-group ">
                            <label>OG Images</label>
                            <small class="text-muted d-block mb-2">
                                Those images will be shown as a post image at facebook shares.<br>
                                If you want to attach og images, you must upload them to gallery from 'Add media'.
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Advanced Settings -->
    <div class="card style-1 mb-3 card-collapse">
        <div class="card-header no-border">
            <h6><strong>Advanced settings</strong></h6>
            <a href="javascript:;" class="btn btn-link btn-sm" data-bs-toggle="collapse" data-bs-target="#advanced-settings"><span class="collapse-action-label">Show</span>  advanced settings</a>
        </div>

        <div class="card-body py-0">
            <div class="collapse" id="advanced-settings">
                <p>Use the advanced settings to customize your blog post</p>
                <hr class="thin no-padding">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="form-group">
                            <label>Redirect to URL</label>
                            <small class="text-muted d-block mb-2">If set this, the user will be redirected to the new URL when visits the page</small>
                            <input type="text" name="original_link" class="form-control" placeholder="http://yoursite.com" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Require login</label>
                            <small class="text-muted d-block mb-2">If set to yes - this page will require login from a registered user in order to be opened</small>
                            <div class="custom-control custom-switch pl-0">
                                <label class="d-inline-block mr-5" style="cursor:pointer" for="require_login">No</label>
                                <input type="checkbox" class="custom-control-input" style="cursor:pointer" id="require_login" name="require_login" data-value-checked="1" data-value-unchecked="0">
                                <label class="custom-control-label" style="cursor:pointer" for="require_login">Yes</label>
                            </div>
                        </div>
                    </div>
                                            <div class="col-md-12">
                            <div class="form-group">
                                <label>Author</label>

                                <div id="select-post-author"></div>

                                <script>mw.require('autocomplete.js')</script>
                                                                <script>
                                    $(document).ready(function () {
                                        var created_by_field = new mw.autoComplete({
                                            element: "#select-post-author",
                                            ajaxConfig: {
                                                method: 'get',
                                                url: mw.settings.api_url + 'users/search_authors?kw=${val}',
                                                cache: true
                                            },
                                            map: {
                                                value: 'id',
                                                title: 'display_name',
                                                image: 'picture'
                                            },
                                            selected: [
                                                {
                                                    id: 1,
                                                    display_name: 'masjoel'
                                                }
                                            ]
                                        });
                                        $(created_by_field).on("change", function (e, val) {
                                            $("#created_by").val(val[0].id).trigger('change')
                                        })
                                    });
                                </script>
                                <input type="hidden" name="created_by" id="created_by" value="1">
                            </div>
                        </div>
                                    </div>
                <hr class="thin no-padding">
                <!-- More Advanced Settings -->
                
                <script>
                    // open_edit_related_content_modal = function($content_id) {
                    //     open_edit_related_content_modal__modal_opened = mw.dialog({
                    //      //   height:'600px',
                    //        //   autoHeight : true,
                    //
                    //         content: '<div id="open_edit_related_content_modal__opened__module" style="min-height: 500px"></div>',
                    //         title: 'Edit related content',
                    //         id: 'open_edit_related_content_modal__modal'
                    //     });
                    //
                    //     var params = {}
                    //     params.content_id = $content_id;
                    //   //  params.id = 'mw-admin-select-related-content-list';
                    //     mw.load_module('content/views/related_content_list', '#open_edit_related_content_modal__opened__module', null, params);
                    // }
                    open_edit_related_content_modal = function($content_id) {
                        var modal_id = 'open_edit_related_content_modal__modal';
                        var dialog = mw.top().dialogIframe({
                            url: 'http://127.0.0.1:8000/module/?type=content/views/related_content_list&live_edit=true&id=open_edit_related_content_modal__opened__module&content_id='+$content_id+'&from_url=http://127.0.0.1:8000/',
                            title: 'Edit related content',
                            id: modal_id,

                            height: 'auto',
                            autoHeight: true
                        })
                    }
                </script>
                <div class="row d-flex align-items-center">
                    <div class="col-md-8">
                        <label class="control-label">Related Content:</label>
                        <small class="text-muted d-block mb-3">You can add related content to your post or product</small>
                        <a class="btn btn btn-outline-primary btn-sm" href="javascript:open_edit_related_content_modal('15');">Edit related</a>
                    </div>
                        <div class="col-md-4 text-center text-md-right">
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-md-12 text-center text-md-left">
                        <label class="control-label mt-3">More options:</label>
                        <small class="text-muted d-block mb-3">Choose more options</small>
                        <a class="btn btn-outline-primary btn-sm" href="javascript:mw.copy_current_page('15');">Duplicate</a> 
                        <a class="btn btn-outline-primary btn-sm" href="javascript:mw.reset_current_page('15');">Reset Content</a>
                        <a class="btn btn-outline-danger btn-sm" id="mw-admin-content-edit-inner-delete-curent-content-btn" href="javascript:mw.del_current_page('15');">Delete Content</a>

                    </div>




                </div>

                
                
                                    <input name="position" type="hidden" value="2">
                
                                

                


                                            <div class="row  mt-3">
                        <div class="col-md-12">
                            <div>
                                <small>
                                    Id: <span class="mw-admin-edit-post-display-id-at-value">15</span>

                                </small>
                            </div>
                        </div>


                        </div>
                    




                    <div class="row  ">




                        <div class="col-12">


                            <button type="button" class="btn btn-sm btn-link" data-bs-toggle="collapse" data-bs-target="#set-a-specific-publish-date">Set a specific publish date</button>





                            <div class="collapse" id="set-a-specific-publish-date">
                                <div class="row">
                                    <script>mw.lib.require('bootstrap_datetimepicker');</script>
                                    <script>
                                        $(function () {
                                            $('.mw-admin-edit-post-change-created-at-value').datetimepicker();
                                            $('.mw-admin-edit-post-change-updated-at-value').datetimepicker();
                                        });
                                    </script>


                                                                            <div class="col-md-12">
                                            <div class="mw-admin-edit-post-created-at" onclick="mw.adm_cont_enable_edit_of_created_at()">
                                                <small>
                                                    Created on: <span class="mw-admin-edit-post-display-created-at-value">2020-02-04 14:01:02</span>
                                                    <input class="form-control form-control-sm mw-admin-edit-post-change-created-at-value" style="display:none" type="text" name="created_at" value="2020-02-04 14:01:02">
                                                </small>
                                            </div>
                                        </div>
                                    
                                                                            <div class="col-md-12">
                                            <div class="mw-admin-edit-post-updated-at" onclick="mw.adm_cont_enable_edit_of_updated_at()">
                                                <small>
                                                    Updated on: <span class="mw-admin-edit-post-display-updated-at-value">2021-11-11 09:15:05</span>
                                                    <input class="form-control form-control-sm mw-admin-edit-post-change-updated-at-value" style="display:none" type="text" name="updated_at" value="2021-11-11 09:15:05">
                                                </small>
                                            </div>
                                        </div>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                




                                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="mw-ui-field-holder">
<br>
                                <span class="font-weight-bold">Content type:  </span>

                                <button class="btn btn-outline-warning btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#content-type-settings">product</button>

                                <div class="collapse" id="content-type-settings">
                                    <div class="alert alert-dismissible alert-warning mt-3">
                                        <h4 class="alert-heading">Warning!</h4>
                                        <p class="mb-0">Do not change these settings unless you know what you are doing.</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>
                                                Change content type                                                <small data-bs-toggle="tooltip" data-title="Changing the content type to different than 'product' is advanced action. Please read the documentation and consider not to change the content type"></small>
                                            </label>

                                            <select class="selectpicker dropup" data-dropup-auto="false" data-width="100%" name="change_content_type" onchange="mw.adm_cont_type_change_holder_event(this)">
                                                                                                    <option value="page" >page</option>
                                                                                                    <option value="post" >post</option>
                                                                                                    <option value="product"    selected="selected"  >product</option>
                                                                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>
                                                Change content sub type                                                <small data-bs-toggle="tooltip" data-title="Changing the content type to different than 'product' is advanced action. Please read the documentation and consider not to change the content type"></small>
                                            </label>

                                            <select class="selectpicker dropup" data-dropup-auto="false" data-width="100%" name="change_contentsub_type" onchange="mw.adm_cont_subtype_change_holder_event(this)">
                                                                                                    <option value="dynamic" >dynamic</option>
                                                                                                    <option value="post" >post</option>
                                                                                                    <option value="product"    selected="selected"  >product</option>
                                                                                                    <option value="static" >static</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                





            </div>
        </div>
    </div>
    


</div>
    

    <div class="mt-9">
        <!--  -->
    </div>

</div>


<script>
    $(document).ready(function () {

        pick1 = mw.colorPicker({
            element: '.mw-ui-color-picker',
            position: 'bottom-left',
            onchange: function (color) {

            }
        });

        setTimeout(function (){
            mw.askusertostay = false;
          //  document.querySelector('.js-bottom-save').disabled = true;
        }, 999)

    });
</script>
                    </div>

                    
                    <script>
    mw.require("content.js");
    mw.require("files.js");
    mw.require("admin_custom_fields.js");
</script>
<script>
    /* FUNCTIONS */

    if (self !== parent && !!parent.mw) {

        mw.top().win.iframe_editor_window = window.self;
    }


    mw.edit_content = {};

    mw.edit_content.saving = false;


    mw.edit_content.create_new = function () {
        mw.$('#module-content-edit').attr("content-id", "0");
        mw.$('#module-content-edit').removeAttr("just-saved");
        mw.reload_module('#module-content-edit');
    };

    mw.edit_content.close_alert = function () {
        mw.$('#quickform-edit-content').show();
        mw.$('#post-added-alert-1830454898').hide();

    };

    mw.edit_content.load_page_preview = function (element_id) {
        var element_id = element_id || 'mw-admin-content-iframe-editor';
        var parent_page = mw.$('#mw-parent-page-value-1830454898', '#module-content-edit').val();
        var content_id = mw.$('#mw-content-id-value', '#module-content-edit').val();
        var content_type = mw.$('#mw-content-type-value-1830454898', '#module-content-edit').val()
        var subtype = mw.$('#mw-content-subtype', '#module-content-edit').val();
        var subtype_value = mw.$('#mw-content-subtype-value-1830454898', '#module-content-edit').val();
        var active_site_template = $('#mw-active-template-value-1830454898', '#module-content-edit').val();
        var active_site_layout = $('#mw-layout-file-value-1830454898').val();
        // var name = 'content/views/edit_default_inner';
        var name = 'content/views/layout_selector';
        var selector = '#mw-admin-edit-content-main-area';


        var callback = false;
        var attributes = {}
        attributes.parent_page = parent_page;
        attributes.content_id = content_id;
        attributes.content_id = content_id;
        attributes.content_type = content_type;
        attributes.subtype = subtype;
        attributes.subtype_value = subtype_value;
        attributes.active_site_template = active_site_template;
        attributes.active_site_layout = active_site_layout;
        attributes['template-selector-position'] = 'none';
        attributes['live-edit-overlay'] = true;
        attributes['edit_page_id'] = content_id;
        mw.load_module(name, selector, callback, attributes);
    }


    mw.edit_content.load_editor = function (element_id) {

        var parent_page = mw.$('#mw-parent-page-value-1830454898', '#module-content-edit').val();
        var content_id = mw.$('#mw-content-id-value', '#module-content-edit').val();
        var content_type = mw.$('#mw-content-type-value-1830454898', '#module-content-edit').val()
        var subtype = mw.$('#mw-content-subtype', '#module-content-edit').val();
        var subtype_value = mw.$('#mw-content-subtype-value-1830454898', '#module-content-edit').val();
        var active_site_template = $('#mw-active-template-value-1830454898', '#module-content-edit').val();
        var active_site_layout = $('#mw-layout-file-value-1830454898').val();
        var name = 'content/views/edit_default_inner';
        var selector = '#mw-admin-edit-content-main-area';


        var callback = false;
        var attributes = {}
        attributes.parent_page = parent_page;
        attributes.content_id = content_id;
        attributes.content_type = content_type;
        attributes.subtype = subtype;
        attributes.subtype_value = subtype_value;
        attributes.active_site_template = active_site_template;
        attributes.active_site_layout = active_site_layout;
        mw.load_module(name, selector, callback, attributes);
    }
    mw.edit_content.before_save = function () {
        mw.askusertostay = false;
        if (window.parent != undefined && window.parent.mw != undefined) {
            window.mw.parent().askusertostay = false;
        }
    }
    mw.edit_content.after_save = function (saved_id) {
        var saved_id = typeof saved_id === "number" ? saved_id : saved_id.id;

        mw.askusertostay = false;
        mw.$('.post-header-content-changed').removeClass('post-header-content-changed')
        var content_id = mw.$('#mw-content-id-value').val();
        var quick_add_holder = document.getElementById('mw-quick-content');
        if (quick_add_holder != null) {
            mw.tools.removeClass(quick_add_holder, 'loading');
        }
        if (content_id == 0) {
            if (saved_id !== undefined) {
                mw.$('#mw-content-id-value').val(saved_id);
            }
                    }
        if (mw.notification != undefined) {
            mw.notification.success('Content saved!');
        }
        if (parent !== self && !!parent.mw) {

            mw.reload_module_parent('posts');
            mw.reload_module_parent('shop/products');
            mw.reload_module_parent('shop/cart_add');
            mw.reload_module_parent('pages');
            mw.reload_module_parent('content');
            mw.reload_module_parent('custom_fields');
            mw.tools.removeClass(document.getElementById('mw-quick-content'), 'loading');
            mw.reload_module('pages');
            mw.parent().askusertostay = false;
        } else {
            mw.reload_module('[data-type="pages"]', function () {
                if (mw.$("#pages_tree_toolbar .mw_del_tree_content").length === 0) {
                    mw.$("#pages_tree_toolbar").removeClass("activated");
                    var action = mw.url.windowHashParam('action');
                    if (action) {
                        var id = action.split(':')[1];
                        if (id) {
                            $('[data-page-id="' + id + '"]').addClass("active-bg")
                        }
                    }


                }
                mw.tools.removeClass(document.getElementById('mw-quick-content'), 'loading');
            });
        }
    }

    mw.edit_content.set_category = function (id) {
        /* FILLING UP THE HIDDEN FIELDS as you change category or parent page */
        var names = [];
        var inputs = document.getElementById(id).querySelectorAll('input[type="checkbox"]'), i = 0, l = inputs.length;
        for (; i < l; i++) {
            if (inputs[i].checked === true) {
                names.push(inputs[i].value);
            }
        }
        if (names.length > 0) {
            mw.$('#mw_cat_selected_for_post').val(names.join(',')).trigger("change");
        } else {
            mw.$('#mw_cat_selected_for_post').val('__EMPTY_CATEGORIES__').trigger("change");
        }
        var names = [];
        var inputs = document.getElementById(id).querySelectorAll('input[type="radio"]'), i = 0, l = inputs.length;
        for (; i < l; i++) {
            if (inputs[i].checked === true) {
                names.push(inputs[i].value);
            }
        }
        if (names.length > 0) {
            mw.$('#mw-parent-page-value-1830454898').val(names[0]).trigger("change");
        } else {
            mw.$('#mw-parent-page-value-1830454898').val(0).trigger("change");
        }
    }


     mw.edit_content.handle_form_submit = function (go_live) {


        if (mw.edit_content.saving) {
            return false;
        }
        mw.edit_content.saving = true;
        var go_live_edit = go_live || false;
        var el = document.getElementById('quickform-edit-content');
        if (el === null) {
            return;
        }

        mw.edit_content.before_save();
        var module = $(mw.tools.firstParentWithClass(el, 'module'));


        var data = mw.serializeFields(el);
        data.id = mw.$('#mw-content-id-value').val();

        var categories = [];


        if (window.categorySelector) {
            $.each(categorySelector.tree.selectedData, function () {
                if (this.type == 'category') {
                    categories.push(this.id);
                }
                if (this.type == 'page') {
                    data.parent = this.id;
                }
            });
        }


        if (categories.length) {
            data.category_ids  = categories.join(',')
        } else {
            data.category_ids = 0;

        }

         var has_menu_edit = document.getElementById('menu-selector-item');
         if (has_menu_edit !== null &&  !data['add_content_to_menu[]'] ) {
              data['add_content_to_menu[]'] = [0];
         }





         //
        // if (data.tag_names.length) {
        //     data.tag_names  = data.tag_names.join(',')
        // } else {
        //     data.tag_names = false;
        // }


        module.addClass('loading');


        mw.content.save(data, {
            url: el.getAttribute('action'),
            onSuccess: function (a) {
                if (window.pagesTreeRefresh) {
                    pagesTreeRefresh()
                }

                if (typeof(data.id) !== 'undefined') {
                mw.$('.mw-admin-go-live-now-btn').attr('content-id', data.id);
                }
                mw.askusertostay = false;
                mw.is_new_content_added = false;
                if ( typeof(data.id) !== 'undefined' && (data.id) == 0) {
                    mw.is_new_content_added = true;
                }
                if (parent !== self && !!window.parent.mw) {
                    window.mw.parent().askusertostay = false;
                    if (typeof(data.is_active) !== 'undefined' && typeof(data.id) !== 'undefined') {

                        if ((data.id) != 0) {
                            if ((data.is_active) == 0) {
                                window.mw.parent().$('.mw-set-content-unpublish').hide();
                                window.mw.parent().$('.mw-set-content-publish').show();
                            }
                            else if ((data.is_active) == 1) {
                                window.mw.parent().$('.mw-set-content-publish').hide();
                                window.mw.parent().$('.mw-set-content-unpublish').show();
                            }
                        }

                    }
                }

                if (typeof(this) != "undefined") {
                    var inner_edits = mw.collect_inner_edit_fields();

                    if (inner_edits !== false) {
                        var save_inner_edit_data = inner_edits;
                        save_inner_edit_data.id = this;

                        var xhr = mw.save_inner_editable_fields(save_inner_edit_data);
                        xhr.success(function () {
                            mw.trigger('adminSaveEnd');
                        });
                        xhr.fail(function () {
                            $(window).trigger('adminSaveFailed');
                        });

                    }
                }
                if (go_live_edit != false) {
                    if (parent !== self && !!window.parent.mw) {
                        if (window.mw.parent().drag != undefined && window.mw.parent().drag.save != undefined) {
                            window.mw.parent().drag.save();
                        }
                        window.mw.parent().askusertostay = false;
                    }
                    var nid = typeof this === "number" ? this : this.id;

                    $.get('http://127.0.0.1:8000/api/content/get_link_admin/?id=' + nid, function (data) {

                        if (data == null) {
                            return false;
                        }
                         if(go_live_edit === 'n'){
                        mw.top().win.location.href = data.url + '?editmode=n';
                        } else {
                        mw.top().win.location.href = data.url + '?editmode=y';
                        }
                    });
                }
                else {
                    var nid = typeof this === "number" ? this : this.id;
                     $.get('http://127.0.0.1:8000/api/content/get_link_admin/?id=' + nid, function (data) {

                        if (data == null) {
                            return false;
                        }

                        var slug = data.slug;
                        mw.$("#edit-content-url").val(slug);
                        mw.$(".view-post-slug").html(slug);
                        mw.$("#slug-base-url").html(data.slug_prefix_url);
                         if(go_live_edit === 'n') {
                             mw.$("a.quick-post-done-link").attr("href", data.url + '?editmode=n');
                         } else {
                             mw.$("a.quick-post-done-link").attr("href", data.url + '?editmode=y');

                         }
                        mw.$("a.quick-post-done-link").html(data.url);



                         mw.$("#module-content-edit").attr("content-id", nid);
                                                  //if (self === parent) {
                         if (self === parent) {

                             if(mw.is_new_content_added){
                                 window.location = data.admin_url;
                             }
                             //var type =  el['subtype'];
                             // mw.url.windowHashParam("action", "editpage:" + nid);
                             // window.location = window.location;
                         }
                         
                         if ($('.mw_admin_edit_content_form').attr('content-type-is-changed') == 1) {
                             location.reload();
                             // This will redirect the full page with the new content type fields and changes
                         }
                         mw.edit_content.after_save(this);

                    });

                }
                mw.edit_content.saving = false;


                $(window).trigger('adminSaveContentCompleted');

                if (self !== parent) {



                    if ((data.id) == 0) {



                        var nid = typeof this === "number" ? this : this.id;


                        mw.$("#module-content-edit").attr("content-id", nid);

                        mw.reload_module("#module-content-edit");

                        mw.reload_module_everywhere('menu');
                        mw.reload_module_everywhere('pages');
                        mw.reload_module_everywhere('posts');
                        mw.reload_module_everywhere('shop/products');


                    }
                }






            },
            onError: function () {
                $(window).trigger('adminSaveFailed');
                module.removeClass('loading');

                mw.edit_content.saving = false;
            }
        });
    }

    mw.collect_inner_edit_fields = function (data) {
        var frame = document.querySelector('#mw-admin-content-iframe-editor iframe');
        if (frame === null) return false;
        var frameWindow = frame.contentWindow;
        if (typeof(frameWindow.mwd) === 'undefined') return false;
        var root = frameWindow.document.getElementById('mw-iframe-editor-area');
        var data = frameWindow.mw.drag.getData(root);
        return data;
    }

    mw.save_inner_editable_fields = function (data) {
        var xhr = $.ajax({
            type: 'POST',
            url: mw.settings.site_url + 'api/save_edit',
            data: data,
            datatype: "json"
        });
        return xhr;
    }


    /* END OF FUNCTIONS */
</script>

<script>
    $(mwd).ready(function () {
        $("#quickform-edit-content").on('keydown', "input[type='text']", function (e) {
            if (e.keyCode == 13) {
                e.preventDefault()
            }
        })
        $(window).on('hashchange beforeunload', function (e) {
            mw.$(".mw-admin-go-live-now-btn").off('click');
        });


        mw.$(".mw-admin-go-live-now-btn").off('click');

        mw.$(".mw-admin-go-live-now-btn").on('click', function (e) {
            mw.edit_content.handle_form_submit(true);
            return false;
        });

        mw.reload_module('#edit-post-gallery-main');

        mw.edit_content.load_editor();
                // mw.edit_content.render_category_tree("1830454898");
        mw.$("#quickform-edit-content").submit(function () {
            mw.edit_content.handle_form_submit();
            return false;
        });
                mw.$(".mw-admin-go-live-now-btn").attr('content-id', 15);
                mw.$('#mw-parent-page-value-1830454898').on('change', function (e) {
            var iframe_ed = $('.mw-iframe-editor');


            var changed = iframe_ed.contents().find('.changed').size();
            if (changed == 0) {

                mw.edit_content.load_editor();
            }
            //mw.edit_content.load_editor();
        });
        $(window).on('templateChanged', function (e) {

            var iframe_ed = $('.mw-iframe-editor')
            var changed = iframe_ed.contents().find('.changed').size();
            if (changed == 0) {
                // mw.edit_content.load_editor();
            }
            mw.edit_content.load_editor();
        });
        if (document.querySelector('.mw-iframe-editor') !== null) {
            document.querySelector('.mw-iframe-editor').onload = function () {
                $(window).on('scroll', function () {
                    var scrolltop = $(window).scrollTop();
                    if (document.getElementById('mw-edit-page-editor-holder') !== null) {
                        var otop = document.getElementById('mw-edit-page-editor-holder').offsetTop;
                        if ((scrolltop + 100) > otop) {
                            var ewr = document.querySelector('.mw-iframe-editor').contentWindow.document.querySelector('.editor_wrapper');
                            if (ewr === null) {
                                return false;
                            }
                            ewr.style.position = 'absolute';
                            ewr.style.top = scrolltop + otop + 'px';
                            ewr.style.top = scrolltop - otop /*+ document.querySelector('.admin-manage-toolbar').offsetTop*/ + document.querySelector('.admin-manage-toolbar').offsetHeight - 98 + 'px';
                            mw.$('.admin-manage-toolbar-scrolled').addClass('admin-manage-toolbar-scrolled-wysiwyg');
                            mw.tools.addClass(ewr, 'editor_wrapper_fixed');
                        }
                        else {
                            var ewr = document.querySelector('.mw-iframe-editor').contentWindow.document.querySelector('.editor_wrapper');
                            if (ewr === null) {
                                return false;
                            }
                            ewr.style.position = 'static';
                            mw.$('.admin-manage-toolbar-scrolled').removeClass('admin-manage-toolbar-scrolled-wysiwyg');
                            mw.tools.removeClass(ewr, 'editor_wrapper_fixed');
                        }
                    }
                });
            }
        }

        var title_field_shanger = $('#content-title-field');

        if (title_field_shanger.length > 0) {
            $(title_field_shanger).unbind("change");
            $(title_field_shanger).on("change", function () {
                var newtitle = $(this).val();
                $('#content-title-field-master').val(newtitle);
            });
        }

        $(".postbtnmore").on('mousedown', function () {
            $(this).remove()
        })

        window.QTABS = mw.tabs({
            nav: mw.$("#quick-add-post-options .mw-ui-abtn"),
            tabs: mw.$("#quick-add-post-options-items-holder .quick-add-post-options-item"),
            toggle: true,
            onclick: function (qtab) {

                var tabs = $(document.getElementById('quick-add-post-options-items-holder'));
                if (mw.$("#quick-add-post-options .mw-ui-abtn.active").length > 0) {
                    var tabsnav = $(document.getElementById('quick-add-post-options'));
                    var off = tabsnav.offset();
                    $(tabs).show();
                    QTABSArrow(this);
                    QTABMaxHeight();
                }
                else {
                    $(tabs).hide();
                }
                if (qtab.id === 'post-gallery-manager') {
                    $(qtab).width(mw.$("#mw-edit-page-editor-holder").width())
                } else if (qtab.id === 'quick-add-post-options-item-template') {
                    mw.reload_module('#mw-quick-add-choose-layout');
                }


                try {
                    document.querySelector('.mw-iframe-editor').contentWindow.GalleriesRemote()
                } catch (err) {
                }

            }
        });

        QTABMaxHeight = function () {
            var qt = mw.$('#quick-add-post-options-items-holder-container'),
                wh = $(window).height(),
                st = $(window).scrollTop();
            if (qt.length == 0) {
                return false;
            }
            qt.css('maxHeight', (wh - (qt.offset().top - st + 20)));
            qt.css('width', ($(".admin-manage-content-wrap").width()));
        }

        $(mww).on('mousedown', function (e) {
            var el = document.getElementById('content-edit-settings-tabs-holder');
            var cac = mw.wysiwyg.validateCommonAncestorContainer(e.target);
            if (el != null && !el.contains(e.target)
                && !!cac
                && !mw.tools.hasParentsWithTag(e.target, 'grammarly-btn')
                && cac.className.indexOf('grammarly') !== -1
                && cac.querySelector('[class*="grammarly"]') === null
                && !mw.tools.hasParentsWithTag(e.target, 'grammarly-ghost')
                && !mw.tools.hasParentsWithTag(e.target, 'grammarly-card')) {
                window.QTABS.unset()
                mw.$(".quick-add-post-options-item, #quick-add-post-options-items-holder").hide();
                mw.$("#quick-add-post-options .active").removeClass('active');
            }
        });

        mw.$(".mw-iframe-editor").on("editorKeyup", function () {
            mw.tools.addClass(document.body, 'editorediting');
        });
        $(document.body).on("mousedown", function () {
            mw.tools.removeClass(document.body, 'editorediting');
        });
        mw.$(".admin-manage-toolbar").on("mousemove", function () {
            mw.tools.removeClass(document.body, 'editorediting');
        });



    });
</script>
                </div>
            </div>

                <script>
        $(document).ready(function () {
            $('.go-live-edit-href-set').attr('href', 'http://127.0.0.1:8000/camera?editmode=y');
            $('.go-live-edit-href-set-view').attr('href', 'http://127.0.0.1:8000/camera?editmode=n');
        });
    </script>

<style>
    #quick-parent-selector-tree .mw-tree-nav{
        padding: 12px 30px;
        border: 1px solid #cfcfcf;
        margin: 20px 0;
        border-radius: 3px;

    }
    .mw-ui-category-selector-abs li li .mw-tree-toggler{
        margin-inline-start: -37px !important;
    }
    .mw-ui-category-selector-abs .mw-tree-toggler{
        margin-inline-start: -22px !important;
    }
</style>

<script>

    var loadCategoriesTree = function () {
        var request = new XMLHttpRequest();
        request.open('GET', 'http://127.0.0.1:8000/api/content/get_admin_js_tree_json', true);
        request.send();
        request.onload = function() {
            if (request.status >= 200 && request.status < 400) {
                var tdata = JSON.parse(request.responseText);

                if(!tdata || !tdata.length){
                    tdata = [];
                }

                var selectedPages = [ 8];
                var selectedCategories = [ 1,7];



                var tags = mw.element();
                var tree = mw.element();

                mw.element('.post-category-tags').empty().append(tags)
                mw.element('#quick-parent-selector-tree').empty().append(tree)



                window.categorySelector = new mw.treeTags({
                    data: tdata,
                    selectable: true,
                    multiPageSelect: false,
                    tagsHolder: tags.get(0),
                    treeHolder: tree.get(0),
                    color: 'primary',
                    size: 'sm',
                    outline: true,
                    saveState: false,
                    on: {
                        selectionChange: function () {
                            //  document.querySelector('.btn-save').disabled = false;
                            mw.askusertostay = true;
                        }
                    }
                });

                $(categorySelector.tree).on('ready', function () {
                    if (window.pagesTree && pagesTree.selectedData.length) {
                        $.each(pagesTree.selectedData, function () {
                            categorySelector.tree.select(this)
                        })
                    } else {
                        $.each(selectedPages, function () {
                            categorySelector.tree.select(this, 'page')
                        });
                        $.each(selectedCategories, function () {
                            categorySelector.tree.select(this, 'category')
                        });
                    }

                    var atcmplt = mw.element('<div class="input-group mb-0 prepend-transparent"> <div class="input-group-prepend"> <span class="input-group-text px-1"><i class="mdi mdi-magnify"></i></span> </div> <input type="text" class="form-control form-control-sm" placeholder= Search> </div>');

                    tree.before(atcmplt);

                    atcmplt.find('input').on('input', function () {
                        var val = this.value.toLowerCase().trim();
                        if (!val) {
                            categorySelector.tree.showAll();
                        }
                        else {
                            categorySelector.tree.options.data.forEach(function (item) {

                                if (item.title.toLowerCase().indexOf(val) === -1) {
                                    categorySelector.tree.hide(item);
                                }
                                else {
                                    categorySelector.tree.show(item);
                                }
                            });
                        }
                    })
                });

                $(categorySelector.tags).on("tagClick", function (e, data) {
                    $(".mw-tree-selector").show();
                    mw.tools.highlight(categorySelector.tree.get(data))
                });

            }
        }

    }
    var catManager;
    var addCategory = function () {
        if(!catManager) {
            catManager = new mw.CategoryManager();
        }
        catManager.addNew().then(function (data){
            loadCategoriesTree()
        })
    }


</script>

<div class="col-md-4 manage-content-sidebar">
    <div class="card style-1 mb-3">
        <div class="card-body pt-3 pb-0">
            <div class="row">
                <div class="col-12">
                    <strong>Visibility</strong>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-12">
<input type="hidden" name="is_active" id="is_post_active" value="1">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="is_active_1" name="is_active" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" style="cursor:pointer" for="is_active_1">Published</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="is_active_0" name="is_active" class="custom-control-input" value="0">
                            <label class="custom-control-label" style="cursor:pointer" for="is_active_0">Unpublished</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    
    
        
    
            <div class="card style-1 mb-3 categories js-sidebar-categories-card">
            <div class="card-body pt-3 pb-1">
                <div class="row">
                                            <div class="col-12">
                            <strong>Categories</strong>

                            <script>
                                function manage_cats_for_add_post() {

                                    var manage_cats_for_add_post_opts = {};
                                    // opts.width = '900';
                                    // opts.height = '800';

                                    //  opts.liveedit = true;
                                    //  opts.mode = 'modal';

                                    var additional_params = {};
                                    additional_params.show_add_post_to_category_button = 'true';



                                    manage_cats_for_add_post_dialog = mw.top().tools.open_global_module_settings_modal('categories/admin_backend_modal', 'categories-admin',manage_cats_for_add_post_opts,additional_params)
                                }
                            </script>

                            <a onclick="manage_cats_for_add_post();void(0);return false;" href="http://127.0.0.1:8000/admin/view:content/action:categories" class="btn btn-link float-right py-1 px-0"> Manage</a>
                        </div>
                                    </div>


                <div class="row mb-3">
                    <div class="col-12">
                                                    <script>
                                $(document).ready(function () {

                                    var editContentCategoryTreeSelector;


                                    mw.on("mwSelectToAddCategoryToContent", function(event,catId) {
                                        if (typeof(window.categorySelector) != 'undefined') {
                                            editContentCategoryTreeSelector = window.categorySelector.tree;
                                        }
                                        if (typeof(mw.adminPagesTree) != 'undefined') {
                                            editContentCategoryTreeSelector = mw.adminPagesTree;
                                        }
                                        if (typeof(window.pagesTree) != 'undefined') {
                                            editContentCategoryTreeSelector = window.pagesTree;
                                        }

                                        if (typeof(editContentCategoryTreeSelector) != 'undefined') {
                                            mw.notification.success('The content is added to category');

                                            var all = [];
                                            all.push({
                                                type: 'category',
                                                id: catId
                                            })


                                            editContentCategoryTreeSelector.select(all);
                                            if (typeof(categorySelector) != 'undefined') {
                                                categorySelector.tree.select(catId, 'category')
                                            }

                                            if (typeof(thismodal) != 'undefined') {
                                                thismodal.remove()
                                            }

                                            if (typeof(manage_cats_for_add_post_dialog) != 'undefined') {
                                                manage_cats_for_add_post_dialog.remove()
                                            }



                                            //
                                            // if( mw.dialog.get(event.target)){
                                            //     mw.dialog.get(event.target).remove()
                                            // }




                                        }

                                    });



                                    $('#mw-post-added-1830454898').on('mousedown touchstart', function (e) {
                                        if (e.target.nodeName === 'DIV') {
                                            setTimeout(function () {
                                                $('.mw-ui-invisible-field', e.target).focus()
                                            }, 78)
                                        }
                                    });

                                    var all = [{type: 'page', id: 8}];
                                    var cats = [1,7];

                                    $.each(cats, function () {
                                        all.push({
                                            type: 'category',
                                            id: this
                                        })
                                    });

                                    if (typeof(editContentCategoryTreeSelector) != 'undefined') {
                                        editContentCategoryTreeSelector.select(all);
                                    }
                                });
                            </script>

                            <div class="mw-tag-selector mt-3" id="mw-post-added-1830454898">
                                <div class="post-category-tags"></div>
                            </div>
                                            </div>
                </div>

                                    <hr class="thin no-padding">

                    <div class="row">
                        <div class="col-12">
                            <div id="show-categories-tree-wrapper">
                                <small class="text-muted">Want to add the product in more categories?</small>
                                <br>
                                <button type="button" class="btn btn-outline-primary btn-sm my-3 js-show-categories-tree-btn" data-bs-toggle="collapse" data-bs-target="#show-categories-tree">Add to</button>
                                <br>

                                <div id="show-categories-tree" class="collapse">
                                    <div class="mw-admin-edit-page-primary-settings content-category-selector">
                                        <div class="mw-ui-field-holder">
                                            <div class="mw-ui-category-selector mw-ui-category-selector-abs mw-tree mw-tree-selector" id="mw-category-selector-1830454898">
                                                                                                    <script>
                                                        $(document).ready(function () {
                                                            loadCategoriesTree();
                                                        });

                                                        mw.on('pagesTreeRefresh', function () {
                                                            loadCategoriesTree();
                                                        });
                                                    </script>

                                                    <div id="quick-parent-selector-tree"></div>

                                                    <script>

    var thetree = document.querySelector(".mw-ui-category-selector-abs .module")


    CreateCategoryForPost = function (step) {

        mw.$("#category-not-found-name").html(mw.$('#quick-tag-field').val());
        if (step === 0) {
            mw.$("#category-tree-not-found-message").hide();
            mw.$("#parent-category-selector-block").hide();
        }
        if (step === 1) {
            mw.$(".mw-ui-category-selector-abs").scrollTop(0);
            mw.$("#category-tree-not-found-message").show();
            mw.$("#parent-category-selector-block").hide();
        }
        else if (step === 2) {
            if (mw.$(".mw-tag-selector .mw-ui-btn-small").length === 0) {
                mw.$("#category-tree-not-found-message").hide();
                mw.$("#parent-category-selector-block").show();
            }
            else {
                CreateCategoryForPost(3);
            }
        }
        else if (step == 3) {
            var checked = document.querySelector('#categoryparent input:checked');
            if (checked == null) {
                var checked = document.querySelector('#pages_edit_container input[type=radio]:checked');
            }
            if (checked == null) {
                return;
            }
            var parent = "content_id"
            //  var parent = mw.tools.firstParentWithTag(checked, 'li');
            //  var parent = mw.tools.hasClass(parent, 'is_page') ? 'content_id' : 'parent_id';
            var data = {
                title: mw.$('#quick-tag-field').val()
            };
            data[parent] = checked.value;
            //data[parent] = checked.value;
            $.post(mw.settings.api_url + "category/save", data, function () {
                mw.reload_module("categories/selector", function (el) {
                    mw.$("#category-tree-not-found-message").hide();
                    mw.$("#parent-category-selector-block").show();
                })
            });
        }
    }

</script>
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </div>
        </div>

    
    
                    <div class="card style-1 mb-3">
            <div class="card-body pt-3">
                <div class="row mb-3">
                    <div class="col-12">
                        <strong>Tags</strong>
                        <small data-bs-toggle="tooltip" title="Tags/Labels for this content. Use comma (,) to add multiple tags"></small>
                    </div>
                </div>

                                    <div class=' module module-content-views-content-tags ' id='module-content-edit-content-views-content-tags'  content-type="product"   content-id="15"   parent-module-id="module-content-edit"   parent-module="content/edit"   data-type="content/views/content_tags"  >

<script type="text/javascript">
    mw.lib.require('bootstrap_tags');

    $(document).ready(function () {
        var data = ["Iwatch","Apple","Watch","Jbl","Speakers","Apple","Computer","Speaker","Jbl","Speaker","Amazon","Speaker","Camera","Accessoaries","Diving","Islands","Travel","Usa","West","Yacht","Summer","Sea","Travel","World","Travel","Usa"];


        var node = document.querySelector('#content-tags-block');
        var nodesearch = document.querySelector('#content-tags-search-block');

        var tagsData = ["Camera","Accessoaries"].map(function (tag){
            return {title: tag, id: tag}
        });
        var tags = new mw.tags({
            element: node,
            data: tagsData,
            color: 'primary',
            size:  'sm',
            inputField: false,
        })
      $(tags)
         .on('change', function(e, item, data){
            mw.element('[name="tag_names"]').val(data.map(function (c) {  return c.title }).join(',')).trigger('change')
        });


        var tagsSelect = mw.select({
            element: nodesearch,
            multiple: false,
            autocomplete: true,
            tags: false,
            placeholder: 'Add tag',
            ajaxMode: {
                paginationParam: 'page',
                searchParam: 'keyword',
                endpoint: mw.settings.api_url + 'tagging_tag/autocomplete',
                method: 'get'
            }
        });


        $(tagsSelect).on("change", function (event, tag) {
            tags.addTag(tag)
            setTimeout(function () {tagsSelect.element.querySelector('input').value = '';})
        });

        $(tagsSelect).on('enterOrComma', function (e, node){
            tags.addTag({title: node.value, id: node.value});
            setTimeout(function () {node.value = '';})
        })



    });
</script>
<div class="row">
    <div class="col-12">
        <div id="content-tags-block"></div>
        <div id="content-tags-search-block"></div>
        <input type="hidden" name="tag_names" value="Camera,Accessoaries" id="tags"/>
    </div>
</div>
</div>
                            </div>
        </div>
        

    <div class="card style-1 mb-3 d-none">
        <div class="card-body">
            <div id="content-title-field-buttons">
                                    <button type="submit" class="btn btn-primary mw-live-edit-top-bar-button" onclick="mw.edit_content.handle_form_submit(true);" form="quickform-edit-content"><i class="mai-eye2"></i> <span>Live Edit</span></button>
                            </div>
        </div>
    </div>
</div>
        </div>
    </form>
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
<?php /**PATH D:\laragon\www\LARAVEL\microweber-master\storage\framework\views/8e1f27899e3f3c3a3c9aa8f1fec4157c994d4c1a.blade.php ENDPATH**/ ?>