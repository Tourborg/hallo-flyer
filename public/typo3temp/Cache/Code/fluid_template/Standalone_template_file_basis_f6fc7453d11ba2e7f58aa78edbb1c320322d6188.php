<?php
class FluidCache_Standalone_template_file_basis_f6fc7453d11ba2e7f58aa78edbb1c320322d6188 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'textBox';
$arguments1['section'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

  <!--

    Parameter:
    positon: left, right
    backgroundpicture: Dateinamen + Endung
    alt: Alternativtext für das Bild
    likToPageId: Seiten ID auf die gelinkt wird
    head: Überschrift/Kategorie
    services: Dienstleistungen der Kategorie

   -->

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments3 = array();
$arguments3['partial'] = 'clusterBox';
// Rendering Array
$array4 = array();
$array4['positon'] = 'first';
$array4['backgroundpicture'] = 'flyer-printing.jpg';
$array4['alt'] = 'Flyerverteilung';
$array4['likToPageId'] = '50';
$array4['head'] = 'Flyer';
// Rendering Array
$array5 = array();
$array5['0'] = 'Haushaltswebung';
$array5['1'] = 'Hand zu Hand';
$array5['2'] = 'Auslagestellenverteilung';
$array5['3'] = 'Mailings';
$array4['services'] = $array5;
$arguments3['arguments'] = $array4;
$arguments3['section'] = NULL;
$arguments3['optional'] = false;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments3, $renderChildrenClosure6, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['partial'] = 'clusterBox';
// Rendering Array
$array8 = array();
$array8['positon'] = '';
$array8['backgroundpicture'] = 'flyer-printing.jpg';
$array8['alt'] = 'Plakatierung';
$array8['likToPageId'] = '51';
$array8['head'] = 'Plakat';
// Rendering Array
$array9 = array();
$array9['0'] = 'Tafelplakatierung';
$array9['1'] = 'Flächenplakatierung';
$array9['2'] = 'Litfasssäulenplakatierung';
$array9['3'] = 'Großflächenplakatierung';
$array9['4'] = 'Indoorplaktierung';
$array9['5'] = 'Verkehrsmittelwerbung';
$array8['services'] = $array9;
$arguments7['arguments'] = $array8;
$arguments7['section'] = NULL;
$arguments7['optional'] = false;
$renderChildrenClosure10 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure10, $renderingContext);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments11 = array();
$arguments11['partial'] = 'clusterBox';
// Rendering Array
$array12 = array();
$array12['positon'] = 'last';
$array12['backgroundpicture'] = 'flyer-printing.jpg';
$array12['alt'] = 'Druck';
$array12['likToPageId'] = '52';
$array12['head'] = 'Druck';
// Rendering Array
$array13 = array();
$array13['0'] = 'Grafik und Layout';
$array13['1'] = 'Textgestaltung';
$array13['2'] = 'Lektorat';
$array13['3'] = 'Desktop-Publishing';
$array13['4'] = 'Erstellung von Druckvorlagen';
$array12['services'] = $array13;
$arguments11['arguments'] = $array12;
$arguments11['section'] = NULL;
$arguments11['optional'] = false;
$renderChildrenClosure14 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure14, $renderingContext);

$output0 .= '
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output15 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments16 = array();
$arguments16['name'] = 'Rahmen';
$renderChildrenClosure17 = function() {return NULL;};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output15 .= $viewHelper18->initializeArgumentsAndRender();

$output15 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments19 = array();
$arguments19['name'] = 'content';
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments22 = array();
$arguments22['partial'] = 'textBox';
$arguments22['section'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$renderChildrenClosure23 = function() {return NULL;};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '

  <!--

    Parameter:
    positon: left, right
    backgroundpicture: Dateinamen + Endung
    alt: Alternativtext für das Bild
    likToPageId: Seiten ID auf die gelinkt wird
    head: Überschrift/Kategorie
    services: Dienstleistungen der Kategorie

   -->

  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments24 = array();
$arguments24['partial'] = 'clusterBox';
// Rendering Array
$array25 = array();
$array25['positon'] = 'first';
$array25['backgroundpicture'] = 'flyer-printing.jpg';
$array25['alt'] = 'Flyerverteilung';
$array25['likToPageId'] = '50';
$array25['head'] = 'Flyer';
// Rendering Array
$array26 = array();
$array26['0'] = 'Haushaltswebung';
$array26['1'] = 'Hand zu Hand';
$array26['2'] = 'Auslagestellenverteilung';
$array26['3'] = 'Mailings';
$array25['services'] = $array26;
$arguments24['arguments'] = $array25;
$arguments24['section'] = NULL;
$arguments24['optional'] = false;
$renderChildrenClosure27 = function() {return NULL;};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure27, $renderingContext);

$output21 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments28 = array();
$arguments28['partial'] = 'clusterBox';
// Rendering Array
$array29 = array();
$array29['positon'] = '';
$array29['backgroundpicture'] = 'flyer-printing.jpg';
$array29['alt'] = 'Plakatierung';
$array29['likToPageId'] = '51';
$array29['head'] = 'Plakat';
// Rendering Array
$array30 = array();
$array30['0'] = 'Tafelplakatierung';
$array30['1'] = 'Flächenplakatierung';
$array30['2'] = 'Litfasssäulenplakatierung';
$array30['3'] = 'Großflächenplakatierung';
$array30['4'] = 'Indoorplaktierung';
$array30['5'] = 'Verkehrsmittelwerbung';
$array29['services'] = $array30;
$arguments28['arguments'] = $array29;
$arguments28['section'] = NULL;
$arguments28['optional'] = false;
$renderChildrenClosure31 = function() {return NULL;};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure31, $renderingContext);

$output21 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments32 = array();
$arguments32['partial'] = 'clusterBox';
// Rendering Array
$array33 = array();
$array33['positon'] = 'last';
$array33['backgroundpicture'] = 'flyer-printing.jpg';
$array33['alt'] = 'Druck';
$array33['likToPageId'] = '52';
$array33['head'] = 'Druck';
// Rendering Array
$array34 = array();
$array34['0'] = 'Grafik und Layout';
$array34['1'] = 'Textgestaltung';
$array34['2'] = 'Lektorat';
$array34['3'] = 'Desktop-Publishing';
$array34['4'] = 'Erstellung von Druckvorlagen';
$array33['services'] = $array34;
$arguments32['arguments'] = $array33;
$arguments32['section'] = NULL;
$arguments32['optional'] = false;
$renderChildrenClosure35 = function() {return NULL;};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure35, $renderingContext);

$output21 .= '
';
return $output21;
};

$output15 .= '';

$output15 .= '
';


return $output15;
}


}
#1478884869    9008      