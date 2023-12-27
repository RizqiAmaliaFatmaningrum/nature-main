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
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 *}

</main><!-- pkp_structure_main -->

{assign var="onlineIssn" value=$currentJournal->getSetting('onlineIssn')}
{assign var="printIssn" value=$currentJournal->getSetting('printIssn')}

{* Sidebars *}
{if empty($isFullWidth)}
	{capture assign="sidebarCode"}{call_hook name="Templates::Common::Sidebar"}{/capture}
	{if $sidebarCode}
		<aside id="right" class="lg:w-1/4 xl:w-1/4 pkp_structure_sidebar left col-xs-12 col-sm-2 col-md-3" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
		{* <div class="font-bold text-[#00504F]">
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
		</div> *}
		{* {include file="frontend/pages/userLogin.tpl"} *}
		{* Additional Homepage Content additional_content*}
		{if $additionalHomeContent}
			<div class="">
				{* <div class="flex-2 bg-[#00504F] rounded-3xl p-4 m-2"> *}
				{$additionalHomeContent}
				{* </div> *}
			</div>
		{/if}
		
		{$sidebarCode}

		
		</aside><!-- pkp_sidebar.left -->
	{/if}
{/if}
</div><!-- pkp_structure_content -->

	<footer class="footer" role="contentinfo">

		<div class="container mx-auto rounded-t-3xl bg-[#002020] text-white">
				<div class="row">
					{if $pageFooter}
						<div class="col-span-12">
							{$pageFooter}
						</div>
					{/if}

					{* <div class="pkp_brand_footer" role="complementary">
						<a href="{url page="about" op="aboutThisPublishingSystem"}">
							<img alt="{translate key="about.aboutThisPublishingSystem"}" src="{$baseUrl}/{$brandImage}">
						</a>
					</div> *}
				</div>
			{* </div><!-- pkp_structure_footer_wrapper --> *}

		</div>

	</footer>
</div><!-- pkp_structure_page -->

{load_script context="frontend"}
{call_hook name="Templates::Common::Footer::PageFooter"}



<button id="scrollTop" onclick="scrollToTop()" href="#accessibility-nav" title="Go to top" style ><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
</body>

</html>