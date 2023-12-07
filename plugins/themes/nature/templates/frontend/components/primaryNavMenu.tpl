{**
 * templates/frontend/components/primaryNavMenu.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Primary navigation menu list for OJS
 *}
<ul id="navigationPrimary" class="pkp_navigation_primary pkp_nav_list">

	{if $enableAnnouncements}
		<li>
			<a href="{url router=$smarty.const.ROUTE_PAGE page='announcement'}" class="text-[#00504F] hover:underline">
				{translate key='announcement.announcements'}
			</a>
		</li>
	{/if}

	{if $currentJournal}

		{if $currentJournal->getData('publishingMode') != $smarty.const.PUBLISHING_MODE_NONE}
			<li>
				<a href="{url router=$smarty.const.ROUTE_PAGE page='issue' op='current'}" class="text-[#00504F] hover:underline">
					{translate key='navigation.current'}
				</a>
			</li>
			<li>
				<a href="{url router=$smarty.const.ROUTE_PAGE page='issue' op='archive'}" class="text-[#00504F] hover:underline">
					{translate key='navigation.archives'}
				</a>
			</li>
		{/if}

		<li class="group">
			<a href="{url router=$smarty.const.ROUTE_PAGE page='about'}" class="text-[#00504F] hover:underline group-hover:underline">
				{translate key='navigation.about'}
			</a>
			<ul class="hidden group-hover:block">
				<li>
					<a href="{url router=$smarty.const.ROUTE_PAGE page='about'}" class="text-[#00504F] hover:underline">
						{translate key='about.aboutContext'}
					</a>
				</li>
				{if $currentJournal->getLocalizedData('editorialTeam')}
					<li>
						<a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='editorialTeam'}" class="text-[#00504F] hover:underline">
							{translate key='about.editorialTeam'}
						</a>
					</li>
				{/if}
				<li>
					<a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='submissions'}" class="text-[#00504F] hover:underline">
						{translate key='about.submissions'}
					</a>
				</li>
				{if $currentJournal->getData('mailingAddress') || $currentJournal->getData('contactName')}
					<li>
						<a href="{url router=$smarty.const.ROUTE_PAGE page='about' op='contact'}" class="text-[#00504F] hover:underline">
							{translate key='about.contact'}
						</a>
					</li>
				{/if}
			</ul>
		</li>
	{/if}
</ul>

