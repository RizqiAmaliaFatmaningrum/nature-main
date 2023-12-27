/**
 * @file plugins/themes/nature/js/nature.js
 *
 * Copyright (c) 2020 OpenJournalTheme Team
 * Copyright (c) https://openjournaltheme.com
 * Read this term of use of this theme here : https://openjournaltheme.com/term-of-conditions/
 *
 * @class natureThemePlugin
 * @ingroup plugins_themes_nature
 *
 */

var isRtl = isRtl ? true : false;
var isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
var isTablet = window.matchMedia("only screen and (min-width: 768px)").matches;

var fb_share = "https://www.facebook.com/sharer.php?u=";
var twitter_share = "https://twitter.com/intent/tweet?url=";

$(document).ready(async function () {
    // https://www.jqueryscript.net/slider/Infinite-Scroller-Plugin-jQuery.html
    fixingFavIcon();
    
    // index page
    let isJournalIndexPage = $(".pkp_page_index").length;
    if (isJournalIndexPage) {
        setUpIndexedIconList();
    }

    assignShareButton();
    moveBlocksToLeft();
    moveAnnoucements();
    clearCoverNoContent();

    $("#customblock-EditorialBoard").length > 0
        ? removeInlineCss("#customblock-EditorialBoard")
        : removeInlineCss("#customblock-editorialboard");

    createResponsiveMenu();

    let isArticleDetailPage = $(".pkp_page_article").length;

    // page article detail
    if (isArticleDetailPage) {
        fixArticleDetailLayout();
        makeAuthorsClickAble();
        createJatsTOC();
        activatePopOverShare();

        //place the download stat counter after the graph (if plumx is enabled)
        $(".article_sidebar_stat").insertAfter(".downloads_chart");

        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        if (!isMobile) {
            var stickyShare = new Sticky("#share_article");
        }

        if (isMobile && isArticleDetailPage)
            $("#share_article a").attr("data-placement", "top");

        disableXMLImageClicked();
        sharePopOverDisableDefault();
        initReferenceReadmore();
    }

    if (isMobile) {
        // $.fn.responsiveTabs = function () {
        //     this.addClass("responsive-tabs");
        //     this.append(
        //         $('<i class="bi bi-caret-down" ></i>')
        //     );
        //     this.append($('<i class="bi bi-caret-up"></i>'));
        
        //     this.on(
        //         "click",
        //         "li.active > a, i.bi",
        //         function () {
        //             this.toggleClass("open");
        //         }.bind(this)
        //     );
        
        //     this.on(
        //         "click",
        //         "li:not(.active) > a",
        //         function () {
        //             this.removeClass("open");
        //         }.bind(this)
        //     );
        // };
        $.fn.responsiveTabs = function () {
            this.addClass("responsive-tabs");
            this.append(
                $('<span class="glyphicon glyphicon-triangle-bottom"></span>')
            );
            this.append($('<span class="glyphicon glyphicon-triangle-top"></span>'));

            this.on(
                "click",
                "li.active > a, span.glyphicon",
                function () {
                    this.toggleClass("open");
                }.bind(this)
            );

            this.on(
                "click",
                "li:not(.active) > a",
                function () {
                    this.removeClass("open");
                }.bind(this)
            );
        };

        $(".nav.nav-tabs").responsiveTabs();
    }

    initWordCloud();
});

function sharePopOverDisableDefault() {
    $(".sharepopover a").click(function (e) {
        e.preventDefault();
    });

    var lastScrollTop = 0;

    // element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
    if (!isMobile) return;
    window.addEventListener(
        "scroll",
        function () {
            // or window.addEventListener("scroll"....
            var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
            if (st > lastScrollTop) {
                $("#share_article").hide();
            } else {
                $("#share_article").fadeIn();
            }
            lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
        },
        false
    );
}

function disableXMLImageClicked() {
    $(".pkp_page_article figure img").click(function (e) {
        $("body").addClass("modal-open");
    });

    $("body").click(function (e) {
        setTimeout(function () {
            let isModalExist = $(".modal-window").length;

            if (!isModalExist) $("body").removeClass("modal-open");
        }, 100);
    });
}

