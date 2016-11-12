<?php
class FluidCache_Standalone_template_file_cluster_c6e0d5fff2d56ede86f8728e284f9e135a167a27 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
  mollit anim id est laborum.</p>
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
$arguments4['name'] = 'content';
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
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

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
  mollit anim id est laborum.</p>
';
};

$output0 .= '';

$output0 .= '
';


return $output0;
}


}
#1478622055    5941      