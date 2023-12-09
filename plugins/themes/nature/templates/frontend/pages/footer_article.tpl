{**
* templates/frontend/pages/footer_article.tpl
*
* Copyright (c) 2014-2021 Simon Fraser University
* Copyright (c) 2003-2021 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* @brief Common site frontend footer.
*
* @uses $isFullWidth bool Should this page be displayed without sidebars? This
* represents a page-level override, and doesn't indicate whether or not
* sidebars have been configured for thesite.
*}

</div><!-- pkp_structure_main -->

{* Sidebars *}
{if empty($isFullWidth)}
{capture assign="sidebarCode"}{call_hook name="Templates::Common::Sidebar"}{/capture}
{if $sidebarCode}

<div class="pkp_structure_sidebar right bg-[#F4FEFD]" role="complementary"
    aria-label="{translate|escape key="common.navigation.sidebar"}">
    {$sidebarCode}

    {* search *}
    <div class="flex-initial w-64 p-2">
        <div class="h-auto items-center justify-between md:8/12 bg-[#DAE4E3] rounded-2xl">
            <section class="flex">
                <input type="text" class="w-full h-10 font-medium ml-2 focus:outline-none bg-transparent"
                    placeholder="Search...">
                <a href="http://localhost/nature-main1/index.php/MS/search"
                    class="w-10 h-10 bg-[#00504F] flex justify-center item-center rounded-2xl p-3"><em
                        class="fa fa-search" style="margin-right: -3px;"></em></a>
            </section>
        </div>
    </div>

    {* issue *}
    {if $issue || $section || $categories}
    <div class="item issue">
        {if $issue}
        <section class="sub_item bg-[#DAE4E3] mb-5 rounded-2xl text-[#00504F] flex flex-col pl-5"
            style="width: 250px; height: 80px;">
            <h2 class="label font-bold mb-4">
                {translate key="issue.issue"}
            </h2>
            <div class="value inline-block bg-[#00504F] text-white rounded-2xl text-white px-4" style="width: 250px;">
                <a class="title" href="{url page="issue" op="view" path=$issue->getBestIssueId()}">
                    {$issue->getIssueIdentification()}
                </a>
            </div>
        </section>
        {/if}

        {if $section}
        <section class="sub_item bg-[#DAE4E3] mb-5 rounded-2xl text-[#00504F] flex flex-col pl-5 "
            style="width: 250px; height: 70px;">
            <h2 class="label font-bold mb-4">
                {translate key="section.section"}
            </h2>
            <div class="value inline-block bg-[#00504F] rounded-2xl text-white px-4" style="width: 230px;">
                {$section->getLocalizedTitle()|escape}
            </div>
        </section>
        {/if}

        {if $categories}
        <section class="sub_item">
            <h2 class="label">
                {translate key="category.category"}
            </h2>
            <div class="value">
                <ul class="categories">
                    {foreach from=$categories item=category}
                    <li><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category"
                            path=$category->getPath()|escape}">{$category->getLocalizedTitle()|escape}</a>
                    </li>
                    {/foreach}
                </ul>
            </div>
        </section>
        {/if}
    </div>
    {/if}


    {* publised *}
    {if $publication->getData('datePublished')}
    <div class="item published">
        <section class="sub_item bg-[#DAE4E3] rounded-2xl text-[#00504F] flex flex-col pl-5"
            style="width: 250px; height: 60px;">
            <h1 class="label font-bold mb-2">
                {translate key="submissions.published"}
            </h1>
            <div class="value">
                {* If this is the original version *}
                {if $firstPublication->getID() === $publication->getId()}
                <span>{$firstPublication->getData('datePublished')|date_format:$dateFormatShort}</span>
                {* If this is an updated version *}
                {else}
                <span>{translate key="submission.updatedOn"
                    datePublished=$firstPublication->getData('datePublished')|date_format:$dateFormatShort
                    dateUpdated=$publication->getData('datePublished')|date_format:$dateFormatShort}</span>
                {/if}
            </div>
        </section>
        {if count($article->getPublishedPublications()) > 1}
        <section class="sub_item versions">
            <h2 class="label">
                {translate key="submission.versions"}
            </h2>
            <ul class="value">
                {foreach from=array_reverse($article->getPublishedPublications()) item=iPublication}
                {capture assign="name"}{translate key="submission.versionIdentity"
                datePublished=$iPublication->getData('datePublished')|date_format:$dateFormatShort
                version=$iPublication->getData('version')}{/capture}
                <li>
                    {if $iPublication->getId() === $publication->getId()}
                    {$name}
                    {elseif $iPublication->getId() === $currentPublication->getId()}
                    <a href="{url page="article" op="view" path=$article->getBestId()}">{$name}</a>
                    {else}
                    <a href="{url page="article" op="view"
                        path=$article->getBestId()|to_array:"version":$iPublication->getId()}">{$name}</a>
                    {/if}
                </li>
                {/foreach}
            </ul>
        </section>
        {/if}
    </div>
    {/if}

</div><!-- pkp_sidebar.left -->
{/if}
{/if}
</div><!-- pkp_structure_content -->

<div class="pkp_structure_footer_wrapper" role="contentinfo">
    <a id="pkp_content_footer"></a>
    <div class="bg-[#00504F] text-white">
        <div class="pkp_structure_footer">

            {if $pageFooter}
            <div class="pkp_footer_content">
                {$pageFooter}
            </div>
            {/if}

            <div class="pkp_brand_footer" role="complementary">
                <a href="{url page="about" op="aboutThisPublishingSystem"}">
                    <img alt="{translate key="about.aboutThisPublishingSystem"}" src="{$baseUrl}/{$brandImage}">
                </a>
            </div>
        </div>
    </div>
</div><!-- pkp_structure_footer_wrapper -->

</div><!-- pkp_structure_page -->

{load_script context="frontend"}

{call_hook name="Templates::Common::Footer::PageFooter"}
</body>

</html>
