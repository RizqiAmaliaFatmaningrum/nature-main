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


{* Sidebars *}
{if empty($isFullWidth)}
	{capture assign="sidebarCode"}{call_hook name="Templates::Common::Sidebar"}{/capture}
	{if $sidebarCode}
		<aside id="right" class="pkp_structure_sidebar left col-xs-12 col-sm-2 col-md-3" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
		
		{* {include file="frontend/pages/userLogin.tpl"} *}

		{$sidebarCode}

		{* Additional Homepage Content additional_content*}
		{if $additionalHomeContent}
			<div class="">
				{* <div class="flex-2 bg-[#00504F] rounded-3xl p-4 m-2"> *}
				{$additionalHomeContent}
				{* </div> *}
			</div>
		{/if}
		</aside><!-- pkp_sidebar.left -->
	{/if}
{/if}
</div><!-- pkp_structure_content -->

	<footer class="footer" role="contentinfo">

		<div class="container mx-auto rounded-t-3xl bg-[#002020] text-white">
			{* <div class="pkp_structure_footer_wrapper" role="contentinfo"> *}

			{* <p class="flex space-x-6">
				<a href="https://www.facebook.com/sharer.php?u=https://demo.openjournaltheme.com/index.php/novelty/"
				target="_blank"
				rel="noopener"
				class="bg-[#006A68] text-white inline-block mr-6 py-2 px-4 border-2 border-solid border-[#705a83] rounded-full">
					<em class="fa fa-facebook"></em>
				</a>

				<a href="https://telegram.me/share/url?url=https://demo.openjournaltheme.com/index.php/novelty/"
				target="_blank"
				rel="noopener"
				class="bg-[#006A68] text-white inline-block mr-6 py-2 px-4 border-2 border-solid border-[#705a83] rounded-full">
					<em class="fa fa-telegram"></em>
				</a>

				<a href="https://api.whatsapp.com/send?text=https://demo.openjournaltheme.com/index.php/novelty/"
				target="_blank"
				rel="noopener"
				class="bg-[#006A68] text-white inline-block mr-6 py-2 px-4 border-2 border-solid border-[#705a83] rounded-full">
					<em class="fa fa-whatsapp "></em>
				</a>

				<a href="https://twitter.com/intent/tweet?url=https://demo.openjournaltheme.com/index.php/novelty/"
				target="_blank"
				rel="noopener"
				class="bg-[#006A68] text-white inline-block mr-6 py-2 px-4 border-2 border-solid border-[#705a83] rounded-full">
					<em class="fa fa-twitter"></em>
				</a>

				<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://demo.openjournaltheme.com/index.php/novelty/"
				target="_blank"
				rel="noopener"
				class="bg-[#006A68] text-white inline-block mr-6 py-2 px-4 border-2 border-solid border-[#705a83] rounded-full">
					<em class="fa fa-linkedin"></em>
				</a>
			</p> *}

				<div class="row">
					{if $pageFooter}
						<div class="pkp_footer_content">
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