lib.contentElement.layoutRootPaths.200 = EXT:visibility/Resources/Private/Layouts

# Gridelement support
// Add visibility to bootstrap grids
lib.gridelements.defaultGridSetup {
    dataWrap = <div class="visibility" data-xs="{field:visibilityxs}" data-sm="{field:visibilitysm}" data-md="{field:visibilitymd}" data-lg="{field:visibilitylg}">|</div>
}

page.includeCSS {
    tx_visibility = EXT:visibility/Resources/Public/Styles/tx_visibility.css
}