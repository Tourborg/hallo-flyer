<?php
class FluidCache_Standalone_template_file_Basis_abdb4125c97db18c8a5f5b066fcf0a4480d2f159 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section einleitung
 */
public function section_5cec7fb310a7619b56bd7bcd2e7eb577868c1378(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return '
  <div class="einleitung">
    <h1>Lorem ipsum dolor</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
      mollit anim id est laborum.</p>
  </div>
';
}
/**
 * section cluster
 */
public function section_da68bf3a55223d19ffeabebe48b0af570d763307(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return '
  <div class="service-cluster first">
    <img class="service-cluster--image" src="fileadmin/user_upload/flyer-printing.jpg" alt="Flyerverteilung">
    <span class="cluster-info">
      <a href="/flyerverteilung/">
        <p>Flyer</p>
        <ul class="services">
          <li>Haushaltswebung</li>
          <lI>Hand zu Hand</li>
          <li>Auslagestellenverteilung</li>
          <li>Mailings</li>
        </ul>
      </a>
    </span>
  </div>

  <div class="service-cluster">
    <img class="service-cluster--image" src="fileadmin/user_upload/flyer-printing.jpg" alt="Plakatierung">
    <span class="cluster-info">
      <a href="/plakatierung/">
        <p>Plakat</p>
        <ul class="services">
          <li>Tafelplakatierung</li>
          <lI>Flächenplakatierung</li>
          <li>Litfasssäulenplakatierung</li>
          <li>Großflächenplakatierung</li>
          <li>Indoorplaktierung</li>
          <li>Verkehrsmittelwerbung</li>
        </ul>
        </a>
    </span>
  </div>

  <div class="service-cluster last">
    <img class="service-cluster--image" src="fileadmin/user_upload/flyer-printing.jpg" alt="Druckservice">
    <span class="cluster-info">
      <a href="/druckproduktion/">
        <p>Druck</p>
        <ul class="services">
          <li>Grafik und Layout</li>
          <lI>Textgestaltung</li>
          <li>Lektorat</li>
          <li>Desktop-Publishing</li>
          <li>Erstellung von Druckvorlagen</li>
        </ul>
     </a>
    </span>
  </div>
';
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments1 = array();
$arguments1['name'] = 'Rahmen';
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments4 = array();
$arguments4['name'] = 'einleitung';
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
  <div class="einleitung">
    <h1>Lorem ipsum dolor</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
      fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
      mollit anim id est laborum.</p>
  </div>
';
};

$output0 .= '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments6 = array();
$arguments6['name'] = 'cluster';
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
  <div class="service-cluster first">
    <img class="service-cluster--image" src="fileadmin/user_upload/flyer-printing.jpg" alt="Flyerverteilung">
    <span class="cluster-info">
      <a href="/flyerverteilung/">
        <p>Flyer</p>
        <ul class="services">
          <li>Haushaltswebung</li>
          <lI>Hand zu Hand</li>
          <li>Auslagestellenverteilung</li>
          <li>Mailings</li>
        </ul>
      </a>
    </span>
  </div>

  <div class="service-cluster">
    <img class="service-cluster--image" src="fileadmin/user_upload/flyer-printing.jpg" alt="Plakatierung">
    <span class="cluster-info">
      <a href="/plakatierung/">
        <p>Plakat</p>
        <ul class="services">
          <li>Tafelplakatierung</li>
          <lI>Flächenplakatierung</li>
          <li>Litfasssäulenplakatierung</li>
          <li>Großflächenplakatierung</li>
          <li>Indoorplaktierung</li>
          <li>Verkehrsmittelwerbung</li>
        </ul>
        </a>
    </span>
  </div>

  <div class="service-cluster last">
    <img class="service-cluster--image" src="fileadmin/user_upload/flyer-printing.jpg" alt="Druckservice">
    <span class="cluster-info">
      <a href="/druckproduktion/">
        <p>Druck</p>
        <ul class="services">
          <li>Grafik und Layout</li>
          <lI>Textgestaltung</li>
          <li>Lektorat</li>
          <li>Desktop-Publishing</li>
          <li>Erstellung von Druckvorlagen</li>
        </ul>
     </a>
    </span>
  </div>
';
};

$output0 .= '';

$output0 .= '
';


return $output0;
}


}
#1478615971    6721      