/** tag cloud function */
function initWordCloud() {
    //skip
    if (typeof keywords == "undefined" || keywords == null) {
        return;
    }

    /** sorting desc */
    let sortedKeywords = keywords.sort((a, b) => (a.size < b.size ? 1 : -1));

    /** count all */
    var accumulation = 0;
    for (var k of keywords) accumulation += k.size;

    /** Take 30% from total keyword accumulation */
    var keywordLimit = accumulation * (30 / 100);
    var totalBlock = Math.ceil(accumulation / keywordLimit);

    /** looping created block */
    for (let i = 0; i < totalBlock; i++) {
        var div = `<div class="cloud_key cloudDiv${i}"></div>`;
        $(wordcloud).append(div);
    }

    var keywordIndex = 0;

    for (var keyword of sortedKeywords) {
        if (keywordIndex == totalBlock) keywordIndex = 0;
        let page = $(`.cloudDiv${keywordIndex}`);
        let html = `<a href="${searchUrl}${keyword.text}" rel="${keyword.size}">${keyword.text} </a>`;
        $(page).append(html);
        keywordIndex++;
        continue;
    }

    shuffleChildren();
    startKeywordBlock();
    initFlipbox();

    /** fix height keyword dynamic */
    let currentBox = $(".cloud_key:not([style])");
    if (currentBox.length < 1) return;
    let currentBoxClass = currentBox.attr("class").split(" ")[1];
    cBoxHeight = $(`.${currentBoxClass}`).height();

    $(`.${currentBoxClass}`)
        .parent()
        .css({
            height: cBoxHeight + 35 + "px",
        });

    $("#tagcloud").css({
        height: cBoxHeight + 35 + "px",
    });

    $("#tagcloud").on("flipping", function (event, data) {
        let currentBoxIndex = data.nextIndex;
        let currentBoxClass = $(`.cloudDiv${currentBoxIndex}`);
        let cBoxHeight = currentBoxClass.height();

        currentBoxClass.parent().css({
            height: cBoxHeight + 35 + "px",
        });

        $(this).css({
            height: cBoxHeight + 35 + "px",
        });
        // }
    });

    /** init flip box */
    function initFlipbox() {
        $("#tagcloud").flipbox({
            autoplay: true,
            autoPlayWaitDuration: 1000,
            index: 3,
        });
    }

    function shuffleChildren() {
        /** shuffle children */
        $(".cloud_key").each(function () {
            var divs = $(this).find("a");
            //console.log(divs);
            for (var i = 0; i < divs.length; i++) $(divs[i]).remove();
            //the fisher yates algorithm, from http://stackoverflow.com/questions/2450954/how-to-randomize-a-javascript-array
            var i = divs.length;
            if (i == 0) return false;
            while (--i) {
                var j = Math.floor(Math.random() * (i + 1));
                var tempi = divs[i];
                var tempj = divs[j];
                divs[i] = tempj;
                divs[j] = tempi;
            }
            for (var i = 0; i < divs.length; i++) $(divs[i]).appendTo(this);
        });
    }
}

function startKeywordBlock() {
    $("#tagcloud a").tagcloud({
        size: { start: 12, end: 36, unit: "px" },
    });
}

function nextKeyword() {
    $("#tagcloud").flipbox("next");
}

function prevKeyword() {
    $("#tagcloud").flipbox("prev");
}

/** end tagcloud function */

function activatePopOverShare() {
    $("body").on("click", function (e) {
        $("[data-toggle=popover]").each(function () {
            if (
                !$(this).is(e.target) &&
                $(this).has(e.target).length === 0 &&
                $(".popover").has(e.target).length === 0
            ) {
                (
                    ($(this).popover("hide").data("bs.popover") || {}).inState || {}
                ).click = false;
            }
        });
    });

    $(function () {
        $("[data-toggle=popover]").popover({
            html: true,
            content: function () {
                var content = $(this).attr("data-popover-content");
                return $(content).children(".popover-body").html();
            },
        });
    });
}

async function assignShareButton() {
    let fbShare = $(".social_share.fb").find("a");
    let twitterShare = $(".social_share.twitter").find("a");
    let currentURL = window.location.href;

    if (fbShare.length || twitterShare.length) {
        fbShare.attr("href", fb_share + currentURL);
        twitterShare.attr("href", twitter_share + currentURL);
    }
}

async function moveBlocksToLeft() {
    let menuDevider = $("#customblock-LeftColumnStart");

    if (menuDevider.length == 0) {
        menuDevider = $("#customblock-leftcolumnstart");
    }

    let menuLeft = $("aside#left");

    let siblings = menuDevider.nextAll();

    if (isMobile) {
        return;
    }
    menuLeft.html(siblings);
}

