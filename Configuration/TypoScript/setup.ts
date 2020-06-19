lib.contentElement.layoutRootPaths.200 = EXT:visibility/Resources/Private/Layouts

# Gridelement support
// Add visibility to bootstrap grids
lib.gridelements.defaultGridSetup {
  dataWrap = <div class="visibility" data-xs="{field:visibilityxs}" data-sm="{field:visibilitysm}" data-md="{field:visibilitymd}" data-lg="{field:visibilitylg}">|</div>
}


page.includeCSS {
  tx_visibility = EXT:visibility/Resources/Public/Styles/tx_visibility.css
}

plugin.tx_visibility.settings {
  mobileFirst = {$plugin.tx_visibility.settings.mobileFirst}
  class_prefix = {$plugin.tx_visibility.settings.class_prefix}
  class_suffix_visible = {$plugin.tx_visibility.settings.class_suffix_visible}
  class_suffix_hidden = {$plugin.tx_visibility.settings.class_suffix_hidden}
  breakpoints.xs = {$plugin.tx_visibility.settings.breakpoints.xs}
  breakpoints.sm = {$plugin.tx_visibility.settings.breakpoints.sm}
  breakpoints.md = {$plugin.tx_visibility.settings.breakpoints.md}
  breakpoints.lg = {$plugin.tx_visibility.settings.breakpoints.lg}
  breakpoints.xl = {$plugin.tx_visibility.settings.breakpoints.xl}
}

visibility_css = PAGE
visibility_css {
  typeNum = {$plugin.tx_visibility.settings.ajaxpagetype}

  config {
    additionalHeaders = Content-type: text/css
  }

  10 = USER
  10 {
    userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
    extensionName = Visibility
    pluginName = CssRenderer
    vendorName = Joekolade
    controller = Css
    action = renderCss

    switchableControllerActions {
      Css {
        1 = renderCss
      }
    }
  }

  view < plugin.tx_visibility.view
  persistence < plugin.tx_visibility.persistence
  settings < plugin.tx_visibility.settings
}
