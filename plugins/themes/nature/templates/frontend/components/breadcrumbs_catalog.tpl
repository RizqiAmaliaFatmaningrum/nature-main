{**
 * templates/frontend/components/breadcrumbs_catalog.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display a breadcrumb nav item showing the location in the catalog.
 *  This only supports one-level of nesting, as does the category hierarchy data.
 *
 * @uses $type string What kind of page should we use to construct urls
 *       (category, series, new)?
 * @uses $parent Category A parent category if one exists
 * @uses $currentTitle string The title to use for the current page.
 * @uses $currentTitleKey string Translation key for title of current page.
 *}

<nav class="inline-block" role="navigation" aria-label="{translate key="navigation.breadcrumbLabel"}">
	<ol>
		<div class="bg-[#006A6829] text-[#00504F] rounded-2xl h-10 p-2 relative flex items-center">
			<li class="inline-block">
				<a href="{url page="index" router=$smarty.const.ROUTE_PAGE}" class="inline-block text-decoration-none">
					{translate key="common.homepageNavigationLabel"}
				</a>
				<span class="separator text-light px-1">{translate key="navigation.breadcrumbSeparator"}</span>
			</li>
			{if $parent}
				<li class="inline-block">
					<a href="{url op=$type path=$parent->getPath()}" class="inline-block text-decoration-none">
						{$parent->getLocalizedTitle()|escape}
					</a>
					<span class="separator text-light px-1">{translate key="navigation.breadcrumbSeparator"}</span>
				</li>
			{/if}
			<li class="inline-block" aria-current="page">
				<div class="bg-[#00504F] rounded-r-2xl h-10 p-2 absolute top-0 flex items-center">
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

<nav class="inline-block" role="navigation" aria-label="{translate key="navigation.breadcrumbLabel"}">
	<ol class="pkp_unstyled_list mb-12 py-2 pl-0 leading-8 text-sm">
		<div class="bg-[#006A6829] text-[#00504F] rounded-2xl h-10 p-2 relative flex items-center">
			<li class="inline-block">
				<a href="{url page="index" router=$smarty.const.ROUTE_PAGE}" class="inline-block text-decoration-none">
					{translate key="common.homepageNavigationLabel"}
				</a>
				<span class="separator text-light px-1">{translate key="navigation.breadcrumbSeparator"}</span>
			</li>
			<li class="inline-block">
				<a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}" class="inline-block text-decoration-none">
					{translate key="navigation.archives"}
				</a>
				<span class="separator text-light px-1">{translate key="navigation.breadcrumbSeparator"}</span>
			</li>
			<li class="inline-block" aria-current="page">
				<div class="bg-[#00504F] rounded-r-2xl h-10 p-2 absolute top-0 flex items-center">
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