async function moveAnnoucements() {
    let annoucements = $(".cmp_announcements");
    let customBlock =
        $("#customblock-Announcement").length != 0
            ? $("#customblock-Announcement")
            : $("#customblock-announcement");

    let listNews = annoucements.find(".media-list");

    customBlock.find(".content").append(listNews);
    annoucements.hide();
}

async function clearCoverNoContent() {
    if ($(".obj_article_summary").find(".cover").is(":empty")) {
        $(".obj_article_summary").find(".cover").hide();
    }
}

async function removeInlineCss(el) {
    $(el).find("*").removeAttr("style");
}

async function setUpIndexedIconList() {
    //set up the indexed logo list
    /**
     * block name can be indexed_by or indexed-by or indexed_logo
     */

    //$('<div class="indexed_by"></div>').insertBefore('.current_issue');

    $(".page_index_journal").prepend('<div class="indexed_by"></div>');

    let indexed_content = $(".indexed_by");
    var dummy_indexed_by = $("#customblock-indexed_by").length
        ? $("#customblock-indexed_by")
        : false;

    dummy_indexed_by =
        !dummy_indexed_by.length || !dummy_indexed_by
            ? $("#customblock-indexed-by")
            : dummy_indexed_by;
    dummy_indexed_by =
        !dummy_indexed_by.length || !dummy_indexed_by
            ? $("#customblock-indexed_logo")
            : dummy_indexed_by;
    dummy_indexed_by =
        !dummy_indexed_by.length || !dummy_indexed_by
            ? $("#customblock-indexedBy")
            : dummy_indexed_by;
    dummy_indexed_by =
        !dummy_indexed_by.length || !dummy_indexed_by
            ? $("#customblock-IndexedLogo")
            : dummy_indexed_by;
    dummy_indexed_by =
        !dummy_indexed_by.length || !dummy_indexed_by
            ? $("#customblock-indexedby")
            : dummy_indexed_by;
    dummy_indexed_by =
        !dummy_indexed_by.length || !dummy_indexed_by
            ? $("#customblock-indexedlogo")
            : dummy_indexed_by;

    if (!dummy_indexed_by || !dummy_indexed_by.length) {
        console.log("indexedBy block not found");
        return;
    }

    //console.log(module_icon_list.length);

    dummy_indexed_by.find("img").each(function (index) {
        var link = $(this).parent("a");
        var content = link.length ? link : this;
        indexed_content.append(content);
    });

    var isThereIconList = indexed_content.find("img");

    if (isThereIconList.length) indexed_content.removeClass("hidden");

    autoplayEnable = isThereIconList.length > 5 ? true : false;

    slideNumber = isMobile ? 2 : 6;
    slideNumber = isTablet ? 4 : slideNumber;

    //console.log(slideNumber);

    //let indexed_content = $('.indexed_by');
    indexed_content.slick({
        infinite: true,
        slidesToShow: slideNumber,
        slidesToScroll: slideNumber,
        autoplay: autoplayEnable,
        autoplaySpeed: 4000,
        rtl: isRtl,
        dots: true,
    });

    dummy_indexed_by.remove();
}

async function fixArticleDetailLayout() {
    //enlarge the article section
    // $('.pkp_structure_main').addClass('col-md-9').removeClass('col-md-6');

    //reposition doi

    pisahKeyword();
}

async function pisahKeyword() {
    //pisahkan keyword
    let keyword_list = $(".keywords .value");
    let base_url = $.trim($(".base_url").html());

    if (!keyword_list.length) {
        return;
    }

    let keyword = keyword_list.html();
    let list_of_keyword = keyword.split(",");
    keyword_list.addClass("list_of_keyword");

    keyword_list.html("");

    // Display array values on page
    for (let i = 0; i < list_of_keyword.length; i++) {
        let keyword_term = encodeURIComponent($.trim(list_of_keyword[i]));
        keyword_list.append(
            "<li> <a href=" +
            base_url +
            keyword_term.toLowerCase() +
            ">" +
            $.trim(list_of_keyword[i]) +
            "</a></li>"
        );
    }
}

async function createResponsiveMenu() {
    //creating mobile menu
    var defaultMenu = $(".pkp_navigation_primary_wrapper");
    let userMenu = $("#navigationUser");
    var navMenu = $("#main-navigation");

    if (isMobile) {
        navMenu.append(userMenu.find("li"));
    }

    let liMenu = navMenu.find("li");
    if (liMenu.children("ul").length && !liMenu.hasClass("dropdown")) {
        liMenu.addClass("dropdown");
    }
}

