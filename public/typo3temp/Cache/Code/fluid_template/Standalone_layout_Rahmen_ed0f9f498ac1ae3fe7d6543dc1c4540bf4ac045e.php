<?php
class FluidCache_Standalone_layout_Rahmen_ed0f9f498ac1ae3fe7d6543dc1c4540bf4ac045e extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '<div class="page">
  <div class="header">
    <div class="logo">

    </div>
    <div class="navbar clearfix">
      <ul class="navbar-content">
        <li class="navbar-content--link">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments1 = array();
$arguments1['pageUid'] = '50';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['additionalParams'] = array (
);
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['target'] = NULL;
$arguments1['rel'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Flyerverteilung';
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '</li>
        <li class="navbar-content--link">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments4 = array();
$arguments4['pageUid'] = '51';
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['additionalParams'] = array (
);
$arguments4['pageType'] = 0;
$arguments4['noCache'] = false;
$arguments4['noCacheHash'] = false;
$arguments4['section'] = '';
$arguments4['linkAccessRestrictedPages'] = false;
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['addQueryStringMethod'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['target'] = NULL;
$arguments4['rel'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Plakatierung';
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '</li>
        <li class="navbar-content--link">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments7 = array();
$arguments7['pageUid'] = '52';
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['additionalParams'] = array (
);
$arguments7['pageType'] = 0;
$arguments7['noCache'] = false;
$arguments7['noCacheHash'] = false;
$arguments7['section'] = '';
$arguments7['linkAccessRestrictedPages'] = false;
$arguments7['absolute'] = false;
$arguments7['addQueryString'] = false;
$arguments7['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments7['addQueryStringMethod'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['target'] = NULL;
$arguments7['rel'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Druck';
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '</li>
        <li class="navbar-content--link">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments10 = array();
$arguments10['pageUid'] = '53';
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['additionalParams'] = array (
);
$arguments10['pageType'] = 0;
$arguments10['noCache'] = false;
$arguments10['noCacheHash'] = false;
$arguments10['section'] = '';
$arguments10['linkAccessRestrictedPages'] = false;
$arguments10['absolute'] = false;
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['addQueryStringMethod'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['target'] = NULL;
$arguments10['rel'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Über Uns';
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '</li>
        <li class="navbar-content--link">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments13 = array();
$arguments13['pageUid'] = '54';
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['additionalParams'] = array (
);
$arguments13['pageType'] = 0;
$arguments13['noCache'] = false;
$arguments13['noCacheHash'] = false;
$arguments13['section'] = '';
$arguments13['linkAccessRestrictedPages'] = false;
$arguments13['absolute'] = false;
$arguments13['addQueryString'] = false;
$arguments13['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments13['addQueryStringMethod'] = NULL;
$arguments13['class'] = NULL;
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$arguments13['target'] = NULL;
$arguments13['rel'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Kontakt';
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '</li>
        <li class="navbar-content--link">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$arguments16 = array();
$arguments16['pageUid'] = '55';
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['additionalParams'] = array (
);
$arguments16['pageType'] = 0;
$arguments16['noCache'] = false;
$arguments16['noCacheHash'] = false;
$arguments16['section'] = '';
$arguments16['linkAccessRestrictedPages'] = false;
$arguments16['absolute'] = false;
$arguments16['addQueryString'] = false;
$arguments16['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments16['addQueryStringMethod'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['target'] = NULL;
$arguments16['rel'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Impressum';
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper

$output0 .= $viewHelper18->initializeArgumentsAndRender();

$output0 .= '</li>
      </ul>
    </div>
  </dvi>
  <span class="clear" />
  <div class="content">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments19 = array();
$arguments19['section'] = 'content';
$arguments19['partial'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$renderChildrenClosure20 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
  </div>

  <div class="footer">

  </div>
</div>
';


return $output0;
}


}
#1478622711    11053     