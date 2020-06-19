lib.contentElement.layoutRootPaths.200 = EXT:visibility/Resources/Private/Layouts

# Gridelement support
// Add visibility to bootstrap grids
lib.gridelements.defaultGridSetup {
    dataWrap = <div class="visibility" data-xs="{field:visibilityxs}" data-sm="{field:visibilitysm}" data-md="{field:visibilitymd}" data-lg="{field:visibilitylg}">|</div>
}

page.includeCSS {
    tx_visibility = EXT:visibility/Resources/Public/Styles/tx_visibility.css
}

visibility_css = PAGE
visibility_css {
  typeNum = {$plugin.tx_visibility.settings.ajaxpagetype}

  config {
    disableAllHeaderCode = 1
    xhtml_cleaning = 0
    admPanel = 0
    additionalHeaders = Content-type: text/css
    no_cache = 1
  }

  10 = USER
  10 {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    extensionName = Visibility
    pluginName = ###list###
    vendorName = Joekolade
    controller = ###Controller###
    switchableControllerActions {
      ###Controller### {
      1 = ###action###
    }
  }

  view < plugin.tx_visibility.view
  persistence < plugin.tx_visibility.persistence
  settings < plugin.tx_visibility.settings
}