//work on article detail page
async function makeAuthorsClickAble() {
    let authors = $(".authors");
    let baseUrl = $.trim($(".searchByAuthors").html());

    authors
        .find(".author")
        .find("strong")
        .each(function (index) {
            let author = $(this).text();
            let parsedAuthor = encodeURIComponent($.trim($(this).text()));
            let link = '<a href="' + baseUrl + parsedAuthor + '">' + author + "</a>";
            console.log(link);

            //$(this).html(link);
            $(this).replaceWith(link);

            //console.log( index + ": " + $( this ).text() );
        });
}

async function setUpIndexedIconList() {
    //set up the indexed logo list
    /**
     * Taken from .additional_content
     */

    let indexed_content = $(".additional_content");
    indexed_content.append('<div class="index_slider"></div>');
    let slider = $(".index_slider");

    indexed_content.find("img").each(function (index) {
        $(this).removeAttr("width");
        $(this).removeAttr("height");
        var link = $(this).parent("a");
        var content = link.length ? link : this;

        slider.append(content);
    });

    var isThereIconList = indexed_content.find("img");

    if (isThereIconList.length) indexed_content.removeClass("hidden");

    autoplayEnable = isThereIconList.length > 5 ? true : false;

    slideNumber = isMobile ? 2 : 6;
    slideNumber = isTablet ? 4 : slideNumber;

    //console.log(slideNumber);

    //let indexed_content = $('.indexed_by');
    slider.slick({
        infinite: true,
        slidesToShow: slideNumber,
        slidesToScroll: slideNumber,
        autoplay: autoplayEnable,
        autoplaySpeed: 4000,
        rtl: isRtl,
        dots: true,
    });
}

async function createJatsTOC() {
    // let sideRight = $("aside#right");
    let menu = $(".sticky_wrapper");

    if (menu.length) {
        // $(".article_toc").sticky({
        //   topSpacing: 60,
        // });
        var stickyToc = new Sticky(".article_toc");
        // sideRight.append(menu);

        $(".intraarticle-menu #article-navbar a").click(function (event) {
            event.preventDefault();
            $("html, body").animate(
                { scrollTop: $($(this).attr("href")).offset().top - 50 },
                500
            );
            $(this).closest(".intraarticle-menu").find("a").removeClass("active");
            $(this).addClass("active");
        });
    }
}

async function initReferenceReadmore() {
    $(".article-references-content").readmore({
        speed: 75,
        moreLink:
            '<a href="#" class="btn btn-xs btn-info readmore_references" ><i class="fa fa-chevron-circle-down" aria-hidden="true"></i> Read More</a>',
        lessLink:
            '<a href="#" class="btn btn-xs btn-info readmore_references"> Read Less <i class="fa fa-chevron-circle-up" aria-hidden="true" style="margin-left: 10px"></i>  </a>',
        speed: 1600,
        collapsedHeight: 300,
    });
}

// window.onscroll = function () {
//    scrollFunction();
// };

async function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("scrollTop").style.display = "block";
    } else {
        document.getElementById("scrollTop").style.display = "none";
    }
}

async function scrollTo(target, padding, speed) {
    // Define our variables.
    var target_offset, target_top;

    // Fix our value to add the selector.
    if (target.indexOf("#") == -1) {
        target = "#" + target;
    }

    // Get the top offset of the target anchor and add any necessarry padding.
    target_offset = $(target).offset();
    target_top = target_offset.top + padding;

    // Scroll to that anchor by setting the body to scroll to the anchor top.
    $("html").animate(
        {
            scrollTop: target_top,
        },
        speed
    );
}

async function scrollToTop() {
    window.scroll({ top: 0, left: 0, behavior: "smooth" });
}

function generateString(length) {
    const characters =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    let result = "";
    const charactersLength = characters.length;
    for (let i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }

    return result;
}

async function fixingFavIcon() {
    /** favicon */
    let link =
        document.querySelector("link[rel*='icon']") ||
        document.createElement("link");
    let fav_ico = link.href.length ? link.href : "";

    link.type = "image/x-icon";
    link.rel = "shortcut icon";
    link.href = fav_ico + "?" + generateString(5);

    document.getElementsByTagName("head")[0].appendChild(link);
}
