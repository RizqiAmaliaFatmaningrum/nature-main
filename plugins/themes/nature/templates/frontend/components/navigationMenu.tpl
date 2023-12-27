{**
 * templates/frontend/components/navigationMenu.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Primary navigation menu list for OJS
 *
 * @uses navigationMenu array Hierarchical array of navigation menu item assignments
 * @uses id string Element ID to assign the outer <ul>
 * @uses ulClass string Class name(s) to assign the outer <ul>
 * @uses liClass string Class name(s) to assign all <li> elements
 *}

{if $navigationMenu}
    <ul id="{$id|escape}" class="{$ulClass|escape} xl:flex xl:items-center xl:justify-between z-[-1] xl:z-auto xl:static xl:w-auto xl:py-0 py-4 top-[-400px] transition-all ease-in duration-5000 pkp_nav_list">
        {foreach key=field item=navigationMenuItemAssignment from=$navigationMenu->menuTree}
            {if !$navigationMenuItemAssignment->navigationMenuItem->getIsDisplayed()}
                {continue}
            {/if}
            {assign var="hasChildren" value=false}
            {if !empty($navigationMenuItemAssignment->children)}
                {assign var="hasChildren" value=true}
            {/if}
            <li class="relative mx-4 my-0 xl:my-0 text-[#00504F] hover:text-[#00504F] {$liClass|escape}{if $hasChildren} group{/if}">
                <a href="{$navigationMenuItemAssignment->navigationMenuItem->getUrl()}" class="block py-2 text-gray-700 focus:outline-none  transition duration-300 ease-in-out"{if $hasChildren} role="button" aria-expanded="false" aria-haspopup="true"{/if}>
                    {$navigationMenuItemAssignment->navigationMenuItem->getLocalizedTitle()}
                    {* {if $hasChildren}
                        <span class="ml-2">&#9662;</span>
                    {/if} *}
                </a>
                {if $navigationMenuItemAssignment->navigationMenuItem->getIsChildVisible()}
                    <ul class="absolute hidden z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none group-hover:block" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        {foreach key=childField item=childNavigationMenuItemAssignment from=$navigationMenuItemAssignment->children}
                            {if $childNavigationMenuItemAssignment->navigationMenuItem->getIsDisplayed()}
                                <li class="{$liClass|escape} my-2 py-1" role="none">
                                    <a href="{$childNavigationMenuItemAssignment->navigationMenuItem->getUrl()}" class="text-gray-700 block px-4 py-2" role="menuitem" tabindex="-1">
                                        {$childNavigationMenuItemAssignment->navigationMenuItem->getLocalizedTitle()}
                                    </a>
                                </li>
                            {/if}
                        {/foreach}
                    </ul>
                {/if}
            </li>
        {/foreach}
    </ul>
{/if}
