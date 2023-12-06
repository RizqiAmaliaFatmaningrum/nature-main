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
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}
{strip}
	{* Determine whether a logo or title string is being displayed *}
	{assign var="showingLogo" value=true}
	{if !$displayPageHeaderLogo}
		{assign var="showingLogo" value=false}
	{/if}
{/strip}
<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{if !$pageTitleTranslated}{capture assign="pageTitleTranslated"}{translate key=$pageTitle}{/capture}{/if}
{include file="frontend/components/headerHead.tpl"}
<body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}{if $showingLogo} has_site_logo{/if}" dir="{$currentLocaleLangDir|escape|default:"ltr"}">
	<div class="pkp_structure_page">
		{* Header *}
		<header class="pkp_structure_head" id="headerNavigationContainer" role="banner">
			{* Skip to content nav links *}
			{include file="frontend/components/skipLinks.tpl"}

			<div class="pkp_head_wrapper">

				<div class="pkp_site_name_wrapper">
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
					<div class="pkp_site_name">
					{capture assign="homeUrl"}
						{url page="index" router=$smarty.const.ROUTE_PAGE}
					{/capture}
					{if $displayPageHeaderLogo}
						<a href="{$homeUrl}" class="is_img">
							<img src="{$publicFilesDir}/{$displayPageHeaderLogo.uploadName|escape:"url"}" width="{$displayPageHeaderLogo.width|escape}" height="{$displayPageHeaderLogo.height|escape}" {if $displayPageHeaderLogo.altText != ''}alt="{$displayPageHeaderLogo.altText|escape}"{/if} />
						</a>
					{elseif $displayPageHeaderTitle}
						<a href="{$homeUrl}" class="is_text">{$displayPageHeaderTitle|escape}</a>
					{else}
						<a href="{$homeUrl}" class="is_img">
							<img src="{$baseUrl}/templates/images/structure/logo.png" alt="{$applicationName|escape}" title="{$applicationName|escape}" width="180" height="90" />
						</a>
					{/if}
					</div>
				</div>
				{* home *}
				{capture assign="primaryMenu"}
					{load_menu name="primary" id="navigationPrimary" ulClass="pkp_navigation_primary"}
				{/capture}
				<nav class="pkp_site_nav_menu" aria-label="{translate|escape key="common.navigation.site"}">

					<a id="siteNav"></a>
					<div class="pkp_navigation_primary_row">
						<div class="pkp_navigation_primary_wrapper">
							{* Primary navigation menu for current application *}
							{$primaryMenu}

							{* Search form *}
							{if $currentContext && $requestedPage !== 'search'}
								<div class="pkp_navigation_search_wrapper">
									<a href="{url page="search"}" class="pkp_search pkp_search_desktop">
										<span class="fa fa-search" aria-hidden="true"></span>
										{translate key="common.search"}
									</a>
								</div>
							{/if}
						</div>
					</div>
					<div class="pkp_navigation_user_wrapper" id="navigationUserWrapper">
						{load_menu name="user" id="navigationUser" ulClass="pkp_navigation_user" liClass="profile"}
					</div>
				</nav>
			</div><!-- .pkp_head_wrapper -->

		</header><!-- .pkp_structure_head -->
				
		{* <h3 class="text-5xl font-bold">aisyah</h3> *}
				{*about jurnal*}
				<div class="container mx-auto">
					<div class="bg-[#00504F] text-white p-10">
					<img src="images/gambar.jpg">
					<h3 class="text-3xl font-bold">About Jurnal</h3>
						<p>In recent years, artificial intelligence (AI) has emerged as a transformative force, reshaping the landscape of various industries and aspects of our daily lives. The rapid advancements in machine learning algorithms and computational power have propelled AI into the forefront of technological innovation. From virtual personal assistants and recommendation systems to complex autonomous vehicles and medical diagnostics, AI applications continue to evolve, offering unprecedented possibilities. However, with the promise of efficiency and convenience comes a set of ethical considerations and challenges. As we navigate this era of AI integration, striking a balance between innovation and responsible AI development becomes paramount, ensuring that the benefits of artificial intelligence are harnessed while mitigating potential risks and ethical dilemmas.</p>
					</div>
				</div>
				{* <div class="container mx-auto bg-[#F4FEFD]">
					<div class="border rounded-t-3xl p-10">
						<div class="flex"> *}

							{* left *}
							{* <div class="flex-2 p-4 m-2">
								<div class="w-30 h-20 bg-[#DAE4E3] rounded-2xl flex p-4 m-2">
									<p class="text-lg m-auto color-[#00504F] font-bold">Sumbit Your Paper</p>
										<div class="w-10 h-10 bg-[#00504F] rounded-full flex ">
											<a href="https://demo.openjournaltheme.com/novelty/about/submissions" class="text-lg m-auto">➕	</a>
										</div>
								</div>
							</div>

							<div class="flex-1 bg-[#DAE4E3] p-4 m-2 rounded-2xl">
								<p>current issues</p>
							</div> *}

							{* search *}
							 <div class="flex-initial w-64 p-4 m-2">
								<div class="h-auto items-center justify-between md:8/12 bg-[#DAE4E3] rounded-2xl">
									<section class="flex">
										<input type="text" class="w-full h-10 font-medium ml-2 focus:outline-none bg-transparent" placeholder="Search...">
										<a href="http://localhost/nature-main1/index.php/MS/search" class="w-10 h-10 bg-[#00504F] flex justify-center item-center rounded-2xl p-3"><em class="fa fa-search" style="margin-right: -3px;"></em></a>
									</section>
								</div>
							</div>
						{* </div>
					</div>
				</div> *}

		{* Wrapper for page content and sidebars *}
		{if $isFullWidth}
			{assign var=hasSidebar value=0}
		{/if}
		<div class="pkp_structure_content{if $hasSidebar} has_sidebar{/if}">
			<div class="pkp_structure_left col-xs-12">  </div>
				<div class="pkp_structure_main col-xs-12 col-md-6 col-sm-10 bg-[#DAE4E3] rounded-t-lg" role="main">
					{* <main class="pkp_structure_main col-xs-12 col-sm-10 col-md-6"> *}

