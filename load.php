window.mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};window.mwNow=(function(){var perf=window.performance,navStart=perf&&perf.timing&&perf.timing.navigationStart;return navStart&&typeof perf.now==='function'?function(){return navStart+perf.now();}:function(){return Date.now();};}());window.isCompatible=function(str){var ua=str||navigator.userAgent;return!!((function(){'use strict';return!this&&!!Function.prototype.bind&&!!window.JSON;}())&&'querySelector'in document&&'localStorage'in window&&'addEventListener'in window&&!(ua.match(/MSIE 10|webOS\/1\.[0-4]|SymbianOS|Series60|NetFront|Opera Mini|S40OviBrowser|MeeGo|Android.+Glass|^Mozilla\/5\.0 .+ Gecko\/$|googleweblight/)||ua.match(/PlayStation/i)));};(function(){var NORLQ,script;if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');NORLQ=window.NORLQ||[];while(NORLQ.length){NORLQ.shift()();}window.NORLQ={push:
function(fn){fn();}};window.RLQ={push:function(){}};return;}function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/load.php"});mw.loader.register([["site","08qum79",[1]],["site.styles","1hhxfkf",[],"site"],["noscript","00fhea4",[],"noscript"],["filepage","17xab4z"],["user.groups","1w0ik2d",[5]],["user","1srxqcz",[6],"user"],["user.styles","0lk1rup",[],"user"],["user.defaults","0t6x8y1"],["user.options","1wzrrbt",[7],"private"],["user.tokens","0segm57",[],"private"],["mediawiki.language.data","0idbl28",[177]],["mediawiki.skinning.elements","0305qmz"],["mediawiki.skinning.content","16ys4c4"],["mediawiki.skinning.interface","16dz0w2"],["mediawiki.skinning.content.parsoid","18sw83o"],["mediawiki.skinning.content.externallinks","0ubqun1"],["jquery.accessKeyLabel","0gu3pjp",[22,130]],["jquery.async","19j7xsw"],["jquery.byteLength","14bazo7",[131]],["jquery.byteLimit","1w0ik2d",[37]],["jquery.checkboxShiftClick","0d6i27c"],["jquery.chosen","05uu0s3"],["jquery.client",
"17a8u4j"],["jquery.color","19v4syy",[24]],["jquery.colorUtil","0pqink9"],["jquery.confirmable","12f4670",[178]],["jquery.cookie","186vi31"],["jquery.expandableField","06a07xx"],["jquery.farbtastic","0m8pxqs",[24]],["jquery.footHovzer","1oe2ky1"],["jquery.form","0fcv024"],["jquery.fullscreen","1x07qxc"],["jquery.getAttrs","1qcn1mn"],["jquery.hidpi","0gquthx"],["jquery.highlightText","1a8oynx",[130]],["jquery.hoverIntent","1k5159g"],["jquery.i18n","1bao5qd",[176]],["jquery.lengthLimit","1g2dg5x",[131]],["jquery.localize","0axi2ke"],["jquery.makeCollapsible","0gv9q3a"],["jquery.mockjax","11zpuan"],["jquery.mw-jump","11ff42l"],["jquery.qunit","0pn1wql"],["jquery.spinner","0uqom1v"],["jquery.jStorage","04fncgw"],["jquery.suggestions","1w5u03z",[34]],["jquery.tabIndex","0ei3oz6"],["jquery.tablesorter","0t8rq6u",[130,179]],["jquery.textSelection","1mvx9gk",[22]],["jquery.throttle-debounce","1iaqfpl"],["jquery.xmldom","04fs312"],["jquery.tipsy","08o4avo"],["jquery.ui.core","0wmw2jk",[53],
"jquery.ui"],["jquery.ui.core.styles","1vjtn5g",[],"jquery.ui"],["jquery.ui.accordion","13k4939",[52,72],"jquery.ui"],["jquery.ui.autocomplete","0dhtyoo",[61],"jquery.ui"],["jquery.ui.button","0pmj07d",[52,72],"jquery.ui"],["jquery.ui.datepicker","07h7ic6",[52],"jquery.ui"],["jquery.ui.dialog","07b1ky9",[56,59,63,65],"jquery.ui"],["jquery.ui.draggable","0ny81d1",[52,62],"jquery.ui"],["jquery.ui.droppable","06n0la8",[59],"jquery.ui"],["jquery.ui.menu","0ma910z",[52,63,72],"jquery.ui"],["jquery.ui.mouse","11o96u5",[72],"jquery.ui"],["jquery.ui.position","11577ky",[],"jquery.ui"],["jquery.ui.progressbar","1ddcoqp",[52,72],"jquery.ui"],["jquery.ui.resizable","1kw0ibs",[52,62],"jquery.ui"],["jquery.ui.selectable","110ckvf",[52,62],"jquery.ui"],["jquery.ui.slider","0k18lnn",[52,62],"jquery.ui"],["jquery.ui.sortable","1ha5wnv",[52,62],"jquery.ui"],["jquery.ui.spinner","07br7gj",[56],"jquery.ui"],["jquery.ui.tabs","15g4q4s",[52,72],"jquery.ui"],["jquery.ui.tooltip","1a1w9bg",[52,63,72],
"jquery.ui"],["jquery.ui.widget","1tihn0d",[],"jquery.ui"],["jquery.effects.core","03uyee0",[],"jquery.ui"],["jquery.effects.blind","0kqdjk5",[73],"jquery.ui"],["jquery.effects.bounce","0985g97",[73],"jquery.ui"],["jquery.effects.clip","0rarlkq",[73],"jquery.ui"],["jquery.effects.drop","0iwkugu",[73],"jquery.ui"],["jquery.effects.explode","08pofbn",[73],"jquery.ui"],["jquery.effects.fade","1r096bj",[73],"jquery.ui"],["jquery.effects.fold","05p3g8b",[73],"jquery.ui"],["jquery.effects.highlight","1h13kw3",[73],"jquery.ui"],["jquery.effects.pulsate","0esn5cn",[73],"jquery.ui"],["jquery.effects.scale","1j261wn",[73],"jquery.ui"],["jquery.effects.shake","1ywrx0o",[73],"jquery.ui"],["jquery.effects.slide","0lagotz",[73],"jquery.ui"],["jquery.effects.transfer","16lmeqr",[73],"jquery.ui"],["json","1w0ik2d"],["moment","1ug9a5o",[174]],["mediawiki.apihelp","120w018"],["mediawiki.template","12lcjk0"],["mediawiki.template.mustache","02dcg70",[90]],["mediawiki.template.regexp","02x01mw",[90]],[
"mediawiki.apipretty","0cm2h92"],["mediawiki.api","0t2jqrn",[148,9]],["mediawiki.api.category","0clpphr",[136,94]],["mediawiki.api.edit","1mxl3jg",[146]],["mediawiki.api.login","0y9hwi5",[94]],["mediawiki.api.options","114bww7",[94]],["mediawiki.api.parse","0fzu92t",[94]],["mediawiki.api.upload","0vydap5",[96]],["mediawiki.api.user","1rbyax1",[94]],["mediawiki.api.watch","0eonfzb",[94]],["mediawiki.api.messages","1nits40",[94]],["mediawiki.api.rollback","16p33qn",[94]],["mediawiki.content.json","1i45vfe"],["mediawiki.confirmCloseWindow","0pwon1c"],["mediawiki.debug","07nnmig",[29,273]],["mediawiki.diff.styles","0mo6nmf"],["mediawiki.feedback","0ty9bo0",[136,124,277]],["mediawiki.feedlink","09x9ebm"],["mediawiki.filewarning","05m5fnr",[273]],["mediawiki.ForeignApi","0a61pkv",[113]],["mediawiki.ForeignApi.core","02x1qj3",[94,269]],["mediawiki.helplink","0k63f16"],["mediawiki.hidpi","12zvjnv",[33],null,null,"return'srcset'in new Image();"],["mediawiki.hlist","18m42co"],[
"mediawiki.htmlform","0q342km",[37,130]],["mediawiki.htmlform.checker","1sji7pq",[49]],["mediawiki.htmlform.ooui","00zmft0",[273]],["mediawiki.htmlform.styles","1nbliue"],["mediawiki.htmlform.ooui.styles","0xnlbxv"],["mediawiki.icon","1ccgsbw"],["mediawiki.inspect","1ujpuuq",[130,131]],["mediawiki.messagePoster","1a15c8m",[112]],["mediawiki.messagePoster.wikitext","0np2im7",[96,124]],["mediawiki.notification","0n5eold",[148,156]],["mediawiki.notify","1vubtyl"],["mediawiki.notification.convertmessagebox","1xps8dk",[126]],["mediawiki.notification.convertmessagebox.styles","1qcpj75"],["mediawiki.RegExp","19ajefp"],["mediawiki.String","0zg1hm3"],["mediawiki.pager.tablePager","09tekk2"],["mediawiki.searchSuggest","0yx5umd",[32,45,94]],["mediawiki.sectionAnchor","146xg6h"],["mediawiki.storage","1gatbuo"],["mediawiki.Title","1h92yre",[131,148]],["mediawiki.Upload","0iparjd",[100]],["mediawiki.ForeignUpload","19iqyah",[112,137]],["mediawiki.ForeignStructuredUpload.config","0msydx9"],[
"mediawiki.ForeignStructuredUpload","0xwmyqc",[139,138]],["mediawiki.Upload.Dialog","1b5dwyl",[142]],["mediawiki.Upload.BookletLayout","0tooa9v",[136,137,178,266,88,275,277]],["mediawiki.ForeignStructuredUpload.BookletLayout","0fkwpms",[140,142,103,182,256,251]],["mediawiki.toc","1x50nol",[152]],["mediawiki.Uri","01b3xcp",[148,92]],["mediawiki.user","01yn4av",[101,135,8]],["mediawiki.userSuggest","1h5nbrs",[45,94]],["mediawiki.util","1hwa75w",[16,127]],["mediawiki.viewport","0qm3sae"],["mediawiki.checkboxtoggle","143082d"],["mediawiki.checkboxtoggle.styles","0o1juf6"],["mediawiki.cookie","15bszin",[26]],["mediawiki.toolbar","1loj5rt",[48]],["mediawiki.experiments","0wsqmn8"],["mediawiki.editfont.styles","15v9b1a"],["mediawiki.visibleTimeout","0k94dhg"],["mediawiki.action.delete","1y4bb78",[37,273]],["mediawiki.action.delete.file","18z8mu5",[37]],["mediawiki.action.edit","155vidk",[48,160,94,155,254]],["mediawiki.action.edit.styles","1v2lzti"],["mediawiki.action.edit.collapsibleFooter",
"0xblcsi",[39,122,135]],["mediawiki.action.edit.preview","01519ny",[43,48,94,108,178,273]],["mediawiki.action.history","1ceqi8x"],["mediawiki.action.history.styles","0ruqnwz"],["mediawiki.action.view.dblClickEdit","1arqwzu",[148,8]],["mediawiki.action.view.metadata","0whk497",[173]],["mediawiki.action.view.categoryPage.styles","1kwji8i"],["mediawiki.action.view.postEdit","0dminfk",[178,126]],["mediawiki.action.view.redirect","0ijze12",[22]],["mediawiki.action.view.redirectPage","0jdta7h"],["mediawiki.action.view.rightClickEdit","0fzxhyk"],["mediawiki.action.edit.editWarning","196h7wx",[48,106,178]],["mediawiki.action.view.filepage","1k322b9"],["mediawiki.language","0dfdhoc",[175,10]],["mediawiki.cldr","03pnldi",[176]],["mediawiki.libs.pluralruleparser","0o2xnb8"],["mediawiki.language.init","0zi9evq"],["mediawiki.jqueryMsg","1xc0k4j",[174,148,8]],["mediawiki.language.months","1id94ko",[174]],["mediawiki.language.names","05xr57a",[177]],["mediawiki.language.specialCharacters","0a08384",[
174]],["mediawiki.libs.jpegmeta","09tpicf"],["mediawiki.page.gallery","119jncq",[49,184]],["mediawiki.page.gallery.styles","0sbwkaf"],["mediawiki.page.gallery.slideshow","1ca58na",[136,94,275,290]],["mediawiki.page.ready","0gn66wj",[16,20,41]],["mediawiki.page.startup","1dpl6x4"],["mediawiki.page.patrol.ajax","1vurmwt",[43,136,94]],["mediawiki.page.watch.ajax","0lmqwwi",[136,102,178]],["mediawiki.page.rollback","0bhub5i",[43,104]],["mediawiki.page.image.pagination","1hty4lf",[43,148]],["mediawiki.rcfilters.filters.base.styles","0kc90vt"],["mediawiki.rcfilters.highlightCircles.seenunseen.styles","0nu8q8x"],["mediawiki.rcfilters.filters.dm","0ixcnzy",[131,145,98,178,146,269]],["mediawiki.rcfilters.filters.ui","1etkkfa",[39,194,249,284,286,288,290]],["mediawiki.special","1b6we6k"],["mediawiki.special.apisandbox.styles","03aklwk"],["mediawiki.special.apisandbox","0vyllfd",[39,94,178,255,272]],["mediawiki.special.block","0s2gveg",[117,148,257]],["mediawiki.special.changecredentials.js",
"0aucpsj",[94,119]],["mediawiki.special.changeslist","1sl2ana"],["mediawiki.special.changeslist.enhanced","0hd8xao"],["mediawiki.special.changeslist.legend","1sdlxxs"],["mediawiki.special.changeslist.legend.js","12fhzaf",[39,152]],["mediawiki.special.changeslist.visitedstatus","1v5jhe8"],["mediawiki.special.comparepages.styles","1ekx6gz"],["mediawiki.special.contributions","1s5drta",[178,251]],["mediawiki.special.edittags","0231z3v",[21,37]],["mediawiki.special.edittags.styles","0r38lha"],["mediawiki.special.import","0gff5w9"],["mediawiki.special.movePage","1kizc1c",[249,254]],["mediawiki.special.movePage.styles","0yhr7gy"],["mediawiki.special.pageLanguage","0kdywp8",[273]],["mediawiki.special.pagesWithProp","0in94bn"],["mediawiki.special.preferences","1dx0x2o",[106,174,128]],["mediawiki.special.preferences.styles","0m4vb4k"],["mediawiki.special.recentchanges","0rsgdvl"],["mediawiki.special.revisionDelete","0el6n65",[37]],["mediawiki.special.search","1nxuc7n",[264]],[
"mediawiki.special.search.commonsInterwikiWidget","1yn4k7h",[145,94,178]],["mediawiki.special.search.interwikiwidget.styles","1h2uaxf"],["mediawiki.special.search.styles","0pua0b4"],["mediawiki.special.undelete","0ayemeh",[249,254]],["mediawiki.special.unwatchedPages","1ddr2kd",[136,102]],["mediawiki.special.upload","1n0nb4g",[43,136,99,106,178,182,226,90]],["mediawiki.special.upload.styles","0coitj0"],["mediawiki.special.userlogin.common.styles","0d5ghe7"],["mediawiki.special.userlogin.login.styles","148aso9"],["mediawiki.special.userlogin.signup.js","0iwgukq",[94,118,178]],["mediawiki.special.userlogin.signup.styles","1s0ibo3"],["mediawiki.special.userrights","1c3mzau",[37,128]],["mediawiki.special.watchlist","14yef1q",[136,102,178,273]],["mediawiki.special.watchlist.styles","129qubf"],["mediawiki.special.version","0s736pp"],["mediawiki.legacy.config","001tl79"],["mediawiki.legacy.commonPrint","110p6t6"],["mediawiki.legacy.protect","0068ffz",[37]],["mediawiki.legacy.shared","0ia63j6"
],["mediawiki.legacy.oldshared","1n2rk4q"],["mediawiki.legacy.wikibits","18r7clv"],["mediawiki.ui","1wqdw5a"],["mediawiki.ui.checkbox","0812929"],["mediawiki.ui.radio","1u433j5"],["mediawiki.ui.anchor","1x5rbei"],["mediawiki.ui.button","0yi4k83"],["mediawiki.ui.input","1bw8xnr"],["mediawiki.ui.icon","1arnjbc"],["mediawiki.ui.text","142dzoj"],["mediawiki.widgets","1kko3n3",[136,94,250,275]],["mediawiki.widgets.styles","0anoudm"],["mediawiki.widgets.DateInputWidget","1li6tfr",[252,88,275]],["mediawiki.widgets.DateInputWidget.styles","08ghges"],["mediawiki.widgets.visibleByteLimit","1w0ik2d",[254]],["mediawiki.widgets.visibleLengthLimit","0ckxuca",[37,273]],["mediawiki.widgets.datetime","03ex97d",[273,291,292]],["mediawiki.widgets.CategoryMultiselectWidget","0j2o4oh",[112,136,275]],["mediawiki.widgets.SelectWithInputWidget","1xsfzpf",[258,275]],["mediawiki.widgets.SelectWithInputWidget.styles","1jr261o"],["mediawiki.widgets.SizeFilterWidget","0213t21",[260,275]],[
"mediawiki.widgets.SizeFilterWidget.styles","1twvh1f"],["mediawiki.widgets.MediaSearch","1bapnqa",[112,136,275]],["mediawiki.widgets.UserInputWidget","0covj0h",[94,275]],["mediawiki.widgets.UsersMultiselectWidget","1jkdssl",[94,275]],["mediawiki.widgets.SearchInputWidget","1wc1r2o",[133,249]],["mediawiki.widgets.SearchInputWidget.styles","0fnp1by"],["mediawiki.widgets.StashedFileWidget","1kjhqeo",[94,273]],["es5-shim","1w0ik2d"],["dom-level2-shim","1w0ik2d"],["oojs","0g8ovgd"],["mediawiki.router","1acjufw",[271]],["oojs-router","18qld4y",[269]],["oojs-ui","1w0ik2d",[276,275,277]],["oojs-ui-core","1c56flr",[174,269,274,281,282,287,278,279]],["oojs-ui-core.styles","0gi9azv"],["oojs-ui-widgets","1w4rcey",[273,283,291,292]],["oojs-ui-toolbars","18zrevf",[273,292]],["oojs-ui-windows","0gs9unq",[273,292]],["oojs-ui.styles.indicators","1x5ccw2"],["oojs-ui.styles.textures","0ql28nm"],["oojs-ui.styles.icons-accessibility","00zqj0z"],["oojs-ui.styles.icons-alerts","11xc79z"],[
"oojs-ui.styles.icons-content","07zyjfd"],["oojs-ui.styles.icons-editing-advanced","07kveq8"],["oojs-ui.styles.icons-editing-core","0z96dpz"],["oojs-ui.styles.icons-editing-list","18wwppf"],["oojs-ui.styles.icons-editing-styling","0xfho5t"],["oojs-ui.styles.icons-interactions","0npdysi"],["oojs-ui.styles.icons-layout","0296s99"],["oojs-ui.styles.icons-location","08d1i5x"],["oojs-ui.styles.icons-media","196vuhw"],["oojs-ui.styles.icons-moderation","0wj9u42"],["oojs-ui.styles.icons-movement","14ceonf"],["oojs-ui.styles.icons-user","1pk8453"],["oojs-ui.styles.icons-wikimedia","0zwkxpl"],["skins.monobook.styles","0joe3u3"],["skins.timeless","1rcl0tn"],["skins.timeless.misc","1t7fmez"],["skins.timeless.js","01ybmnd"],["skins.timeless.mobile","065f5g7"],["skins.vector.styles","1jlbwqo"],["skins.vector.styles.responsive","1xajmmk"],["skins.vector.js","16tfhvt",[46,49]],["ext.cite.styles","0wxqfsi"],["ext.cite.a11y","1t0yuyo"],["ext.cite.style","1wqz751"],["ext.wikiEditor","0xbfah0",[17,26,45,
46,48,58,143,141,181,284,285,286,290,90],"ext.wikiEditor"],["ext.wikiEditor.styles","0tcs7ws",[],"ext.wikiEditor"],["ext.wikiEditor.toolbar","1w0ik2d",[306]],["ext.wikiEditor.dialogs","1w0ik2d",[306]],["ext.wikiEditor.core","1w0ik2d",[306]],["jquery.wikiEditor","1w0ik2d",[306]],["jquery.wikiEditor.core","1w0ik2d",[306]],["jquery.wikiEditor.dialogs","1w0ik2d",[306]],["jquery.wikiEditor.dialogs.config","1w0ik2d",[306]],["jquery.wikiEditor.toolbar","1w0ik2d",[306]],["jquery.wikiEditor.toolbar.config","1w0ik2d",[306]],["jquery.wikiEditor.toolbar.i18n","1w0ik2d",[306]]]);;mw.config.set({"wgLoadScript":"/load.php","debug":!1,"skin":"vector","stylepath":"/skins","wgUrlProtocols":
"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/index.php/$1","wgScriptPath":"","wgScript":"/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"https://wiki.blackpinguin.de","wgServerName":"wiki.blackpinguin.de","wgUserLanguage":"de","wgContentLanguage":"de","wgTranslateNumerals":!0,"wgVersion":"1.31.16","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Hauptseite","wgFormattedNamespaces":{"-2":"Medium","-1":"Spezial","0":"","1":"Diskussion","2":"Benutzer","3":"Benutzer Diskussion","4":"bp wiki","5":"bp wiki Diskussion","6":"Datei","7":"Datei Diskussion","8":"MediaWiki","9":"MediaWiki Diskussion","10":"Vorlage","11":"Vorlage Diskussion",
"12":"Hilfe","13":"Hilfe Diskussion","14":"Kategorie","15":"Kategorie Diskussion"},"wgNamespaceIds":{"medium":-2,"spezial":-1,"":0,"diskussion":1,"benutzer":2,"benutzer_diskussion":3,"bp_wiki":4,"bp_wiki_diskussion":5,"datei":6,"datei_diskussion":7,"mediawiki":8,"mediawiki_diskussion":9,"vorlage":10,"vorlage_diskussion":11,"hilfe":12,"hilfe_diskussion":13,"kategorie":14,"kategorie_diskussion":15,"bild":6,"bild_diskussion":7,"benutzerin":2,"benutzerin_diskussion":3,"image":6,"image_talk":7,"media":-2,"special":-1,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15},"wgContentNamespaces":[0],"wgSiteName":"BP Wiki","wgDBname":"mediawiki","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"monobook":"MonoBook","timeless":"Timeless","vector":"Vector","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix"
:"mediawiki_bpwiki_","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":2592000,"wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgIllegalFileChars":":/\\\\","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!0,"wgForeignUploadTargets":["local"],"wgEnableUploads":!0,"wgCommentByteLimit":255,"wgCommentCodePointLimit":null,"wgCiteVisualEditorOtherGroup":!1,"wgCiteResponsiveReferences":!0,"wgWikiEditorMagicWords":{"redirect":"#WEITERLEITUNG","img_right":"rechts","img_left":"links","img_none":"ohne","img_center":"zentriert","img_thumbnail":"mini","img_framed":"gerahmt","img_frameless":"rahmenlos"},"mw.msg.wikieditor":"--~~~~"});var RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};window.NORLQ={push:function(){}};}window.mediaWikiLoadStart=mwNow();mwPerformance.mark('mwLoadStart');script=document.createElement(
'script');script.src="/load.php?debug=false&lang=de&modules=jquery%2Cmediawiki&only=scripts&skin=vector&version=133k91a";script.onload=function(){script.onload=null;script=null;startUp();};document.head.appendChild(script);}());