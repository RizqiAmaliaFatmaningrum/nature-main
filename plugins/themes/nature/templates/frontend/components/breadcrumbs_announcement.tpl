{**
 * templates/frontend/components/breadcrumbs_announcement.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Display a breadcrumb nav item for announcements.
 *
 * @uses $currentTitle string The title to use for the current page.
 * @uses $currentTitleKey string Translation key for title of current page.
 *}

{* <div class="w-10 h-10 bg-[#006A68]"> *}
	
<nav class="inline-block" role="navigation" aria-label="{translate key="navigation.breadcrumbLabel"}">
        <ol class="pkp_unstyled_list mb-12 py-2 pl-0 leading-8 text-sm">
            <div class="bg-[#006A6829] text-[#00504F] rounded-2xl h-10 p-2 relative flex items-center">
                <li class="inline-block">
                    <a href="{url page="index" router=$smarty.const.ROUTE_PAGE}" class="inline-block text-decoration-none">
                        {translate key="common.homepageNavigationLabel"}
                    </a>
                    <span class="separator text-light px-2">{translate key="navigation.breadcrumbSeparator"}</span>
                </li>
                <li class="inline-block">
                    <a href="{url page="announcement" router=$smarty.const.ROUTE_PAGE}" class="inline-block text-decoration-none">
                        {translate key="announcement.announcements"}
                    </a>
                    <span class="separator text-light px-2">{translate key="navigation.breadcrumbSeparator"}</span>
                </li>
                <li class="inline-block">
                    <div class="current bg-[#00504F] rounded-r-2xl h-10 p-2 absolute top-0">
                        <span aria-current="page" class="text-white whitespace-nowrap overflow-hidden">{$currentTitle|escape}</span>
                    </div>
                </li>
            </div>
        </ol>
    </nav>
{* </div> *}

