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
    <script src="http://127.0.0.1:8000/userfiles/cache/livewire/1.3.0/livewire/livewire.js" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'xcVttZZ82hEAggtxDSa8ek6TtgaOz9Fkc0mHecTS';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
    <style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes  livewireautofill { from {} }</style>


    <script defer src="http://127.0.0.1:8000/userfiles/modules/microweber/api/libs/alpine/alpine.min.js"></script>

</head>




<body class="is_admin loading view-content action-">

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-ui-modal')->html();
} elseif ($_instance->childHasBeenRendered('xj84HMh')) {
    $componentId = $_instance->getRenderedChildComponentId('xj84HMh');
    $componentTag = $_instance->getRenderedChildComponentTagName('xj84HMh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xj84HMh');
} else {
    $response = \Livewire\Livewire::mount('livewire-ui-modal');
    $html = $response->html();
    $_instance->logRenderedChild('xj84HMh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                            <a href="http://127.0.0.1:8000/contact-us?editmode=n" class="btn btn-outline-success btn-rounded btn-sm-only-icon go-live-edit-href-set go-live-edit-href-set-view">
                                <i class="mdi mdi-earth"></i><span class="d-none d-md-block ml-1">Website</span>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="http://127.0.0.1:8000/contact-us?editmode=y" class="btn btn-primary btn-rounded btn-sm-only-icon go-live-edit-href-set">
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

                
                                    <li class="nav-item dropdown-no-js active">
                        <a href="http://127.0.0.1:8000/admin/view:content" class="nav-link dropdown-toggle  active">
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


        
    <main class="module-content">

                      <div class=' module module-content-backend '   id="mw-content-backend"   data-type="content/backend"   parent-module="content/backend"   parent-module-id="mw-content-backend"  ><script>
    mw.require("content.js");
</script>
<script>

    mw.on.hashParam("search", function (pval) {
        var cont = mw.$('#pages_edit_container').attr("data-type", 'content/manager');
        if ( !!pval ) {
            cont.attr("data-keyword", pval);
            mw.url.windowDeleteHashParam('pg')
            cont.attr("data-page-number", 1);
        }
        else {
            cont.removeAttr("data-keyword");
            mw.url.windowDeleteHashParam('search')
        }
        var holder = document.querySelector('#content-view-search-bar') || document.querySelector('.main');
        mw.spinner({element: holder, size: 22, decorate: true}).show();
        mw.reload_module('#pages_edit_container', function () {
            mw.spinner({element: holder}).remove();
        });
    });
    mw.on.moduleReload('#mw-content-backend');


    var mainTreeSetActiveItems = function () {
        if (typeof(mw.adminPagesTree) != 'undefined') {

            var hp = mw.url.getHashParams(location.hash);

            if (hp.action) {

                var arr = hp.action.split(':');
                if (arr[0] !== 'new') {
                    mw.adminPagesTree.unselectAll();
                }
                var activeTreeItemIsPage = arr[0] === 'editpage' || arr[0] === 'showposts';
                var activeTreeItemIsCategory = arr[0] === 'editcategory' || arr[0] === 'showpostscat';

                if (activeTreeItemIsPage) {
                    mw.adminPagesTree.select({
                        id: arr[1],
                        type: 'page'
                    })
                }
                if (activeTreeItemIsCategory) {
                    mw.adminPagesTree.select({
                        id: arr[1],
                        type: 'category'
                    })
                }
            }
            else {
                mw.adminPagesTree.unselectAll();
            }
        }
    };


    $(document).ready(function () {

        mw.on.hashParam("page-posts", function (pval) {
            mw_set_edit_posts(pval);
        });
        mw.on.moduleReload("pages_tree_toolbar", function (e) {

        });
        mw.on.moduleReload("pages_edit_container", function () {
        });
        $(document.body).ajaxStop(function () {
            $(this).removeClass("loading");
        });

        mw.$(".mw-admin-go-live-now-btn").off('click');

    });


    mw.contentAction = {
        manage: function (type, id) {



            //   add_to_parent_page

            id = id || 0;
            if (type === 'page') {
                mw_select_page_for_editing(id);
            }
            else if (type === 'post') {
                mw_select_post_for_editing(id);
            }
            else if (type === 'category') {
                mw_select_category_for_editing(id);
            }
            else if (type === 'mw_backward_prod') {
                mw_add_product(id);
            } else if (type !== '') {
                mw_select_custom_content_for_editing(0, type)
            }
            mw.$(".mw_action_nav").addClass("not-active");
            mw.$(".mw_action_" + type).removeClass("not-active");


        },
        create: function (a) {
            return mw.contentAction.manage(a, 0);
        }
    }
    function mw_delete_content($p_id) {
        mw.$('#pages_edit_container').attr('data-content-id', $p_id);
        mw.load_module('content/edit', '#pages_edit_container');
    }

    function mw_select_page_for_editing($p_id) {

        mw.$(".pages_tree_item.active-bg").removeClass('active-bg');
        mw.$(".category_element.active-bg").removeClass('active-bg');

        //var active_item = $('#pages_tree_container_2351322597 .active-bg').first();
        var active_item_is_page = $p_id;
        var active_item_is_parent = mw.url.windowHashParam("parent-page");
        if (!active_item_is_parent) {
            active_item_is_parent = $p_id;
        }
        var active_item = $('#pages_tree_container_2351322597 .content-item-' + active_item_is_parent).first();


        var active_item_is_category = active_item.attr('data-category-id');


        active_item.addClass('active-bg');

        mw.$('.mw-admin-go-live-now-btn').attr('content-id', active_item_is_parent);
        mw.$('#pages_edit_container')
            .removeAttr('data-parent-page-id')
            .attr('content_type', 'page')
            .removeAttr('subtype')
            .removeAttr('content_type_filter')
            .removeAttr('subtype_filter')
            .removeAttr('data-parent-category-id')
            .removeAttr('categories_active_ids')
            .removeAttr('data-categories_active_ids')
            .removeAttr('data-active_ids')
            .removeAttr('active_ids');


        if (active_item_is_category ) {
            var active_item_parent_page = $('#pages_tree_container_2351322597 .active-bg').parents('.have_category').first();
            if (active_item_parent_page.length) {
                 active_item_is_page = active_item_parent_page.attr('data-page-id');
            }
            else {
                active_item_parent_page = $('#pages_tree_container_2351322597 .active-bg').parents('.is_page').first();
                if (active_item_parent_page.length) {
                     active_item_is_page = active_item_parent_page.attr('data-page-id');
                }
            }
        }
        else {
            mw.$('#pages_edit_container').removeAttr('data-parent-category-id');
        }

        mw.$('#pages_edit_container').removeAttr('data-parent-page-id');

        mw.$('#pages_edit_container').attr('data-page-id', $p_id);
        mw.$('#pages_edit_container').attr('data-type', 'content/edit');
        mw.$('#pages_edit_container').removeAttr('data-subtype');
        mw.$('#pages_edit_container').removeAttr('data-content-id');
        mw.$('#pages_edit_container').removeAttr('content-id');


        mw.$(".mw_edit_page_right").css("overflow", "hidden");
        edit_load('content/edit');
    }

    mw.on.hashParam("action", function (pval) {

        if (pval === false) {
            mw.tools.classNamespaceDelete(document.body, 'action-')
        }

        mainTreeSetActiveItems()

        if (pval === false) {
            mw.$('#pages_edit_container').removeAttr('page-id');
            mw_clear_edit_module_attrs();
            mw.$(".fix-tabs").removeClass('fix-tabs');
        }


        mw.$(".js-top-save").hide();

        window.scrollTo(0, 0);
        mw.$("#pages_edit_container").stop();
        mw.$('#pages_edit_container').removeAttr('mw_select_trash');
        mw.$(".mw_edit_page_right").css("overflow", "hidden");

        if (pval === false) {
            mw.$(".mw_edit_page_right").css("overflow", "hidden");
            edit_load('content/manager');
            return false;
        }
        var arr = pval.split(":");
        mw.tools.classNamespaceDelete(document.body, 'action-');
        if (arr[0] === 'new') {
            mw.contentAction.create(arr[1]);
            if (arr[0]) {
                $(document.body).addClass("action-"+arr[0] + '-' + arr[1]);
            }
        }
        else {

            mw.$(".active-bg").removeClass('active-bg');
            mw.$(".mw_action_nav").removeClass("not-active");
            var active_item = mw.$(".item_" + arr[1]);

            if (arr[0]) {
            $(document.body).addClass("action-"+arr[0]);
            }
            if (arr[0] == 'showposts') {
                active_item = mw.$(".content-item-" + arr[1]);
            }
            else if (arr[0] == 'showpostscat') {
                active_item = mw.$(".category-item-" + arr[1]);
            }

            if (arr[0] === 'editpage') {
                mw_select_page_for_editing(arr[1])
            }


            if (arr[0] === 'trash') {
                mw_select_trash(arr[0])
            }
            else if (arr[0] === 'showposts') {
                mw_set_edit_posts(arr[1])
            }
            else if (arr[0] === 'showpostscat') {
                mw_set_edit_posts(arr[1], true)
            }
            else if (arr[0] === 'editcategory') {
                mw_select_category_for_editing(arr[1])
            }
            else if (arr[0] === 'editpost') {

                mw_select_post_for_editing(arr[1]);


            } else if (arr[0] === 'addsubcategory') {
                mw_select_add_sub_category(arr[1]);
            }
        }

    });


    edit_load = function (module, callback) {
        if (mw.url.getHashParams(window.location.hash)['new_content'] === 'true') {
            var slide = false;
            mw.url.windowDeleteHashParam('new_content');
        }

        var action = mw.url.windowHashParam('action');
        var holder = $('#pages_edit_container');

        var time = 500;
        if (!action) {
            mw.$('.fade-window').removeClass('active');
        }

         edit_content_load_admin_spinner =  mw.spinner({
            element: '#mw-content-backend',
            size:40
        })


        setTimeout(function () {

            mw.load_module(module, holder, function () {
                mw.$('.fade-window').addClass('active')

                if (callback) callback.call();

            });
            edit_content_load_admin_spinner.remove()
        }, time)


    }

    function mw_select_category_for_editing($p_id) {

        mw_clear_edit_module_attrs();

        mw.$(".pages_tree_item.active-bg").removeClass('active-bg');
        mw.$(".category_element.active-bg").removeClass('active-bg');


        var active_item = mw.$(".category-item-" + $p_id);
        active_item.addClass('active-bg');


        mw.$('#pages_edit_container').removeAttr('parent_id');
        mw.$('#pages_edit_container').removeAttr('data-parent-category-id');
        mw.$('#pages_edit_container').attr('data-category-id', $p_id);
        mw.$(".mw_edit_page_right").css("overflow", "hidden");
        edit_load('categories/edit_category');
    }

    function mw_select_add_sub_category($p_id) {

        mw_clear_edit_module_attrs();


        mw.$('#pages_edit_container').removeAttr('parent_id');
        mw.$('#pages_edit_container').attr('data-category-id', 0);
        mw.$('#pages_edit_container').attr('data-parent-category-id', $p_id);
        mw.$(".mw_edit_page_right").css("overflow", "hidden");
        edit_load('categories/edit_category');
    }


    function mw_set_edit_posts(in_page, is_cat, c) {
        var is_cat = typeof is_cat === 'function' ? undefined : is_cat;
        var cont = mw.$('#pages_edit_container');
        cont
            .removeAttr('data-content-id')
            .removeAttr('data-page-id')
            .removeAttr('data-category-id')
            .removeAttr('data-selected-category-id')
            .removeAttr('data-parent-category-id')
            .removeAttr('subtype')
            .removeAttr('data-subtype')
            .removeAttr('data-content-id')
            .removeAttr('parent_id')
            .removeAttr('is_shop');
        //  .attr('content-id', in_page);
        mw.$('#pages_edit_container').removeAttr('content_type');
        mw.$('#pages_edit_container').removeAttr('subtype');
        mw.$('#pages_edit_container').removeAttr('subtype_value');
        mw.$('#pages_edit_container').removeAttr('content_type_filter');
        mw.$('#pages_edit_container').removeAttr('subtype_filter');
        mw.$('#pages_edit_container').removeAttr('categories_active_ids');
        mw.$('#pages_edit_container').removeAttr('data-categories_active_ids');

        mw.$('#pages_edit_container').removeAttr('data-active_ids');
        mw.$('#pages_edit_container').removeAttr('active_ids');
        mw.$('#pages_edit_container').removeAttr('content-id');
        mw.$('#pages_edit_container').removeAttr('category-id');


        mw.$(".pages_tree_item.active-bg").removeClass('active-bg');
        mw.$(".category_element.active-bg").removeClass('active-bg');


        if (in_page != undefined && is_cat == undefined) {
            cont.attr('data-page-id', in_page);
            var active_item = mw.$(".content-item-" + in_page);
            active_item.addClass('active-bg');
        }

        if (in_page != undefined && is_cat != undefined) {
            cont.attr('data-category-id', in_page);
            var active_item = mw.$(".category-item-" + in_page);
            active_item.addClass('active-bg');
        }

        var cat_id = mw.url.windowHashParam("category_id");
        if (cat_id) {
            cont.attr('data-category-id', cat_id);
        }


        mw.load_module('content/manager', '#pages_edit_container');
    }


    function mw_clear_edit_module_attrs() {
        var container = mw.$('#pages_edit_container');
        container
            .removeAttr('content_type')
            .removeAttr('subtype')
            .removeAttr('data-parent-category-id')
            .removeAttr('data-category-id')
            .removeAttr('data-category-id')
            .removeAttr('data-category-id')
            .removeAttr('content-id')
            .removeAttr('data-page-id')
            .removeAttr('content_type_filter')
            .removeAttr('subtype_filter');
    }

    function mw_select_trash(c) {
        var container = mw.$('#pages_edit_container');
        container.removeAttr('data-content-id')
            .removeAttr('data-page-id')
            .removeAttr('data-category-id')
            .removeAttr('data-selected-category-id')
            .removeAttr('data-keyword')
            .removeAttr('content_type_filter')
            .removeAttr('subtype_filter');

        mw.load_module('content/trash', '#pages_edit_container', function () {
            typeof c === 'function' ? c.call() : '';
        });
    }
    function mw_select_custom_content_for_editing($p_id, $type) {

        var active_item = $('#pages_tree_container_2351322597 .active-bg').first();
        var active_item_is_page = active_item.attr('data-page-id');

        mw.$('#pages_edit_container').removeAttr('content_type_filter');
        mw.$('#pages_edit_container').removeAttr('subtype_filter');

        $subtype = '';
        var res = $type.split(".");

        if (typeof(res[1]) == 'string') {

            $type = res[0];
            $subtype = res[1];

        }

        mw.$('.mw-admin-go-live-now-btn').attr('content-id', $p_id);


        var active_item_is_category = active_item.attr('data-category-id');
        if (active_item_is_category != undefined) {

            mw.$('#pages_edit_container').attr('data-parent-category-id', active_item_is_category);

            var active_bg = document.querySelector('#pages_tree_container_2351322597 .active-bg');

            var active_item_parent_page = mw.tools.firstParentWithClass(active_bg, 'have_category');

            if (active_item_parent_page == false) {
                var active_item_parent_page = mw.tools.firstParentWithClass(active_bg, 'is_page');

            }

            if (active_item_parent_page == false) {
                var active_item_parent_page = mw.tools.firstParentWithClass(active_bg, 'pages_tree_item');

            }


            if (active_item_parent_page != false) {
                var active_item_is_page = active_item_parent_page.getAttribute('data-page-id');

            }

        } else {
            mw.$('#pages_edit_container').removeAttr('data-parent-category-id');

        }
        mw_clear_edit_module_attrs()

        if (active_item_is_page != undefined) {
            mw.$('#pages_edit_container').attr('data-parent-page-id', active_item_is_page);

        } else {
            mw.$('#pages_edit_container').removeAttr('data-parent-page-id');

        }
        mw.$('#pages_edit_container').removeAttr('data-subtype');
        mw.$('#pages_edit_container').removeAttr('is_shop');
        mw.$('#pages_edit_container').attr('data-content-id', $p_id);
        if ($subtype != undefined) {
            if ($subtype == 'product') {
                mw.$('#pages_edit_container').attr('is_shop', 'y');
            }

            mw.$('#pages_edit_container').attr('subtype', $subtype);
        } else {
            mw.$('#pages_edit_container').attr('subtype', 'post');
        }
        mw.$('#pages_edit_container').attr('content_type', $type);


        mw.$(".mw_edit_page_right").css("overflow", "hidden");
        edit_load('content/edit');
    }
    function mw_select_post_for_editing($p_id, $subtype) {

        var active_item = $('#pages_tree_container_2351322597 .active-bg').first();
        var active_item_is_page = active_item.attr('data-page-id');

        mw.$('#pages_edit_container')
            .removeAttr('data-parent-category-id')
            .removeAttr('data-category-id')
            .removeAttr('data-category-id')
            .removeAttr('data-category-id')
            .removeAttr('content-id')
            .removeAttr('content-id')
            .removeAttr('content-id')
            .removeAttr('subtype')
            .removeAttr('content_type_filter')
            .removeAttr('subtype_filter')
            .removeAttr('subtype_value')
            .removeAttr('data-page-id');


        mw.$('.mw-admin-go-live-now-btn').attr('content-id', $p_id);


        var active_item_is_category = active_item.attr('data-category-id');
        if (active_item_is_category != undefined) {

            mw.$('#pages_edit_container').attr('data-parent-category-id', active_item_is_category);

            var active_bg = document.querySelector('#pages_tree_container_2351322597 .active-bg');

            var active_item_parent_page = mw.tools.firstParentWithClass(active_bg, 'have_category');

            if (active_item_parent_page == false) {
                var active_item_parent_page = mw.tools.firstParentWithClass(active_bg, 'is_page');

            }

            if (active_item_parent_page == false) {
                var active_item_parent_page = mw.tools.firstParentWithClass(active_bg, 'pages_tree_item');

            }


            if (active_item_parent_page != false) {
                var active_item_is_page = active_item_parent_page.getAttribute('data-page-id');

            }

        } else {
            mw.$('#pages_edit_container').removeAttr('data-parent-category-id');

        }


        if (active_item_is_page != undefined) {
            mw.$('#pages_edit_container').attr('data-parent-page-id', active_item_is_page);

        } else {
            mw.$('#pages_edit_container').removeAttr('data-parent-page-id');

        }
        mw.$('#pages_edit_container').removeAttr('data-subtype');
        mw.$('#pages_edit_container').removeAttr('is_shop');
        mw.$('#pages_edit_container').attr('data-content-id', $p_id);
        if ($subtype != undefined) {
            if ($subtype == 'product') {
                mw.$('#pages_edit_container').attr('is_shop', 'y');
            }

            mw.$('#pages_edit_container').attr('subtype', $subtype);
        } else {
            mw.$('#pages_edit_container').attr('subtype', 'post');
        }
        mw.$(".mw_edit_page_right").css("overflow", "hidden");
        edit_load('content/edit');
    }

    function mw_add_product() {
        mw_select_post_for_editing(0, 'product')
    }
</script>



<div id="edit-content-row">
    
        <script>
            $(document).ready(function () {
                $('body > #mw-admin-container > .main').addClass('show-sidebar-tree');
                $(".js-tree").prependTo("body > #mw-admin-container .main.container");
                $(".js-tree").before($("body .main.container aside"));
            });
        </script>

        <div class="js-tree tree">
            <div class="tree-column-holder">

                <div class="fixed-side-column">
                    <div class="tree-show-hide-nav">

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input js-open-close-all-tree-elements" id="open-close-all-tree-elements" value="1"/>
                                <label class="custom-control-label d-flex align-items-center" style="cursor:pointer" for="open-close-all-tree-elements"><small class="text-muted">Open / Close</small></label>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function () {
                                $('.js-open-close-all-tree-elements').on('change', function () {
                                    if ($(this).is(':checked') == '1') {
                                        pagesTree.openAll();
                                    } else {
                                        pagesTree.closeAll();
                                    }
                                });
                            });
                        </script>

                        <div class="input-group mb-0 prepend-transparent">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-2"><i class="mdi mdi-magnify"></i></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" aria-label="Search" id="main-tree-search" placeholder="Search">
                        </div>
                    </div>

                    <div class="fixed-side-column-container mw-tree" id="pages_tree_container_2351322597">
                        <script>
                            var pagesTree;

                            var pagesTreeRefresh = function () {

                                var request = new XMLHttpRequest();
                                request.open('GET', 'http://127.0.0.1:8000/api/content/get_admin_js_tree_json', true);
                                request.send();
                                request.onload = function() {
                                    if (request.status >= 200 && request.status < 400) {

                                        var data = JSON.parse(request.responseText);
                                        if(!data || !data.length){
                                            data = [];
                                        }

                                            var treeTail = [
                                                {
                                                    title: 'Trash',
                                                    icon: 'mdi mdi-delete',
                                                    action: function () {
                                                        mw.url.windowHashParam('action', 'trash');
                                                    }
                                                }
                                            ];

                                            pagesTree = new mw.tree({
                                                data: data,
                                                element: $("#pages_tree_container_2351322597")[0],
                                                sortable: false,
                                                selectable: false,
                                                toggleSelect: false,
                                                id: 'admin-main-tree',
                                                append: treeTail,
                                                contextMenu: [
                                                    {
                                                        title: 'Edit',
                                                        icon: 'mdi mdi-pencil',
                                                        action: function (element, data, menuitem) {
                                                            if (data.type == 'category') {
                                                                window.location  = "http://127.0.0.1:8000/admin/category/" + data.id + "/edit";

                                                            } else if (data.type == 'page') {
                                                                window.location  = "http://127.0.0.1:8000/admin/page/" + data.id + "/edit";

                                                            }
                                                            else {
                                                                mw.url.windowHashParam("action", "edit" + data.type + ":" + data.id);

                                                            }

                                                        }
                                                    },
                                                    {
                                                        title: 'Move to trash',
                                                        icon: 'mdi mdi-close',
                                                        action: function (element, data, menuitem) {
                                                            if (data.type === 'category') {
                                                                mw.content.deleteCategory(data.id, function () {

                                                                    $('#' + pagesTree.options.id + '-' + data.type + '-' + data.id).fadeOut(function () {
                                                                        if (window.pagesTreeRefresh) {
                                                                            pagesTreeRefresh()
                                                                        }

                                                                    })
                                                                });
                                                            }
                                                            else {
                                                                mw.content.deleteContent(data.id, function () {
                                                                    $('#' + pagesTree.options.id + '-' + data.type + '-' + data.id, pagesTree.list).fadeOut(function () {
                                                                        if (window.pagesTreeRefresh) {
                                                                            pagesTreeRefresh()
                                                                        }
                                                                        ;
                                                                    })
                                                                });
                                                            }
                                                        }
                                                    }
                                                ]
                                            });
                                            mw.adminPagesTree = pagesTree;

                                            $(pagesTree).on("orderChange", function (e, item, data, old, local) {
                                                var obj = {ids: local};
                                                var url;
                                                if (item.type === 'category') {
                                                    url = "http://127.0.0.1:8000/api/category/reorder";
                                                }
                                                else {
                                                    url = "http://127.0.0.1:8000/api/content/reorder";
                                                }
                                                $.post(url, obj, function () {
                                                    mw.reload_module('#mw_page_layout_preview');
                                                    mw.notification.success('Changes are saved')
                                                });
                                            });
                                            $(pagesTree).on("ready", function () {
                                                $('#main-tree-search').on('input', function () {
                                                    var val = this.value.toLowerCase().trim();
                                                    if (!val) {
                                                        pagesTree.showAll();
                                                    }
                                                    else {
                                                        pagesTree.options.data.forEach(function (item) {
                                                            if (item.title.toLowerCase().indexOf(val) === -1) {
                                                                pagesTree.hide(item);
                                                            }
                                                            else {
                                                                pagesTree.show(item);
                                                            }
                                                        });
                                                    }
                                                })

                                                $('.mw-tree-item-title', pagesTree.list).on('click', function () {
                                                    $('li.selected', pagesTree.list).not(mw.tools.firstParentWithTag(this, 'li')).each(function () {
                                                        pagesTree.unselect(this)
                                                    });
                                                    var li = mw.tools.firstParentWithTag(this, 'li'),
                                                        data = li._data,
                                                        action;
                                                    if (!$(li).hasClass('mw-tree-additional-item')) {
                                                        if (data.type === 'page') {
                                                            action = 'editpage';
                                                        }
                                                        if (data.subtype === 'dynamic' || data.subtype === 'shop') {
                                                            action = 'showposts';
                                                        }
                                                        if (data.type === 'category') {
                                                            action = 'showpostscat';
                                                        }
                                                        mw.url.windowHashParam("action", action + ":" + data.id);
                                                    }
                                                });
                                                mainTreeSetActiveItems()

                                                $("#edit-content-row .tree-column").resizable({
                                                    handles: "e",
                                                    resize: function (e, ui) {
                                                        var root = mw.$(ui.element);
                                                        mw.$('.fixed-side-column', root).width(root.width())
                                                    },
                                                    minWidth: 200
                                                })
                                            })
                                    }
                                };




                            };

                            if (window.pagesTreeRefresh) {
                                pagesTreeRefresh()
                            }


                        </script>

                        
                                                                    </div>
                </div>
            </div>
        </div>
    
    <script>
        $(window).on('load', function () {
            if (!mw.url.windowHashParam("action")) {
                edit_load('content/manager');
            }
            mw.on.hashParam('view', function () {
                edit_load('content/manager');
            })
        });
    </script>

    <div id="pages_edit_container"    ></div>
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
<?php /**PATH D:\laragon\www\LARAVEL\microweber-master\storage\framework\views/d32fe06f83d5cb52758eec55987b0798c521707e.blade.php ENDPATH**/ ?>