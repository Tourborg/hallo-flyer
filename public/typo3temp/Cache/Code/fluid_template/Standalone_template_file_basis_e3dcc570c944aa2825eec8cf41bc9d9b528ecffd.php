<?php
class FluidCache_Standalone_template_file_basis_e3dcc570c944aa2825eec8cf41bc9d9b528ecffd extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 = '';

$output0 .= '
';

$output0 .= '{employees: {0: {first_name: \'Stefan\', city: \'Lindlar\'},1: {first_name: \'Petra\', city: \'Lindlar\'},2: {first_name: \'Sascha\', city: \'Remscheid\'},3: {first_name: \'Patrick\', city: \'Bonn\'},4: {first_name: \'Sven\', city: \'Gummersbach\'},5: {first_name: \'Andrea\', city: \'Wuppertal\'}}}';

$output0 .= '">
<f:render partial="clusterBox" arguments=';

$output0 .= '{positon:\'first\', backgroundpicture:\'flyer-printing.jpg\', alt:\'Flyerverteilung\',
                                          likToPageId:\'50\', services:{0:\'Haushaltswebung\', 1:\'Hand zu Hand\', 2:\'Auslagestellenverteilung\', 3:\'Mailings\'},
                                          service:\'Flyer\'}';

$output0 .= ' />

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


return $output0;
}
/**
 * section schluss
 */
public function section_c2c4518cd167201bd9d855ca12e5a19352c3d7c1(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return '
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

$output1 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments2 = array();
$arguments2['name'] = 'Rahmen';
$renderChildrenClosure3 = function() {return NULL;};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper4->setArguments($arguments2);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output1 .= $viewHelper4->initializeArgumentsAndRender();

$output1 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments5 = array();
$arguments5['name'] = 'einleitung';
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
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

$output1 .= '';

$output1 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments7 = array();
$arguments7['name'] = 'cluster';
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
';

$output9 .= '{employees: {0: {first_name: \'Stefan\', city: \'Lindlar\'},1: {first_name: \'Petra\', city: \'Lindlar\'},2: {first_name: \'Sascha\', city: \'Remscheid\'},3: {first_name: \'Patrick\', city: \'Bonn\'},4: {first_name: \'Sven\', city: \'Gummersbach\'},5: {first_name: \'Andrea\', city: \'Wuppertal\'}}}';

$output9 .= '">
<f:render partial="clusterBox" arguments=';

$output9 .= '{positon:\'first\', backgroundpicture:\'flyer-printing.jpg\', alt:\'Flyerverteilung\',
                                          likToPageId:\'50\', services:{0:\'Haushaltswebung\', 1:\'Hand zu Hand\', 2:\'Auslagestellenverteilung\', 3:\'Mailings\'},
                                          service:\'Flyer\'}';

$output9 .= ' />

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
return $output9;
};

$output1 .= '';

$output1 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments10 = array();
$arguments10['name'] = 'schluss';
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
    mollit anim id est laborum.</p>
';
};

$output1 .= '';

$output1 .= '
';


return $output1;
}


}
#1478629184    8906      