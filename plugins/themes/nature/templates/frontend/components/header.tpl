{**
* lib/pkp/templates/frontend/components/header.tpl
*
* Copyright (c) 2014-2021 Simon Fraser University
* Copyright (c) 2003-2021 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* @brief Common frontend site header.
*
* @uses $isFullWidth bool Should this page be displayed without sidebars? This
* represents a page-level override, and doesn't indicate whether or not
* sidebars have been configured for thesite.
*}

{* Determine whether a logo or title string is being displayed *}
{assign var="showingLogo" value=true}
{if !$displayPageHeaderLogo}
{assign var="showingLogo" value=false}
{/if}

{assign var="onlineIssn" value=$currentJournal->getSetting('onlineIssn')}
{assign var="printIssn" value=$currentJournal->getSetting('printIssn')}

<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{if !$pageTitleTranslated}{capture assign="pageTitleTranslated"}{translate key=$pageTitle}{/capture}{/if}
{include file="frontend/components/headerHead.tpl"}

<body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}{if
    $showingLogo} has_site_logo{/if}" dir="{$currentLocaleLangDir|escape|default:"ltr"}">
    <span class="hidden">Nature OJS 3 Theme by openjournaltheme.com theme</span>
    {* maintenance *}
    {if $isMaintenanceMode}
    <div id="maintenance_container">
        <!-- Other elements here -->
        <div id="maintenance_content" style="text-align:center; color: #DBB539; padding: 5px 0">
            <i class="fa fa-wrench mr-3"> </i> <a href="https://openjournaltheme.com"
                style="color: #DBB539; padding: 5px 0">Site is in maintenance mode</a>
        </div>
    </div>
    {/if}

    <div class="pkp_structure_page">

        {* Header *}
        <header class="bg-white" id="headerNavigationContainer" role="banner">
            <button class="pkp_site_nav_toggle">
                <span>Open Menu</span>
            </button>
            {if !$requestedPage || $requestedPage === 'index'}
            <h1 class="pkp_screen_reader">
                {if $currentContext}
                {$displayPageHeaderTitle|escape}
                {else}
                {$siteTitle|escape}
                {/if}
            </h1>
            {/if}
            {capture assign="homeUrl"}
            {url page="index" router=$smarty.const.ROUTE_PAGE}
            {/capture}

            <div class="container mx-auto">
                <div class="p-5 bg-[#F4FEFD] shadow xl:flex xl:items-center xl:justify-between">
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-dark hover:text-[#00504F] cursor-pointer">
                            <img class="h-10 inline" src="">
                            <a href="{$homeUrl}" class="is_text">{$displayPageHeaderTitle|escape}</a>
                        </span>

                        {* <div class="flex items-center px-4">
                            <button id="hamburger" name="hamburger" type="button" class="block right-4 xl:hidden">
                                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                                <span
                                    class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                            </button>
                        </div> *}
                        <button id="hamburger">
                            <span class="text-3xl cursor-pointer mx-2 xl:hidden block">
                                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                            </span>
                        </button>
                    </div>

                    {capture assign="primaryMenu"}
                    {load_menu name="primary" id="main-navigation" ulClass="nav navbar-nav"}
                    {/capture}
                    <nav id="navbar" class="navbar xl:flex xl:items-center xl:justify-between">
                        {if !empty(trim($primaryMenu)) || $currentContext}
                        <!-- Primary navigation menu for the current application -->
                        <div class="font-bold">
                            {$primaryMenu}
                        </div>
                        {/if}

                        <nav aria-label="{translate|escape key="common.navigation.user"}" class="md:col-12 pr-0">
                            <button class="bg-[#FF8E06] text-white font-bold my-0 py-2 px-4 rounded-3xl ml-4">
                                {load_menu name="user" id="navigationUser"
                                ulClass="nav nav-pills tab-list pull-right flex"}
                            </button>
                        </nav>
                    </nav>
                </div>
            </div>


            <div class="container mx-auto">
                {if $displayPageHeaderLogo}
                <a href="{$homeUrl}" class="is_img">
                    <img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}"
                        width="{$displayPageHeaderLogo.width|escape}" height="{$displayPageHeaderLogo.height|escape}"
                        {if $displayPageHeaderLogo.altText !='' }alt="{$displayPageHeaderLogo.altText|escape}" {/if} />
                </a>
                {elseif $displayPageHeaderTitle}
                <a href="{$homeUrl}" class="is_text text-2xl text-center font-bold">{$displayPageHeaderTitle|escape}</a>
                {else}
                <a href="{$homeUrl}" class="is_img">
                    <img src="{$baseUrl}/templates/images/structure/logo.png" alt="{$applicationName|escape}"
                        title="{$applicationName|escape}" class="w-48 h-24 object-contain" />
                </a>
                {/if}

                <div class="bg-[#00504F] text-white py-10 px-40 z-10">
                    <h3 class="text-3xl font-bold mb-3">About Juornal</h3>
                    {if $journalDescription}
                    <div class="text-justify">
                        {$journalDescription}
                    </div>
                    {/if}
                    {* <p>In recent years, artificial intelligence (AI) has emerged as a transformative force, reshaping
                        the landscape of various industries and aspects of our daily lives. The rapid advancements in
                        machine learning axlorithms and computational power have propelled AI into the forefront of
                        technological innovation. From virtual personal assistants and recommendation systems to complex
                        autonomous vehicles and medical diagnostics, AI applications continue to evolve, offering
                        unprecedented possibilities. However, with the promise of efficiency and convenience comes a set
                        of ethical considerations and challenges. As we navigate this era of AI integration, striking a
                        balance between innovation and responsible AI development becomes paramount, ensuring that the
                        benefits of artificial intelligence are harnessed while mitigating potential risks and ethical
                        dilemmas.</p> *}
                </div>
                {* <div class="bg-[#F4FEFD] ">
                    <div class=" rounded-3xl p-10">
                        <div class="flex">
                            <div class="w-30 h-20 bg-[#DAE4E3] rounded-3xl flex p-4 m-2">
                                <p class="text-lg m-auto color-[#00504F] font-bold">Sumbit Your Paper</p>
                                <div class="w-10 h-10 bg-[#00504F] rounded-full flex ">
                                    <button href="#" class="text-lg m-auto">➕</button>
                                </div>
                            </div>
                            <div class="flex-1 bg-[#DAE4E3] rounded-3xl p-4 m-2">
                                <p>current issues</p>
                            </div>
                            <div class="flex-initial w-64 bg-[#F4FEFD] rounded-3xl p-4 m-2">
                                <div class="h-auto md:8/12 bg-[#DAE4E3] p-5 rounded-2xl">
                                    <button
                                        class="w-28 h-full bg-[#00504F] flex justify-center item-center rounded-2xl">🔍</button>
                                </div>
                                <div class=" md:grid-cols-1">
                                    <div class="w-30 bg-[#DAE4E3] rounded-3xl p-4 m-2">
                                        {if $onlineIssn}
                                        <a href="https://portal.issn.org/resource/issn/{$onlineIssn}"><span
                                                class="issn">Online ISSN : {$onlineIssn}</span></a>
                                        {/if}
                                    </div>
                                    <div class="w-30 bg-[#DAE4E3] rounded-3xl  p-4 m-2">
                                        {if $printIssn}
                                        <a href="https://portal.issn.org/resource/issn/{$printIssn}"><span
                                                class="issn">Print ISSN : {$printIssn}</span></a>
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> *}


            </div>



            {* Skip to content nav links *}
            {* {include file="frontend/components/skipLinks.tpl"} *}

            {* <div class="pkp_head_wrapper"> *}
                {* <div class="pkp_site_name_wrapper">
                    <button class="pkp_site_nav_toggle">
                        <span>Open Menu</span>
                    </button>
                    {if !$requestedPage || $requestedPage === 'index'}
                    <h1 class="pkp_screen_reader">
                        {if $currentContext}
                        {$displayPageHeaderTitle|escape}
                        {else}
                        {$siteTitle|escape}
                        {/if}
                    </h1>
                    {/if}

                </div> *}


                {* </div><!-- .pkp_head_wrapper --> *}
        </header><!-- .pkp_structure_head -->

        {* Search form *}
        {* <div>

            {if $currentContext && $requestedPage !== 'search'}
            <div class="pkp_navigation_search_wrapper">
                <a href="{url page="search"}" class="pkp_search pkp_search_desktop">
                    <span class="fa fa-search" aria-hidden="true"></span>
                    {translate key="common.search"}
                </a>
            </div>
            {/if}
        </div> *}



        <div class="lg:flex bg-[#F4FEFD] rounded-t-3xl pkp_structure_content container">

            <aside id="left" class="lg:w-1/4 xl:w-1/4 m-2 col-md-3">
            </aside>
            <main class="lg:w-1/2 xl:w-1/2 bg-[#DAE4E3] rounded-3xl p-4 m-2 col-xs-12 col-sm-10 col-md-6"
                role="main">
