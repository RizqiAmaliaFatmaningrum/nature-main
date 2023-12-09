{**
* templates/frontend/components/footer.tpl
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
                <input type="text" class="w-full h-10 font-medium ml-2 focus:outline-none bg-transparent" placeholder="Search...">
                <a href="http://localhost/nature-main1/index.php/MS/search" class="w-10 h-10 bg-[#00504F] flex justify-center item-center rounded-2xl p-3"><em class="fa fa-search" style="margin-right: -3px;"></em></a>
            </section>
        </div>
    </div>

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
