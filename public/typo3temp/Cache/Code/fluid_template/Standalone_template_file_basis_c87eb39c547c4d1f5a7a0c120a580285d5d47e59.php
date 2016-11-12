<?php
class FluidCache_Standalone_template_file_basis_c87eb39c547c4d1f5a7a0c120a580285d5d47e59 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

return 'Rahmen';
}
public function hasLayout() {
return TRUE;
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
  <div class="einleitung">
    <h1>Lorem ipsum dolor</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
      mollit anim id est laborum.</p>
  </div>
</br>
###
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'clusterBox';
// Rendering Array
$array2 = array();
$array2['positon'] = 'first';
$array2['backgroundpicture'] = 'flyer-printing.jpg';
$array2['alt'] = 'Flyerverteilung';
$array2['likToPageId'] = '50';
// Rendering Array
$array3 = array();
$array3['0'] = 'Haushaltswebung';
$array3['1'] = 'Hand zu Hand';
$array3['2'] = 'Auslagestellenverteilung';
$array3['3'] = 'Mailings';
$array2['services'] = $array3;
$array2['service'] = 'Flyer';
$arguments1['arguments'] = $array2;
$arguments1['section'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure4 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure4, $renderingContext);

$output0 .= '


###

</br>
        <p>Plakat</p>
        <ul class="services">
          <li>Tafelplakatierung</li>
          <lI>Flächenplakatierung</li>
          <li>Litfasssäulenplakatierung</li>
          <li>Großflächenplakatierung</li>
          <li>Indoorplaktierung</li>
          <li>Verkehrsmittelwerbung</li>
        </ul>

        <ul class="services">
          <li>Grafik und Layout</li>
          <lI>Textgestaltung</li>
          <li>Lektorat</li>
          <li>Desktop-Publishing</li>
          <li>Erstellung von Druckvorlagen</li>
        </ul>

';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output5 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments6 = array();
$arguments6['name'] = 'Rahmen';
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper8->setArguments($arguments6);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output5 .= $viewHelper8->initializeArgumentsAndRender();

$output5 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments9 = array();
$arguments9['name'] = 'content';
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output11 = '';

$output11 .= '
  <div class="einleitung">
    <h1>Lorem ipsum dolor</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
      mollit anim id est laborum.</p>
  </div>
</br>
###
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments12 = array();
$arguments12['partial'] = 'clusterBox';
// Rendering Array
$array13 = array();
$array13['positon'] = 'first';
$array13['backgroundpicture'] = 'flyer-printing.jpg';
$array13['alt'] = 'Flyerverteilung';
$array13['likToPageId'] = '50';
// Rendering Array
$array14 = array();
$array14['0'] = 'Haushaltswebung';
$array14['1'] = 'Hand zu Hand';
$array14['2'] = 'Auslagestellenverteilung';
$array14['3'] = 'Mailings';
$array13['services'] = $array14;
$array13['service'] = 'Flyer';
$arguments12['arguments'] = $array13;
$arguments12['section'] = NULL;
$arguments12['optional'] = false;
$renderChildrenClosure15 = function() {return NULL;};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments12, $renderChildrenClosure15, $renderingContext);

$output11 .= '


###

</br>
        <p>Plakat</p>
        <ul class="services">
          <li>Tafelplakatierung</li>
          <lI>Flächenplakatierung</li>
          <li>Litfasssäulenplakatierung</li>
          <li>Großflächenplakatierung</li>
          <li>Indoorplaktierung</li>
          <li>Verkehrsmittelwerbung</li>
        </ul>

        <ul class="services">
          <li>Grafik und Layout</li>
          <lI>Textgestaltung</li>
          <li>Lektorat</li>
          <li>Desktop-Publishing</li>
          <li>Erstellung von Druckvorlagen</li>
        </ul>

';
return $output11;
};

$output5 .= '';

$output5 .= '
';


return $output5;
}


}
#1478629408    6063      