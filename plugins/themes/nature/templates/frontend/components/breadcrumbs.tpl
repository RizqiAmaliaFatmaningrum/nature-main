{**
 * templates/frontend/components/breadcrumbs.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display a breadcrumb nav item showing the current page. This basic
 *  version is for top-level pages which only need to show the Home link. For
 *  category- and series-specific breadcrumb generation, see
 *  templates/frontend/components/breadcrumbs_catalog.tpl.
 *
 * @uses $currentTitle string The title to use for the current page.
 * @uses $currentTitleKey string Translation key for title of current page.
 *}

<nav class="inline-block" role="navigation" aria-label="{translate key='navigation.breadcrumbLabel'}">
	<ol class="pkp_unstyled_list py-2 pl-0 leading-8 text-sm">
		<div class="bg-[#006A6829] text-[#00504F] rounded-2xl h-10 p-2 relative flex items-center">
			<li class="inline-block">
				<a href="{url page='index' router=$smarty.const.ROUTE_PAGE}" class="inline-block text-decoration-none">
					{translate key='common.homepageNavigationLabel'}
				</a>
				<span class="separator text-light px-1">{translate key='navigation.breadcrumbSeparator'}</span>
			</li>
			<li class="inline-block">
				<div class="current bg-[#00504F] rounded-r-2xl h-10 p-2 absolute top-0 flex items-center">
					<span aria-current="page" class="text-white whitespace-nowrap overflow-hidden">
						{if $currentTitleKey}
							{translate key=$currentTitleKey}
						{else}
							{$currentTitle|escape}
						{/if}
					</span>
				</div>
			</li>
		</div>
	</ol>
</nav>


