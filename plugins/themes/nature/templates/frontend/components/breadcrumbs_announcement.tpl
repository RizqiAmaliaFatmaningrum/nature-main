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
	
<nav class="cmp_breadcrumbs cmp_breadcrumbs_announcement" role="navigation" aria-label="{translate key="navigation.breadcrumbLabel"}">
        <ol>
            <div class="bg-[#006A6829] text-[#00504F] rounded-2xl h-10 p-2 relative">
                <li>
                    <a href="{url page="index" router=$smarty.const.ROUTE_PAGE}">
                        {translate key="common.homepageNavigationLabel"}
                    </a>
                    <span class="separator">{translate key="navigation.breadcrumbSeparator"}</span>
                </li>
                <li>
                    <a href="{url page="announcement" router=$smarty.const.ROUTE_PAGE}">
                        {translate key="announcement.announcements"}
                    </a>
                    <span class="separator">{translate key="navigation.breadcrumbSeparator"}</span>
                </li>
                <li>
                    <div class="current bg-[#00504F] rounded-r-2xl h-10 p-2 absolute top-0">
                        <span aria-current="page" class="text-white whitespace-nowrap overflow-hidden">{$currentTitle|escape}</span>
                    </div>
                </li>
            </div>
        </ol>
    </nav>
{* </div> *}

